$(function () {
    $('#container').highcharts({
        chart: {
        },
        xAxis: {
            
        },
        
        plotOptions: {
            series: {
                showCheckbox: true
            },
            line:{
                events :{
                    checkboxClick: function(event) {
                        if(event.checked==true) {
                            this.show();
                        }
                        else {
                            this.hide();
                        }
                    },
                    legendItemClick:function(event) {//return false 即可禁用LegendIteml，防止通过点击item显示隐藏系列
                        return false;
                    }
                }
            }
        },
        
        series: [{
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            visible: false//默认不显示
        }, {
            data: [144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 29.9, 71.5, 106.4, 129.2],
            selected: true//默认checkbox勾选
        }]
    });
});