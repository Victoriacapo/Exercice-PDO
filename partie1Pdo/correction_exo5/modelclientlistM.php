<?php

class clientenM extends database {//creation class client qui heriteras de la class namewithm dans la page modelbdd

    public $id; //correspond aux colonne de ma table client dans ma base de données colyseum (id, lastname, firstName, etc..)
    public $lastName;
    public $firstName;
    

    public function name() {
        $response = $this->database->query('SELECT id, lastName, firstName FROM clients WHERE lastName like "M%" ORDER BY lastName');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data; //la fonction retourne data.
    }

}
?>
