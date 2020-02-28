<?php



// to prevent errors from showing up do to unset variables at first load of homepage
error_reporting(0);

// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2)
{
    // switch statement to see which unit the temp to be converted is set to
    // Then nested cases check which converted temp unit the user set
    // then based on each case a formula is applied and sets the $convertedTemp variable to be returned


    switch ($unit1) {
        case 'celsius':
            switch ($unit2) {

                case 'fahrenheit':
                    $convertedTemp = $temp * 9/5 + 32;
                    break;

                case 'kelvin':
                    $convertedTemp = $temp + 273.15;
                    break;                        
            }
        break;                   

        case 'kelvin':
            switch ($unit2) {

                case 'fahrenheit':
                    $convertedTemp = $temp * 9/5 - 459.67;
                    break;

                case 'celsius':
                    $convertedTemp = $temp - 273.15;
                    break;
                                
            } 
        break;     

        case 'fahrenheit':
            switch ($unit2) {

                case 'celsius':
                    $convertedTemp = ($temp - 32) * 5/9;
                    break;

                case 'kelvin':
                    $convertedTemp = ($temp + 459.67) * 5/9;
                    break;             
            }
        break;
                  
        
        
    }
    // return the converted temp and round it to 1 decimal place
    return round($convertedTemp, 1);

    // conversion formulas
    // Celsius to Fahrenheit = T(°C) × 9/5 + 32
    // Celsius to Kelvin = T(°C) + 273.15
    // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
    // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
    // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
    // Kelvin to Celsius = T(K) - 273.15    

} // end function

?>