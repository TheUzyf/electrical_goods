<?php
$href = 'http://vashdom.lysva.info/stati/instrumenty';
$pages = file_get_contents($href);
preg_match("/<p>(.*плиткореза.*)<\/p>/",$pages,$match);
echo $match[1];
?> 