<?php 
  $title = "图表定制服务 | ";
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
						<li><a href="custom.php" class="cur">图表定制服务<span>beta</span></a></li>
						<li><a href="more.php">更多服务</a></li>
						<div class="clear"></div>
					</ul>
					
				</div>
			</div>
			<div id="open_content">
				<div class="container">		
					<div class="desciption">
						<h2>您的图表，我来帮忙</h2>
						<h2><small>专业的团队为你解决 Highcharts 图表各种疑难问题及各种图表需求</small></h2>
					</div>
					<div class="license">
						<h3 class="li_title">服务范围及收费标准</h3>
						<div class="li_cont">
							<table class="price">
								<tr>
									<th>服务名称</th><th>描述</th><th>收费标准（元）<span>*</span></th>
								</tr>
								<tr>
									<td>技术支持</td>
									<td>一对一帮您你解决Highcharts、Highstock图表的疑难问题</td>
									<td>100-500 / 次</td>
								</tr>
								<tr>
									<td rowspan="2">
										Highcharts技术支持套餐 <span>*</span>
									</td>
									<td>为期一个月的技术支持</td>
									<td>2500 / 月</td>
								</tr>
								<tr>
									<td>
										为期一年的技术支持服务
									</td>
									<td class="detail">25000 / 年 <div class="tips" style="width: 218px; display: none;">
										<div class="tip_cont" style="padding-bottom:0;border-radius:0;box-shadow:none">
											<p class="tit" style="background:#FEF59D;margin-bottom:0;width:200px;right:10px;">花10个月的钱享12个月服务！</p>
										</div>
									</div></td>
								</tr>
								<tr>
									<td>图表定制</td>
									<td>帮助您实现需要的图表效果（动态语言仅限 php、java、asp.net）</td>
									<td>500-3000 / 张图表</td>
								</tr>
								<tr>
									<td>图表解决方案</td>
									<td>提供综合图表解决方案</td>
									<td>邮件联系</td>
								</tr>
							</table>
							<br>
							<p style="color:#ff0000"><span>注意事项：</span></p>
							<p>收费标准只是一个大概的范围，具体价格需要对你的需求进行评估后确定；</p>
							<p>如果你的项目是商业用途的，请先购买Highcharts商用License，详见 <a href="license.php" target="_blank">License 价格总览</a>。</p>
							
							<h3 class="server_title">立即申请服务</h3>
							
							<a href="http://shang.qq.com/wpa/qunwpa?idkey=bd5b8890391016a233febdeecd056751b02738b25d5b8cd936ab2615c6b5d9a6" class="download" target="_blank"  title="加群联系我们">QQ群：398727163</a>
							<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=sdDV3Njf8dnS2dDDxcKf0t8" class="download success"  target="_blank">Email：admin@hcharts.cn</a>
							<p><br></p>

							<p>
								
								加入QQ群了解详情：398727163 （本群只用于图表定制，请教问题请加学习交流群） 
							</p>
							
						</div>
					</div>
					
					<div class="license">
						<h3 class="li_title">成功案例</h3>
						<div class="li_cont">
							<div class="case">
								<img src="/upload/case1.jpg" style="max-width:900px;">
								<div class="case_tip" style="display:none">
									<div class="case_tip_con">
									<h3>图表生成器</h3>
									<p>通过配置常用的参数生成指定的图表和图片</p>
									<p></p>
									</div>
									<div class="case_tip_bg"></div>
								</div>
							</div>
						<h3 class="server_title">立即申请服务</h3>
							
							<a href="http://shang.qq.com/wpa/qunwpa?idkey=bd5b8890391016a233febdeecd056751b02738b25d5b8cd936ab2615c6b5d9a6" class="download" target="_blank" title="加群联系我们">QQ群：398727163</a>
							<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=sdDV3Njf8dnS2dDDxcKf0t8" class="download success"  target="_blank">Email：admin@hcharts.cn</a>
							<p><br></p>

							<p>
								
								加入QQ群了解详情：398727163 （本群只用于图表定制，请教问题请加学习交流群）
							</p>
						</div>
					</div>
				</div>
			</div>
	</div>
	<?php include("../footer.php"); ?>
	<script>
	$(function () {	
		
		$(".detail").hover(function(){
			$(this).find(".tips").show();
		},function(){
			$(this).find(".tips").hide();
		})

		$(".case").hover(function(){
			$(this).find(".case_tip").slideDown();
		},function(){
			$(this).find(".case_tip").stop(true).slideUp();
		});
	});
	</script>
</body>
</html>
