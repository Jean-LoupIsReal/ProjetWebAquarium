<?php

class Aquarium
{
    private int $_no ;
    private string $_no_compagnie;
    private string $_type;
    private string $_dimensions;
    private int $_gallons;
    private float $_prix;
    private string $_img; 

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

    public function affiche($mode)
    {
        echo "<div class='affichage'>";
            echo "<img src='img/aquariums/". $this->get_img(). "' alt='". $this->get_img(). "'></img>"; //si temps ajouter img précise avec $poisson->get_img()
            echo "<p>Aquarium ". $this->get_type(). " ". $this->get_gallons(). "</p><p>". $this->get_dimensions(). "</p><p>". $this->get_prix(). "$". "</p>";
            if($mode == "ajouter")
            {
                echo "<button onclick='ajouterAquarium(". $this->get_no() .")'class='" . $this->get_no(). "'>Ajouter au panier</button>";
            }
            elseif($mode == "supprimer")
            {
                echo "<button onclick='supprimerObjet()'>Supprimer</button>";
            }
      
        echo "</div>";
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
    public function set_no($_id)
    {
        $this->_no = $_id;
    }

    /**
     * Get the value of _compagnie
     */ 
    public function get_no_compagnie()
    {
        return $this->_no_compagnie;
    }

    /**
     * Set the value of _compagnie
     *
     * @return  self
     */ 
    public function set_no_compagnie($compagnie)
    {
        $this->_no_compagnie = $compagnie;
    }

    /**
     * Get the value of _type
     */ 
    public function get_type()
    {
        return $this->_type;
    }

    /**
     * Set the value of _type
     *
     * @return  self
     */ 
    public function set_type($type)
    {
        $this->_type = $type;
    }

    /**
     * Get the value of _dimensionsX
     */ 
    public function get_dimensions()
    {
        return $this->_dimensions;
    }

    /**
     * Set the value of _dimensionsX
     *
     * @return  self
     */ 
    public function set_dimensions($dimensions)
    {
        $this->_dimensions = $dimensions;
    }

    /**
     * Get the value of _gallons
     */ 
    public function get_gallons()
    {
        return $this->_gallons;
    }

    /**
     * Set the value of _gallons
     *
     * @return  self
     */ 
    public function set_gallons($_gallons)
    {
        $this->_gallons = $_gallons;
    }

    /**
     * Get the value of _prix
     */ 
    public function get_prix()
    {
        return $this->_prix;
    }

    /**
     * Set the value of _prix
     *
     * @return  self
     */ 
    public function set_prix($prix)
    {
        $this->_prix = $prix;
    }

    /**
     * Get the value of _imgUrl
     */ 
    public function get_img()
    {
        return $this->_img;
    }

    /**
     * Set the value of _imgUrl
     *
     * @return  self
     */ 
    public function set_img($imgUrl)
    {
        $this->_img = $imgUrl;
    }
}

?>