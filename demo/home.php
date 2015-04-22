<?php
	$title="Highcharts 演示 | ";
	include "../config.php";
	include "../header.php";
?>
<main class="demo-wrapper">
    <header class="demo_header" id="demo_header_nav">
        <div class="demo_header_container">
            <h1>Highcharts Demos</h1>
            <nav class="demo_header_nav" id="demo_header_nav">
                <a class="tab_selected" href="#">默认样式</a>
                <a class="" href="#">Dark Unica</a>
                <a class="" href="#">Sand Signika</a>
                <a class="" href="#">Grid Light</a>
            </nav>
        </div>
    </header>
    <section class="container demo-section">
        <div class="demo_categories" id="line-charts">
            <h2>Line charts</h2>
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
        <div class="demo_categories" id="area-charts">
            <h2>AREA CHARTS</h2>
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
            <h2>柱状图和条形图 </h2>
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
            <h2>PIE CHARTS</h2>
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
            <h2>3D图表</h2>
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
            <h2>仪表盘</h2>
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
            <h2>HEAT AND TREE MAPS</h2>
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
</main>

<?php	include "../footer.php"	?>
<script type="text/javascript" src="<?=constant('BASEPATH')?>js/jquery.unveil.min.js"></script>
<script type="text/javascript">
$(".lazy-img").unveil();
</script>

</body>
</html>