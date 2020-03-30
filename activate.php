<?php
if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
 header("location: ./index.php?content=message&alert=hacker-alert");
    
}
?>
<div class="text">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <form action="./index.php?content=activate_script" method="post">
                    <div class="form-group">
                        <label for="password">choose a password</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password-check">confirm password</label>
                        <input type="password" class="form-control" name="password-check" id="password" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-danger">change password</button>
                    <h5 id="emailHelp" class="form-text text-muted">Our passwords protection is of our highest regard, and we garantee that only you and those we deem worthy have permition to view and know it.</h5>
                    <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"] ?>">
                    <input type="hidden" name="id"  value="<?php echo $_GET["id"]  ?>">
                </form>
            </div>
            <div class="col-12 col-sm-6">
                <img class="form-img" src="https://www.verdermethersenletsel.nl/media/drankgebruik-en-afasie/normal/communicatie.png" alt="afasie info">
            </div>
        </div>
    </div>
</div>