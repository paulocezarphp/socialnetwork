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
    	$name_count = count($name);
        
        if($name != null){
            if($name_count >= 5 And < $name_count <= 50){
               return true;    
    	    }else{
    		   return false;
    	    } 
        }else{
        	return false;
        }
    	

    }

    function Validate_Email($email){

	    if($email != null){

            if($name_count >= 5 And < $name_count <= 255){

               return true;   

    	    }else{

    		   return false;

    	    } 

        }else{

        	return false;

        }
    }

    function Validate_Password($password){

	    $password_count = count($password);

    	if($password_count >= 8){
            return true;    
    	}else{
    		return false;
    	} 

    }

    function Validate_Date_Birth($birth_day, $birth_month, $birth_year){
	      
	    if($birth_day != null And $birth_month != null And $birth_year != null){
	        return true;    	
	    }else{
	        return false;
	    }

    }

    function Validate_Accepted_Terms($accepted_terms){
	      
	    if($accepted_terms == "on" or $accepted_terms == true){
            return true;
	    }else{
            return false;
	    }

    }

    function Validate_Genre($genre){
	      
	    if($genre != null){

            if($genre == "male" Or $genre == "female" Or $genre == "dont report"){

                return true; 
            
            }else{

            	return false; 

            }

	    }else{
            return false; 
	    }

    }
    
    function Create_User(){
        return "";
    }

    function Validate_Register_Execution(){
    
   }

?>