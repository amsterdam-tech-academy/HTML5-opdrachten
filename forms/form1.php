<?php
    $requestnumber = 0;
    // welk type request wordt toegepast?
    print "Type request= " . $_SERVER['REQUEST_METHOD'] . "<br>";
    print "Dit zijn de name/value elementen uit jouw HTML Form<br><br>";
    foreach ($_REQUEST as $key => $value)  
        {  
           
            if($value != ""){$requestnumber ++;}  
            echo $requestnumber . ' - ' .$key. ' - '.$value.'</br>';  
        } 
?>