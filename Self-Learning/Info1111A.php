<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>  <!I used a HTML skeleton for startup-->
<body>
<h2>Login Form</h2>
<form action="New.php" method="POST">

    <!Using method "post" so that it can hide the url parameter from users, making
    it more secure espcially for login page like this-->
    </action>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br> <!Using id Password can hide that actual password from
    typing-->
    <input type="submit" value="Login"><br><br><br><br><br><br> <!by giving the type "submit" a value, the submit button
    then can be changed into "Login"-->
    First Number: <input type="number" name="Num1"> <br><br><br>
    Operation: <input type="text" name="Op"> <br><br><br>
    Second Number:<input type="number" name="Num2"> <br><br><br>
    <input type="submit" value="Calculate!"> <br><br><br>

</form>
</body>
<?php
#Check if the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    #Check if the username and password are valid
    if($username == 'Kailin' && $password == 'Zhang'){
        //using if function can mimic the login page using correct username and password

        exit(); //I don't have a another page or file to redirect so I left blank here
    } else {
        // Display an error message
        echo "Invalid username or password";
    }
}

# Check if the form for calculation has been submitted
if(isset($_POST["Num1"], $_POST["Op"], $_POST["Num2"])){
    $Num1= $_POST["Num1"];
    $Op= $_POST["Op"];
    $Num2= $_POST["Num2"];
// Basically giving the Op 4 different values to check if the operations is one of "+","-","*","/"
    //On the top I set the variables $Num1 and $Num2 into number, which the input can only be numbers
    if($Op == "+") {
        echo $Num1 + $Num2 ;
    } elseif($Op == "-"){
        echo $Num1 - $Num2;
    } elseif($Op == "/"){
        echo $Num1 / $Num2;
    } elseif($Op == "*"){
        echo $Num1 * $Num2;
    } else{
        echo "Input Invalid";
    }
}// There is a typo in the coding that the final web cannot operate single section, so for example if I use the
//calculator, the login output will also occur, Currently I don't know how to fix it.
?>
