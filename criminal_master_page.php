

<html>
<head>
<style>

@keyframes blink {  
    30% { color: red; }
    100% { color: black; }
}
@-webkit-keyframes blink {
    30% { color: red; }
    100% { color: black; }
    
}
.blink {
    -webkit-animation: blink .90s linear infinite;
    -moz-animation: blink .90s linear infinite;
    -ms-animation: blink .90s linear infinite;
    -o-animation: blink .90s linear infinite;
    animation: blink .90s linear infinite;
    margin: 10px 0px 10px 0px;
    padding : 0px;
}

</style>


<title>
  Criminal Record fillup!!
</title>

<style type="text/css">

</style>


<h3 align="center" class="blink"> CRIMINAL RECORD FORM </h3>
</head>


<body>

<form method="post">

<table align="center">
<tr><td>
<strong>Criminal ID: </td><td><input type="text" name="c_id" placeholder="criminal id"/></strong>
</tr>

<tr>
<td>Full Name :</td><td><input type="text" name="name" size="30"/></td>

</tr>
<tr>
<td>Gender : </td><td><input type="radio" name="gender" value="male"/>Male<input type="radio" name="gender" value="female"/>Female</td>
</tr>

<tr>
<td>Height : </td><td><input type="text" name="height" maxlength="5" size="20"/></td>
<td>Weight : </td><td><input type="text" name="weight" maxlength="5" size="20"/></td>
</tr>

<tr>
<td>Police Station ID :</td><td><input type="text" name="pstation_id" size="20"/></td>
</tr>

<tr>
<td>Crime Level :</td><td><input type="text" name="crimelevel" size="20"/></td>
</tr>

<tr>
<td>Status :</td><td><textarea name="status" placeholder="enter current status of criminal"></textarea></td>
</tr>

<tr>
<td>Criminal Picture:</td><td><input type="file" name="criminal_picture"/></td> <td><input type="submit" name="upload" value="upload"/></td></tr>
<tr><td><input type="submit" name="insert" value="Insert"/></td><td><input type="submit" name="update" value="Update"/></td><td><input type="submit" name="delete" value="Delete"/></td></tr>

</table>

</form>


</body>


</html>
<?php

require_once("config.php");
    
    
    
  if(!empty($_POST['c_id'])){
    
    $cid= $_POST['c_id'];
    $name= $_POST['name'];
    $gender= $_POST['gender'];
    $height= $_POST['height'];
    $weight= $_POST['weight'];
    $pstationid= $_POST['pstation_id'];
    $clevel= $_POST['crimelevel'];
    $status= $_POST['status'];
    //$c_pic= $_POST['criminal_picture'];
    
    
    
    
    if(isset($_REQUEST['insert'])){
        
        $qry= "INSERT into criminal_master values('$cid','$name','$gender','$height','$weight','$pstationid','$clevel','$status') ";
        $res= mysql_query($qry);
        
        echo("<script>alert('Your data is  SUCCESSFULLY inserted !!!');</script>");
        
    }
    else if($_REQUEST['delete']){
        
        $qry="DELETE from criminal_master where c_id='$cid'";
        $res1=mysql_query($qry);
        echo("<script>alert('Your Data is being Deleted');");
        
    }
    
    else if(isset($_REQUEST['update'])){
        $qry="UPDATE criminal_master SET c_id='$cid',name='$name',gender='$gender',height='$height',weight='$weight',pstation_id='$pstationid',
        crimelevel='$clevel',status='$status',criminal_picture='$c_pic' where c_id='$cid'";
        $res3=mysql_query($qry);
        
        echo("<script>alert('The Database is Updated for this criminal id. ');</script>");
        
        
    }
    
    
    
    
    
  }  
  else{
    
    echo "<script>alert('Your haven't entered Criminal ID ');</script>";  }




?>
