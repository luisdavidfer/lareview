<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name', 'external_url'
    ];

    // Returns movies objects list
    public function act()
    {
        return $this->belongsToMany('App\Movie', 'people_act_movies', 'person_id', 'movie_id');
        
    }

    public function direct()
    {
        return $this->belongsToMany('App\Movie', 'people_direct_movies', 'person_id', 'movie_id');
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
