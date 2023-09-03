<?php
session_start();
    include('../../Model/db.php');

$id = $_REQUEST['id'];

$sql = "SELECT * FROM user where ID = $id ";
$result = mysqli_query($con, $sql);


// Create table with headers
echo "<form method='POST' action='../../Controller/admin/deleteAction.php' >";
echo "<table>
        <tr>
            <th colspan='2'>Confirmation</th>
        </tr>";

// Loop through data and create table rows
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>Name:</td>
                <td>".$row["username"] ."</td>
               </tr>";
         echo "<tr>
                <td>Full Name:</td>
                <td>" .$row["firstname"] ." ".$row["lastname"]. "</td>
           </tr>";
        echo "<tr>
                <td>Contact:</td>
                <td>" .$row["phone"]. "<br>".$row["email"]."</td>
            </tr>";
       
        echo "<tr>
                <td>" . "<input type='number' value= '".$row["id"]."' name='id' hidden>" . "</td>
            </tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";
echo "<input type='submit' value='Confirm Delere'>";

echo "</form>";
echo "<button onclick='goBack()'>Go Back</button>";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous_page = $_SERVER['HTTP_REFERER'];
    echo "<script>function goBack() { window.location.href = '$previous_page'; }</script>";
}

// Close MySQL connection
mysqli_close($con);
?>
