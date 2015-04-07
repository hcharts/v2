$(function() {
	var path = "/demo/json/intraday-area.json"
	$.getJSON(path, function(result) {
		var data = result.data;
		// create the chart
		$('#container').highcharts('StockChart', {
			

			title: {
				text: 'AAPL stock price by minute'
			},
			
			rangeSelector : {
				buttons : [{
					type : 'hour',
					count : 1,
					text : '1h'
				}, {
					type : 'day',
					count : 1,
					text : '1D'
				}, {
					type : 'all',
					count : 1,
					text : 'All'
				}],
				selected : 1,
				inputEnabled : false
			},
			
			series : [{
				name : 'AAPL',
				type: 'candlestick',
				data : data,
				tooltip: {
					valueDecimals: 2
				}
			}]
		});
	});
});