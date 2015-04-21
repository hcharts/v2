<?php
  $title="Highcharts 演示 | ";
  include "../config.php";
  include "../header.php";
?>


<section class="demo_nav">
  <div class="container">
    <ul>
      <li class="active">默认主题</li>
      <li>Dark Unica</li>
      <li>Sand Signika</li>
      <li>Grid Light</li>
    </ul>
  </div>
</section>

<section class="main">
  <div class="container">
    <div class="demo_categories">
      <h2>线图</h2>

        <ul class="demos_default_ul">
          <li class="demo-list-container">
            <div class="demo-container">
              <a href="http://www.highcharts.com/demo/line-basic">
                <div class="image-container">
                  <img alt="Basic line" src="img/highcharts/line-chart/defaults/line-basic-default.svg" style="display: inline-block;">
                </div>
                <h3>折线图</h3>
              </a>
            </div>
          </li>
          <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="Ajax loaded data, clickable points" src="img/highcharts/line-chart/defaults/line-ajax-default.svg" style="display: inline-block;">
              </div>
              <h3>通过Ajax加载数据，点可以点击</h3>
            </a>
          </div>
        </li>
        <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="With data labels" src="img/highcharts/line-chart/defaults/line-labels-default.svg" style="display: inline-block;">
              </div>
              <h3>带有数据标签的折线图</h3>
            </a>
          </div>
        </li>
        <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="Time series, zoomable" src="img/highcharts/line-chart/defaults/line-time-series-default.svg" style="display: inline-block;">
              </div>
              <h3>有时间轴，可放大的折线图</h3>
            </a>
          </div>
        </li>
        <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="Spline with inverted axes" src="img/highcharts/line-chart/defaults/spline-inverted-default.svg" style="display: inline-block;">
              </div>
              <h3>轴反转的折线图</h3>
            </a>
          </div>
        </li>
        <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="Spline with symbols" src="img/highcharts/line-chart/defaults/spline-symbols-default.png" style="display: inline-block;">
              </div>
              <h3>带标识的曲线图</h3>
            </a>
          </div>
        </li>
        <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="Spline with plot bands" src="img/highcharts/line-chart/defaults/spline-plot-bands-default.svg" style="display: inline-block;">
              </div>
              <h3>有区带的曲线图</h3>
            </a>
          </div>
        </li>
        <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="Spline with plot bands" src="img/highcharts/line-chart/defaults/spline-irregular-time-default.svg" style="display: inline-block;">
              </div>
              <h3>时间不连续的轴曲线图</h3>
            </a>
          </div>
        </li>
        <li class="demo-list-container">
          <div class="demo-container">
            <a href="#">
              <div class="image-container">
                <img alt="Spline with plot bands" src="img/highcharts/line-chart/defaults/line-log-axis-default.svg" style="display: inline-block;">
              </div>
              <h3>对数直线图</h3>
            </a>
          </div>
        </li>
      </ul>
  </div>
</div>
</section>

<?php include "../footer.php"; ?>

</body>
</html>