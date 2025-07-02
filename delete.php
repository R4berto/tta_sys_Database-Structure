<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tta_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID parameter is provided
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM life WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM ord WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}



//hr
// Check if the ID parameter is provided
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM index1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}

// Check if the ID parameter is provided
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM index2 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}

// Check if the ID parameter is provided
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM index3 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}


//accounting
// Check if the ID parameter is provided
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM payable WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}
// Check if the ID parameter is provided
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM expenses WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}
// Check if the ID parameter is provided
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM costcenter WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}



$conn->close();
?>