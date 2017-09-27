<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require_once('php/common.php');
    require_once('php/info.php');

    header('Content-Type: text/html');

    html5_header(
        "Bitbuy",
        array(
            'about/css/style.css', 'about/css/reset.css',

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
about();
footer();
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