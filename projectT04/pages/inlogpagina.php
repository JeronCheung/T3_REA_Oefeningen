
<?php
/*
 * Auteur:          Jeron Cheung
 * Datum:           10-06-2021
 * Beschrijving:    Loginpagina
 */

include "/inetpub/wwwroot/projectT04/includes/nav.php";
$pass = "welkom123";

// Start the session
session_start();
$_SESSION["userIsLoggedIn"] = false;
$_SESSION["userRole"] = "";
$_SESSION["usersUsername"] = "";
$redirectPage = $_SERVER['DOCUMENT_ROOT'] . '/pages/overzichtspagina.php';


//pakt altijd het absolute begin van je sever map
//in jou geval zal het rond de C:/inetpub/wwwroot/.....
include $_SERVER['DOCUMENT_ROOT'] . "/includes/db_functions.php";
//Start DB connection
startConnection();

//Empty variables
$result = null;
$message = "";

//Is the username set?
if(isset($_POST["username"]))
{

    //The SQL query where we check if the usernames match with what the user entered
    $query = "SELECT UserName, Password FROM [User] WHERE UserName = '". $_POST["username"] . "'";

    //Execute result
    $result = executeQuery($query);
    //Since the usernames are unique we make a variable with the found row
    $foundRow = $result->fetch(PDO::FETCH_ASSOC);

    if($foundRow == false)
    {
        $message = "Deze gebuikersnaam is niet gevonden";
    }
    else
    {
        //Check if username and password are a match with the found row
        if($_POST["username"] == $foundRow["UserName"] && $_POST["password"] == $foundRow["Password"])
        {
            //Set the user as logged in for the session
            $_SESSION["userIsLoggedIn"] = true;
            $_SESSION["usersUsername"] = $foundRow["UserName"];
            header("Location:../../projectT04/pages/overzichtspagina.php");
            die();
        }
        else
        {
            $message = "Incorrecte inlog gegevens.";
        }
    }
}

?>

<!-- error message -->
<p>
        <span class="errorMessage">
            <?php
                echo $message;
            ?>
        </span>
</p>

<!-- The login form -->
<form method="POST" action="">

    <label for="username">Gebuikersnaam</label>
    <input type="text" name="username" id="username" placeholder="Gebruikersnaam" required>
    <br>

    <label for="password">Wachtwoord</label>
    <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
    <br>
    <label for="inloggen"></label>
    <input type="submit" name="inloggen" id="inloggen" value="Inloggen">
</form>
<!--    link naar footer php -->
<?php
include "/inetpub/wwwroot/projectT04/includes/footer.php";
?>
