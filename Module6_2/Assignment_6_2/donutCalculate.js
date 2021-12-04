var TAXRATE = 0.06; //Tax
var CAKE_DONUTPRICE = 1.50; // donut priace
var GLAZE_DONUTPRICE = 1.75; // donut priace
var subTotal = 0;
var tax = 0;
var total = 0;
var numCakeDonuts =0;
var numGlazedDonuts =0;

function updateOrder()
{
//Look carefuuly. This function is called not by button but by changing the number of donuts. onchange="updateOrder();
numCakeDonuts = parseInt(document.getElementById("cakedonuts").value);
//get unumber of Cake Donunt and change to a integer number.
numGlazedDonuts = parseInt(document.getElementById("glazeddonuts").value);
//get unumber of Glaze Donunt and change to a integer number.
if (isNaN(numCakeDonuts)) //check if the number is a number or not.
{
numCakeDonuts = 0; //if not a number, it change the number to 0.
}
if (isNaN(numGlazedDonuts)) //check if the number is a number or not.
{
numGlazedDonuts = 0;//if not a number, it change the number to 0.
}
subTotal = (numCakeDonuts * CAKE_DONUTPRICE) + (numGlazedDonuts * GLAZE_DONUTPRICE);// price without tax
tax = subTotal * TAXRATE; //calculate tax
total = subTotal + tax; //price with tax.
//subTotal=subTotal.toFixed(2);
//tax=tax.toFixed(2);
//total= total.toFixed(2);
document.getElementById("subtotal").value = "$" + subTotal.toFixed(2);
//display in subtotal textbox.
document.getElementById("tax").value = "$" + tax.toFixed(2);
//display in tax textbox.
document.getElementById("total").value = "$" + total.toFixed(2);
//display in total textbox.
}

function placeOrder()
{
var userName = document.getElementById("name").value;
// \n is for new line.
var orderResult= "Dear, " + userName +". Check your order and Click OK to confirm. " +
"\nCake Donuts:" + numCakeDonuts + ", Glazed Donuts: " + numGlazedDonuts +
"\nSub Total: " + "$" + subTotal.toFixed(2) + ", tax: " + "$" + tax.toFixed(2) + "Total: " + "$" + total.toFixed(2);
alert(orderResult);
}