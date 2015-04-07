<?php 
  $title = "联系我们 | ";
  include "../config.php";
  include "../header.php";
?>
	<div id="about">
			<div id="about_header" class="service">
					<div class="container">
						<h1>开放、平等、协作、分享</h1>
					</div>
			</div>
			
			<div id="open_nav">
				<div class="container">
					<ul>
						<li><a href="cdn.php">开放CDN服务</a></li>
						<li><a href="license.php">商业授权</a></li>
						<li><a href="custom.php">图表定制服务<span>beta</span></a></li>
						<li><a href="more.php"   class="cur">更多服务</a></li>
						<div class="clear"></div>
					</ul>
					
				</div>
			</div>
			<div id="open_content">
				<div class="container">		
					<div class="desciption">
						<h2>更多贴心的图表服务</h2>
						<h2><small>坚持互联网精神，将 Highcharts 进行到底！</small></h2>
					</div>
					
					<div class="license">
						<h3 class="li_title">GitHub开源项目</h3>
						<div class="li_cont">
							<div class="others left">
							<h3>在线导出服务器</h3>
							<p>我们将提供稳定、针对中文优化的导出服务，主要改进如下：</p>
							<p>1、稳定可靠（官网经常性访问不了）</p>
							<p>2、优化中文乱码、中文显示大小不一的问题</p>
							<hr>
							<code>https://github.com/hcharts/Exporting-server-Zh_cn</code>
							<br/>
							</div>
							<div class="others right">
							<h3>CodeTest</h3>
							<p>在线代码调试器，针对国人的jsfiddle</p>
							<p>在线代码调试器项目是基于Highcharts中文网在线测试平台</p>
							<p>欢迎大家积极提交和贡献代码</p>
							
							<hr>
							<code>https://github.com/hcharts/CodeTest</code>
							</div>
							
							<div class="clear"></div>
							<h3 class="server_title" style="margin-bottom:0">更多内容详见 <a href="https://github.com/hcharts" target="_blank">https://github.com/hcharts</a></h3>
						</div>
							
					</div>	
					
				</div>
			</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>
