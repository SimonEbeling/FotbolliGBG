
function appViewer(){
	this.width = 684;
	this.height = 464;
	this.halfHeight = 464;
	this.fullHeight = 884;
	this.lineColor = "#FFF";
	this.guid = $('input[name="entity_guid"]').val();
	this.r = null;
}

appViewer.prototype.init = function(){
		this.field('emptyHalfField');
		this.load();
};

appViewer.prototype.initPaper = function(){
		//Initialize Raphael-paper
		this.r = Raphael("fee_view_" + this.guid, this.width, this.height);
		this.r.rect(10, 10, this.width-20, this.height-20)
		.attr({stroke: this.lineColor});	
};

appViewer.prototype.field = function(type){

		if(this.r)
			this.r.remove();
		
		var x = 212;
		var path = [['M',x+30,10],['L',x+30,70],['L',x+200,70],['L',x+200,10],['M',x-70,10],['L',x-70,160],['L',x+300,160],['L',x+300,10]];
		var arc = [['M',x+30,160],['C',x+62,200,x+168,200,x+200,160]];
		var path2 = [['M',x+30,this.fullHeight-10],['L',x+30,this.fullHeight-70],['L',x+200,this.fullHeight-70],['L',x+200,this.fullHeight-10],['M',x-70,this.fullHeight-10],['L',x-70,this.fullHeight-160],['L',x+300,this.fullHeight-160],['L',x+300,this.fullHeight-10]];		
		var arc2 = [['M',x+30,this.fullHeight-160],['C',x+62,this.fullHeight-200,x+168,this.fullHeight-200,x+200,this.fullHeight-160]];
		var path3 = [['M',10,this.fullHeight/2],['L',this.width-10,this.fullHeight/2]];
		
		switch(type){
			case 'emptyFullField':
				this.height = this.fullHeight;
				this.initPaper();
				break;
			case 'emptyHalfField':
				this.height = this.halfHeight;
				this.initPaper();
				break;				
			case 'halfField':
				this.height = this.halfHeight;
				this.initPaper();
				this.r.path(path).attr({stroke: this.lineColor});
				this.r.path(arc).attr({stroke: this.lineColor});
				break;
			case 'fullField':
				this.height = this.fullHeight;
				this.initPaper();
				this.r.path(path).attr({stroke: this.lineColor});
				this.r.path(arc).attr({stroke: this.lineColor});
				this.r.path(path2).attr({stroke: this.lineColor});
				this.r.path(arc2).attr({stroke: this.lineColor});				
				this.r.path(path3).attr({stroke: this.lineColor});
				break;				
		}

};

appViewer.prototype.load = function(){

		var object = this;

		$.ajax({type: "POST",
			url: elgg.config.wwwroot + "ajax/view/fee/ajax/fee_load",
			dataType: "html",
			cache: false,
			data: {guid: this.guid },
			success: function(htmlData) {
				$(".ajaxImgView").remove();
				object.r.fromJSONView(htmlData, object);
			},
			error: function(){
				
			}
		});
};

$(window).load(function(){  
	var view = new appViewer();
	view.init();
}); 
