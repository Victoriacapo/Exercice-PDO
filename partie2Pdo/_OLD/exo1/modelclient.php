<?php

class clients extends database {//creation class client qui heriteras de la class database cree ds la page modelbdd
    //correspond aux colonne de ma table 

    public $lastname;
    public $firstname;
    public $birthdate;
    public $phone;
    public $mail;

    public function showClients() {
        $send = $bdd->query("INSERT INTO patients (lastname, firstname, birthdate, phone, mail ) VALUES('$nom', '$prenom', '$datenaissance', '$telephone', '$email')");
    }

}

?>
   