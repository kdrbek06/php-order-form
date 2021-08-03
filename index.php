<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    

    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    echo('<pre>');
    var_dump($_POST);
    echo('</pre>');
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Spicy meatball pill', 'price' => 20],
    ['name' => 'Pizza with avocado flavored pill', 'price' => 25],
    ['name' => 'Chicken Flavored Pill with Curry Sauce', 'price' => 15],
    ['name' => 'Refreshing drink pill', 'price' => 5],
    ['name' => 'Vanilla flavored ice cream pill', 'price' => 5],
];

$totalValue = 0;

$confirmationMessage = "";

function validate()
{
    
    // This function will send a list of invalid fields back
    // $emptyFields = [];
    // if (empty($_POST['email'])) {
    //     array_push($emptyFields, 'email');
    // }
    // if (empty($_POST['street'])) {
    //     array_push($emptyFields, 'street');
    // }
    // if (empty($_POST['streetnumber'])) {
    //     array_push($emptyFields, 'streetnumber');
    // }
    // if (empty($_POST['city'])) {
    //     array_push($emptyFields, 'city');
    // }
    // if (empty($_POST['zipcode'])) {
    //     array_push($emptyFields, 'zipcode');
    // }
    // var_dump($emptyFields);
    // return $emptyFields;
    
}

function handleForm()
{
    // TODO: form related tasks (step 1)


    // $productNumbers = array_keys($_POST['products']);

    // $productNames = [];
    // foreach ($productNumbers as $productNumber) {
    //     $productNames[] = $productNumber['name'];
    // }

    $message = 'Your address: ' . $_POST['street'] . ' ' . $_POST['streetnumber'] . ', ' . $_POST['zipcode'] . ' ' . $_POST['city'];
    $message .= '<br>';
    $message .= 'Your email: ' . $_POST['email'];
    $message .= '<br>';
    $message .= '<br>';
    $message .= 'You have ordered: <br>' . implode('<br>', $_POST['products']);

    return $message;




    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors








    //     if (in_array("email", $invalidFields)) {
    //         $errorMsg = 'Please fill in your E-mail.';
    //     }
    //     if (in_array("street", $invalidFields)) {
    //         $errorMsg .= '<br>';
    //         $errorMsg .= 'Please fill in your Street.';
    //     }
    //     if (in_array("streetnumber", $invalidFields)) {
    //         $errorMsg .= '<br>';
    //         $errorMsg .= 'Please fill in your Street number.';
    //     }
    //     if (in_array("city", $invalidFields)) {
    //         $errorMsg .= '<br>';
    //         $errorMsg .= 'Please fill in your City.';
    //     }
    //     if (in_array("zipcode", $invalidFields)) {
    //         $errorMsg .= '<br>';
    //         $errorMsg .= 'Please fill in your Zipcode.';
    //     }
    //     return $errorMsg;
    // }
    // if (!is_numeric($_POST['zipcode'])) {
    //     $errorNumeric = "Zipcode can only have numeric values.";
    //     return $errorNumeric;
    // }
    // if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    //     $errorEmail = "Invalid email format";
    //     return $errorEmail;










    } else {
        // TODO: handle successful submission



        // return $message;



        
    }
}

// TODO: replace this if by an actual check
$formSubmitted = !empty($_POST);

if ($formSubmitted) {
    $confirmationMessage = handleForm();
}

require 'form-view.php';
