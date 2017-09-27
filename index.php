<!DOCTYPE html>
<html lang="en">

    <?php
    require_once('php/common.php');

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


<body>

<?php
menu();
?>
    <div class="row">
        <div class="small-6 small-centered columns">
            <div class="fullscreen">
                <img src="img/home.png" style="position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */  transform: translate(-50%, -50%);
  width: 50%; height: auto;
  ">
            </div>
        </div>

    </div>
<?php
abs_footer();
?>


<?php

html5_js(
    array(
        'js/vendor/jquery.js', 'js/foundation/foundation.min.js',

        'js/elevator.js',

        'about/js/main.js'
    )
);

menu_js();
?>

<script>
    $(document).foundation();
</script>
</body>
</html>