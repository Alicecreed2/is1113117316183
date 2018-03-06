<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
         <!-- styling page -->
        <style>
        /* nav bar */
                      ul li a{
 text-decoration:none;
 color:black;
 
 
}

ul{
 height:20%;
 width:100%; 
 background:#97d6f7;
 text-align: center;
 

}


ul li{
  list-style:none;
  display:inline;
  position:relative;
  margin-left:120px;
  transform:translate(20%,30%);
  font-size:22px;
  
  
  
}


ul li a:hover{
color:white;
background:Blue;
padding:2%;
}

html, body{
 background: url("https://images.unsplash.com/photo-1464600923926-4ff72f9505f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=865f5af0ad4d68038d54b1043886b087&auto=format&fit=crop&w=750&q=80") no-repeat center;
 background-size: cover; 
 
 
 
}

/* hover button */
 
 .buttonhover {
  display: inline-block ;
  border-radius: 12px;
  background-color:#362bcf;
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 20px;
  padding:20px;
  width:150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

  
 }
 
 .button {
 position:absolute;
 bottom:25%;
 left:40%;
 
}
.logo {
 position:absolute;
 top:10%;
 left:000%;
 height:25%;
 width:30%;
 mix-blend-mode: multiply;
 
 
}

.writing{  
    
    font-size:30px;
    color: black;
    
}
h1 {
    font-size:40px;
    color:white;
}




        </style>
        </head>
           <!-- nav bar -->
           <body>
         <ul>
         
            <li><a href = "../homepage.html">Home</a></li>
            <li><a href = "CV/cv_page1.html">Curriculum Vitae </a></li>
            <li><a href = "intrests./interests.html">Interests</a></li>
            <li><a href = "Shop/home.html">Shop</a></li>
            <li><a href = "https://github.com/Alicecreed2/is1113117316183/graphs/commit-activity">GitHub</a></li>
            
            
        </ul> 
        

    
    <body>
        
         <div class="logo">
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/857/615855857_758f9e2d-6308-4119-9150-af6a61381d64.png?cb=1520341030" height="150px" width="300px">
        </div>
        
        <center>
        <h1>Purchase Receipt</h1>
        <div class="writing">
        <?php  
        // Set session variables
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
           $_SESSION["user_no"] = $_POST["user_no"];
        ?>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
          <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Number: " . $_SESSION["user_no"] . ".";
            ?>
        </p>
        
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: $ " . $_SESSION["total"] . ".";
            ?>
        </p>
        
        
        </div>
        
         <div class="button">
      <a href="../Shop/home.html" class="buttonhover"> Return to Shop Homepage</a>
   </div>
        </center>
        
    
    </body>
</html>
