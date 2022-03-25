<?php

class binary3{
    
    public $deci_num;
    public $bin;
    public $val;
    public $_binary= array();

    function __construct($input)
    {
        $this->deci_num = $input;
    }
    
    // function to convert decimal number into binary of base 2 and store the result in indexed array
    public function binaryArray()
    {
            while($this->deci_num>0)
            {
                $this->bin = $this->deci_num % 2;
                $this->deci_num = round($this->deci_num/2, 0, PHP_ROUND_HALF_DOWN);
                $this->_binary[] = $this->bin;
                
            }
            return $this->_binary;
    }
    // function to count the maximum number of consicutive 1's  
    public function countMaxOnes($arr)
    {
        $count=0;
        $big=0;
        $temp=0;
        foreach ($variable as $key => $value) {
          
            if($value === 1){
                $count++;
            }else{
                if($count>=$big){
                    $big = $count;
                }
                echo "zero";

                $count=0;
                continue;
            }
            if($count>=$big){
                $big = $count;
            }
        }
        return $big;
      
    } // end function
} // end class


/*
$n = intval(trim(fgets(STDIN)));
$b = new binary3(262141);
$b = new binary3(6);
$b = new binary3(439);
*/


$b = new binary3(524275);
$variable = array_reverse($b->binaryArray()); // array_reverse function is used to arrange array in reverese order
echo $b->countMaxOnes($variable);
