<?php

function outputHeader($title, $stylesheet)
{
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<title>$title</title>";
    echo "<meta charset='UTF-8'>";
    echo "<link href='../assets/icons_fontawesome/css/fontawesome.css' rel='stylesheet' type='text/css'>";
    echo "<link href='../assets/icons_fontawesome/css/solid.css' rel='stylesheet' type='text/css'>";
    echo "<link href='../css/common.css' rel='stylesheet' type='text/css'>";
    echo "<link href='../css/$stylesheet.css' rel='stylesheet' type='text/css'>";
    echo "</head>";
    echo "<body>";
}

function outputNavBar($pageName)
{
    /* leftNavItems holds the components of the tabs that are on the left side of the nav bar. */
    $leftNavItems = array(
        array("Game", "index.php", "fa-solid fa-gamepad"),
        array("Rules", "rules.php", "fa-solid fa-scroll"),
        array("Leader-Board", "leaderboard.php", "fa-solid fa-list-ol")
    );

    /* leftNavItems holds the components of the tabs that are on the right side of the nav bar. */
    $rightNavItems = array("Profile", "Login / Register");
    $pages = array("Login", "Registration");

    // Start of navigation bar.
    echo "<nav>";

    // Start of the left contents of the navigation bar.
    echo "<div class=leftContent>";
    foreach ($leftNavItems as $tab) {

        echo ($tab[0] == $pageName) ? "<div class='navButton selectedTab'>" : "<div class='navButton'>";

        echo "<a href='$tab[1]'>";
        echo " $tab[0] ";
        echo "<i aria-hidden='true' class='$tab[2]'></i>";
        echo "</a>";
        echo "</div>";
    }
    echo "</div>";
    // End of the left contents of the navigation bar.

    // Start of the right contents of the navigation bar.
    echo "<div class=rightContent>";
    foreach ($rightNavItems as $value) {

        switch ($value) {
            case "Profile":
                echo "<div class='profile'>";
                echo "<span class='profile-content'>";


                if ($pageName == $pages[0]) {
                    echo "Logging in...";
                } elseif ($pageName == $pages[1]) {
                    echo "Registering...";
                } else {
                    echo "<i aria-hidden='true' class='fa-solid fa-circle-user'></i>";
                    echo " Welcome, Guest. ";
                }

                echo "</span>";
                echo "</div>";
                break;

            case "Login / Register":

                echo (in_array($pageName, $pages)) ? "<div class='navButton selectedTab'>" : "<div class='navButton'>";

                echo ($pageName == "Registration") ? "<a href='login.php'>" : "<a href='registration.php'>";

                if ($pageName == $pages[0]) {
                    echo "<strong><u>Login</u></strong> / Register";
                } elseif ($pageName == $pages[1]) {
                    echo "Login / <strong><u>Register</u></strong>";
                } else {
                    echo "Login / Register";
                }

                echo "</a>";
                echo "</div>";
                break;

            default:
                break;
        }
    }
    // Start of the right contents of the navigation bar.
    echo "</div>";
    echo "</nav>";

}

function outputFooter()
{
    echo "<footer>";
    echo "<!-- Author and the resolution it works best at. -->";
    echo "By Milan Varughese.<br>";
    echo "Tested on Chrome Browser, at 1366 x 768.";
    echo "</footer>";
    echo "</body>";
    echo "</html>";
}
?>

