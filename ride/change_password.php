	<html>
	<body bgcolor="#990000" text="#FFFFFF" link="#FFCC33" vlink="#FFCC33" alink="#FFCC33"><b></b><br><img src="images/sub_change_password.gif" width="259" height="26"><br><br><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">
<form name=post>
<input type=hidden name=form_submit value=1>
Username: <input type=text name=username><br>
Password: <input type=password name=password><br>
New Password: <input name=newpassword type=password maxlength=25><br>
<input type=submit value="Change Password">

	<script language="JavaScript">
		var UserName = getCookie("cusername");
		var Password = getCookie("cpassword");
	
		if (document.cookie) {
			if (UserName != null) {
				document.post.username.value = getCookie("cusername");
				if (getCookie("cpassword")) document.post.password.value = getCookie("cpassword");
			}
		}
	
		function getCookie(name) {
			if (name == "offset" && offset) {
				return offset
			}
			if (name == "lasttime" && lasttime) {
				return lasttime
			}
			var dc = document.cookie;
			var prefix = name + "=";
			var begin = dc.indexOf("; " + prefix);
	
			if (begin == -1) {
				begin = dc.indexOf(prefix);
				if (begin != 0) return null;
			} else
				begin += 2;
				var end = document.cookie.indexOf(";", begin);
			if (end == -1)
			end = dc.length;
			return unescape(fixCookie(dc.substring(begin + prefix.length, end)));
		}
		
		function fixCookie(temp) {
			while (temp.indexOf("+")>-1) {
				pos= temp.indexOf("+");
				temp = "" + (temp.substring(0, pos) + " " +
				temp.substring((pos + 1), temp.length));
			}
			return temp;
		}
	</script>

</form>