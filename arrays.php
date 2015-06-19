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

