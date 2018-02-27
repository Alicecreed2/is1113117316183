<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <style>
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
  background-color:#0e1d38;
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 28px;
  padding:20px;
  width:200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

  
 }
 
 .button {
 position:absolute;
 bottom:1%;
 left:50%;
 
}
.logo {
 position:absolute;
 top:15%;
 left:000%;
 height:25%;
 width:30%;
 mix-blend-mode: multiply;
 
 
}

        </style>
         <ul>
         
            <li><a href = "../homepage.html">Home</a></li>
            <li><a href = "CV/cv_page1.html">Curriculum Vitae </a></li>
            <li><a href = "intrests./interests.html">Interests</a></li>
            <li><a href = "Shop/home.html">Shop</a></li>
            <li><a href = "https://github.com/Alicecreed2/is1113117316183/graphs/commit-activity">GitHub</a></li>
            
            
        </ul> 
        

    </head>
    <body>
        
         <div class="logo">
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/507/592328507_cf010a1a-7141-4940-8f7d-ac4e04b6a971.png?cb=1519667357" height="150px" width="300px">
        </div>
        
        <center>
        <h4>Purchase Receipt</h4>
        
        <?php  
        // Set session variables
          $_SESSION["user.name"] = $_POST["user.name"];
          $_SESSION["user.email"] = $_POST["user.email"];
        ?>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["user.name"] . ".";
            ?>
        </p>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["user.email"] . ".";
            ?>
        </p>
        
        <p>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
        
         <div class="button">
   <a href="..Shop/home.html" class="buttonhover"> Return to Shop Homepage</a>
   </div>
        </center>
        
        
    </body>
</html>
