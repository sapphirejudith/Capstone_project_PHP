<?php

$id = $_POST['id'];


function create($id) {
//connection to mysql database
$sname= "localhost";

$uname= "root";

$password = "";

$dbname = "inventory";
$conn = new mysqli($sname, $uname, $password, $dbname);

if ($id === "restaurant") {
    //extract data from form

$compname = $_POST['comp_name'];
$compmail = $_POST['comp_mail'];
$compphone = $_POST['comp_phone'];
$compaddress = $_POST['comp_address'];
$compdesc = $_POST['comp_desc'];



$sql = "INSERT INTO restaurant set
    comp_name = '$compname'
	,comp_mail = '$compmail'
    ,comp_phone = '$compphone'
    ,comp_address = '$compaddress'
    ,comp_desc = '$compdesc'
    ";

        
if (mysqli_query($conn, $sql)) {

    echo "User created successfully";
} else {
    echo "error";
}

    header("Refresh:2 url ='dashboard.php'");       
     
}

else if ($id === "customers"){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];
$adress = $_POST['adress'];



$sql = "INSERT INTO customers set
	,firstname = '$firstname'
    ,lastname = '$lastname'
    ,sex = '$sex'
    ,email = '$email'
    ,phonenum = '$phonenum'
    ,adress = '$adress'
    ";

        
if (mysqli_query($conn, $sql) === FALSE) {
    echo "error";
}

    header("Refresh:2 url ='customers.php'");       
     
}

else if ($id === "orders"){
    $meal_name = $_POST['meal_name'];
    $quantity = $_POST['quantity'];
    $cost = $_POST['cost'];
    
    
    
    $sql = "INSERT INTO orders set
        ,meal_name = '$meal_name'
        ,quantity = '$quantity'
        ,cost = '$cost'
        ";
    
            
    if (mysqli_query($conn, $sql) === FALSE) {
        echo "error";
    }
    
    
        header("Refresh:2 url ='orders.php'");       
         
}

else if ($id === "recipes"){
    $recipe_name = $_POST['recipe_name'];
    $recipe_ingredients = $_POST['recipe_ingredients'];
    $recipe_desc = $_POST['recipe_desc'];
    
    
    
    $sql = "INSERT INTO recipes set
        ,recipe_name = '$recipe_name'
        ,recipe_ingredients = '$recipe_ingredients'
        ,recipe_desc = '$recipe_desc'
        ";
    
    if (mysqli_query($conn, $sql) === FALSE) {
        echo "error";
    }
    
    
        header("Refresh:2 url ='recipes.php'");       
         
}

else if ($id === "ingredients"){
    $ingredient_name = $_POST['ingredient_name'];
    $quantity = $_POST['quantity'];
    $cost = $_POST['cost'];
    
    
    
    $sql = "INSERT INTO ingredients set
        ,ingredient_name = '$ingredient_name'
        ,quantity = '$quantity'
        ,cost = '$cost'
        ";
    
    if (mysqli_query($conn, $sql) === FALSE) {
        echo "error";
    }
    
        header("Refresh:2 url ='ingredients.php'");       
         
}

else if ($id === "menu"){
    $meal_name = $_POST['meal_name'];
    $cost = $_POST['cost'];
    $meal_desc = $_POST['meal_desc'];
    
    
    
    $sql = "INSERT INTO menu set
        ,meal_name = '$meal_name'
        ,cost = '$cost'
        ,meal_desc = '$meal_desc'
        ";
    
    if (mysqli_query($conn, $sql) === FALSE) {
        echo "error";
    }
    
    
        header("Refresh:2 url ='menu.php'");       
         
}

else {
    echo "Invalid Operation";
	header("Refresh:2 url ='dashboard.php'");
}

}

	create($id);

?>