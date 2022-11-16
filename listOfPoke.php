<!DOCTYPE html>
<html>
    <head>
        <title>Display Pokédex</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Pokédex</h1>


        <table>
            <tr>
                <th> Name </th>
                <th> Image </th>
                <th> Id </th>
            </tr>
        <?php 
            $page = file_get_contents('https://pokeapi.co/api/v2/pokemon/');
            $page = json_decode($page);
            foreach($page->results as $pokemon){
                //get the id of each pokemon
                $url = $pokemon->url;
                $values = parse_url($url);
                $pokemonId = explode('/',$values['path'])[4];

                //gets the image ("sprite") of the pokemon
                $basePokemonPage = 'https://pokeapi.co/api/v2/pokemon/';
                $pokemonPage = $basePokemonPage.$pokemonId;
                $image = file_get_contents($pokemonPage);
                $image = json_decode($image);

                ?>
                
                <tr>
                <td> <?php echo $pokemon->name; ?> </td>;
                <td> <img src=<?php echo $image->sprites->front_default; ?> /> </td>;
                <td> <?php echo $pokemonId; ?> </td>;
                </tr>
                <?php
            }
            
        ?>
    </body>
</html>
