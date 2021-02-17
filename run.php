<?php
include './includes/function.php';
include './includes/login.php';

$login = new login();
$login->getName();


$mainFunction = new func();
$reelsets = $mainFunction->makeWinnerSlot();
$result = "[\n";
foreach ($reelsets as $slots) {
    $result .= "[";
    foreach ($slots as $slot) {
        $result .= $slot . ',';
    }
    $result .= "],\n";
}
$result .= "]";
print_r($result . PHP_EOL);

for ($i = 0; $i < 3; $i++) {
    if (($reelsets[0][$i] == $reelsets[1][$i] && $reelsets[1][$i] == $reelsets[2][$i]) || ($reelsets[1][$i] == $reelsets[2][$i] && $reelsets[2][$i] == $reelsets[3][$i])) {
        $login->point += 5 * $reelsets[2][$i];
    } else {
        print_r('olmadı' . PHP_EOL);
    }
}
print_r("Again?");
$again = readline('y or n: ' . PHP_EOL);

if ($again == 'y') {
    print_r('Again');
} else {
    echo 'Total Point: ' . $login->point . PHP_EOL;
    echo $login->name . ' bye bye' . PHP_EOL;
}