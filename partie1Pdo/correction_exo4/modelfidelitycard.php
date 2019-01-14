<?php

class clientcard extends cards {//creation class client qui heriteras de la class database cree ds la page modelbdd

    public $id; //correspond aux colonne de ma table client dans ma base de données colyseum (id, lastname, firstName, etc..)
    public $lastName;
    public $firstName;
    public $card;
    public $cardNumber;

    public function card() {
        $response = $this->database->query('SELECT *
FROM clients
INNER JOIN cards
WHERE clients.id = cards.id
AND cards.cardTypesId=1;');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data; //la fonction retourne data.
    }

}
?>
