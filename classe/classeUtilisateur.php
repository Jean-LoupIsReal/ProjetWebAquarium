<?php

class Utilisateur
{
    private int $_id;
    private string $_nom;
    private string $_mdp;
    private string $_email;
    private string $_addresse;
    private string $_ville;
    private string $_pays;
    private string $_codePanier;


    
    /**
     * Get the value of _id
     */ 
    public function get_id()
    {
        return $this->_id;
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
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

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
    public function set_addresse($_addresse)
    {
        $this->_addresse = $_addresse;

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
    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

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
    public function set_pays($_pays)
    {
        $this->_pays = $_pays;

        return $this;
    }

    /**
     * Get the value of _codePanier
     */ 
    public function get_codePanier()
    {
        return $this->_codePanier;
    }

    /**
     * Set the value of _codePanier
     *
     * @return  self
     */ 
    public function set_codePanier($_codePanier)
    {
        $this->_codePanier = $_codePanier;

        return $this;
    }
}

?>