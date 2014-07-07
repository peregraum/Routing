<?php

include 'route.php';
include 'src/About.php';
include 'src/Home.php';
include 'src/Contact.php';

$route = new Route();

$route->add('/', 'Home');
$route->add('/about', 'About');
$route->add('/contact', 'Contact');

echo '<pre>';
print_r($route);

$route->submit();

?>