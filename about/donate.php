<?php 
  $title = "赞助我们 | ";
  include "../config.php";
  include "../header.php";

  $link = my_mysql_connect();
  $donates = my_mysql_query($link,"select name,money,datetime,url,remark from hc_donate where status = 1 and datetime > '2015-01-01 00:00:00' order by datetime");
  $donate_total = 0;
?>

  
  <section class="s-content">
    <div class="container">
        <div class="s-slider-nav left">
            <ul>
                <li><a href="/about/index.php">关于我们</a></li>
                <li class="active"><a href="/about/donate.php">赞助我们</a></li>
                <li><a href="/about/qun.php">QQ群</a></li>
                <li><a href="/about/links.php">友情链接</a></li>
                <li><a href="/about/contact.php">联系我们</a></li>
            </ul>
            <a href="http://weibo.com/highcharts" target="_blank"><img src="http://static.hcharts.cn//images/weibo_210x60.png" alt="highcharts中文网官方微博" data-bd-imgshare-binded="1"></a>
        </div>
        <div class="s-box s-main left">
            <h1>赞助我们
                <div class="s-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1428301316404"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div></h1>
            <p>中文网由个人开发和维护着，为了减轻服务器等额外成本，让我可以将更多的精力花在网站开发和网站内容更新上，需要大家的帮助和支持。</p>
            <p>如果您认为本网站做的不错，对您的工作带来方便，不妨小额赞助我一下，让我有动力继续完善和更新网站内容。</p>
            <h3>赞助方法</h3>
            <p>通过支付宝付款或微信转账形式给中文网赞助</p>
            <p class="donate-method">支付宝付款：</p>
            <div class="donate-cont">
                <ul>
                    <li>用支付包客户端扫描右侧二维码付款</li>
                    <li style="margin:20px 0;">直接网页付款 <a href="/pay.html" target="_blank" class="button success">赞助我</a></li>
                </ul>
                <br>
                <p class="donate-method">微信扫码付款：</p>
                <p><img src="http://static.hcharts.cn//images/wechat-pay.png" alt="" data-bd-imgshare-binded="1"></p>
            </div>
            <div class="donate-bg"></div>
            <div class="clear"></div>
            <p>赞助后，请将你的赞助信息发给站长（QQ：3027488402），你的赞助信息将展示在本页上</p>
            <h3>赞助用途</h3>
            <ul>
                <li>购买及续费Highcharts中文网服务器</li>
                <li>注册及续费Highcharts中文网域名</li>
                <li>Highcharts中文网日常运营和维护</li>
            </ul>
            <h3>赞助统计</h3>
            <iframe width="100%" height="402" src="http://code.hcharts.cn/hcharts.cn/hhhhu0/result,js,html,css" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
            <h3>赞助列表</h3>
            <table class="datatable light">
                <tbody>
                    <tr class="normal">
                        <th>赞助人</th><th>赞助金额(元)</th><th>赞助留言</th><th>赞助时间</th>
                    </tr>
                    <?php
                        while($donate = mysql_fetch_row($donates)) {
                            $donate_total = $donate_total + floatVal($donate[1]);
                            $donate_name = "";
                            $donate_remark = "无留言";
                        
                            if($donate[3]!=null && $donate[3]!="") {
                                $donate_name = "<a href=\"//$donate[3]\" target=\"_blank\">$donate[0]</a>"; 
                            }
                            else  {
                                $donate_name = $donate[0];
                            }
                            
                            if($donate[4]!="") {
                                $donate_remark = $donate[4];
                            }

                            $donateStr = "<tr>\n\t<td>$donate_name</td><td>$donate[1]</td><td>$donate_remark</td><td>".substr($donate[2],0,10)."</td>\n</tr>";
                            echo $donateStr;
                        }
                    ?>
                </tbody>
            </table>
            <p>感谢以上赞助人，我们会做的更好的！<span style="float:right;color:#BF1813;">赞助总额：1185 元</span></p>
        </div>
    </div>  
  </section>

  <?php include "../footer.php"; ?>
  <!-- 
    这里可以引入其他 js 库文件，例如：
    <script type="text/javascript" src="js/highcharts.js"></script>
  -->
</body>
</html>