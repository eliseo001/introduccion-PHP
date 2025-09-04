<?php
declare (strict_types=1);
// $sale = new Sale(10.5, date("Y-m-d"));
// $sale = new Sale(10.5, date("Y-m-d"));
// echo gettype($sale->total);
// echo Sale ::$count."\n";
// Sale::reset();

$sale = new Sale(10.5, date("Y-m-d"));
//$concepts = new Concept("cerveza",10.2);
$onlineSale = new OnlineSale(15,date("Y-m-d"),"tarjeta");
echo $onlineSale->createInvoice();
echo $onlineSale ->showInfo();
// $sale ->addConcepts($concepts);

// print_r($sale->concepts);
// echo Sale ::$count."\n";

//  $sale->createInvoice();
// print_r($sale);

//clase padre
class Sale{
    public float $total;
    public String $date;
    public array $concepts;
    public static $count;

    public function __construct(float $total,string $date){
        $this->total =$total;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcepts(Concept $concepts){
        $this->concepts[]=$concepts;
    }
    // public function __destruct(){
    //     echo "Se ha eliminado el objeto";
    // }
    public function createInvoice(){
        echo"Se creo la factura";

    }
    public static function reset(){
        self::$count=0;
    }
 
}
//clase hija de Sale
class OnlineSale extends Sale{
    public $paymentMethod;

    public function __construct(float $total, string $date, string $paymentMethod){
        parent::__construct($total,$date);
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
            $this->desciption = $description;
            $this->amount =$amount;
        }

    }
?>