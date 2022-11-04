<?php
include("common.php");
outputHeader("Registration Page", "registration_login");
outputNavBar("Registration");
?>

<div id="content">
    <form action="/">

        <!-- Registration Widget START -->
        <div class="registration_login_table">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>

            <hr> <!-- To give that nice horizontal separator you see in the registration widget -->

            <!--
            This table is used to properly align the labels and inputs
            in the widget with each other.
             -->
            <table>

                <!-- First Name Box START -->

                <tr>
                    <td> <!-- First Name Label START -->
                        <label for="firstName">
                            <strong>First Name</strong>
                        </label>
                    </td> <!-- First Name Label END -->
                </tr>
                <tr>
                    <td> <!-- First Name Input START -->
                        <input id="firstName" placeholder="Enter First Name" required type="text">
                    </td> <!-- First Name Input END -->
                </tr>

                <!-- First Name Box END -->


                <!-- Last Name Box START -->

                <tr>
                    <td> <!-- Last Name Label START -->
                        <label for="lastName">
                            <strong>LastName</strong>
                        </label>
                    </td> <!-- Last Name Label END -->
                </tr>
                <tr>
                    <td> <!-- Last Name Input START -->
                        <input id="lastName" placeholder="Enter Last Name" required type="text">
                    </td> <!-- Last Name Input END -->
                </tr>

                <!-- Last Name Box END -->


                <!-- Gender Box START -->

                <tr>
                    <td> <!-- Gender Label START -->
                        <strong>Gender</strong>
                    </td> <!-- Gender Label END -->
                </tr>
                <tr>
                    <td> <!-- Gender Radio Input START -->
                        <div class="radioInput">
                            <label for="male">Male</label>
                            <input id="male" name="gender" required type="radio" value="Male">
                            <label for="female">Female</label>
                            <input id="female" name="gender" required type="radio" value="Female">
                            <label for="trans">Trans</label>
                            <input id="trans" name="gender" required type="radio" value="Trans">
                        </div>
                    </td> <!-- Gender Radio Input END -->
                </tr>

                <!-- Gender Box END -->


                <!-- DateOfBirth Box START -->

                <tr>
                    <td> <!-- DateOfBirth Label START -->
                        <label for="dob">
                            <strong>Date of Birth</strong>
                        </label>
                    </td> <!-- DateOfBirth Label END -->
                </tr>
                <tr>
                    <td> <!-- DateOfBirth Date Input START -->
                        <input id="dob" max="2009-12-31" min="1950-01-01" name="DateOfBirth" required
                               type="date">
                    </td> <!-- DateOfBirth Date Input END -->
                </tr>

                <!--DateOfBirth Box END -->


                <!-- Email Box START -->

                <tr>
                    <td> <!-- Email Label START -->
                        <label for="email">
                            <strong>Email</strong>
                        </label>
                    </td> <!-- Email Label END -->
                </tr>
                <tr>
                    <td> <!-- Email Input START -->
                        <input id="email" placeholder="Enter Email" required type="text">
                    </td> <!-- Email Input END -->
                </tr>

                <!-- Email Box END -->


                <!-- Password Box START -->

                <tr>
                    <td> <!-- Password Label START -->
                        <label for="pass">
                            <strong>Password</strong>
                        </label>
                    </td> <!-- Password Label END -->
                </tr>
                <tr>
                    <td> <!-- Password Input START -->
                        <input id="pass" placeholder="Enter Password" required type="password">
                    </td> <!-- Password Input END -->
                </tr>

                <!-- Password Box END -->


                <!-- Confirm Box START -->

                <tr>
                    <td> <!-- Confirm Label START -->
                        <label for="pass-repeat">
                            <strong>Repeat Password</strong>
                        </label>
                    </td> <!-- Confirm Label END -->
                </tr>
                <tr>
                    <td> <!-- Confirm Input START -->
                        <input id="pass-repeat" placeholder="Repeat Password" required type="password">
                    </td> <!-- Confirm Input END -->
                </tr>

                <!-- Confirm Box END -->


                <!-- Terms Agreement Line START -->

                <tr>
                    <td>
                        <!-- Terms Agreement Checkbox -->
                        <input id="terms-agreement" name="agreement" required type="checkbox">

                        <!-- Terms Agreement Label -->
                        <label for="terms-agreement">I agree to the <a href="#">Terms and
                                Conditions</a>.</label>
                    </td>
                </tr>

                <!-- Terms Agreement Line END -->


                <!-- Privacy Agreement Line START -->

                <tr>
                    <td>
                        <!-- Privacy Agreement Checkbox -->
                        <input id="privacy-agreement" name="agreement" required type="checkbox">

                        <!-- Privacy Agreement Label -->
                        <label for="privacy-agreement">I agree to the <a href="#">Privacy Policy</a>.</label>
                    </td>
                </tr>

                <!-- Privacy Agreement Line END -->


            </table>

            <hr>

            <button class="submitBtn" type="submit">Register</button>

        </div>

        <!--
        This div is an extra section to the registration widget,
        that allows the user to go to the login page instead.
        -->
        <div class="registration_login_table login">
            <p>Already have an account? <a href="login.php">Log in here</a>.</p>
        </div>

        <!-- Registration Widget END -->

    </form>

</div>

<?php
outputFooter();
?>

