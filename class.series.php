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
	public function fizzBuzzSeries($start_no, $end_no){
		
		
		
		//looping the integer range
		for($i=$start_no;$i<=$end_no;$i++){
			
			//set status to 0 on each loop
			$status_flag = 0;
			
			//integrer divide by 3 & 5; print FizzBuzz and set the status flag to 1.
			if($i%3 == 0 && $i%5 == 0){
			 	print "FizzBuzz ";
				$i= $i+1;
				$status_flag = 0;
			 }
			 
			//integrer divide by 3; print Fizz and set the status flag to 1.
			if($i%3 == 0){
			 	print "Fizz ";
				$status_flag++;
			 }
			//integrer divide by 5; print Buzz and set the status flag to 2. 
			if($i%5 == 0){
				print "Buzz ";
				$status_flag++;
			}
			
			//if status still set on 0 then print the integer.
			if ($status_flag == 0){
				print $i." ";
			} 
	
		}
	}	
		
	public function fizzBuzzBazzSeries($start_no, $end_no){
		
		//set status to 0 on each loop
		$status_flag_bazz = 0;
		
		//looping the integer range
		for($i=$start_no;$i<=$end_no;$i++){
			
			//set status to 0 on each loop
			$status_flag = 0;
			
			//integrer divide by 3&5; print FizzBuzz and set all status flag to 0.
			if($i%3 == 0 && $i%5 == 0){
			 	print "FizzBuzz ";
				$i= $i+1;
				$status_flag_bazz = 0;
				$status_flag = 0;
			 }
			//integrer divide by 3; print Fizz and increment status flag by 1.
			if($i%3 == 0){
			 	print "Fizz ";
				$status_flag_bazz++;
				$status_flag++;
			 }
			//integrer divide by 5; print Buzz and increment all status flag by 1. 
			if($i%5 == 0){
				print "Buzz ";
				$status_flag_bazz++;
				$status_flag++;
			}
			//if status_flag_bazz = 2 then print Bazz and skip the integer.
			//else number.
			if($status_flag_bazz == 2){
				print "Bazz ";
				$i= $i+1;
				$status_flag_bazz = 0;
			}elseif($status_flag == 0 ){
				print $i." ";
				$status_flag_bazz = 0;
			}
				
		}
	}

}