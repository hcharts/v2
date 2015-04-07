<?php 
  $title = "中文 API | ";
  include "../config.php";
  include "../header.php";
?>

	<div id="api-wrapper">
		<div id="nav-wrap">
			<div id="nav">
				<a href="highstock.php" style="position:absolute;">返回首页</a>
				<div class="ui-widget" id="search-div">
			
					<input id="search" placeholder="搜索 ..."/>
				</div>
				<div class="nav-section">
					<h3 id="options-header">配置选项</h3>
					<p class="subheader">Highstock 所有配置属性。</p>
					<div id="global-options-tree">
						* 全局配置<br>
						<code>Highcharts.setOptions({</code>  
						<div id="global-options" class="tree"></div>
						<code>});</code>
					</div>
					<br>
					<div id="options-tree">
						
						<code>$("#container").highcharts({"StockChart"</code>
						<div id="options" class="tree"></div>
						<code>});</code>
					</div>
				</div>

				<div class="nav-section">
					<h3>Highstock函数</h3>

					<p class="subheader">Highstock 所有函数列表及说明。</p>
					<div id="methods-and-properties-toc"></div>

					<div id="objects-tree">
						<div id="objects" class="tree"></div>
					</div>
				</div>
			</div>
		</div>

		<div id="details-wrap">
			<div id="details">
				<div class="primary" style="display:none">
					<table class="datatable">
						<h3>Highstock 基本组成</h3>
						<div style="text-align:center"><img src="/images/hs_component.png" width="880px" height="400px" alt="Highstock 基本组成部分" title="Highstock 基本组成部分"></div>
						<br>
						<h3>名词解释</h3>
						<tr><th width="100px">英文名</th><th width="100px">中文名</th><th width="500px">描述</th><th>更多</th></tr>
						<tr><td class="entry">lang</td><td>语言文字对象</td><td>所有Highstock 文字相关的设置</td><td>查看教程</td></tr>
						<tr><td class="entry">chart</td><td>图表</td><td>图表区、图形区和通用图表配置选项</td><td>查看教程</td></tr>
						<tr><td class="entry">colors</td><td>颜色</td><td>图表数据列颜色配置，是一个颜色数组</td><td>查看教程</td></tr>
						<tr><td class="entry">credits</td><td>版权信息</td><td>Highstock 在图表的右下方放置的版权信息及链</td><td>查看教程</td></tr>
						<tr><td class="entry">exporting</td><td>导出模块</td><td>导出功能配置，导出即将图表下载为图片或打印图表</td><td>查看教程</td></tr>
						<tr><td class="entry">labels</td><td>标签</td><td>可以放置到图表区域内任何位置的HTML标签</td><td>查看教程</td></tr>
						<tr><td class="entry">legend</td><td>图例</td><td>用不同形状、颜色、文字等 标示不同数据列，通过点击标示可以显示或隐藏该数据列</td><td>查看教程</td></tr>
						<tr><td class="entry">loading</td><td>加载中</td><td>加载选项控制覆盖绘图区的加载屏的外观和文字</td><td>查看教程</td></tr>
						<tr><td class="entry">navigation</td><td>导航</td><td>导出模块按钮和菜单配置选项组</td><td>查看教程</td></tr>
						<tr><td class="entry">plotOptions</td><td>数据点配置</td><td>针对不同类型图表的配置。Highstock 所有图表类型请看下方 “图表类型”</td><td>查看教程</td></tr>
						<tr><td class="entry">rangeSelector</td><td>范围选择器</td><td>选择查看指定时间的数据，可以是年、月为单位或全部数据，也可以是输入具体的时间范围查看</td><td>查看教程</td></tr>
						<tr><td class="entry">scrollbar</td><td>滚动条</td><td>图表底部的滚动条，大数据量时可以方便查看局部数据</td><td>查看教程</td></tr>
						<tr><td class="entry">series</td><td>数据列</td><td>图表上一个或多个数据系列，比如图表中的一条曲线，一个柱形</td><td>查看教程</td></tr>
						<tr><td class="entry">title</td><td>标题</td><td>包括即标题和副标题，其中副标题为非必须的</td><td>查看教程</td></tr>
						<tr><td class="entry">tooltip</td><td>数据点提示框</td><td>当鼠标滑过某点时，以框的形式提示改点的数据，比如该点的值，数据单位等</td><td>查看教程</td></tr>
						<tr><td class="entry">Axis</td><td>坐标轴</td><td>包括x轴和y轴。多个不同的数据列可共用同一个X轴或Y轴，当然，还可以有两个X轴或Y轴，分别显示在图表的上下或左右。</td><td>查看教程</td></tr>
					</table>
					<br>
					<table class="datatable">
						<h3>图表类型</h3>
						<tr><th width="200px">英文名</th><th width="200px">中文名</th><th>更多</th></tr>
						<tr><td  class="entry">line</td><td>直线图</td><td>查看教程</td></tr>
						<tr><td  class="entry">spline</td><td>曲线图</td><td>查看教程</td></tr>
						<tr><td  class="entry">area</td><td>面积图</td><td>查看教程</td></tr>
						<tr><td  class="entry">areaspline</td><td>曲线面积图</td><td>查看教程</td></tr>
						<tr><td  class="entry">arearange</td><td>面积范围图</td><td>查看教程</td></tr>
						<tr><td  class="entry">areasplinerange</td><td>曲线面积范围图</td><td>查看教程</td></tr>
						<tr><td  class="entry">column</td><td>柱状图</td><td>查看教程</td></tr>
						<tr><td  class="entry">columnrange</td><td>柱状范围图</td><td>查看教程</td></tr>
						<tr><td  class="entry">flags</td><td>柱状范围图</td><td>查看教程</td></tr>
						<tr><td  class="entry">ohlc</td><td>K线图</td><td>查看教程</td></tr>
						<tr><td  class="entry">candlestick</td><td>阴阳烛图</td><td>查看教程</td></tr>
						<tr><td  class="entry">scatter</td><td>散点图</td><td>查看教程</td></tr>
					</table>
					<br>
					<h3>版本信息</h3>
					<p>hs api v1.1 for Highstock 2.0.3 ；最后更新时间：2014-07-16</p>
					<p>Copyright © 2013 - 2015 Highcharts中文网, 闽ICP备14003466号, All Rights Reserved.</p>
					
				</div>
			</div>
		</div>
	</div>
	<?php include "../footer.php"; ?>
	<script type="text/javascript" src="/js/jquery-ui.js"></script>
	<script type="text/javascript">
		var RESOURCE = "";
		var PRODUCTNAME = "json/40420140924";
		var temp = "hs_";
		var temp2 = 1;

		
		$(function() {
			var cur_nav = document.location.href.split("#")[1];
			if(typeof(cur_nav)!="undefined") {
				$(".primary").hide();
			} else {
				$(".primary").show();
			}
			
			updateHeight();

			$(window).resize(function(){
				updateHeight();
			});
		});
	</script>
	<script src="/js/new.js" type="text/javascript"></script>
</body>
</html>
