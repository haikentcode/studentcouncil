<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>data group</title>
</head>

<body>
<?php 
function ceo()
{
	include('ceo.php');
	open();
	// cange and stop temporay site if any problem 
}
function manager()
{
	include('manager.php');
	open();
	// any type update do by manager 
}
function employe()
{
	include('employe');
	//member of student councile they can post only quick news and notice board part
}
function guest()
{
	//do nothing 
	include('guest.php');
	
}
function other()
{
	 include('error.php');
	//send notice to councile board when councile allow then the directy post to student
}

$adu="manager";
switch($adu)
{
case "ceo": ceo();break;
case "manager":manager();break;
case "employe":employe();break;
case "other":guest();break;
default: other();
	    
}

?>

</body>
</html>