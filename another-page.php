<?php
$required_elements = ['username', 'password', 'confirm-password', 'email-address'];
foreach($required_elements as $element){
    if( (!isset($_POST[$element])) || empty($_POST[$element]) ) {
        die(header("Location: ./index.php"));
    }
}


require_once('./phpclasses-template/Template.php');

$page = new Template("User Registration");
$page->finalizeTopSection();
$page->finalizeBottomSection();


print $page->getTopSection();
print "<h1>we got your registration</h1>\n";
print "<h2>maybe we will send you some spam emails now</h2>\n";
print $page->getBottomSection();
?>
