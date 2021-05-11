<!-- Crea un diagramma per una tabella di db che
rappresenti gli Users di un blog.

Crea una classe User che rappresenti quella
tabella, e usala per stampare in pagina i dati di
alcuni Users.


Il database e la tabella non devono essere
realmente creati. -->

<?php
ini_set('display_errors', 1);

class User {
    //Proprietà
    public $id;
    private $nome;
    public $cognome;
    public $username;
    public $password;
    public $email;
    private $data_iscrizione;
    public $permessi;
    public $link_affiliato;

    //Costruttore
    function __construct($_id) {
        $this->id = $_id;
    }

    //Metodi
    public function setData($_data__iscrizione) {
        $this->data_iscrizione = $_data__iscrizione;
    }

    public function getData(){
        return $this->data_iscrizione;
    }


    public function setName($_nome) {
        if(is_string($_nome)){
            $this->nome = $_nome;
        }   
    }

    public function getName() {
        return $this->nome; 
    }


 
}

//Istanze

$edomalf = new User("1");
$edomalf->setName("Edoardo");
echo ("Nome: ".$edomalf->getName()."<br>");
$edomalf->cognome="Malfatto";
echo ("Cognome: ".$edomalf->cognome."<br>");
$edomalf->username="edomalf";
echo ("Username: ".$edomalf->username."<br>");
$edomalf->email="edoardo@gmail.com";
echo ("Email: ".$edomalf->email."<br>");




$mario_rossi = new User("2");
$mario_rossi->setName("Mario");
echo ("Nome: ".$mario_rossi->getName()."<br>");
$mario_rossi->cognome="Rossi";
echo ("Cognome: ".$mario_rossi->cognome."<br>");
$mario_rossi->username="mario_rossi";
echo ("Username: ".$mario_rossi->username."<br>");
$mario_rossi->email="mariorossi@gmail.com";
echo ("Email: ".$mario_rossi->email."<br>");
