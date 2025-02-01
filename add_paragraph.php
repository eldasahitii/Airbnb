<?php
session_start();
include_once 'Database.php';  


$conn = Database::getInstance()->getConnection();
$email = $_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $edited_by = $email;


    $sql = "INSERT INTO paragraphs (title, content, edited_by) VALUES (:title, :content, :edited_by)";
    
   
    $stmt = $conn->prepare($sql);

    
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':edited_by', $edited_by); 

    if ($stmt->execute()) {
        echo "Paragraph added successfully!";
        header("Location: AboutUs.php");
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>