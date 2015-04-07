var options = {
	chart: {
	    plotBackgroundColor: null,
	    plotBorderWidth: null,
	    plotShadow: false,
	    renderTo:'container'
	},
	title: {
	    text: 'Browser market shares at a specific website, 2010'
	},
	tooltip: {
	  pointFormat: '{series.name}: <b>{point.y}</b>'
	},
	labels:{
		items:[{
			html:'<a href="http://www.52wulian.org" target="_blank">HighCharts</a>',
			style: {
				left:'532px',
				top:'160px',				
			}
		}],
		style:{
			color:'red',
			fontSize:45,
			fontWeight:'bold',
			zIndex:1000
		}
	},
	series: [{
	    name: 'Browser share',
	    data: [
	        ['Firefox',   45.0],
	        ['IE',       26.8],
	        {
	            name: 'Chrome',
	            y: 12.8,
	            sliced: true,
	            selected: true
	        },
	        ['Safari',    8.5],
	        ['Opera',     6.2],
	        ['Others',   0.7]
	    ]
	}]
};

$(document).ready(function(){
	var chart = new Highcharts.Chart(options);
	
	$("button.change").click(function(){
		var type = $(this).html();
		
		if(type == "pie") {
			options.tooltip.pointFormat = '{series.name}: <b>{point.percentage:.1f}%</b>';
		}else {
			options.tooltip.pointFormat = '{series.name}: <b>{point.y}</b>';
		}
		options.chart.type = type;
		chart = new Highcharts.Chart(options);
	});
});