<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php function open() { ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>manager</title>

<script type="text/javascript"  src="http://localhost/studentcouncil/script/jquery.js"></script>
<script type="text/javascript">

//menu-------------------------------------
$(document).ready(function(){ 

$("dd").mouseover(function(){ if($(this).css("background-color")=="rgb(200, 200, 200)"){}else $(this).css("background-color","#09F");});

$("dd").mouseleave(function(){if($(this).css("background-color")=="rgb(200, 200, 200)"){}else $(this).css("background-color",""); });

$("dd").click(function(){$("dd").css("background-color","");$(this).css("background-color","#C8C8C8"); } );

$(".popupback").click(function(){$(this).hide();$(".popup").hide();});


}); 


</script>
          

<style type="text/css">
body

{
	
	
	            overflow:auto;
				overflow-x:hidden;
                width: 100%;
				height:100%;
				min-width:250px;
				background-color:rgba(242,242,242,1);
				
			   background:url("../image/patterns/4.png") repeat fixed 100%;

				
		
}

.menu
{
	
	width:18%;
	padding-left:2%;
	padding-top:20px;
	min-height:400px;
	background-color:rgba(224,224,224,1);
	border-radius:5px 5px;
	background:url("../image/patterns/5.png") repeat fixed 100%;
	border:2px  groove rgba(255,251,240,1);
	position:fixed;
	top:10%;
	left:20px;
}


.showpart
{
	
	width:60%;
	height:600px;
	background-color:rgba(245,245,245,1);
	margin-left:22%;
}


dt
{
			  font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
			  color:#003;
			  font-variant:small-caps;
			  font-weight:800;
			  font-size:14px;
			  text-shadow:2px 2px 2px #999999;
			 
}
 dd
 {
			   font-family:"Times New Roman", Times, serif;
			    color:rgba(24,24,24,1);
				font-weight:200;
				font-size:15px;
			   cursor:pointer;
			   max-width:80%;
			   text-shadow:2px 2px 2px #999999;
			   
			  
 }
 
 

</style>
</head>

<body>


<div class="menu">

<dt>POST</dt>
          <dd>NEWS</dd>
          <dd>NOTICE</dd>
<dt>EDIT & DELETE</dt>
           <dd>NEWS</dd> 
           <dd>NOTICE</dd>         
<dt>SHOW</dt>
          <dd>NEWS</dd>
          <dd>NOTICE</dd>
</div>


<div class="showpart">


</div>

</body>

</html>

<?php }?>