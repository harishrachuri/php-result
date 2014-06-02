<html>
<head>
  <title>PHP Demo</title>
  <?php
  define('CSSDIR', 'http://192.168.40.59/php-result/');
  ?>
  
  <link rel='stylesheet' href='<?= CSSDIR ?>css/result.css' />  
  
</head>
<body>
<div id="main">
<div id="header">
<div class="logo"></div>
<div class="header-text"><h1>RESULTS</h1></div>
</div>
<div id="nav">
<ul>
<li><a href="<?= CSSDIR ?>index.php">Home</a></li>
<li><a href="<?= CSSDIR ?>templates/eamcet.php">Eamcet</a></li>
<li><a href="<?= CSSDIR ?>templates/ssc.php">SSC</a></li>
<li><a href="<?= CSSDIR ?>index.php">Test3</a></li>
<li><a href="<?= CSSDIR ?>index.php">Test4</a></li>
</ul>
</div><!--nav div ends -->
