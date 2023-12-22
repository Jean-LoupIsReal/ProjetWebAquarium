<?php include_once("classe/classeUtilisateur.php");
class utilisateur_manager
{
    private $_db;

    const SELECT_ALL_PAYS = "SELECT * FROM `pays`";

    const INSERT_UTILISATEUR = "INSERT INTO utilisateur (nom_utilisateur, mdp, email, adresse, ville, no_pays, code_panier) 
                                VALUES(:nom_utilisateur, :mdp, :email, :adresse, :ville, :no_pays, :code_panier)";
    
    const SELECT_NOM_UTILISATEUR_BY_ID = "SELECT * FROM utilisateur
                                         WHERE nom_utilisateur = :nom_utilisateur AND mdp = :mdp";

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

    public function 
    $query = $this->_db->prepare(self::CLIENT_EXISTE);
}