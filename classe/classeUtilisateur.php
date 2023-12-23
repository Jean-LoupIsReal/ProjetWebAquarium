<?php

class Utilisateur
{
    private int $_no;
    private string $_nom_utilisateur;
    private string $_mdp;
    private string $_email;
    private string $_addresse;
    private string $_ville;
    private string $_pays;
    private string $_code_panier;
    

    public function __construct($param = array())
    {
        // Pour chaques parametres dans le array
        foreach($param as $k => $v){
            // Crée le nom de la méthode avec le set_ et ensuite avec le nom du parametre
            $methodName = "set_". $k;
            // S'assure que la méthode existe pour pas faire crash le site
            if(method_exists($this, $methodName))
                $this->$methodName($v); // Insère la valeur dans la méthode
        }
        
    }

    /**
     * Get the value of _id
     */ 
    public function get_no()
    {
        return $this->_no;
    }

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom_utilisateur()
    {
        return $this->_nom_utilisateur;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom_utilisateur($_nom)
    {
        $this->_nom_utilisateur = $_nom;

        return $this;
    }

    /**
     * Get the value of _mdp
     */ 
    public function get_mdp()
    {
        return $this->_mdp;
    }

    /**
     * Set the value of _mdp
     *
     * @return  self
     */ 
    public function set_mdp($_mdp)
    {
        $this->_mdp = $_mdp;

        return $this;
    }

    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Get the value of _addresse
     */ 
    public function get_addresse()
    {
        return $this->_addresse;
    }

    /**
     * Set the value of _addresse
     *
     * @return  self
     */ 
    public function set_addresse($addresse)
    {
        $this->_addresse = $addresse;

        return $this;
    }

    /**
     * Get the value of _ville
     */ 
    public function get_ville()
    {
        return $this->_ville;
    }

    /**
     * Set the value of _ville
     *
     * @return  self
     */ 
    public function set_ville($ville)
    {
        $this->_ville = $ville;

        return $this;
    }

    /**
     * Get the value of _pays
     */ 
    public function get_pays()
    {
        return $this->_pays;
    }

    /**
     * Set the value of _pays
     *
     * @return  self
     */ 
    public function set_pays($pays)
    {
        $this->_pays = $pays;

        return $this;
    }

    /**
     * Get the value of _codePanier
     */ 
    public function get_code_panier()
    {
        return $this->_code_panier;
    }

    /**
     * Set the value of _codePanier
     *
     * @return  self
     */ 
    public function set_code_panier($code_panier)
    {
        $this->_code_panier = $code_panier;

        return $this;
    }
}

?>