$(function () {
    var i = 1,chart;

    $('#container').highcharts({
        subtitle: {
            text: 'Subtitle'
        },

        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },

        series: [{
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        }]

    });
    chart = $('#container').highcharts();
       
    $("button.change").click(function(){
    	var index = $(this).attr("index");
    	
      if(index == "title") {
      	chart.setTitle( {text: 'New title '+ i++ });// 更新标题的文字        
      }
      
      else if(index == "title2") {
          chart.setTitle(
          	{ style: { color: 'red' }},	// 更新标题的颜色
          	{ style: { color: '#760000' }}	// 更新副标题的颜色
      		);
      		
      }else if(index == "subtitle") {
          chart.setTitle(null, { text: 'New title '+ i++ });
          
      } else {
      	// 标题包含HTML标签
        chart.setTitle({ text: "<a href='http://www.hcharts.cn'>Highcharts中文网</a>",useHTML:true }); 
      }
    });
  
});