function password(){
	var pw = document.getElementById("pw").value;
	if(pw === "plannerlogin"){
		window.location.href = "planner1.php";
	}else{
	alert("Incorrect Login");
	}
}