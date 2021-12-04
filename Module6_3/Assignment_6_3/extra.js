function myFunction()
{
var myArray=[];
var i=0;
var counter=1; 
var allFood="All your food are ";

var myFood =prompt("Item " + counter +": what do you like to eat? (Enter 7 to exit)", "");
while (myFood!="7") 
{
myArray[i]=myFood;
counter++; 
myFood =prompt("Item " + counter +": what do you like to eat? (Enter 7 to exit)", "");
i++; 
}
if (myArray.length ==0)//no user input
{
alert("You did not input any food.");
}
else//there are food input.
{
for (x in myArray) //for in loop for myArray
{
allFood = allFood + myArray[x]+ ", " ; //making a long text for food users entered.
document.getElementById("FoodArray["+x+"]").value =myArray[x];
}
allFood=allFood + "."; //at the end put a period.
alert(allFood); //output from alert
document.getElementById("Food").value = allFood;//output in textarea
}
}
function Myclear()
{
document.getElementById("Food").value="";
//clear textarea
for (var y=0; y<10; y++)
{
document.getElementById("FoodArray["+y+"]").value="";
//clear each textboxes
}
}