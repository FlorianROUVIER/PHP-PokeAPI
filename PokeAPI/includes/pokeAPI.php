<?php

// All Pokemons fetch with PokeAPI

// Fetch Infernape #392
$id_392 ='http://pokeapi.co/api/v2/pokemon/392';
$data = file_get_contents($id_392);
$pokemon_392 = json_decode($data);


// Fetch Staraptor  #398
$id_398 ='http://pokeapi.co/api/v2/pokemon/398';
$data = file_get_contents($id_398);
$pokemon_398 = json_decode($data);

// Fetch Magnezone #462
$id_462 ='http://pokeapi.co/api/v2/pokemon/462';
$data = file_get_contents($id_462);
$pokemon_462 = json_decode($data);


// Fetch Gyrados #130
$id_130 ='http://pokeapi.co/api/v2/pokemon/130';
$data = file_get_contents($id_130);
$pokemon_130 = json_decode($data);


// Fetch Garchomp #445
$id_445 ='http://pokeapi.co/api/v2/pokemon/445';
$data = file_get_contents($id_445);
$pokemon_445 = json_decode($data);


// Fetch Giratina origin form #487
$id_487 ='https://pokeapi.co/api/v2/pokemon/giratina-origin';
$data = file_get_contents($id_487);
$pokemon_487 = json_decode($data);




