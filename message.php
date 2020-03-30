<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id = (isset($_GET["id"]))? $_GET["id"]: "";
$pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";

$time = 3;
$page = "register";
switch ($_GET["alert"]) {    
case 'no-email':
    echo '<div class="alert mx-auto mt-5 alert-info" role="alert ">
        No email filled in
        <hr>
        Please fill in an email
        </div>';
break;
case 'emailexists':
        echo '<div class="alert mx-auto mt-5 alert-danger" role="alert ">
        We already have this email 
        <hr>
        try another one
        </div>';
break;
case'insert-mail-error';
echo '<div class="primairy mx-auto mt-5 alert-danger" role="alert ">
registration failed
<hr>
please re-try
</div>';
break;
case'succes';
$time = 6;
$page = "login";
echo '<div class="primairy mx-auto mt-5 alert-danger" role="alert ">
you succesfully registerd for on our website. soon you will recieve o an e-mail with an activation-mail
<hr>

</div>';
break;
case'password-empty';
$time = 3;
$page = "activate&id=$id&pwh=$pwh";
echo '<div class="primairy mx-auto mt-5 alert-warning" role="alert ">
one or both fields were left empty
<hr>
please re-try
</div>';
break;
case'hacker-alert';
$time = 3;
$page = "home";
echo '<div class="primairy mx-auto mt-5 alert-danger" role="alert ">
you dont have rights on this page
<hr>
</div>';
break;
case'passwords-unmatched';
$time = 3;
$page = "activate&id=$id&pwh=$pwh";
echo '<div class="primairy mx-auto mt-5 alert-warning" role="alert ">
the passwords you entered dont match
<hr>
please try again
</div>';
break;
 default:
 header("location: ./index.php?content=home");
break;
}
    header("Refresh: $time; url=./index.php?content=$page");
