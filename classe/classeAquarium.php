<?php

class Aquarium
{
    private int $_id;
    private string $_compagnie;
    private string $_type;
    private int $_dimensionsX;
    private int $_dimensionsY;
    private int $_dimensionsZ;
    private int $_gallons;
    private float $_prix;
    private string $_imgUrl; 


    public function __serialize()
    {
        return [
            "id" => $this->get_id(),
            "compagnie" => $this->get_compagnie(),
            "type" => $this->get_type(),
            "dimensionsX" => $this->get_dimensionsX(),
            "dimensionsY" => $this->get_dimensionsY(),
            "dimensionsZ" => $this->get_dimensionsZ(),
            "gallons" => $this->get_gallons(),
            "prix" => $this->get_prix(),
            "imgUrl" => $this->get_imgUrl()
        ];
    }

    public function __unserialize(array $data)
    {
        $this->set_id($data["id"]);
        $this->set_compagnie($data["compagnie"]);
        $this->set_type($data["type"]);
        $this->set_dimensionsX($data["deimensionsX"]);
        $this->set_dimensionsY($data["dimensionsY"]);
        $this->set_dimensionsZ($data["dimensionZ"]);
        $this->set_gallons($data["gallons"]);
        $this->set_prix($data["prix"]);
        $this->set_imgUrl($data["imgUrl"]);
    }

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
     * Get the value of _dimensionsX
     */ 
    public function get_dimensionsX()
    {
        return $this->_dimensionsX;
    }

    /**
     * Set the value of _dimensionsX
     *
     * @return  self
     */ 
    public function set_dimensionsX($_dimensionsX)
    {
        $this->_dimensionsX = $_dimensionsX;

        return $this;
    }

    /**
     * Get the value of _dimensionsY
     */ 
    public function get_dimensionsY()
    {
        return $this->_dimensionsY;
    }

    /**
     * Set the value of _dimensionsY
     *
     * @return  self
     */ 
    public function set_dimensionsY($_dimensionsY)
    {
        $this->_dimensionsY = $_dimensionsY;

        return $this;
    }

    /**
     * Get the value of _dimensionsZ
     */ 
    public function get_dimensionsZ()
    {
        return $this->_dimensionsZ;
    }

    /**
     * Set the value of _dimensionsZ
     *
     * @return  self
     */ 
    public function set_dimensionsZ($_dimensionsZ)
    {
        $this->_dimensionsZ = $_dimensionsZ;

        return $this;
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