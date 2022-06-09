
<html>
 <head>
     <title> Homepage </title>     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
 </head>
 <body>
    <div class="row topnav">
         <h3 style="margin-left: 500px;">Online Cab Service</h3>
         <a href="logoutprocess.php">   <button style="float:right; margin-top:-22px; background-color:maroon;"> Log Out
         </button>
         </a>
   	</div>
       <div class="am_heading"  >
  <h2 class="hd" >Fill form to ride</h2> 
</div>
	
 <form style="margin:27px; margin-left:56px;" method="POST" action="applyrideprocess.php">
        <div class="form-field">
          <label class="li" for="exampleInputEmail1">Current Location</label>
          <input type="text" name="current" id="uname" class="form-control" style="margin-left:-3px;" size="32">
        </div>
        <div class="form-field">
          <label class="li">Destination</label>
          <input type="text" id="des" name="destination" class="form-control" id="exampleInputPassword1" style="margin-left:-2px;" size="32">
        </div>
        <br>

       
        <button type="Submit" class = "submit_btn" name="Submit" style="margin-left:10px; background-color: green;">Submit</button>
        <button type="Reset" class = "reset_btn" name="Reset" style="margin-left:10px;">Reset</button>
  
        </form>
  
    </body>