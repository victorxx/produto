<?php
$texto = "banana é gostoso";

// Verifica se existe a letra "a"
if (preg_match("/a/", $texto)) {
    echo "A letra 'a' existe sim";
} else {
    echo "Não existe a letra 'a'";
}
?>
