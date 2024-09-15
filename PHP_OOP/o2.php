<?php
class Fund{
    private $fund;

    function __construct($initialFund)
    {
        $this->fund=$initialFund;
    }
    function addFund($money){
        $this->fund+=$money;
    }

    function deductFund($money){
        $this->fund-=$money;
    }

    function totalFund(){
        echo "Total amount is {$this->fund}\n";
    }
}

$makeMoney=new Fund(100);
$makeMoney->totalFund();
$makeMoney->addFund(10);
$makeMoney->totalFund();
$makeMoney->deductFund(20);
$makeMoney->totalFund();