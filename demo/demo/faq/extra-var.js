$(function () {
	$('#container').highcharts({
		plotOptions: {
			line:{
				events :{
					click:function(){
						alert('x='+event.point.x + ", y=" + event.point.y + ", extra=" + event.point.extra);
					}
				}
			}
		},
		tooltip:{
			formatter:function(){
				return '<b>' + this.series.name + '</b>: y=' + this.y + ', extra='+this.point.extra;
			}
		},
		series: [{
			data: [
				{y:29.7,extra:'hhh'},
				{y:71.5,extra:'2333'},
				{y:106.4,extra:'1122'},
				{y:129.2,extra:'vvvv'}
			]
		}]
	});
});				