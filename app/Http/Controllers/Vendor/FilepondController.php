<?php

namespace App\Http\Controllers\Vendor;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class FilepondController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;

            $file->storeAs($folder, $filename, 'banner');

            $banner = Banner::create([
                'post_id' => 1,
                'banner_image' => $folder.'/'.$filename
            ]);

            return response()->json(Crypt::encrypt($banner->id), 200, ['Content-Type' => 'text/plain']);
        }

        return null;
    }

    public function revert(Request $request)
    {
        $id = Crypt::decrypt(trim($request->getContent()));
        $banner = Banner::find($id);
        $content = $banner->banner_image;

        Storage::disk('banner')->delete($content);

        $banner->delete();

        return response()->json('Success', 200, ['Content-Type' => 'text/plain']);;
    }

    public function restore(Request $request)
    {
        $id = Crypt::decrypt($request->id);

        $banner = Banner::find($id);
        $content = $banner->banner_image;

        $disk = Storage::disk('banner');

        $mime = $disk->mimeType($content);

        $headers = [
            'Content-Type' => $mime,
            'Content-Length' => $disk->size($content),
            'Access-Control-Expose-Headers' => 'Content-Disposition, Content-Length, X-Content-Transfer-id',
            'Content-Disposition' => 'inline; filename="'. pathinfo($content, PATHINFO_BASENAME).'"',
        ];

        return $disk->download($content, pathinfo($content, PATHINFO_BASENAME), $headers);
    }
}
