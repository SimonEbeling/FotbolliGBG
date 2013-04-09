
/*
 * Save & Load Raphael-objects to/from JSON
 */
 
 

(function() {
	Raphael.fn.toJSON = function(callback) {
		var
			data,
			elements = new Array,
			paper    = this
			;

		for ( var el = paper.bottom; el != null; el = el.next ) {
			data = callback ? callback(el, new Object) : new Object;
						
			if ( data ) elements.push({
				data:      data,
				type:      el.type,
				attrs:     el.attrs,
				transform: el.matrix.toTransformString(),
				id:        el.id
				});
		}

		return JSON.stringify(elements);
	}

	Raphael.fn.fromJSON = function(json, callback) {
		var
			el,
			paper = this
			;

		if ( typeof json === 'string' ) json = JSON.parse(json);
		
		//Checking if there is field saved
		if(json[0].data["typeId"]){
			
			//Setting saved field
			app.field(json[0].data["typeId"]);
		
			//Loops through every element and re-creates it
			for(var i in json) {
				if ( json.hasOwnProperty(i) ){
				
					switch(json[i].data["typeId"]){
					
						case app.playerA:
							app.player(json[i].attrs.cx, json[i].attrs.cy, app.playerAColor, app.playerADescription, app.playerA);
							break;
							
						case app.playerB:
							app.player(json[i].attrs.cx, json[i].attrs.cy, app.playerBColor, app.playerBDescription, app.playerB);					
							break;
							
						case app.playerC:
							app.player(json[i].attrs.cx, json[i].attrs.cy, app.playerCColor, app.playerCDescription, app.playerC);					
							break;
							
						case app.goalie:
							app.player(json[i].attrs.cx, json[i].attrs.cy, app.goalieColor, app.goalieDescription, app.goalie);					
							break;						
							
						case app.ballName:
							app.ball(json[i].attrs.cx, json[i].attrs.cy);
							break;
							
						case app.goalName:
							var x1 = json[i].attrs.path[0][1],
								y1 = json[i].attrs.path[0][2],
								x2 = json[i].attrs.path[1][1],
								y2 = json[i].attrs.path[1][2];
							var angel = Raphael.angle(x1, y1, x2, y2)-90;
							app.goal(x1, y1, angel);
							break;
							
						case app.coneName:
							app.cone(json[i].attrs.path[0][1], json[i].attrs.path[0][2]);
							break;
							
						case app.curveName:
							var x = json[i].attrs.path[0][1],
								y = json[i].attrs.path[0][2],
								ax = json[i].attrs.path[1][1],
								ay = json[i].attrs.path[1][2],
								zx = json[i].attrs.path[1][5],
								zy = json[i].attrs.path[1][6];
							app.curve(x, y, ax, ay, zx, zy, null, app.curveDescription, app.curveName);
							break;
							
						case app.curveDashed:
							var x = json[i].attrs.path[0][1],
								y = json[i].attrs.path[0][2],
								ax = json[i].attrs.path[1][1],
								ay = json[i].attrs.path[1][2],
								zx = json[i].attrs.path[1][5],
								zy = json[i].attrs.path[1][6];
							app.curve(x, y, ax, ay, zx, zy, 'dashed', app.curveDashedDescription, app.curveDashed);
							break;
													
						case app.dribbleCurveName:
							var x = json[i].attrs.path[0][1],
								y = json[i].attrs.path[0][2],
								zx = x + ((json[i].attrs.path[1][5] - json[i].attrs.path[0][1]) * 3),
								zy = y + ((json[i].attrs.path[1][6] - json[i].attrs.path[0][2]) * 3);
							app.dribbleCurve(x, y, zx, zy);
							break;

						case app.defendCurve:
							var x = json[i].attrs.path[0][1],
								y = json[i].attrs.path[0][2],
								ax = json[i].attrs.path[1][1],
								ay = json[i].attrs.path[1][2],
								zx = json[i].attrs.path[1][5],
								zy = json[i].attrs.path[1][6];
							app.curve(x, y, ax, ay, zx, zy, 'dashed', app.defendCurveDescription, app.defendCurve);
							break;						
							
					}
				
				}
			}
		}
		
	}

	Raphael.fn.fromJSONView = function(json, object, callback) {
		
		var el;

		if ( typeof json === 'string' ) json = JSON.parse(json);
		
		//Checking if there is field saved
		if(json[0].data["typeId"]){
			
			//Setting saved field
			object.field(json[0].data["typeId"]);

			for ( var i in json ) {
				if ( json.hasOwnProperty(i) ) {
				console.log(json[i]);
					if(json[i].data["typeId"] == 'handler'){
					
					}
					else{				
						el = object.r[json[i].type]()
							.attr(json[i].attrs)
							.transform(json[i].transform);

						el.id = json[i].id;

						if ( callback ) el = callback(el, json[i].data);

					}
				}
			}
		}
	}	
	
	})();