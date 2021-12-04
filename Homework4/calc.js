//I created a variable map to easily convert letters to GPA

const gradeMap = {
  A: 4,
  B: 3,
  C: 2,
  D: 1,
  F: 0
}

//In this function I use a series of nested IF statements to test the validity of the input for each grade and on the final statement the calculation is actually made
function Calc()
{
	//I defined what fit as valid data for a letter grade here
var grade=/^[A,B,C,D,F]{1}$/i
//then I tested each field of input against it
if(grade.test(document.getElementById("inputgrade1").value))
{
//if the data was a valid letter, then it gets converted via the variable map called "gradeMap" and stored as "grade1"
var grade1=gradeMap[document.getElementById("inputgrade1").value.toUpperCase()];
//then we repeat below for all 4 input fields
if(grade.test(document.getElementById("inputgrade2").value))
{
var grade2=gradeMap[document.getElementById("inputgrade2").value.toUpperCase()];

if(grade.test(document.getElementById("inputgrade3").value))
{
var grade3=gradeMap[document.getElementById("inputgrade3").value.toUpperCase()];
if(grade.test(document.getElementById("inputgrade4").value))
{
var grade4=gradeMap[document.getElementById("inputgrade4").value.toUpperCase()];
// here we calculate the GPA and alert it
var gpatotal=(grade1+grade2+grade3+grade4)/4
alert("GPA is " + gpatotal);
}else{
	alert("Input valid A-F letter grade in field 4")
}
}
else{
	alert("Input valid A-F letter grade in field 3")
}
}
else{
	alert("Input valid A-F letter grade in field 2")
}
}
else{
	alert("Input valid A-F letter grade in field 1")
}
// in the else statements we alert if the data was invalid and since we worked forward sequentially with the nested if statements we work backwards with our nested else statements

}

function Clear()
{
	document.getElementById("inputgrade1").value ="";
	document.getElementById("inputgrade2").value ="";
	document.getElementById("inputgrade3").value ="";
	document.getElementById("inputgrade4").value ="";
}