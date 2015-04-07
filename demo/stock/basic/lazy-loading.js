﻿$(function() {
	var path = "/demo/json/lazy-loading.json";
	
	$.getJSON(path, function(result) {
		
		// Add a null value for the end date 
		data = [].concat(result.data, [[Date.UTC(2011, 9, 14, 19, 59), null, null, null, null]]);
				
		// create the chart
		$('#container').highcharts('StockChart', {
			chart : {
				type: 'candlestick',
				zoomType: 'x'
			},

			navigator : {
				adaptToUpdatedData: false,
				series : {
					data : data
				}
			},

			scrollbar: {
				liveRedraw: false
			},
			
			title: {
				text: 'AAPL history by the minute from 1998 to 2011'
			},
			
			subtitle: {
				text: 'Displaying 1.7 million data points in Highcharts Stock by async server loading'
			},
			
			rangeSelector : {
				buttons: [{
					type: 'hour',
					count: 1,
					text: '1h'
				}, {
					type: 'day',
					count: 1,
					text: '1d'
				}, {
					type: 'month',
					count: 1,
					text: '1m'
				}, {
					type: 'year',
					count: 1,
					text: '1y'
				}, {
					type: 'all',
					text: 'All'
				}],
				inputEnabled: false, // it supports only days
				selected : 4 // all
			},
			
			xAxis : {
				events : {
					afterSetExtremes : afterSetExtremes
				},
				minRange: 3600 * 1000 // one hour
			},

			series : [{
				data : data,
				dataGrouping: {
					enabled: false
				}
			}]
		});
	});
});


/**
 * Load new data depending on the selected min and max
 */
function afterSetExtremes(e) {

	var url,
		currentExtremes = this.getExtremes(),
		range = e.max - e.min;
	var chart = $('#container').highcharts();
	chart.showLoading('Loading data from server...');
	$.getJSON('http://www.highcharts.com/samples/data/from-sql.php?start='+ Math.round(e.min) +
			'&end='+ Math.round(e.max) +'&callback=?', function(data) {
		
		chart.series[0].setData(data);
		chart.hideLoading();
	});
	
}