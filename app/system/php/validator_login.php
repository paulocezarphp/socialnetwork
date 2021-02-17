<?php
    
   /*------------------------------------------------------------------------------------------------
   validation description
   ------------------------------------------------------------------------------------------------
   The validation fields return three different results, "true", "false", "null". The "true" fields 
   return a validated field validation, the "false" fields return a false validation, there was 
   something wrong with the field validation, the "null" means that the information is not mandatory, 
   that is, it is optional and not affects the overall validation of what is being performed.
   ------------------------------------------------------------------------------------------------*/

    function Validate_Name($name){
	      return true;
    }

    function Validate_Email($email){
	      return true;
    }

    function Validate_Login_Execution(){
   	
    }

?>