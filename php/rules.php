<?php
include("common.php");
outputHeader("Rules Page", "rules");
outputNavBar("Rules");
?>

	<div id="content">
		<div class="rulesTable">
			<h1>Rules</h1>
			<ol>
				<li>
					Defeat all the enemies to clear the current floor, move onto the next floor.
				</li>
				<li>
					Do not lose all your health, else you will die and lose the game.
				</li>
				<li>
					Clear all three floors to win the game.
				</li>
				<li>
					You will be timed.
					If you have registered and logged in, the time you take to win the game will be recorded.
					This will be updated each time you win the game.
				</li>
				<li>
					Losses will not be recorded.
				</li>
				<li>
					If your completion time is within the top ten timings done in the game,
					it will be shown in the leader-board.
				</li>
			</ol>
		</div>
	</div>

<?php
outputFooter();
?>