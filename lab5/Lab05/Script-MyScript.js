$(document).ready(function(){
	 $("#submit").click(function(){
		var now = new Date();
		var fname = $("#firstname").val();
		var lname = $("#lastname").val();
		var bdmonth = $("#month").val();
		var bddate = $("#day").val();
		var bdyear = $("#year").val();
		var age = (now.getFullYear())-($("#year").val());
		var gder = $("input[name=gender]:checked").val();
		var prov = $("#province").val();
		if (fname !== "" && lname!=="" && prov !== "") {
			alert("Hello "+ fname + " " + lname + "\n^_^ Welcome to Thailand!");
			localStorage.setItem("first_name", fname);
			localStorage.setItem("last_name", lname);
			localStorage.setItem("birth_month", bdmonth);
			localStorage.setItem("birth_date", bddate);
			localStorage.setItem("birth_year", bdyear);
			localStorage.setItem("local_age", age);
			localStorage.setItem("gender_type", gder);
			localStorage.setItem("province", prov);
			if(age < 13){
				loadNextPage("Lab05-PHPChild.php");
				$("#Body").css('background-image', 'url(img/PhineasAndFerb.png)');
			} else if (gder == "Male"){
				loadNextPage("Lab05-PHPMale.php");
			} else if (gder == "Female"){
				loadNextPage("Lab05-PHPFemale.php");
			}
		} else {
			alert("Invalid information!!");
			return false;
		}
	});
});

function loadNextPage(nextPage){
        document.myForm.action = nextPage;
    }
