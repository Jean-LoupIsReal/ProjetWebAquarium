<?php 
include_once("classe/classeItem.php");
include_once("classe/classeAquarium.php");
include_once("classe/classePoisson.php");
class item_manager
{
    private $_db;


    const SELECT_ALL_POISSONS = "SELECT * FROM `poisson`";

    const SELECT_ALL_AQUARIUMS = "SELECT aquarium.*,  type_aquarium.type FROM aquarium
                                  INNER JOIN type_aquarium ON aquarium.no_type_aquarium = type_aquarium.no" ;

    const SELECT_ALL_ITEMS = "SELECT item_autre.*, type_item.type, compagnie.compagnie  FROM item_autre
                              INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.no 
                              INNER JOIN type_item ON item_autre.no_type_item = type_item.no 
                              WHERE no_type_item = 
                              (SELECT `no` FROM type_item WHERE :type_item LIKE type_item.type)";

    const SELECT_AQUARIUM_BY_ID = "SELECT * FROM aquarium 
                                    INNER JOIN type_aquarium ON aquarium.no_type_aquarium = type_aquarium.no WHERE aquarium.no = :id";

    CONST SELECT_ITEM_BY_ID = "SELECT *  FROM item_autre 
                                INNER JOIN compagnie ON item_autre.no_compagnie = compagnie.no 
                                INNER JOIN type_item ON item_autre.no_type_item = type_item.no 
                                WHERE item_autre.no = :id";

    CONST SELECT_POISSON_BY_ID = "SELECT * FROM `poisson` WHERE no = :id";

    public function __construct($db) { $this->set_db($db); }

    private function set_db($db) {
        assert(is_a($db, 'PDO', "la bd n'est pas en PDO" ));
  
        $this->_db = $db;
    }

    public function getPoissons() : array{
        $poissonsArray = array();
        $poissons = $this->_db->query(self::SELECT_ALL_POISSONS)->fetchALL();
        foreach($poissons as $poisson){
            array_push($poissonsArray, new Poisson($poisson));
        }
        return $poissonsArray;
    }

    public function getAquariums() : array{
        $aquariumsArray = array();
        $aquariums = $this->_db->query(self::SELECT_ALL_AQUARIUMS)->fetchALL();
        assert(!empty($aquariums), 'Les items n\'ont pas été trouvé(s) dans la base de données.');
        foreach($aquariums as $aquarium){
            array_push($aquariumsArray, new Aquarium($aquarium));
        }
        return $aquariumsArray;
    }

    public function getItems($type_item) : array{
        $itemsArray = array();
        $query = $this->_db->prepare(self::SELECT_ALL_ITEMS);
        $query->execute(array("type_item" => $type_item));
        $items = $query->fetchall();
      
        assert(!empty($items), 'Les items n\'ont pas été trouvé(s) dans la base de données.');
        foreach($items as $item){
            array_push($itemsArray, new Item($item));
        }
        return $itemsArray;
    }

    public function getAquariumByID($id)
    {
        $query = $this->_db->prepare(self::SELECT_AQUARIUM_BY_ID);
        $query->execute(array("id" => $id));
        $aquarium = $query->fetch();
      
        assert(!empty($aquarium), "L'Aquarium n'a pas été trouvé(s) dans la base de données.");

        return new Aquarium($aquarium);
    }

    public function getItemByID($id)
    {
        $query = $this->_db->prepare(self::SELECT_ITEM_BY_ID);
        $query->execute(array("id" => $id));
        $item = $query->fetch();
      
        assert(!empty($item), "L'item n'a pas été trouvé(s) dans la base de données.");
        
        return new Item($item);
    }

    public function getPoissonByID($id)
    {
        $query = $this->_db->prepare(self::SELECT_POISSON_BY_ID);
        $query->execute(array("id" => $id));
        $poisson = $query->fetch();
      
        assert(!empty($poisson), "Le poisson n'a pas été trouvé(s) dans la base de données.");
        
        return new Poisson($poisson);
    }
}

?>