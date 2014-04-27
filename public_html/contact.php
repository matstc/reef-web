<!DOCTYPE html>
<html>
<head>

<title>
Contact us
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo.com" />

<!-- CSS -->
<link rel="stylesheet" href="css/structure.css" type="text/css" />
<link rel="stylesheet" href="css/form.css" type="text/css" />
<link rel="stylesheet" href="css/theme.css" type="text/css" />

<!-- JavaScript -->
<script src="scripts/wufoo.js"></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

        
<?php

 
if ($Submit == "Register")
{
    $proceed = true;    // later set to false if a requiered field is not ok


    if ( $firstname == "")
    {
        $firstname_error = true;
        $message = $message . "<li>Please enter your first name.</li>";
        $proceed = false;
    }

    if ( $lastname == "")
    {
        $lastname_error = true;
        $message = $message . "<li>Please enter your last name.</li>";
        $proceed = false;
    }


if ( $phone == "")
    {
        $phone_error = true;
        $message = $message . "<li>Please enter your Phone number.</li>";
        $proceed = false;
    }


    if ( $email == "" )
    {
        $email_error = true;
        $message = $message . "<li>Please specify your email address .</li>";
        $proceed = false;
    }


}

 
 

    $message = $message . "</ul>";


    //----------------------------------------------- proceed with the registration

    if ($proceed)
    {
 

        $lastname = trim($lastname);    // removes whitespaces from begining and end of lastname
$hostname='localhost';
		$username=$_ENV["DATABASE_USERNAME"];
		$password=$_ENV["DATABASE_PASSWORD"];
		$dbname='allevia2_reef';

		$dbc =mysqli_connect($hostname,$username, $password, $dbname) or die ('Unable to connect to database! Please try again later.'); 


        $firstname = mysqli_real_escape_string($dbc, $firstname);
        $lastname = mysqli_real_escape_string($dbc, $lastname);
         $phone = mysqli_real_escape_string($dbc, $phone);
         $email = mysqli_real_escape_string($dbc, $email);
        $message = mysqli_real_escape_string($dbc, $message);
 

        // insert into DB
        $sql = "INSERT INTO contact (
          firstname,
        lastname,
         phone,
         email,
		 message,
        registeredon
        ) VALUES (
         '$firstname',
        '$lastname',
        '$middlename',
         '$phone',
        '$email',
		'$message',
        now()
        )";


       $result = mysqli_query($dbc, $sql);
       if ( $result == 1)
        {
                 // then display thank you message
				
				
 				     $display = "message";
                      $message = "Thank you!";
       }
         
        //    $message = "insert error : " . mysqli_error($dbc) . " " . $sql;
    }
    else
    {
        $display = "form";
    }
 
 
?>
<body id="public">
<div id="container">
<!--div id="logo"><img src="img/logo.jpg" alt="REEF Logo" height="100" width="80"></div-->
<div id="burlap-top"></div>
<div id="main-wrapper">
<!--div><a class="reef" href="#"><img class="reef" src="img/logo.jpg" alt="REEF" height="100" width="145"></a></div-->
<!--div><a class="reef" href="#"><img class="reef" src="img/logo.jpg" alt="REEF" height="100" width="145"></a></div-->
<div id="header">
<div><a class="reef" href="#"><img class="reef" src="img/logo.png" alt="REEF"  border="0"></a></div>
<!--div><a class="reef" href="#"><img class="reef" src="img/ReefLogo3.jpg" alt="REEF"  border="0"></a></div-->
<div id="socmed-nav-container">
 
