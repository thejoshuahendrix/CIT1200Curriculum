
document.addEventListener("DOMContentLoaded", init, false);

function init()
{
  var canvas = document.getElementById("canvas");
  canvas.addEventListener("mousedown", getPosition, false);
}

function getPosition(event)
{
  var x = new Number();
  var y = new Number();
  var canvas = document.getElementById("canvas");

  if (event.x != undefined && event.y != undefined)
  {
    x = event.x;
    y = event.y;
  }
  else // Firefox method to get the position
  {
    x = event.clientX + document.body.scrollLeft +
        document.documentElement.scrollLeft;
    y = event.clientY + document.body.scrollTop +
        document.documentElement.scrollTop;
  }

  x -= canvas.offsetLeft;
  y -= canvas.offsetTop;

  canvas.getContext("2d").fillStyle="red";
        canvas.getContext("2d").fillRect(x,y,10,10);
}