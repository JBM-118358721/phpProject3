<!DOCTYPE html>
<html>
    <body>
            <!-- //starting the session to get the session variable from the last page-->

<?php

session_start();
$totalValue2 = $_POST('txtTotal');
$fullNameValue = $_POST('txtName');
echo "the name is :".$fullNameValue.".";
echo "<br></br>";
echo "the total vale is :".$totalValue2."."
        ?>
    </body>
</html>

