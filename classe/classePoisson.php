<?php
class Poisson{
    private int $_id;
    private string $_nom;
    private string $_famille;
    private bool $_tropical;
    private string $_description;
    private int $_no_taille;
    private int $_gallon_minimum;
    private int $_prix;
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

    // Getter pour id
    public function get_id() {
        return $this->_id;
    }

    // Setter pour id
    public function set_id($_id) {
        $this->_id = $_id;
    }

    // Getter pour _nom
    public function get_nom() {
        return $this->_nom;
    }
    
    // Setter pour _nom
    public function set_nom($_nom) {
        $this->_nom = $_nom;
    }

    // Getter pour _famille
    public function get_famille() {
        return $this->_famille;
    }

    // Setter pour _famille
    public function set_famille($_famille) {
        $this->_famille = $_famille;
    }

    // Getter pour _tropical
    public function get_tropical() {
        return $this->_tropical;
    }

    // Setter pour _tropical
    public function set_tropical($_tropical) {
        $this->_tropical = $_tropical;
    }

    // Getter pour _description
    public function get_Description() {
        return $this->_description;
    }

    // Setter pour _description
    public function set_Description($_description) {
        $this->_description = $_description;
    }

    // Getter pour _no_taille
    public function get_NoTaille() {
        return $this->_no_taille;
    }

    // Setter pour _no_taille
    public function set_NoTaille($_no_taille) {
        $this->_no_taille = $_no_taille;
    }

    // Getter pour _gallon_minimum
    public function get_GallonMinimum() {
        return $this->_gallon_minimum;
    }

    // Setter pour _gallon_minimum
    public function set_GallonMinimum($_gallon_minimum) {
        $this->_gallon_minimum = $_gallon_minimum;
    }

    // Getter pour _prix
    public function get_Prix() {
        return $this->_prix;
    }

    // Setter pour _prix
    public function set_Prix($_prix) {
        $this->_prix = $_prix;
    }

    // Getter pour _img
    public function get_Img() {
        return $this->_img;
    }

    //Setter pour _img
    public function set_Img($_img) {
        $this->_img = $_img;
    }
}
?>