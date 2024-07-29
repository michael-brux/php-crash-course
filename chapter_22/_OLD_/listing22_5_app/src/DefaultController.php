<?php
namespace BeginningPHP;


class DefaultController
{
    public function displayHomePage()
    {
        require_once '../templates/homePage.php';
    }
    
    public function displayContactDetails()
    {
        require_once '../templates/contactDetails.php';
    }
    
    public function displayForm()
    {
        require_once '../templates/enquiryForm.php';
    }
    
    public function processForm()
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
            $this->confirmData($customerName, $customerEmail, $enquiry);
        }
    }

    private function confirmData($customerName, $customerEmail, $enquiry)
    {
        require_once '../templates/confirmData.php';
    }

}

