<?php


include './includes/config.php';
include './includes/header.php';
include './includes/pokeAPI.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

   
    <table>
        <tr class ="column_1">
            
             <!-- First Pokémon datas / 1st column  -->

             <td class="pokemon_cell">

                <div class="id392_infos">
                    <h4>ID</h4> <p><?= ($pokemon_392->id) ?></p>
                    <h4>Height</h4> <p><?= ($pokemon_392->height) ?>m</p>
                    <h4>Weight</h4> <p><?= ($pokemon_392->weight) ?>kg</p>
                    <h4>Ability</h4> <p><?= ucfirst($pokemon_392->abilities[0]->ability->name).'/'.ucfirst($pokemon_392->abilities[1]->ability->name)  ?></p>   
                </div>

                <img class="js_hover" src="<?= $pokemon_392->sprites->front_default ?>">
                <div class="pokemon_name">
                    <h4><?= ucfirst($pokemon_392->species->name) ?></h4>
                </div>
                <div class="pokemon_first_type">
                    <img src="images/Type_Fire.gif" alt="Fire type">
                </div>
                <div class="pokemon_second_type">
                    <img src="images/Type_Fighting.gif" alt="Fighting type"> 
                </div>
                <div class="pokemon_moves">
                    <p><img src="images/Type_Fighting.gif" alt="Fighting type"><?= ucfirst($pokemon_392->moves[62]->move->name) ?> </p>
                    <p><img src="images/Type_Ground.gif" alt="Ground type"><?= ucfirst($pokemon_392->moves[15]->move->name) ?> </p>
                    <p><img src="images/Type_Fire.gif" alt="Fire type"><?= ucfirst($pokemon_392->moves[65]->move->name) ?> </p>
                    <p><img src="images/Type_Electric.gif" alt="Electric type"><?= ucfirst($pokemon_392->moves[1]->move->name)  ?> </p> 
                </div>  

            </td>

            <!-- Second Pokémon datas / 1st column  -->

             <td class="pokemon_cell">
                    
                 <div class="id398_infos">
                    <h4>ID</h4> <p><?= ($pokemon_398->id) ?></p>
                    <h4>Height</h4> <p><?= ($pokemon_398->height) ?>m</p>
                    <h4>Weight</h4> <p><?= ($pokemon_398->weight) ?>kg</p>
                    <h4>Ability</h4> <p><?= ucfirst($pokemon_398->abilities[0]->ability->name).'/'.ucfirst($pokemon_398->abilities[1]->ability->name)  ?></p>   
                </div>

                <img class="js_hover2" src="<?= $pokemon_398->sprites->front_default ?>">
                <div class="pokemon_name">
                    <h4><?= ucfirst($pokemon_398->species->name) ?></h4>
                </div>
                <div class="pokemon_first_type">
                    <img src="images/Type_Normal.gif" alt="Normal type">
                </div>
                <div class="pokemon_second_type">
                    <img src="images/Type_Flying.gif" alt="Flying type"> 
                </div>
                <div class="pokemon_moves">
                    <p><img src="images/Type_Flying.gif" alt="Flying type"><?= ucfirst($pokemon_398->moves[2]->move->name) ?></p>
                    <p><img src="images/Type_Fighting.gif" alt="Fighting type"><?= ucfirst($pokemon_398->moves[42]->move->name) ?></p>
                    <p><img src="images/Type_Flying.gif" alt="Flying type"><?= ucfirst($pokemon_398->moves[43]->move->name) ?></p>
                    <p><img src="images/Type_Steel.gif" alt="Steel type"><?= ucfirst($pokemon_398->moves[21]->move->name)  ?></p> 
                </div>

            </td>

            <!-- Third Pokémon datas / 1st column  -->

            <td class="pokemon_cell">

               <div class="id462_infos">
                    <h4>ID</h4> <p><?= ($pokemon_462->id) ?></p>
                    <h4>Height</h4> <p><?= ($pokemon_462->height) ?>m</p>
                    <h4>Weight</h4> <p><?= ($pokemon_462->weight) ?>kg</p>
                    <h4>Ability</h4> <p><?= ucfirst($pokemon_462->abilities[0]->ability->name).'/'.ucfirst($pokemon_462->abilities[1]->ability->name)  ?></p>   
                </div>

                <img class="js_hover3"src="<?= $pokemon_462->sprites->front_default ?>">
                <div class="pokemon_name">
                <h4><?= ucfirst($pokemon_462->species->name) ?></h4>
                </div>
                <div class="pokemon_first_type">
                    <img src="images/Type_Electric.gif" alt="Electric type">
                </div>
                <div class="pokemon_second_type">
                    <img src="images/Type_Steel.gif" alt="Steel type">
                </div>
                <div>

                </div>

                <div class="pokemon_moves">
                    <p><img src="images/Type_Electric.gif" alt="Electric type"><?= ucfirst($pokemon_462->moves[7]->move->name) ?></p>
                    <p><img src="images/Type_Steel.gif" alt="Steel type"><?= ucfirst($pokemon_462->moves[22]->move->name) ?></p>
                    <p><img src="images/Type_Electric.gif" alt="Electric type"><?= ucfirst($pokemon_462->moves[50]->move->name) ?></p>
                    <p><img src="images/Type_Normal.gif" alt="Normal type"><?= ucfirst($pokemon_462->moves[3]->move->name)  ?></p> 
                </div>

            </td>

        </tr>
        <tr class="column_2">

            <!-- First Pokémon datas / 2nd column -->

             <td class="pokemon_cell">

                <div class="id130_infos">
                    <h4>ID</h4> <p><?= ($pokemon_130->id) ?></p>
                    <h4>Height</h4> <p><?= ($pokemon_130->height) ?>m</p>
                    <h4>Weight</h4> <p><?= ($pokemon_130->weight) ?>kg</p>
                    <h4>Ability</h4> <p><?= ucfirst($pokemon_130->abilities[0]->ability->name).'/'.ucfirst($pokemon_130->abilities[1]->ability->name)  ?></p>   
                </div>

                <img class="js_hover4" src="<?= $pokemon_130->sprites->front_default ?>">
                <div class="pokemon_name">
                    <h4><?= ucfirst($pokemon_130->species->name) ?></h4>
                </div>
                <div class="pokemon_first_type">
                    <img src="images/Type_Water.gif" alt="Water type">
                </div>
                <div class="pokemon_second_type">
                    <img src="images/Type_Flying.gif" alt="Flying type"> 
                </div>
                <div class="pokemon_moves">
                    <p><img src="images/Type_Water.gif" alt="Water type"><?= ucfirst($pokemon_130->moves[12]->move->name) ?></p>
                    <p><img src="images/Type_Water.gif" alt="Water type"><?= ucfirst($pokemon_130->moves[11]->move->name) ?></p>
                    <p><img src="images/Type_Ground.gif" alt="Ground type"><?= ucfirst($pokemon_130->moves[22]->move->name) ?></p>
                    <p><img src="images/Type_Normal.gif" alt="Normal type"><?= ucfirst($pokemon_130->moves[73]->move->name)  ?></p> 
                </div>
                

            </td>

            <!-- Second Pokémon datas / 2nd column -->

             <td class="pokemon_cell">
                <div class="id445_infos">
                    <h4>ID</h4> <p><?= ($pokemon_445->id) ?></p>
                    <h4>Height</h4> <p><?= ($pokemon_445->height) ?>m</p>
                    <h4>Weight</h4> <p><?= ($pokemon_445->weight) ?>kg</p>
                    <h4>Ability</h4> <p><?= ucfirst($pokemon_445->abilities[0]->ability->name).'/'.ucfirst($pokemon_445->abilities[1]->ability->name)  ?></p>   
                </div>
                <img class="js_hover5" src="<?= $pokemon_445->sprites->front_default ?>">
                <div class="pokemon_name">
                    <h4><?= ucfirst($pokemon_445->species->name) ?></h4>
                </div>
                <div class="pokemon_first_type">
                    <img src="images/Type_Dragon.gif" alt="Dragon type">
                </div>
                <div class="pokemon_second_type">
                    <img src="images/Type_Ground.gif" alt="Ground type"> 
                </div>
                <div class="pokemon_moves">
                    <p><img src="images/Type_Ground.gif" alt="Ground type"><?= ucfirst($pokemon_445->moves[12]->move->name) ?></p>
                    <p><img src="images/Type_Fire.gif" alt="Fire type"><?= ucfirst($pokemon_445->moves[7]->move->name) ?></p>
                    <p><img src="images/Type_Dragon.gif" alt="Dragon type"><?= ucfirst($pokemon_445->moves[49]->move->name) ?></p>
                    <p><img src="images/Type_Dragon.gif" alt="Dragon type"><?= ucfirst($pokemon_445->moves[61]->move->name)  ?></p> 
                </div>

            </td>

            <!-- Third Pokémon datas / 2nd column -->
            
             <td class="pokemon_cell">
                <div class="id487_infos">
                    <h4>ID</h4> <p><?= ($pokemon_487->id) ?></p>
                    <h4>Height</h4> <p><?= ($pokemon_487->height) ?>m</p>
                    <h4>Weight</h4> <p><?= ($pokemon_487->weight) ?>kg</p>
                    <h4>Ability</h4> <p><?= ucfirst($pokemon_487->abilities[0]->ability->name) ?></p>   
                </div>
             <img class="js_hover6" src="<?= $pokemon_487->sprites->front_default ?>">
                <div class="pokemon_name">
                    <h4><?= ucfirst($pokemon_487->species->name) ?></h4>
                </div>
                <div class="pokemon_first_type">
                    <img src="images/Type_Dragon.gif" alt="Dragon type">
                </div>
                <div class="pokemon_second_type">
                    <img src="images/Type_Ghost.gif" alt="Ghost type"> 
                </div>
                <div class="pokemon_moves">
                    <p><img src="images/Type_Dragon.gif" alt="Dragon type"><?= ucfirst($pokemon_487->moves[52]->move->name) ?></p>
                    <p><img src="images/Type_Ghost.gif" alt="Ghost type"><?= ucfirst($pokemon_487->moves[76]->move->name) ?></p>
                    <p><img src="images/Type_Normal.gif" alt="Normal type"><?= ucfirst($pokemon_487->moves[4]->move->name) ?></p>
                    <p><img src="images/Type_Fighting.gif" alt="Fighting type"><?= ucfirst($pokemon_487->moves[60]->move->name)  ?></p> 
                </div>
            </td>
        </tr>
    </table>

    <div class="rules">
        <p>My favourite team in Pokemon Platinum.
            <br>Click on Pokemons to see their infos !
            <br>Made with PokeAPI 
            <br>© 2020 Pokémon. TM, ® Nintendo.
        </p>
    </div>
   
</body>

<script src="script.js"></script>
</html>