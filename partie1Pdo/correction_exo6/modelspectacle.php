<?php
class spectacle extends database {//creation class client qui heriteras de la class database cree ds la page modelbdd

    public $id; //correspond aux colonne de ma table 
    public $title;
    public $performer;
    public $date;
    public $startTime;

    public function Shows() { //requete correction autre possibilite  SELECT title, performer,DATE_FORMAT(date,"%d/%m/%Y") AS date, startTime FROM shows;
        $response = $this->database->query('SELECT id, title, performer, DATE_FORMAT(date, "%d/%m/%Y") AS date, startTime FROM shows'); //requete sql
        $data = $response->fetchAll(PDO::FETCH_OBJ); 
        return $data; //la fonction retourne data.
    }

}
?>
   