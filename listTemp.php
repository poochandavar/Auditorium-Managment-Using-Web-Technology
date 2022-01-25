<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<center>	

<div class="main-div">
	<h1>List of Auditorium booking</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<th>id</th>
					<th>Department</th>
					<th>Activity Name</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Number Of Days</th>
					<th>Start Time</th>
					<th>End Time</th>
					<th>Delete</th>
				</thead>

				<tbody>
					<?php

						include 'dbcon.php';

						$selectquery = "select * from booking";

						$query = mysqli_query($con,$selectquery);

						while($result = mysqli_fetch_assoc($query)){

					?>	
					<tr>
						<td><?php echo $result['id']; ?></td>
						<td><?php echo $result['Department']; ?></td>
						<td><?php echo $result['ActivityName']; ?></td>
						<td><?php echo $result['StartDate']; ?></td>
						<td><?php echo $result['EndDate']; ?></td>
						<td><?php echo $result['NoOfDays']; ?></td>
						<td><?php echo $result['StartTime']; ?></td>
						<td><?php echo $result['EndTime']; ?></td>
						<td><?php echo $result['id']; ?></td>

					</tr>
					<?php
						}

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</center>
</body>
</html>