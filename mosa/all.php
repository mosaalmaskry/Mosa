<table bgcolor="silver" border="2" bordercolor="black">
<tr bgcolor="silver" border="2" bordercolor="black">
<td>id</td>
<td>cfrom</td>
<td>name</td>
<td>subject</td>
<td>cmessage</td>
</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mosa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, cfrom, name, subject, cmessage FROM website";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td> " . $row["id"]. "</td><td>" . $row["cfrom"]. "</td><td>" . $row["name"].  "</td><td>" . $row["subject"]. "</td><td>" . $row["cmessage"]."</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>