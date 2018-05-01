<?php

class phoneDate
 {
    public $month; 
    public $year;
    public $day;

    public function phoneDate()
    {
        $this -> month = '10';
        $this -> year = '2015';
        $this -> day = 'sunday';
    }  

    public function __construct($monthvar, $yearvar, $dayvar) 
    {
    	$this -> month = $monthvar;
    	if ($monthvar > 0 && $monthvar <= 12){
    	echo 'month:   ' .$monthvar .'<br/>';
		}
        else {
        	echo 'month is not valid <br/>';
        }
    
    	$this -> year = $yearvar;
    	if ($yearhvar > 2000 || $yearvar < 2100){
    	echo 'year:   ' .$yearvar .'<br/>';
		}
        else {
        	echo 'year is not valid <br/>';
        }
    
    	$this -> day = $dayvar;
    	if ($dayhvar = 'Sattueday' || $dayhvar = 'Sunday' || $dayhvar = 'Monday' || $dayhvar = 'Tuesday' || $dayhvar = 'Wednesday' || $dayhvar = 'Thursday' || $dayhvar = 'Friday' ){
    	echo 'day:   ' .$dayvar .'<br/>';
		}
        else {
        	echo 'day is not valid <br/>';
        }
    } 


    // public function telldate($month,$year,$day) 
    // {
    //     echo '(month,year,day): ' .$this -> (monthvar,yearvar,dayvar) .'<br/>';
         	
    // }  
    	
    
  }

  $phoneDate1 = new phoneDate(1,2016,Sunday);
  // $phoneDate1 -> telldate(1,2000,Sunday);

  
?>

