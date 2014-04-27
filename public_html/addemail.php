<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />

<link rel="shortcut icon" href="favicon.ico" />

<title>Sign up to email list</title>

<meta name="Description" content="Page description">

<link rel="stylesheet" href="css/styles.css" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="css/ie_styles.css" />
<![endif]-->

<!--[if IE 6]>
<link rel="stylesheet" href="css/ie_styles.css" />
<![endif]-->


	
}
</style>
</head>
<body>
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
				  <td><a href="https://www.facebook.com/pages/Renewable-Energy-Enterprises-Foundation/127274784025891?ref=ts" title="Facebook"><img src="img/icons/fb.png" width="24" height="24" alt="Facebook" /></a></td>
				 
				  <td>&nbsp;</td>
				  <td><a href="http://twitter.com/rchesley3" title="Twitter"><img src="img/icons/tw.png" width="24" height="24" 
				  alt="Twitter" /></a></td>
				  <td>&nbsp;</td>
				  <td>
                  <a href="http://www.linkedin.com/groups?mostPopular=&gid=2950787" title="LinkedIn"><img src="img/icons/in.png" width="24" height="24" alt="LinkedIn" /></a>
                  </td><br />
				  <td>&nbsp;</td>
				  <td>
                  <a href="http://www.causes.com/beneficiaries/83388"title="Causes"><img src="img/icons/causes.png" width="24" height="24" alt="causes" /></a>
				  <td>&nbsp;</td>
				  <td><a href="http://bayanngcandelaria.ning.com/group/friendsofreef" title="Bayan Ng Candelaria"><img src="img/icons/bnc.png" width="24" height="24" alt="Bayan Ng Candelaria" /></a></td>
				  <td>&nbsp;</td>
				  <td><a href="http://www2.guidestar.org/organizations/30-0453051/renewable-energy-enterprises-foundation.aspx" title="Guidestar"><img src="img/icons/guidestar.png" width="24" height="24" alt="Guidestar" /></a></td>              
				  <td>&nbsp;</td>
				  <td><a href="http://renewableenergyenterprisesfoundation.wordpress.com/"title="Blog"><img src="img/icons/wp.png" width="24" height="24"/></a></td> 

<!-- start copy/paste HTML - campaign button -->
<!-- end copy/paste HTML - campaign button -->
              </tr>
</table> 
 </div>
 
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

 
    if ( $add1 == "")
    {
        $add1_error = true;
        $message = $message . "<li>Please enter your address.</li>";
        $proceed = false;
    }

    if ( $city == "" || $state == "" || $zip == "")
    {
        $city_error = true;
        $message = $message . "<li>Please specify your city, state and zip code.</li>";
        $proceed = false;
    }


    if ( $email == "" )
    {
        $city_error = true;
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
        $middlename = mysqli_real_escape_string($dbc, $middlename);
         $addwh = mysqli_real_escape_string($dbc, $addwh);
        $add1 = mysqli_real_escape_string($dbc, $add1);
        $add2 = mysqli_real_escape_string($dbc, $add2);
        $city = mysqli_real_escape_string($dbc, $city);
        $state = mysqli_real_escape_string($dbc, $state);
        $zip = mysqli_real_escape_string($dbc, $zip);
         $phone = mysqli_real_escape_string($dbc, $phone);
        $phonewh = mysqli_real_escape_string($dbc, $phonewh);
         $email = mysqli_real_escape_string($dbc, $email);
        $emailwh = mysqli_real_escape_string($dbc, $emailwh);
 

        // insert into DB
        $sql = "INSERT INTO email_contacts (
          firstname,
        lastname,
        middlename,
         add1,
        add2,
        city,
        state,
        zip,
        country,
         phone,
        phonewh,
         email,
        emailwh,
        registeredon
        ) VALUES (
         '$firstname',
        '$lastname',
        '$middlename',
        '$add1',
        '$add2',
        '$city',
        '$state',
        '$zip',
        '$country',
         '$phone',
        '$phonewh',
        '$email',
        '$emailwh',
        now()
        )";


       $result = mysqli_query($dbc, $sql);
       if ( $result == 1)
        {
                 // then display thank you message
				
				
 				     $display = "message";
                      $message = "Your contact has been added successfully";
       }
         
        //    $message = "insert error : " . mysqli_error($dbc) . " " . $sql;
    }
    else
    {
        $display = "form";
    }
 
 
