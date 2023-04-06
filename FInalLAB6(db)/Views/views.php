<?php
session_start();
    include('../Model/db.php');


// Select data from "products" table
$sql = "SELECT * FROM product";
$result = mysqli_query($con, $sql);


// Create table with headers
echo "<table>
        <tr>
            <th>Name</th>
            <th>Buying Price</th>
            <th>Selling Price</th>
            <th>Profit</th>
            <th colspan='2'>Action</th>
        </tr>";

// Loop through data and create table rows
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["buying"] . "</td>
                <td>" . $row["Selling"] . "</td>
                <td>" . $row["Selling"]-$row["buying"] . "</td>
                <td>"."<a href='edit.php?id=".$row["Id"]."'>"."Edit"."</a>" ."</td>
                <td>"."<a href='delete.php?id=".$row["Id"]."'>"."Delete"."</a>" ."</td>
            </tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";

echo "<a href='index.php'>"."Add New "."</a>";

// Close MySQL connection
mysqli_close($con);
?>
