<?php 
  $title = "Highcharts | ";
  include "../config.php";
  include "../header.php";
?>
	<div class="s">
	<div class="s-header">
		<div class="container">
			<h1>Highsofts 所有产品</h1>
		</div>
	</div>
	
	<div class="s-nav">
		<div class="container">
			<ul class="five">
				<li class="active"><a href="highcharts.php">Highcharts</a></li>
				<li><a href="highstock.php">Highstock</a></li>
				<li><a href="highmaps.php" class="cur">Highmaps</a></li>
				<li><a href="http://cloud.highcharts.com" target="_blank">Highcharts cloud <span>beta</span></a></li>
				<li><a href="http://highslide.com" target="_blank">Highslide</a></li>
				<div class="clear"></div>
			</ul>
			
		</div>
	</div>
	<div class="s-content">
		<div class="container">
			
					<div class="s-box s-main left">
						<h1>Highcharts
							<div class="s-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1425290962424"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div></h1>

						<p>Highcharts 是一个用纯 JavaScript编写的一个图表库， 能够很简单便捷的在web网站或是 web 应用程序添加有交互性的图表，并且免费提供给个人学习、个人网站和非商业用途使用。</p>
						<p>Highcharts 支持的图表类型有直线图、曲线图、区域图、柱状图、饼状图、散状点图、仪表图、气泡图、瀑布流图等多达 20 种图表，其中很多图表可以集成在同一个图形中形成综合图。</p>
						<p class="s-btns">
							<a href="download.php" class="button"><i class="icon-download icon-white"></i>&nbsp;&nbsp;立即下载</a>
							<a href="/demo/index.php" class="button warning"><i class="icon-zoom-in icon-white"></i>&nbsp;&nbsp;查看演示</a>
							<a href="/open/license.php" class="button success"><i class="icon-shopping-cart icon-white"></i>&nbsp;&nbsp;商用授权</a>
							
						</p>
						<h2>产品特点</h2>
						<div class="s-feature">
								<div class="left s-background sh">
								</div>
								<div class="right s-text">
								<h3>兼容性</h3>
								<p>It works in all modern mobile and desktop browsers including the iPhone/iPad and Internet Explorer from version 6. On iOS and Android, multitouch support provides a seamless user experience. Standard browsers use SVG for the graphics rendering. In legacy Internet Explorer graphics are drawn using VML.</p>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="s-feature">
								<div class="right s-background sh s-b1">
								</div>
								<div class="left s-text">
								<h3>非商用免费</h3>
								<p>Do you want to use Highcharts for a personal website, a school site or a non-profit organisation? Then you don't need the author's permission, just go on and use Highcharts. For commercial websites and projects, see <a href="/open/license.php">License and Pricing</a>.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b2">
								</div>
								<div class="right s-text">
								<h3>开源</h3>
								<p>One of the key features of Highcharts is that under any of the licenses, free or not, you are allowed to download the source code and make your own edits. This allows for personal modifications and a great flexibility.</p>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="s-feature">
								<div class="right s-background sh s-b3">
								</div>
								<div class="left s-text">
								<h3>纯 Javascript</h3>
								<p>Highcharts is solely based on native browser technologies and doesn't require client side plugins like Flash or Java. Furthermore you don't need to install anything on your server. No PHP or ASP.NET. Highcharts needs only two JS files to run: The highcharts.js core and either the jQuery, MooTools or Prototype framework. One of these frameworks is most likely already in use in your web page.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b4">
								</div>
								<div class="right s-text">
								<h3>图表类型丰富</h3>
								<p>Highcharts supports line, spline, area, areaspline, column, bar, pie, scatter, angular gauges, arearange, areasplinerange, columnrange and polar chart types. Many of these can be combined in one chart.</p>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="s-feature">
								<div class="right s-background sh s-b5">
								</div>
								<div class="left s-text">
								<h3>简单易用</h3>
								<p>Setting the Highcharts configuration options requires no special programming skills. The options are given in a JavaScript object notation structure, which is basically a set of keys and values connected by colons, separated by commas and grouped by curly brackets.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b6">
								</div>
								<div class="right s-text">
								<h3>交互性</h3>
								<p>Through a full API you can add, remove and modify series and points or modify axes at any time after chart creation. Numerous events supply hooks for programming against the chart. In combination with jQuery, MooTools or Prototype's Ajax API, this opens for solutions like live charts constantly updating with values from the server, user supplied data and more.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background sh s-b7">
								</div>
								<div class="left s-text">
								<h3>多轴支持</h3>
								<p>Sometimes you want to compare variables that are not the same scale - for example temperature versus rainfall and air pressure. Highcharts lets you assign an y axis for each series - or an x axis if you want to compare data sets of different categories. Each axis can be placed to the right or left, top or bottom of the chart. All options can be set individually, including reversing, styling and position.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b8">
								</div>
								<div class="right s-text">
								<h3>动态数据提示框</h3>
								<p>On hovering the chart Highcharts can display a tooltip text with information on each point and series. The tooltip follows as the user moves the mouse over the graph, and great efforts have been taken to make it stick to the nearest point as well as making it easy to read a point that is below another point.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background sh s-b9">
								</div>
								<div class="left s-text">
								<h3>时间轴支持</h3>
								<p>75% of all charts with an X and Y axis have a date-time X axis. Therefore Highchart is very intelligent about time values. With milliseconds axis units, Highcharts determines where to place the ticks so that they always mark the start of the month or the week, midnight and midday, the full hour etc.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b10">
								</div>
								<div class="right s-text">
								<h3>图表导出及打印</h3>
								<p>With the exporting module enabled, your users can export the chart to PNG, JPG, PDF or SVG format at the click of a button, or print the chart directly from the web page.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background sh s-b11">
								</div>
								<div class="left s-text">
								<h3>图表缩放</h3>
								<p>By zooming in on a chart you can examine an especially interesting part of the data more closely. Zooming can be in the X or Y dimension, or both.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b12">
								</div>
								<div class="right s-text">
								<h3>数据多样性</h3>
								<p>Highcharts takes the data in a JavaScript array, which can be defined in the local configuration object, in a separate file or even on a different site. Furthermore, the data can be handled over to Highcharts in any form, and a callback function used to parse the data into an array.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background sh s-b13">
								</div>
								<div class="left s-text">
								<h3>仪表图</h3>
								<p>Ideal for dashboards, angular gauges provides speedometer-like charts, easy to read at a quick glance.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b14">
								</div>
								<div class="right s-text">
								<h3>极区图</h3>
								<p>Cartesian chart types like line, area, spline or areaspline can be converted to polar or radial chart by one simple option.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background sh s-b15">
								</div>
								<div class="left s-text">
								<h3>图表反转或坐标轴反转</h3>
								<p>Sometimes you need to flip over your chart and make the X axis appear vertical, like for example in a bar chart. Reversing the axis, with the highest values appearing closest to origo, is also supported.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background sh s-b16">
								</div>
								<div class="right s-text">
								<h3>标签文字旋转</h3>
								<p>All text labels, including axis labels, data labels for the point and axis titles, can be rotated in any angle.</p>
								</div>
								<div class="clear"></div>
						</div>

						<div class="s-comment">
							<div class="ds-thread"></div>
							<script type="text/javascript">
								var duoshuoQuery = {short_name:"highcharts"};
								(function() {
									var ds = document.createElement('script');
									ds.type = 'text/javascript';ds.async = true;
									ds.src = 'http://static.duoshuo.com/embed.js';
									ds.charset = 'UTF-8';
									(document.getElementsByTagName('head')[0] 
									|| document.getElementsByTagName('body')[0]).appendChild(ds);
								})();
							</script>
						</div>
					</div>

					<div class="s-slider left">
						<div class="s-slider-title">
							相关内容
						</div>
						<div class="s-slider-cont">
						<ul class="s-ul-float">
							<li><a href="/product/download.php">下载中心</a></li>
							<li><a href="/product/changelog.php">更新日志</a></li>
							<li><a href="/open/cdn.php">开放CDN</a></li>
							<li><a href="/open/custom.php">图表定制</a></li>
							<div class="clear"></div>
						</ul>
						</div>
					</div>

					<div class="s-slider left">
						<div class="s-slider-title">
							新闻动态
						</div>
						<div class="s-slider-cont">
							<ul>
								<li><a href="/subject/2015-plan.php" title="Highcharts中文网2015年发展计划">2015年发展计划</a></li>
								<li><a href="/subject/announcing-highcharts-4-1.php" title="Highcharts 4.1 发布">Highcharts 4.1 发布</a></li>
							</ul>
						</div>
					</div>

					<div class="s-slider left noborder">
						<iframe width="100%" height="480px" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=500&fansRow=1&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=1&isFans=0&uid=3933891577&verifier=9cf484e0&dpc=1"></iframe>
					</div>
					
			</div>
		
	</div>
	</div>
	<?php include "../footer.php"; ?>
</body>
</html>