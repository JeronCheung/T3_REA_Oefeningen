<link href="../css/style.css" rel="stylesheet">
<div id='footer'>
<?php
    if (isset($_SESSION["Name"]))
    {
        echo "<p>" . $_SESSION["Name"] . "|" . date("l jS \of F Y h:i:s A") . "</p>" ;
    }
    else
    {
        echo "<p>" . date("l jS \of F Y h:i:s A"). "</p>" ;
    }

?>
</div>
