<?php include("../includes/header.php"); ?>

<div id="ht-section">
<div id="results-name">CEEP(Polytechnic) 2013 Results</div>
<form method="post">
<b>Hallticket Number :</b> <input class="hbox" type="text" name="hnumber">
<input class="submit" type="submit" name="treasure" value="Submit"></input>
</form>
<span>Ex: 6571346</span>
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
$sql = "SELECT * FROM polytechnic_thirteen where hallticket='$hallticket' ";

mysql_select_db('results');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
    die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Hallticket  : {$row['hallticket']}   <br> ".
         "Name        : {$row['name']}         <br> ".
         "Maths       : {$row['maths']}        <br> ".
         "Physics     : {$row['physics']}      <br> ".
         "Chemistry   : {$row['chemistry']}    <br> ".
         "Total       : {$row['total']}        <br> ".
         "Pass        : {$row['pass']}         <br> ".
         "Rank        : {$row['rank']}         <br> ".
         
         "--------------------------------<br>";

echo '<table class="result-output">
<tr><td class="tname">Hallticket Number : </td><td>'.$row['hallticket'].' </td></tr>
<tr><td class="tname">Name :              </td><td>'.$row['name'].'       </td></tr>
<tr><td class="tname">Maths :             </td><td>'.$row['maths'].'      </td></tr>
<tr><td class="tname">Physics :           </td><td>'.$row['physics'].'    </td></tr>
<tr><td class="tname">Chemistry :         </td><td>'.$row['chemistry'].'  </td></tr>
<tr><td class="tname">Total :             </td><td>'.$row['total'].'      </td></tr>
<tr><td class="tname">Pass :              </td><td>'.$row['pass'].'       </td></tr>
<tr><td class="tname">Rank :              </td><td>'.$row['rank'].'       </td></tr>
</table>';
} 
echo "Fetched data successfully\n";
mysql_close($conn);
$hallticket="";
?>
<div id="note"><b>Disclaimer</b> : The Examination Results published in this WebSite is only for the immediate Information to the Examinees and does not constitute to be a Legal Document. While all efforts have been made to make the Information available on this WebSite as Authentic as possible, We are not responsible for any InAdvertent Error that may have crept in the Examination Results being published in this WebSite and for any loss to anybody or anything caused by any ShortComing, Defect or InAccuracy of the Information on this WebSite.</div>
<?php include("../includes/footer.php"); ?>

</div>
</body>
</html>
