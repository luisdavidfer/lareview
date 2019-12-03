<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Movie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'year', 'rating', 'synopsis', 'filepath', 'filename', 'external_url'
    ];

    /**
     * Returns movie genres list  
     */
    public function genres(){
        return $this->belongsToMany('App\Genre','genres_movies', 'movie_id', 'genre_id');
    }

    /**
     * Returns people list who 
     * acted in the movie.
     */
    public function actors()
    {
        return $this->belongsToMany('App\Person', 'people_act_movies', 'movie_id', 'person_id');
    }

    /**
     * Returns people list who 
     * directed in the movie.
     */
    public function directors()
    {
        return $this->belongsToMany('App\Person', 'people_direct_movies', 'movie_id', 'person_id');
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

    /**
     * Returns related movies list
     * Param $n will be the number of movies
     * returned
     * @param int $n  
     */
    public function related($n){
        $related = array();
        if(count($this->genres) > 0){
            // Query building
            $sql = "SELECT DISTINCT movies.* FROM movies INNER JOIN genres_movies ON movies.id = genres_movies.movie_id WHERE NOT movies.id = ".$this->id." AND (";
            /**
             * Iterator $i to save the movie genres in where clauses.
             * First loop assign first condition while the next ones 
             * assign OR clauses to where.
             */
            $i = 0;
            // Query where clauses
            $genres = $this->indexesList("genres"); // returns id's list from the movie genres
            foreach ($genres as $id) {
                if ($i == 0) {
                    $sql .= "genres_movies.genre_id = $id";
                }else{
                    $sql .= " OR genres_movies.genre_id = $id";
                }
                $i++;
            }
            // Query random order and limit to $n parameter
            $sql .= ") ORDER BY RAND() LIMIT $n;";
            $related = DB::select(DB::raw($sql));
        }
        return $related;
    }

}