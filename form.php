<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        name: <input type="text" name="fname">
        <br>
        address: <input type="text" name="address">
        <br>
        school: <input type="text" name="school">
        <br>
        age: <input type="text" name="age">
        <br>
        <input type="submit">
</form>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     //collect value of input field
//   $name = htmlspecialchars($_REQUEST['fname']);
//   if (empty($name)) {
//     echo "Name is empty";
//   } else {
//     echo $name;
//   }
// }

//$_REQUEST=['fname'=>'obi', 'address'=>'UNN','school'=>'ESUT','age'=>'18'];

// define variables and set to empty values
$name = $address = $school = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["fname"]);
  $address = test_input($_POST["address"]);
  $school = test_input($_POST["school"]);
  $age= test_input($_POST["age"]);
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// $name = $_REQUEST['fname'];
// $address = $_REQUEST['address'];
// $school = $_REQUEST['school'];
// $age = $_REQUEST['age'];

echo $name ,'<br>';
echo $address ,'<br>';
echo $school ,'<br>';
echo $age ,'<br>';

?>
    </form>
</body>
</html>