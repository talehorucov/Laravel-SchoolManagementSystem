<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    
    public function language()
    {
        return $this->belongsTo(BookLanguage::class,'book_language_id');
    }

    public function categories()
    {
        return $this->belongsToMany(BookCategory::class);
    }
}
