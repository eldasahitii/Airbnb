<?php

$contactId = $_GET['id']; 


include_once 'contactRepository.php';

$contactRepository = new ContactRepository();


$contactRepository->deleteMessage($contactId);


header("location:Dashboard.php");

?>
