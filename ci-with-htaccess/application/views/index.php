<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="container">
	<h1>Dojo Products</h1>
	<h4>Your Cart <?= '"quanity number"' ?> <a href='shopping_cart'>Checkout</a></h4>
	<div id="body">
		<form action='shopping_cart/create' method='post'>
			<input type='hidden' name='prod_id' value='1'>
			<label>Dojo shirt $19.99</label>
			<select name='quantity'>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<input type='submit' value='Buy'>
		</form>
		<form action='shopping_cart/create' method='post'>
			<input type='hidden' name='prod_id' value='2'>
			<label>Dojo Cup $9.99</label>
			<select name='quantity'>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<input type='submit' value='Buy'>
		</form>
	</div>
</div>
</body>
</html>