<?php
include("common.php");
outputHeader("Leaderboard Page", "leaderboard");
outputNavBar("Leader-Board");
?>

	<div id="content">
		<h1>Leader-board Rankings</h1>

		<table class="leaderBoardTable">
			<caption style="display: none">Leader board</caption>
			<thead>
				<tr>
					<th>
						Place
					</th>
					<th>
						Name
					</th>
					<th>
						Time Taken
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<i class="fa-solid fa-1" aria-hidden="true"></i>
					</td>
					<td>
						Milan Varughese
					</td>
					<td>
						5:00
					</td>
				</tr>
				<tr>
					<td>
						<i class="fa-solid fa-2" aria-hidden="true"></i>
					</td>
					<td>
						Adam X
					</td>
					<td>
						8:00
					</td>
				</tr>
				<tr>
					<td>
						<i class="fa-solid fa-3" aria-hidden="true"></i>
					</td>
					<td>
						Eve Y
					</td>
					<td>
						10:00
					</td>
				</tr>
				<tr>
					<td>
						<p><i class="fa-solid fa-4" aria-hidden="true"></i></p>
						<p><i class="fa-solid fa-5" aria-hidden="true"></i></p>
						<p><i class="fa-solid fa-6" aria-hidden="true"></i></p>
						<p>...</p>
					</td>
					<td>
						<p>ABC</p>
						<p>DEF</p>
						<p>GHI</p>
						<p>...</p>
					</td>
					<td>
						<p>12:00</p>
						<p>13:00</p>
						<p>14:00</p>
						<p>...</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

<?php
outputFooter();
?>