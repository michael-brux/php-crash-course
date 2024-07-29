<?php
namespace BeginningPHP;


use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class DefaultController
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';

    private $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader);
    }

    public function displayHomePage()
    {
        $template = 'homePage.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }
    
    public function displayContactDetails()
    {
        $template = 'contactDetails.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }
    
    public function displayForm()
    {
        $template = 'enquiryForm.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
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
            $template = 'displayError.html.twig';
            $args = [
                'errors' => $errors
            ];
            $html = $this->twig->render($template, $args);
            print $html;
        } else {
            $this->confirmData($customerName, $customerEmail, $enquiry);
        }
    }

    private function confirmData($customerName, $customerEmail, $enquiry)
    {
        $template = 'confirmData.html.twig';
        $args = [
            'customerName' => $customerName,
            'customerEmail' => $customerEmail,
            'enquiry' => $enquiry
        ];
        $html = $this->twig->render($template, $args);
        print $html;
    }

}

