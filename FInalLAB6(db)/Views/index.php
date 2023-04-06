<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
</head>
<body>


 <form method="POST" action="../controller/addController.php" >
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" placeholder="Product Name"><br>

  <label for="buying-price">Buying Price:</label>
  <input type="number" id="buying" name="buying" placeholder="Buying Price"><br>

  <label for="selling">Selling Price:</label>
  <input type="number" id="selling" name="selling" placeholder="Selling Price"><br>

  <label for="checkbox-id">Display</label>
  <input type="checkbox" id="checkbox-id" name="display" > <br>
  


  <input type="submit" value="Add Product">
</form>

</body>
</html>