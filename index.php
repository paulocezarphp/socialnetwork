<!DOCTYPE html>
<html>
<head>
	  <title>Social Network</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <link rel="sortcut icon" href="app/system/image/icon_radius.png" type="image/x-icon" />
	  <link rel="stylesheet" type="text/css" href="app/system/css/style.css">
	  <link rel="stylesheet" type="text/css" href="app/system/css/style_mobile.css">
	  <link rel="stylesheet" type="text/css" href="app/system/css/style_tablet.css">
    <link rel="stylesheet" type="text/css" href="app/system/css/style_desktop.css">
</head>
<body>
   
   <?php
    
        $user_validator = false;
        @$page_view = $_GET['page'];

        if($user_validator == true){
            if($page_view == "home"){
                include("app/system/page_home.php");
            }else{
                include("app/system/page_home.php");
            }
        }else{
            header("location: login");
        }

   ?>

</body>
</html>