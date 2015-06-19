$rates = array()

$rates[0] = 5.95;
$rates[1] = 10.95;
$rates[2] = 15.95;

$rate = $rates[2];

for ($i = 0; $i < count($rates); $i++) {
	$message .= $rates[$i] . '|';
}

foreach ($rates as $rate) {
	$message .= $rate . '|';
}

$rates['Ground'] = 5.95;
$rates['2nd Day'] = 10.95;
$rates['Overnight'] = 15.95;

$overnight = $rates['Overnight'];

foreach ($rates as $index=>$rate) {
	$message .= $index . '='. $rate . ' | ';
}

/* getting data from the first row of a result set */
$query = 'SELECT productCode, productName, listPrice
	FROM products
	WHERE productID = $productID';
$products = $db->query($query);
$product = $products->fetch();

$product_code = $product['productCode'];
$product_name = $product['productName'];
$product_list_price = $product['listPrice'];

$product_code = $product[0];
$product_name = $product[1];
$product_list_price = $product[2];

