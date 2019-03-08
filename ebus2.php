<?php
session_start();
$fullNameValue = "";
$totalValue2="";
/*
 * * create a session variable for the mobile number
 */
$totalValue = filter_input(INPUT_POST, 'txtTotal');
        $_SESSION['txtName'] =$fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
       
 ?>     
<!DOCTYPE html>
        <html>
            <HEAD>
                <TITLE>Personal Details</TITLE>
                <title>JBM-118358721</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
        <style>
          body {
        background-image: url("annie-spratt-1365747-unsplash.jpg");
        background-repeat: repeat-y;
        }
        h1 {
            color: yellow;
            text-align: center;
        }
        td {
            color: yellow;
        }
        
        </style>
            </HEAD>
             
            <body>
                <a href ="Ebus1.php">Back</a>
                <div class ="form">
                   
                    <form name =" Details" method="post" action="Ebus3.php">
                        <center>
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b></td>
                                    <td><b>Please Enter your Details Below</b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value=""/></td> 
                                </tr>
                                 <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" id="txtNum" name="txtNum" value=""/></td> 
                                </tr>
                                 <tr>
                                    <td>Password</td>
                                    <td><input type="text" id="txtPassword" name="txtPassword" value=""/></td> 
                                </tr>
                                <tr>                              
                                    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue ;?>"/></td> 
                                </tr>
                            </table>
                        </center>
                        <center>
                            <input type="submit" name="btnContinue" id="btnContinue" oneclick="" value="Continue"/>
                        </Center>
                    </form>
                </div>
            </body>

        </html>





