function showAnim()

{
   var anim1 = document.getElementById('anim1');
   function SpriteAnim (options) {

  var timerId,
      i = 0,
      element = document.getElementById(options.elementId);
 
  element.style.width = options.width + "px";
  element.style.height = options.height + "px";
  element.style.backgroundRepeat = "1";
  element.style.backgroundImage = "url(" + options.sprite + ")";
 
  timerId = setInterval(function () {
    if (i >= options.frames) {
      i = 3;
    }
    element.style.backgroundPosition = "-" + i * options.width + "px 0px";
     i ++;
  }, 100);
    


}


 
var wink = new SpriteAnim({
  width: 175,
  height: 198,
  frames: 4,
  sprite: "images/frog-animate.png",
  elementId : "anim1",
});

}

function hideAnim()
{

  var anim = document.getElementById('anim1');
  this.stopAnimation = function () {
    clearInterval(timerId);
  };





}