<?php include_once("classe/classeUtilisateur.php");
class utilisateur_manager
{
    private $_db;

    const SELECT_ALL_PAYS = "SELECT * FROM `pays`";

    const INSERT_UTILISATEUR = "INSERT INTO utilisateur (nom_utilisateur, mdp, email, adresse, ville, no_pays, code_panier) 
                                VALUES(:nom_utilisateur, :mdp, :email, :adresse, :ville, :no_pays, :code_panier)";
    
    const CONNEXION_UTILISATEUR = "SELECT utilisateur.`no`  FROM utilisateur
                                    INNER JOIN pays ON utilisateur.no_pays = pays.no 
                                    WHERE nom_utilisateur = :nom_utilisateur AND mdp = :mdp";

    const SELECT_NO_BY_NOM = "SELECT `no` FROM utilisateur WHERE nom_utilisateur LIKE CONCAT('%', :nom_utilisateur, '%')";
    
    const SELECT_UTILISATEUR = "SELECT utilisateur.nom_utilisateur, utilisateur.email, utilisateur.adresse, utilisateur.ville, utilisateur.code_panier, pays.pays  
                                    FROM utilisateur
                                    INNER JOIN pays ON utilisateur.no_pays = pays.no 
                                    WHERE utilisateur.`no` = :id";

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

    public function ajouteUtilisateur($nom_utilisateur, $mdp, $email, $adresse, $ville, $no_pays, $code_panier)
    {
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

    public function getUtilisateur($nom_utilisateur, $mdp) : Utilisateur{
      
        //Regarde si il y a des entrées avec le nom et mdp entré 
        //demande l'id
        $query = $this->_db->prepare(self::CONNEXION_UTILISATEUR);
        assert($query->execute(array("nom_utilisateur" => $nom_utilisateur, "mdp" => $mdp)));
        //regarde si l'id est inséré 
        if($id = $query->fetch()){
            //prend les infos de l'utilisateur
            $query = $this->_db->prepare(self::SELECT_UTILISATEUR);
            assert($query->execute(array("id" => strval($id[0]))));
            $ut = $query->fetch();
            return new Utilisateur($ut);
        }
        else{
            //est null
            return null;
        }
    }

    public function utilisateurExiste($nom_utilisateur) : bool{
        //demande l'id
        $query = $this->_db->prepare(self::SELECT_NO_BY_NOM);
        assert($query->execute(array("nom_utilisateur" => $nom_utilisateur)));
        //regarde si l'id est inséré 
        if($query->fetch()){
            
            return true;
        }
        else{
            //est null
            return false;
        }
    }
}