
<div class="container">
    <div class="logo">
        <picture>
            <source style="width: 20%" media="(max-width: 1023px)" srcset="../assets/images/logo-loveknitting-sm.svg">
            <source style="width: 40%;" media="(min-width: 1024px)" srcset="../assets/images/logo-loveknitting.svg">
            <img class="image-style" src="../assets/images/logo-loveknitting.svg" alt="love crafts">
        </picture>Registration exercise</div>
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
                $password2 = $_POST["password2"];
                ?>
                <h3>Welcome <?php echo($email) ?></h3>


                <?php

            }
            ?>
        </div>
    </div>
</div>