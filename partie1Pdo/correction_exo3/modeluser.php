<?php

class user extends database {//creation class client qui heriteras de la class database cree ds la page modelbdd

    public $id; //correspond aux colonne de ma table client dans ma base de données colyseum (id, lastname, firstName, etc..)
    public $lastName;
    public $firstName;
    public $birthdate;
    public $card;
    public $cardNumber;

    public function number() {
        $response = $this->database->query('SELECT id, lastName, firstName  FROM clients WHERE id<=20'); //correction SELECT * FROM clients LIMIT 2O
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data; //la fonction retourne data.
    }

}
?>
   
