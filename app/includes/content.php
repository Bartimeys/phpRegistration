
<div class="container">
    <div class="logo">
        <h1><picture>
                <source style="width: 20%" media="(max-width: 1023px)" srcset="../assets/images/logo-loveknitting-sm.svg">
                <source style="width: 40%;" media="(min-width: 1024px)" srcset="../assets/images/logo-loveknitting.svg">
                <img class="image-style" src="../assets/images/logo-loveknitting.svg" alt="love crafts">
            </picture>
            <b>Registration exercise</b>
        </h1></div>
    <div class="row">

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        ?>
        <div class="login-item">
            <?php include('template/form.php') ?>

            <?php
            } else {
                $email = $_POST["email"];
                $birthday = $_POST["birthday"];
                $password = $_POST["password"];
                $password_again = $_POST["password_again"];
                ?>
                <?php include('template/welcome.php') ?>


                <?php

            }
            ?>
        </div>
    </div>
</div>