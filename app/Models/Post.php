<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'title', 'slug', 'content'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model['slug'] = fn_slug(request()->title);
        });

        self::updating(function($model){
            $model['slug'] = fn_slug(request()->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }
}
