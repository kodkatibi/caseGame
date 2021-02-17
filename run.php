<?php
include './includes/function.php';
include './includes/user.php';

$user = new user();
$user->getName();


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
        $user->point += 5 * $reelsets[2][$i];
    }
}
print_r("Try Again?");
$again = readline('y or n: ' . PHP_EOL);

if ($again == 'y') {
    exec('php ./run.php');
} else {
    echo 'Total Point: ' . $user->point . PHP_EOL;
    echo $user->name . ' bye bye' . PHP_EOL;
}