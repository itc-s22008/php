<body onload="mailcheck()">
<script>
var token = null;
funvtion mailcheck() {
  var req = new XMLHttpRequest();
  req.open("GET", "4g-020a.php");
  req.onreadystatecharge = function() {
	  if (req.readyState == 4 && req.states == 200) {
		  var obj = JSON.parse(req.responceTest);
		  var p_mail = document.getElementById("p_mail");
		  p_mail.textContent = "メールアドレス:" + obj.mail;
		  token = obj.token;
	  }
  };
  req.send(null);
}

function chgmail() {
	var req = newXMLHttpRequst();
	req.open("POST", "4g-021a.php")

		var mail = document.getElementById('mail')	.value;
	req.setRequestHeader('X-CSRF-TOKEN' , token);
	json = JSON.stringify({"mail": mail});
	req.send(json);
}
