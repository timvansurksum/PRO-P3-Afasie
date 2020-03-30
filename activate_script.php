 <?php
    include("./connect_DB.php");
    include("./sanitize.php");

    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);
    $password = sanitize($_POST["password"]);
    $passwordcheck = sanitize($_POST["password-check"]);

    if (empty($_POST["password"]) || empty($_POST["password-check"])) {
        header("location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
        }
    elseif (strcmp($password, $passwordcheck)) {
        header("location: ./index.php?content=message&alert=passwords-unmatched&id=$id&pwh=$pwh");
    }
    else {
        $sql = "SELECT * FROM `users` WHERE id = $id and password = $pwh"
        
    }
    ?>