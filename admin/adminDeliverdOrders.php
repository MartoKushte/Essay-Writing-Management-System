<?php
require_once ('../connect.php');
$query="select ordernumber,title,pages,dateDue,discpline,academicLevel,course from orders where status='Delivered'";
$result=processQuery($query);
$num = mysql_num_rows($result);
if (mysql_num_rows($result))
{
$row = mysql_fetch_row($result);
echo "<table class='orders' border='1' bgcolor=#eeeeee><tr><td>Order Number</td>";
echo "<td>Order Title</td><td>Number of Pages</td><td>DeadLine</td><td>Discpline</td><td>Course</td></tr>";
for ($j = 0 ; $j < $num ; ++$j)
 {
     $row = mysql_fetch_row($query);
     
echo "<tr><a href='getAdminOrder.php?$row[0]'><td> $row[0]  </td>";
echo "<td>$row[1]  </td><td>$row[2] </td><td>$row[3] </td><td>$row[4] </td><td>$row[5] </td></a></tr>";

 }//end inner for
}
else
{
	echo"No orders available currently";
}
?>