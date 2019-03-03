<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>        
<!DOCTYPE html>
<html lang="en" xmls="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>EBusiness 1 </title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
    </head>
    
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="ebus3.php"
                  <h1>Shop Calculator</h1>
                <hr  />
                <center>
                    <table cellspacing="10"
                            <tr>
                            <td><b>Beverage</b></td>
                            </tr>
                            <tr>
                                <td>CocaCola</td>
                                <td><input type="radio" id="CocaCola" name="rdoGroup" value="1" /></td>
                            </tr>
                             <tr>
                                <td>Sprite</td>
                                <td><input type="radio" id="Sprite" name="rdoGroup" value="5" /></td>
                            </tr>
                             <tr>
                                <td>Fanta</td>
                                <td><input type="radio" id="Fanta" name="rdoGroup" value="30" /></td>
                            </tr>
                    </table>
                </center>
        <br />
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                    
                </tr>
                <tr>
                    <td>-Discount @30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+VAT @40%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
                    
                </tr>
                
            </table>
        </center>
    </body>
    
    
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

