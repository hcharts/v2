<?php
  $title="Highcharts 演示 | ";
  include "../config.php";
  include "../header.php";
?>
<main class="demo-wrapper">
    <header class="demo_header">
        <div class="demo_header_container">
            <h1>Highcharts Demos</h1>
            <ul class="nav nav-tabs demo_nav" id="theme-tab">
                <li class="active">
                  <a href="#default" data-toggle="tab">default</a>
                </li>
                <li>
                  <a href="#dark-unica" data-toggle="tab">dark-unica</a>
                </li>
                <li>
                  <a href="#sand-signika" data-toggle="tab">sand-signika</a>
                </li>
                <li>
                  <a href="#grid-light" data-toggle="tab">grid-light</a>
                </li>
            </ul>
        </div>
    </header>
  <div class="tab-content">
    <div class="tab-pane active" id="default">
      <section class="container demo-section">
          <div class="demo_categories">
              <h2>线图  <small>（折线图和曲线图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="http://www.highcharts.com/demo/line-basic">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic line" src="/images/lazy-325x255.png" data-src="img/highcharts/default/line-basic-default.svg" style="display: inline-block;">
                              </div>
                              <h3>折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Ajax loaded data, clickable points" src="/images/lazy-325x255.png" data-src="img/highcharts/default/line-ajax-default.svg" style="display: inline-block;">
                              </div>
                              <h3>通过Ajax加载数据，点可以点击</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="With data labels" src="/images/lazy-325x255.png" data-src="img/highcharts/default/line-labels-default.svg" style="display: inline-block;">
                              </div>
                              <h3>带有数据标签的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Time series, zoomable" src="/images/lazy-325x255.png" data-src="img/highcharts/default/line-time-series-default.svg" style="display: inline-block;">
                              </div>
                              <h3>有时间轴，可放大的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/default/spline-inverted-default.svg" style="display: inline-block;">
                              </div>
                              <h3>轴反转的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with symbols" src="/images/lazy-325x255.png" data-src="img/highcharts/default/spline-symbols-default.png" style="display: inline-block;">
                              </div>
                              <h3>带标识的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/default/spline-plot-bands-default.svg" style="display: inline-block;">
                              </div>
                              <h3>有区带的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/default/spline-irregular-time-default.svg" style="display: inline-block;">
                              </div>
                              <h3>时间不连续的轴曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/default/line-log-axis-default.svg" style="display: inline-block;">
                              </div>
                              <h3>对数直线图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories">
              <h2>面积图 <small>（面积图和面积范围图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/area-basic-default.svg" style="display: inline-block;">
                              </div>
                              <h3>面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with negative values" src="/images/lazy-325x255.png" data-src="img/highcharts/default/area-negative-default.svg" style="display: inline-block;">
                              </div>
                              <h3>包含负数的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Stacked area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/area-stacked-default.svg" style="display: inline-block;">
                              </div>
                              <h3>堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Percentage area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/area-stacked-percent-default.svg" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with missing points" src="/images/lazy-325x255.png" data-src="img/highcharts/default/area-missing-default.svg" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/default/area-inverted-default.svg" style="display: inline-block;">
                              </div>
                              <h3>轴反转的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area-spline" src="/images/lazy-325x255.png" data-src="img/highcharts/default/areaspline-default.svg" style="display: inline-block;">
                              </div>
                              <h3>曲线面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range" src="/images/lazy-325x255.png" data-src="img/highcharts/default/arearange-default.svg" style="display: inline-block;">
                              </div>
                              <h3>区域面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range and line" src="/images/lazy-325x255.png" data-src="img/highcharts/default/arearange-line-default.svg" style="display: inline-block;">
                              </div>
                              <h3>区域范围线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Sparkline charts" src="/images/lazy-325x255.png" data-src="img/highcharts/default/sparkline-default.png" style="display: inline-block;">
                              </div>
                              <h3>ASparkline charts</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="column-and-bar-charts">
              <h2>柱形图 <small>（柱状图和条形图）</small> </h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/bar-basic-default.svg" style="display: inline-block;">
                              </div>
                              <h3>条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/bar-stacked-default.svg" style="display: inline-block;">
                              </div>
                              <h3>堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/bar-negative-stack-default.svg" style="display: inline-block;">
                              </div>
                              <h3>正反堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-basic-default.svg" style="display: inline-block;">
                              </div>
                              <h3>柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-negative-default.svg" style="display: inline-block;">
                              </div>
                              <h3>包含负值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-stacked-and-grouped-default.svg" style="display: inline-block;">
                              </div>
                              <h3>分组柱形堆叠图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-stacked-percent-default.svg" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-rotated-labels-default.svg" style="display: inline-block;">
                              </div>
                              <h3>显示值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-drilldown-default.svg" style="display: inline-block;">
                              </div>
                              <h3>Column with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-placement-default.svg" style="display: inline-block;">
                              </div>
                              <h3>Fixed placement columns</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/column-parsed-default.svg" style="display: inline-block;">
                              </div>
                              <h3>在HTML表格中设定的值</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/columnrange-default.svg" style="display: inline-block;">
                              </div>
                              <h3>柱状范围图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="pie-charts">
              <h2>饼图 <small>（饼图、扇形图、环形图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pie-basic-default.svg" style="display: inline-block;">
                              </div>
                              <h3>饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pie-legend-default.svg" style="display: inline-block;">
                              </div>
                              <h3>带图例饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pie-donut-default.svg" style="display: inline-block;">
                              </div>
                              <h3>双饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pie-semi-circle-default.svg" style="display: inline-block;">
                              </div>
                              <h3>半圆环饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pie-drilldown-default.svg" style="display: inline-block;">
                              </div>
                              <h3>Pie with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pie-gradient-default.svg" style="display: inline-block;">
                              </div>
                              <h3>颜色渐变的饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pie-monochrome-default.svg" style="display: inline-block;">
                              </div>
                              <h3>单色调的饼图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="scatter-and-bubble-charts">
              <h2>散点图和气泡图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/scatter-default.svg" style="display: inline-block;">
                              </div>
                              <h3>散点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/bubble-default.svg" style="display: inline-block;">
                              </div>
                              <h3>气泡图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/bubble-3d-default.svg" style="display: inline-block;">
                              </div>
                              <h3>3D气泡图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="dynamic-charts">
              <h2>动态更新</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/dynamic-update-default.svg" style="display: inline-block;">
                              </div>
                              <h3>动态刷新</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/dynamic-click-to-add-default.svg" style="display: inline-block;">
                              </div>
                              <h3>点击鼠标添加点</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/dynamic-master-detail-default.svg" style="display: inline-block;">
                              </div>
                              <h3>Master-detail chart</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="combinations">
              <h2>组合图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/combo-default.svg" style="display: inline-block;">
                              </div>
                              <h3>柱状图，折线图和饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/combo-dual-axes-default.svg" style="display: inline-block;">
                              </div>
                              <h3>两个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/combo-multi-axes-default.svg" style="display: inline-block;">
                              </div>
                              <h3>多个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/combo-regression-default.svg" style="display: inline-block;">
                              </div>
                              <h3>线性回归图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/combo-meteogram-default.png" style="display: inline-block;">
                              </div>
                              <h3>天气现象图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/combo-timeline-default.svg" style="display: inline-block;">
                              </div>
                              <h3>高端时间线</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="3d-charts">
              <h2>3D 图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/3d-column-interactive-default.svg" style="display: inline-block;">
                              </div>
                              <h3>3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/3d-column-null-values-default.svg" style="display: inline-block;">
                              </div>
                              <h3>包含空值的3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/3d-column-stacking-grouping-default.svg" style="display: inline-block;">
                              </div>
                              <h3>分组堆叠3D图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/3d-pie-default.svg" style="display: inline-block;">
                              </div>
                              <h3>3D pie</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/3d-pie-donut-default.svg" style="display: inline-block;">
                              </div>
                              <h3>3D饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/3d-scatter-draggable-default.svg" style="display: inline-block;">
                              </div>
                              <h3>可调整视角的3D散点图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="gauges">
              <h2>仪表图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/gauge-speedometer-default.svg" style="display: inline-block;">
                              </div>
                              <h3>速度计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/gauge-solid-default.png" style="display: inline-block;">
                              </div>
                              <h3>实体计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/gauge-clock-default.svg" style="display: inline-block;">
                              </div>
                              <h3>时钟</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/gauge-dual-default.svg" style="display: inline-block;">
                              </div>
                              <h3>双刻度仪表盘</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/gauge-vu-meter-default.svg" style="display: inline-block;">
                              </div>
                              <h3>伏-压图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="heat-and-tree-maps">
              <h2>热力图 <small>（热力图、Tree Map）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/heatmap-default.svg" style="display: inline-block;">
                              </div>
                              <h3>热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/heatmap-canvas-default.png" style="display: inline-block;">
                              </div>
                              <h3>巨型热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/treemap-coloraxis-default.svg" style="display: inline-block;">
                              </div>
                              <h3>带有颜色轴的树形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/treemap-large-dataset-default.svg" style="display: inline-block;">
                              </div>
                              <h3>巨型树形图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="more-chart-types">
              <h2>更多其它图表</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/polar-default.svg" style="display: inline-block;">
                              </div>
                              <h3>极地图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/polar-spider-default.svg" style="display: inline-block;">
                              </div>
                              <h3>极地蛛网图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/polar-wind-rose-default.svg" style="display: inline-block;">
                              </div>
                              <h3>极性风向图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/box-plot-default.svg" style="display: inline-block;">
                              </div>
                              <h3>箱线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/error-bar-default.svg" style="display: inline-block;">
                              </div>
                              <h3>错误条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/waterfall-default.svg" style="display: inline-block;">
                              </div>
                              <h3>瀑布图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/funnel-default.svg" style="display: inline-block;">
                              </div>
                              <h3>漏斗图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/pyramid-default.svg" style="display: inline-block;">
                              </div>
                              <h3>金字塔图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/polygon-default.svg" style="display: inline-block;">
                              </div>
                              <h3>多边形系列</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/default/renderer-default.svg" style="display: inline-block;">
                              </div>
                              <h3>渲染图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
      </section>
    </div>
    <div class="tab-pane" id="dark-unica">
       <section class="container demo-section">
          <div class="demo_categories" id="line-charts">
              <h2>线图  <small>（折线图和曲线图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="http://www.highcharts.com/demo/line-basic">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic line" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/line-basic-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Ajax loaded data, clickable points" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/line-ajax-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>通过Ajax加载数据，点可以点击</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="With data labels" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/line-labels-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>带有数据标签的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Time series, zoomable" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/line-time-series-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>有时间轴，可放大的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/spline-inverted-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>轴反转的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with symbols" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/spline-symbols-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>带标识的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/spline-plot-bands-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>有区带的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/spline-irregular-time-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>时间不连续的轴曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/line-log-axis-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>对数直线图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="area-charts">
              <h2>面积图 <small>（面积图和面积范围图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/area-basic-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with negative values" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/area-negative-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>包含负数的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Stacked area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/area-stacked-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Percentage area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/area-stacked-percent-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with missing points" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/area-missing-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/area-inverted-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>轴反转的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area-spline" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/areaspline-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>曲线面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/arearange-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>区域面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range and line" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/arearange-line-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>区域范围线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Sparkline charts" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/sparkline-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>ASparkline charts</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="column-and-bar-charts">
              <h2>柱形图 <small>（柱状图和条形图）</small> </h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/bar-basic-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/bar-stacked-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/bar-negative-stack-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>正反堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-basic-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-negative-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>包含负值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-stacked-and-grouped-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>分组柱形堆叠图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-stacked-percent-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-rotated-labels-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>显示值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-drilldown-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>Column with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-placement-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>Fixed placement columns</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/column-parsed-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>在HTML表格中设定的值</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/columnrange-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>柱状范围图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="pie-charts">
              <h2>饼图 <small>（饼图、扇形图、环形图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pie-basic-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pie-legend-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>带图例饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pie-donut-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>双饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pie-semi-circle-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>半圆环饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pie-drilldown-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>Pie with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pie-gradient-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>颜色渐变的饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pie-monochrome-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>单色调的饼图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="scatter-and-bubble-charts">
              <h2>散点图和气泡图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/scatter-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>散点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/bubble-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>气泡图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/bubble-3d-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>3D气泡图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="dynamic-charts">
              <h2>动态更新</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/dynamic-update-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>动态刷新</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/dynamic-click-to-add-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>点击鼠标添加点</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/dynamic-master-detail-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>Master-detail chart</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="combinations">
              <h2>组合图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/combo-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>柱状图，折线图和饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/combo-dual-axes-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>两个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/combo-multi-axes-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>多个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/combo-regression-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>线性回归图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/combo-meteogram-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>天气现象图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/combo-timeline-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>高端时间线</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="3d-charts">
              <h2>3D 图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/3d-column-interactive-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/3d-column-null-values-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>包含空值的3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/3d-column-stacking-grouping-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>分组堆叠3D图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/3d-pie-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>3D pie</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/3d-pie-donut-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>3D饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/3d-scatter-draggable-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>可调整视角的3D散点图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="gauges">
              <h2>仪表图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/gauge-speedometer-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>速度计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/gauge-solid-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>实体计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/gauge-clock-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>时钟</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/gauge-dual-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>双刻度仪表盘</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/gauge-vu-meter-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>伏-压图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="heat-and-tree-maps">
              <h2>热力图 <small>（热力图、Tree Map）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/heatmap-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/heatmap-canvas-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>巨型热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/treemap-coloraxis-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>带有颜色轴的树形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/treemap-large-dataset-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>巨型树形图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="more-chart-types">
              <h2>更多其它图表</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/polar-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>极地图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/polar-spider-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>极地蛛网图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/polar-wind-rose-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>极性风向图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/box-plot-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>箱线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/error-bar-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>错误条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/waterfall-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>瀑布图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/funnel-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>漏斗图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/pyramid-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>金字塔图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/polygon-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>多边形系列</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/dark-unica/renderer-dark-unica.png" style="display: inline-block;">
                              </div>
                              <h3>渲染图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
      </section>
    </div>
    <div class="tab-pane" id="sand-signika">
      <section class="container demo-section">
          <div class="demo_categories" id="line-charts">
              <h2>线图  <small>（折线图和曲线图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="http://www.highcharts.com/demo/line-basic">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic line" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/line-basic-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Ajax loaded data, clickable points" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/line-ajax-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>通过Ajax加载数据，点可以点击</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="With data labels" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/line-labels-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>带有数据标签的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Time series, zoomable" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/line-time-series-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>有时间轴，可放大的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/spline-inverted-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>轴反转的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with symbols" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/spline-symbols-sand-signika.png" style="display: inline-block;">
                              </div>
                              <h3>带标识的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/spline-plot-bands-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>有区带的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/spline-irregular-time-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>时间不连续的轴曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/line-log-axis-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>对数直线图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="area-charts">
              <h2>面积图 <small>（面积图和面积范围图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/area-basic-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with negative values" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/area-negative-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>包含负数的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Stacked area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/area-stacked-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Percentage area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/area-stacked-percent-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with missing points" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/area-missing-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/area-inverted-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>轴反转的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area-spline" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/areaspline-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>曲线面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/arearange-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>区域面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range and line" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/arearange-line-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>区域范围线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Sparkline charts" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/sparkline-sand-signika.png" style="display: inline-block;">
                              </div>
                              <h3>ASparkline charts</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="column-and-bar-charts">
              <h2>柱形图 <small>（柱状图和条形图）</small> </h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/bar-basic-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/bar-stacked-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/bar-negative-stack-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>正反堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-basic-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-negative-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>包含负值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-stacked-and-grouped-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>分组柱形堆叠图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-stacked-percent-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-rotated-labels-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>显示值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-drilldown-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>Column with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-placement-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>Fixed placement columns</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/column-parsed-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>在HTML表格中设定的值</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/columnrange-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>柱状范围图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="pie-charts">
              <h2>饼图 <small>（饼图、扇形图、环形图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pie-basic-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pie-legend-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>带图例饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pie-donut-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>双饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pie-semi-circle-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>半圆环饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pie-drilldown-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>Pie with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pie-gradient-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>颜色渐变的饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pie-monochrome-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>单色调的饼图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="scatter-and-bubble-charts">
              <h2>散点图和气泡图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/scatter-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>散点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/bubble-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>气泡图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/bubble-3d-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>3D气泡图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="dynamic-charts">
              <h2>动态更新</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/dynamic-update-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>动态刷新</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/dynamic-click-to-add-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>点击鼠标添加点</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/dynamic-master-detail-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>Master-detail chart</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="combinations">
              <h2>组合图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/combo-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>柱状图，折线图和饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/combo-dual-axes-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>两个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/combo-multi-axes-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>多个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/combo-regression-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>线性回归图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/combo-meteogram-sand-signika.png" style="display: inline-block;">
                              </div>
                              <h3>天气现象图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/combo-timeline-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>高端时间线</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="3d-charts">
              <h2>3D 图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/3d-column-interactive-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/3d-column-null-values-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>包含空值的3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/3d-column-stacking-grouping-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>分组堆叠3D图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/3d-pie-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>3D pie</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/3d-pie-donut-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>3D饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/3d-scatter-draggable-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>可调整视角的3D散点图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="gauges">
              <h2>仪表图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/gauge-speedometer-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>速度计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/gauge-solid-sand-signika.png" style="display: inline-block;">
                              </div>
                              <h3>实体计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/gauge-clock-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>时钟</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/gauge-dual-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>双刻度仪表盘</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/gauge-vu-meter-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>伏-压图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="heat-and-tree-maps">
              <h2>热力图 <small>（热力图、Tree Map）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/heatmap-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/heatmap-canvas-sand-signika.png" style="display: inline-block;">
                              </div>
                              <h3>巨型热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/treemap-coloraxis-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>带有颜色轴的树形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/treemap-large-dataset-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>巨型树形图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="more-chart-types">
              <h2>更多其它图表</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/polar-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>极地图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/polar-spider-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>极地蛛网图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/polar-wind-rose-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>极性风向图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/box-plot-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>箱线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/error-bar-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>错误条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/waterfall-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>瀑布图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/funnel-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>漏斗图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/pyramid-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>金字塔图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/polygon-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>多边形系列</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/sand-signika/renderer-sand-signika.svg" style="display: inline-block;">
                              </div>
                              <h3>渲染图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
      </section>
    </div>
    <div class="tab-pane" id="grid-light">
      <section class="container demo-section">
          <div class="demo_categories" id="line-charts">
              <h2>线图  <small>（折线图和曲线图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="http://www.highcharts.com/demo/line-basic">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic line" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/line-basic-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Ajax loaded data, clickable points" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/line-ajax-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>通过Ajax加载数据，点可以点击</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="With data labels" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/line-labels-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>带有数据标签的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Time series, zoomable" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/line-time-series-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>有时间轴，可放大的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/spline-inverted-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>轴反转的折线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with symbols" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/spline-symbols-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>带标识的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/spline-plot-bands-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>有区带的曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/spline-irregular-time-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>时间不连续的轴曲线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Spline with plot bands" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/line-log-axis-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>对数直线图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="area-charts">
              <h2>面积图 <small>（面积图和面积范围图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/area-basic-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with negative values" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/area-negative-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>包含负数的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Stacked area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/area-stacked-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Percentage area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/area-stacked-percent-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area with missing points" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/area-missing-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Inverted axes" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/area-inverted-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>轴反转的面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area-spline" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/areaspline-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>曲线面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/arearange-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>区域面积图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Area range and line" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/arearange-line-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>区域范围线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Sparkline charts" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/sparkline-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>ASparkline charts</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="column-and-bar-charts">
              <h2>柱形图 <small>（柱状图和条形图）</small> </h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/bar-basic-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/bar-stacked-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/bar-negative-stack-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>正反堆叠条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-basic-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-negative-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>包含负值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-stacked-and-grouped-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>分组柱形堆叠图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-stacked-percent-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>百分比堆栈柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-rotated-labels-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>显示值的柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-drilldown-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>Column with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-placement-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>Fixed placement columns</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/column-parsed-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>在HTML表格中设定的值</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/columnrange-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>柱状范围图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="pie-charts">
              <h2>饼图 <small>（饼图、扇形图、环形图）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pie-basic-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pie-legend-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>带图例饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pie-donut-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>双饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pie-semi-circle-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>半圆环饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pie-drilldown-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>Pie with drilldown</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pie-gradient-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>颜色渐变的饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pie-monochrome-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>单色调的饼图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="scatter-and-bubble-charts">
              <h2>散点图和气泡图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/scatter-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>散点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/bubble-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>气泡图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/bubble-3d-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>3D气泡图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="dynamic-charts">
              <h2>动态更新</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/dynamic-update-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>动态刷新</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/dynamic-click-to-add-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>点击鼠标添加点</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/dynamic-master-detail-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>Master-detail chart</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="combinations">
              <h2>组合图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/combo-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>柱状图，折线图和饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/combo-dual-axes-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>两个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/combo-multi-axes-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>多个(Y)轴的混合图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/combo-regression-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>线性回归图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/combo-meteogram-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>天气现象图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/combo-timeline-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>高端时间线</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="3d-charts">
              <h2>3D 图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/3d-column-interactive-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/3d-column-null-values-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>包含空值的3D柱状图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/3d-column-stacking-grouping-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>分组堆叠3D图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/3d-pie-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>3D pie</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/3d-pie-donut-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>3D饼图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/3d-scatter-draggable-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>可调整视角的3D散点图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="gauges">
              <h2>仪表图</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/gauge-speedometer-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>速度计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/gauge-solid-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>实体计</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/gauge-clock-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>时钟</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/gauge-dual-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>双刻度仪表盘</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/gauge-vu-meter-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>伏-压图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="heat-and-tree-maps">
              <h2>热力图 <small>（热力图、Tree Map）</small></h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/heatmap-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/heatmap-canvas-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>巨型热点图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/treemap-coloraxis-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>带有颜色轴的树形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/treemap-large-dataset-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>巨型树形图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="demo_categories" id="more-chart-types">
              <h2>更多其它图表</h2>
              <ul class="demos_default_ul">
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/polar-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>极地图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/polar-spider-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>极地蛛网图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/polar-wind-rose-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>极性风向图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/box-plot-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>箱线图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/error-bar-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>错误条形图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/waterfall-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>瀑布图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/funnel-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>漏斗图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/pyramid-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>金字塔图</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/polygon-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>多边形系列</h3>
                          </a>
                      </div>
                  </li>
                  <li class="demo-list-container">
                      <div class="demo-container">
                          <a href="#">
                              <div class="image-container">
                                  <img class="lazy-img" alt="Basic area" src="/images/lazy-325x255.png" data-src="img/highcharts/grid-light/renderer-grid-light.png" style="display: inline-block;">
                              </div>
                              <h3>渲染图</h3>
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
      </section>
    </div>
  </div>

</main>

<?php include "../footer.php" ?>
<script type="text/javascript" src="<?=constant('BASEPATH')?>js/jquery.unveil.min.js"></script>
<script type="text/javascript" src="<?=constant('BASEPATH)'?>js/demo.js"></script>
</body>
</html>