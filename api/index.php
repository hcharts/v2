<?php
  $title = "中文 API | ";
  include "../config.php";
  include "../header.php";
?>
  <div id="api-wrapper">
    <div id="nav-wrap">
        <div id="nav">
            <a href="index.php" style="position:absolute;">返回文档首页</a>
            <div class="ui-widget" id="search-div">
                <input id="search" placeholder="搜索很强大哦，不信试试？" />
            </div>
            <!-- <div class="follow_us">
          <span>关注我们获取最新动态：</span><wb:follow-button uid="3933891577" type="red_2" width="136" height="24" ></wb:follow-button>
        </div> -->
            <div class="nav-section">
                <h3 id="options-header">配置选项</h3>
                <div id="global-options-tree">
                    * 全局配置
                    <br>
                    <code>Highcharts.setOptions({</code>
                    <div id="global-options" class="tree"></div>
                    <code>});</code>
                </div>
                <br>
                <div id="options-tree">
                    <code>$("#container").highcharts({</code>
                    <div id="options" class="tree"></div>
                    <code>});</code>
                </div>
            </div>
            <div class="nav-section">
                <h3>Highcharts函数</h3>
                <p class="subheader"></p>
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
                    <h3>Highcharts 基本组成<small style="font-size:12px;float:right;font-weight:normal">hc api 2.0.1 for Highcharts 4.0.4 ；最后更新时间：2015-01-14 23:13:24，感谢<a href="http://www.hcharts.cn/api/api-team.html" target="_blank">API 翻译团队</a></small></h3>
                    <div class="apiAbout">
                        <img class="anatomy" src="http://static.hcharts.cn/images/hc-anatomy.png" width="600px" height="388px" alt="Highcharts基本组成部分" title="Highcharts基本组成部分">
                        <div class="apiInfo">
                            <a href="/about/donate.php" target="_blank">赞助我们</a> \ <a href="/api-team.html" target="_blank">加入翻译团队</a> \ <a href="/about/index.php#contact" target="_blank">联系站长</a>
                            <br>
                            <a href="http://weibo.com/highcharts" target="_blank"><img class="apiWeibo" src="http://static.hcharts.cn/images/weibo_210x60.png"></a>
                            <div class="apiTuijian">
                                <script type="text/javascript">
                                var cpro_id = "u1942541";
                                </script>
                                <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <h3>名词解释</h3>
                    <tr>
                        <th width="100px">英文名</th>
                        <th width="100px">中文名</th>
                        <th width="500px">描述</th>
                        <th>更多</th>
                    </tr>
                    <tr>
                        <td class="entry">lang</td>
                        <td>语言文字对象</td>
                        <td>所有Highcharts文字相关的设置</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">chart</td>
                        <td>图表</td>
                        <td>图表区、图形区和通用图表配置选项</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">colors</td>
                        <td>颜色</td>
                        <td>图表数据列颜色配置，是一个颜色数组</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">credits</td>
                        <td>版权信息</td>
                        <td>Highcharts在图表的右下方放置的版权信息及链</td>
                        <td><a href="http://www.hcharts.cn/docs/index.php?doc=basic-credits" target="_blank">查看教程</a></td>
                    </tr>
                    <tr>
                        <td class="entry">drilldown</td>
                        <td>向下钻取</td>
                        <td>向下钻取数据，深入到其中的具体数据</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">exporting</td>
                        <td>导出模块</td>
                        <td>导出功能配置，导出即将图表下载为图片或打印图表</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">labels</td>
                        <td>标签</td>
                        <td>可以放置到图表区域内任何位置的HTML标签</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">legend</td>
                        <td>图例</td>
                        <td>用不同形状、颜色、文字等 标示不同数据列，通过点击标示可以显示或隐藏该数据列</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">loading</td>
                        <td>加载中</td>
                        <td>加载选项控制覆盖绘图区的加载屏的外观和文字</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">navigation</td>
                        <td>导航</td>
                        <td>导出模块按钮和菜单配置选项组</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">noData</td>
                        <td>没有数据</td>
                        <td>没有数据时显示的内容</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">pane</td>
                        <td>分块</td>
                        <td>针对仪表图和雷达图专用的配置，主要设置弧度及背景色</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">plotOptions</td>
                        <td>数据点配置</td>
                        <td>针对不同类型图表的配置。Highcharts所有图表类型请看下表</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">series</td>
                        <td>数据列</td>
                        <td>图表上一个或多个数据系列，比如图表中的一条曲线，一个柱形</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">title</td>
                        <td>标题</td>
                        <td>包括即标题和副标题，其中副标题为非必须的</td>
                        <td><a href="http://www.hcharts.cn/docs/index.php?doc=basic-title" target="_blank">查看教程</a></td>
                    </tr>
                    <tr>
                        <td class="entry">tooltip</td>
                        <td>数据点提示框</td>
                        <td>当鼠标滑过某点时，以框的形式提示改点的数据，比如该点的值，数据单位等</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">Axis</td>
                        <td>坐标轴</td>
                        <td>包括x轴和y轴。多个不同的数据列可共用同一个X轴或Y轴，当然，还可以有两个X轴或Y轴，分别显示在图表的上下或左右。</td>
                        <td><a href="http://www.hcharts.cn/docs/index.php?doc=basic-axis" target="_blank">查看教程</a></td>
                    </tr>
                </table>
                <br>
                <table class="datatable">
                    <h3>图表类型</h3>
                    <tr>
                        <th width="200px">英文名</th>
                        <th width="200px">中文名</th>
                        <th>更多</th>
                    </tr>
                    <tr>
                        <td class="entry">line</td>
                        <td>直线图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">spline</td>
                        <td>曲线图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">area</td>
                        <td>面积图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">areaspline</td>
                        <td>曲线面积图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">arearange</td>
                        <td>面积范围图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">areasplinerange</td>
                        <td>曲线面积范围图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">column</td>
                        <td>柱状图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">columnrange</td>
                        <td>柱状范围图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">bar</td>
                        <td>条形图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">pie</td>
                        <td>饼图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">scatter</td>
                        <td>散点图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">boxplot</td>
                        <td>箱线图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">bubble</td>
                        <td>气泡图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">errorbar</td>
                        <td>误差线图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">funnel</td>
                        <td>漏斗图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">gauge</td>
                        <td>仪表图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">waterfall</td>
                        <td>瀑布图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">polar</td>
                        <td>雷达图</td>
                        <td>查看教程</td>
                    </tr>
                    <tr>
                        <td class="entry">pyramid</td>
                        <td>金字塔</td>
                        <td>查看教程</td>
                    </tr>
                </table>
                <br>
                <h3>版本信息</h3>
                <p class="apiCopy">hc api 2.0.1 for Highcharts 4.0.4 ；最后更新时间：2015-01-14 23:13:14，感谢<a href="http://www.hcharts.cn/api/api-team.html" target="_blank">API 翻译团队</a>
                   </p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
  </div>

  <?php include "../footer.php"; ?>


  <script type="text/javascript" src="<?=constant('BASEPATH')?>js/jquery-ui.js"></script>
  <script type="text/javascript">
    var RESOURCE = "";
    var PRODUCTNAME = "json";
    var temp = "";
    var temp2 = 0;

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
      })
    });
  </script>
  <script src="<?=constant('BASEPATH')?>js/new.js" type="text/javascript"></script>

</body>
</html>