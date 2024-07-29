<?php
function displayHomePage()
{
    require_once '../templates/homePage.php';
}

function displayContactDetails()
{
    require_once '../templates/contactDetails.php';
}

function displayForm()
{
    require_once '../templates/enquiryForm.php';
}

function processForm()
{
    $customerName = filter_input(INPUT_POST, 'customerName', FILTER_SANITIZE_STRING);
    $customerEmail = filter_input(INPUT_POST, 'customerEmail', FILTER_SANITIZE_EMAIL);
    $enquiry = filter_input(INPUT_POST, 'enquiry', FILTER_SANITIZE_STRING);

    $errors = [];
    if (empty($customerName)) {
        $errors[] = 'missing customer name';
    }

    if (empty($customerEmail)) {
        $errors[] = 'missing or invalid customer email';
    }

    if (empty($enquiry)) {
        $errors[] = 'missing enquiry message';
    }

    if (sizeof($errors)>0) {
        require_once '../templates/displayError.php';
    } else {
        confirmData($customerName, $customerEmail, $enquiry);
    }
}

function confirmData($customerName, $customerEmail, $enquiry)
{
    require_once '../templates/confirmData.php';
}

function displayErrorMessage()
{
    $errorMessage = 'invalid - name must contain at least 3 letters';
}
