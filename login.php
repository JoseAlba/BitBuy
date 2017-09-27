<?php
include_once ('config.php');
if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $dbh = new PDO('pgsql:host=localhost;port=26257;dbname=' . DB_DATABASE,
            DB_USERNAME,  DB_PASSWORD, array(
                PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => true,
            ));

        $sth = $dbh->prepare("SELECT * FROM " . DB_DATABASE . ".users where username='" . $username . "' and password='" . $password . "'");
        $sth->execute();
        $result =  $sth->rowCount();

//        $dbh->exec("INSERT INTO " . DB_DATABASE . ".users
//        (id,username,password,btc_addy) VALUES(DEFAULT,'" . $username . "','" . $password . "')");
//        header("Location:registersuccess.php");

    } catch (Exception $e) {
        print $e->getMessage() . "\r\n";
        exit(1);
    }

//    echo $result;
    if($result > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['loggedin'] = true;
        header("Location:dashboard");
    }
    else{
        echo '<h1 align="center" style="color:red">Account Doesn\'t Exist. Try Again.</h1>';
    }

}

?>

<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name= "viewport" content= "width=device-width initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/foundation.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"
    </head>
    <body data-gr-c-s-loaded="true" style="
    margin-left: 35%;
    margin-right: 35%;
    padding-top: 10%;
"><div class="grid-container">
        <div class="large-12 cell">
            <div class="loginBracket">
                <div class="large-12 cell">
                    <h3 style="text-align: left; float:left">Sign In</h3>

                    <a class="signRegister" href="register.php"><h3 style="text-align: right;float: right;">Sign up</h3></div></a>

                <form action="/login.php" method="POST">
                    <div class="large-12 cell">
                        <input type="text" placeholder="Username" required="" name="username">
                    </div>
                    <div class="large-12 cell">
                        <input type="password" placeholder="Password" required="" name="password">
                    </div>
                    <div class="large-12 cell">
                        <input type="submit" name="submit" class="button expanded" value="Login">
                        <hr>
                    </div>
                </form>

            </div>
        </div>
    </div>

    </body>
</html>
