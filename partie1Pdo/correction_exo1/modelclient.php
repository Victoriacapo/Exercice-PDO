<?php
class clients extends database {//creation class client qui heriteras de la class database cree ds la page modelbdd

    public $id; //correspond aux colonne de ma table client dans ma base de données colyseum (id, lastname, firstName, etc..)
    public $lastName;
    public $firstName;
    public $birthdate;
    public $card;
    public $cardNumber;

    public function showClients() {
        $response = $this->database->query('SELECT lastName, firstName  FROM clients');
        $data = $response->fetchAll(PDO::FETCH_OBJ); 
        return $data; //la fonction retourne data.
    }

}
?>
   