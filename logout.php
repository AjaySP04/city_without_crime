<?php
if(isset($_COOKIE['uname']))
{
    setcookie("uname","",time()-1);
    header("location:admin.php");

}
else

echo "wrong path";

?>
