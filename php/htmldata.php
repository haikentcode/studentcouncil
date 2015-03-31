

<?php
/*
product of @HIOS 
  by hitesh kumar regar( haikent)
  contact detail(hiteshhknt@yhaoo.com,haikent.al@facebook.com)
#NITJ_BTECT_CSE _2016_12103024
*/
$hk=mysql_connect('localhost','haikent','gudan');
if(!$hk)
{
	die('could not connect to sever'.mysql_error());
}

if(!mysql_select_db("studentcouncil",$hk))
{
	echo 'couldnot connect to database';
}
function quicknewsBdata()
{
	
	
	$select=mysql_query("select * from quicknews where status='display' and newspart='upcommingevents' order by time DESC limit 4 ");
/*echo '<marquee direction="up" behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="4">'; */ 
     echo '<div class="heading">Upcomming Events</div><div class="quicknewsshow">';
     echo '<ul class="newlist">';
	
	while($row=mysql_fetch_array($select))
	{
	 echo '<li class="qnews" onclick=\'openover(this.id)\' id="'.$row['qid'].'">';
     echo $row['title'];
	 echo '</li>';
	 
	}
echo '</ul></div>';


	
//echo '</marquee>';
	
	
	
}
     
	 function quicknewsAdata()
{
	
	$select=mysql_query("select * from quicknews where status='display' and newspart='latesupdates' order by time  DESC limit 4");
/* echo '<marquee direction="up" behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="4">'; */
    echo '<div class="heading">Lates Updates</div><div class="quicknewsshow">';
    echo '<ul class="newslist">';
	
	while($row=mysql_fetch_array($select))
	{
	 echo '<li class="qnews" onclick=\'openover(this.id)\' id="'.$row['qid'].'">';
     echo $row['title'];
	 echo '</li>';
	 
	}
echo '</ul></div>';
	
/* echo '</marquee>';*/
	
}
     
function councilhomedata()
{
	
?>

<div class="home_page">


<div class="home_image_logo">
<img src="image/sclogo2.png"  width="100px" height="100px"/> 
</div>
<div class="home_content">

<div class="home_content_1">
<h3 style="margin-left:10px;">ABOUT</h3>
<p style="margin:20px;color:rgba(85,95,170,1);">
The student council helps share students’ ideas, interests, and concerns with teachers and school principals. They often also help raise funds for school-wide activities, including social events, community projects, helping people in need and school reform. For example most schools do food drives, fundraisers and parties.Many members learn skills that were an extension of their formal education.

According to several schools:

"A Student Council is a representative structure for students only, through which they can become involved in the affairs of the school, working in partnership with school management, staff and parents for the benefit of the school and its students.
</p>

</div>
<div class="home_content_2">

</div>

</div>

<?php
	
}

function nitjhomedata()
{
	echo "nitj home page ...............";
}
	 
function StandingCommittesdata()
{
	
	$xml = simplexml_load_file("../xml/StandingCommittes.xml");

echo '<ul class="scul">';

foreach($xml->children() as $committes)
  {  
      echo '<li>';
      echo '<div class="sctital" >'.$committes->getName()."</div>";
	  foreach($committes->children() as $cchild)
	  {
	          if( $cchild->getName()=="BODY") echo '<div class="scbody">'.$cchild."</div>";
			  else if( $cchild->getName()=="AIM") 
			        {
						echo '<div class="scaim">';
			                foreach($cchild->children() as $aim) 
			                     echo "</br>".$aim."</br>";
					
					    echo '</div>';
					}
								 
					
			  
			  
	  }
	  
     echo '</li>';
    
  }
echo '</ul>';	
	
}
function HEADSTANDINGCOMMITTEES()
{
	$xml = simplexml_load_file("../xml/HEADSTANDINGCOMMITTEES.xml");
	
	echo '<table>';
	$i=1;
	foreach($xml->children() as $ob)
	{
		if($i%2==0) echo '<tr class="even">'; else echo '<tr class="odd">';
	     foreach($ob->children() as $obc)
		     echo '<td>'.$obc.'</td>';
	      echo '</tr>';
		  
		 $i++; 		 
		     
	}
		
	echo '</table>';	
	
}
function OfficeBearers()
{
	$xml = simplexml_load_file("../xml/OFFICEBEARERS.xml");
	
	echo '<table>';
	$i=1;
	foreach($xml->children() as $ob)
	{
		if($i%2==0) echo '<tr class="even">'; else echo '<tr class="odd">';
	     foreach($ob->children() as $obc)
		     echo '<td>'.$obc.'</td>';
	      echo '</tr>';
		  
		 $i++; 		 
		     
	}
		
	echo '</table>';		  
		    
}

