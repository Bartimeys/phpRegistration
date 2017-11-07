<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form form-login">
    <div class="form-field">
        <label class="email" for="email">Email</label>
        <input id="login-email" type="email" class="form-input" name="email" required>
    </div>
    <div class="form-field">
        <label class="birthday" for="birthday">Birthday</label>
        <input id="birthday" type="date" class="form-input" name="birthday" required>
    </div>

    <div class="form-field">
        <label class="lock" for="login-password">Password</label>
        <input id="login-password" type="password" class="form-input" name="password" required>
    </div>
    <div class="form-field">
        <label class="lock" for="login-password">Confirm Password</label>
        <input id="login-password" type="password" class="form-input" name="password2" required>
    </div>

    <div class="form-field">
        <input type="submit" value="Register">
    </div>
</form>