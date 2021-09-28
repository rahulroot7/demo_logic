<?php
class Rectangle
{
   
    public $first = 450;
    public $second = 600;
    
    
    public function  add(){
        return ($this->first + $this->second);
    }
    
    
    public function  sub(){
        return ($this->first - $this->second);
    }
    public function  cgpa(){
        return (($this->first / $this->second) * 100);
    }
}
?>

<?php

    $obj = new Rectangle;
?>

    <?php //echo $obj->first = 20;?><br>
    <?php //echo $obj->second = 30;?><br> 
   Addrion :       <?php echo $obj-> add();?><br>
   Substraction :  <?php echo $obj-> sub(); ?> <br>
   Percentage :    <?php echo $obj-> cgpa(); ?> <br>
