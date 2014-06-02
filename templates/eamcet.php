<?php include('../includes/header.php'); ?>

<div id="ht-section">
<div id="results-name">EAMCET 2013 Results</div>
<form method="post">
<b>Hallticket Number :</b> <input class="hbox" type="text" name="hnumber">
<input class="submit" type="submit" name="treasure" value="Submit"></input>
</form>
<span>Ex: 1402165</span>
</div>

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

echo '<table class="result-output"><tr><td style="color: #f05023; font-weight: bold;">Hall Ticket Number : </td><td>'.$row['htno'].'</td></tr>
<tr><td class="tname">Candidate Name : </td><td>'.$row['name'].'</td></tr>
<tr><td class="tname">Fathers Name : </td><td>'.$row['fname'].'</td></tr>
<tr><td class="tname">Gender : </td><td>'.$row['gender'].'</td></tr>
<tr><td class="tname">Local Area : </td><td>'.$row['localarea'] 	 	.'</td></tr>
<tr><td class="tname">Category : </td><td>'.$row['cat'].'</td></tr>
<tr><td class="tname">Approx Rank : </td><td>'.$row['approxrank'].'</td></tr>
<tr><td class="tname">Total : </td><td>'.$row['tot'].'</td></tr>
</table>';
} 
echo "Fetched data successfully\n";
mysql_close($conn);
$hallticket="";
?>
<div id="note"><b>Disclaimer</b> : The Examination Results published in this WebSite is only for the immediate Information to the Examinees and does not constitute to be a Legal Document. While all efforts have been made to make the Information available on this WebSite as Authentic as possible, We are not responsible for any InAdvertent Error that may have crept in the Examination Results being published in this WebSite and for any loss to anybody or anything caused by any ShortComing, Defect or InAccuracy of the Information on this WebSite.</div>


<?php include("../includes/footer.php"); ?>
</div><!--main div ends -->

</body>
</html>
