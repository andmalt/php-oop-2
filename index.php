<?php

class User{

    protected $nome;
    protected $eta;
    protected $sconto;
    protected $carrello;
    
    protected function __construct($nome,$eta,$sconto,$carrello){
        $this->nome = $nome;
        $this->eta = $eta;
        $this->sconto = $sconto;
        $this->carrello = $carrello; 
    }

    

}

?>

