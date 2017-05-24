<?php
$href = 'http://lf.pstu.ru/node/59';
$page = file_get_contents($href);
preg_match("/<p.*style=\"text-indent: 20px; text-align: justify;\".*>(.*)<\/p>/",$page,$match);
echo $match[1];
?> 