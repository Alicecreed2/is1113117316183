<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
       
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
h4 {
    font-size:40px;
    color:white;
}
            
            /* Ebusiness2 */
            
.ebus2.heading{
    position: absolute;
    top: 10%;
    left: 42%;
    font-size:40px;
    color:white;
}
.lbl.name{
    position: absolute;
    top: 20%;
    left: 43%;
}
.lbl.email{
    position: absolute;
    top: 25%;
    left: 43%;
}
.lbl.card{
    position: absolute;
    top: 30%;
    left: 43%;
}
.lbl.pin{
    position: absolute;
    top: 35%;
    left: 43%;
}
.btn_proceed{
    position: absolute;
    top: 85%;
    left: 43%;
    
    background-color: #0fc41e;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    padding: 5px 5px;
    border-radius: 3px;
    font-size: 90%;
}
.btn_proceed:hover{
    cursor: pointer;
}
.btn_validate{
    position: absolute;
    top: 80%;
    left: 47%;
    
    background-color: #d60b0b;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    padding: 5px 5px;
    border-radius: 3px;
    font-size: 90%;
}
.btn.validate{
    cursor: pointer;
}
.home_btn{
    position: absolute;
    top: 90%;
    left: 45%;
    
    background-color: #0450f2;
    border: none;
    color: #000;
    text-align: center;
    text-decoration: none;
    padding: 6px 6px;
    border-radius: 3px;
    font-size: 95%;
}
.home_btn:hover{
    cursor: pointer;
}
html, body{
 background: url("https://images.unsplash.com/photo-1464600923926-4ff72f9505f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=865f5af0ad4d68038d54b1043886b087&auto=format&fit=crop&w=750&q=80") no-repeat center;
 background-size: cover; 
 
 
 
}
.logo {
 position:absolute;
 top:10%;
 left:000%;
 height:25%;
 width:30%;
 mix-blend-mode: multiply;
 
 
}
.writing {
    font-size:30px;
    color: black;
    
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
        
    
    
    
         <div class="logo">
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/857/615855857_758f9e2d-6308-4119-9150-af6a61381d64.png?cb=15203410307" height="150px" width="300px">
        </div>
        <center>
        <h4 class="ebus2.heading">Please enter payment details</h4>
        <div class="writing">
        
        <form action="ebus3.php" method="POST">
            
            <label for="user_name" class="lbl.name">
                Name:
                <input type="name" id="user_name" name="user_name" placeholder="Enter Your Name">
            </label>
            
        <br/><br/>
            
            <label for="user_email" class="lbl.email">
                Email address:
                <input type="email" id="user_email" name="user_email" placeholder="eg123@gmail.com">
            </label>
            </br>
            </br>
            
                        <label for="user_no" class="lbl.no">
                Telephone number:
                <input type="number" id="user_no" name="user_no" placeholder="000 0000000">
            </label>
        
            <br/>
            <br/>

           <label for="user_card" class="lbl.card">
                Card number:
                <input type="number" id="user_card" name="user_card" placeholder="0000 0000 0000 0000">
            </label>
        
            <br/>
            <br/>
            
            <label for="user.pin" class="lbl.pin">
                PIN
                <input type="pin" id="user.pin" name="user.pin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                 </div>
                <br>
                
            </label>
        
            
            <br>
            <br>
            <button class="btn_validate" onClick="validateName()">Validate</button>
            <button class="btn_proceed" type="submit" id="btn_Purchase" disabled>Proceed with  your Purchase</button>
            
            
      
        </center>
          </form>
        <br>
        
   
    
        <?php  
        
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
         $_SESSION["user_email"] = $_POST["user_email"];
        $_SESSION["user_name"] = $_POST["user_name"];
         
         
          
        ?>
     <button><a class="home_btn" href="../Shop/home.html">Cancel purchase.</a></button>
    </body>
</html>