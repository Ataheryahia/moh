<?php
if( isset ($_POST['student'])   ||  isset ($_POST[' degree'])  ||  isset ($_POST[' field'])  ||  isset ($_POST[' class'])  ) {
$student=$_POST['student'];
$degree=$_POST['degree'];
$field=$_POST['field'];
$class=$_POST['class'];
$dbname='weezy';
$conn=mysqli_connect('localhost','root',"","weezy") or die (" Server Connection Error");
$m="INSERT INTO serach (  student , degree , field , class) 
VALUES ('$student' ,'$degree' ,'$field','$class' )"; 
$data=mysqli_query($conn,$m);
if($data){
echo"<center><h2>Data Inserted secsesffuly ";
}else {
echo"  <center><h2> NO Data faund";
}
}
echo"

<center><h1><br>
 <br><br>
دخال بيانات طالب<p>
<center><table border=2 width=300 height=11>
<tr> <form  action='insert.php' method='POST'>
<td> <br><br><center>
 student  <input type='text'  name='student' ><br><br>
 <p>degree   <input type='text'  name='degree'><br><br>
 <p>  field  <input type='text' name='field' ><br><br>
 <p> class    <input type='text'  name='class' ><br><br>
    <input type='submit' name='submit' value='insert' >
    <br><br>
</form>  "; 

?>