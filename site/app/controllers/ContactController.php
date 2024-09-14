<?php
require_once 'app/models/Contact.php';

class ContactController {
    public function index() {
        require_once 'app/views/contact.php';
    }

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            Contact::saveMessage($name, $email, $message);
            header('Location: ' . BASE_URL . 'contact/success');
        }
    }
}
?>