?>
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
<li><a href="faq.html">FAQ</a></li>
</ul>
</li>
 

</ul>
</div>
<div id="donate-nav-container"><table>
<tr>
   	<a href="https://npo1.networkforgood.org/Donate/Donate.aspx?npoSubscriptionId=1006273&code=2012%20End%20of%20Year"><img src="img/donate-red.jpg" width="180" height="60" border="0" alt="DonateNow" /></a>
</tr></td></table>
</div> 

<!--/div-->
<div class="reef-name">

</div>

<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
 <div id="content-wrapper">
<div class="content-left" style="height:550px;">
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
</div>
<div class="content-right cushycms">
  <?php
if ( $display )         // -------------------- displaying FORM
{
    if ( $message )     // display error message
    {
        echo "<div class='style4'><font color='red'>$message</font></div>";
    }
}
?>      
  <p><b><em>Signup</em></b></p> 
  <p>*Required Fields</p>

  <form name="form1" method="post" action="<?php echo $PHP_SELF; ?>" >
   <table  border="0" cellpadding="4" cellspacing="0" id="table1">
     <tr>
      <td colspan="3"><span class="style10"><b>Personal Information</b></span></span></td>
    </tr>
     <tr>
      <td><div align="left" <?php if($firstname_error) echo " class='style4'"; ?>><b>*First Name</b></div></td>
      <td colspan="2"><input name="firstname" type="text" id="firstname" value="<?php echo $firstname; ?>">
        <span class="style8">MI</span>        <input name="middlename" type="text" id="middlename" size="2" value="<?php echo $middlename; ?>"></td>
    </tr>
    <tr>
      <td><div align="left" <?php if($lastname_error) echo " class='style4'"; ?>><b>*Last Name</b></div></td>
      <td colspan="2"><input name="lastname" type="text" id="lastname" value="<?php echo $lastname; ?>">
     </tr>
     <tr bgcolor="#B4CDCD">
      <td colspan="3"><span class="style10">Mailing Address</span><span class="colophon"><em>(We do not sell our mailing list to other organizations or commercial companies)</em></span></td>
    </tr>
     <tr>
      <td><div align="left" <?php if($add1_error) echo " class='style4'"; ?>><b>Address line 1</b></div></td>
      <td colspan="2"><input name="add1" type="text" id="add1" value="<?php echo $add1; ?>">
      </td>
    </tr>
    <tr>
      <td><div align="left">Address line 2 </div></td>
      <td colspan="2"><input name="add2" type="text" id="add2" value="<?php echo $add2; ?>"></td>
    </tr>
    <tr>
      <td><div align="left" <?php if($city_error) echo " class='style4'"; ?>><b>City</b></div></td>
      <td colspan="2"><input name="city" type="text" id="city" value="<?php echo $city; ?>">
        State <input name="state" type="text" id="state" size="10" value="<?php echo $state; ?>"></td>
       
    </tr>
     <tr>
      <td><div align="left" <?php if($country_error) echo " class='style4'"; ?>><b>Country</b></div></td>
      <td colspan="2">
