<?php include "../header-docs.php"; ?>
  <section class="s-content">
    <div class="container">
      <div class="docs-silder">
      	<div class="docs-menu docs-box">
      		<?php include "menu.php"; ?>
      	</div>

      	<!-- <iframe width="100%" height="350" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=350&fansRow=2&ptype=1&speed=0&skin=1&isTitle=0&noborder=1&isWeibo=0&isFans=1&uid=2175683160&verifier=e5e5a67c&dpc=1"></iframe> -->
      </div>
      <div class="docs-content">
      	<h1><?=$d[0]; ?><div class="s-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1428301103402"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div></h1>
		<?=$d[2];?>


		<div class="docs-more">

			<h3>您的支持是作者写作最大的动力！</h3>
			<p>如果您喜欢这个教程，读后觉得收获很大，预期工资涨幅能超过30%，不妨小额赞助一下，让我有动力继续写出高质量的教程。</p>
			<p>请狠狠地点击下面的按钮：</p>
			<a href="/about/donate.php" target="_blank"><button class="btn btn-success btn-large">我要小额赞助</button></a>
		</div>
		<div class="docs-like">
			<h4>喜欢这篇文章？</h4>
			<wb:like appkey="3peB7t"></wb:like>
			<h4>分享给朋友</h4>
			<wb:share-button appkey="2113479283" addition="number" type="button" ralateUid="3933891577"></wb:share-button>
			<div class="docs-nav">
				<?php if($doc!="index") { ?><a class="button success" href="javascript:docsNav('pre')"><i class="icon-arrow-left icon-white"></i>  上一篇</a> <?php } ?>
			<a class="button" href="javascript:docsNav('next')">下一篇  <i class="icon-arrow-right icon-white"></i> </a>

			<a href="/about/donate.php"><div class="docs-donate"></div>
				<h3>赞助作者</h3>
			</div>
			</a>
			<h4>评论</h4>
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
    </div>
  </section>

  <?php include "../footer.php"; ?>
  <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
  	var active = $(".docs-menu").find("[data-href=<?=$doc?>]");
	active.addClass("active");
	var curDl = active.parent();
	curDl.addClass("active");

	function docsNav(where) {
		var index = active.attr("data-index");
		if(where == 'pre') {
			index --;
		} else if(where == "next") {
			index ++;
		}
		console.log(index);
		var target = $(".docs-menu").find("[data-index="+index+"]");
		console.log(target);
		if(target!=null) {
			window.location.href="index.php?doc="+target.attr("data-href");
		}
	}
  </script>
</body>
</html>