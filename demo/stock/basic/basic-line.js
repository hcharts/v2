$(function() {

	$.getJSON('/demo/json/highstock-basic-data.json', function(result) {
		
		// Create the chart
		$('#container').highcharts('StockChart', {
			
			rangeSelector : {
				selected : 1
			},

			title : {
				text : 'AAPL Stock Price'
			},
			
			series : [{
				name : 'AAPL',
				data : result.data,
				tooltip: {
					valueDecimals: 2
				}
			}]
		});
	});

});