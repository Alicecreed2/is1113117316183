<!DOCTYPE html>
<html>
    <head>
        <title>select products</title>

        <!-- jquery--> 
        <script src="https://ajax.googleapps.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    <h4>select a product</h4>
    
    <br/>
    
    <form method= "POST" action="ebus2.php">
    
    <label for ="salesforce">
    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
    salesForce @ $100
    </label>
    
    <br/>
    
    <label for="aws">
      <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
      AWS @ $300
      </label>

  
  <br/>
    <br/>
  
    <label for ="subtotal">
        subtotal
    <input type="text" id="subtotal" name="product" value="0.00" readonly/>
    </label>
    
    <br/>
    
    <label for ="total">
        subtotal
    <input type="text" id="total" name="product" value="0.00" readonly/>
    
    <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
    
    
    </form>
    
    <br/>
    <button onClick="calcSub()">Calculate Cost</button>
    <a role="button" href="ebus1.php">Clear Choice</a>
 
    </body>
</html>