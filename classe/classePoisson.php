<?php
class Poisson{
    private int $_no;
    private string $_nom;
    private string $_famille;
    private bool $_tropical;
    private string $_description;
    private int $_no_taille;
    private int $_gallon_minimum;
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

    // Getter pour id
    public function get_no() {
        return $this->_no;
    }

    // Setter pour id
    public function set_no($no) {
        $this->_no = $no;
    }

    // Getter pour _nom
    public function get_nom() {
        return $this->_nom;
    }
    
    // Setter pour _nom
    public function set_nom($nom) {
        $this->_nom = $nom;
    }

    // Getter pour _famille
    public function get_famille() {
        return $this->_famille;
    }

    // Setter pour _famille
    public function set_famille($famille) {
        $this->_famille = $famille;
    }

    // Getter pour _tropical
    public function get_tropical() {
        return $this->_tropical;
    }

    // Setter pour _tropical
    public function set_tropical($tropical) {
        $this->_tropical = $tropical;
    }

    // Getter pour _description
    public function get_description() {
        return $this->_description;
    }

    // Setter pour _description
    public function set_description($description) {
        $this->_description = $description;
    }

    // Getter pour _no_taille
    public function get_no_taille() {
        return $this->_no_taille;
    }

    // Setter pour _no_taille
    public function set_no_taille($no_taille) {
        $this->_no_taille = $no_taille;
    }

    // Getter pour _gallon_minimum
    public function get_gallons_minimum() {
        return $this->_gallons_minimum;
    }

    // Setter pour _gallon_minimum
    public function set_gallons_minimum($gallons_minimum) {
        $this->_gallons_minimum = $gallons_minimum;
    }

    // Getter pour _prix
    public function get_prix() {
        return $this->_prix;
    }

    // Setter pour _prix
    public function set_prix($prix) {
        $this->_prix = $prix;
    }

    // Getter pour _img
    public function get_img() {
        return $this->_img;
    }

    //Setter pour _img
    public function set_img($img) {
        $this->_img = $img;
    }
}
?>