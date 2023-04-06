<?php
session_start();
    include('../Model/db.php');

$id = $_REQUEST['id'];
// Select data from "products" table
$sql = "SELECT * FROM product where ID = $id ";
$result = mysqli_query($con, $sql);


// Create table with headers
echo "<form method='POST' action='../controller/editController.php' >";
echo "<table>
        <tr>
            <th colspan='2'>Product</th>
        </tr>";

// Loop through data and create table rows
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>Name:</td>
                <td>". "<input type='text' value= '".$row["name"]."'name='name'>" ."</td>
               </tr>";
         echo "<tr>
                <td>Buying Price:</td>
                <td>" .  "<input type='number' value= '".$row["buying"]."'name='buying'>" . "</td>
           </tr>";
        echo "<tr>
                <td>Selling Price:</td>
                <td>" . "<input type='number' value= '".$row["Selling"]."'name='Selling'>" . "</td>
            </tr>";
       
        echo "<tr>
                <td>" . "<input type='number' value= '".$row["Id"]."' name='id' hidden>" . "</td>
            </tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";
echo "<input type='submit' value='Edit Product'>";
echo "</form>";

// Close MySQL connection
mysqli_close($con);
?>
