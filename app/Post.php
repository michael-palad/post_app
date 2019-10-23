<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'published'];
    
    protected $attributes = ['published' => false];
    
    public function isPublished()
    {
        return $this->published ? 'Yes' : 'No';
    }
    
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
    
    public function scopeUnpublished($query)
    {
        return $query->where('published', false);
    }
}
