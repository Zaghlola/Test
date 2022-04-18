<?php

if($_POST){
    
    $number=$_POST['number'];
    $root=$_POST['root'];
    if($number==0){
        
        $result="<div class='alert alert-success'>
        <p>
        There is no root for this number : $number
        </p>
        </div>
      
        ";
    }
    else{
        if($number>0){
         
          $x =$number** (1/$root);
            $result="<div class='alert alert-success'>
            <p>
            The root for this  Number equal: $x
            </p>
          
            </div>
          
            ";

        }
        else{
            $result="<div class='alert alert-danger'>
            <p>
            Enter valid number

            </p>
            </div>
          
            ";


        }
    }




    
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
                 Root Number 
              </div>
              <div class="col-4 offset-4 mt-5">
                    <form action="" method="post">
                        <div class="form-group">
                          <input type="number" name="number" id="number" class="form-control" placeholder="Enter Your Number" aria-describedby="helpId">
                         
                        </div>
                        <div class="form-group">
                          <input type="number" name="root" id="root" class="form-control" placeholder="Enter Root " aria-describedby="helpId">
                         
                        </div>
                        
                        <div class="form-group text-center">
                           <button class="btn btn-outline-primary"> Calc </button>
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