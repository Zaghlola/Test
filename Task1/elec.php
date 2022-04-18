<?php

if($_POST){
   
    $vat =0.2;
    $number=$_POST['number'];
    if($number==0 && $number<0){
        
        $result="<div class='alert alert-dander'>
        <p>
         Entar Valid Number
        </p>
        </div>
      
        ";
    }
    
    elseif($number<=50){
        $unitPrice=0.5;
        
        $priceAfterUnitPric=$number*$unitPrice;
        $amountVat=$priceAfterUnitPric*$vat;
        $priceAfterVat=$priceAfterUnitPric + $amountVat;
           
        }
        elseif(($number>50) && ($number<=150)){
            $unitPrice=0.75;            
            $priceAfterUnitPric=$number*$unitPrice;
            $amountVat=$priceAfterUnitPric*$vat;
            $priceAfterVat=$priceAfterUnitPric + $amountVat;
               
        }
        elseif(($number>150) && ($number<=250)){
            $unitPrice=1.2;            
            $priceAfterUnitPric=$number*$unitPrice;
            $amountVat=$priceAfterUnitPric*$vat;
            $priceAfterVat=$priceAfterUnitPric + $amountVat;
               
        }
        else{
            $unitPrice=1.5;            
            $priceAfterUnitPric=$number*$unitPrice;
            $amountVat=$priceAfterUnitPric*$vat;
            $priceAfterVat=$priceAfterUnitPric + $amountVat;
               
        }
        $vatpresent = $vat*100;
        $result="
        <div class='alert alert-success'>
        <p>
          Unit Price : $unitPrice
        </p>
        <p>
            Price After Unit Price : $priceAfterUnitPric
        </p>
        <p>
            Vat :$vatpresent %
        </p>    
        <p>
          Total Price After Vat :  $priceAfterVat EGP
        </p>
        </div>        
        ";
   




    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                Smart Invoice
              </div>
              <div class="col-4 offset-4 mt-5">
                    <form action="" method="post">
                        <div class="form-group">
                          <input type="number" name="number" id="number" class="form-control" placeholder="Enter Unit Charges" aria-describedby="helpId">
                         
                        </div>
                        
                        <div class="form-group text-center">
                           <button class="btn btn-outline-primary"> Show Invoice </button>
                        </div>
                        <?php  if(isset($result)){
                            echo $result;
                        } ?>
                    </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>