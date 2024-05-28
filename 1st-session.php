<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
</head>
<body>
    <h1>
        <!-- php only executes its code, it doesnt execute any of the html or js code including comments if its inside the ?php -->
        <?php
        //this comment is invisible because its inside of php
        #another way of making comment
        /* another way of */

            echo 'Hello!';
            $nom = 'Akram';
            echo 'Hello' . $nom;
            echo '<h4> Hi this is H4' .$nom .'</h4>';
            echo "<h4> Hi this is H4 with double quotes  {$nom} </h4>";


            // Types of variables:
            $number = 12;
            $name = "akram";
            $float = 13.5; 
            $boolean = true;
            $list = ["akram", "hamouda", "lokman"];
            $array = array("HTML", "CSS", "POO", "PHP");
            $numberA = 10;
            $numberB = '15';
            //convertion
            $numberB = (int)($numberB);
            $name = (bool)($name);
            $resultat = $numberA + $numberB;

            //operateurs arithmetique:
            $a = 10;
            $b = 20;

            // Add
            $sum = $a + $b;

            // Sub
            $diff = $b - $a;

            // Multiplication
            $product = $a * $b;

            // Division
            $quotient = $b / $a;

            // Modulo
            $remainder = $b % $a;





            //function:

                // function sayHelloo($nom){
                //     echo 'Hello' . $nom;
                    
                // }

                // function sayHello($nom){
                //     return 'Hello' . $nom;
                    
                // }


            // function somme($x, $y) {
            //     $result = $x + $y;
            //     return 'La somme est: ' . $result;
                
            // }
            
                        function la_moyenne($nomber1,$nombre2){
                            $somme = $nomber1 + $nombre2;
                            $moyenne = $somme/2;
                            return $moyenne ;
                        };
            
                        $decision = "";
                        $coluerDecision = "";
                        $Moyenne = la_moyenne(5,7);
            
                        if ($Moyenne >= 10){
                            $decision = "Adims";
                            $coluerDecision = "bg-green-100";
                        }
                        elseif ($Moyenne >=8 && $Moyenne < 10){
                            $decision = "Redoublant";
                            $coluerDecision = "bg-green";
                        }
                        else {
                            $decision = "Eliminer";
                            $coluerDecision = "bg-red-700";
                        }
                    ?>
            
                    <?php
                        $nombre1 = 20;
                        $nombre2 = 10;
                        $nombre3 = '30';
                        $note = 14.5;
            
                        // var_dump($nombre3);
                        $note = (int)($nombre3);
                        $nombre2 = (string)($nombre2);
                        $nombre1 = (bool)($nombre1);
            
                        // var_dump($note);
                        $result = $nombre3 + $nombre1;
                        // echo $result;
                        echo '<br>';
                        function sayHello($nom){
                            return 'Hello ' . $nom;
                        }
            
                        $fun = sayHello("Tari9");
                        // echo $fun ;
            
                    ?>
            
                    <div class="<?php echo $coluerDecision ?>" >
                        <?php
                            echo $decision;
                        ?>
                    </div>
                    <?php
                    $etudiant = ['nom'=>"tari9", 'prenom'=>"l7afozli9",'groupe'=>"DD-110",'age'=>"5000"];
                
                    $etudiants1 = [
                        ['nom'=>"tari9", 'prenom'=>"l7afozli9",'groupe'=>"DD-911",'age'=>"5000"],
                        ['nom'=>"tari9-two", 'prenom'=>"l7afozli9-two",'groupe'=>"DD-911",'age'=>"5000"],
                        ['nom'=>"tari9-three", 'prenom'=>"l7afozli9-three",'groupe'=>"DD-911",'age'=>"5000"],
                        ['nom'=>"tari9-four", 'prenom'=>"l7afozli9-four",'groupe'=>"DD-911",'age'=>"5000"]
                    ];


                    $etudiants = [
                        'first' =>['nom'=>"tari9", 'prenom'=>"l7afozli9",'groupe'=>"DD-911",'age'=>"5000"],
                        'second' =>['nom'=>"tari9-two", 'prenom'=>"l7afozli9-two",'groupe'=>"DD-911",'age'=>"5000"],
                        'third' =>['nom'=>"tari9-three", 'prenom'=>"l7afozli9-three",'groupe'=>"DD-911",'age'=>"5000"],
                        'forth' =>['nom'=>"tari9-four", 'prenom'=>"l7afozli9-four",'groupe'=>"DD-911",'age'=>"5000"]
                    ];

                    var_dump($etudiants1[1]['nom']);


                    echo '<pre>';
                    var_dump($etudiants['first']);
                    echo '<pre>';
                    $logged = false;
                ?>
            <!-- condition PHP  -->
            <div>
                <?php if ($logged == true): ?>
                    <div>Welcome</div>
                    <?php else :?>
                    <div>Login in</div>
                    <?php endif; ?>
            </div>

                        <!-- // SWITCH CASE -->
            <div>
                <?php
                    $today = date('N');
                    switch ($today){
                        case 1:
                            echo "Monday";
                            break;
                        case 2:
                            echo "Mardi";
                            break;
                        case 3:
                            echo "Mercredi";
                        
                    }

                ?>
                <!-- loop -->
                <?php
                    for($i=0;$i < count($etudiants1);$i++){
                        echo $etudiants1[$i]['nom'] . ' ';
                    }

                    // FOR LOOP
                    
                    foreach($etudiants1 as $etudVariable){
                        echo $etudVariable['nom'] . ' ';
                    }


                    // class in PHP (POO)

                    class Utilisateur{
                        public $nom;
                        public $prenom;


                        public function __constructor($nom, $prenom){
                            $this->nom = $nom;
                            $this->prenom = $prenom;
                            
                        }
                    }

                    $utilisateur = new Utilisateur('Maih', 'Akram');

                    $utilisateur->nom = 'Maih';
                    $utilisateur->prenom = 'Akram';

                    var_dump($utilisateur);


                ?>



                <?php
                    class Utilisateur{
                        private $nom;
                        private $prenom;

                        public function __Construct($nom,$prenom){
                            $this-> nom = $nom;
                            $this->prenom = $prenom;
                        }

                        public function get_person(){
                            return $this->prenom;
                        }

                        public function set_person(){
                            return $this->prenom;
                        }

                        public function get_nom(){
                            return $this->nom;
                        }

                        public function set_nom(){
                            return $this->nom;
                        }
                    }

                $utilisateur1 = new Utilisateur("tari9","ahmed");

                $utilisateur1->nom = "tari9";
                $utilisateur1->prenom = "ahmed";


                var_dump($utilisateur1);



                //class extends

                class Etudiant extends Utilisateur{
                    public $branche;
                    public $groupe;

                    public function __constructor($nom, $prenom, $branche, $groupe){
                        parent::__constructor($nom, $prenom);
                        $this->branche = $branche;
                        $this->groupe = $groupe;
                        
                    }
                }


                // private class

                class VariablesGlobals {
                    public static $etablissement = 'ISFO';
                }

                $etab = VariablesGlobales::$etablissement;

                class Utilisateur{
                    private $nom;
                    private $prenom;
                    protected $age;
                    public function __constructor($nom, $prenom, $age){
                        $this->nom = $nom;
                        $this->prenom = $prenom;
                        $this->age = $age;
                        
                    }
                }







                ?>

            </div>