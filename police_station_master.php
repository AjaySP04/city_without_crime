<?php

require_once("config.php");

if(!empty($_POST['pstation_id']))
    {
    
    
    $pid=$_POST['pstation_id'];
    $pname=$_POST['pstation_name'];
    $state=$_POST['s_city'];
    $addr=$_POST['address'];
    $pho=$_POST['phone'];
    $mob=$_POST['mobile'];
    $design=$_POST['design'];
    $phead=$_POST['pstation_head'];
    $pwd=$_POST['pwd'];
    
    
    if(isset($_REQUEST['submit'])){
        
        $qry="INSERT INTO police_station_master value('$pid','$pname','$addr','$state',$pho,$mob,'$design','$phead','$pwd')";
        $res=mysql_query($qry);
        
       echo("<script>alert('Your data is  SUCCESSFULLY inserted !!!');</script>");   
        
    }
    }
else{
    printf("");
    }


?>

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
Police_Station_Master Page!!!
</title>

</head>
<body>
<div align="center">


<h2 class="blink"><strong>POLICE STATION ENTRY PANEL</strong></h2>
<form method="post">
<table align="center">

<tr>
<td>Police Station ID :</td><td><input type="text" name="pstation_id" size="10"/></td>
</tr>
<tr>
<td>Police Station Name :</td><td><input type="text" name="pstation_name" size="30"/></td>
</tr>
<tr>
<td>State or Territory :</td>
<td>
<select name="s_city" >

<script language="javascript">
var states = new Array("--SELECT STATE or TERRITORY--","Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", 
"Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh",
 "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya",
 "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");

for(var hi=0; hi<states.length; hi++)
document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
</script>
</select>






</td>
</tr>
<tr>
<td>Address : </td><td><textarea name="address" placeholder="enter address city and location !!!! "></textarea></td>
</tr>
<tr>
<td>Phone :</td><td><input type="int" name="phone" maxlength="10" size="20"/></td>
</tr>
<tr>
<td>Mobile :</td><td><input type="int" name="mobile" maxlength="10" size="20"/></td>
</tr>
<tr>
<td>Police Station Head :</td><td>
<select name="design">
<option value="Mr.">Mr.</option>
<option value="Mrs.">Mrs.</option>
<option value="Miss">Miss</option>
</select>
<input type="text" name="pstation_head" size="30"/></td>
</tr>
<tr>
<td>Password :</td><td><input type="password" name="pwd" placeholder="password" maxlength="10" size="20"/></td>
</tr>
<tr><td><input type="submit" name="submit" value="submit"/></td></tr>
</table>

</form>
</div>
</body>


</html>
