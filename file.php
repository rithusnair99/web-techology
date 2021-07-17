				Assignment 3 -Part 2

Generate a simple PHP program to illustrate the working of the following operations.
a.	Opening and Closing Files
b.	 Reading from a file

PHP Program:
<?php
$file = fopen(“webtechnology.txt”,”r”) or die(“File cannot be opened”);
fread($file,filesize(“webtechnology.txt”));
fclose(“$file”);
?>

To read and display:
<?php
$file = fopen(“webtechnology.txt”,”r”) or die(“File cannot be opened”);
echo fread($file,filesize(“webtechnology.txt”));
fclose(“$file”);
?>


