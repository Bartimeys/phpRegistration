<div class="container">
  <div class="row">
	<div class="col-lg-12">
		<?php
			if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		?>
                <h1>Registration exercise</h1>
	    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
			<p>
				<label>Email</label>
				<input type="email" name="email"></input>
			</p>
			<p>
				<label>Birthday</label>
				<input type="date" name="birthday"></input>
			</p>
            <p>
				<label>Password</label>
				<input type="password" name="password"></input>
			</p>
            <p>
				<label>Confirm password</label>
				<input type="password" name="password2"></input>
			</p>
			<p>
				<input type="submit"/>
			</p>
		</form>
		
		<?php
			}
			else
			{
				$email = $_POST["email"];
				$birthday = $_POST["birthday"];
				$password = $_POST["password"];
				$password2 = $_POST["password2"];
		?>
		<h3>Hello <?php echo($email) ?>, your birthday is <?php echo($birthday) ?></h3>
		
		
		
		<?php
			
			}
		?>
	</div>

  </div>
</div>