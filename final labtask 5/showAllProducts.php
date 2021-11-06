<?php  
require_once 'controller/productInfo.php';

$products= fetchAllProducts();

    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>

			<th>Buying Price</th>

			<th>Selling Price</th>
			
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product['name'] ?>"><?php echo $product['Name'] ?></a></td>

				<td><?php echo $product['BuyingPrice'] ?></td>

				<td><?php echo $product['SellingPrice'] ?></td>
				<td>
					<a href="editProduct.php?id=<?php echo $product['name'] ?>">Edit</a>
					&nbsp
					<a href="controller/deleteProduct.php?id=<?php echo $product['name'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>