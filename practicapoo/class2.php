<?php
declare (strict_types=1);


$sale = new Sale(date("Y-m-d"));

$onlineSale = new OnlineSale(date("Y-m-d"),"tarjeta");
// echo $onlineSale->createInvoice();
// echo $onlineSale ->showInfo();

$concept = new Concept("Cerveza",32.3);
$concept2 = new Concept("Cerveza",22.3);

$sale->addConcept($concept);
$sale->addConcept($concept2);

echo $sale->getTotal();

class Sale{
    protected float $total;
    public String $date;
    public array $concepts;
    public static $count;

    public function __construct(string $date){
     //   $this->total =$total;
        $this->date = $date;
        $this->total=0;
        $this->concepts = [];
        
        self::$count++;
    }

    public function addConcept(Concept $concept){
        $this->concepts[]=$concept;
        $this->total +=$concept->amount;
    }
  
    public function createInvoice(){
        echo"Se creo la factura";

    }
    public static function reset(){
        self::$count=0;
    }
  public function getTotal(): float {
        return $this->total;
    }
}
//clase hija de Sale
class OnlineSale extends Sale{
    public $paymentMethod;

    public function __construct( string $date, string $paymentMethod){
        parent::__construct($date);
        $this->paymentMethod = $paymentMethod;
    }
    public function showInfo():string{
        return "la venta tiene un monte de: $this->total";
    }


}

   class Concept{
        public string $description;
        public float|int $amount;
        

        public function __construct(string $description, int|float $amount){
            $this->description = $description;
            $this->amount =$amount;
        }

    }
?>