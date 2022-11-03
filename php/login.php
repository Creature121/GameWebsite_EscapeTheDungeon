<?php
include("common.php");
outputHeader("Login Page", "registration_login");
outputNavBar("Login");
?>

<div id="content">
	<form action="/">
		<div class="registrationTable">
			<h1>Login</h1>
			<p>Please fill in your details to log into your account.</p>

			<hr>

			<table>


				<tr>
					<td>
						<label for="email">
							<strong>Email</strong>
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<input id="email" placeholder="Enter Email" required type="text">
					</td>
				</tr>


				<tr>
					<td>
						<label for="pass">
							<strong>Password</strong>
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<input id="pass" placeholder="Enter Password" required type="password">
					</td>
				</tr>

			</table>

			<hr>

			<button class="submitBtn" type="submit">Login</button>

		</div>

		<div class="registrationTable login">
			<p>Don't have an account? <a href="registration.php">Register here</a>.</p>
		</div>
	</form>

</div>

<?php
outputFooter();
?>

