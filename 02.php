<?php
class MyAccount{
    
    public $items = [];
    public $total = 0;

public function __construct(public $tk){}

public function addItems($name, $cost){
 $this->total += $cost;
 if($this->total > $this->tk){
    echo "Error: You don't have enough blance.\n";
    $this->total -=$cost;
    return;
  }
   $this->items[$name] = $cost;

}

 public function createReport(){
    echo "Initail Tk Was {$this->tk}.\n";
    foreach($this->items as $name => $cost){
        echo "{$name} - {$cost}\n";
    }
    echo "-----------------------------\n";
    echo "Total : {$this->total}\n";
    echo "Balance : ".($this->tk -$this->total)."\n";
        

 }

}


$myaccount = new MyAccount(1500); //instantiate
$myaccount->addItems("kaca Morich", 100);
$myaccount->addItems("alu", 50);
$myaccount->addItems("dim", 170);
$myaccount->addItems("morgi", 700);
$myaccount->createReport();

?>