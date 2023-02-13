<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model['slug'] = Str::slug(request()->name, '-');
        });

        self::updating(function($model){
            $model['slug'] = Str::slug(request()->name, '-');
        });
    }
}
