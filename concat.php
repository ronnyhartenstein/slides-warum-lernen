<?php
$slides = json_decode(file_get_contents('slides/list.json'));
$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($slides));
foreach($it as $v) {
 echo "\n".file_get_contents("slides/{$v}");
}
