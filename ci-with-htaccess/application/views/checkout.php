<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="container">
	<h1>Dojo Checkout</h1>
	<div id="body">
		<table>
			<tr>
				<td>Quantity</td>
				<td>Description</td>
				<td>Price</td>
				<td></td>
			</tr>
<?php 		foreach ($items as $item)
			{	?>
				<tr>
					<td><?= $item['quantity'] ?></td>
					<td><?= $item['description'] ?></td>
					<td><?= strval($item['quantity']) * strval($item['price']) ?></td>
				</tr>
<?php 		} 	?>				
		</table>
		<table>


		<form action='shopping_cart/billing' method='post'>
			<label>Billing Info:</label>
			Name: <input type='text' name='name'>
			Address: <input type='text' name='address'>
			Card: <input type='text' name='card'>
		</form>
	</div>
</div>
</body>
</html>