<select name="country" id="country">
<option value="">Please select
<option value="USA">United States
<option value="AF">Afghanistan
<option value="AL">Albania
<option value="DZ">Algeria
<option value="AS">American Samoa
<option value="AD">Andorra
<option value="AO">Angola
<option value="AI">Anguilla
<option value="AQ">Antarctica
<option value="AG">Antigua and Barbuda
<option value="AR">Argentina
<option value="AM">Armenia
<option value="AW">Aruba
<option value="AU">Australia
<option value="AT">Austria
<option value="AZ">Azerbaijan
<option value="BS">Bahamas
<option value="BH">Bahrain
<option value="BD">Bangladesh
<option value="BB">Barbados
<option value="BY">Belarus
<option value="BE">Belgium
<option value="BZ">Belize
<option value="BJ">Benin
<option value="BM">Bermuda
<option value="BT">Bhutan
<option value="BO">Bolivia
<option value="BA">Bosnia and Herzegovina
<option value="BW">Botswana
<option value="BV">Bouvet Island
<option value="BR">Brazil
<option value="IO">British Indian Ocean Terr.
<option value="BN">Brunei Darussalam
<option value="BG">Bulgaria
<option value="BF">Burkina Faso
<option value="BI">Burundi
<option value="KH">Cambodia
<option value="CM">Cameroon
<option value="CA">Canada
<option value="CV">Cape Verde
<option value="KY">Cayman Islands
<option value="CF">Central African Republic
<option value="TD">Chad
<option value="CL">Chile
<option value="CN">China
<option value="CX">Christmas Island
<option value="CC">Cocos (Keeling) Islands
<option value="CO">Colombia
<option value="KM">Comoros
<option value="CG">Congo
<option value="CD">Congo, DROC
<option value="CK">Cook Islands
<option value="CR">Costa Rica
<option value="CI">Cote D'ivoire
<option value="HR">Croatia
<option value="CU">Cuba
<option value="CY">Cyprus
<option value="CZ">Czech Republic
<option value="DK">Denmark
<option value="DJ">Djibouti
<option value="DM">Dominica
<option value="DO">Dominican Republic
<option value="TL">East Timor
<option value="EC">Ecuador
<option value="EG">Egypt
<option value="SV">El Salvador
<option value="GQ">Equatorial Guinea
<option value="ER">Eritrea
<option value="EE">Estonia
<option value="ET">Ethiopia
<option value="FK">Falkland Is. (Malvinas)
<option value="FO">Faroe Islands
<option value="FJ">Fiji
<option value="FI">Finland
<option value="FR">France
<option value="GA">Gabon
<option value="GM">Gambia
<option value="GE">Georgia
<option value="DE">Germany
<option value="GH">Ghana
<option value="GI">Gibraltar
<option value="GR">Greece
<option value="GL">Greenland
<option value="GD">Grenada
<option value="GP">Guadeloupe
<option value="GT">Guatemala
<option value="GN">Guinea
<option value="GW">Guinea-Bissau
<option value="GY">Guyana
<option value="HT">Haiti
<option value="HM">Heard & Mc Donald Is.
<option value="VA">Holy See (Vatican City St)
<option value="HN">Honduras
<option value="HK">Hong Kong
<option value="HU">Hungary
<option value="IS">Iceland
<option value="IN">India
<option value="ID">Indonesia
<option value="IR">Iran (Islamic Republic Of)
<option value="IQ">Iraq
<option value="IE">Ireland<option value="IL">Israel<option value="IT">Italy<option value="JM">Jamaica<option value="JP">Japan<option value="JO">Jordan<option value="KZ">Kazakhstan<option value="KE">Kenya<option value="KI">Kiribati<option value="KR">Korea, South<option value="KW">Kuwait<option value="KG">Kyrgyzstan<option value="LA">Laos<option value="LV">Latvia<option value="LB">Lebanon<option value="LS">Lesotho<option value="LR">Liberia<option value="LY">Libyan Arab Jamahiriya<option value="LI">Liechtenstein<option value="LT">Lithuania<option value="LU">Luxembourg<option value="MO">Macau<option value="MK">Macedonia<option value="MG">Madagascar<option value="MY">Malaysia<option value="MW">Malawi<option value="MV">Maldives<option value="ML">Mali<option value="MT">Malta<option value="MQ">Martinique<option value="MR">Mauritania<option value="MU">Mauritius<option value="YT">Mayotte<option value="MX">Mexico<option value="MD">Moldova, Republic Of<option value="MC">Monaco<option value="MN">Mongolia<option value="MS">Montserrat<option value="MA">Morocco<option value="MZ">Mozambique<option value="MM">Myanmar<option value="NA">Namibia<option value="NR">Nauru<option value="NP">Nepal<option value="NL">Netherlands<option value="NC">New Caledonia<option value="NZ">New Zealand<option value="NI">Nicaragua<option value="NE">Niger<option value="NG">Nigeria<option value="NU">Niue<option value="NF">Norfolk Island<option value="NO">Norway<option value="OM">Oman<option value="PK">Pakistan<option value="PA">Panama<option value="PG">Papua New Guinea<option value="PY">Paraguay<option value="PE">Peru<option value="PH">Philippines<option value="PN">Pitcairn<option value="PL">Poland<option value="PT">Portugal<option value="QA">Qatar<option value="RE">Reunion<option value="RO">Romania<option value="RU">Russia<option value="RW">Rwanda<option value="KN">Saint Kitts And Nevis<option value="LC">Saint Lucia<option value="VC">St Vincent & Grenadines<option value="WS">Samoa<option value="SM">San Marino<option value="ST">Sao Tome And Principe<option value="SA">Saudi Arabia<option value="SN">Senegal<option value="CS">Serbia and Montenegro<option value="SC">Seychelles<option value="SL">Sierra Leone<option value="SG">Singapore<option value="SK">Slovakia<option value="SI">Slovenia<option value="SB">Solomon Islands<option value="SO">Somalia<option value="ZA">South Africa<option value="GS">S.Georgia & S.Sandwich Is<option value="ES">Spain<option value="LK">Sri Lanka<option value="SH">St. Helena<option value="PM">St. Pierre And Miquelon<option value="SD">Sudan<option value="SR">Suriname<option value="SJ">Svalbard & Jan Mayen Is.<option value="SZ">Swaziland<option value="SE">Sweden<option value="CH">Switzerland<option value="SY">Syrian Arab Republic<option value="TW">Taiwan<option value="TJ">Tajikistan<option value="TZ">Tanzania, United Rep. of<option value="TH">Thailand<option value="TG">Togo<option value="TK">Tokelau<option value="TO">Tonga<option value="TT">Trinidad And Tobago<option value="TN">Tunisia<option value="TR">Turkey<option value="TM">Turkmenistan<option value="TC">Turks And Caicos Islands<option value="TV">Tuvalu<option value="UM">U.S. Minor Outlying Islands<option value="UG">Uganda<option value="UA">Ukraine<option value="AE">United Arab Emirates<option value="GB">United Kingdom<option value="UY">Uruguay<option value="UZ">Uzbekistan<option value="VU">Vanuatu<option value="VE">Venezuela<option value="VN">Viet Nam<option value="VG">Virgin Islands (British)<option value="VI">Virgin Islands (U.S.)<option value="WF">Wallis And Futuna Islands<option value="EH">Western Sahara<option value="YE">Yemen<option value="ZM">Zambia<option value="ZW">Zimbabwe<option value="XX">Other</select>      </td>
     
    </tr>
    <tr>
      <td><div align="left" <?php if($zip_error) echo " class='style4'"; ?>><b>Zip</b></div></td>
        
        <td><input name="zip" type="text" id="zip" size="10" value="<?php echo $zip; ?>"></td>
    </tr>

    <tr>
      <td><div align="left" <?php if($phone_error) echo " class='style4'"; ?>>*Phone<br><span class="style7">(XXX) XXX-XXXX</span></div></td>
      <td colspan="2"><input name="phone" type="text" id="phone" value="<?php echo $phone; ?>">
 <input name="phonewh" type="radio" value="USWkPh" <?php if($phonewh=="USWkPh") echo "checked";?>>Work&nbsp;
