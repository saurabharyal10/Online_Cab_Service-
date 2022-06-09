<?php
  include('db/connection.php');
  
 ?>
<html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Homepage </title>     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body onload="display_slider()">
    <div class="row topnav">
         <h3 style="margin-left: 35%;margin-top:10px;">Online Cab Service</h3>
   	</div>
	<div class="container1">
      <ul class="navbar" >
        <li><a href="home.php">Home</a></li>
   		   <li><a href="about_project.php">About Project</a></li>
   		   <li><a href="register.php">Register</a></li>
         <li><a href="login.php"> Login</a></li>
         <li><a href="contactus.php">Contact Us</a></li>
         <li><button style="background-color: maroon; border-radius: 15px 15px 15px 15px; margin-left: 50px;"><a href="login.php">Book Now !!!</a></button></li>
     </ul>
    </div>

    <div class="home_img">
      	
             <div class="slider-container">
               	<div class="slider">
                   <img src="img/pic1.jpg">
                   <div class="next" onclick="next();" > > </div>
                   <div class="pre" onclick="pre();">  < </div>
               	</div>
               	<div class="slider">
                   <img src="img/pic3.png">
                   <div class="next" onclick="next();" > > </div>
                   <div class="pre" onclick="pre();">  < </div>
               	</div>
               	<div class="slider">
                   <img src="img/pic11.jpg">
                   <div class="next" onclick="next();" > > </div>
                   <div class="pre" onclick="pre();">  < </div>
               	</div>        	
        	</div>
          
          
     
    </div>

<!-- <div class="rowbar">
  <div class="container">
  	<div class="col-md-9">
    	<h2 class="hd">Movie Ticket Booking System</h2>
    	<p class="desc">
    		Movie Ticket Booking is an online portal for booking online movie ticker.A ticket may be valid for any seat ("free seating") or for a specific one ("allocated seating"). Sometimes,for some train journeys,both are available with an increased charge for a reserved seat. Free seating in a train means the risk that one has to stand,but in ex: a cinema it means a seat is guareented.just not a specific one.
    		<br/>
    		Paper or card is generally used,although plastic may be used instead for durability. Some have a barcode or magnetic stripe for keeping simple data stored on them, higher end ones use chips to store more data and prevent counterfelting. 
    		<br/>
    		A paper ticket often is performed so it can be separated into two parts, one (the ticket stub) to be kept by the customer, and one to be kept by the ticket controller.Whether or not one can leave and re-enter with the customer part only varies. It may not be allowed to avoid subsequent use of one ticket by multiple people,or even simultaneous use by giving the ticket to someone before the ticket check (if this is physically possible), but it may also be allowed,ex: in a movie theater to buy,during a movie, a snack or drink before the ticket check and re-enter.
    		<br/>
    		Movie Ticket Booking is an online portal for booking online movie ticker.A ticket may be valid for any seat ("free seating") or for a specific one ("allocated seating"). Sometimes,for some train journeys,both are available with an increased charge for a reserved seat. Free seating in a train means the risk that one has to stand,but in ex: a cinema it means a seat is guareented.just not a specific one.
    		<br/>
    		Paper or card is generally used,although plastic may be used instead for durability. Some have a barcode or magnetic stripe for keeping simple data stored on them, higher end ones use chips to store more data and prevent counterfelting. 
    		<br/>
    		A paper ticket often is performed so it can be separated into two parts, one (the ticket stub) to be kept by the customer, and one to be kept by the ticket controller.Whether or not one can leave and re-enter with the customer part only varies. It may not be allowed to avoid subsequent use of one ticket by multiple people,or even simultaneous use by giving the ticket to someone before the ticket check (if this is physically possible), but it may also be allowed,ex: in a movie theater to buy,during a movie, a snack or drink before the ticket check and re-enter.
    		<br/>	
    	</p>
	</div>
  	<div class="col-md-3" style="margin-left: 0px;">
  		<h3 class="ad">Advertisement</h3>
     	<img src="img/img14.jpg" class="ad1" alt="img">
     	<img src="img/img18.jpg" class="ad2" alt="img">
  	</div>
  </div>
</div>
 -->
 
 </body>
 <script type="text/javascript">
           var slider_index=0;
           var slider_obj=document.getElementsByClassName("slider");
           function display_slider(){
               for(var i=0;i<slider_obj.length;i++){
               slider_obj[i].style.display="none";
             }
             slider_obj[slider_index].style.display="block";
             setTimeout(next,10000);
           }
           function next(){
             slider_index++;
             if(slider_index>=slider_obj.length){
               slider_index=0;
             }
             display_slider();
           }
           function pre(){
             slider_index--;
             if(slider_index<0){
               slider_index=slider_obj.length-1;
             }
             display_slider();
           }
 	</script>  
 </html>
