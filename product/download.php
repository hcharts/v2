<?php 
  $title = "下载中心 | ";
  include "../config.php";
  include "../header.php";
?>
	<div class="s">

	<div class="s-content">
		<div class="container">
			
					<div class="s-box s-main left">
						<a name="highcharts"></a>
						<h1>下载中心
							<div class="s-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1425290962424"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div></h1>
						<p>解压下载后的压缩包，用浏览器打开 index.htm 即可看到官方提供的基础实例。</p>
						<p>更新日志请看 <a href="changelog.php">changelog</a>。</p>
						<p class="s-btns large">
							<a onclick="_hmt.push(['_trackEvent', 'download', 'click', 'highcharts', '4.1.3']);" href="http://static.hcharts.cn/highcharts/Highcharts-4.1.3.zip" class="button">Highcharts 4.1.3</a>
							<a onclick="_hmt.push(['_trackEvent', 'download', 'click', 'highstock', '2.1.3']);" href="http://static.hcharts.cn/highstock/Highstock-2.1.3.zip" class="button warning">Highstock 2.1.3</a>
							<a onclick="_hmt.push(['_trackEvent', 'download', 'click', 'highmaps', '1.1.3']);" href="http://static.hcharts.cn/highmaps/Highmaps-1.1.3.zip" class="button success">Highmaps 1.1.3</a>
						</p>
						<ul>
							<li>下载历史版本 : <a href="http://code.highcharts.com">code.highcharts.com</a></li>
							<li>Github 源码 : <a href="https://github.com/highslide-software/highcharts.com">https://github.com/highslide-software/highcharts.com</a></li>
							<li>中文网开放CDN ：<a href="http://cdn.hcharts.cn">http://cdn.hcharts.cn</a></li>
						</ul>
						<hr>
						<a name="plugins"></a>
						<h2>官方插件</h2>
						<p>Highcharts 提供非常方便的插件机制，任何人都可以编写自己的插件来丰富 Highcharts 的功能。</p>
						<ul>
							<li><a href="http://www.highcharts.com/plugin-registry" target="_blank">官方插件列表</a></li>
							<li><a href="http://www.highcharts.com/plugin-registry/howto" target="_blank">插件开发教程</a></li>
						</ul>
						<a name="exportServer"></a>
						<h2>导出服务器</h2>
						<p>导出服务用于Highcharts导出功能，即通过导出服务器将图表导出为常见图片格式或 PDF 文档。</p>
						<p>默认情况下，只需要引入 <code>http://cdn.hcharts.cn/highcharts/modules/exporting.js</code> 即可实现图表导出功能，默认导出服务器是官网提供的。</p>
						<h3>在线导出服务器</h3>
						<ul>
							<li>官方导出服务器：<code>http://export.highcharts.com</code></li>
							<li>中文网导出服务器：<code>http://export.hcharts.cn</code></li>
							<li>CVS导出服务器：<code>http://export.hcharts.cn/cvs.php</code> （关于CVS导出服务器详见论坛帖子：<a href="http://bbs.hcharts.cn/thread-99-1-1.html" target="_blank">导出Excel插件</a>）</li>
						</ul>
						<h3>导出服务配置</h3>
						<p>在线导出服务器是需要联网才能完成其功能的，在不能联网的情况下，你也可以搭建自己的导出服务器。</p>
						<ul class="nav nav-tabs">
						  <li class="active"><a href="#home" data-toggle="tab">php 版</a></li>
						  <li><a href="#profile" data-toggle="tab">java/Servlet 版</a></li>
						  <li><a href="#messages" data-toggle="tab">java/Stuts2 版</a></li>
						  <li><a href="#settings" data-toggle="tab">asp.NET 版</a></li>
						</ul>
						 
						<div class="tab-content">
						  <div class="tab-pane active s-pane" id="home">
						  	<p>1、服务器文件下载：<a href="http://pan.baidu.com/s/1dDvgzw1" target="_blank">http://pan.baidu.com/s/1dDvgzw1</a></p>
						  	<p>2、运行环境：java（jre）、Apache + php</p>
						  	<p>3、如何使用</p>
						  	<p>将下载的文件的export目录放在apache 根目录下，通过设置 exporting.url 值为 <br><code>http://{你的IP}/export/index.php</code> 即可</p>
						  	<p>详见论坛帖子：<a href="http://bbs.hcharts.cn/thread-33-1-1.html" target="_blank">Highcharts导出服务器配置——PHP版</a>
							</p>
						  </div>
						  <div class="tab-pane s-pane" id="profile"><p>1、服务器文件下载：<a href="http://pan.baidu.com/s/1c0xlzQ4" target="_blank">http://pan.baidu.com/s/1o63B8sa</a></p>
										<p>2、运行环境：java（开发框架是Strut2）、Tomcat</p>
									
										<p>3、如何使用：</p>
										<p>1）将 ExportingServer_java_Struts2.war 放到 <code>{Tomcat目录}/webapp/</code> 下，启动tomcat<br>2）设置 exporting.url为 <code>http://localhost:8080/ExportingServer-java-strut2/export</code></p>
										<p>详见论坛帖子：<a href="http://bbs.hcharts.cn/thread-201-1-1.html" target="_blank">Highcharts导出服务器配置——java/Struts2版</a></p></div>
						  <div class="tab-pane s-pane" id="messages"><p>1、服务器文件下载：<a href="http://pan.baidu.com/s/1bnq2mcR" target="_blank">http://pan.baidu.com/s/1bnq2mcR</a></p>
										<p>2、运行环境：java、Tomcat</p>
									
										<p>3、如何使用：</p>
										<p>1）用Eclipse 或 MyEclipse 打开项目并部署到 Tomcat<br>2）设置 exporting.url为 <code>http://localhost:8080/ExportingServer-java-strut2/export</code></p>
										<p>详见论坛帖子：<a href="http://bbs.hcharts.cn/thread-345-1-1.html" target="_blank">Highcharts导出服务器配置——java/Struts2版</a></p>
									</div>
						  <div class="tab-pane s-pane" id="settings"><p>1、服务器文件下载：<a href="http://pan.baidu.com/s/1kT9iyDx" target="_blank">http://pan.baidu.com/s/1o63B8sa</a></p>
										<p>2、运行环境：.Net Framework 2.0+、IIS 6.0+</p>
									
										<p>3、如何使用：</p>
										<p>1）把导出服务的文件上传到服务器指定的目录<br>2）以此目录作为网站的根目录，在IIS中新建网站<br>3）设置exporting.url为 <code>服务器地址:端口/Export.aspx</code></p>
										<!--<p>详见论坛帖子：<a href="http://bbs.hcharts.cn/thread-201-1-1.html" target="_blank">Highcharts导出服务器配置——java/Struts2版</a></p>-->
										<p>本程序由 <a href="https://github.com/lanhouzi" target="_blank">蓝猴子</a> 提供，详见 <a href="https://github.com/hcharts/Highcharts_Export_.Net" target="_blank">Github</a> 项目</p></div>
						</div>
						<h3>其他</h3>
						<ul>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'ASP.NET', 'Export server']);" target="_blank" href="https://github.com/imclem/Highcharts-export-module-asp.net">Export server for ASP.NET</a> provided by Clément Agarini.</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'Java', 'Export server and wrapper']);" target="_blank" href="https://github.com/one2team/highcharts-serverside-export">Export server and wrapper in Java</a> provided by <a href="http://en.one2team.com/">One2team</a></li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'Perl', 'Export wrapper']);" target="_blank" href="https://github.com/joeltinez/Highcharts-Exporting-Server/blob/master/exportChart-perl.pl">Export server wrapper in Perl</a> provided by Joel J. Martinez</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'nodejs', 'Export wrapper']);" target="_blank" href="https://github.com/davidpadbury/node-highcharts">Node.js export server</a>installable als npm-package, by <a href="http://davidpadbury.com">David Padbury</a></li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'Rails', 'Export wrapper']);" target="_blank" href="https://github.com/kbaum/highchart-image-api">Rails image API</a> that wraps the Highcharts convert script to create chart images on the server, by <a href="https://github.com/kbaum">Karl Baum</a></li>
						</ul>
						<a name="wrappers"></a>
						<h2>第三方扩展</h2>
						<ul>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'Highcharts4gwt', 'Highcharts4gwt']);" target="_blank" href="https://highcharts4gwt.github.io/">Highcharts4gwt</a> provided by Ronan Quillevere</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'GWT', 'GWT Highcharts']);" target="_blank" href="http://www.moxiegroup.com/moxieapps/gwt-highcharts/">GWT Highcharts</a> provided by <a href="http://www.moxiegroup.com/">Moxie Group</a></li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'Java', 'Wicked Charts']);" target="_blank" href="http://code.google.com/p/wicked-charts/">Wicked Charts</a>, a Java wrapper provided by Tom Hombergs</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','Vaadin', 'Vaadin Charts']);" target="_blank" href="https://vaadin.com/add-ons/charts">Vaadin Charts</a> the official <a href="https://vaadin.com/home">Vaadin</a> wrapper for Highcharts JS</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','Django', 'Chartit']);" target="_blank" href="http://chartit.shutupandship.com.">Django Chartit</a>, a Highcharts wrapper for Django, provided by <a href="http://shutupandship.com">Praveen Gollakota</a></li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'ASP.NET', 'DotNet.Highcharts']);" target="_blank" href="http://dotnethighcharts.codeplex.com">DotNet.Highcharts</a> offers Highcharts integration with ASP.NET applications, provided by <a href="http://vangi.net/">Vangel Kolarov</a></li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click', 'PHP highRoller', 'HighRoller']);" target="_blank" href="http://highroller.io/">HighRoller</a> - an object-oriented PHP wrapper for Highcharts, provided by John McLaughlin.</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','PHP highcharts', 'HighchartsPHP']);" target="_blank" href="https://github.com/ghunti/HighchartsPHP">A Highcharts PHP wrapper</a> by Gonçalo Queirós</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','ASP.NET', 'Highcharts.NET (Codeplex)']);" target="_blank" href="http://highcharts.codeplex.com/">Highcharts.Net</a>, encapsulates the Highcharts API on ASP.NET controls. Team coordinated by <a href="http://highcharts.codeplex.com/team/view">paulovich</a></li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','Javascript extjs hc', 'Highcharts ExtJs 4']);" target="_blank" href="https://github.com/JoeKuan/Highcharts_Sencha/">Highcharts Sencha</a> is a Highcharts extension for Sencha products, including Ext JS and Sencha Touch, provided by Joe Kuan. See <a href="http://www.joekuan.org/demos/Highcharts_ExtJs_4/">the GitHub page</a> that includes links to demos and tutorial.</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','Javascript extjs hs', 'Highstock ExtJs 4']);" target="_blank" href="http://github.com/JoeKuan/Highstock_ExtJs_4">Highstock ExtJs 4</a> is a Highstock extension for extjs-4, provided by Joe Kuan. See <a href="http://www.joekuan.org/demos/Highstocks_full/">demo</a> and <a href="http://joekuan.wordpress.com/2012/02/22/highstock-extension-for-extjs-4/">documentation</a></li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','yii', 'yii extension']);" target="_blank"  href="http://www.yiiframework.com/extension/highcharts/">Highcharts extension for Yii framework</a> by Milo Schuman.</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','highchartTable', 'highcharttable']);" target="_blank" href="http://highcharttable.org/">HighchartTable</a>, a jQuery plugin for generating charts from marked-up tables.</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','AI', 'AI Highcharter']);" target="_blank" href="http://aihighcharter.azurewebsites.net/">AI Highcharter</a>, add chart to ASP.net pages using clean HTML5.</li>
							<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','Angular', 'Angular directive for Highcharts']);" target="_blank" href="https://github.com/pablojim/highcharts-ng">Angular directive for Highcharts</a> by Barry Fitzgerald.</li>
						</ul>
						<p>Framework adapters:</p>
						<ul>
						<li><a onclick="_hmt.push(['_trackEvent', 'Implementations', 'click','Highcharts Dojo Adapter', 'Dojo toolkit.fr']);"  target="_blank" href="http://www.dojotoolkit-fr.org/2012/04/highcharts-dojo-adapter/">Highcharts Dojo Adapter</a> developed by <a href="http://www.dojotoolkit-fr.org/author/ben/">Benjamin Santalucia</a></li>
						</ul>
						<a name="hcharts"></a>
						<h2>Highcharts中文网资源</h2>
						<p>Highcharts公共资源：</p>
						<p> 百度网盘：<a href="http://pan.baidu.com/s/1o6NodRk">http://pan.baidu.com/s/1o6NodRk</a> （包含所有版本的Highcharts及相关资源）</p>
    					<p>资源征集：</p>
    					<p>如果你有好资源，欢迎分享出来。</p>
    					<p>分享地址：<a href="http://bbs.hcharts.cn/forum-68-1.html">中文论坛资源共享版块</a></p>
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

					<div class="s-slider-nav left" style="margin:0 0 16px 16px;">
						<ul>
							<li><a href="#highcharts">下载Highcharts</a></li>
							<li><a href="#plugins">官方插件</a></li>
							<li><a href="#exportServer">导出服务器</a></li>
							<li><a href="#wrappers">第三方扩展</a></li>
							<li><a href="#hcharts" class="noborder">中文网资源</a></li>
						</ul>
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
					
					<div class="s-slider left">
						<a href="http://weibo.com/highcharts"><img src="<?=constant("STATIC")?>/images/weibo_210x60.png" alt="Highcharts中文网官方微博"></a>
					</div>

					
			</div>
		
	</div>
	</div>
	<?php include("../footer.php") ?>
</body>
</html>