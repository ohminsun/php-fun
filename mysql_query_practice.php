SELECT productName, listPrice
FROM products
WHERE listPrice < 500
ORDER BY listprice ASC
    
FROM categories
   	INNER JOIN products
    ON categories.categoryID = products.categoryID
    INNER JOIN orderitems
    ON products.productID = orderitems.productID
    
SELECT categoryName, productName, listPrice
FROM categories
   	INNER JOIN products
   	ON categories.categoryID = products.categoryID
WHERE listPrice > 800
ORDER BY listPrice ASC

INSERT INTO products
    (categoryID, productCode, productName, listPrice)
VALUES
   	(1, 'tele', 'Fender Telecaster', 599.00)

UPDATE products
SET productName = 'Ludwig 5-Piece Kit with Zildjian Cymbals'
WHERE productCode = 'ludwig'

UPDATE products
SET listPrice = 299
WHERE categoryID = 1

DELETE FROM products
WHERE productID = 1

DELETE FROM products
WHERE listPrice > 200

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
$username = 'mgs_user';
$password = 'pa55word';

$db = new PDO($dsn, $username, $password); /* creates PDO objecct */

$query = 'SELECT * FROM products
WHERE categoryID = 1
ORDER BY productID';
$products = $db->query($query); /* $products contains the result set */

$category_id = 1;
$code = 'strat';
$name = 'Fender Stratocaster';
$price = 699.99;

$query = "INSERT INTO products
    (categoryID, productCode, productName, listPrice)
    VALUES
    ($category_ID, '$code', '$name', $price)";
$insert_count = $db->exec($query);

$product_id = 4;
$price = 599.99;
$query = "UPDATE products
    SET listPrice = $price
    WHERE productID = $product_id";
$update_count = $db->exec($query);

$product_id = 4;
$query = "DELETE FROM products
    WHERE productID = $product_id";
    $delete_count = $db->exec($query);
    
/* how to display the row counts */
<p>Insert count: <?php echo $insert_count; ?></p>
<p>Update count: <?php echo $update_count; ?></p>
<p>Delete count: <?php echo $delete_count; ?></p>

try {
  	$db = new PDO($dsn, $username, $password);
  	echo '<p>You are connected to the database!</p>';
} catch (PDOException $e) {
  	$error_message = $e->getMessage();
  	echo "<p>An error occured while connecting to the database: $error_message </p>";
}

try {
  	/* statements that might throw an exception */
} catch (Exception $e) {
  	$error_message = $e->getMessage();
  	echo "<p>Error message: $error_message </p>";
}
