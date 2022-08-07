<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Order history";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getorders($conn);
?>
	
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Orderid</th>
			<th>customerid</th>
			<th>amount</th>
			<th>date</th>
			<th>Ship_date</th>
			<th>ship_adress</th>
			
            <th>ship_zip_code</th>
            
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['orderid']; ?></td>
			<td><?php echo $row['customerid']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['ship_name']; ?></td>
			<td><?php echo $row['ship_address']; ?></td>
            
            <td><?php echo $row['ship_zip_code']; ?></td>
            
			
			
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>