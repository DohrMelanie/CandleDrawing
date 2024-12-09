<?php
function igniting() {
	echo"\033[37m\n";
	for ($x = 1; $x <= 4; $x++) {
		echo "Igniting the $x. candle...\n";
		sleep(3);
		echo " ";
		for ($y = 1; $y <= $x; $y++) {
			echo"\033[33m^";
		}
		echo"\n\033[31m ||||\n".
			"\033[32mxxxxxx".
			"\033[37m\n";
	}
}
function drawBigOne() {
	$uniCh = "\u{1F525}"; //unicode character for flame emoji
	$candle = "\033[31mX";
	$wreath = "\033[32my";
	echo "   $uniCh$uniCh$uniCh$uniCh\n".
		 "   $candle $candle $candle $candle\n".
		 "  $wreath$candle$wreath$candle$wreath$candle$wreath$candle$wreath\n".
		 " $wreath$wreath$candle$wreath$candle$wreath$candle$wreath$candle$wreath$wreath\n".
		 "$wreath$wreath$wreath$candle $candle $candle $candle$wreath$wreath$wreath\n".
		 " $wreath$wreath$wreath$wreath$wreath$wreath$wreath$wreath$wreath$wreath$wreath\n".
		 "  $wreath$wreath$wreath$wreath$wreath$wreath$wreath$wreath$wreath\n".
		 "   \033[37m\n";
}
igniting();
echo "\n";
drawBigOne();
?>