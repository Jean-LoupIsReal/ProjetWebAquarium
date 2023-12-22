<?php

class Item
{
    private int $_no;
    private string $_nom;
    private string $_type;
    private string $_compagnie;
    private int $_no_range_gallons;
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
    public function affiche(){
        echo "<div>";
            echo "<img src='img/items/". $this->get_type() ."/". $this->get_type() .".jpg' alt='". $this->get_type() ."'></img>"; //si temps ajouter img précise avec $poisson->get_img()
            echo "<p>". $this->get_type() . " " . $this->get_compagnie() . " " . $this->get_nom(). "</p><p>". $this->get_prix(). "$". "</p>";
            echo "<button onclick='ajouterItemPanier()'class='" . $this->get_no(). " ". $this->get_type() ."'>Ajouter au panier</button>";
        echo "</div>";
    }
    /**
     * Get the value of _no
     */ 
    public function get_no()
    {
        return $this->_no;
    }

    /**
     * Set the value of _no
     *
     * @return  self
     */ 
    public function set_no($_no)
    {
        $this->_no = $_no;

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
    public function set_nom($nom)
    {
        $this->_nom = $nom;

        return $this;
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

        return $this;
    }

    /**
     * Get the value of _compagnie
     */ 
    public function get_compagnie()
    {
        return $this->_compagnie;
    }

    /**
     * Set the value of _compagnie
     *
     * @return  self
     */ 
    public function set_compagnie($compagnie)
    {
        $this->_compagnie = $compagnie;

        return $this;
    }

    /**
     * Get the value of _rangeGallons
     */ 
    public function get_no_range_gallons()
    {
        return $this->_no_range_gallons;
    }

    /**
     * Set the value of _rangeGallons
     *
     * @return  self
     */ 
    public function set_nono_range_gallons($range_gallon)
    {
        $this->_no_range_gallons = $range_gallon;

        return $this;
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
    public function set_prix($_prix)
    {
        $this->_prix = $_prix;

        return $this;
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
    public function set_imgUrl($_img)
    {
        $this->_img = $_img;

        return $this;
    }
}

?>