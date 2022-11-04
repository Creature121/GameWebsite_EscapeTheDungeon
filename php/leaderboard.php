<?php
include("common.php");
outputHeader("Leaderboard Page", "leaderboard");
outputNavBar("Leader-Board");
?>

<div id="content">
    <h1>Leader-board Rankings</h1>

    <!-- Leaderboard Table START -->
    <table class="leaderBoardTable">
        <caption style="display: none">Leader board</caption>

        <!-- Column Headers START -->
        <thead>
            <tr>
                <!-- Places Column Header START -->
                <th>
                    Place
                </th>
                <!-- Places Column Header END -->

                <!-- Name Column Header START -->
                <th>
                    Name
                </th>
                <!-- Name Column Header END -->

                <!-- Time Taken Column Header START -->
                <th>
                    Time Taken
                </th>
                <!-- Time Taken Column Header END -->

            </tr>
        </thead>
        <!-- Column Headers END -->

        <tbody>


            <!-- First PlaceHolder START -->
            <tr>

                <!-- Place Icon START -->
                <td>
                    <i aria-hidden="true" class="fa-solid fa-1"></i>
                </td>
                <!-- Place Icon END -->

                <!-- PlaceHolder Name START -->
                <td>
                    Milan Varughese
                </td>
                <!-- PlaceHolder Name END -->

                <!-- Time Taken START -->
                <td>
                    5:00
                </td>
                <!-- Time Taken END -->

            </tr>
            <!-- First PlaceHolder END -->


            <!-- Second PlaceHolder START -->
            <tr>

                <!-- Place Icon START -->
                <td>
                    <i aria-hidden="true" class="fa-solid fa-2"></i>
                </td>
                <!-- Place Icon START -->

                <!-- PlaceHolder Name START-->
                <td>
                    Adam X
                </td>
                <!-- PlaceHolder Name END -->

                <!-- Time Taken START -->
                <td>
                    8:00
                </td>
                <!-- Time Taken END -->

            </tr>
            <!-- Second PlaceHolder END -->


            <!-- Third PlaceHolder START -->
            <tr>

                <!-- Place Icon START -->
                <td>
                    <i aria-hidden="true" class="fa-solid fa-3"></i>
                </td>
                <!-- Place Icon END -->

                <!-- PlaceHolder Name START -->
                <td>
                    Eve Y
                </td>
                <!-- PlaceHolder Name END -->

                <!-- Time Taken START -->
                <td>
                    10:00
                </td>
                <!-- Time Taken START -->

            </tr>
            <!-- Third PlaceHolder END -->


            <!-- Other PlaceHolders START -->
            <tr>
                <!-- Places Icons START -->
                <td>
                    <p><i aria-hidden="true" class="fa-solid fa-4"></i></p>
                    <p><i aria-hidden="true" class="fa-solid fa-5"></i></p>
                    <p><i aria-hidden="true" class="fa-solid fa-6"></i></p>
                    <p>...</p>
                </td>
                <!-- Places Icons END -->

                <!-- PlaceHolders Name START -->
                <td>
                    <p>ABC</p>
                    <p>DEF</p>
                    <p>GHI</p>
                    <p>...</p>
                </td>
                <!-- PlaceHolders Name END -->

                <!-- Times Taken START -->
                <td>
                    <p>12:00</p>
                    <p>13:00</p>
                    <p>14:00</p>
                    <p>...</p>
                </td>
                <!-- Times Taken END -->

            </tr>
            <!-- Other PlaceHolders END -->


        </tbody>
    </table>
    <!-- Leaderboard Table END -->

</div>

<?php
outputFooter();
?>

