<!DOCTYPE html>
<html>
    <body>
        <h1 style="color: green;"> Validated forms</h1>
        <p> Here, the data is sent with the method post. </p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail:
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website:
        <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">

        </form>
    </body>
</html>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = format_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = format_input($_POST["email"]);
  }
  
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = format_input($_POST["website"]);
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = format_input($_POST["comment"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = format_input($_POST["gender"]);
  }

  // Mostrar los datos
  echo("<h1>Mostrando los datos obtenidos :</h1>");
  echo("Name : $name <br>");
  echo("Email : $email <br>");
  echo("Webiste : $website <br>");
  echo("Comment : $comment <br>");
  echo("Gender : $gender <br>");
}

function format_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>