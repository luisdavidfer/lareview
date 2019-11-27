<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'year', 'rating', 'filepath', 'filename', 'external_url'
    ];

    // Returns genres objects list
    public function genres(){
        return $this->belongsToMany('App\Genre','genres_movies', 'movie_id', 'genre_id');
    }

    // Returns people objects list
    public function actors()
    {
        return $this->belongsToMany('App\Person', 'people_act_movies', 'movie_id', 'person_id');
    }
    public function directors()
    {
        return $this->belongsToMany('App\Person', 'people_direct_movies', 'movie_id', 'person_id');
    }
 
    // Returns fields indexes array
    public function indexesList($field){
        $list = array();
        foreach ($this->$field as $token){
            $list[] = $token->id;
        }
        return $list;
    }
}
