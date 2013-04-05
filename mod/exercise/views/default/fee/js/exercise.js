				//TODO: Opacity handlers
				//TODO: Inte kunna dra paths utanför workspace

var app = {
	
	//Members
	
	//Main setting
	width: 672,
	height: 672,	

	//Empty Field setting
	emptyHeight: 672,
	
	//Full Field setting
	fullHeight: 772,	
	
	//Half Field setting
	halfHeight: 572,		

	//ToolMenu settings
	//Players
	playerAColor: "#c84141",
	playerBColor: "#4174c8",
	playerCColor: "#c841bd",
	playerStrokeColor: "#FFF",
	playerSize: 8,
	playerStroke: 2,
	playerADescription: 'Spelare(lagA)',
	playerBDescription: 'Spelare(lagB)',
	playerCDescription: 'Spelare(lagC)',

	//Ball
	ballColor: "#FFF",
	ballStrokeColor: "#000",
	ballSize: 5,
	ballStroke: 2,
	ballTitle: "Boll",

	//Cone
	coneColor: "#f26600",
	coneStrokeColor: "#000",
	coneStroke: 1,
	coneTitle: "Kona",

	//Goal
	goalColor: "#333",
	goalStrokeColor: "#000",
	goalStroke: 2,
	goalTitle: "Mål",
	goalOpacity: 0.2,

	//Curves
	curveColor: "#000",
	curveWidth: 1,
	arrowLength: 12,
	arrowAngel: 25,
	handlerAttr: {fill: "#EEE", stroke: "none", opacity: 0.6},
	curveDescription: 'Bollbana',
	curveDashedDescription: 'Spelarbana',
	defendCurveDescription: 'Försvarsbana',
	curvePosX: 30,
	curvePosY: 30,
	curveCurveX: 110,
	curveCurveY: 100,

	//DribbleCurve
	dribbleCurveDescription: 'Spelare med boll-bana',
	
	removeItem: false
	
	};
	
	//Methods
    app.init = function () {
		
		//Initialize Raphael-paper
		app.r = Raphael("fee_workspace", app.width, app.height);	
		
		app.load();

		//Events archive		
		$("#fee_archiveMenu a").click(function() {
			switch(this.id){
				case 'save':
					app.save();				
					break;
				case 'remove':
					$("#remove img").toggleClass('pushed');
					if(app.removeItem == false)
						app.removeItem = true;
					else
						app.removeItem = false;
					break;
				case 'clear':
					app.clear();
					break;
			}
			return false;
		});			

		//Events tools			
		$("#fee_toolsMenu a").click(function() {
			switch(this.id){
				case 'player1':
					app.player(app.playerSize+2 + app.random(), app.playerSize+2 + app.random(), app.playerAColor, app.playerADescription);
					break;
				case 'player2':
					app.player(app.playerSize+2 + app.random(), app.playerSize+2 + app.random(), app.playerBColor, app.playerBDescription);
					break;
				case 'player3':
					app.player(app.playerSize+2 + app.random(), app.playerSize+2 + app.random(), app.playerCColor, app.playerCDescription);
					break;
				case 'ball':
					app.ball(app.ballSize+2 + app.random(), app.ballSize+2 + app.random());
					break;
				case 'cone':
					app.cone(app.random()+5, app.random()+10);
					break;
				case 'goal':
					app.goal(app.random()+5, app.random()+10, 0);
					break;							
				case 'playerPath':
					app.curve(app.random()+80, app.random()+80, app.curveCurveX, app.curveCurveY, app.curvePosX, app.curvePosY, 'dashed', app.curveDashedDescription);
					break;
				case 'ballPath':
					app.curve(app.random()+80, app.random()+80, app.curveCurveX, app.curveCurveY, app.curvePosX, app.curvePosY, null, app.curveDescription);
					break;
				case 'playerDribble':
					app.dribbleCurve(app.random()+80, app.random()+80, app.curvePosX, app.curvePosY);
					break;	
				case 'defendPath':
					app.curve(app.random()+80, app.random()+80, app.curveCurveX, app.curveCurveY, app.curvePosX, app.curvePosY, 'dashed', app.defendCurveDescription);
					break;							
			}

			return false;
		});
    };	
	
	app.clear = function () {
		app.r.clear();
	};
	
	app.load = function() {
		var guid = $('input[name="guid"]').val();

		$.ajax({type: "POST",
			url: elgg.config.wwwroot + "ajax/view/fee/ajax/fee_load",
			dataType: "html",
			cache: false,
			data: {guid: guid },
			success: function(htmlData) {
				$(".ajaxImg").remove();
				app.r.fromJSON(htmlData);
			},
			error: function(){
				alert('Gick inte att hämta');
			}
		});
	};
	
	app.save = function() {
		var guid = $('input[name="guid"]').val();
		var json = app.r.toJSON();

		$.ajax({type: "POST",
			url: elgg.config.wwwroot + "ajax/view/fee/ajax/fee_save",
			dataType: "html",
			cache: false,
			data: {fee_json: json, guid: guid },
			success: function(htmlData) {
				console.log(htmlData);
			},
			error: function(){
				alert('Gick inte att spara');
			}
		});		
	};
						
	app.random = function() {			
		return Math.floor((Math.random() * app.height/10)+20);
	};
									
	app.player = function(x, y, color, title){
		app.r.circle(x, y, app.playerSize)
		.attr("fill", color)
		.attr("stroke", app.playerStrokeColor)
		.attr("stroke-width", app.playerStroke)
		.attr("title", title)
		.click(function(){
			if(app.removeItem)
				this.remove();
		})		
		.drag(function (dx, dy) {
		this.attr({
			cx: Math.min(Math.max(x + dx, app.playerSize+2), app.width-app.playerSize-2),
			cy: Math.min(Math.max(y + dy, app.playerSize+2), app.height-app.playerSize-2)
		});
		}, function () {
			x = this.attr("cx");
			y = this.attr("cy");
		});
	};

	app.ball = function(x, y) {
		app.r.circle(x, y, app.ballSize)
		.attr("fill", app.ballColor)
		.attr("stroke", app.ballStrokeColor)
		.attr("stroke-width", app.ballStroke)
		.attr("title", app.ballTitle)
		.click(function(){
			if(app.removeItem)
				this.remove();
		})
		.drag(function (dx, dy) {
		this.attr({
			cx: Math.min(Math.max(x + dx, app.ballSize+2), app.width-app.ballSize-2),
			cy: Math.min(Math.max(y + dy, app.ballSize+2), app.height-app.ballSize-2)
		});
		}, function () {
			x = this.attr("cx");
			y = this.attr("cy");
		});
	};

	app.cone = function(x, y) {
		var coneAttr = setCone(x, y);
		var conePath = app.r.path(coneAttr)
		.attr("fill", app.coneColor)
		.attr("stroke", app.coneStrokeColor)
		.attr("stroke-width", app.coneStroke)
		.attr("title", app.coneTitle)		
		.click(function(){
			if(app.removeItem)
				this.remove();
		});

		conePath.update = function (x, y) {
			var X = Math.min(Math.max(coneAttr[0][1] + x, 5), app.width-10),
				Y = Math.min(Math.max(coneAttr[0][2] + y, 10), app.height-5);
			coneAttr = setCone(X, Y);
			conePath.attr({path: coneAttr});
		};
		
		conePath.drag(app.move, app.up);
		
		function setCone(x, y){
			return [["M", x, y], ["L", x+2, y-8], ["L", x+4, y-8], ["L", x+6, y], ["L", x+8, y], ["L", x+8, y+2],["L", x-2, y+2],["L", x-2, y], ["L", x, y] ];
		}
	};

	app.goal = function(x, y, angel) {
		var goalAttr = setGoal(x, y);
		var goalPath = app.r.path(goalAttr)
		.attr("fill", app.goalColor)
		.attr("fill-opacity", app.goalOpacity)
		.attr("stroke", app.goalStrokeColor)
		.attr("stroke-width", app.goalStroke)
		.attr("title", app.goalTitle)
		.click(function(){
			if(app.removeItem)
				this.remove();
		});

		goalPath.update = function (x, y) {
			var X = Math.min(Math.max(goalAttr[0][1] + x, 5), app.width-10),
				Y = Math.min(Math.max(goalAttr[0][2] + y, 10), app.height-5);
			goalAttr = setGoal(X, Y);
			goalPath.attr({path: goalAttr});
		};
		
		goalPath.dblclick(function(){
			angel = angel + 90;
			if(angel>270)
				angel = 0;
			goalAttr = setGoal(goalAttr[0][1], goalAttr[0][2]);
			goalPath.attr({path: goalAttr});						
		});
		
		goalPath.drag(app.move, app.up);
		
		function setGoal(x, y){
		
			switch(angel){
				case 90:
					return [["M", x, y], ["L", x+20, y], ["L", x+20, y+50], ["L", x, y+50]];
				break;
				case 180:
					return [["M", x, y], ["L", x, y+20], ["L", x-50, y+20], ["L", x-50, y]];
				break;
				case 270:
					return [["M", x, y], ["L", x-20, y], ["L", x-20, y-50], ["L", x, y-50]];;
				break;
				default:
					return [["M", x, y], ["L", x, y-20], ["L", x+50, y-20], ["L", x+50, y]];
				break;
			}							
		}
	};				
									
	app.curve = function(x, y, ax, ay, zx, zy, stroke, title) {
		if(stroke == "dashed"){
			stroke = '-.';
		}
		if(app.defendCurveDescription == title){
			var arrowLine = true;
		}
		else{
			var arrowLine = false;
		}
		var path = [["M", x, y], ["C", ax, ay, zx, zy, zx, zy]],
			path2 = [["M", x, y], ["L", ax, ay]],
			path3 = app.setArrow( x, y, ax, ay, arrowLine),
			curve = app.r.path(path).attr({stroke: app.curveColor, "stroke-width": app.curveWidth, "stroke-linecap": "round", 'stroke-dasharray': stroke, 'title': title}),
			controls = app.r.set(
				app.r.path(path2).attr({stroke: "#ccc", "stroke-dasharray": ". "}),
				app.r.path(path3).attr({stroke: app.curveColor, "stroke-width": app.curveWidth, "stroke-linecap": "round", "fill": "#f00"}),							
				app.r.circle(x, y, 5).attr(app.handlerAttr),
				app.r.circle(ax, ay, 4).attr(app.handlerAttr),
				app.r.circle(zx, zy, 5).attr(app.handlerAttr),
				curve
			);				
		controls[2].update = function (x, y) {
			var X = this.attr("cx") + x,
				Y = this.attr("cy") + y;
			this.attr({cx: X, cy: Y});
			path[0][1] = X;
			path[0][2] = Y;
			path2[0][1] = X;
			path2[0][2] = Y;
			controls[3].update(x, y);
		};
		controls[3].update = function (x, y) {						
			var X = this.attr("cx") + x,
				Y = this.attr("cy") + y;
			this.attr({cx: X, cy: Y});
			path[1][1] = X;
			path[1][2] = Y;
			path2[1][1] = X;
			path2[1][2] = Y;
			path3 = app.setArrow( path[0][1], path[0][2], path2[1][1], path2[1][2], arrowLine);						
			curve.attr({path: path});
			controls[0].attr({path: path2});
			controls[1].attr({path: path3});
		};

		controls[4].update = function (x, y) {
			var X = this.attr("cx") + x,
				Y = this.attr("cy") + y;
			this.attr({cx: X, cy: Y});
			path[1][5] = X;
			path[1][6] = Y;
			path[1][3] = X;
			path[1][4] = Y;
			curve.attr({path: path});
		};
		controls.drag(app.move, app.up);
		controls.click(function(){
			if(app.removeItem){
				controls.remove();
			}
		});
	};
	
	app.dribbleCurve = function(x, y, ax, ay){
		var path = setCurve(x, y, (ax-x)/3+x, (ay-y)/3+y),
			path2 = setCurve((ax-x)/3+x, (ay-y)/3+y, (ax-x)*2/3+x, (ay-y)*2/3+y),
			path3 = setCurve((ax-x)*2/3+x, (ay-y)*2/3+y, ax, ay),
			pathArrow = app.setArrow( x, y, ax, ay, 20),
			curve = app.r.path(path).attr({stroke: app.curveColor, "stroke-width": app.curveWidth, "stroke-linecap": "round", 'title': app.dribbleCurveDescription}),
			curve2 = app.r.path(path2).attr({stroke: app.curveColor, "stroke-width": app.curveWidth, "stroke-linecap": "round"}),
			curve3 = app.r.path(path3).attr({stroke: app.curveColor, "stroke-width": app.curveWidth, "stroke-linecap": "round"}),
			controls = app.r.set(
				app.r.path(pathArrow).attr({stroke: app.curveColor, "stroke-width": app.curveWidth, "stroke-linecap": "round", "fill": "#f00"}),							
				app.r.circle(x, y, 5).attr(app.handlerAttr),
				app.r.circle(ax, ay, 5).attr(app.handlerAttr),
				curve,
				curve2,
				curve3
			);
		function setCurve(x1, y1, x2, y2){
			var angel = Raphael.angle(x1, y1, x2, y2);
			var difference = Math.sqrt(Math.pow(x2-x1, 2) + Math.pow(y2-y1, 2));
			
			var angelDifference1 = 90+(90*(1.0-Math.exp(-1.0*difference/100)));
			var angelDifference2 = 90-(90*(1.0-Math.exp(-1.0*difference/100)));
						
			var radie45 = Raphael.rad(angel-angelDifference1);
			var radie45m = Raphael.rad(angel+angelDifference2);
							
			curve1x = x1 + Math.cos(radie45)*difference;
			curve1y = y1 + Math.sin(radie45)*difference;
			curve2x = x2 + Math.cos(radie45m)*difference;
			curve2y = y2 + Math.sin(radie45m)*difference;						

			return [["M", x1, y1], ["C", curve1x, curve1y, curve2x, curve2y, x2, y2]];
		
		};						
		controls[1].update = function (x, y) {
			var X = this.attr("cx") + x,
				Y = this.attr("cy") + y;
			this.attr({cx: X, cy: Y});
			path = setCurve(X, Y, ((path3[1][5]-X)/3)+X, (path3[1][6]-Y)/3+Y);
			path2 = setCurve((path3[1][5]-X)/3+X, (path3[1][6]-Y)/3+Y, (path3[1][5]-X)*2/3+X, (path3[1][6]-Y)*2/3+Y);
			path3 = setCurve((path3[1][5]-X)*2/3+X, (path3[1][6]-Y)*2/3+Y, path3[1][5], path3[1][6]);
			pathArrow = app.setArrow(path[0][1], path[0][2], path3[1][5], path3[1][6]);
			curve.attr({path: path});
			curve2.attr({path: path2});
			curve3.attr({path: path3});
			controls[0].attr({path: pathArrow});
		};
		controls[2].update = function (x, y) {
			var X = this.attr("cx") + x,
				Y = this.attr("cy") + y;
			this.attr({cx: X, cy: Y});
			path = setCurve(path[0][1], path[0][2], ((path[0][1]-X)*2/3)+X, (path[0][2]-Y)*2/3+Y);
			path2 = setCurve((path[0][1]-X)*2/3+X, (path[0][2]-Y)*2/3+Y, (path[0][1]-X)/3+X, (path[0][2]-Y)/3+Y);
			path3 = setCurve((path[0][1]-X)/3+X, (path[0][2]-Y)/3+Y, X, Y);
			pathArrow = app.setArrow(path[0][1], path[0][2], path[1][5], path[1][6]);
			curve.attr({path: path});
			curve2.attr({path: path2});
			curve3.attr({path: path3});
			controls[0].attr({path: pathArrow});
		};
		controls.drag(app.move, app.up);
		controls.click(function(){
			if(app.removeItem){
				controls.remove();
			}
		});
	};				
	
	app.setArrow = function(x1, y1, x2, y2, stoppLine){
	
		var angel = Raphael.angle(x1, y1, x2, y2);
		var radie45 = Raphael.rad(angel-(180-app.arrowAngel));
		var radie45m = Raphael.rad(angel+(180-app.arrowAngel));
						
		var positionX = Math.cos(Raphael.rad(angel))*app.arrowLength;
		var positionY = Math.sin(Raphael.rad(angel))*app.arrowLength;
		
		x1 = x1 + positionX;
		y1 = y1 + positionY;

		arrow1x = x1 + Math.cos(radie45)*app.arrowLength;
		arrow1y = y1 + Math.sin(radie45)*app.arrowLength;
		arrow2x = x1 + Math.cos(radie45m)*app.arrowLength;
		arrow2y = y1 + Math.sin(radie45m)*app.arrowLength;

		if(stoppLine == true){
		
			var radie90 = Raphael.rad(angel+90);
			var radie90M = Raphael.rad(angel-90);
			
			var lineX1 = x1 + Math.cos(radie90)*app.arrowLength/2;
			var lineY1 = y1 + Math.sin(radie90)*app.arrowLength/2;
			var lineX2 = x1 + Math.cos(radie90M)*app.arrowLength/2;
			var lineY2 = y1 + Math.sin(radie90M)*app.arrowLength/2;
			
			return [["M", x1, y1], ["L", arrow1x, arrow1y], ["M", x1, y1], ["L", arrow2x, arrow2y], ["M", lineX1, lineY1], ["L", lineX2, lineY2] ];
		}

		return [["M", x1, y1], ["L", arrow1x, arrow1y], ["M", x1, y1], ["L", arrow2x, arrow2y]];	
	};
					
	app.move = function(dx, dy) {
		this.update(dx - (this.dx || 0), dy - (this.dy || 0));
		this.dx = dx;
		this.dy = dy;
	};
	
	app.up = function() {
		this.dx = this.dy = 0;
	};
				

window.onload = app.init;
							