function EXOFFICIOMEMBERS()
{
	
	$xml = simplexml_load_file("../xml/EXOFFICIOMEMBERS.xml");
	
	echo '<table>';
	$i=1;
	foreach($xml->children() as $ob)
	{
		if($i%2==0) echo '<tr class="even">'; else echo '<tr class="odd">';
	     foreach($ob->children() as $obc)
		     echo '<td>'.$obc.'</td>';
	      echo '</tr>';
		  
		 $i++; 		 
		     
	}
		
	echo '</table>';
}

function  PrestStenator()
{
	$xml = simplexml_load_file("../xml/presentsenators.xml");

echo $xml->getName() . "<br />";
echo '<table class="senatorlist" >';
$i=1;
foreach($xml->children() as $child)
  {  
     if($i%2==0) echo '<tr class="even">'; else echo '<tr class="odd">';
	    $j=0;
	     foreach($child->children() as $child2)
		 {
              $child2c[$j]=$child2;
			  $j++;
					  
		 }
		 for($k=0;$k<$j;$k++) echo '<td>'.$child2c[$k].'</td>';
	  echo '</tr>';	
	  $i++;
		
  }
echo '</table>';
}


function enoticedata($type)
{
	
	$sql="select * from enotice where type='$type' order by time desc limit 10";
	$select=mysql_query("$sql");
	$i=0;
	while($row=mysql_fetch_array($select))
	{
		echo $row['notice'];
		
		echo '</br></br>';
	}
	
	
  
	
}


function Feedbackdata()
{
	
	?>
    <div class="feedback">
    <div class="feedbackh1">Feedback</div>
    <hr />
    <p>
    Please tell us what do you think,any kind of feedback is <br />
    appreciated

    </p>
    <hr />
    <ul class="feedbackul">
    
    <li>
    <select><option>Idea</option><option>Question</option><option>Problem</option><option>Praise</option></select>
    </li>
    
    <li>
    <textarea placeholder="Your feedback"></textarea>
    </li>
    
    <li><input placeholder="Short summry" /></li>
    <li><input placeholder="Your email(will not be published)"/></li>
    <li><input  placeholder="Your name"/></li>
    <li><input type="button" value="Submit feedback"/></li>
    
    </ul>
    
    </div>
    
    
    <?php
}

function  Complaintdata()
{
	?>
    
	<div>
	    <div class="complaint">
        
        <ul>
        <li><div class="complainh">COMPLAINT  <img src="image/hios.gif" class="icon" /></div></li>
        <li><input required="required" placeholder="Email Id" /></li>
        <li><select><option>Student</option><option>Others</option></select></li>
        <li><textarea required="required" placeholder="Complaint" ></textarea></li>
        <li><input required="required" type="button" value="Submitt" /></li>
        </ul>
        
        </div>
	</div>
	
	<?php
}

function Querydata()
{
}


function makenews($title,$txt,$path,$attachedtype)
{
	
	 $news='<div class="newsdiv">';
	 $news.='<div class="newstitle">'.$title.'</div>';
	 $news.='<div class="newstxt">'.$txt.'</div>';
	
	switch($attachedtype)
	{
		
		case "IMage":$news.='<div class="newsattach"><img src="'.$path.'" class="attachimg"></div>';break;
	    case "PDF": $news.='<div class="newsattach"><a href="'.$path.'">More see.....</a></div>';break;
		case "Window file":$news.='<div class="newsattach"><a href="'.$path.'">More see.....</a></div>';break;
	    case "video":$news.='<div class="newsattach"><a href="'.$path.'">More see.....</a></div>';break;
		case "none": $news.='<div class="newsattach"></div>';
	    default: $news.="you uploaded invalid file and any other error";
						
	 }
	
	
	 $news .='<div class="newbottom"></div>';
	 $news.='</div>';
	 return $news;
	
}

