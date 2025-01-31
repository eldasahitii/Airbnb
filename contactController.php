<?php

include_once 'contactRepository.php';
include_once 'contactModel.php';

class ContactController {
    private $repo;

    public function __construct() {
        $this->repo = new ContactRepository();
    }

    public function handleContactForm($name, $email, $message) {
        $contact = new Contact($name, $email, $message);
        return $this->repo->insertMessage($contact);
    }

    public function getMessages() {
        return $this->repo->getAllMessages();
    }

    public function markMessageAsRead($id) {
        return $this->repo->markAsRead($id);
    }

    public function deleteMessage($id) {
        return $this->repo->deleteMessage($id);
    }
}

?>

