<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once('php/common.php');
    require_once('php/info.php');

    header('Content-Type: text/html');

    html5_header(
        "BitBuy",
        array(
            'css/normalize.css', 'css/foundation.css'

        )
    );

    menu_css();
    html5_js('js/vendor/modernizr.js');
    ?>


</head>
<body>

<?php
menu();
?>

<br><br>
<div class="row" style="  position: absolute;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */  transform: translate(-50%, -50%);
">

    <div class="small-12 small-centered columns">
        <img src="img/404.png" alt="404" style="height: auto; width: 100vw;" >
    </div>

    <br><br>


</div>
<?php
abs_footer();
?>


<?php

html5_js(
    array(
        'js/vendor/jquery.js', 'js/foundation/foundation.min.js',

        'js/elevator.js',

    )
);

menu_js();
?>

<script>
    $(document).foundation();
</script>
</body>
</html>