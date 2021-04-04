<?php 

   require 'header.php';

?>

<style>


#contact .card:hover i,#contact .card:hover h4{
	color: #87d37c;
}


#contact{

    position: absolute;
    top: 32.5vh;
    left: 9vw;
    width: 80%;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    
  </head>
  <body>

  <style>

          
body{
    background: rgb(0,0,0,0.8);
    color:white;
    font-family: 'Domine', serif;		  

}

.card{

    background: none;
}




#contactCard{
    position: absolute;
    top:5%;
    left:34%;
    width: 30%;
    height : 15%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size: 2.5vw;
}








  </style>





<div id='contactCard' >
     Contact me
</div>


    <section id="contact">
       <div class="container">
   
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" style='color:white' aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Phone</h4>
                    <p>+33 6 22 85 94 05</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fas fa-envelope fa-5x mb-3" style='color:white' aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5" style='color:white'>Mail</h4>
                   <address>michael.mangajocky@gmail.com </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fab fa-linkedin fa-5x mb-3" style='color:white' aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Linkedin</h4>
                    <address><button>Reach me</button> </address>
                  </div>
                </div>
             </div>
           
           </div>
       </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>