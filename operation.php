<?php
  
  @$validator = $_POST['validator'];
  @$operation = $_POST['operation'];

  if($validator != null || $validator != ""){

      if($operation == "validator_user_login"){

      }elseif($operation == "validator_user_registration"){

      }elseif($operation == "validator_post_create"){

      }elseif($operation == "validator_post_edit"){

      }elseif($operation == "validator_post_delete"){

      }elseif($operation == "validator_page_create"){

      }elseif($operation == "validator_page_edit"){

      }elseif($operation == "validator_page_delete"){

      }elseif($operation == ""){

      }elseif($operation == ""){

      }elseif($operation == "validate_user_edit_config"){

      }elseif($operation == "validate_user_delete"){

      }
      
  }else{
      header('Location: ./');
  }

?>