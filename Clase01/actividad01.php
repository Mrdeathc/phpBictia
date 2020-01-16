<?php
$peliculas = [
    [
        'Pelicula' => 'Inception',
        'Director' => 'Cristopher Nolan',
        'Año' => 2010,
        'PersonajePrincipal' => 'Leonardo Dicaprio'
    ],
    [
        'Pelicula' => 'The Exorcist',
        'Director' => 'William Friedkin',
        'Año' => 1973,
        'PersonajePrincipal' => 'Ellen Burstyn'
    ],
    [
        'Pelicula' => 'El pianista',
        'Director' => 'Roman Polaski',
        'Año' => 2002,
        'PersonajePrincipal' => 'Adrien Brody'
    ],
    [
        'Pelicula' => 'Midsommar',
        'Director' => 'Ari Aster',
        'Año' => 2019,
        'PersonajePrincipal' => 'florence Pugh'
    ],
    [
        'Pelicula' => 'John Wick 3',
        'Director' => 'Chad Stahelski',
        'Año' => '2019',
        'PersonajePrincipal' => 'Keanu Reeves' 
    ]
    ];

    foreach($peliculas as $pelicula){

        echo "<h1>" . $pelicula['Pelicula'] . "</h1>" . "<u>" .  $pelicula['Director'] . "</u>" . "<br>" . "<b>" . $pelicula['Año'] . "</b>" . "<br>" . "<i>" . $pelicula['PersonajePrincipal'] . "</i>"  . "<br>";
    }

?>