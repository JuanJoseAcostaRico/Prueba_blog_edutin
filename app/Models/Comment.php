<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];

    //Relación de uno a muchos inversa (comment-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación de uno a muchos inversa (comment-article)
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
