<?php

include 'dbcon.php';

$id = $_GET['id'];

$deletequery = "delete from booking where id = $id";


$query = mysqli_query($con,$deletequery);

if($query){
	?>
	<script>
		alert('deleted successfully');
	</script>
	<?php

	header('location:list.php');

}else{
	?>
	<script>
		alert('not deleted');
	</script>
	<?php
}

?>