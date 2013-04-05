
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
		
		for(var i in json) {
			if ( json.hasOwnProperty(i) ){
			
				switch(json[i].attrs.title){
				
					case app.playerADescription:
						app.player(json[i].attrs.cx, json[i].attrs.cy, app.playerAColor, app.playerADescription);
						break;
						
					case app.playerBDescription:
						app.player(json[i].attrs.cx, json[i].attrs.cy, app.playerBColor, app.playerBDescription);					
						break;
						
					case app.playerCDescription:
						app.player(json[i].attrs.cx, json[i].attrs.cy, app.playerCColor, app.playerCDescription);					
						break;
						
					case app.ballTitle:
						app.ball(json[i].attrs.cx, json[i].attrs.cy);
						break;
						
					case app.goalTitle:
						var x1 = json[i].attrs.path[0][1],
							y1 = json[i].attrs.path[0][2],
							x2 = json[i].attrs.path[1][1],
							y2 = json[i].attrs.path[1][2];
						var angel = Raphael.angle(x1, y1, x2, y2)-90;
						app.goal(x1, y1, angel);
						break;
						
					case app.coneTitle:
						app.cone(json[i].attrs.path[0][1], json[i].attrs.path[0][2]);
						break;
						
					case app.curveDescription:
						var x = json[i].attrs.path[0][1],
							y = json[i].attrs.path[0][2],
							ax = json[i].attrs.path[1][1],
							ay = json[i].attrs.path[1][2],
							zx = json[i].attrs.path[1][5],
							zy = json[i].attrs.path[1][6];
						app.curve(x, y, ax, ay, zx, zy, null, app.curveDescription);
						break;
						
					case app.curveDashedDescription:
						var x = json[i].attrs.path[0][1],
							y = json[i].attrs.path[0][2],
							ax = json[i].attrs.path[1][1],
							ay = json[i].attrs.path[1][2],
							zx = json[i].attrs.path[1][5],
							zy = json[i].attrs.path[1][6];
						app.curve(x, y, ax, ay, zx, zy, 'dashed', app.curveDashedDescription);
						break;
												
					case app.dribbleCurveDescription:
					console.log(json);
						var x = json[i].attrs.path[0][1],
							y = json[i].attrs.path[0][2],
							zx = x + ((json[i].attrs.path[1][5] - json[i].attrs.path[0][1]) * 3),
							zy = y + ((json[i].attrs.path[1][6] - json[i].attrs.path[0][2]) * 3);
						app.dribbleCurve(x, y, zx, zy);
						break;

					case app.defendCurveDescription:
						var x = json[i].attrs.path[0][1],
							y = json[i].attrs.path[0][2],
							ax = json[i].attrs.path[1][1],
							ay = json[i].attrs.path[1][2],
							zx = json[i].attrs.path[1][5],
							zy = json[i].attrs.path[1][6];
						app.curve(x, y, ax, ay, zx, zy, 'dashed', app.defendCurveDescription);
						break;						
						
				}
			
			}
		}
		
	}
})();