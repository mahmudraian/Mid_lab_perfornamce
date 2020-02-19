 <?php

      $degreErr="";
      $degree="";

if (empty($_POST["degree"])) {
    $genderErr = "at least one is required";
  } else {
    $gender = test_input($_POST["degree"]);
  }
  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}

            ?>

  <form method="POST" action=gender.php>
      Gender:           
      <input type="checkbox" name="">SSC <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc"
		<input type="checkbox" name="">hsc <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="HSC"
		<input type="checkbox" name="">B.SC<?php if (isset($degree) && $degree=="B.SC") echo "checked";?> value="B.SC"
		<input type="checkbox" name="">M.SC<?php if (isset($degree) && $degree=="M.SC") echo "checked";?> value="M.SC"
		
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
      
