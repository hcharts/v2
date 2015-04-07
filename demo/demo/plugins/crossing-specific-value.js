$(function () {
    $('#container').highcharts({
        xAxis: {
            gridLineWidth: 1,
            min: 0,
            max: 5,
            tickInterval: 1,
            lineColor: 'black',
            crossing: 1,
            opposite: true
        },
        yAxis: {
            min: 0,
            max: 5,
            tickInterval: 1,
            lineWidth: 1,
            lineColor: 'black',
            crossing: 3,
            title: {
                _text: null
            }
        },
    
        series: [{
            data: [
                [-3, 3],
                [-2, 2],
                [-1, 1],
                [0, 0],
                [1, 1],
                [2, 2],
                [3, 3]
                
            ]
        }]
    
    });
});