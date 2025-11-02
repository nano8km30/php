<?php


$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
echo "私の名前は、" . $company . "<br />";

$company2 = htmlspecialchars($_GET['company2'], ENT_QUOTES);
print "希望の商品は、" . $company2 . "<br />";

$company3 = htmlspecialchars($_GET['company3'], ENT_QUOTES);
print "注文数は、" . $company3 . "<br />"; 