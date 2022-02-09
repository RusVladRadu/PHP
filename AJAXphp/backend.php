<?php
include 'database.php';
if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $data = $_POST["data"];
        $sql_query = "INSERT INTO `droid_table`(`data`) VALUE ('$data')";
        $sql = "INSERT INTO `droid_table`(`data`) VALUE ('$data')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