function makenotice($title,$txt,$path,$attachedtype)
{
	 $notice='<div class="newsdiv">';
	 $notice.='<div class="newstitle">'.$title.'</div>';
	 $notice.='<div class="newstxt">'.$txt.'</div>';
	
	switch($attachedtype)
	{
		
		case "IMage":$notice.='<div class="newsattach"><img src="'.$path.'" class="attachimg"></div>';break;
	    case "PDF": $notice.='<div class="newsattach"><a href="'.$path.'">More see.....</a></div>';break;
		case "Window file":$notice.='<div class="newsattach"><a href="'.$path.'">More see.....</a></div>';break;
	    case "video":$notice.='<div class="newsattach"><a href="'.$path.'">More see.....</a></div>';break;
		case "none": $notice.='<div class="newsattach"></div>';
	    default: $notice.="you uploaded invalid file and any other error";
						
	 }
	
	
	 $notice .='<div class="newbottom"></div>';
	 $notice.='</div>';
	 return $notice;
}

function datagroup_news()
{
	$title=$_POST['title'];
	$txt=$_POST['txt'];
	$time=time();
	$attachedtype=$_POST['attachedtype'];
	//echo $title." ".$txt." ".$time." ".$attachedtype; 
	$hkkey=time();
	move_uploaded_file($_FILES["attached"]["tmp_name"],"upload/" .$hkkey. $_FILES["attached"]["name"]);
	$path="http://localhost/studentcouncil/php/"."upload/" .$hkkey. $_FILES["attached"]["name"];
	$news=makenews($title,$txt,$path,$attachedtype);
	$postby="managerid";
	$qid=md5("haikentaditi".time());
	$status="display";
	$newspart=$_POST['newspart'];
	
	
	$sql="insert into quicknews(title,news,time,postby,qid,status,newspart)   values('$title','$news','$time','$postby','$qid','$status','$newspart')";
	
	mysql_query($sql);
}
function datagroup_notice()
{
	
    $title=$_POST['title'];
	$txt=$_POST['txt'];
	$time=time();
	$attachedtype=$_POST['attachedtype'];
	$hkkey=time();
	move_uploaded_file($_FILES["attached"]["tmp_name"],"upload/" .$hkkey. $_FILES["attached"]["name"]);
	$path="http://localhost/studentcouncil/php/"."upload/" .$hkkey. $_FILES["attached"]["name"];
	$notice=makenotice($title,$txt,$path,$attachedtype);
	$postby="managerid";
	$enid=md5("haikentaditi".time());
	$status="display";
	$type=$_POST['noticetype'];

	$sql="insert into enotice(title,notice,time,postby,enid,status,type)   
	     values('$title','$notice','$time','$postby','$enid','$status','$type')";
	
	mysql_query($sql);
}

function qidopendata()
{
	$qid=$_POST['qid'];
	
	$select=mysql_query("select * from  quicknews where qid='$qid'");
	if($row=mysql_fetch_array($select))

	    echo $row['news'];
	      
	   
}

function quicknewspost()
{
	?>
    
    
<div class="newspostpart">
<ul>
<form action="http://localhost/studentcouncil/php/htmldata.php" method="post"  enctype="multipart/form-data" >
<li><select name="newspart"><option>latesupdates</option><option>upcommingevents</option></select></li>
<li><span>Title</span><br /><input name="title" required="required" /></li>
<li><span>Text</span><br /><textarea name="txt"></textarea></li>
<li> <select name="attachedtype"><option>none<option>PDF</option><option>IMage</option><option>Window file</option><option>video</option></select></li>
<li><span>Attached file</span><br /><input type="file" name="attached"/></li>
<li style="display:none;"><input  name="hkag" value="datagroup" style="display:none;" /></li>
<li><button type="submit">POST</button></li>
</form>
</ul>
</div>



    
    <?php
}


function newspostpart()
{
	
	?>
	<div class="newspostpart">
<ul>
<form action="http://localhost/studentcouncil/php/htmldata.php" method="post"  enctype="multipart/form-data" >
<li><select name="newspart"><option>latesupdates</option><option>upcommingevents</option></select></li>
<li><span>Title</span><br /><input name="title" required="required" /></li>
<li><span>Text</span><br /><textarea name="txt"></textarea></li>
<li> <select name="attachedtype"><option>none<option>PDF</option><option>IMage</option><option>Window file</option><option>video</option></select></li>
<li><span>Attached file</span><br /><input type="file" name="attached"/></li>

<li style="display:none;"><input  name="hkag" value="datagroup_news" style="display:none;" /></li>

<li><button type="submit">POST</button></li>
</form>
</ul>
</div>

<?php
}


