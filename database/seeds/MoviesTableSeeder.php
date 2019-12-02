<?php

use Illuminate\Database\Seeder;


class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->truncate();
        
        DB::table('movies')->insert([
            'title' => 'Terminator: Destino Oscuro',
            'year' => '2019',
            'rating' => '6',
            'synopsis' => 'Sarah Connor (Linda Hamilton) y Grace (Mackenzie Davis), una híbrido de cyborg y humano, deberán proteger a una joven del Rev-9, un nuevo Terminator que viene del futuro. (FILMAFFINITY)',
            'cover' => 'terminator.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'terminator.mp4',
            'external_url' => 'https://www.imdb.com/title/tt6450804/?ref_=inth_ov_i',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Joker',
            'year' => '2019',
            'rating' => '8',
            'synopsis' => 'Arthur Fleck (Phoenix) vive en Gotham con su madre, y su única motivación en la vida es hacer reír a la gente. Actúa haciendo de payaso en pequeños trabajos, pero tiene problemas mentales que hacen que la gente le vea como un bicho raro. Su gran sueño es actuar como cómico delante del público, pero una serie de trágicos acontecimientos le hará ir incrementando su ira contra una sociedad que le ignora.',
            'cover' => 'joker.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'joker.mp4',
            'external_url' => 'https://www.imdb.com/title/tt7286456/',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Avatar',
            'year' => '2009',
            'rating' => '8',
            'synopsis' => 'Año 2154. Jake Sully (Sam Worthington), un ex-marine condenado a vivir en una silla de ruedas, ha sido designado para ir a Pandora, donde algunas empresas están extrayendo un mineral extraño que podría resolver la crisis energética de la Tierra. Para contrarrestar la toxicidad de la atmósfera de Pandora, se ha creado el programa Avatar, gracias al cual los seres humanos mantienen sus conciencias unidas a un avatar: un cuerpo biológico controlado de forma remota que puede sobrevivir en el aire letal. Su misión consiste en infiltrarse entre los Na vi, que se han convertido en el mayor obstáculo para la extracción del mineral.',
            'cover' => 'avatar.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'avatar.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0499549/?ref_=fn_al_tt_2',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Blade Runner 2049',
            'year' => '2017',
            'rating' => '8',
            'synopsis' => 'Treinta años después de los eventos del primer film, un nuevo blade runner, K (Ryan Gosling) descubre un secreto profundamente oculto que podría acabar con el caos que impera en la sociedad. El descubrimiento de K le lleva a iniciar la búsqueda de Rick Deckard (Harrison Ford), un blade runner al que se le perdió la pista hace 30 años. ',
            'cover' => 'bladerunner.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'bladerunner2049.mp4',
            'external_url' => 'https://www.imdb.com/title/tt1856101/?ref_=ttls_li_tt',
            ]);
        
    }
}
