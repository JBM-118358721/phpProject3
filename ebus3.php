<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
       <style>
          body {
        background-image: url("annie-spratt-1365747-unsplash.jpg");
        background-repeat: repeat-y;
        }
        h1 {
            color: yellow;
            text-align: center;
        }
        center{ 
            color: yellow;
            
        
        }
        td {
            color: yellow;
        }
        
        </style>
    </head>
    <body>
        <a href ="Ebus2.php">Back</a>
    <center>
        <?php
       
        session_start();
        $totalValue2 = filter_input(INPUT_POST, 'txtTotal');
        $fullNameValue =filter_input(INPUT_POST, 'txtName');
                echo "<br></br>";
                echo "<br></br>";
                echo " User Name:".$fullNameValue.".";
                echo "<br></br>";
                echo " The payment needed is  " .$totalValue2.".";
        ?>
        </center>   
    </body>
</html> 