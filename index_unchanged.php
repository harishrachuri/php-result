
<form method="post">
<b>Hallticket Number :</b> <input type="text" name="hnumber">
<input type="submit" name="treasure" value="Submit"></input>
</form>


<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$hallticket = $_POST["hnumber"];
$sql = "SELECT * FROM eamcet_thirteen where htno='$hallticket' ";

mysql_select_db('results');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Hallticket :{$row['htno']}  <br> ".
         "Name : {$row['name']} <br> ".
         "Father Name : {$row['fname']} <br> ".
         "Gender : {$row['gender']} <br> ".
         "Total : {$row['tot']} <br> ".
         "Localarea : {$row['localarea']} <br> ".
         "Approx Rank : {$row['approxrank']} <br> ".
	 "Rank : {$row['rank']} <br> ".
         "Inter Weight : {$row['interwt']} <br> ".
	 "Result : {$row['result']} <br> ".
         "Eamcet Wt : {$row['eamcetwt']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>
