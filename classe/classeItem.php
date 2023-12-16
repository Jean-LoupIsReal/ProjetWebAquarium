<?php

class Item
{
    private int $_id;
    private string $_nom;
    private string $_type;
    private string $_compagnie;
    private int $_rangeGallons;
    private float $_prix;
    private string $_imgUrl;

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
    public function set_type($_type)
    {
        $this->_type = $_type;

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
    public function set_compagnie($_compagnie)
    {
        $this->_compagnie = $_compagnie;

        return $this;
    }

    /**
     * Get the value of _rangeGallons
     */ 
    public function get_rangeGallons()
    {
        return $this->_rangeGallons;
    }

    /**
     * Set the value of _rangeGallons
     *
     * @return  self
     */ 
    public function set_rangeGallons($_rangeGallons)
    {
        $this->_rangeGallons = $_rangeGallons;

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
    public function get_imgUrl()
    {
        return $this->_imgUrl;
    }

    /**
     * Set the value of _imgUrl
     *
     * @return  self
     */ 
    public function set_imgUrl($_imgUrl)
    {
        $this->_imgUrl = $_imgUrl;

        return $this;
    }
}

?>