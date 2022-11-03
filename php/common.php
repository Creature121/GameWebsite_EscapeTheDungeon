<?php

/*TODO
 * Add comments to everything
 * OPtimise PHP code
 * Add content to footer
 */

function outputHeader($title, $stylesheet)
{
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>$title</title>";
    echo "<link href='../assets/icons_fontawesome/css/fontawesome.css' rel='stylesheet' type='text/css'>";
    echo "<link href='../assets/icons_fontawesome/css/solid.css' rel='stylesheet' type='text/css'>";
    echo "<link href='../css/common.css' rel='stylesheet' type='text/css'>";
    echo "<link href='../css/$stylesheet.css' rel='stylesheet' type='text/css'>";
    echo "</head>";
    echo "<body>";
}

function outputNavBar($pageName)
{
    $leftNavItems = array("Game", "Rules", "Leader-Board"); //1
    $linkAddresses = array("index.php", "rules.php", "leaderboard.php"); //2
    $leftIconNames = array("fa-solid fa-gamepad", "fa-solid fa-scroll", "fa-solid fa-list-ol"); //3
    // Combine 1,2,3 into 2D array?

    $rightNavItems = array("Profile", "Login / Register");

    echo "<nav>";

    echo "<div class=leftContent>";

    for ($i = 0; $i < count($leftNavItems); $i++) {
        if ($leftNavItems[$i] == $pageName) {
            echo "<div class='navButton selectedTab'>";
        } else {
            echo "<div class='navButton'>";
        }
        echo "<a href='$linkAddresses[$i]'>";
        echo " $leftNavItems[$i] ";
        echo "<i aria-hidden='true' class='$leftIconNames[$i]'></i>";
        echo "</a>";
        echo "</div>";
    }
    echo "</div>";

    echo "<div class=rightContent>";
    foreach ($rightNavItems as $value) { //Turn this foreach into switch-case?
        if ($value == "Profile") {
            echo "<div class='profile'>";
            echo "<span class='profile-content'>";
            echo "<i aria-hidden='true' class='fa-solid fa-circle-user'></i>";
            echo "Welcome, Guest.";
            echo "</span>";
            echo "</div>";
        }

        if ($value == "Login / Register") {
            echo "<div class='navButton'>";
            if ($pageName == "Registration") {
                echo "<a href='login.php'>";
            } else {
                echo "<a href='registration.php'>";
            }
            echo "Login / Register";
            echo "</a>";
        }
    }
    echo "</div>";
    echo "</nav>";

}

function outputFooter()
{
    echo "<footer></footer>";
    echo "</body>";
    echo "</html>";
}

?>