<table>
<tr>
				  <td><a href="https://www.facebook.com/pages/Renewable-Energy-Enterprises-Foundation/127274784025891?ref=ts" title="Facebook"><img src="img/icons/fb.png" width="30" height="30"  alt="Facebook" /></a></td>
				 
				  <td>&nbsp;</td>
				  <td><a href="http://renewableenergyenterprisesfoundation.wordpress.com/"title="Blog"><img src="img/icons/wp.png" width="30" height="30" /></a></td> 

				  <td>&nbsp;</td>
				  <td>
                  <a href="http://www.linkedin.com/groups?mostPopular=&gid=2950787" title="LinkedIn"><img src="img/icons/in.png" width="30" height="30"  alt="LinkedIn" /></a>
                  </td><br />
				  <td>&nbsp;</td>
				  <!--td>
                  <a href="http://www.causes.com/beneficiaries/83388"title="Causes"><img src="img/icons/causes.png" width="24" height="24" alt="causes" /></a>
				  <td>&nbsp;</td>
				  <td><a href="http://bayanngcandelaria.ning.com/group/friendsofreef" title="Bayan Ng Candelaria"><img src="img/icons/bnc.png" width="24" height="24" alt="Bayan Ng Candelaria" /></a></td>
				  <td>&nbsp;</td-->
				  <td><a href="http://www2.guidestar.org/organizations/30-0453051/renewable-energy-enterprises-foundation.aspx" title="Guidestar"><img src="img/icons/guidestar.png" width="30" height="30" alt="Guidestar" /></a></td>        <td><a href="http://twitter.com/rchesley3" title="Twitter"><img src="img/icons/tw.png" width="30" height="30" 
				  alt="Twitter" /></a></td>
      
				  <td>&nbsp;</td>

<!-- start copy/paste HTML - campaign button -->
<!-- end copy/paste HTML - campaign button -->
              </tr>
</table> 
 </div>
 

<!--div id="nav-container"-->
<div id="nav-container">
<ul id="navigation-1">
<li><a href="index.html" title="Home">Home</a>
<ul class="navigation-2">
<li><a href="contact.html">Contact Us</a></li>
<li><a href="fiscal-sponsor.html">Fiscal
Sponsor</a></li>
</ul>
</li>
<li><a href="#">Programs</a>
<ul class="navigation-2">
<li><a href="family-first.html">Family First</a></li>
<li><a href="green-hospital.html">Green
Communities</a></li>
<li><a href="leads.html">Leads</a> </li>
</ul>
</li>
<li><a href="#">Gallery</a>
</li>

<!--li><a href="#">Donate</a>
<ul class="navigation-2">
<li><a href="donate-individual.html">Individuals</a></li>
<li><a href="donate-corporate.html">Corporate
Sponsors</a>
</li>
<li><a href="donate-in-kind.html">In-Kind</a>
</li>
</ul>
</li-->


<li><a href="news.html">News</a>
<ul class="navigation-2">
<li><a href="news-archive.html">News Archive</a></li>
</ul>
</li>

<li><a href="events.html" title="Events">Events</a>
 <ul class="navigation-2">
	<li><a href="events.html">Meet up with Us</a></li>
	<li><a href="events-archive.html">Past Events</a></li>
 </ul>
</li>

<li><a href="#" title="Join Us">Volunteer</a>
<ul class="navigation-2">
<li><a href="volunteer.html">Positions Available</a></li>
<li><a href="volunteer.html">Join Us</a></li>
<li><a href="reef-volunteers.html">REEF
Volunteers</a></li>
</ul>
</li>
<li><a href="#">About</a>
<ul class="navigation-2">
<li><a href="mission.html">Vision/Mission</a></li>
<li><a href="board.html">Board of Directors</a>
<li><a href="partners.html">Partners</a>
</li>
</li>
<!--li><a href="faq.html">FAQ</a></li-->
</ul>
</li>
 
</ul>
</div>
<div id="donate-nav-container"><table>
<tr>
   	<a href="https://npo1.networkforgood.org/Donate/Donate.aspx?npoSubscriptionId=1006273&code=2012%20End%20of%20Year"><img src="img/donate.jpg" width="180" height="60" border="0" alt="DonateNow" /></a>
</tr></td></table>
</div> 

<!--/div-->
<div class="reef-name">

</div>

<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div id="content-wrapper">
<div class="content-left">
<div class="socmed">

<p>Stay current with REEF's projects and events.
We pledge to honor your privacy and send only relevant notices.
Sign up <a href="addemail.php">here</a>. </p>
<div id="google_translate_element"></div>
<script>
function googleTranslateElementInit(){new google.translate.TranslateElement({pageLanguage:'en'},'google_translate_element');}</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></div>
<!--div id="firstGiving">
<a href="http://www.firstgiving.com/fundraiser/renewableenergyenterprises-foundation/renewableenergyenterprisesfoundationfundraisingpag" alt="FirstGiving- SPONSOR ME" target="_blank"><img src="img/donate-badge2.png" border="0" height="144" width="150"></a></div!-->
<div class="video">
 <!--object height="194" width="225"><param name="movie" value="http://www.youtube.com/p.swf?video_id=LDzFcuKCHhM?fs=1&amp;hl=en_US"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always">
