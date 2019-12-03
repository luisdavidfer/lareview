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
        
        DB::table('movies')->insert([
            'title' => 'Legend',
            'year' => '2015',
            'rating' => '7',
            'synopsis' => 'La historia de dos hermanos gemelos gangsters, Reggie y Ronnie Kray (interpretados por Tom Hardy), dos de los criminales más famosos en la historia de Londres y el imperio del crimen organizado que crearon en los años 60.',
            'cover' => 'legend.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'legend.mp4',
            'external_url' => 'https://www.imdb.com/title/tt3569230/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'El lobo de Wall Street',
            'year' => '2013',
            'rating' => '8',
            'synopsis' => 'A mediados de los años 80, Belfort era un joven honrado que perseguía el sueño americano, pero pronto en la agencia de valores aprendió que lo más importante no era hacer ganar a sus clientes, sino ser ambicioso y ganar una buena comisión. Su enorme éxito y fortuna le valió el mote de “El lobo de Wall Street”. Dinero. Poder. Mujeres. Drogas. Las tentaciones abundaban y el temor a la ley era irrelevante. Jordan y su manada de lobos consideraban que la discreción era una cualidad anticuada; nunca se conformaban con lo que tenían.',
            'cover' => 'lobowall.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'lobowall.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0993846/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'El gran showman',
            'year' => '2017',
            'rating' => '7',
            'synopsis' => 'Biopic sobre Phineas Taylor Barnum (1810-1891), un empresario circense estadounidense que fundó el "Ringling Bros. and Barnum & Bailey Circus", conocido como "el mayor espectáculo en la tierra". ',
            'cover' => 'showman.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'showman.mp4',
            'external_url' => 'https://www.imdb.com/title/tt1485796/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'La guerra de las galaxias',
            'year' => '1977',
            'rating' => '9',
            'synopsis' => 'La princesa Leia, líder del movimiento rebelde que desea reinstaurar la República en la galaxia en los tiempos ominosos del Imperio, es capturada por las Fuerzas Imperiales, capitaneadas por el implacable Darth Vader, el sirviente más fiel del Emperador. El intrépido y joven Luke Skywalker, ayudado por Han Solo, capitán de la nave espacial "El Halcón Milenario", y los androides, R2D2 y C3PO, serán los encargados de luchar contra el enemigo e intentar rescatar a la princesa para volver a instaurar la justicia en el seno de la galaxia. ',
            'cover' => 'starwars.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'starwars.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0076759/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Toy Story',
            'year' => '1995',
            'rating' => '8',
            'synopsis' => 'Los juguetes de Andy, un niño de 6 años, temen que haya llegado su hora y que un nuevo regalo de cumpleaños les sustituya en el corazón de su dueño. Woody, un vaquero que ha sido hasta ahora el juguete favorito de Andy, trata de tranquilizarlos hasta que aparece Buzz Lightyear, un héroe espacial dotado de todo tipo de avances tecnológicos. Woody es relegado a un segundo plano. Su constante rivalidad se transformará en una gran amistad cuando ambos se pierden en la ciudad sin saber cómo volver a casa.',
            'cover' => 'toystory.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'toystory.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0114709/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'After Earth',
            'year' => '2013',
            'rating' => '4',
            'synopsis' => 'Tras una serie de cataclismos que forzaron a la humanidad a abandonar la Tierra, Nova Prime se convirtió en su nuevo hogar. Tras una larga misión fuera de ese planeta, el legendario general Cypher Raige regresa en compañía de su hijo Kitai. En medio de una tormenta de asteroides, la nave se avería y se estrella contra la Tierra, lugar desconocido y peligroso en el que todos los seres vivos no tienen más objetivo que eliminar a los hombres. Como Cypher ha resultado herido, Kitai debe recorrer ese mundo hostil en busca de la baliza de rescate. Siempre ha querido ser un soldado como su padre, y ahora se le presenta la oportunidad de cumplir su deseo. ',
            'cover' => 'afterearth.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'afterearth.mp4',
            'external_url' => 'https://www.imdb.com/title/tt1815862/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Cadena perpetua',
            'year' => '1994',
            'rating' => '9',
            'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.',
            'cover' => 'cadenaperpetua.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'cadenaperpetua.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0111161/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Una mente maravillosa',
            'year' => '2001',
            'rating' => '8',
            'synopsis' => 'Obsesionado con la búsqueda de una idea matemática original, el brillante estudiante John Forbes Nash (Russell Crowe) llega a Princeton en 1947 para realizar sus estudios de postgrado. Es un muchacho extraño y solitario, al que sólo comprende su compañero de cuarto (Paul Bettany). Por fin, Nash esboza una revolucionaria teoría y consigue una plaza de profesor en el MIT. ',
            'cover' => 'wonderfulmind.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'wonderfulmind.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0268978/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'La fiesta de las salchichas',
            'year' => '2016',
            'rating' => '6',
            'synopsis' => 'En un supermercado, los alimentos que viven allí adoran a los compradores humanos considerándolos como dioses que los llevan al "Gran Más Allá" cuando se compran. Entre los productos comestibles del supermercado está una salchicha llamada Frank, que sueña con vivir con su novia, un bollo para perritos calientes, Brenda, en el "Gran Más Allá", donde finalmente puedan consumar su relación. Los paquetes de Frank y Brenda son elegidos pero sus celebraciones son interrumpidas cuando un frasco de Miel Mostaza devuelta, que también ha sido elegido, afirma a los otros productos comestibles en la cesta de la compra que el "Gran Más Allá" no es lo que creen.',
            'cover' => 'fiestasalchichas.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'fiestasalchichas.mp4',
            'external_url' => 'https://www.imdb.com/title/tt1700841/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'IO',
            'year' => '2019',
            'rating' => '4',
            'synopsis' => 'Sam, una adolescente, es una de las últimas supervivientes de una Tierra post-apocalíptica. Con el transbordador final programado para salir del planeta, Sam debe decidir si viajar al punto de lanzamiento y unirse al resto de la humanidad; o permanecer en la Tierra, y ser un náufrago en el único hogar que ha conocido.',
            'cover' => 'io.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'io.mp4',
            'external_url' => 'https://www.imdb.com/title/tt3256226/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Terroríficamente muertos',
            'year' => '1987',
            'rating' => '7',
            'synopsis' => 'El bueno de Ash se dispone a pasar un fin de semana en el bosque con su novia. Pero todo se va al traste cuando reproducen una cinta en la que un profesor había grabado varios pasajes del Necronomicon, el Libro de los Muertos. El hechizo convoca a una fuerza demoniaca que convierte a la compañera de Ash en un monstruo ávido de carne. Sin saberlo, él y sus compañeros se disponen a pasar una noche en una cabaña en medio del bosque con un demonio en casa.',
            'cover' => 'terromuertos.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'terromuertos.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0092991/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'La mosca',
            'year' => '1986',
            'rating' => '7',
            'synopsis' => 'Un científico se utiliza a sí mismo como cobaya en la realización de un complejo experimento de teletransportación. La prueba es un éxito, pero empieza a sufrir unos extraños cambios en su cuerpo. Al mismo tiempo, descubre que dentro de la cápsula donde realizó el experimento con él se introdujo una mosca.',
            'cover' => 'lamosca.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'lamosca.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0091064/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'Robocop 3',
            'year' => '1993',
            'rating' => '3',
            'synopsis' => 'La mega corporación Omni Consumer Products continúa empeñada en crear su nuevo proyecto de ciudad, Delta City, para sustituir a la degradada Detroit. Por desgracia, los habitantes de la zona no tienen la intención de abandonar sus hogares. Para ello, la OCP pretende desalojarlos por medio de un ejército de mercenarios. Se inicia una guerrilla callejera y Robocop debe decidir de qué lado está.',
            'cover' => 'robocop3.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'robocop3.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0107978/?ref_=adv_li_tt',
            ]);
        
        DB::table('movies')->insert([
            'title' => 'La princesa prometida',
            'year' => '1987',
            'rating' => '8',
            'synopsis' => 'espués de buscar fortuna durante cinco años, Westley (Cary Elwes) retorna a su tierra para casarse con su amada, la bella Buttercup (Robin Wright Penn), a la que había jurado amor eterno. Sin embargo, para recuperarla habrá de enfrentarse a Vizzini (Wallace Shawn) y sus esbirros. Una vez derrotados éstos, tendrá que superar el peor de los obstáculos: el príncipe Humperdinck (Chris Sarandon) pretende desposar a la desdichada Buttercup, pese a que ella no lo ama, ya que sigue enamorada de Westley.',
            'cover' => 'princesaprometida.jpg',
            'filepath' => '/public/movies/',
            'filename' => 'princesaprometida.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0093779/?ref_=adv_li_tt',
            ]);
    }
}
