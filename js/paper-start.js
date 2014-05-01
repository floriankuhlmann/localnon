window.mobilecheck = function() {
var check = false;
(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
return check; }



function getRandomGrey() {
    //var letters = '0123456789ABCDEF'.split('');
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    var rand = Math.round(Math.random() * (letters.length-1));

    for (var i = 0; i < 6; i++ ) {
        color += letters[rand];
    }
    return color;
}

/*
function getRandomGrey() {
    //now with a little bit of color
    var letters = '0123456789A'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.round(Math.random() * (letters.length-1))];
    }
    return color;
}
*/



var factor = 3;
var screenRatio = (view.size.height + view.size.width)/2;

if (window.mobilecheck()) {
    //mobile
    var gridSize = 50;
    var strokeThickness = screenRatio/2000+0.1;
    var radius = screenRatio/10;
    var maxScaling = 10;
} else {
    var gridSize = 40;
    var strokeThickness = screenRatio/10000+0.1;
    var radius = screenRatio/30;
    var maxScaling = 4;
}


var height = Math.round(view.size.height / gridSize);
var width = Math.round(view.size.width / gridSize);

var maxX = Math.round(width/factor);
var maxY = Math.round(height/factor);





/*
var initialCanvasWidth = $("#canvas").width();
var initialCanvasHeight = $("#canvas").height();
console.log(initialCanvasHeight);

function setCanvasSize(){
    var win = $(this); //this = window

    $("#canvas").height(win.height*2).css({"height":win.height});
    $("#canvas").width(win.width*2).css({"width":win.width});
    console.log(win.height);
    console.log($("#canvas"));
}

setCanvasSize();

$(window).on('resize', function(){
    setCanvasSize();
});
*/



//var alwaysFollowPath = new Path.Circle(new Point(60, 60), radius);
//alwaysFollowPath.fillColor = 'black';

var alwaysFollowPath = new Path.Rectangle(new Point(60, 60), radius*2);
alwaysFollowPath.fillColor = 'white';

var backgroundWhite = new Path.Rectangle(view.bounds);
backgroundWhite.fillColor = 'white';

var dust = [];

function generateDust(x,y) {
	var myPath = new Path();
	myPath.strokeColor = getRandomGrey();
	myPath.strokeWidth = (Math.random()+1)*2*strokeThickness;

	myPath.strokeCap = 'round';
	myPath.strokeJoin = 'round';

	myPath.add(new Point(x, y));
	randomMax = Math.floor(Math.random()*4)+1;
	for (var i = 0; i < randomMax; i++) {
	    myPath.add(new Point(x+Math.floor(Math.random()*3+i), y+Math.floor(Math.random()+i)));
	    myPath.rotate(Math.random()*90);
	}
	myPath.smooth();

	if (Math.floor(Math.random()*10/2) === 1) {
	    myPath.scale(maxScaling);
        myPath.strokeWidth = strokeThickness*2;
	}

	myPath.position = new Point(x*factor+Math.random()*2, y*factor+Math.random()*2) * gridSize;

	dust.push(myPath);
}

for (var y = 0; y < maxY; y++) {
    for(var x = 0; x < maxX; x++) {
        generateDust(x,y);
	}
}

var initialShapeCount = dust.length;
var howManyShapesHaveBeenRemoved = 0;

(function() {
    var blackBackground = new Path.Rectangle(view.bounds);
    blackBackground.fillColor = 'black';

    var percent = 1;

    var interval = setInterval(function(){
        percent = percent - 0.1;
        blackBackground.opacity = percent;
        view.draw();

        if (percent < 0.05){
            console.log("remove");
            clearInterval(interval);
            blackBackground.remove();
            //$("body").css({"background-color":"white"});
        }
    }, 30);

    //just in case
    setTimeout(function(){
        blackBackground.remove();
    }, 1000);
}());


function onMouseMove(event) {
    alwaysFollowPath.position = event.point;

    for (var k = 0; k < dust.length; k++) {
        var dustShape = dust[k];
        var point = dustShape.segments[0].point;

        if (alwaysFollowPath.contains(point)) {
            dustShape.position += event.delta*1.2;
        }

        //remove shapes that are not on the canvas
        if ( dustShape.position.y < 0 || dustShape.position.y > view.size.height ||
	     dustShape.position.x < 0 || dustShape.position.x > view.size.width  ) {
		     dustShape.remove();
		     howManyShapesHaveBeenRemoved ++;
		     dust.splice(k, 1); //remove that item from the array as well
		     generateDust(Math.random()*maxX, Math.random()*maxY);

		     /*
		     var justGenerated = dust[dust.length-1];
		     justGenerated.opacity = 0;
             var percent = 0;

		     var showInterval = setInterval(function(){
                percent = percent + 0.1;
                justGenerated.opacity = percent;
                view.draw();
                if (percent < 0.05){
                    clearInterval(showInterval);
                }
            }, 30);
            */
        }
    }
}

/*
var isSelected = true;

function onMouseDown(event) {
    for (var k = 0; k < dust.length; k++) {
        var dustShape = dust[k];
        dustShape.selected = isSelected;
    }
    isSelected = !isSelected;
}
*/