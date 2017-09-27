<?php
require_once ("../php/common.php");

$dash_board_item = array("Over View", "Active Product", "Add BTC Wallet", "History", "Add Product");
?>
<head>
    <?php
    header('Content-Type: text/html');

    html5_header(
        "BitBuy",
        array(
            '../css/normalize.css', '../css/foundation.css',

            'css/foundation.css', 'css/jstyle.css'
        )
    );
    ?>

    <link rel='stylesheet' type='text/css' href='../menu/css/reset.css' />
    <link rel='stylesheet' type='text/css' href='../menu/css/style.css' />
    <?php
    html5_js('js/vendor/modernizr.js');
    ?>

</head>
<body style="background-color: rgb(246,246,246);">



<div class="small-12 medium-3 columns" style="margin: 0; padding: 0;">
    <div class="top_name" style="background-color: orange; height: 10%; width: 100%;">
        <h4 class="users_name" style="text-align: center"><?php echo $_SESSION['username']?></h4>
    </div>
    <div class="dash_board" style="width: 100%">
        <a href="/dashboard"><p> <img src="img/iconmonstr-dashboard-5-240.png" alt="dashboard"> Dashboard</p></a>
        <a href="#"><p> <img src="img/iconmonstr-delivery-11-240.png" alt="products"> Activate Products </p></a>
        <a href="#"><p> <img src="img/iconmonstr-bitcoin-6-240.png" alt="bitcoin"> Add BTC Wallet Key </p></a>
        <a href="#"><p> <img src="img/iconmonstr-time-17-240.png" alt="history"> History </p></a>
        <a href="#"><p> <img src="img/iconmonstr-chart-6-240.png" alt="charts"> Graphs </p></a>
        <a href="products.php"><p> <img src="img/iconmonstr-candy-3-240.png" alt="my_product">My Products</p></a>
        <a href="#"><p> <img src="img/iconmonstr-log-out-13-240.png" alt="logout"</p>Log Out</p></a>
    </div>
</div>

<div class=" small-12 medium-9 columns" style="margin: 0; padding: 0;">
    <h1>Add a BTC wallet</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" placeholder="BTC Wallet" required name="walletSubmit"/>
        <input type="submit" name="submit" class="button expanded" value="Save">
        <hr>
    </form>

</div>


<?php

footer();
?>


<?php

html5_js(
    array(
        '../js/vendor/jquery.js', '../js/foundation/foundation.min.js',

        '../js/elevator.js',

        '../js/conversational_form.js'
    )
);
?>

<script src="../menu/js/jquery-2.1.1.js"></script>
<script src="../menu/js/jquery.mobile.custom.min.js"></script>
<script src="../menu/js/main.js"></script>


</body>

</html>