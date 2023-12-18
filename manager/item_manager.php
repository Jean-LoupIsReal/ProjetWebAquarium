<?php 
include_once("classe/classeItem.php");
include_once("classe/classeAquarium.php");
include_once("classe/classePoisson.php");
class item_manager
{
    private $_db;


    const SELECT_ALL_POISSONS = "SELECT * FROM poisson";

    const SELECT_ALL_AQUARIUM = "SELECT * FROM aquarium";

    const SELECT_ALL_CHAUFFE_EAU = "SELECT * FROM item_autre WHERE no_type_item = 1";

    const SELECT_ALL_SUBSTRAIT = "SELECT * FROM item_autre WHERE no_type_item = 2";

    const SELECT_ALL_DECORATION = "SELECT * FROM item_autre INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.id WHERE no_type_item = 3";
    
    const SELECT_ALL_FILTRE = "SELECT * FROM item_autre INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.id WHERE no_type_item = 4";

    const SELECT_ALL_LUMIERE = "SELECT * FROM item_autre INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.id WHERE no_type_item = 5";

    const SELECT_ALL_THERMOMETRE = "SELECT * FROM item_autre INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.id WHERE no_type_item = 6";

    const SELECT_ALL_NETTOYAGE = "SELECT * FROM item_autre INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.id WHERE no_type_item = 7";

    public function __construct($db) { $this->set_db($db); }

    private function set_db($db) {
        assert(is_a($db, 'PDO', "la bd n'est pas en PDO" ));
  
        $this->_db = $db;
    }

    private function getPoissons() : array{
        $poissonsArray = array();
        $poissons = $this->_bdd->query(self::SELECT_ALL_VOITURES)->fetchALL();
        foreach($poissons as $poisson){
            array_push($poissons, new Poisson($poisson));
        }
        return $poissons;
    }


}
?>