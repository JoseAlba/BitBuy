<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    require_once('php/common.php');

    header('Content-Type: text/html');

    html5_header(
        "BitBuy",
        array(
            'css/normalize.css', 'css/foundation.css',

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
        <!-- Conversational Form will auto-run because of attribute "cf-form" -->
        <form id="form" style="width: 100vw; height: 90vh;" method="post" id="my_form" action="mailto:albaj@uwindsor.ca" cf-form cf-context cf-preven-autofocus>

            <!-- Contact page ask for name -->
            <input id="contact_username"
                   type="text"
                   cf-questions="What is your name?"
                   name="username"
                       >

            <input id="contact_city"
                   type="text"
                   cf-questions="Greet to meet you {contact_username} &&Where are you from?"
                   name="city">

            <fieldset>
                <label for="email">Email</label>
                <input id="contact-email"
                       type="email"
                       pattern=".+\@.+\..+"
                       cf-error="E-mail not correct"
                       cf-questions="{contact_username}, if you want me to contact me I will need your email that way I can respond to your email!"
                       name="email">
            </fieldset>

            <input id="message"
                   type="text"
                   cf-questions="Now that I have your email {contact_username}, feel free to tell me any cool ideas I could add to BitBuy!"
                   name="message">

            <button type="submit" class="btn btn-default">Submit</button>
        </form>

<?php

footer();
?>


<?php

html5_js(
    array(
        'js/vendor/jquery.js', 'js/foundation/foundation.min.js',

        'js/elevator.js',

        'js/conversational_form.js'
    )
);

menu_js();
?>

<script>
    $(document).foundation();
</script>

</body>
</html>