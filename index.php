<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Estilos/bootstrap.min.css">
        <script src="../BOOTSTRAPP/js/bootstrap.min.js"></script>
        <link href="Estilos/Estilos.css" rel="stylesheet">
        <title>BATALLA</title>
    </head>
    <body>


    
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="text-transform: uppercase" class="mt-5 text-warning text-center">BATALLAS POKEDIGI</h1>
                    <br><br>
                    <form action="" method="post">
                        <div class="row ">
                            <div class="col-md-6">
                                <select name="pok1" class="form-select" aria-label="Default select example">
                                    <option selected>ELIGE TU POKEDIGI #1</option>
                                    <option value="pikachu">PIKACHU</option>
                                    <option value="agumon">AGUMON</option>
                                    <option value="guilmon">GUILMON</option>
                                    <option value="wancarlos">WANCARLOS</option>
                                    <option value="charizard">CHARIZARD</option>
                                </select>                            
                            </div>

                            <div class="col-md-6">
                            <select name="pok2" class="form-select" aria-label="Default select example">
                                    <option selected>ELIGE TU POKEDIGI #2</option>
                                    <option value="pikachu">PIKACHU</option>
                                    <option value="agumon">AGUMON</option>
                                    <option value="guilmon">GUILMON</option>
                                    <option value="wancarlos">WANCARLOS</option>
                                    <option value="charizard">CHARIZARD</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="container">
                            <div class="col-md-6">
                                <button name="nombre" type="submit" class="btn btn-primary">INICIAR BATALLA</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 

        <br>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <?php
                            require_once './Model/Pokemon.php';
                            if(isset($_POST['nombre'])){
                                $pok1 = new Pokemon($_POST['pok1']);
                                if($pok1->get_nombre()=='pikachu'){
                                    ?><img src="IMG/PIKACHU.jpg" class="card-img-top" alt="">                    
                        <?php
                                }else if($pok1->get_nombre()=='agumon'){
                                    ?><img src="IMG/AGUMON.jpg" class="card-img-top" alt="">
                        <?php
                                }else if($pok1->get_nombre()=='guilmon'){
                                    ?><img src="IMG/guilmon2.jpg" class="card-img-top" alt="">
                        <?php
                                }else if($pok1->get_nombre()=='wancarlos'){
                                    ?><img src="IMG/wancarlos.jpg" class="card-img-top" alt="">
                        <?php
                                }else if($pok1->get_nombre()=='charizard'){
                                    ?><img src="IMG/CHARYZARD.jpg" class="card-img-top" alt="">
                        <?php
                                }else{
                                    echo 'ESE POKEMON NO EXISTE!!';
                                }
                            }
                        ?>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $pok1->get_nombre(); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" >
                        <?php
                            require_once './Model/Pokemon.php';
                            if(isset($_POST['nombre'])){
                                $pok2 = new Pokemon($_POST['pok2']);
                                if($pok2->get_nombre()=='pikachu'){
                                    ?><img src="IMG/PIKACHU.jpg" class="card-img-top" alt="">                    
                        <?php
                                }else if($pok2->get_nombre()=='agumon'){
                                    ?><img src="IMG/AGUMON.jpg" class="card-img-top" alt="">
                        <?php
                                }else if($pok2->get_nombre()=='guilmon'){
                                    ?><img src="IMG/guilmon2.jpg" class="card-img-top" alt="">
                        <?php
                                }else if($pok2->get_nombre()=='wancarlos'){
                                    ?><img src="IMG/wancarlos.jpg" class="card-img-top" alt="">
                        <?php
                                }else if($pok2->get_nombre()=='charizard'){
                                    ?><img src="IMG/CHARYZARD.jpg" class="card-img-top" alt="">
                        <?php
                                }else{
                                    echo 'ESE POKEMON NO EXISTE!!';
                                }
                            }
                        ?>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $pok2->get_nombre(); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <?php
                    while ($pok1->get_vida() > 0 && $pok2->get_vida() > 0) {
                        ?>
                        <?php //INICIO DE LA BATALLA CON LOS NOMBRES Y CANTIDAD DE VIDA?>
                        <div class="card" style="width: 600px; ">
                            <div class="card-header" style="background-color: light">
                                <h4 class="text-black"><?php echo "Oponentes<br>"; ?></h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <?php
                                    echo $pok1->get_nombre() . "<br>";
                                    echo $pok1->get_vida() . " de vida<br>";
                                    ?>
                                </li>
                                <li class="list-group-item">
                                    <?php
                                    echo $pok2->get_nombre() . "<br>";
                                    echo $pok2->get_vida() . " de vida";
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <br>

                        <?php //TURNOS DE ATAQUES PARA EL PRIMER POKEMON ?>
                        <div class="card" style="width: 600px;">
                            <div class="card-header" style="background-color: ligth">
                                <h4 class="text-black"><?php echo "Turno de ataque para " . $pok1->get_nombre() . "<br>"; ?></h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <?php
                                    $pok2->perderVida($pok1->atacar());
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <br>

                        <?php //COMPARAMOS PARA VER SI EL SEGUNDO POKEMON FUE DERROTADO ?>
                        <?php
                        if ($pok2->get_vida() <= 0) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php
                                echo $pok2->get_nombre() . " a perdido la batalla";
                                ?>
                            </div>
                            <br>
                            <?php
                            //SE MUESTRA LA REDUCCION DE VIDA
                        } else {
                            ?>
                            <div class="card" style="width: 600px;">
                                <div class="card-header" style="background-color: light">
                                    <h4 class="text-black"><?php echo "Oponentes<br>"; ?></h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <?php
                                        echo $pok1->get_nombre() . "<br>";
                                        echo $pok1->get_vida() . " de vida<br>";
                                        ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php
                                        echo $pok2->get_nombre() . "<br>";
                                        echo $pok2->get_vida() . " de vida<br>";
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <br>

                            <?php //ATAQUE DEL SEGUNDO POKEMON ?>
                            <div class="card" style="width: 600px;">
                                <div class="card-header" style="background-color: light">
                                    <h4 class="text-black"><?php echo "Turno de ataque para " . $pok2->get_nombre() . "<br>";?></h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <?php
                                        $pok1->perderVida($pok2->atacar());
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <br>

                            <?php
                            //COMPARAMOS SI EL PRIMER POKEMON FUE DERROTADO
                            if ($pok1->get_vida() <= 0) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php
                                    echo $pok1->get_nombre() . " a perdido la batalla";
                                    ?>
                                </div>
                                <br>
                                <?php
                            }
                        }
                        ?>
                        <?php
                    }
                    ?>

                    <div class="alert alert-primary" role="alert">
                        <?php
                        echo "FIN DE LA BATALLA";
                        ?>
                    </div>

                </div>
            </div>
        </div>
        
    </body>
</html>
