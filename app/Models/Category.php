<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];

    //Relación de uno a muchos (article-category)
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
