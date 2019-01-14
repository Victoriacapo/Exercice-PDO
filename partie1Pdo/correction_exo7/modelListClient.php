<?php
class agenda extends database {//creation class client qui heriteras de la class database cree ds la page modelbdd

    public $id; //correspond aux colonne de ma table client dans ma base de données colyseum (id, lastname, firstName, etc..)
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;

    public function agendaClient() {   // correction autre possibilite: SELECT lastName, firstName, birthDate, IF(card = 1, "oui", "non") AS card, cardNumber FROM clients;
        $response = $this->database->query('SELECT id, lastName, firstName, birthDate, CASE WHEN `card` = true THEN \'oui\' ELSE \'non\' END AS `card`, cardNumber FROM `clients`');
        $data = $response->fetchAll(PDO::FETCH_OBJ); 
        return $data; //la fonction retourne data.
    }

}
?>
   
