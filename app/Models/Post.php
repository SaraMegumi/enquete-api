<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['nome', 'enquete_id', 'url_imagem' ];

    
    public function likes(){
        return $this->hasMany(Like::class);
    }
    
    public function enquetes(){
        return $this->belongsTo(Enquete::class);
    }
}