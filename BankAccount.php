<?php

class BankAccount
{
    public $accountNumber;
    private $balance = 0;

    public function __construct($accountNumber){
        $this->accountNumber = $accountNumber;
    }

    public function setBalance($montant){
        if($montant < 250){
            echo " Votre dépôt est insuffisant !";
        }else{
            $this->balance= $montant;
            echo " Votre dépôt est accepté !";
        }
        
    }

   
    public function getBalance(){
        return $this->balance;
    }
}



$compteBancaireDeJoe = new BankAccount('446646666');
$compteBancaireDeJoe->setBalance(260);
echo PHP_EOL;

echo $compteBancaireDeJoe->getBalance().PHP_EOL;






