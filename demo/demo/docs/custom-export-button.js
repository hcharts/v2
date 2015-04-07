$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        exporting: {
            buttons: {
                contextButton: {
                    menuItems: [{
                        text: '在线编辑',
                        onclick: function () {
                            window.open('/test/index.php?from=demo&p=88');
                        }
                    }, {
                        separator: true
                    }]
                    .concat(Highcharts.getOptions().exporting.buttons.contextButton.menuItems)
                    .concat([{
                        separator: true
                    }, {
                        text: "<a href='http://www.highcharts.me'>Highcharts中文网</a>"
                    }, {
                        text: 'Highcharts中文网',
                        onclick:function() {
                            alert("Highcharts中文网");
                        }
                    }])
                }
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
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
    });
});