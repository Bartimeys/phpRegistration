<form id="registration" name="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
      class="form form-login">
    <div class="form-field">
        <label class="email" for="email">Email</label>
        <input id="email" type="email" class="form-input" name="email" placeholder="example@example.com">
    </div>
    <div class="form-field">
        <label class="birthday" for="birthday">Birthday</label>
        <input id="birthday" type="date" class="form-input" name="birthday"/>
    </div>
    <div class="form-field">
        <label class="lock" for="password">Password</label>
        <input id="password" type="password" class="form-input" name="password"/>
    </div>
    <div class="form-field">
        <label class="lock" for="password_again">Confirm Password</label>
        <input id="password_again" type="password" class="form-input" name="password_again"/>
    </div>
    <img class="spinner" src="../../assets/images/spinner.svg"/>
    <div class="form-field">
        <input type="submit" id="submit" value="Register">
    </div>
</form>
