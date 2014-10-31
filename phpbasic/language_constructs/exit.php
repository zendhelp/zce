<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php
echo "Exit statuses should be in the range 0 to 254, the exit status 255 is reserved by PHP and shall not be used.<hr>
The status 0 is used to terminate the program successfully.<hr>";
echo "No value is returned.<hr>";


exit('exit'); //print exit
/*
$filename = '/path/to/data-file';
$file = fopen($filename, 'r') or exit("unable to open file ($filename)");
*/


//exit program normally
/*
exit;
exit();
exit(0);
*/

//exit with an error code
//exit(1);      //not print 1
//exit(0376);   //octal - not print 254
//exit(2000);     //not print
//exit('2000');   //print 2000
//$a = 1;
//exit($a);


?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
