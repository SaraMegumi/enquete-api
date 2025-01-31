<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{

    protected $fillable = ['nome'];
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
}