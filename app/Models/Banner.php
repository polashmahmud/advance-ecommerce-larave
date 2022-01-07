<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'photo', 'status', 'condition'];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($banner) {
            $banner->slug = $banner->initSlug($banner->title);
            $banner->save();
        });
    }

    private function initSlug($title)
    {
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-1";
        }

        return $slug;
    }
}
