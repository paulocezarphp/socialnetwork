<?php
    
   /*------------------------------------------------------------------------------------------------
   validation description
   ------------------------------------------------------------------------------------------------
   The validation fields return three different results, "true", "false", "null". The "true" fields 
   return a validated field validation, the "false" fields return a false validation, there was 
   something wrong with the field validation, the "null" means that the information is not mandatory, 
   that is, it is optional and not affects the overall validation of what is being performed.
   ------------------------------------------------------------------------------------------------*/
    
    function Validate_Title_Page($title){
        
        if($title != null){

            if(count($title) > 3){
                return true;
            }else{
                return false;  
            }

        }else{
            return false;
        }

    }

    function Validate_Category_Page($category){
    	  return "";
    }

    function Validate_Page_Execution(){
   	
    }

?>