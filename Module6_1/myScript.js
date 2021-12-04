function askName()
{
alert("Welcome to My First JavaScript!");
var userinput=prompt("Enter your name and Click OK.", "Enter your name here! "); 
var welcome_message="Welcome " + userinput+ "!"; 
alert(welcome_message); 
}
function useTextbox()
{
var userName= document.getElementById("inputName").value;
document.getElementById("outputName").value = userName;

}
document.getElementById("demo2").innerHTML = 50 + 60;
document.write(5 + 6);
function usingInnerHTML()
{
document.write(5 + 6);
}
function usingAlert()
{
alert("This is an alert.");
}
function usingConsoleLog()
{
console.log(500 + 600);
}
function usingWindowPrint()
{
window.print()
}