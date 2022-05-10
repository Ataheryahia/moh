<?php
$link = mysqli_connect("localhost", "root", "", "cs");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM sd";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "
<center><h1><br>
 <br><br>
عرض بيانات طالب<p>
<br><center><table border=1 wedth=200 height=100>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>student_name</th>";
                echo "<th>Degree</th>";
                echo "<th>field</th>";
                echo "<th>class</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['student'] . "</td>";
                echo "<td>" . $row['degree'] . "</td>";
                echo "<td>" . $row['field'] . "</td>";
                echo "<td>" . $row['class'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>