<?php

class BankAccount
{
    /**
     * le numero du compte
     */
    public string $accountNumber;
    private float $balance = 0;

    const TAX = 0.2;


    public function __construct($accountNumber){
        $this->accountNumber = $accountNumber;
    }

   /**
    * modifie le solde du compte
    *
    * @param float $montant
    * @return self
    */
    public function setBalance(float $montant):self{
        if($montant < 250){
            echo " Votre dépôt est insuffisant !";
        }else{
            $this->balance= $montant;
            echo " Votre dépôt est accepté !";
        }
        
        return $this;
    }

  /**
   * Retourne le solde du compte
   *
   * @return float
   */
    public function getBalance():float{
        return $this->balance;
    }
}



$compteBancaireDeJoe = new BankAccount('446646666');
$compteBancaireDeJoe->setBalance(260);
echo PHP_EOL;
echo "La taxe prélevée est : ".BankAccount::TAX.PHP_EOL;
echo $compteBancaireDeJoe->getBalance().PHP_EOL;






