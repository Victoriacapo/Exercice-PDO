<?php
class listPatients extends database {//creation class client qui heriteras de la class database cree ds la page modelbdd

    //correspond aux colonne de ma table client dans ma base de données colyseum (id, lastname, firstName, etc..)
    public $id;
    public $lastname;
    public $firstname;
    public $birthdate;
    public $phone;
    public $mail;

    public function showPatient() {   // correction autre possibilite: SELECT lastName, firstName, birthDate, IF(card = 1, "oui", "non") AS card, cardNumber FROM clients;
        $response = $this->database->query('SELECT `id`,`lastname`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients`');
        $data = $response->fetchAll(PDO::FETCH_OBJ); 
        return $data; //la fonction retourne data.
    }

}
?>
   
