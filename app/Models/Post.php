<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_posts')->withTimestamps();
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags')->withTimestamps();
    }

    public function scopeActive($query) {
        return $query->where('status', true);
    }

}
