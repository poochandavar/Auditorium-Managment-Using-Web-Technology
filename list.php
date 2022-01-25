<!DOCTYPE html>
<html>
<head>
	<title>List of Auditorium booking</title>
	<style type="text/css">
		*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body{
	background-color: rgb(127, 205, 205);	
	font-family: sans-serif;
}
.main-div{
	padding: 0 10%;
	margin: 40px auto 0;
}
.heading{
	font-size: 40px;
	text-align: center;
	color: rgb(188, 36, 60);
	margin-bottom: 40px;
}
.table{
	width: 100%;
	border-collapse: collapse;
}
.table thead{
	background-color: #F7CAC9;
}
.table thead tr th{
	font-size: 14px;
	font-weight: 600;
	letter-spacing: 0.8px;
	color: rgb(192, 68, 122);
	opacity: 1;
	padding: 12px;
	vertical-align: top;
	border: 1px solid #dee2e685;
}
.table tbody tr td{
	font-size: 14px;
	letter-spacing: 0.8px;
	font-weight: normal;
	color: #f1f1f1;
	background-color: #3c3f44;
	padding: 8px;
	text-align: center;
	border: 1px solid #dee2e685;	
}
.table tbody tr td .btn{
	width: 130px;
	text-decoration: none;
	line-height: 35px;
	display: block;
	background-color: #EFC050;
	font-weight: medium;
	color: #FFFFFF;
	text-align: center;
	vertical-align: middle;
	user-select: none;
	border: 1px solid transparent;
	font-size: 14px;
	opacity: 1;
}
@media(max-width: 768px){
	.table thead{
		display: none;
	}
	.table, .table tbody, .table tr,.table td{
		display: block;
		width: 100%;
	}
	.table tr{
		margin-bottom: 15px;
	}
	.table tbody tr td{
		text-align: right;
		padding-left: 50%;
		position: relative;
	}
	.table td:before{
		content: attr(data-label);
		position: absolute;
		left: 0;
		width: 50%;
		padding-left:15px ;
		font-weight: 600;
		font-size: 14px;
		text-align: left;

	}
}
.button{
	width: 130px;
	text-decoration: none;
	line-height: 35px;
	display: block;
	background-color: #EFC050;
	font-weight: medium;
	color: #FFFFFF;
	text-align: center;
	vertical-align: middle;
	user-select: none;
	border: 1px solid transparent;
	font-size: 14px;
	opacity: 1;
}
</style>
</head>

<body>
<center>	

<div class="main-div">
	<h1 class="heading">List of Auditorium booking</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table class="table">
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
						<td data-label="id"><?php echo $result['id']; ?></td>
						<td data-label="Department"><?php echo $result['Department']; ?></td>
						<td data-label="ActivityName"><?php echo $result['ActivityName']; ?></td>
						<td data-label="StartDate"><?php echo $result['StartDate']; ?></td>
						<td data-label="EndDate"><?php echo $result['EndDate']; ?></td>
						<td data-label="NoOfDays"><?php echo $result['NoOfDays']; ?></td>
						<td data-label="StartTime"><?php echo $result['StartTime']; ?></td>
						<td data-label="EndTime"><?php echo $result['EndTime']; ?></td>
						<td data-label="Delete"><a href="delete.php?id=<?php echo $result['id']; ?>" class="btn">DELETE</a></td>

					</tr>
					<?php
						}

					?>
				</tbody>
			</table>
			<form action="login.php" method="POST">
			<button class="button">Go back</button>
			</form>
		</div>
	</div>
</div>

</center>
</body>
</html>