function noticepostpart()
{
	?>
	<div class="noticepostpart">
<ul>
<form action="http://localhost/studentcouncil/php/htmldata.php" method="post" enctype="multipart/form-data">

<li><select name="noticetype">
         <option>TECHNICAL</option>
         <option>CULTURAL</option>
         <option>ACADEMICS</option>
         <option>OTHER</option>
      </select>
</li>

<li>
      <span>Title</span><br />
      <input name="title" required="required" placeholder="TITLE" />
</li>

<li><span>Text</span><br /><textarea name="txt"></textarea></li>
<li> 
     <select name="attachedtype">
                      <option>none</option>
                      <option>PDF</option>
                      <option>IMage</option>
                      <option>Window file</option>
                      <option>video</option>
     </select>
</li>

<li>
    <span>Attached file</span>
       <br />
    
    <input type="file" name="attached"/>
</li>

<li style="display:none;">
     <input  name="hkag" value="datagroup_notice" style="display:none;" />
</li>

 <li><button type="submit">POST</button></li>

</form>

</ul>

</div>
<?php
}


function headers()
{
	
}

function slidebar1()
{
	
	?>
    <ul>
     <dt><span style="padding-left:20px;">HOME</span></dt>
      
      <li onclick="menuclick(this.id)" id="councilhome"><a href="#">Student's Council</a> </li>
      <li onclick="menuclick(this.id)" id="nitjhome"><a href="#">NITJ</a></li>
        
     <dt><span style="padding-left:20px;">SENATE</span></dt>
             
       <li onclick="menuclick(this.id)" id="OfficeBearers"><a href="#">Office Bearers</a></li>
       <li onclick="menuclick(this.id)" id="StandingCommittes"><a href="#">Standing Committes</a></li>
       <li onclick="menuclick(this.id)" id="EXOFFICIOMEMBERS"><a href="#">ExOfficio Members</a></li>
       <li onclick="menuclick(this.id)" id="HEADSTANDINGCOMMITTEES"><a href="#">Head sc</a></li>
       <li onclick="menuclick(this.id)" id="PresentSenator"><a href="#">Present Senator</a></li>
       
       <dt><span style="padding-left:20px;">E-Notice Board</span></dt>
             
        <li onclick="menuclick(this.id)" id="Tecnical"><a href="#">Technical</a></li>
        <li onclick="menuclick(this.id)" id="Cultural"><a href="#">Cultural</a></li>
        <li onclick="menuclick(this.id)" id="Academics"><a href="#">Academics</a></li>
        <li onclick="menuclick(this.id)" id="Other"><a href="#">Other</a></li>
        
        <dt><span style="padding-left:20px;">Communicate</span></dt>
        
        <li onclick="menuclick(this.id)" id="Complaint"><a href="#">Complaint</a></li>
        <li onclick="menuclick(this.id)" id="Feedback"><a href="#">Feedback</a></li>
    
    
    </ul>
    <?php
	
}

function slidebar2()
{
	
}


$aditi=$_POST['hkag'];


switch($aditi)
	 {
					
	 case "councilhome": councilhomedata(); break;
	 case "nitjhome": nitjhomedata(); break;
	 case "StandingCommittes": StandingCommittesdata(); break;
	 case "OfficeBearers": echo OfficeBearers(); break;
	 case "PresentSenator": PrestStenator();break;
	 case "Tecnical": echo enoticedata("TECHNICAL");break;
	 case "Cultural": enoticedata("CULTURAL");break;
	 case "Academics":enoticedata("ACADEMICS"); break;
	 case "Other":enoticedata("OTHER"); break;
	 case "Complaint": Complaintdata(); break;
	 case "Query": Querydata();break;
	 case "Feedback": Feedbackdata();break;
	 case "quicknewsA": quicknewsAdata();break;
	 case "quicknewsB": quicknewsBdata();break;
	 case "datagroup_news":datagroup_news();break;
	  case "datagroup_notice":datagroup_notice();break;
	 case "qidopen": qidopendata();break;
	 case"quicknewspost": quicknewspost();break;
	 case "EXOFFICIOMEMBERS": EXOFFICIOMEMBERS();break;
	 case "HEADSTANDINGCOMMITTEES": HEADSTANDINGCOMMITTEES();break;
	 case "slidebar1":slidebar1();break;
	 
					 
	 }
  
?>
