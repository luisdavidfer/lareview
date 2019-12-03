<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description'
    ];
    
    /**
     * Returns movie list of the genre  
     */
    public function movies(){
        return $this->belongsToMany('App\Movie','genres_movies', 'genre_id', 'movie_id');
    }

}
