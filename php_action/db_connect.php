<?php
// Create connection to Oracle
$conn = oci_connect('cardap', 'cardap', 'localhost/XE');
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}
// Close the Oracle connection
oci_close($conn);
?>