<input name="phonewh" type="radio" value="USHomePh" <?php if($phonewh=="USHomePh") echo "checked";?>>Home</td>
    </tr>
    <tr>
      <td><div align="left" <?php if($email_error) echo " class='style4'"; ?>><b>*E-mail address</b><br>
       <td colspan="2"><input name="email" type="text" id="email" value="<?php echo $email; ?>">
        <input name="emailwh" type="radio" value="Ework" <?php if($emailwh=="Ework") echo "checked";?>>
Work&nbsp;
<input name="emailwh" type="radio" value="Ehome" <?php if($emailwh=="Ehome") echo "checked";?>>
Home</td>
    </tr>
	<tr>
      <td colspan="3" ><br></br> </td>
    </tr>

    <tr>
       <!--td valign="top"><input name="action" type="hidden" value="register" id="go"></td-->
      <td valign="top"><input type="submit" name="Submit" value="Register" id="btnSubmit"></td>
    </tr>
	<tr>
	   <td valign="top">To unsubscribe  <a href="send_email.php">click here</a></td>
	</tr>

  </table>
</form>
 
</div>


            <div class="clearfix"></div>

      <div id="footer">
      <a class="grassroots" href="http://www.grassroots.org" target="_blank"><img src="img/grassroots-logo.gif" width="237" height="60" alt="Grassroots Logo" /></a>
      
      <div class="colophon">
      <h4>&copy;Copyright 2013 REEF - Renewable Energy Enterprises Foundation<br />
      Oakland, California - <a href="mailto:info@alleviatepovetynow.org">info@alleviatepovertynow.org</a></h4>
      </div>
      </div> <!-- end #footer-->
      <div class="clearfix"></div>
      

  </div><!--end #main-wrapper-->
   
</div><!--end #container-->   
<div id="burlap-bottom"></div>


<header>
<nav>
</nav>
</header>

<footer>
</footer>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19155943-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
