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
                <th> Id </th>
            </tr>
        <?php 
            $page = file_get_contents('https://pokeapi.co/api/v2/pokemon/');
            $page = json_decode($page);
            $id = 0;
            foreach($page->results as $pokemon){
                //$poke = file_get_contents($pokemon('url'));
                //$poke = json_decode($poke,true);
                ?>
                
                <tr>
                <td> <?php echo $pokemon->name; ?> </td>;
                <td> <?php echo $id; ?> </td>;
                </tr>
                <?php
                $id++;
            }
           
        ?>
    </body>
</html>
