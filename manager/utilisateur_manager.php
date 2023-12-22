<?php include_once("classe/classeUtilisateur.php");
class utilisateur_manager
{
    private $_db;

    const SELECT_ALL_PAYS = "SELECT * FROM `pays`";

    const INSERT_UTILISATEUR = "INSERT INTO utilisateur (nom_utilisateur, mdp, email, adresse, ville, no_pays, code_panier) 
                                VALUES(:nom_utilisateur, :mdp, :email, :adresse, :ville, :no_pays, :code_panier)";
    
    const CONNECTION_UTILISATEUR = "SELECT `no`  FROM utilisateur
                                    INNER JOIN pays ON utilisateur.no_pays = pays.no 
                                    WHERE nom_utilisateur = :nom_utilisateur AND mdp = :mdp";

    const UTILISATEUR_EXISTE = "SELECT `no` FROM utilisateur WHERE nom_utilisateur LIKE CONCAT('%', :nom_utilisateur, '%')"

    public function __construct($db) { $this->set_db($db); }

    private function set_db($db) {
        assert(is_a($db, 'PDO', "la bd n'est pas en PDO" ));
        $this->_db = $db;
    }

    public function getPays() : array{
        $arrayPays = array();
        //requete + fetch
        $pays = $this->_db->query(self::SELECT_ALL_PAYS)->fetchALL();
        foreach($pays as $pays){
            array_push($arrayPays, $pays);
        }
        return $arrayPays;
    }

    public function ajouteUtilisateur($nom_utilisateur, $mdp, $email, $adresse, $ville, $no_pays, $code_panier){
        $arrayUtilisateur = array("nom_utilisateur" => $nom_utilisateur, 
                                    "mdp" => $mdp, 
                                    "email" => $email, 
                                    "adresse" => $adresse, 
                                    "ville" => $ville, 
                                    "no_pays" => $no_pays, 
                                    "code_panier" => $code_panier);
        $query = $this->_db->prepare(self::INSERT_UTILISATEUR);
        assert($query->execute($arrayUtilisateur));
    }

    public function exist($nom_utilisateur, $mdp) : Utilisateur{
        $query = $this->_db->prepare(self::CONNECTION_UTILISATEUR);
        assert($query->execute(array("nom_utilisateur" => $nom_utilisateur, "mdp" => $mdp)));
        $ut = $query->fetch();

    }
}