
<?php
  session_start();
  $dbName="rp";
  $cost;
  $con= mysqli_connect("thilinamysql.mysql.database.azure.com","thilina@thilinamysql","abcd@123",$dbName);
  
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>


    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>
<body>

    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="home">
        <a href="#home" class="navbar-brand pl-5"><img src="Photo/1x/Logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-control="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-3 active">
                    <a href="Home.html" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-3">
                    <a href="Home.html " class="nav-link">Services</a>
                </li>
                <li class="nav-item px-3">
                    <a href="Design.html" class="nav-link">Design</a>
                </li>
                <li class="nav-item px-3">
                    <a href="#contact" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

     <div id="main-content" class="container">
    <h2 id="Design-title" class="text-center" style="margin-bottom: 50px ; ">Custom Designs</h2>
    

    <section class="row">
      
    <?php

        $sql="select * from custom";
        $result=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result)>0)
        {
          while($row=mysqli_fetch_array($result))
          {?>

            <div class="Single-Design-tile col-md-6">
              <div class="row">
                <div class="col-sm-5">
                  <div class="Single-Design-photo">
                    <div>C.01</div>
                    <img class="img-responsive" width="250" height="150" src="<?php echo $row['photoUrl'];?>" alt="Item">
                  </div>
            
                </div>
                <div class="Single-Design-description col-sm-7">
                  <h3 class="Single-Design-title"><?php echo $row['tittle'];?></h3>
                  <p class="Single-Design-details">Rs.<?php echo $row['bodyPrice'];?> (Body Kit Only) <br> Rs.<?php echo $row['withPaintPrice'];?> (With Paint Job)</p>
                </div>
              </div>
              <hr class="visible-xs">
            </div>

           
          
          <?php 
          }
          
        }
        mysqli_close($con);
        ?>
    
    
    
    
      