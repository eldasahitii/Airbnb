<?php
include_once 'Database.php';

$conn = Database::getInstance()->getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "DELETE FROM paragraphs WHERE id = :id";
    
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':id', $id);

   
    if ($stmt->execute()) {
        header("Location: Dashboard.php");
        exit();
    } else {
        echo "Error deleting paragraph.";
    }
} else {
    echo "ID e paragrafit nuk u gjet!";
}
?>
