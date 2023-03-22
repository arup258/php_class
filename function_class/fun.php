<?php  
function sayHello(){  
echo "Hello PHP Function";  
}  


function Add($num,$num2){  
     $result=$num+$num2;
     echo  "<h1> Result is =>". $result . "</h1>";
    }  
function mult($num,$num2){  
     $result=$num*$num2;
     echo  "<h1> Result is =>". $result . "</h1>";
    }  
function div($num,$num2){  
     $result=$num/$num2;
     echo  "<h1> Result is =>". $result . "</h1>";
    }  

    function student($name,$phone,$city="kolkata"){
        echo "name is ".$name. " phone is ".$phone. " city is ".$city;
    }

    

?>  