

window.onload = function () {

				var toolsMenuOptions = new Array ( 'player1', 'player2', 'player3', 'goalie1', 'goalie2', 'goalie3', 'ball', 'cone', 'goal', 'ballpath', 'playerpath', 'playerwithballpath', 'playerdribble', 'event1', 'event2' );

				var width = 620;
				var height = 420;
                var r = Raphael("fee_holder", width, height),
                    discattr = {fill: "#ccc", stroke: "none"};
                r.rect(0, 0, 619, 419, 10).attr({stroke: "#666"});
                r.text(310, 20, "Drag the points to change the curves").attr({fill: "#fff", "font-size": 16});
				
				$("#createCurve").click(function() {
				createCurve();
				return false;
				});
				
				$("#createCurveDashed").click(function() {
				createCurveDashed();
				return false;
				});				
				
				$("#createCircle").click(function() {
				createCircle();
				return false;
				});
						
				function random(){			
					return Math.floor(Math.random() * height/3);
				}
												
				function createCircle(){
					r.circle(17 + random(), 17 + random(), 15)
					.attr("fill", "#f00")
					.attr("stroke", "#FFF")
					.attr("stroke-width", 3)
					.drag(function (dx, dy) {
					this.attr({
						cx: Math.min(Math.max(x + dx, 15), width-15),
						cy: Math.min(Math.max(y + dy, 15), height-15)
					});
					}, function () {
						x = this.attr("cx");
						y = this.attr("cy");
					});
				}				
				
				function createCurveDashed(){
					curve(70, 100, 110, 100, 130, 200, 170, 200, "#FFF", "dashed", 2);
				}
				
				function createCurve(){
					curve(70, 100, 110, 100, 130, 200, 170, 200, "#FFF", "drawn", 2);
				}				
								
                function curve(x, y, ax, ay, bx, by, zx, zy, color, stroke, width) {
					if(stroke == "dashed"){
						stroke = '-..';
					}
                    var path = [["M", x, y], ["C", ax, ay, bx, by, zx, zy]],
                        path2 = [["M", x, y], ["L", ax, ay], ["M", bx, by], ["L", zx, zy]],
						path3 = setArrow( x, y, ax, ay, 20),
                        curve = r.path(path).attr({stroke: color || Raphael.getColor(), "stroke-width": width, "stroke-linecap": "round", 'stroke-dasharray': stroke}),
                        controls = r.set(
                            r.path(path2).attr({stroke: "#ccc", "stroke-dasharray": ". "}),
							r.path(path3).attr({stroke: color || Raphael.getColor(), "stroke-width": width, "stroke-linecap": "round", "fill": "#f00"}),							
                            r.circle(x, y, 4).attr(discattr),
                            r.circle(ax, ay, 3).attr(discattr),
                            r.circle(bx, by, 3).attr(discattr),
                            r.circle(zx, zy, 4).attr(discattr)
                        );
					function setArrow(x1, y1, x2, y2, size){
						var angel = Raphael.angle(x1, y1, x2, y2);
						var radie45 = Raphael.rad(angel-160);
						var radie45m = Raphael.rad(angel+160);

						arrow1x = x1 + Math.cos(radie45)*size;
                        arrow1y = y1 + Math.sin(radie45)*size;
						arrow2x = x1 + Math.cos(radie45m)*size;
                        arrow2y = y1 + Math.sin(radie45m)*size;						
	
						return [["M", x1, y1], ["L", arrow1x, arrow1y], ["M", x1, y1], ["L", arrow2x, arrow2y]];	
					
					};						
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
						path3 = setArrow( path[0][1], path[0][2], path2[1][1], path2[1][2], 20);						
                        curve.attr({path: path});
                        controls[0].attr({path: path2});
						controls[1].attr({path: path3});
                    };
                    controls[4].update = function (x, y) {
                        var X = this.attr("cx") + x,
                            Y = this.attr("cy") + y;
                        this.attr({cx: X, cy: Y});
                        path[1][3] = X;
                        path[1][4] = Y;
                        path2[2][1] = X;
                        path2[2][2] = Y;
                        curve.attr({path: path});
                        controls[0].attr({path: path2});
                    };
                    controls[5].update = function (x, y) {
                        var X = this.attr("cx") + x,
                            Y = this.attr("cy") + y;
                        this.attr({cx: X, cy: Y});
                        path[1][5] = X;
                        path[1][6] = Y;
                        path2[3][1] = X;
                        path2[3][2] = Y;
                        controls[4].update(x, y);
                    };
                    controls.drag(move, up);
                }
                function move(dx, dy) {
                    this.update(dx - (this.dx || 0), dy - (this.dy || 0));
                    this.dx = dx;
                    this.dy = dy;
                }
                function up() {
                    this.dx = this.dy = 0;
                }

            };