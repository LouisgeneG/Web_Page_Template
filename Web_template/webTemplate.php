<!-- -Chapter 4 Web Template project Template File-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template Project</title>
</head>
<body>
 <!--include of header page file -->
     <?php include("inc_header.html"); ?>
 <!--End of including  -->

  <!--Tag div to place the button navigation on left-->
    <div style="width:20%; text-align: center; float: left;">
 	   <!--Include of button navigation file -->
 	     <?php include("inc_buttonnav.html"); ?>
       <!--End of including -->
    </div>
   <!--End of tag div -->

   <!--Start of dynamic content section-->
      <?php
       //Condition of IF-ELSE statement
          if (isset($_GET["content"])) {
          	//condition of switch() statement for the click button
          	switch ($_GET["content"]) {
          		case "About Us":
          			include("inc_about.html");
          			break;
          		case "Contact Us":
          			include("inc_contact.html");
          			break;
          		default:
          			include("inc_home.html");
          			break;
          	}// End of switch() statement
          }else{
          	//No button has been selected
          	include("inc_home.html");

          }//End of IF-ELSE statement

      ?>
   <!--End of dynamic content section -->

  <!--include of footer page file -->
  <?php include("inc_footer.php"); ?>
</body>
</html>