<?php
include 'conn.php';

// Query to fetch all books from the database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['book_name'] . "</td>";
        // Display the book image
        echo "<td><img src='" . $row['image'] . "' alt='" . $row['book_name'] . "' width='100'></td>";
        echo "<td>" . $row['faculty_name'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        // echo "<td>";
        // echo "<button class='btn btn-warning btn-sm'><i class='fas fa-edit'></i> Edit</button>";
        // echo "<button class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i> Delete</button>";
        // echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No books found</td></tr>";
}

$conn->close();
?>
