<?php
$cachebuster = date('m.d.Y');
// Load courses data
include $_SERVER['DOCUMENT_ROOT'] . '/schema/courses.php';
// Helper function
function pp($val) {
	echo '<pre>';
	print_r($val);
	echo '</pre>';
}