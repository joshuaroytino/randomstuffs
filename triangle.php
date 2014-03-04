<?php 

echo '<pre>';
$n = 10;

for ($i = 0; $i < $n; $i++) {
    print str_repeat('&nbsp;', $n - $i) . str_repeat('*', $i * 2 + 1) . '<br>';
}

echo '</pre>';
exit;

