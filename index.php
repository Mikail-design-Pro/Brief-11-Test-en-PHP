<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Site d'experimentation" />
        <meta name="author" content="Mikail" />

        <title>Mikail_Tiki-Tacos_DESIGNER</title>


        <link rel="stylesheet" href="assets/css/style.css" />

    </head>

    <body>
        <header>
            <h1></h1>
        </header>

        <!-- EXO -->

        <article>
            <!-- Section 0 Les Variables -->
            <section>
                <h2>Section 0 Les Variables</h2>

                <ol>

                    <!-- EXO 1 -->
                    <h3>Exo 1</h3>
                    <p>
                        Créer une variable : «nom» et l'initialiser avec la valeur de votre choix.
                        Aficher son contenu.
                    </p>
                    <li>
                        <?php
                        $nom = "Kalkan";
                        echo $nom;
                        ?>
                    </li>

                    <!-- EXO 2 -->
                    <h3>Exo 2</h3>
                    <p>
                        Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
                        Attention age est de type entier. Aficher leur contenu.
                    </p>
                    <li>
                        <?php
                        $nom = "Kalkan";
                        $prenom = "Mikail";
                        $age = 23;
                        echo $nom . " " . $prenom . " " . $age . " ans";
                        ?>
                    </li>

                    <!-- EXO 3 -->
                    <h3>Exo 3</h3>
                    <p>
                        Créer une variable «km» . L'initialiser à 1. Aficher son contenu. Changer sa valeur par 3.
                        Aficher son contenu. Changer sa valeur par 125. Aficher son contenu.
                    </p>
                    <li>
                        <?php
                        $km = 1;
                        echo $km . ", "  ;
                        $km = 3;
                        echo $km . ", ";
                        $km = 125;
                        echo $km;
                        ?>
                    </li>

                    <!-- EXO 4 -->
                    <h3>Exo 4</h3>
                    <p>
                        Créer une variable de type string, une variable de type int, une variable de type float,
                        une variable de type booléan et les initialiser avec une valeur de votre choix.
                        Les aficher.
                    </p>
                    <li>
                        <?php
                        $varString = "String";
                        $varInt  = 42;
                        $varFloat= 3.14;
                        $varBool = true;
                        
                        echo $varString . ", " . $varInt . ", " . $varFloat . ", " . $varBool;
                        ?>
                    </li>

                    <!-- EXO 5 -->
                    <h3>Exo 5</h3>
                    <p>
                        Créer une variable de type int. L'initialiser avec rien. Aficher sa valeur.
                        Donner une valeur à cette variable et l'aficher.
                    </p>
                    <li>
                        <?php
                        $initInt = null;
                        echo $initInt .",    ";

                        $initInt = 12;
                        echo $initInt;

                        ?>
                    </li>

                    <!-- EXO 6 -->
                    <h3>Exo 6</h3>
                    <p>
                        Créer une variable «nom» et l'initialiser avec la valeur de votre choix.
                        Aficher : "Bonjour" + nom + ", comment vas tu ?".
                    </p>
                    <li>
                        <?php
                        $nom = "Formateur";
                        echo "Bonjour " . $nom . ", comment vas tu ?";
                        ?>
                    </li>


                    <!-- EXO 7 -->
                    <h3>Exo 7</h3>
                    <p>
                        Créer trois variables «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
                        Attention age est de type entier. Acher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".
                    </p>
                    <li>
                        <?php
                        $nom = "Kalkan";
                        $prenom = "Mikail";
                        $age = 23;
                        echo "Bonjour ". $nom . " " . $prenom . ", tu as " . $age . " ans";
                        ?>
                    </li>

                    <!-- EXO 8 -->
                    <h3>Exo 8</h3>
                    <p>
                        Créer 3 variables.
                        Dans la première mettre l'adition qui donne le résultat 7.
                        Dans la deuxième mettre la multiplication qui donne le résultat 100.
                        Dans la troisième mettre la division qui donne le résultat 5.
                        Acher le contenu des variables.
                    </p>
                    <li>
                        <?php
                        $calculAddition = 3 + 4;
                        $calculMultiplication = 10 * 10;
                        $calculDivision = 30 / 6;

                        echo "Resultat Addition: ". $calculAddition . ", Resultat Multiplication: " . $calculMultiplication . ", Resultat Division: " . $calculDivision;
                        ?>
                    </li>
                </ol>

            </section>



            <!-- Section 1 Les Boucles -->
            <section>
                <h2>Section 1 Les Boucles</h2>

                <ol>
                    <!-- EXO 1 -->
                    <h3>Exo 1</h3>
                    <p>
                        Créer une variable et l'initialiser à 0.
                        Tant que cette variable n'atteint pas 10 :
                        => l'aficher => incrémenter de 1
                    </p>
                    <li>
                        <?php
                        $varInt = "0";

                        while ( $varInt != 10 ){
                            $varInt++;
                            echo " ". $varInt . " ";
                        }
                        
                        ?>
                    </li>

                    <!-- EXO 2 -->
                    <h3>Exo 2</h3>
                    <p>
                        Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
                        Tant que la première variable n'est pas supérieur à 20 :
                        => multiplier la première variable avec la deuxième
                        => aficher le résultat
                        => incrémenter la première variable
                    </p>
                    <li>
                        <?php
                        $varSecondInt = "10";

                        for ($varInt= 0; $varInt < 20; $varInt++){
                            $varResult = $varInt * $varSecondInt;
                            echo " ". $varResult . " ";
                        }
                        
                        ?>
                    </li>

                    <!-- EXO 3 -->
                    <h3>Exo 3</h3>
                    <p>
                        Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
                        Tant que la première variable n'est pas inférieur ou égale à 10 :
                        => soustraire la première variable avec la deuxième
                        => acher le résultat
                        => décrémenter la première variable
                    </p>
                    <li>
                        <?php
                        $varInt = "100";
                        $varSecondInt = "10";

                        while ( $varInt >= 10 ){
                            $varResult = $varInt - $varSecondInt;
                            echo " ". $varResult . " ";
                            $varInt -= $varSecondInt;
                        }
                        
                        ?>
                    </li>

                    <!-- EXO 4 -->
                    <h3>Exo 4</h3>
                    <p>
                        Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 :
                        => l'aficher
                        => l'incrementer de la moitié de sa valeur
                    </p>
                    <li>
                        <?php
                        $varInt = "1";

                        while ( $varInt <= 10 ){
                            echo " ". $varInt . " ";
                            $varInt += $varInt / 2;
                        }
                        
                        ?>
                    </li>

                    <!-- EXO 5 -->
                    <h3>Exo 5</h3>
                    <p>
                        En allant de 1 à 15 avec un pas de 1, aficher le message On y arrive presque...
                    </p>
                    <li>
                        <?php
                        
                        for($varInt = 1; $varInt <= 15; $varInt+=1 ){
                            echo "On y arrive presque... " . $varInt . "fois <br  />";
                        }                   
                        ?>
                    </li>

                    <!-- EXO 6 -->
                    <h3>Exo 6</h3>
                    <p>
                        En allant de 20 à 0 avec un pas de 1, aficher le message C'est presque bon...
                    </p>
                    <li>
                        <?php
                        
                        for($varInt = 20; $varInt >= 0; $varInt-=1 ){
                            echo "C'est presque bon... " . $varInt . "fois <br  />";
                        }                   
                        ?>
                    </li>

                    <!-- EXO 7 -->
                    <h3>Exo 7</h3>
                    <p>
                        En allant de 1 à 100 avec un pas de 15, aficher le message On tient le bon bout...
                    </p>
                    <li>
                        <?php
                        for($varInt = 1; $varInt <= 100; $varInt+=15 ){
                            echo "On tient le bon bout... <br />";
                        }                   
                        ?>
                    </li>

                    <!-- EXO 8 -->
                    <h3>Exo 8</h3>
                    <p>
                        En allant de 200 à 0 avec un pas de 12, aficher le message Enfin ! ! !
                    </p>
                    <li>
                        <?php
                        
                        for($varInt = 200; $varInt >= 0; $varInt-=12 ){
                            echo "Enfin ! ! ! <br  />";
                        }                   
                        ?>
                    </li>
                </ol>

            </section>


            <!-- Section 2 Les Fonctions -->
            <section>
                <h2>Section 2 Les Fonctions</h2>

                <ol>
                    <!-- EXO 1 -->
                    <h3>Exo 1</h3>
                    <p>
                        Faire une fonction qui retourne true
                    </p>
                    <li>
                        <?php

                        function vrais($data){
                            $data = true;
                            echo($data);
                        };

                        vrais(30 > 50);
                        ?>
                    </li>

                    <!-- EXO 2 -->
                    <h3>Exo 2</h3>
                    <p>
                        Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
                    </p>
                    <li>
                        <?php

                        function duplication($data){
                            echo($data);
                        };

                        duplication(10);
                        ?>
                    </li>

                    <!-- EXO 3 -->
                    <h3>Exo 3</h3>
                    <p>
                        Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit
                        la concaténation de ces deux chaines.
                    </p>
                    <li>
                        <?php

                        function concatenation($firstIteration , $secondIteration ){
                            echo($firstIteration . " " . "<strong>" . $secondIteration . "</strong>");
                        };

                        concatenation("Bonjour", "Patrick");
                        ?>
                    </li>

                    <!-- EXO 4 -->
                    <h3>Exo 4</h3>
                    <p>
                        Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
                        => Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
                        => Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
                        => Les deux nombres sont identiques si les deux nombres sont égaux
                    </p>
                    <li>
                        <?php

                        function plusGrand($firstNumber , $secondNumber ){
                            if($firstNumber > $secondNumber){
                                echo "Le premier nombre est plus grand";
                            }elseif($firstNumber == $secondNumber){
                                echo " Les deux nombres sont identiques";
                            }else{
                                echo "Le premier nombre est plus petit";
                            }
                        };

                        plusGrand(4, 2);
                        ?>
                    </li>

                    <!-- EXO 5 -->
                    <h3>Exo 5</h3>
                    <p>
                        Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit
                        la concaténation de ces deux paramètres.
                    </p>
                    <li>
                        <?php
                        concatenation("Zinedine Zidane", 10);
                        ?>
                    </li>

                    <!-- EXO 6 -->
                    <h3>Exo 6</h3>
                    <p>
                        Faire une fonction qui prend trois paramètres : nom, prenom et age.
                        Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".
                    </p>
                    <li>
                        <?php
                        function bonjour($nom , $prenom, $age ){
                            echo("Bonjour " . $nom . " " . "$prenom" . " tu as ". $age . " ans");
                        };

                        bonjour("Kalkan", "Mikail", "23")
                        ?>
                    </li>


                    <!-- EXO 7 -->
                    <h3>Exo 7</h3>
                    <p>
                        Faire une fonction qui prend deux paramètres : age et genre.
                        Le paramètre genre peut prendre comme valeur Homme ou Femme.
                        La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :
                        => Vous êtes un homme et vous êtes majeur
                        => Vous êtes un homme et vous êtes mineur
                        => Vous êtes une femme et vous êtes majeur
                        => Vous êtes une femme et vous êtes mineur
                    </p>
                    <li>
                        <?php
                        function majeurGenre($age, $genre){

                            if($age < 18){
                                $adulte = "Mineur";
                            }else{
                                $adulte = "Majeur";
                            };
                            if($genre == "Homme"){
                                $sex = "un Homme";
                            }elseif($genre == "Femme"){
                                $sex = "une Femme";
                            }else{
                                $sex = "non Binnaire";

                            };
                            echo("Vous êtes " . $sex . " et vous êtes ". $adulte);
                        };

                        majeurGenre(18, "Homme");
                        ?>
                    </li>

                    <!-- EXO 8 -->
                    <h3>Exo 8</h3>
                    <p>
                        Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
                        Tous les paramètres doivent avoir une valeur par défaut.
                    </p>
                    <li>
                        <?php
                        function sommeTotal($firstNumber , $secondNumber, $thirdNumber ){
                            if(isset($firstNumber,$secondNumber,$thirdNumber) && is_numeric($firstNumber) && is_numeric($secondNumber) && is_numeric($thirdNumber) ){
                                $total = $firstNumber + $secondNumber + $thirdNumber;
                                
                                echo("La somme total de " . $firstNumber ." + ". $secondNumber . " + ". $thirdNumber . " est de " . $total);
                            }else{
                                $firstNumber = 2;
                                $secondNumber = 5;
                                $thirdNumber = 5;
                                $total = $firstNumber + $secondNumber + $thirdNumber;

                                echo"Vous n'avez pas rentrer de chifre valide voici un exemple: <br/>";
                                echo("La somme total de " . $firstNumber ." + ". $secondNumber . " + ". $thirdNumber . " est de " . $total);
                            };

                        };

                        sommeTotal(35, 2, 5)            // Exemple Valide 
                        
                        //sommeTotal(10, 2, "WallE")    // Exemple INValide 
                        ?>
                    </li>
                </ol>



            </section>

            <!-- Section 3 Les Tableaux -->

            <section>
                <h2>Section 3 Les Tableauxs</h2>

                <ol>
                    <!-- EXO 1 -->
                    <h3>Exo 1</h3>
                    <p>
                        Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année.
                    </p>
                    <li>
                        <?php
                        $mois = array("Janvier", "Fevrier", "Mars", "Avril", "Mais", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
                        
                        echo '<pre>';
                        print_r($mois);
                        echo '</pre>';
                        ?>
                    </li>

                    <!-- EXO 2 -->
                    <h3>Exo 2</h3>
                    <p>
                        Avec le tableau de l'exercice 1, aficher la valeur de la troisième ligne de ce tableau.
                    </p>
                    <li>
                        <?php
                        echo $mois[2];
                        ?>
                    </li>

                    <!-- EXO 3 -->
                    <h3>Exo 3</h3>
                    <p>
                        Avec le tableau de l'exercice , aficher la valeur de l'index 5.
                    </p>
                    <li>
                        <?php
                        echo $mois[5];
                        ?>
                    </li>


                    <!-- EXO 4 -->
                    <h3>Exo 4</h3>
                    <p>
                        Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
                    </p>
                    <li>
                        <?php
                        $mois[7] = "Août";
                        echo $mois[7];
                        ?>
                    </li>

                    <!-- EXO 5 -->
                    <h3>Exo 5</h3>
                    <p>
                        Créer un tableau associatif avec comme index le numéro des départements
                        des Hauts de France et en valeur leur nom.
                    </p>
                    <li>
                        <?php
                        $departements = array(02 =>"Aisne", 59 => "Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");
                        echo '<pre>';
                        print_r($departements);
                        echo '</pre>';
                        ?>
                    </li>


                    <!-- EXO 6 -->
                    <h3>Exo 6</h3>
                    <p>
                        Avec le tableau de l'exercice 5, aficher la valeur de l'index 59.
                    </p>
                    <li>
                        <?php
                        echo $departements[59];
                        ?>
                    </li>


                    <!-- EXO 7 -->
                    <h3>Exo 7</h3>
                    <p>
                        Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
                    </p>
                    <li>
                        <?php
                        $departements[51] = "Marne";

                        echo '<pre>';
                        print_r($departements);
                        echo '</pre>';
                        ?>
                    </li>


                    <!-- EXO 8 -->
                    <h3>Exo 8</h3>
                    <p>
                        Avec le tableau de l'exercice 1 et une boucle, aficher toutes les valeurs de ce tableau.
                    </p>
                    <li>
                        <?php
                        foreach ($mois as $moi){
                        echo " ". $moi . " ";
                        };
                        ?>
                    </li>

                    <!-- EXO 9 -->
                    <h3>Exo 9</h3>
                    <p>
                        Avec le tableau de l'exercice 5, aficher toutes les valeurs de ce tableau.
                    </p>
                    <li>
                        <?php
                        foreach ($departements as $departement){
                        echo " ". $departement . " ";
                        };
                        ?>
                    </li>

                    <!-- EXO 10 -->
                    <h3>Exo 10</h3>
                    <p>
                        Avec le tableau de l'exercice 5, aficher toutes les valeurs de ce tableau ainsi que les clés associés.
                        Cela pourra être, par exemple, de la forme :
                        "Le département" + nom_departement + "a le numéro" + num_departement
                    </p>
                    <li>
                        <?php
                        foreach ($departements as $key => $departement){
                        echo "Le departement ". $departement . " a le numero " .  $key . "<br />";
                        };
                        ?>
                    </li>
                </ol>

            </section>
        </article>

    </body>

</html>
