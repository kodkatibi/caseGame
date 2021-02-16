<?php
include './includes/function.php';


$mainFunction = new func();

$i=0;
foreach (array_values($mainFunction->makeWinnerSlot()) as $slot){

    print_r(array_values($slot));

}