<?php

define('DB_SERVER', 'localhost:3036');
define('DB_USERNAME', 'bitbuy');
define('DB_PASSWORD', 'bitbuy');
define('DB_DATABASE', 'bitbuy');
$dbh = new PDO('pgsql:host=localhost;port=26257;dbname=' . DB_DATABASE . ';sslmode=disable',
    DB_USERNAME, DB_PASSWORD, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => true,
    ));

//$dbh->exec('SELECT * from bitbox.accounts');