<?php
require_once '../classes/user.classes.php';

// Check if the request method is GET (for this case)
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (!empty($id)) {
        $userObj = new User();
        $userObj->removeUser($id);

        // Redirect back to the main page with a success message
        header("Location: ../dashboard.php?message=UserDeleted");
        exit();
    } else {
        die("Invalid ID.");
    }
} else {
    die("Invalid request method.");
}
?>