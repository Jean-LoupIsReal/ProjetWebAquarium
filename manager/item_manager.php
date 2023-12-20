<?php 
include_once("classe/classeItem.php");
include_once("classe/classeAquarium.php");
include_once("classe/classePoisson.php");
class item_manager
{
    private $_db;


    const SELECT_ALL_POISSONS = "SELECT * FROM `poisson`";

    const SELECT_ALL_AQUARIUMS = "SELECT * FROM aquarium";

    const SELECT_ALL_ITEMS = "SELECT * FROM item_autre INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.id WHERE no_type_item = (SELECT ";

    public function __construct($db) { $this->set_db($db); }

    private function set_db($db) {
        assert(is_a($db, 'PDO', "la bd n'est pas en PDO" ));
  
        $this->_db = $db;
    }

    public function getPoissons() : array{
        $poissonsArray = array();
        $poissons = $this->_db->query(self::SELECT_ALL_POISSONS)->fetchALL();
        echo "<p>hello<p>";
        foreach($poissons as $poisson){
            array_push($poissonsArray, new Poisson($poisson));
        }
        return $poissonsArray;
    }

    private function getAquariums() : array{
        $aquariumArray = array();
        $aquariums = $this->_bdd->query(self::SELECT_ALL_AQUARIUMS)->fetchALL();
        foreach($aquariums as $poisson){
            array_push($aquariumsArray, new Poisson($aquarium));
        }
        return $aquariumsArray;
    }

    private function get() : array{
        //$itemsArray = array();
        //$items = $this->_bdd->(self::SELECT_ALL_ITEMS)->fetchALL();
        foreach($items as $item){
            array_push($aquariumsArray, new Poisson($item));
        }
        return $aquariumsArray;
    }


}
?>