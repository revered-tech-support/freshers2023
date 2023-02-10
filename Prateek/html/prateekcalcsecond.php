<?php 
 $result = "";
class PHP_Calculator
{
    var $Number1;
    var $Number2;
    function Action($oprator)
    {
       
        
        if($oprator== 'add'){
            return $this->x + $this->y;
        }
        elseif($oprator == 'sub'){
            return $this->x - $this->y;
        }
        elseif($oprator=="mul"){
            return $this->x * $this->y;
        }
        elseif($oprator=="div"){
            return $this->x / $this->y;
        }
        else {
            return "Sorry Please Select a no.";
        }
    }
   
    function getresult($Number1, $Number2, $c)
    {
        $this->x = $Number1;
        $this->y = $Number2;
      // echo $this->x . "pp". $c;
        return $this->Action($c);
    }
}
 
$cal = new PHP_Calculator();

if(
    
    isset($_POST['submit']))
{  
     //echo $_POST['No1'];
    $result = $cal->getresult($_POST['No1'],$_POST['No2'],$_POST['op']);
    echo $result;
}
?>
  
