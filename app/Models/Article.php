<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];

    //Relación de uno a muchos inversa (article-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación de uno a muchos (article-comment)
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    //Relación de uno a muchos inversa (category-article)
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
