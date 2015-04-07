var options = {
    chart: {
        defaultSeriesType: 'spline',
         renderTo:'container'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        showEmpty: false
    },

    yAxis: {
        showEmpty: false
    },
		plotOptions:{
			series:{
				animation:false
			}
		},
    series: [{
        allowPointSelect: true,
        data: [ // use names for display in pie data labels
            ['January',    29.9],
            ['February',   71.5],
            ['March',     106.4],
            ['April',     129.2],
            ['May',       144.0],
            ['June',      176.0],
            ['July',      135.6],
            ['August',    148.5],
            {
                name: 'September',
                y: 216.4,
                selected: true,
                sliced: true
            },
            ['October',   194.1],
            ['November',   95.6],
            ['December',   54.4]
        ],
        dataLabels:{
        	enabled:true
        },
        marker:{
        	enabled:true
        },
        showInLegend: true
    }]
};

$(function () {
    var chart = new Highcharts.Chart(options); 

    // Set Name
    var name = false;
    $('.change[index=name]').click(function() {
        options.series[0].name = name ? null : 'First';
        chart = new Highcharts.Chart(options);
        name = !name;
    });

    //Set Enable DataLabels
    var enableDataLabels = false;
    $('.change[index=data-labels]').click(function() {
        options.series[0].dataLabels.enabled = enableDataLabels;
        chart = new Highcharts.Chart(options);
        enableDataLabels = !enableDataLabels;
    });
    
    //Set Enable Markers 
    var enableMarkers = false;
    $('.change[index=markers]').click(function() {
        options.series[0].marker.enabled = enableMarkers;
        chart = new Highcharts.Chart(options);
        enableMarkers = !enableMarkers;
    });

    //Set Color
    var color = false;
    $('.change[index=color]').click(function() {
        options.series[0].color =  color ? null : Highcharts.getOptions().colors[1];
        chart = new Highcharts.Chart(options);
        color = !color;
    });

    // Set type
    $.each(['line', 'column', 'spline', 'area', 'areaspline', 'scatter', 'pie'], function (i, type) {
        $('.change[index=' + type+']').click(function () {
            options.chart.type =  type;
            chart = new Highcharts.Chart(options);
        });
    });
});