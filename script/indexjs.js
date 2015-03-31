// JavaScript Documen

var content="mybodypart2";
var slidebar1="";
var slidebar2="";
var footer="";
var news_A="quicknewsA";
var news_B="quicknewsB"; 						



function openid(id,key)
{
	
	if (window.XMLHttpRequest)
                      {// code for IE7+, Firefox, Chrome, Opera, Safari
                          xmlhttp=new XMLHttpRequest();
                      }
                     else
                     {// code for IE6, IE5
					 
                         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                     }
	                  xmlhttp.onreadystatechange=function()
                                    {
                                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                             {
                                              var response=xmlhttp.responseText;
											  document.getElementById(id).innerHTML=response;
                                             }
                                    }
									
                                     
                            xmlhttp.open("POST","http://localhost/studentcouncil/php/htmldata.php",true);
                            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                            xmlhttp.send("hkag="+key);
	
	
}
function quicknewsA()
{
	 
          if (window.XMLHttpRequest)
                      {// code for IE7+, Firefox, Chrome, Opera, Safari
                          xmlhttp=new XMLHttpRequest();
                      }
                     else
                     {// code for IE6, IE5
					 
                         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                     }
	                  xmlhttp.onreadystatechange=function()
                                    {
                                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                             {
                                              var response=xmlhttp.responseText;
											  document.getElementById( news_A).innerHTML=response;
											   menuclick("councilhome");
                                             }
                                    }
									
                                     
                            xmlhttp.open("POST","http://localhost/studentcouncil/php/htmldata.php",true);
                            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                            xmlhttp.send("hkag=quicknewsA");

}

function quicknewsB()
{
	 
          if (window.XMLHttpRequest)
                      {// code for IE7+, Firefox, Chrome, Opera, Safari
                          xmlhttp=new XMLHttpRequest();
                      }
                     else
                     {// code for IE6, IE5
					 
                         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                     }
	                  xmlhttp.onreadystatechange=function()
                                    {
                                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                             {
                                              var response=xmlhttp.responseText;
											  document.getElementById(news_B).innerHTML=response;
											  quicknewsA();
											   
                                             }
                                    }
									
                                     
                            xmlhttp.open("POST","http://localhost/studentcouncil/php/htmldata.php",true);
                            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                            xmlhttp.send("hkag=quicknewsB");

}

quicknewsB();
function menuclick(x)
{



if (window.XMLHttpRequest)
                      {// code for IE7+, Firefox, Chrome, Opera, Safari
                          xmlhttp=new XMLHttpRequest();
                      }
                     else
                     {// code for IE6, IE5
					 
                         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                     }
	                  xmlhttp.onreadystatechange=function()
                                    {
                                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                             {
                                              var response=xmlhttp.responseText;
			      
					        	document.getElementById(content).innerHTML=response;
                                             }
                                    }
									
                                     
                            xmlhttp.open("POST","http://localhost/studentcouncil/php/htmldata.php",true);
                            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                            xmlhttp.send("hkag="+x);
							
							
							
}



function openover(qid)
{

	if (window.XMLHttpRequest)
                      {// code for IE7+, Firefox, Chrome, Opera, Safari
                          xmlhttp=new XMLHttpRequest();
                      }
                     else
                     {// code for IE6, IE5
					 
                         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                     }
	                  xmlhttp.onreadystatechange=function()
                                    {
                                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                             {
                                              var response=xmlhttp.responseText;
											  $(".popupback").show();
											  $(".popup").show();
											  document.getElementById("popup").innerHTML=response;
											  
                                             }
                                    }
									
                                     
                            xmlhttp.open("POST","http://localhost/studentcouncil/php/htmldata.php",true);
                            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                            xmlhttp.send("hkag=qidopen&qid="+qid);
							
							
							
}

function seemore(cls)
{
	$("."+cls).show();
}