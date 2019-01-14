<?php
class showTypes extends database {//creation class client qui heriteras de la class database cree ds la page modelbdd

    public $id; //correspond aux colonne de ma table client dans ma base de données colyseum (id, lastname, firstName, etc..)
    public $type;
   

    public function types() {
        $response = $this->database->query('SELECT * FROM `showTypes`');
        $data = $response->fetchAll(PDO::FETCH_OBJ); 
        return $data; //la fonction retourne data.
    }

}
?>
   