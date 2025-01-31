<?php
$fragment = strtr(basename($_SERVER['REQUEST_URI']),
    [
        'index.php' => '',
        '?' => '',
    ]
);
$fragment = preg_replace('/[^a-z_]/', '', $fragment);
if (!file_exists(__DIR__ . "/fragments/index/{$fragment}.html"))
{
    $fragment = 'main';
}

$filename = __DIR__ . "/fragments/index/{$fragment}.html";
?><html lang="en">
<head>
<title>RollerCoaster Tycoon</title>
<style>
	a:hover{color:#FFFFFF;}
</style>

<!-- ----------------------------------------------------------------
	Website by U.S. Infogrames web team:
	Executive Producer: Jon "jelly" Nelson (webmaster@us.infogrames.com)
	Senior Producer: Kyle "Pezman" Peschel
	Senior Programmer: Gerald "monkey" Burns
	Senior Designer: Micah "bigmic" Jackson
----------------------------------------------------------------- -->
<META NAME="KEYWORDS" CONTENT="RollerCoaster Tycoon, Hasbro Interactive, MicroProse, Infogrames, pezman, roller coaster, roller coasters, RCT, coaster, coasters, theme parks, amusement parks, thrill rides, rides, rollercoasters, rollercoaster, CD ROM games, simulation games, computer games, Hasbro, wooden rollercoaster, steel, corkscrew, reverse freefall, family entertainment">
<META NAME="DESCRIPTION" CONTENT="Take a ride to fame and fortune with RollerCoaster Tycoon. The Official RollerCoaster Tycoon Web site allows players to upload their own rides and download rides of others for use in their own games.">

<script language='JavaScript'>
 <!--
	// monkey's screenshot javascript function
	function screen(nam, sys, tcode, bgcolor, text) {
		//Default sys to xbox
		if (!sys) {
			sys = "consolepc";
		}
		if (!bgcolor) {
		    bgcolor = "000000";
		}
		if (!text) {
		    text = "FFFFFF";
		}
		window.open("http://atari-media.com/screen640.php?nam=" + nam + "&sys=" + sys + "&tcode=" + tcode + "&bgcolor=" + bgcolor + "&text=" + text,"screens","width=640,height=540,menubar=no,resizable=no,scrollbars=no,toolbar=no,top=20,left=20");
	}	
	
	function OpenSubscribe(loc) {
	 window.open(loc,'nsub','width=500,height=500,menubar=no,resizable=no,scrollbars=yes,toolbar=no,top=100,left=100');
	}

	function pop(loc) {
	 window.open("pop.php?" + loc,'_blank','width=400,height=380,menubar=no,resizable=yes,scrollbars=yes,toolbar=no,top=20,left=20');
	}
 // end hiding contents -->
</script>

</head>
<body bgcolor="#335422" text="#FFFFFF" link="#FFFF00" vlink="#FFFF00" alink="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" background="/images/bg.gif" rightmargin="0" bottommargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td bgcolor="#0099FF"><img src="/images/spacer.gif" height="15" width="1"></td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" background="/images/top_bg.gif">
	<tr>
		<td background="/images/header_0_bg.gif"><a href="/index.php"><img src="/images/header_1_left.gif" width="183" height="100" border="0"></a><img src="/images/header_2.jpg" width="447" height="100" usemap="#Map" border="0"><img src="/images/header_3_right.gif" width="130" height="100" usemap="#Map2" border="0"></td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="20" rowspan="2" valign="top" background="/images/pole_bg.gif"><img src="/images/pole_bg.gif" width="20" height="64"></td>
    <td width="131" rowspan="2" valign="top"> <table width="131" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td bgcolor="#5C892F" width="124" align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/nav_left_1_info.gif" width="124" height="99" border="0"><br>
            </font></b> 
            <!-- 5 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td> <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="/index.php?main">Latest News</a></font></b></td>
              </tr>
			  <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="/index.php?info">Game 
                  Info</a></font></b></td>
              </tr>
              <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="/index.php?hints">Hints 
                  and Tips</a></font></b></td>
              </tr>
              <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="/index.php?screens">Screenshots</a></font></b></td>
              </tr>
            </table>
            <!-- /5 -->
            <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><br>
            <a href="javascript:;" onclick='window.open("/ride","ride","width=693,height=500,menubar=no,resizable=no,scrollbars=no,toolbar=no,top=100,left=100");'><img src="/images/nav_left_2_ride_e.gif" width="124" height="117" border="0"><br>
            </a></font></b> 
            <!-- 6 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="javascript:;" onclick='window.open("/ride","ride","width=693,height=500,menubar=no,resizable=no,scrollbars=no,toolbar=no,top=100,left=100");'><img src="/images/small_b.gif" width="20" height="15" border="0"></a></font></b></td>
                <td><b><a href="javascript:;" onclick='window.open("/ride","ride","width=693,height=500,menubar=no,resizable=no,scrollbars=no,toolbar=no,top=100,left=100");'><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Player 
                  Rides</font></a></b></td>
              </tr>
              <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="javascript:;" onclick='window.open("/ride","ride","width=693,height=500,menubar=no,resizable=no,scrollbars=no,toolbar=no,top=100,left=100");'><img src="/images/small_b.gif" width="20" height="15" border="0"></a></font></b></td>
                <td><b><a href="/index.php?ride_c"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Chris 
                  Sawyer Rides</font></a></b></td>
              </tr>
            </table>
            <!-- /6 -->
            <b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"></font> 
            </b><br> <a href="/index.php?packs"><img src="/images/nav_left_3_expansions.gif" width="124" height="86" border="0"></a><br> 
            <!-- 7 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr valign="top"> 
                <td><a href="/index.php?packs"><img src="/images/small_b.gif" width="20" height="15" border="0"></a></td>
                <td><b><a href="/index.php?packs"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">RCT
                  Deluxe</font></a></b></td>
              </tr><tr valign="top"> 
                <td><a href="/index.php?packs"><img src="/images/small_b.gif" width="20" height="15" border="0"></a></td>
                <td><b><a href="/index.php?packs#ww"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">RCT2
                  Wacky Worlds</font></a></b></td>
              </tr>
			  <tr valign="top"> 
                <td><a href="/index.php?packs"><img src="/images/small_b.gif" width="20" height="15" border="0"></a></td>
                <td><b><a href="/index.php?packs#rct2"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">RCT 2</font></a></b></td>
              </tr>
              <tr valign="top"> 
                <td><a href="/index.php?packs"><img src="/images/small_b.gif" width="20" height="15" border="0"></a></td>
                <td><b><a href="/index.php?packs#xbox"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">RCT Xbox™</font></a></b></td>
              </tr>
            </table>
            <!-- /7 -->
            <br> <img src="/images/nav_left_4_bottom.gif" width="124" height="160"><br> 
          </td>
          <td background="/images/vert_bg.gif" width="7"><img src="/images/vert_bg.gif" width="7" height="73"></td>
        </tr>
      </table>
      <!-- /4 -->
      <img src="/images/nav_left_5_underbar.gif" width="131" height="7"><br> <a href="http://www.chrissawyer.com" target="_blank"><img src="/images/nav_left_6_chris_s.gif" width="131" height="32" border="0"></a><br> 
      <br> <br></td>
    <td valign="top"> <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr> 
          <td><?php include $filename; ?>
            </td>
        </tr>
      </table> </td>
    <td width="131" rowspan="2" valign="top"> <table width="131" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="7" background="/images/vert_bg.gif"><img src="/images/vert_bg.gif" width="7" height="73"></td>
          <td bgcolor="#5C892F" valign="top" align="left"><img src="/images/nav_right_1_downloads.gif" width="130" height="103" border="0"><br> 
            <!-- 10 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?scenarios"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Scenarios</font></a></b></td>
              </tr>
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?patches"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Patches/Fixes</font></a></b></td>
              </tr>
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?demo"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Game 
                  Demos</font></a></b></td>
              </tr>
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?manuals"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Game 
                  Manuals</font></a></b></td>
              </tr>
            </table>
            <!-- /10 -->
            <br> <a href="/index.php?community"><img src="/images/nav_right_2_community.gif" width="130" height="128" border="0"></a><br> 
            <!-- 11 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="http://www.ina-community.com/forums/forumdisplay.php?forumid=261" target="_blank"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Forums</font></a></b></td>
              </tr>
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?community"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Fan 
                  Sites</font></a></b></td>
              </tr>
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?links"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Fun 
                  Links </font></a></b></td>
              </tr>
              <tr> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="https://reddit.com/r/rct" target="_blank"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Support</font></a></b></td>
              </tr>
              <tr> 
                <td></td>
                <td><img src="/images/spacer.gif" width="100" height="1"></td>
              </tr>
            </table>
            <!-- /11 -->
            <br> <a href="/index.php?products"><img src="/images/nav_right_3_rct_products.gif" width="130" height="100" border="0"></a><br> 
            <!-- 12 -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?products#pinball"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Pinball 
                  Machine</font></a></b></td>
              </tr>
              <tr valign="top"> 
                <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><img src="/images/small_b.gif" width="20" height="15" border="0"></font></b></td>
                <td><b><a href="/index.php?products#books"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Books</font></a></b></td>
              </tr>
            </table>
            <!-- /12 -->
            <br> <img src="/images/nav_right_4_bottom.gif" width="130" height="170"></td>
        </tr>
      </table>
      <!-- /9 -->
      <img src="/images/nav_right_5_underbar.gif" width="137" height="7"></td>
    <td width="20" rowspan="2" valign="top" background="/images/pole_bg_right.gif"><img src="/images/pole_bg_right.gif" width="20" height="64"></td>
  </tr>
  <tr>
    <td valign="bottom" align="center"><table border="0" cellspacing="0" cellpadding="5">
        <tr> 
          <td><a href="http://esrb.org" target="_blank"><img src="/images/rating_e.gif" width="38" height="53" border="0" alt="Mild Violence"></a></td>
          <td align="center"><a href="http://us.atari.com" target="_blank"><img src="/images/logo_atari.gif" width="105" height="40" border="0"></a></td>
          <td align="right"><img src="/images/pc_cdrom_logo.gif" width="38" height="41"></td>
        </tr>
        <tr align="center"> 
          <td colspan="3"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">Copyright 
            &copy; 2004 Atari, Inc. All Rights 
            Reserved.<br>
            &copy;1999, Chris Sawyer. All Rights Reserved.</font></td>
        </tr>
      </table>
      <!-- /13 -->
      <font face="Verdana, Arial, Helvetica, sans-serif" size="1"><br>
      <a href="javascript:;" onClick='window.open("http://atari.com/us/contact_us.php","contact","width=400,height=250,menubar=no,resizable=no,scrollbars=no,toolbar=no,top=100,left=100");'>Questions 
      and Comments</a><br>
      <a href="http://atari.com/us/privacy_policy.php" target="_blank">Privacy 
      Policy</a> | <a href="http://atari.com/us/terms_of_service.php" target="_blank">Terms 
      of Service</a></font><br> <a href="http://atari.com/us/privacy_policy.php" target="_blank"><img src="/images/privacy.jpg" width="116" height="43" border="0"></a></td>
  </tr>
</table>

<map name="Map">
	<area shape="rect" coords="325,12,454,37"	 href="https://www.gog.com/en/game/rollercoaster_tycoon_deluxe" target="_blank">
	<area shape="rect" coords="323,38,450,59" href='javascript:OpenSubscribe("http://us.infogrames.com/games/subscribe.php?action=subscribe&title=ROLL&sku=PCXX&genre=STRY&bgcolor=335422")'>
	<area shape="rect" coords="319,62,451,85" href="/?demo">
</map>
<map name="Map2">
	<area shape="rect" coords="-2,38,65,59" href='javascript:OpenSubscribe("http://us.infogrames.com/games/subscribe.php?action=subscribe&title=ROLL&sku=PCXX&genre=STRY&bgcolor=335422")'>
	<area shape="rect" coords="-1,62,89,84" href="/?demo">
</map>
</body>
</html>
