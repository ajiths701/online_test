<?php
//include neccessary class files.
include("class.series.php");

//define class objects
$objSeries			=	new number_series();

//call function to display FizzBuzz series;
$objSeries->fizzBuzzSeries(0, 31); 
?>