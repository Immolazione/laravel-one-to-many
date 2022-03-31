<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
