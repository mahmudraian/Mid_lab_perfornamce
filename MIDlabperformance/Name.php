 <?php
            
			 $nameErr="";
			$name="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if (empty($_POST["name"])){
					 $nameErr="Plz give your name";
				}
				 else {
              $name = test_input($_POST["name"]);
				
			}
			 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
    }
			}
			function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}
            ?>
			
			       <form method="POST" action=peronprofile.php>
	    Name </br>
		<input type="text" name="name" value="<?php echo $Name;?>">
  <span class="error"> <?php echo $nameErr;?></span> </br>
	    <input type="submit" name="submit" value="Submit" <br>
	 
	 </form>
