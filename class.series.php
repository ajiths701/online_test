<?php
/*
Date 			: 18 Nov, 2012
Author			: Ajith Sebastian.
Purpose			: PHP class handles multple methods to display different series.
Class name 		: Fizz Buzz Series class
Version			: version 1.00 

*/

class number_series{

	/*
	Purpose 	: Function used to display Fizz Buzz series for an integer range 
	Parameters 	: starting interger,ending integer,type(type = 1 = > FizzBuzz Series; type = 2 = > FizzBuzzBazz Series )
	
	Eg: function(12,15)
	Output : Fizz 13 14 FizzBuzz
	*/
	public function fizzBuzzSeries($start_no, $end_no,$type){
		
		//looping the integer range
		for($i=$start_no;$i<=$end_no;$i++){
			
			//integrer divide by 3; print Fizz and increment the status flag to 1.
			if($i%3 == 0){
			 print "Fizz ";
			 
			 }
			if($i%5 == 0) print "Buzz ";
			else print $i." ";
	
		}
	}

}