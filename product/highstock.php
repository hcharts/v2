<?php 
  $title = "Highstock | ";
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
				<li><a href="highcharts.php">Highcharts</a></li>
				<li class="active"><a href="highstock.php">Highstock</a></li>
				<li><a href="highmaps.php" class="cur">Highmaps</a></li>
				<li><a href="http://cloud.highcharts.com" target="_blank">Highcharts cloud <span>beta</span></a></li>
				<li><a href="http://highslide.com"  target="_blank">Highslide</a></li>
				<div class="clear"></div>
			</ul>
			
		</div>
	</div>
	<div class="s-content">
		<div class="container">
			
					<div class="s-box s-main left">
						<h1>Highstock <div class="s-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1425290962424"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div></h1>
						<p>Highstock可以让你用 Javascript 创建股票图表及大数据时间轴图表。</p>
						<p>包含多功能导航器（navigation ）、日期范围选择器、滚动条等组件，支持缩放、平移等操作。</p>
						<p class="s-btns">
							<a href="download.php" class="button"><i class="icon-download icon-white"></i>&nbsp;&nbsp;立即下载</a>
							<a href="/demo/highstock.php" class="button warning"><i class="icon-zoom-in icon-white"></i>&nbsp;&nbsp;查看演示</a>
							<a href="/open/license.php" class="button success"><i class="icon-shopping-cart icon-white"></i>&nbsp;&nbsp;商用授权</a>
						</p>
						<h2>产品特点</h2>
						<div class="s-feature">
								<div class="left s-background ss">
								</div>
								<div class="right s-text">
								<h3>兼容性</h3>
								<p>It works in all modern mobile and desktop browsers including the iPhone/iPad and Internet Explorer from version 6. On iOS and Android, multitouch support provides a seamless user experience. Standard browsers use SVG for the graphics rendering. In legacy Internet Explorer graphics are drawn using VML.</p>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="s-feature">
								<div class="right s-background ss s-b1">
								</div>
								<div class="left s-text">
								<h3>非商用免费</h3>
								<p>Do you want to use Highcharts for a personal website, a school site or a non-profit organisation? Then you don't need the author's permission, just go on and use Highcharts. For commercial websites and projects, see License and Pricing.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b2">
								</div>
								<div class="right s-text">
								<h3>开源</h3>
								<p>One of the key features of Highcharts is that under any of the licenses, free or not, you are allowed to download the source code and make your own edits. This allows for personal modifications and a great flexibility.</p>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="s-feature">
								<div class="right s-background ss s-b3">
								</div>
								<div class="left s-text">
								<h3>纯 Javascript</h3>
								<p>Highstock is solely based on native browser technologies and doesn't require client side plugins like Flash or Java. Furthermore you don't need to install anything on your server. No PHP or ASP.NET. Highstock needs only two JS files to run: The highstock.js core and either the jQuery, MooTools or Prototype framework. One of these frameworks is most likely already in use in your web page.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b4">
								</div>
								<div class="right s-text">
								<h3>图表类型丰富</h3>
								<p>Highstock supports line, spline, area, areaspline, column, scatter, OHLC, candlestick, flags, arearange, areasplinerange and columnrange chart types. Any of these can be combined in one chart.</p>
								</div>
								<div class="clear"></div>
						</div>	
						<div class="s-feature">
								<div class="right s-background ss s-b5">
								</div>
								<div class="left s-text">
								<h3>简单易用</h3>
								<p>Setting the Highstock configuration options requires no special programming skills. The options are given in a JavaScript object notation structure, which is basically a set of keys and values connected by colons, separated by commas and grouped by curly brackets.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b6">
								</div>
								<div class="right s-text">
								<h3>交互性</h3>
								<p>Through a full API you can add, remove and modify series and points or modify axes at any time after chart creation. Numerous events supply hooks for programming against the chart. In combination with jQuery, MooTools or Prototype's Ajax API, this opens for solutions like live charts constantly updating with values from the server, user supplied data and more.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background ss s-b7">
								</div>
								<div class="left s-text">
								<h3>强大的日期选择器</h3>
								<p>While navigating a large dataset, perhaps hourly values over several years, it is important for the charting library to provide a quick way a to view a certain time range. Highstock provides a range selector where the user can zoom in on preselected time ranges like 1m, 1y or YTD, or manually add date ranges.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b8">
								</div>
								<div class="right s-text">
								<h3>滚动条和导航器</h3>
								<p>Another, more visual way of navigating the data set is by dragging the scrollbar, or dragging the edges of the Navigator window to the area of special interst.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background ss s-b9">
								</div>
								<div class="left s-text">
								<h3>事件标志</h3>
								<p>Through a specific series type called "flags", you can add event markers and annotations directly related to an interesting are on the series. You can add different visual styles to the markers to differentiate them, and you can add them to the graph or the X axis.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b10">
								</div>
								<div class="right s-text">
								<h3>多坐标轴</h3>
								<p>Sometimes you want to compare variables that are not the same scale. Highstock lets you assign an y axis for each series. Each axis can be placed to the right or left, or next to other axes. All options can be set individually, including reversing, styling and position.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background ss s-b11">
								</div>
								<div class="left s-text">
								<h3>动态数据提示框</h3>
								<p>On hovering the chart Highstock can display a tooltip text with information on each point and series. The tooltip follows as the user moves the mouse over the graph, making it easy and intuitive to read out the values from the chart.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b12">
								</div>
								<div class="right s-text">
								<h3>时间轴</h3>
								<p>Highstock is very intelligent about time values. With milliseconds axis units, Highstock determines where to place the ticks so that they always mark the start of the month or the week, midnight and midday, the full hour etc.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background ss s-b13">
								</div>
								<div class="left s-text">
								<h3>数据分组</h3>
								<p>If your data array consists of 100,000 points, it wouldn't be very effective for the browser to calculate the translated position for each one and display a graph with 100,000 points on what is often a 800px wide canvas. In comes the Highstock data grouping facility, where the data is blazingly fast grouped into optional groups like months or days, and displayed. When zooming in on smaller ranges, the grouping is redone and you can inspect the full resolution data.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b14">
								</div>
								<div class="right s-text">
								<h3>图表导出及打印</h3>
								<p>With the exporting module enabled, your users can export the chart to PNG, JPG, PDF or SVG format at the click of a button, or print the chart directly from the web page.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="right s-background ss s-b15">
								</div>
								<div class="left s-text">
								<h3>图表缩放</h3>
								<p>In addition to controling the zooming and panning from the scroller and navigator, you have the option to set mouse and finger zooming and panning.</p>
								</div>
								<div class="clear"></div>
						</div>
						<div class="s-feature">
								<div class="left s-background ss s-b16">
								</div>
								<div class="right s-text">
								<h3>数据多样性</h3>
								<p>
									Highstock takes the data in a JavaScript array, which can be defined in the local configuration object, in a separate file or even on a different site. Furthermore, the data can be handed over to Highstock in any form, and a callback function used to parse the data into an array.
								</p>
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
	<?php include("../footer.php") ?>
</body>
</html>