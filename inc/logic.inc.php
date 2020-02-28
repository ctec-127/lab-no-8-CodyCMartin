<?php




// Logic to check for POST and grab data from $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // variable declarations for error handling.

    $flag = false;
    $errors = [];
    

    


    // is the temp a numeric? if not, add error to bucket and set $flag to true
    if (isset($_POST['originaltemp'])){
        $originalTemperature = $_POST['originaltemp'];
            if (!(is_numeric($originalTemperature))) {
                array_push($errors,"Please input only numbers to be converted");
                $flag = true;
                               
            }
            
        // echo $originalTemperature; for testing and dev
    }

    // was a unit selected rather then left on the default drop down selection?

    if (isset($_POST['originalunit'])){
        $originalUnit = $_POST['originalunit'];
        if ($originalUnit == '--Select--') {          
            array_push($errors,"Please set type of temperature unit");
            $flag = true;      
             
        }
        // echo $originalUnit; for testing and dev
    }

    // was a unit selected rather then left on the default drop down selection?

    if (isset($_POST['conversionunit'])){
        $conversionUnit = $_POST['conversionunit'];
        if ($conversionUnit == '--Select--') {                       
            array_push($errors,"Please set type of temperature unit to convert to");
            $flag = true; 
        }
         // echo $conversionUnit; for testing and dev
    }

    // checks if the conversion unit type and the original unit type are the same
    // if they are, add an error to the bucket and trigger the flag to true

    if ($originalUnit == $conversionUnit){
        array_push($errors,"Please make sure conversion unit type is different from original type");
        $flag = true; 
    }
    
    // $flag is an on off switch for the error bucket.
    // If any errors present, loop and echo them out. 
    // Set convertedTemp to empty since when an error is created it would echo weird stuff in text field
    // for converted temp 

    if ($flag){
        foreach ($errors as $error) {
        echo "<strong>$error</strong>";
        echo "<br>";
        $convertedTemp = "";
        }        
    }

    // function call to convert temps

    else {
        $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
    }
          
       
    
   
    
    
    
} // end if

?>