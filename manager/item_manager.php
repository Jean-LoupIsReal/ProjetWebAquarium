<?php 
include_once("classe/classeItem.php");
include_once("classe/classeAquarium.php");
include_once("classe/classePoisson.php");
class item_manager
{
    private $_db;


    const SELECT_ALL_POISSONS = "SELECT * FROM `poisson`";

    const SELECT_ALL_AQUARIUMS = "SELECT * FROM aquarium 
                                  INNER JOIN type_aquarium ON aquarium.no_type_aquarium = type_aquarium.no" ;

    const SELECT_ALL_ITEMS = "SELECT *  FROM item_autre 
                              INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.no 
                              INNER JOIN type_item ON item_autre.no_type_item = type_item.no 
                              WHERE no_type_item = 
                              (SELECT `no` FROM type_item WHERE :type_item LIKE type_item.type)";
    
    const SELECT_POISSON_BY_ID = "SELECT * FROM `poisson` where `no` = :_no";

    const SELECT_AQUARIUM_BY_ID = "SELECT * FROM aquarium 
                                    INNER JOIN type_aquarium ON aquarium.no_type_aquarium = type_aquarium.no
                                    WHERE `no` = :_no";
    
    const SELECT_ITEM_BY_ID = "SELECT *  FROM item_autre 
                               INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.no 
                               INNER JOIN type_item ON item_autre.no_type_item = type_item.no 
                               WHERE `no` = :_no";

    public function __construct($db) { $this->set_db($db); }

    private function set_db($db) {
        assert(is_a($db, 'PDO', "la bd n'est pas en PDO" ));
  
        $this->_db = $db;
    }

    public function getPoissons() : array{
        $poissonsArray = array();
        //requete + fetch
        $poissons = $this->_db->query(self::SELECT_ALL_POISSONS)->fetchALL();
        foreach($poissons as $poisson){
            array_push($poissonsArray, new Poisson($poisson));
        }
        return $poissonsArray;
    }

    public function getPoissonById($no){
        //requete
        $query = $this->_db->prepare(self::SELECT_POISSON_BY_ID);
        //changement de variable 
        $query->execute(array("_no" => $no));
        //fetch
        $poisson = $query->fetcha();
        //s'assure qu'il ne soit pas vide
        assert(!empty($poisson), "L'item n'a pas été trouvé(s) dans la base de données.");
    }

    public function getAquariums() : array{
        $aquariumsArray = array();
        //requete + fetch
        $aquariums = $this->_db->query(self::SELECT_ALL_AQUARIUMS)->fetchALL();
        assert(!empty($aquariums), 'Les items n\'ont pas été trouvé(s) dans la base de données.');
        foreach($aquariums as $aquarium){
            array_push($aquariumsArray, new Aquarium($aquarium));
        }
        return $aquariumsArray;
    }

    public function getAquariumById($no){
        //requete
        $query = $this->_db->prepare(self::SELECT_AQUARIUM_BY_ID);
        //changement de variable 
        $query->execute(array("_no" => $no));
        //fetch
        $aquarium = $query->fetcha();
        //s'assure qu'il ne soit pas vide
        assert(!empty($aquarium), "L'item n'a pas été trouvé(s) dans la base de données.");
    }

    public function getItems($type_item) : array{
        $itemsArray = array();
        //requete
        $query = $this->_db->prepare(self::SELECT_ALL_ITEMS);
        //changement de variable 
        $query->execute(array("type_item" => $type_item));
        //fetch
        $items = $query->fetchall();
        //s'assure qu'il ne soit pas vide
        assert(!empty($items), 'Les items n\'ont pas été trouvé(s) dans la base de données.');
        foreach($items as $item){
            array_push($itemsArray, new Item($item));
        }
        return $itemsArray;
    }

    public function getItemById($no){
        //requete
        $query = $this->_db->prepare(self::SELECT_ITEM_BY_ID);
        //changement de variable 
        $query->execute(array("_no" => $no));
        //fetch
        $item = $query->fetcha();
        //s'assure qu'il ne soit pas vide
        assert(!empty($item), "L'item n'a pas été trouvé(s) dans la base de données.");
    }

}
?>