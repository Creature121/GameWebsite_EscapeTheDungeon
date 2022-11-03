<?php
include("common.php");
outputHeader("Registration Page", "registration_login");
outputNavBar("Registration");
?>

	<div id="content">
		<form action="/">
			<div class="registrationTable">
				<h1>Register</h1>
				<p>Please fill in this form to create an account.</p>

				<hr>

				<table>

					<tr>
						<td>
							<label for="firstName">
								<strong>First Name</strong>
							</label>
						</td>
					</tr>
					<tr>
						<td>
							<input id="firstName" placeholder="Enter First Name" required type="text">
						</td>
					</tr>


					<tr>
						<td>
							<label for="lastName">
								<strong>LastName</strong>
							</label>
						</td>
					</tr>
					<tr>
						<td>
							<input id="lastName" placeholder="Enter Last Name" required type="text">
						</td>
					</tr>


					<tr>
						<td>
							<strong>Gender</strong>
						</td>
					</tr>
					<tr>
						<td>
							<div class="radioInput">
								<label for="male">Male</label>
								<input id="male" name="gender" required type="radio" value="Male">
								<label for="female">Female</label>
								<input id="female" name="gender" required type="radio" value="Female">
								<label for="trans">Trans</label>
								<input id="trans" name="gender" required type="radio" value="Trans">
							</div>
						</td>
					</tr>


					<tr>
						<td>
							<label for="dob">
								<strong>Date of Birth</strong>
							</label>
						</td>
					</tr>
					<tr>
						<td>
							<input id="dob" max="2009-12-31" min="1950-01-01" name="DateOfBirth" required
								   type="date">
						</td>
					</tr>


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


					<tr>
						<td>
							<label for="pass-repeat">
								<strong>Repeat Password</strong>
							</label>
						</td>
					</tr>
					<tr>
						<td>
							<input id="pass-repeat" placeholder="Repeat Password" required type="password">
						</td>
					</tr>


					<tr>
						<td>
							<input id="terms-agreement" name="agreement" required type="checkbox">
							<label for="terms-agreement">I agree to the <a href="#">Terms and
									Conditions</a>.</label>
						</td>
					</tr>


					<tr>
						<td>
							<input id="privacy-agreement" name="agreement" required type="checkbox">
							<label for="privacy-agreement">I agree to the <a href="#">Privacy Policy</a>.</label>
						</td>
					</tr>


				</table>

				<hr>

				<button class="submitBtn" type="submit">Register</button>

			</div>

			<div class="registrationTable login">
				<p>Already have an account? <a href="login.php">Log in here</a>.</p>
			</div>
		</form>

	</div>

<?php
outputFooter();
?>