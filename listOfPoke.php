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
            /*
            $names = array();
            for ($i=0;$i<(strlen($page)-5);$i++){
                if ($page[$i]=="n" && $page[$i+1]=="a" && $page[$i+2]=="m" && $page[$i+3]=="e"){
                    $intNextQuote = findNextQuote($i+8,$page);
                    printName($i,$intNextQuote,$page);
                    echo $nextName;
                    echo "EEEEE";
                    echo $i;
                    echo "     ";
                    echo $intNextQuote;
                    echo "     ";
                    echo $page[$i+5];
                    echo $page[$i+6];
                    echo $page[$i+7];
                    echo $page[$i+8];
                    echo $page[$i+9];
                    echo $page[$i+10];
                    echo $page[$i+11];
                    echo $page[$i+12];
                    echo $page[$i+13];
                    echo $page[$i+14];
                    echo "     ";
                    echo $page[$intNextQuote-5];
                    echo $page[$intNextQuote-4];
                    echo $page[$intNextQuote-3];
                    echo $page[$intNextQuote-2];
                    echo $page[$intNextQuote-1];
                    echo $page[$intNextQuote];
                    echo "BBBB";
                  //  echo"\n";
                }
            }

            function printName($i,$j,$page){
                for ($k=$i;$k<$j;$k++){
                    echo $page[$k];
                }
            }
            
            function findNextQuote($i,$page){
                for ($j=$i;$j<strlen($page);$j++){
                    if($page[$j]=="\""){
                        return $j;
                    }
                }
            }
            */
        ?>
    </body>
</html>