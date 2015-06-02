<?php
if ($argc !==2) {
    echo "Usage: php goodbye.php [name].\n";
    exit(1);
}
$name = $argv[1];
echo "Goodbye, $name\n";
?>
