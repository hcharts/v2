var chart;
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Monthly Average Temperature'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            plotLines:[{
                color:'red',            //线的颜色，定义为红色
                dashStyle:'longdashdot',//标示线的样式，默认是solid（实线），这里定义为长虚线
                value:3,                //定义在那个值上显示标示线，这里是在x轴上刻度为3的值处垂直化一条线
                width:2,                //标示线的宽度，2px
            }]
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines:[{
                color:'red',            //线的颜色，定义为红色
                dashStyle:'solid',     //默认是值，这里定义为长虚线
                value:20,              //定义在那个值上显示标示线，这里是在x轴上刻度为3的值处垂直化一条线
                width:2,               //标示线的宽度，2px
                label:{
                    text:'我是标示线的标签',     //标签的内容
                    align:'left',                //标签的水平位置，水平居左,默认是水平居中center
                    x:10,                         //标签相对于被定位的位置水平偏移的像素，重新定位，水平居左10px
                    style:{
                        fontSize:'14px',
                        fontWeight:'bold'
                    }
                },
                events:{
                    click:function(e){
                        alert("yAxis plotLine Clicked!");
                        //当标示线被单击时，触发的事件
                    },
                    mouseover:function(){
                        console.log("yAxis plotLine Hovered!");
                        //当标示线被鼠标悬停时，触发的事件
                    },
                
                    mouseout:function(){
                        //当标示线被鼠标移出时，触发的事件
                    },
                    
                    mousemove:function(){
                        //当标示线被鼠标移动(时，触发的事件
                    }
                }
            }]
        },
        tooltip: {
            enabled: false,
            formatter: function() {
                return '<b>'+ this.series.name +'</b><br/>'+this.x +': '+ this.y +'°C';
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
        
    var i = 0;
    $(".add").click(function(){
        i++;
        chart = $('#container').highcharts();
        chart.xAxis[0].addPlotLine({             //在x轴上增加
            value:2*i,                           //在值为2的地方
            width:2,                             //标示线的宽度为2px
            color: '#000',                       //标示线的颜色
            id: 'plot-line-'+i+''                //标示线的id，在删除该标示线的时候需要该id标示
        });
   });
        
   $(".remove").click(function(){
        if(i>0) {
            chart.xAxis[0].removePlotLine("plot-line-"+i+'');
            i--;
        }
    })
});