<embed src="http://www.youtube.com/v/LDzFcuKCHhM?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" height="194" width="225"></object-->
<iframe width="225" height="194" src="http://www.youtube.com/embed/LDzFcuKCHhM?rel=0" frameborder="0" allowfullscreen></iframe>
</div>
       <div class="content-right cushycms">

<form id="form3" name="form3" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="https://alleviatepovertynow.wufoo.com/forms/q7x3s5/#public">

<header id="header" class="info">
<h2>Contact us</h2>
<div>We'd love to hear from you. If you would like someone from REEF to contact you, please provide us a phone number or email address.<bold>We are a non-profit organization not set up to offer grants or financial assistance.<bold>
Thanks for your understanding.<br />
<br />
REEF                              <br />
3943 Vale Ave.                <br />
Oakland, CA                   <br />
510.917.3876  <br />
info@alleviatepovertynow.org               <br />
<br />
REEF Philippines<br />
Candelaria, Zambales<br />
Grace Gonzalez <br />
+63.908.862.8908<br />
grace@alleviatepovertynow.org</div>
</header>

<ul>

<li id="foli1" class="notranslate      ">
<label class="desc" id="title1" for="Field1">
Name
<span id="req_1" class="req">*</span>
</label>
<span>
<input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1" required <?php if($firstname_error) echo " class='style4'"; ?>/>
<label for="Field1">First</label>
</span>
<span>
<input id="Field2" name="Field2" type="text" class="field text ln" value="" size="14" tabindex="2" required <?php if($lastname_error) echo " class='style4'"; ?>/>
<label for="Field2">Last</label>
</span>
</li>
<li id="foli3" class="notranslate      ">
<label class="desc" id="title3" for="Field3">
Email
<span id="req_3" class="req">*</span>
</label>
<div>
<input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" required <?php if($email_error) echo " class='style4'"; ?>/> 
</div>
</li>
<li id="foli7" class="phone notranslate     ">
<label class="desc" id="title7" for="Field7">
Phone Number
<span id="req_7" class="req">*</span>
</label>
<span>
<input id="Field7" name="Field7" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="4" required <?php if($message_error) echo " class='style4'"; ?>/>
<label for="Field7">###</label>
</span>
<span class="symbol">-</span>
<span>
<input id="Field7-1" name="Field7-1" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="5" required />
<label for="Field7-1">###</label>
</span>
<span class="symbol">-</span>
<span>
 <input id="Field7-2" name="Field7-2" type="tel" class="field text" value="" size="4" maxlength="4" tabindex="6" required />
<label for="Field7-2">####</label>
</span>
</li>
<li id="foli5" 
class="notranslate      "><label class="desc" id="title5" for="Field5">
Message <br />

<span id="req_5" class="req">*</span>
</label>

<div>
<textarea id="Field5" 
name="Field5" 
class="field textarea medium" 
spellcheck="true" 
rows="10" cols="50" 
tabindex="7" 
onkeyup=""
required  ></textarea>

</div>
</li> <li class="buttons ">
<div>

<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit"
 /></div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="RYaBlj/O1K6OyxeWA4ezzEVAqi5DlqjaLjNM7LI6OIc=" />
</li>
</ul>
</form> 

</div><!--container-->
<img id="bottom" src="images/bottom.png" alt="" />

<a class="powertiny" href="http://wufoo.com/tour/" title="Powered by Wufoo"
style="display:block !important;visibility:visible !important;text-indent:0 !important;position:relative !important;height:auto !important;width:95px !important;overflow:visible !important;text-decoration:none;cursor:pointer !important;margin:0 auto !important">
<span style="background:url(./images/powerlogo.png) no-repeat center 7px; margin:0 auto;display:inline-block !important;visibility:visible !important;text-indent:-9000px !important;position:static !important;overflow: auto !important;width:62px !important;height:30px !important">Wufoo</span>
<b style="display:block !important;visibility:visible !important;text-indent:0 !important;position:static !important;height:auto !important;width:auto !important;overflow: auto !important;font-weight:normal;font-size:9px;color:#777;padding:0 0 0 3px;">Designed</b>
</a>
</body>
</html>
