<?php
// Include database configuration file
include_once 'config.php';

// Check if category ID is provided
if (isset($_POST['kategoriId'])) {
    $kategoriId = $_POST['kategoriId'];

    // Delete the category from the database
    $query = "DELETE FROM kategori WHERE id = '$kategoriId'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo 'Data deleted successfully';
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }

    mysqli_close($connection);
}