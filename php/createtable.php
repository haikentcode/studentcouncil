<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
 $hk=mysql_connect('localhost','haikent','gudan');
 
 if(!$hk)
 {
	 die('could not connect'.mysql_error());
 }

 
 if(!mysql_select_db("studentcouncil",$hk)){echo 'database don\'t find';}
 else
 {
 
 $quicknews="create table quicknews(title varchar(500),news varchar(100000),time varchar(100),postby varchar(100),qid varchar(100),status varchar(20))";
 
 $enoticeboard="create table enotice(title varchar(500),notice varchar(100000),time varchar(100),postby varchar(100),
  enid varchar(100),status varchar(20))";
  
 mysql_query($enoticeboard);
 mysql_query($quicknews);

 }

?>


</body>
</html>