<?php
include("common.php");
outputHeader("Login Page", "registration_login");
outputNavBar("Login");
?>

<div id="content">
    <form action="/">

        <!-- Login Widget START -->
        <div class="registration_login_table">
            <h1>Login</h1>
            <p>Please fill in your details to log into your account.</p>

            <hr> <!-- To give that nice horizontal separator you see in the login widget -->

            <!--
            This table is used to properly align the labels and inputs
            in the widget with each other.
             -->
            <table>
                <!-- Email Box START -->

                <tr> <!-- Email Label START -->
                    <td>
                        <label for="email">
                            <strong>Email</strong>
                        </label>
                    </td>
                </tr> <!-- Email LabelSTART -->

                <tr> <!-- Email Input START -->
                    <td>
                        <input id="email" placeholder="Enter Email" required type="text">
                    </td>
                </tr> <!-- Email Input END -->

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

            </table>

            <hr>

            <button class="submitBtn" type="submit">Login</button>

        </div>

        <!--
        This div is an extra section to the login widget,
        that allows the user to go to the registration page instead.
        -->
        <div class="registration_login_table login">
            <p>Don't have an account? <a href="registration.php">Register here</a>.</p>
        </div>
        <!-- Login Widget END -->

    </form>

</div>

<?php
outputFooter();
?>

