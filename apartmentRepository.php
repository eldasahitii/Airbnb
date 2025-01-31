
<?php
include_once 'apartmentModel.php';
class ApartmentRepository {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getApartments() {

        $sql = "SELECT * FROM apartments";
        $stmt = $this->db->query($sql);

        $apartments = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  // Correct method for PDO
            $apartments[] = $row;
        }

        return $apartments;
    }
}
?>
