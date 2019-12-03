<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'external_url'
    ];

    
    /**
     * Returns movies list where person 
     * have acted.
     */
    public function act()
    {
        return $this->belongsToMany('App\Movie', 'people_act_movies', 'person_id', 'movie_id');
        
    }

    /**
     * Returns movies list which person 
     * have directed.
     */
    public function direct()
    {
        return $this->belongsToMany('App\Movie', 'people_direct_movies', 'person_id', 'movie_id');
    }

    /**
     * Returns indexes list of field from person given
     * @param  string  $field
     */
    public function indexesList($field){
        $list = array();
        foreach ($this->$field as $token){
            $list[] = $token->id;
        }
        return $list;
    }

}
