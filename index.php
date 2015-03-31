<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- HIOS product@haikent kumar hitesh// hiteshhknt@yhaoo.com haikent.al@facebook.com-->,
<?php 
session_start();  


?>
<title>Student's Councile</title>
<link rel="stylesheet" type="text/css" href="./css/indexcss.css" />
<script type="text/javascript" src="http://localhost/studentcouncil/script/indexjs.js"></script>
<script type="text/javascript"  src="http://localhost/studentcouncil/script/jquery.js"></script>

<script type="text/javascript">

//menu-------------------------------------
$(document).ready(function(){ 

$("dd").mouseover(function(){ if($(this).css("background-color")=="rgb(200, 200, 200)"){}else $(this).css("background-color","#09F");});

$("dd").mouseleave(function(){if($(this).css("background-color")=="rgb(200, 200, 200)"){}else $(this).css("background-color",""); });

$("dd").click(function(){$("dd").css("background-color","");$(this).css("background-color","#C8C8C8"); } );

$(".popupback").click(function(){$(this).hide();$(".popup").hide();});


}); 


function myshow(id)
{
	$("#"+id).show("slow");
}

function myhide(id)
{
	$("#"+id).hide("slow");
}
</script>
          


</head>

<body onLoad=''>
  <div class="mybody">
 
  
  <div class="myhead" onclick="alert("hello")">
 <img src="image/sclogo.png" width="400px" height="98%">
       <div class="popupback" ></div>
       <div class="popup" id="popup"></div>
  </div>
  
 
  <div class="mybodypart1" id="mybodypart1" onMouseOver='myhide("quick_link_data")'>
              <dt><span style="padding-left:20px;">HOME</span></dt>
             <dd onclick="menuclick(this.id)" id="councilhome" style="background-color:#C8C8C8">Student's Council </dd>
             <dd onclick="menuclick(this.id)" id="nitjhome">NITJ</dd>
             <dt><span style="padding-left:20px;">SENATE</span></dt>
             
             <dd onclick="menuclick(this.id)" id="OfficeBearers">Office Bearers</dd>
             <dd onclick="menuclick(this.id)" id="StandingCommittes">Standing Committes</dd>
             <dd onclick="menuclick(this.id)" id="EXOFFICIOMEMBERS">ExOfficio Members</dd>
             <dd onclick="menuclick(this.id)" id="HEADSTANDINGCOMMITTEES">Head sc</dd>
             <dd onclick="menuclick(this.id)" id="PresentSenator">Present Senator</dd>
             <dt><span style="padding-left:20px;">E-Notice Board</span></dt>
             <dd onclick="menuclick(this.id)" id="Tecnical">Technical</dd>
             <dd onclick="menuclick(this.id)" id="Cultural">Cultural</dd>
             <dd onclick="menuclick(this.id)" id="Academics">Academics</dd>
             <dd onclick="menuclick(this.id)" id="Other">Other</dd>
             <dt><span style="padding-left:20px;">Communicate</span></dt>
             <dd onclick="menuclick(this.id)" id="Complaint">Complaint</dd>
             <!--<dd onclick="menuclick(this.id)" id="Query">Query</dd>-->
             <dd onclick="menuclick(this.id)" id="Feedback">Feedback</dd>
     </div>
     
     
  <div class="mybodypart2" id="mybodypart2" onMouseOver='myhide("quick_link_data")'>
      <div class="mybodypart2box" id="mybodypart2box"></div>
  
  </div>
   <div class="mybodypart3" id="mybodypart3" onMouseOver='myhide("quick_link_data")'>
    
        <div id="quicknewsA" class="quicknews_" style="float:left;"></div>
        <div id="quicknewsB" class="quicknews_" style="float:left;"></div>
   </div>
   
  
 </div>
 
 
<div class="quklink" onMouseOver='myshow("quick_link_data")'  >
    <div id="quick_link_data" style="display:none;" >
      <a href="www.nitj.co.in" target="new">nitj</a>
       <a href="" target="_blank">utkansh</a>
       <a href="" target="_blank">Techniti</a>
       <a href="" target="_blank">Facebook\studentcounciles</a>
       <a href="" target="">Kollegestudio</a>
      </div>
<div id="quick_link_tag">
  Quick Link
</div>

</div>
</body>
</html>