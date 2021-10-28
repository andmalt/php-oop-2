<?php

class User{

    protected $nome;
    protected $eta;
    protected $sconto;
    protected $carrello = [];
    protected $cartaDiCredito = [];

    /**
     * Create User
     *
     * @param string $nome is Name
     * @param integer $eta is Age
     */
    public function __construct($nome,$eta){
        $this->nome = $nome;
        $this->eta = $eta;
    }

    public function inserisciCarta($carta){
        $this->cartaDiCredito[] = $carta;
        if(count($this->cartaDiCredito) > 0 && $carta->seriale != null){
            $this->sconto = 20;
        }else{
            $this->sconto = 0;
        }
    }

    public function inserisciCarrello($oggetto){
        $this->carrello[] = $oggetto;
    }
}

class Prodotto{

    protected $nome;
    protected $prezzo;

   
    protected function __construct($nome,$prezzo)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
}

class NoteBook extends Prodotto{

    protected $categoria = 'informatica';
    protected $quantity;

    public function __construct($quantity,$nome,$prezzo)
    {
        parent:: __construct($nome,$prezzo);
        $this->quantity = $quantity;
    }
}


/**
 * length to the card must is 16 string numbers
 */
class CartaDiCredito {
    public $seriale;

    /**
     * serial number of the credit card 
     * 
     * @param string $seriale
     */
    public function __construct($seriale)
    {
        if(strlen($seriale) == 16){
            $this->seriale = $seriale;
        } 
    }
}



$utente = new User('Andrea',33);
$carta = new CartaDiCredito('5555444466661111');
$notebook = new NoteBook(1,'PH Rozzo9',1800);


$utente->inserisciCarta($carta);
$utente->inserisciCarrello($notebook);

var_dump($utente);


?>

