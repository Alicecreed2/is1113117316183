<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
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



/* Ebusiness1 */
.ebuscontent{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0%;
    left: 0%;
}

.ebuscontent h1{
    position: absolute;
    top: 10%;
    left: 42%;
}

.ebuscontent .sales{
    position: absolute;
    top: 20%;
    left: 43%;
}

.ebuscontent .cloud9{
    position: absolute;
    top: 25%;
    left: 43%;
}

.ebuscontent .aws{
    position: absolute;
    top: 30%;
    left: 43%;
}

.ebuscontent .gmail{
    position: absolute;
    top: 35%;
    left: 43%;
}

.ebuscontent .sub{
    position: absolute;
    top: 50%;
    left: 43%;
}
.ebuscontent .dis{
    position: absolute;
    top: 55%;
    left: 43%;
}
.ebuscontent .vat{
    position: absolute;
    top: 60%;
    left: 43%;
}

.ebuscontent .tot{
    position: absolute;
    top: 65%;
    left: 43%;
}

.add.btn{
    position: absolute;
    top: 71%;
    left: 50%;
}

.add.btn.style{
    background-color: #4CAF50;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    padding: 5px 5px;
    border-radius: 3px;
    font-size: 90%;
}

.add.btn.style:hover{
    cursor: pointer;
}

.logo {
 position:absolute;
 top:15%;
 left:000%;
 height:25%;
 width:30%;
 mix-blend-mode: multiply;
 
 
}

.calc.btn{
    position: absolute;
    top: 75%;
    left: 50%;
    
    background-color: #ffff00;
    border: none;
    color: #000;
    text-align: center;
    text-decoration: none;
    padding: 6px 6px;
    border-radius: 3px;
    font-size: 95%;
}

.calc.btn:hover{
    cursor: pointer;
}

.clear.btn{
    position: absolute;
    top: 75%;
    left: 5%;
    
    text-decoration: none;
    color: red;
    padding: 4px 4px;
    border: solid 1px red;
    border-radius: 3px;
}

html, body{
 background: url("https://images.unsplash.com/photo-1464600923926-4ff72f9505f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=865f5af0ad4d68038d54b1043886b087&auto=format&fit=crop&w=750&q=80") no-repeat center;
 background-size: 130%; 
 
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
        
            
      
        
            
        
        <div class="ebuscontent">
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="ebus2.php">
            
            <!-- Display radio buttons for cloud service options -->
            <label for="salesforce" class="sales">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="cloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="aws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              Amazon Web Server @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="gmail">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            
            
            <!-- Breakign down of price -->
            <label for="subtotal" class="sub">
              Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="dis">
              Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
              <br>
              (- Discount)
            </label>
                
            <br>
            
            <label for="vat" class="vat">
              VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="tot">
              Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
              (- Discount + VAT)
            </label>
      
            <br>
            
            <div class="add.btn">   
              <button class="add.btn.style" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
            
          <!-- button for calculating price of the selected option -->    
          <button class="calc.btn" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          <!-- button for clearing options -->    
          <button><a class="clear.btn" href="ebus1.php">Clear Choice</a></button>
          
        </div>
        
    </body>
    
</html>