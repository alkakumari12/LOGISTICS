function togglePwd() {
	// get the password object into a variable
  var pwd = document.getElementById("password");
  if (pwd.type === "password") 
    pwd.type = "text";
  else 
    pwd.type = "password";
}