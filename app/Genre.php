<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    protected $fillable = [
        'description'
    ];
    
    // Returns movies objects list
    public function movies(){
        return $this->belongsToMany('App\Movie','genres_movies', 'genre_id', 'movie_id');
    }

}
