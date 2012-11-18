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
	public function fizzBuzzBazzSeries($start_no, $end_no, $type){
		
		//looping the integer range
		for($i=$start_no;$i<=$end_no;$i++){
			
			//set status to 0 on each loop
			$status_flag = 0;
			//integrer divide by 3; print Fizz and set the status flag to 1.
			if($i%3 == 0){
			 	print "Fizz ";
				$status_flag = 1;
			 }
			//integrer divide by 5; print Buzz and set the status flag to 2. 
			if($i%5 == 0){
				print "Buzz ";
				$status_flag = 2;
			}
			//if type = 2 & status = 2 then print Bazz and skip the integer.
			//else number.
			//This section use to print series 2
			if($type == 2 && $status_flag == 2){
				print "Bazz ";
				$i= $i+1;
			}elseif ($status_flag == 0){
				print $i." ";
			} 
	
		}
	}

}