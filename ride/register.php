<body bgcolor="#990000" link="#FFCC33" vlink="#FFCC33" alink="#FFCC33">
<SCRIPT LANGUAGE="JavaScript">
function update_body () {
	var kage=0;
	if (document.forms[0].age.value<=12) {
		window.scroll(0,0);
		kage = 1;
		alert('You are not eligible to register. Please see our Privacy Policy to find out who is eligible.');
		window.open('http://us.infogrames.com/privacy_policy.asp','_blank','');
	}

	if (kage==1) {
		top.close();
	} else {
		document.forms[0].submit();
	}
}
</script>

<font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Please input accurate personal information. This data will be used only to contact you for future sweepstakes information and monthly newsletters.<br>
Read our <a href=http://us.infogrames.com/privacy_policy.asp target=_blank>privacy policy</a> if you have further questions.<br>
<br>
You must register before you can Upload/Download/Vote on track designs.<br>
Asterisks (*) indicate required fields.
<br>
<br>
<br>
</font> <form method="post"><input type=hidden name=form_submit value=1>
  <table border="0" cellspacing="0" cellpadding="3" cols=2>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Username*</font></td>
      <td colspan=2 valign="top"> 
        <input name=susername type=TEXT size=35 maxlength="25" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">Password*</font></td>
      <td colspan=2 valign="top"> 
        <input name=spassword type=password size=35 maxlength="25" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        Age* </font></td>
      <td colspan=2 valign="top"> 
        <input name=age type=TEXT size=15 maxlength="2" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        Gender </font></td>
      <td colspan=2 valign="top"> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        <input type="radio" name="gender" value="male">
        Male 
        <input type="radio" name="gender" value="female">
        Female </font></td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        First Name* </font></td>
      <td colspan=2 valign="top"> 
        <input name=fname type=TEXT size=35 maxlength="25" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        Last Name* </font></td>
      <td> 
        <input name=lname type=TEXT size=35 maxlength="25" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        Address 1* </font></td>
      <td> 
        <input name=address1 type=TEXT size=35 maxlength="25" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        Address 2 </font></td>
      <td> 
        <input name=address2 type=TEXT size=35 maxlength="25" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        City* </font></td>
      <td> 
        <input name=city type=TEXT size=35 maxlength="25" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        State/Province* </font></td>
      <td> 
        <select name=state>
          <option></option>
          <option>Outside USA/Canada</option>
          <option>Alabama </option>
          <option>Alaska </option>
          <option>Arizona </option>
          <option>Arkansas </option>
          <option>California </option>
          <option>Colorado </option>
          <option>Connecticut </option>
          <option>Delaware </option>
          <option>Florida </option>
          <option>Georgia </option>
          <option>Hawaii </option>
          <option>Idaho </option>
          <option>Illinois </option>
          <option>Indiana </option>
          <option>Iowa </option>
          <option>Kansas </option>
          <option>Kentucky </option>
          <option>Louisiana </option>
          <option>Maine </option>
          <option>Maryland </option>
          <option>Massachusetts </option>
          <option>Michigan </option>
          <option>Minnesota </option>
          <option>Mississippi </option>
          <option>Missouri </option>
          <option>Montana </option>
          <option>Nebraska </option>
          <option>Nevada </option>
          <option>New Hampshire </option>
          <option>New Jersey </option>
          <option>New Mexico </option>
          <option>New York </option>
          <option>North Carolina </option>
          <option>North Dakota </option>
          <option>Ohio </option>
          <option>Oklahoma </option>
          <option>Oregon </option>
          <option>Pennsylvania </option>
          <option>Rhode Island </option>
          <option>South Carolina </option>
          <option>South Dakota </option>
          <option>Tennessee </option>
          <option>Texas </option>
          <option>Utah </option>
          <option>Vermont </option>
          <option>Virginia </option>
          <option>Washington </option>
          <option>Washington, D.C. </option>
          <option>West Virginia </option>
          <option>Wisconsin </option>
          <option>Wyoming </option>
          <option>Alberta</option>
          <option>British Columbia</option>
          <option>Manitoba</option>
          <option>New Brunswick</option>
          <option>Newfoundland</option>
          <option>Northwest Territories</option>
          <option>Nova Scotia</option>
          <option>Nunavut</option>
          <option>Ontario</option>
          <option>Prince Edward Island</option>
          <option>Quebec</option>
          <option>Saskatchewan</option>
          <option>Yukon Territory</option>
        </select>
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        ZIP/Postal Code* </font></td>
      <td> 
        <input name=zip type=TEXT size=35 maxlength="12" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        Country* </font></td>
      <td> 
        <select name=country>
          <option></option>
          <option>USA </option>
          <option>Canada </option>
          <option>Argentina </option>
          <option>Australia </option>
          <option>Austria </option>
          <option>Belgium </option>
          <option>Brazil </option>
          <option>Bulgaria </option>
          <option>Chile </option>
          <option>China </option>
          <option>Colombia </option>
          <option>Czech Republic </option>
          <option>Denmark </option>
          <option>Finland </option>
          <option>France </option>
          <option>Germany </option>
          <option>Greece </option>
          <option>Hong Kong </option>
          <option>Hungary </option>
          <option>Iceland </option>
          <option>India </option>
          <option>Ireland </option>
          <option>Israel </option>
          <option>Italy </option>
          <option>Japan </option>
          <option>Korea </option>
          <option>Malaysia </option>
          <option>Mexico </option>
          <option>Netherlands </option>
          <option>New Zealand </option>
          <option>Norway </option>
          <option>Philippines </option>
          <option>Poland </option>
          <option>Portugal </option>
          <option>Puerto Rico </option>
          <option>Russian Federation </option>
          <option>Singapore </option>
          <option>SouthAfrica </option>
          <option>Spain </option>
          <option>Sweden </option>
          <option>Switzerland </option>
          <option>Taiwan </option>
          <option>Thailand </option>
          <option>Turkey </option>
          <option>United Kingdom </option>
          <option>Venezuela </option>
          <option>Other </option>
        </select>
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        Phone </font></td>
      <td> 
        <input name=phone type=TEXT size=35 maxlength="30" value="">
      </td>
    </tr>
    <tr> 
      <td valign="middle"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
        E-mail Address* </font></td>
      <td> 
        <input name=email type=TEXT size=35 maxlength="60" value="">
      </td>
    </tr>
    <tr> 
      <td colspan=2> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><br>
        What game systems do you own or intend to purchase within the next 6 months?<br>
        (Check all that apply) 
        <table border="0" cellspacing="0" cellpadding="2">
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[playstation2]">
              PlayStation 2 </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[playstation]">
              PlayStation </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[pc]">
              PC </font></td>
          </tr>
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[xbox]">
              Xbox </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[dreamcast]">
              Dreamcast </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[mac]">
              Mac </font></td>
          </tr>
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[gamecube]">
              GameCube </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[gameboy_color]">
              Gameboy Color </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[mobile]">
              Mobile Phone or Computer </font></td>
          </tr>
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="systems[gameboy]">
              Gameboy Advance </font></td>
            <td></td>
            <td></td>
          </tr>
        </table>
        <br>
        <br>
        What types of games do you own or play?<br>
        (Check all that apply) 
        <table border="0" cellspacing="0" cellpadding="2">
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[action]">
              Action/Adventure </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[simulation]">
              Simulation </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[family]">
              Family </font></td>
          </tr>
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[arcade]">
              Arcade </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[sports]">
              Sports </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[racing]">
              Racing </font></td>
          </tr>
          <tr valign="middle"> 
            <td height="20" nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[children]">
              Children's </font></td>
            <td height="20" nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="genres[strategy]">
              Strategy </font></td>
            <td height="20" nowrap></td>
          </tr>
        </table>
        <br>
        <br>
        How many games do you buy per year?<br>
        <select name=buys>
          <option></option>
          <option>0 </option>
          <option>1-3 </option>
          <option>4-6 </option>
          <option>7-10 </option>
          <option>11-15 </option>
          <option>16-20 </option>
          <option>20+ </option>
        </select>
        <br>
        <br>
        <br>
        What factors affect your game purchase decisions?<br>
        (Check all that apply)<br>
        <table border="0" cellspacing="0" cellpadding="2">
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[article]">
              Article/Review </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[price]">
              Price </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[gift]">
              Gift </font></td>
          </tr>
          <tr valign="middle"> 
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[word]">
              Word of Mouth </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[package]">
              Package </font></td>
            <td nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[display]">
              In Store Display </font></td>
          </tr>
          <tr valign="middle"> 
            <td height="20" nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[sample]">
              Sampled Game </font></td>
            <td height="20" nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[web]">
              Web Site/Online Promotion </font></td>
            <td height="20" nowrap> <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"> 
              <input type="checkbox" value=" checked" name="affects[tv]">
              TV, Radio, or Magazine Ad </font></td>
          </tr>
        </table>
        <br>
        <br>
        I am interested in receiving additional information, discounts, and offers 
        from Infogrames. <br>
        <input type="radio" name="eme" value="Yes">
        Yes 
        <input type="radio" name="eme" value="No">
        No
        <br><br>
        <input type=checkbox name=terms> Checking this box verifies that you have read and agree to our
        <a href="http://us.infogrames.com/terms_of_service.asp" target="_blank">Terms of Service</a></font>
        
        </td>
    </tr>
  </table>
</form>
<form><input type="button" onClick="javascript:update_body();" value="Register"></form>
<a href='http://us.infogrames.com/privacy_policy.asp' target='_blank'><br>
<img src='http://us.infogrames.com/privacy.jpg' width='116' height='43' border='0'></a>