    <?php
    //     class Utilisateur{
    //         private $nom;
    //         private $prenom;
    //         protected $age;
        
    //         public function __Construct($nom,$prenom,$age){
    //             $this-> nom = $nom;
    //             $this->prenom = $prenom;
    //             $this->age = $age;
    //         }

    //         public function presentez_vous(){
    //             return "my name is {$this-> prenom} , and last name is {$this-> nom}";
    //         }

    //         public function get_person(){
    //             return $this->prenom;
    //         }

    //         public function set_person(){
    //             return $this->prenom;
    //         }

    //         public function get_nom(){
    //             return $this->nom;
    //         }

    //         public function set_nom(){
    //             return $this->nom;
    //         }
    //     }
    
    //     class Etudiant extends Utilisateur{
    //         public $branche;
    //         public $groupe;
        
    //         public function __Construct($nom,$prenom,$age,$branche,$groupe)
    //         {
    //             parent::__Construct($nom,$prenom,$age);
    //             $this->branche = $branche;
    //             $this->groupe = $groupe;
    //         }

    //         public function presentez_vous(){
    //             return parent::presentez_vous() . 'and i am a sutdent ' . $this->age;;
    //         }
    //     }

    //     class VariablesGloples {
    //         public static $etablissement = "isfo";
    //     }
    
    // $etab = VariablesGloples::$etablissement;
    
    // $utilisateur1 = new Utilisateur("tari9","ahmed",20);

    // $etudiant1 = new Etudiant("tari9","m7soun",30,"DD",106);
    // $etudiant2 = new Etudiant("7asan","matrou9",20,"DD",106);

    // var_dump($etudiant1);

    // echo $etudiant1->presentez_vous();

    //$utilisateur1->nom = "tari9";
    //$utilisateur1->prenom = "ahmed";
    
    // var_dump($utilisateur1);
    ?>
</body>
</html>


<?php
class Vehicule {
    protected $code;
    protected $nmb_place;
    protected $capacite;

    public function __construct($code, $nmb_place, $capacite) {
        $this->code = $code;
        $this->nmb_place = $nmb_place;
        $this->capacite = $capacite;
    }

    public function afficher() {
        return "Le code est {$this->code}, nb de place {$this->nmb_place}, capacité {$this->capacite}";
    }
}

class Bateau extends Vehicule {
    public $couleur;
    public $prix;

    public function __construct($code, $nmb_place, $capacite, $couleur, $prix) {
        parent::__construct($code, $nmb_place, $capacite);
        $this->couleur = $couleur;
        $this->prix = $prix;
    }

    public function afficher() {
        $parent_affichage = parent::afficher();
        return "{$parent_affichage}, couleur {$this->couleur}, prix {$this->prix}";
    }
}

$bateau1 = new Bateau(234, 4, 20, "blue", 1000);
echo $bateau1->afficher();
?>
