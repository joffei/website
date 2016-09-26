function newName(){
	var name, gender, text, fname, lname;
	var element = document.getElementById("form1");
	name=element.elements[0].value;
	gender=element.elements[1].value;
	
	if(gender == "male"){
		fname="Spalding";
		lname="Rigatone";
	}else{
		fname="Muriel";
		lname="Bags";
	}
	text="<div class='incorrect'>" + "FALSE!" + "</div><br>" +
		"Your name has never been " + name + "<br>" + 
		"Your name is actually " + 
		"<span class='nname'>" + fname + " " + lname + "</span>" +
			"<br>" + "Nice to meet you, " + fname + ".";
	document.getElementById("rename").innerHTML = text;
}