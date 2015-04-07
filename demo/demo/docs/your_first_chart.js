$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'My first Highcharts chart'
        },
        xAxis: {
            categories: ['my', 'first', 'chart']
        },
        yAxis: {
            title: {
                text: 'something'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
});