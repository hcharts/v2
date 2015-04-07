<?php 
  $title = "更新日志 | ";
  include "../config.php";
  include "../header.php";
?>
	<div class="s">

	<div class="s-content">
		<div class="container">
			
					<div class="s-box s-main left">
						<h1>更新日志
							<div class="s-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1425290962424"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
							</div>
						</h1>
<p>查看 <a href="#highcharts">Highcharts</a>, <a href="#highstock">Highstock</a>, <a href="#highmaps">Highmaps</a> 更新日志。到 <a href="/product/download.php">下载</a> 页面获取最新版本。</p>
<h3 id="highcharts">Highcharts Basic</h3>

<p>Version 4.1.3 (2015-02-27)</p>
<ul>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3900">#3900</a>, duplicated Y axis in exported charts. Made export module more testable so it would have caught this error.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3898">#3898</a>, zones incorrectly applied if outside axis range.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3895">#3895</a>, error in title setter when setting a non-string value.</li>
</ul>
<p>Version 4.1.2 (2015-02-27)</p>
<ul>
<li>Added new option to tree maps: interactByLeaf</li>
<li>Added new dataLabel option, shape, in order to allow callouts and connectors on data labels.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3567">#3567</a>, Safari failed at exporting charts with images.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3898">#3898</a>, zones incorrectly applied if outside axis range.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3895">#3895</a>, JS error when setting element title to a non-string value.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3886">#3886</a>, wrong rendering of waterfall with a non-zero Y axis minimum.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3873">#3873</a>, series.points array order was modified when building the k-d tree.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3866">#3866</a>, data labels not re-appearing in remaining series after hiding another series.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3875">#3875</a>, eternal loop and crash in Chrome when using minorTickInterval on an axis with very close data points.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3842">#3842</a> and <a href="https://github.com/highslide-software/highcharts.com/issues/3872">#3872</a>, data labels with text shadow are mispositioned in Firefox and modern IE.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3849">#3849</a>, duplicated text on data labels in export. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3864">#3864</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3868">#3868</a>, setData broke tooltip.</li>
<li>Fixed issue with tooltip not hiding after hiding a series from a floating legend.</li>
<li>Hide tooltip on mouse leaving the plot area, also when a hoverSeries is not defined.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3860">#3860</a>, a regression causing onMouseOver event not to work on line series.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3856">#3856</a>, shared tooltip in polar charts.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3863">#3863</a>, pointer with data grouping and addSeries.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3844">#3844</a>, colorByPoint not working on tree maps.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2202">#2202</a>, chartOptions.xAxis options not added in export.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3852">#3852</a>, a regression causing logarithmic axis on gauges to fail.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3845">#3845</a>, problems with addPoint on 3D pies.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3841">#3841</a>, 3d column layering issue.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3793">#3793</a>, charts with huge numbers fail at Number.toFixed.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3841">#3841</a>, issue with multiple columns in 3d.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3830">#3830</a>, point names in category axis were lost after Axis.update.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3836">#3836</a>, a regression causing plot band labels to always be visible.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3840">#3840</a>, isIntermediateSum miscalculation.</li>
<li>Fixed drilldown issue with labels having both drilldown and static points.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3839">#3839</a>, a regression causing columns not to be clipped while animating in.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3837">#3837</a>, too aggressive data label collision detection in heat maps.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3834">#3834</a>, crosshair drawn incorrectly on dynamically added yAxes.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3806">#3806</a>, JS errors on clicking on non-drillable axis label after drilldown.</li>
</ul>
<p>Version 4.1.1 (2015-02-17)</p>
<ul>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3826">#3826</a>, a 4.1 regression causing markers to be clipped after setSize.</li>
</ul>
<p>Version 4.1.0 (2015-02-16)</p>
<ul>
<li>Added <a href="http://api.highcharts.com/#plotOptions.polygon">polygon</a> series type</li>
<li>Added <code>e.category</code> event argument in drilldown events to make it clear when a category is clicked. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/3771">#3771</a>.</li>
<li>Added new option to the data module, <a href="http://api.highcharts.com/#data.firstRowAsNames">firstRowAsNames</a>.</li>
<li>Added new option, <a href="http://api.highcharts.com/#plotOptions.series.pointIntervalUnit">pointIntervalUnit</a>, in order to allow months and years as point intervals. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3329">#3329</a>.</li>
<li>Added <a href="http://api.highcharts.com/#chart.events.beforePrint">beforePrint</a> and <a href="http://api.highcharts.com/#chart.events.afterPrint">afterPrint</a> events. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/2284">#2284</a> and <a href="https://github.com/highslide-software/highcharts.com/issues/3729">#3729</a>.</li>
<li>Added new method, <a href="http://api.highcharts.com/#Series.removePoint">Series.removePoint</a>, to allow removing points that are not instanciated on demand.</li>
<li>Added new option, global.getTimezoneOffset, to allow integration with third party timezone libraries like moment-timezone.js.</li>
<li>Added new Axis option, <a href="http://api.highcharts.com/#yAxis.tickAmount">tickAmount</a>. Refactored alignTicks on multi-axis charts to first compute a tickAmount, then make all axes comply with that.</li>
<li>Added new Axis option, <a href="http://api.highcharts.com/#xAxis.labels.autoRotation">autoRotation</a> as an array of possible values.</li>
<li>Added new callback option, <a href="http://api.highcharts.com/#tooltip.pointFormatter">tooltip.pointFormatter</a>.</li>
<li>Added polar support for arearange. Issue <a href="https://github.com/highslide-software/highcharts.com/issues/3419">#3419</a>.</li>
<li>In solid gauges, added support for initial animation as well as setting animation object for updates. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3135">#3135</a>.</li>
<li>Made the entire numberFormat method settable and wrappable from the outside.</li>
<li>Made tooltip.followTouchMove true by default, and allowed page scroll at the same time.</li>
<li>Implemented support for "contrast" color setting in data labels. When the data label is inside a shape (like a column), this will ensure the best readability.</li>
<li>On category axes, let the crosshair width cover the whole category like a band.</li>
<li>Refactored zIndex handling on SVGElements so that the zIndex can also be modified after the element is first added.</li>
<li>Changed the Axis.tickPositioner callback so that the default tick positioning logic runs first, to allow modification in the tick positioner instead of creating positions from scratch. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3538">#3538</a>.</li>
<li>Made the legend draw below or above the plot area in cases where it is placed in a corner and the layout is horizontal.</li>
<li>Implemented algorithm for setting precise tooltip xDateFormat when needed, but general format like year, month, day etc. when the time falls on midnight and the closest point range dictates it. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/3329">#3329</a>.</li>
<li>New default behaviour for the xAxis.minTickInterval option on datetime axis. It now goes to the closest point range by default.</li>
<li>Implemented silent degradation instead of error 19 when user options dictate too many ticks on an axis.</li>
<li>Removed overflow:justify logic. Instead, move labels and add ellipsis in case of overflow.</li>
<li>Export server: Adapted to PhantomJS 2</li>
<li>Export server: Implemented XSS filter</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3778">#3778</a>, redundant legend paging visible after redraw</li>
<li>Fixed error on applying stacking to area range series.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3743">#3743</a>, minor ticks rendered outside plot area</li>
<li>Partly fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3506">#3506</a>, overlapping axis labels on polar chart</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3728">#3728</a>, Point.update not updating category name.</li>
<li>Fixed waterfall issue where the upColor stayed after updating point to negative. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/3710">#3710</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3724">#3724</a>, JS error on preventing the selection event and running setExtremes immediately.</li>
<li>Don't allow decimals on yearly X axis.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3197">#3197</a>, drilldown with hidden series.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3719">#3719</a>, updating areaspline to area failed</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3703">#3703</a>, show no-data message on hidden series also.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3679">#3679</a>, no-data label not realigning after showing hidden container.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3710">#3710</a>, update point did not update sum in waterfalls.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3712">#3712</a>, checkboxClick not handled for pie charts.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3708">#3708</a>, color disappearing on redraw of solid gauge.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3702">#3702</a>, JS error when running setData on a hidden series</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3670">#3670</a>, funnel ignored point specific border settings on init.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3648">#3648</a>, data label posision for column incorrect when using custom positioned Y axis in inverted chart.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3654">#3654</a>, millisecond ticks not placed correctly</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3652">#3652</a>, minor grid lines sometimes rendering outside the plot area to the right.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3201">#3201</a>, crashes when zooming too far in on a dashed series.</li>
<li>Fixed data module issue with blank chart when using forced categories with data longer than turboThreshold.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3635">#3635</a>, markers overlapping in cases where they should not, according to the default behaviour.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2361">#2361</a>, plot bands disappearing under certain conditions when zooming in so that parts are clipped.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3636">#3636</a>, negative colors not applied on hover.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3623">#3623</a>, negative values in pies causing bad drawing after running setData.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3575">#3575</a>, huge columns not rendering on Chrome.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3608">#3608</a>, reversed Y axis in gauges causing arcs to be drawn inside out.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3600">#3600</a>, errors raised in modules when a chart was destroyed in its own callback.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3346">#3346</a>, tooltip failed for two Y axes side by side.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3579">#3579</a>, mixed up levels in multidimensional drilldown.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3569">#3569</a>, reset zoom button disappeared after multiple zoom operations in empty area.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3390">#3390</a>, single heatmap point getting huge size and causing rendering defects. Better axis metrics for single points. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2515">#2515</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3544">#3544</a>, drilling up failed when top series data was added dynamically.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3536">#3536</a>, implemented error message on wrong color definitions in heat maps.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3525">#3525</a>, error 12 in master-detail demo.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3295">#3295</a> and <a href="https://github.com/highslide-software/highcharts.com/issues/3514">#3514</a> label box not rendered correctly with 0 values.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3507">#3507</a>, fixed width tooltip with a single word on the last line was clipped horizontally.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3501">#3501</a>, long axis labels taking up too much space instead of wrapping in drilldown charts.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3500">#3500</a>, monthly and yearly X axis ticks having the wrong distribution when using timezoneOffset.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3449">#3449</a>, export menu not working on touch devices when zoomType was set.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3391">#3391</a>, halo not hidden on hiding a pie slice from legend</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2889">#2889</a>, tooltip not displayed on line series when followPointer was true. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3258">#3258</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3176">#3176</a>, updating gauge axis caused background to disappear.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2919">#2919</a>, errors and wrong behaviours on multi-level drilldown.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3445">#3445</a>, pie charts showing wrong bullet color in tooltip.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2919">#2919</a>, errors on drilldown with multiple axes.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2912">#2912</a>, JS error on drawing hidden waterfall</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3437">#3437</a>, data module failing with numeric data in first column</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3436">#3436</a> causing round linecaps on median lines in box plots. Reverted fix for <a href="https://github.com/highslide-software/highcharts.com/issues/1638">#1638</a>, a workaround for a Firefox bug regarding linecaps. Newer Firefox versions don't have the bug.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3431">#3431</a>, regression causing error 16 not to be triggered.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3434">#3434</a>, error 10 throwed with null values on logarithmic axis.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3380">#3380</a>, a regression causing Series.update not to honour updated zIndex.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3240">#3240</a>, 3d pie labels with 0 values</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3418">#3418</a>, wrong default tooltip header date format when passing points every two days, two months etc.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3416">#3416</a>, broken tooltip on colorAxis</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3152">#3152</a>, tooltip didn't display on the far left of a zoomed axis with categories.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3382">#3382</a>, line series disappering when a negativeColor was applied and the threshold was way beyond the chart.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3411">#3411</a>, align ticks fails without ticks</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3402">#3402</a>, redundant halo on heatmap.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3404">#3404</a>, regression causing canvas heatmap to white out.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3402">#3402</a>, issue with updating bar to pie.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3389">#3389</a>, JS error when drilling up multi-level too quickly.</li>
</ul>
<p>Version 4.0.4 (2014-09-02)</p>
<ul>
<li>Added more date parsing logic to the data module. Now integrates with Date.js, and uses Date.parse. Tries to parse all dates, but falls back to categories if dates are not sorted (which may be a sign that parsing went wrong).</li>
<li>Added support for setting marker image dimensions. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1807">#1807</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1817">#1817</a>.</li>
<li>Added a better default value for xAxis.allowDecimals. Don't allow decimals in X value ranges that look like years. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3363">#3363</a>.</li>
<li>Added warning on trying to plot negative points on a logarithmic axis.</li>
<li>Allow changing "Date" class used to support other calendars. Added new option global.Date.</li>
<li>Allow overriding Highcharts.numberFormat from the outside. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3284">#3284</a>.</li>
<li>Made point.click event work in combination with drilldown charts.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3381">#3381</a> 3D pies, wrong z index applied to sides</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3279">#3279</a>, column z issues in 3d</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3397">#3397</a>, footerFormat does not replace variables</li>
<li>Speed optimization of Series.setData, related to <a href="https://github.com/highslide-software/highcharts.com/issues/3260">#3260</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2909">#2909</a>, a regression causing chart click event not to fire when zoom enabled on touch devices.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3334">#3334</a>, missing animations in 3d pies</li>
<li>Fixed issue causing markers to show even on dense line series, in spite of new logic in 4.x where it should depend on series density.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3202">#3202</a>, tick marks being drawn in unwanted positions when tickInterval was set on categorized axis.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/424">#424</a>, wrong tooltip position for column series in a pane position</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3352">#3352</a>, JavaScript errors on clicking category labels on async drilldown.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3344">#3344</a>, drilldown axis label style inconsistent after redraw.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3353">#3353</a>, wrong axis minimum and maximum on thresholded series when switching from linear to logarithmic axes type.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3342">#3342</a>, memory leaks in jQuery 2.x when repeatedly reinstanciating charts or destroying and recreating renderer primitives.</li>
<li>Fixed memory leak on addPoint caused by adding empty names to the Axis.names lookup table.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3328">#3328</a>, 3D Columns and null values</li>
<li>Fixes <a href="https://github.com/highslide-software/highcharts.com/issues/3317">#3317</a>, extra tick added when there are only two ticks (start and end)</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3315">#3315</a> by disallowing duplicate ids in drilldown.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3182">#3182</a>, three level drilldown broken when drilling up and down again on the same series.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3276">#3276</a> with HTML markup in element titles when a label is shortened by ellipsis.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3088">#3088</a>, tooltip blocking new mouse interaction after hiding when useHTML is true.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3285">#3285</a>, funnel and pyramid center option not working for vertical dimension.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3300">#3300</a> where data labels would remain semi-transparent when chart updated in the middle of labels fading in.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3295">#3295</a>, labels do not render 0 as value</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3282">#3282</a>, plotBorder width changed sign, causing a strange animation</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3245">#3245</a>, waterfall series failed when first element was Sum or IntermediateSum</li>
</ul>
<p>Version 4.0.3 (2014-07-03)</p>
<ul>
<li>Added 3d options <a href="http://api.highcharts.com#plotOptions.column.edgeColor">edgeColor</a> and <a href="http:/api.highcharts.com#plotOptions.column.edgeWidth">edgeWidth</a> to distinguish from borders that have different defaults.</li>
<li>Added option, <a href="http://api.highcharts.com#chart.panKey">chart.panKey</a>, to allow panning and zooming on the same chart. The chart can now be configured so the user can pan by holding down the shift key while dragging.</li>
<li>Added features <a href="http://api.highcharts.com#plotOptions.bubble.zMin">zMin</a> and <a href="http://api.highcharts.com#plotOptions.bubble.zMax">zMax</a> for bubble series, to set the Z value corresponding to <code>minSize</code> and <code>maxSize</code> independently from the data.</li>
<li>Changed default top position for loading label to 45%, which results in a vertically centered label.</li>
<li>Better handling of data label heights on pie charts, related to <a href="https://github.com/highslide-software/highcharts.com/issues/2630">#2630</a>.</li>
<li>Better handling of dynamic font sizes. Adjust tooltip text-wrapping. Apply dynamic font size (em) on line breaks. Fixed placement of title and axis labels when using ems for font size. Added support for em font-size in legend.itemStyle.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2251">#2251</a>, a regression since 3.0.8 causing text and graphic elements to become selected while zooming in old IE.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3195">#3195</a> where a short axis with startOnTick and endOnTick set to false would display no ticks at all.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2694">#2694</a> causing columns to overlap by one pixel in some cases when pointPadding is 0.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2227">#2227</a>, waterfall breaking with more than one intermediate sum.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3163">#3163</a>, pie chart data labels displaying outside plot area.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/1991">#1991</a>, a regression causing area stacks with null or missing values to draw incorrectly.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3158">#3158</a> causing wrong line wraps on text containing markup.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3151">#3151</a>, waterfall columns not displaying a border when the rendered height was 0.</li>
<li>Downloadbuilder missing metatags in SVG, added filterset, fixes <a href="https://github.com/highslide-software/highcharts.com/issues/3106">#3106</a></li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3072">#3072</a> causing unexpected borders after hover on column series when borderWidth was 0.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3132">#3132</a> causing wrong line breaks in SVG text (pseudo HTML) containing markup.</li>
<li>Enabled mouse tracking on data labels for some series types where it had been mistakenly disabled.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2697">#2697</a>, JavaScript error in IE11 on destroying a chart containing useHTML elements after the chart container has first been emptied.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3126">#3126</a>, waterfall graph getting wider on hover. Introduced new options, <code>lineWidthPlus</code>, <code>radiusPlus</code> for hover state of graphs and markers.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3116">#3116</a>, halo failing to animate when a point was updated to a new position. Removed redundant pointer.reset call on Axis.redraw because Chart.redraw also calls the same method.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3113">#3113</a>, roundoff error throwing off calculations of extremes on log axis.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3104">#3104</a>, touch panning not being able to pan outside the data range even if the axis min and max options were outside the range.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3098">#3098</a>, plot area size of a pie chart not being recalculated after the legend size changed.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3090">#3090</a> causing default 3d options not to be interpreted correctly.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3094">#3094</a> causing series Z index to change after Series.update.</li>
<li>Fixed regression issue <a href="https://github.com/highslide-software/highcharts.com/issues/3095">#3095</a>, semi-transparent fills coming out as black in exports created by Batik.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3082">#3082</a>, positioning of 3d pie datalabels.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3080">#3080</a> causing JS error on low chart due to negative height of the legend clip rectangle.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3051">#3051</a> causing wrong Z indexes for slices in 3d pie charts.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3075">#3075</a> causing touch panning on a categorized axis to alter range.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3039">#3039</a>, series options was not read for 3D.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2893">#2893</a> causing heatmap point colors not to update after updating the color axis coloring.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/1080">#1080</a>, loading text not reflowing to changed chart size.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3056">#3056</a> with tooltip chevron not pointing exactly on the right point of the graph when animating between close positions.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3044">#3044</a> causing JS errors in some cases when axis label formatter returned null or undefined. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3050">#3050</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3053">#3053</a> causing series to be cropped too tight on logarithmic X axis when the number of points exceeded the crop threshold.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2240">#2240</a> causing the point mouse out event not to fire when the tooltip is shared.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2997">#2997</a>, solidgauge issue with points past ±360° or below <code>yAxis.min</code>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3028">#3028</a> causing the last series to become unlinked when calling <code>Series.update</code> on several linked series in succession.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3027">#3027</a> causing truncation of axis labels when the axis title offset is set and the axis title is shorter than the labels.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3023">#3023</a> causing defered data labels to show even if series was hidden in the meantime while animating.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3003">#3003</a> causing rotated data labels to be misaligned after redraw when using Standalone Framework.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3017">#3017</a> causing centering of data labels on inverted range series not to work.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3007">#3007</a>, with halo showing on invisible points in pies.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3016">#3016</a> causing halo on sliced pie series to diplay incorrectly.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3000">#3000</a>, labels wrongly aligned on plot lines with multiple axes.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3014">#3014</a> causing wrong tooltip position in waterfall charts in Highcharts 4.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3006">#3006</a>, prevent null and 0 points from rendering in 3D Pies.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2982">#2982</a> by returning the added plot line or plot band object after <code>Axis.addPlotLine</code> or <code>Axis.addPlotBand</code>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2977">#2977</a>, set mimimum view point distance for 3D.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2975">#2975</a> with clipping not being updated on column series and derived series types after chart resize.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2968">#2968</a>, 3d columns not drawn correctly when equal to max.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2963">#2963</a> where columns were badly drawn in Chrome due to a rendering bug.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2962">#2962</a> causing data labels on gauges not to display unless defer is set to true.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2954">#2954</a> that caused invalid SVG attributes on animating in and out grid lines when running older jQuery versions or the Standalone Framework.</li>
</ul>
<p>Version 4.0.0 (2014-04-22)</p>
<ul>
<li>For news, see the <a href="/component/content/article/2-news/134-announcing-highcharts-4/">release announcement</a>.</li>
<li>The default design has been updated with Highcharts 4, but all aspects of design can be reverted to the Highcharts 3 looks by applying options. See <a href="http://jsfiddle.net/highcharts/Y5ak7/">this design compatibilty demo</a> for a listing of what options it applies to.</li>
</ul>
<p>Version 3.0.10 (2014-03-10)</p>
<ul>
<li>Improved performance by 35% in our benchmark suite.</li>
<li>Added new option, <a href="http://api.highcharts.com/#plotOptions.gauge.overshoot">plotOptions.gauge.overshoot</a>, that takes a value in degrees for how much the dial should overshoot when the value is off the chart.</li>
<li>Added smarter logic to <code>Series.setData</code>, where instead of re-creating all the data points, existing points are updated. This allows animation, performs faster and is less prone to memory issues.</li>
<li>Added option, <a href="http://api.highcharts.com/#yAxis.reversedStacks">yAxis.reversedStacks</a>, to choose whether to stack from the top down or from the bottom of the stack and up.</li>
<li>Added support for drilldown on multi-series column charts. Closes #2604.</li>
<li>Added 'pyramid' type of series</li>
<li>Added 'reversed' option to funnel series.</li>
<li>Fixed #2755 where attributes in pseudo-HTML were applied outside elements.</li>
<li>Fixed #2753 which caused errors and broken behaviour on drilldown containing null points.</li>
<li>Fixed #2770 where data labels on error bars were not displayed.</li>
<li>Fixed #2681 where the Pointer object leaked memory after <code>Chart.destroy</code>.</li>
<li>Fixed #2763 where series on log axes would disappear alltogether when the axis became too short.</li>
<li>Fixed #2760 where the <code>ignoreHiddenSeries</code> setting had no effect on bubble sizes.</li>
<li>Fixed issue with <code>Chart.setTitle</code> not causing the chart to redraw to adapt to changed size of the title. Closes #2719. Closes #2744.</li>
<li>Fixed #2738 where legend navigation would add one page too many when the last page had two items.</li>
<li>Fixed #2722 where pie slice data label connectors would have the wrong Z index after hiding and showing the slice.</li>
<li>Made <code>chart.style</code> option take effect on chart instances, not only globally. Closes #2723.</li>
<li>Fixed #2713 where series connected to a dynamically added X axis would fail.</li>
<li>Fixed issue with horizontal axis labels being clipped instead of justified into chart area. Closes #2703.</li>
<li>Fixed #2700 causing data labels to not render inside columns if the actual value of the column was cropped.</li>
<li>Fixed #2693 with drilling up from drilldown caused interference between charts.</li>
<li>Added sparkline demo</li>
<li>Fixed memory leaks in IE11 due to implementation of touch support. Closes #2691.</li>
<li>Export server: Fixed jar location lookup on Windows, closes #2869</li>
<li>Fixed issue with disappearing bar chart data labels in certain chart widths. Closes #2683.</li>
<li>Fixed issue with <code>showLoading</code> not displaying in IE9. Closes #2686.</li>
<li>Fixed issue with <code>Axis.update</code> not removing all associated series. Closes #2687.</li>
<li>Fixed failure in updating stacking from percent to normal. Closes #2682.</li>
<li>Fixed issue with misalignment of rotated axis labels with useHTML in IE11. Closes #2684.</li>
<li>Fixed issue with wrapping horizontal legends not taking the x option into account. Closes #2680.</li>
<li>Fixed issue with JS errors on hovering chart when running IE11 in combination with the Standalone Framework. Closes #2672.</li>
<li>Fixed issue with wrong rotation of polar charts when X axis was reversed. Closes #2570.</li>
<li>Fixed issue with tooltip position and hover point on polar chart where <code>startAngle</code> was &lt; 0. Closes #2665.</li>
<li>Fixed issue with empty tooltip boxes visible in tall pages in IE10.</li>
<li>Fixed issue with <code>showLoading</code> not working in Standalone Framework. Closes #2653.</li>
<li>Fixed issues with pie slices and data labels remaining visible after hiding the pie series itself. Closes #2315. Closes #2656.</li>
<li>Fixed issue with automatic line height on labels with <code>em</code> font sizes. Closes #2651.</li>
<li>Fixed issue in 3.0.9 where wrong vertical axis labels would be skipped when they were of varying height. Closes #2642.</li>
<li>Provided reasonable default column width and group width for column charts with only one X value when minRange was set. Closes #2610.</li>
<li>Fixed issue with too many pages in the legend when using legend navigation. Closes #2617.</li>
<li>Fixed unexpected effects of zooming outside the data range. Closes #1734.</li>
<li>Fixed issue with line graphs not being vertically centered when there was only one value which exceeded the upper limit of 44bit values. Closes #2619.</li>
<li>Worked around Firefox 26 drawing issue where legend items would not redraw after resizing the chart. Closes #2580.</li>
<li>Fixed issue with mispositioned data label on single pie slice with certain pie sizes, caused by JavaScript rounding error. Closes #2650.</li>
<li>Fixed issue with text bounding boxes not being correctly computed when the chart was added to a container with <code>display:none !important</code>. Closes #2631.</li>
<li>Fixed issue with gauge pane background color not taking effect on multiple panes, or respecting changes. Closes #2257. Closes #2649.</li>
<li>Fixed error in Standalone Framework where calling destroy on an animating element would result in endless error messages. Caused errors when a chart was destroyed while fading out the tooltip. Closes #2616.</li>
<li>Fixed pie chart issue with messed up data labels with certain combinations of start and end angle. Closes #2645.</li>
<li>Fixed issue with pies ignoring endAngle when it was set to 0.</li>
<li>Performance improvement for updating tick labels. Closes #2640.</li>
<li>Fixed issue with tooltip header not displaying relevant time resolution when points where added at minute or hour resolution with a day between them. Closes #2637.</li>
<li>Fixed issue with wrong bounding box detection of numeric texts when they were of number type instead of strings. Closes #2316.</li>
<li>Fixed issue with JS errors and failing to activate charts in pages that are saved to disk from the browser. Closes #2609.</li>
<li>Fixed issue with <code>followPointer</code> not working correctly for line charts.</li>
<li>Fixed issue with numerical legend items crashing chart when navigation was enabled. Removed unsafe internal use of elemWrapper.bBox, used elemWrapper.getBBox() instead. Closes #2605.</li>
<li>Fixed regression with pie slice hover color becoming increasingly brightened after repeated redraws. Closes #1619.</li>
<li>Fixed issue with positioning of markers in oldIE in inverted charts. Closes #1111.</li>
<li>Fixed oldIE issue with box plots and error bars not showing in inverted charts. Closed #1680. Closed #1806.</li>
<li>Fixed missing stack percentage in normal stacks. Closes #2551.</li>
<li>Fixed issue in Standalone Framework with getting the right mouse position inside a scrollable div. Closes #2205.</li>
<li>Fixed JS error on hovering over a chart after running Chart.setData without redrawing. Closes #2594.</li>
<li>Fixed issue with tooltip position if data is NaN.</li>
</ul>
<p>Version 3.0.9 (2014-01-15)</p>
<ul>
<li>Added bower.json file. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2244">#2244</a>.</li>
<li>Fixed JS error on quickly moving the mouse out of a chart. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/2499">#2499</a>.</li>
<li>Fixed issue with text positioning in modern IE when CSS line height was much smaller than font size. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2444">#2444</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2568">#2568</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2569">#2569</a>. Affects <a href="https://github.com/highslide-software/highcharts.com/issues/2591">#2591</a>.</li>
<li>Fixed issue with crosshairs not exactly following the tooltip, mostly visible ou touch devices. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2582">#2582</a></li>
<li>Fixed issue with categorized Y axis on gauges being positioned wrong. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2593">#2593</a>.</li>
<li>Reverted optimization that skipped individual handling of point attributes. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2549">#2549</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2587">#2587</a>.</li>
<li>Fixed issue with adding a point in the middle of a line series failing. Issue <a href="https://github.com/highslide-software/highcharts.com/issues/1109">#1109</a>.</li>
<li>Fixed regression with datetime tooltip header format falling back to full years. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2581">#2581</a>.</li>
<li>Fixed rounding error in stack labels. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2576">#2576</a>.</li>
<li>Implemented new option, switchRowsAndColumns, in the data module.</li>
<li>Fixed regression in 3.0.8 with hover color of columns having individual color option. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2579">#2579</a>.</li>
<li>Fixed issue with fillColor on box plots not honored when colorByPoint is true. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2574">#2574</a>.</li>
</ul>
<p>Version 3.0.8 (2014-01-09)</p>
<ul>
<li>Export: Streamlined and removed unnecessary properties in maven pom.xml</li>
<li>Export: Cleaning up overlap in maven dependencies for java export server</li>
<li>Added handling of white-space: nowrap in styles for SVG text.</li>
<li>Implemented logic that removes overlapping axis labels just before they are rendered.</li>
<li>Fixed issue with unexpected arc rendering in VML. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/168">#168</a>.</li>
<li>Added multitouch support for IE10/11. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2536">#2536</a>.</li>
<li>Added default date format for the headerFormatter. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2546">#2546</a></li>
<li>Fixed issue with categorized Y axis overflowing the plot area because category padding weren't applied. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1784">#1784</a>.</li>
<li>Fixed issue with negative color being clipped in a series with all negative values.</li>
<li>Optimized performance by caching results for getBBox for numbers, since numbers are monospaced and the same bounding box applies to any number of the same character length and the same font family and font size. Also, don't delete cached bounding box on word wrap when there is only one word. These two optimizations improved rendering times by 15% on Chrome and Firefox using our benchmark tests. Relates to <a href="https://github.com/highslide-software/highcharts.com/issues/2525">#2525</a>.</li>
<li>Fixed JS errors in IE11 workaround when destroying a chart in the same thread as creating it. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2030">#2030</a>.</li>
<li>Prevented memory build-up in datetime axes by avoiding unnecessary use of the Axis.names array for categories. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2523">#2523</a>.</li>
<li>Fixed issue with hidden pie slices affecting the positions of data labels. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2510">#2510</a>.</li>
<li>Prevent timeout when calling chart.reflow as an API call. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2224">#2224</a>.</li>
<li>Fixed issue with disappearing data labels in gauges when center is outside plot area. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2415">#2415</a>.</li>
<li>Fixed issue with clipped chart when resizing down. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2503">#2503</a>.</li>
<li>Fixed typo in series sorting causing series to change order when updating series type in IE9. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2501">#2501</a>.</li>
<li>Fixed issue with point state marker graphic staying in its previous position after a zoom operation on mouse or touch devices. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2500">#2500</a>.</li>
<li>Fixed issue on iOS where selection of columns and pie slices needed two touches except on the very first run. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2499">#2499</a>.</li>
<li>Fixed JS errors on empty series on secondary axis when tickPositions were defined. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2482">#2482</a>.</li>
<li>Added formattributes to exporting to allow setting custom attributes</li>
<li>Removed line running setting event.returnValue, which causes a warning in Chrome. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2251">#2251</a>.</li>
<li>Fixed a couple of minor issues related to legend navigation.</li>
<li>Fixed regression on running Point.update with null value. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2481">#2481</a>.</li>
<li>Export: Refined code on waiting for images loaded</li>
<li>Export: Missing images fallback gracefully, closes <a href="https://github.com/highslide-software/highcharts.com/issues/2474">#2474</a></li>
<li>Fixed regression with stack order not being affected by series.index. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2456">#2456</a>.</li>
<li>Fixed issue with bubble chart not displaying when displayNegative was false.</li>
<li>Fixed issue with data label styles not updating from Point.update. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2468">#2468</a>.</li>
<li>Improved setOptions by copying new objects into existing instead of creating new defaultOptions structure. Improves performance and keeps internal pointers. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2469">#2469</a>.</li>
<li>Fixed SVG errors on exporting SVG from IE8, causing Batik not to render the SVG. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2463">#2463</a>.</li>
<li>Fixed JavaScript error when firing a series click event in IE8 using the Standalone Framework. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2465">#2465</a>.</li>
<li>Removed thousands separators from numbers below 10,000 in the default X axis label formatter. This prevents commas to be inserted in years when applied to a linear axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2466">#2466</a>.</li>
<li>Data module: Update itemDelimiter option to default to tab character if a tab is found within the CSV string. This makes CSV parsing work with content copied directly from Excel.</li>
<li>Fixed issue with clipped legend items when navigation is enabled. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2098">#2098</a>.</li>
<li>Fixed issue with document events set in exporting not being destroyed when destroying chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2407">#2407</a>.</li>
<li>Fixed issue with tooltip options not taking effect on certain series types where the same options were defined in series specific defaults. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/907">#907</a>.</li>
<li>Fixed issue with markers on inverted charts. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2450">#2450</a></li>
<li>Fixed issue with shared tooltip showing wrong category when pointPlacement was used. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2434">#2434</a>.</li>
<li>Performance improvement by not listening to document mousemove when the tooltip is hidden.</li>
<li>Added symbolHeight and symbolRadius options for legend.</li>
<li>Fixed issue with orphaned stack labels after Series.destroy and Series.update. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2440">#2440</a>.</li>
<li>Fixed issue with updating the visibility of a pie slice causing it to go invisible. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2430">#2430</a>.</li>
<li>Added new option, <a href="http://api.highcharts.com/#global.timezoneOffset">global.timezoneOffset</a>, to allow setting which timezone the data is displayed in even though the input data is defined as UTC.</li>
<li>Fixed bad positioning of rotated elements when useHTML was true. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2404">#2404</a>.</li>
<li>Added error message on trying to add an object literal point configuration on a series with more data points than the turboThreshold.</li>
<li>Fixed issue with flags on the last point dropping down to the X axis when the main series enters data grouping. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2374">#2374</a>.</li>
<li>Fixed regression where legend would disappear when the linkedTo option was set to null. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2414">#2414</a>.</li>
<li>Fixed regression causing JS errors after updating an axis title when useHTML is set. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2402">#2402</a>.</li>
<li>Fixed issue with NaN tick positions being applied to empty axis, causing wrong number of ticks in chart with multiple axes. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1741">#1741</a>.</li>
<li>Export: Beans from export-convert-module are now configurable from the export-web-module</li>
</ul>
<p>Version 3.0.7 (2013-10-24)</p>
<ul>
<li>Performance improvement by moving color parsing regexes out of the Color class to a global definition in order to be instanciated only once.</li>
<li>Fixed issue with useHTML legend items not drawing after removing all and adding again. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2393">#2393</a>.</li>
<li>Fixed regression after fixing <a href="https://github.com/highslide-software/highcharts.com/issues/2153">#2153</a>, related to assigning styles in VML browsers. Fixes <a href="https://github.com/highslide-software/highcharts.com/issues/2368">#2368</a> and <a href="https://github.com/highslide-software/highcharts.com/issues/2368">#2368</a>.</li>
<li>Fixed issue with plot band label not being hidden when zooming out of view. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2328">#2328</a>.</li>
<li>Fixed wrong calculation of <code>point.percentage</code> in percentage stacked tooltips. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2375">#2375</a>.</li>
<li>Fixed issue with yearly ticks being computed wrong, causing stagger lines where not necessary. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2360">#2360</a>.</li>
<li>Fixed issue with IE8 not being able to add soft line breaks in text in export.</li>
<li>Fixed issue with only first series' point names being used for categories. Now all series are inspected. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2357">#2357</a>.</li>
<li>Made new option, <a href="http://api.highcharts.com/#plotOptions.line.linecap">linecap</a>, for line series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2358">#2358</a>.</li>
<li>Allow disabling the hover state for a specific point marker. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1610">#1610</a>.</li>
<li>Fixed JavaScript error on updating a point value to null. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2359">#2359</a>.</li>
<li>Fixed issue with response of PhantomJS server in export-server that lead to StringIndexOutOfBoundsException, fixes <a href="https://github.com/highslide-software/highcharts.com/issues/2367">#2367</a></li>
<li>Made <a href="http://api.highcharts.com/#plotOptions.series.showInLegend">showInLegend</a> option overridable for linked series.</li>
<li>Worked around Firefox/Win issue with median lines on box plot spilling over the edges of the box. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1638">#1638</a>.</li>
<li>Made the data labels inherit the series' cursor setting.</li>
<li>Improved fix for <a href="https://github.com/highslide-software/highcharts.com/issues/2030">#2030</a> to work with IE11 quirks mode.</li>
<li>Fixed issue with broken export menu in IE9 compatibility mode. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2335">#2335</a>.</li>
<li>Reverted fix for <a href="https://github.com/highslide-software/highcharts.com/issues/1651">#1651</a>, which introduced an error with stack data labels not being moved on update. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2336">#2336</a>.</li>
<li>Added new option, <a href="http://api.highcharts.com/#plotOptions.bubble.sizeBy">sizeBy</a>, to bubble charts to set whether the area or the width should reflect the data value.</li>
<li>Improved workaround for IE11 text positioning issue by not applying it to exported charts, closes <a href="https://github.com/highslide-software/highcharts.com/issues/2030">#2030</a>.</li>
</ul>
<p>Version 3.0.6 (2013-10-04)</p>
<ul>
<li>Fixed issue on touch devices with click events not firing on series, points or chart when chart.zoomType was set. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2275">#2275</a>.</li>
<li>Added new option, chart.spacing, to set spacing as an array.</li>
<li>Fixed regression issue with slow running updates on gauges. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2320">#2320</a>.</li>
<li>Fixed regression with vertical crosshair not working in Highstock with series compare. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2316">#2316</a>.</li>
<li>Fixed issue with hide/show series in some versions of Android. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2269">#2269</a></li>
<li>Fixed error message in PHP/Batik exporting stack when called without posting width. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2303">#2303</a>.</li>
<li>Worked around InkScape bug where the hidden empty tooltip would display as a square in exported SVG. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2301">#2301</a>.</li>
<li>Fixed issue with updating min and max using Axis.update() after running setExtremes. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2306">#2306</a>.</li>
<li>Added round linejoins and linecaps to line graphs for better look in prints.</li>
<li>Added support for negative values in stacked percentage columns. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2197">#2197</a>.</li>
<li>Added new option to pie charts, endAngle, to allow semi-circle donuts and pies.</li>
<li>Fixed issue with bubbles not resizing in IE8. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2294">#2294</a>.</li>
<li>Added experimental support for axis.labels.ellipsis. Not implemented for VML renderer.</li>
<li>Fixed issue with unsorted data labels for funnels. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2289">#2289</a>.</li>
<li>Fixed issue with JS errors in IE8 when trying to animate a rotated data label. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1821">#1821</a>.</li>
<li>Fixed issue with disabling data label for a specific point not taking effect. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2282">#2282</a>.</li>
<li>Adapted Java exporting server to PhantomJS saving files locally</li>
<li>PhantomJS running as server can save files to filesystem, closes <a href="https://github.com/highslide-software/highcharts.com/issues/2137">#2137</a></li>
<li>Fixed issue in gauges with ticks disappearing or being badly laid out after resizing. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1262">#1262</a>.</li>
<li>Fixed issue with too high axis max tick on very small charts where the height of the plot area was much smaller than the tickPixelInterval setting.</li>
<li>Fixed issue with Highcharts error 19 triggering with a hidden or very small chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2272">#2272</a>.</li>
<li>Fixed issue with exporting button's menus being shared between multiple buttons. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1908">#1908</a>.</li>
<li>Fixed issue with bubbles and other marker points not taking the "color" property of the point. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2219">#2219</a>.</li>
<li>Fixed compatibility issue with the Standalone Framework and Dojo. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2268">#2268</a>.</li>
<li>Fixed issue with updating to line series when starting with a spline. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2270">#2270</a>.</li>
<li>Implemented Async download from export server.</li>
<li>Added CORS filter for Cross-Origin requests to export server.</li>
<li>Fixed issue with Standalone Framework in legacy IE where click event wouldn't work on line series, and hovering didn't preserve the state of the tooltip. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2265">#2265</a>.</li>
<li>Adapted Java exporting server to PhantomJS saving files locally</li>
<li>Fixed JS error on adding VML styles in old IE in pages with more than 32 style sheets. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2153">#2153</a>.</li>
<li>Add event handler to close context menu from touching outside the menu. Improves user experience on touch devices. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2258">#2258</a>.</li>
<li>Fixed issue with scatter series not displaying in polar charts. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2060">#2060</a>.</li>
<li>Forced disabling of startOnTick and endOnTick when navigator is enabled in Highstock. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1090">#1090</a>.</li>
<li>Fixed issue with waterfall columns starting at the wrong place with certain values on the Y axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2241">#2241</a>.</li>
<li>Fixed issue with stacks not being cleared after updating a series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2229">#2229</a>.</li>
<li>Fixed issue with error number 19 firing on stock charts with ordinal axis when not needed. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2228">#2228</a>.</li>
<li>Fixed positioning problem with tooltips on flags. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2211">#2211</a>.</li>
<li>Exposing the reflow method on chart objects.</li>
<li>Added no-data-to-display plugin</li>
<li>Fixed issue with addPoint() on waterfall charts. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2209">#2209</a></li>
<li>Fixed issue with wrong animation between lines of different length. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/1325">#1325</a> and <a href="https://github.com/highslide-software/highcharts.com/issues/1386">#1386</a>.</li>
<li>Fixed issue when having no data in stacking chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2207">#2207</a></li>
<li>Worked around bug in IE11 with rendering text in horizontal legends. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2030">#2030</a>.</li>
<li>Fixed issue with removing points in funnel charts. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2206">#2206</a></li>
<li>Fixed issue with Point.update removing the selected state when applied with an object configuration. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1909">#1909</a>.</li>
<li>Fixed issue where running addPoint with an X value not being able to insert the point into the middle of a sorted series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1109">#1109</a>.</li>
<li>Fixed issue with percentage stacked area series adding up negative values incorrectly. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2197">#2197</a>.</li>
<li>Fixed issue with overlapping X axis labels and maxStaggerLines not taking effect on dynamically added series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2186">#2186</a>.</li>
<li>Added new option, dataLabel.overflow: 'justify'. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1789">#1789</a>, <a href="https://github.com/highslide-software/highcharts.com/issues/1859">#1859</a>, <a href="https://github.com/highslide-software/highcharts.com/issues/1962">#1962</a>, <a href="https://github.com/highslide-software/highcharts.com/issues/1984">#1984</a> and <a href="https://github.com/highslide-software/highcharts.com/issues/2190">#2190</a>.</li>
<li>Fixed error on redrawing chart after applying a plot line with zero width. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2189">#2189</a>.</li>
<li>Fixed issue with data labels of hidden series attracting mouseover and tooltips in IE10. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2185">#2185</a>.</li>
<li>Fixed issue with connectNulls not taking effect on stacked areas. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1836">#1836</a>.</li>
<li>Fixed regression where the lower stacked series in an area stack would not display. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2181">#2181</a>.</li>
</ul>
<p>Version 3.0.5 (2013-08-23)</p>
<ul>
<li>Added Standalone Framework for using Highcharts without jQuery, MooTools or Prototype.</li>
<li>Added error message on adding too many ticks to an axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2174">#2174</a>.</li>
<li>Implemented better sharpening logic for columns and bars. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1188">#1188</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2091">#2091</a>.</li>
<li>Fixed issue with non-aligned axes after multiple setExtremes with internal redraws. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2169">#2169</a>.</li>
<li>Improved axis line, plot line and grid line positioning so that a 2px line series along the X axis shows up as exactly 1 pixel, half inside and half outside the visible plot area. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1687">#1687</a>.</li>
<li>Fixed regression in IE8 where an error occured on fading out the tooltip in older jQuery versions. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2161">#2161</a>.</li>
<li>Fixed issue with series.linkedTo not working when added in non-source order. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2166">#2166</a>.</li>
<li>Fixed issue with missing textShadow on HTML datalabels</li>
<li>Fixed issue with tooltip not displaying on scatter points lying on the edge of the chart, when moving the mouse in from the outside. Removed limitation of only showing tooltips for points lying inside the plot area. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2147">#2147</a>.</li>
<li>Fixed problem with tracking mouse movements on lines near the edge of the chart because the line tracker was not clipped. Clipped the tracker and added tracking to the marker group also. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1894">#1894</a>.</li>
<li>Fixed regression with stacked columns on a log axis not displaying. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2104">#2104</a>.</li>
<li>Fixed issue on older Chrome versions on mobile where pinch zooming was broken. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2143">#2143</a>.</li>
<li>Added error message on exceeding the turboThreshold. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2107">#2107</a>.</li>
<li>Fixed regression with log X axis affecting the calculated data extremes. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2117">#2117</a>.</li>
<li>Fixed issue with point markers not being updated from Point.update method. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2130">#2130</a>.</li>
<li>Fixed regression that appeared when fixing <a href="https://github.com/highslide-software/highcharts.com/issues/2005">#2005</a>, where tooltips didn't display in IE8 after scrolling down a page. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2129">#2129</a>.</li>
<li>Fixed issue with area stacks containing negative values. The stacks are now treated differently between columns and areas. In column stacks, negative points always extend from the trheshold and down. For area stacks however this is counterintuitive. Instead, negative points are substracted from the stack. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1910">#1910</a>.</li>
<li>Fixed regression where a pie slice with value zero would show up as a quarter of a circle. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2103">#2103</a>.</li>
<li>Fixed hanging browser on pie charts where all values were 0 or null.</li>
</ul>
<p>Version 3.0.4 (2013-08-02)</p>
<ul>
<li>Fixed issue with plot bands or lines not being removed after Axis.update(). Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1975">#1975</a>.</li>
<li>Fixed regression from 3.0.3 where redrawing a chart containing stacked points within the same series would cause the single stack to redraw badly. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2095">#2095</a>.</li>
<li>Fixed regression with resizing a stacked chart containing negative values. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2089">#2089</a>.</li>
<li>Fixed JS errors in polar chart when instanciated with no data. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2093">#2093</a>.</li>
<li>Fixed regression with staggered X axis labels on reversed axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2081">#2081</a>.</li>
</ul>
<p>Version 3.0.3 (2013-07-31)</p>
<ul>
<li>Added automatic stagger lines for colliding labels on horizontal axis.</li>
<li>Added support for automatic text wrapping in long title names. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/776">#776</a>.</li>
<li>Added new option, <a href="http://api.highcharts.com#legend.itemDistance">legend.itemDistance</a>, to allow control over the distance between items of a horizontally laid out legend. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/832">#832</a>.</li>
<li>Added context and event information to click handlers on touch devices. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1830">#1830</a>.</li>
<li>Added useHTML option for plot line and plot band labels. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1916">#1916</a>.</li>
<li>Added support for multidimensional series (arearange, ohlc, box plot etc.) in data module.</li>
<li>Added automatic default alignment of axis labels based on which side of the chart and the label's rotation.</li>
<li>Added automatic line-wrap of titles and subtitles if the text exceeds the chart width. This change includes changing the default Y position of the subtitle to allow it to depend on the title height.</li>
<li>Increased performance of Series.addPoint on large series by preventing looping over all data points on each call. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1937">#1937</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2017">#2017</a> where the browser would freeze when xAxis.min equals xAxis.max on a datetime X axis.</li>
<li>Fixed legend box size browser issue.</li>
<li>Worked around issue in Chrome 28 where numberFormatting would round all values to whole numbers after running for a while. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2043">#2043</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2052">#2052</a>.</li>
<li>Fixed issue with point.name being applied to the wrong category label. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2046">#2046</a>.</li>
<li>Optimized merge function by moving a check out of the loop. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2045">#2045</a>.</li>
<li>Fixed issue with wrong calculation of areas when a negative color was used on an inverted chart with non-zero threshold. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2011">#2011</a>.</li>
<li>Fixed issue in Highcharts 3.0.2 where data labels for null points were rendered as 0. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1997">#1997</a>.</li>
<li>Fixed issue with click events on columns not firing on touch devices until the second touch. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1551">#1551</a>.</li>
<li>Fixed issue with mouse and tooltip offset inside frameset when running IE10 in compatibility mode. Simplified mouse position detection. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2005">#2005</a>.</li>
<li>Fixed issue with percentage stacked area and missing values. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1991">#1991</a>.</li>
<li>Fixed issue with unexact position of columns where minPointLength applies. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1166">#1166</a>.</li>
<li>Fixed problem with setting area series fillOpacity to 0. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1983">#1983</a>.</li>
<li>Fixed issue with export menu displaying outside the chart at the top of the button. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1985">#1985</a>.</li>
<li>Fixed issue with double xmlns attributes created in IE9 and IE10. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1978">#1978</a>.</li>
<li>Fixed issue with pie slices animating from center on first call to Point.update. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/959">#959</a>.</li>
<li>Fixed issue with updating shadow positions on bubbles. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1977">#1977</a>.</li>
<li>Disallow JavaScript execution from formatted category labels.</li>
<li>Fixed issue with percentages not being available for pie chart legend. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/897">#897</a>.</li>
<li>Fixed issue with visible:false not taking effect on pie chart data labels. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/876">#876</a>.</li>
<li>Fixed issue with updating an element's dashstyle programmatically. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/874">#874</a>.</li>
<li>Fixed issue with stack labels not appearing in other series types than column. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1383">#1383</a>.</li>
<li>Fix for error while converting to SVG file in phantomjs, missing character in XML.</li>
<li>Added event to hide the tooltip on touch devices when touching outside the plot area. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1203">#1203</a>.</li>
<li>Fixed issue with stacked columns within a single series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1959">#1959</a>.</li>
<li>Fixed issue with useHTML labels not cleaning up their parents when destroyed. This would leave a lot of empty divs inside the container after updating for example axes. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1960">#1960</a>.</li>
<li>Fix for error while downloading SVG files, missing character in XML doctype.</li>
<li>Fixed issue with point markers not being aligned to columns. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1843">#1843</a>.</li>
<li>Fixed PDF cropped and split on 2 pages issue <a href="https://github.com/highslide-software/highcharts.com/issues/1957">#1957</a></li>
<li>Fixed issue with IE8 and exporting with old look. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1964">#1964</a>.</li>
<li>Fixed issue with no legend symbol on areaspline series when line and markers were hidden. It now uses the rectangular legend symbol like regular area series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/602">#602</a>.</li>
<li>Fixed issue with area legend taking the marker fill color instead of the area fill color when different. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/585">#585</a>.</li>
<li>Fixed issue with legend box not reserving space for legend title. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1717">#1717</a>.</li>
<li>Fixed issue where switching from log to linear scale caused the threshold of columns to become lower than zero. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1791">#1791</a>.</li>
<li>Fixed issue with legend symbols not being centered in text when font size increased. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1804">#1804</a>.</li>
<li>Fixed tooltip order and naming of quartiles in box plot.</li>
<li>Fixed issue with rotated labels along a vertical axis becoming wrongly positioned based on bounding box. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1951">#1951</a>.</li>
<li>Better detection for showing or hiding the data labels based on whether the entire bounding box is inside the plot area. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1788">#1788</a>.</li>
<li>Fixed issue with dynamically modified data being lost after Series.update. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1780">#1780</a>.</li>
<li>PhantomJS JavaScript files are automatically unzipped to java.io.tmpdir</li>
<li>Fixed issue where calling Point.select(true) on a pie slice would toggle it, not select it. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1823">#1823</a>.</li>
<li>Fixed issue with removing plot band or line and reflecting it in export. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1114">#1114</a>.</li>
<li>Fixed issue with adding X axis dynamically. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1827">#1827</a>.</li>
<li>Fixed funnel chart issues with center Y not taking effect, and points disappearing when neckHeight is equal height. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1866">#1866</a>.</li>
<li>Fixed issue when using rotation on a particular point's data label, the next point's data label would be rotated. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1883">#1883</a>.</li>
<li>Fixed issues with legend items not reflecting updates to pie slices. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1831">#1831</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1885">#1885</a>.</li>
<li>Fixed issue with wrong alignment of labels on the X axis of a rotated polar chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1942">#1942</a>.</li>
<li>Fixed issue with too tight ticks on X axis on column charts with only a few columns. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1943">#1943</a>.</li>
<li>Fixed issue with bubble series not working at all when number of points exceed the turboThreshold. Removed the turboThreshold option for bubble series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1898">#1898</a>.</li>
<li>Fixed issue with spline animation of lower part when negativeColor is used and running addPoint. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1899">#1899</a>.</li>
<li>Moved the warning on unsorted data to catch unsorted data in the middle of the data set in addition to the first two values. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1900">#1900</a>.</li>
<li>Fixed issue with X axis not redrawing after Point.update. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1906">#1906</a>.</li>
<li>Fixed issue with tooltips not accounting for the startAngle of a polar chart. Fixed issue with tooltips not being wrapped around from the last point to the first point at the top of a polar chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1915">#1915</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1469">#1469</a>.</li>
<li>Fixed issue with Safari crashing when displaying tooltips with nested HTML tags. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1596">#1596</a>.</li>
<li>Fixed issue with negativeColor and logarithmic Y axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1726">#1726</a>.</li>
<li>Fixed issue with negativeFillColor not taking effect unless a negativeColor is also set. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1907">#1907</a>.</li>
<li>Fixed issue with multiple class names added to tracker objects. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/1918">#1918</a>.</li>
<li>Fixed wrong position of dials in IE7 and IE8 Quirks mode. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1873">#1873</a>.</li>
<li>Fixed issue with inconsistent xAxis label width on bar charts. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1931">#1931</a>.</li>
<li>Fixed issue with click events not being handled on flag series in IE9 and IE10. Fixed support for hovering stacked flags in old IE. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1924">#1924</a>.</li>
<li>Fixed regression with wrong higher path on arearange series on inverted chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1930">#1930</a>.</li>
<li>Fixed position of rotated X axis labels to prevent overlapping with the element below. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1764">#1764</a>.</li>
<li>Fixed JS error on setting new data on initially empty series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1920">#1920</a>.</li>
<li>Fixed issue with datetime axes not using intervals greater than 10 years. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1913">#1913</a>.</li>
</ul>
<p>Version 3.0.2 (2013-06-05)</p>
<ul>
<li>Fix a bug related to updating existing StackItem instead of creating a new one after calling Point.update()</li>
<li>Fixed error on exporting from IE8</li>
<li>Fixed handling of connectNulls on area range series so that null values in either low or high positions are also connected. This allows filling the area between lines with different X values. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1404">#1404</a>.</li>
<li>Adding ability to define pointPlacement numerically</li>
<li>Fixed JS error on certain operations with jQuery 1.10. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1881">#1881</a>.</li>
<li>Fixed regression with exporting.chartOptions not taking effect. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1759">#1759</a>.</li>
<li>Fixed issue with setting medianWidth, stemWidth or whiskerWidth to 0 on box plots and error plots. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1833">#1833</a>.</li>
<li>Added stackLabels.format option analogous to dataLabels.format. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1837">#1837</a>.</li>
<li>Fixed issue with errors on running point click event after the same point was destroyed from a series click event. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1844">#1844</a>.</li>
<li>Fixed issue with stacks and series.index option. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1722">#1722</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1689">#1689</a>.</li>
<li>Added localized number formatting to data labels. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/1637">#1637</a>.</li>
<li>Fixed JS error on touching pie charts in iOS Safari. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1861">#1861</a>.</li>
<li>Fixed touch zooming and panning problems from Highcharts 3.0.1. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1860">#1860</a>.</li>
<li>Fixed JS error on iPad with disabled tooltip. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1857">#1857</a>.</li>
<li>Fixed issue with pie slice not reverting to original position after slicing when animation is disabled. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1767">#1767</a>. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1846">#1846</a>.</li>
<li>Fixed issue with last marker missing in certain withs of dual axis charts. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1858">#1858</a>.</li>
<li>Fixed issue with error on custom exporting buttons containing no symbol. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1822">#1822</a>.</li>
<li>Fixed issue in MooTools and Prototype adapters when used with highcharts-more.js. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1834">#1834</a>.</li>
<li>Removed php-phantomjs, this will not be supported any longer</li>
<li>Fixed issue with mispositioned pies in inverted charts after resizing. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1795">#1795</a>.</li>
<li>Fixed pointer to error message for wrong axis binding. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1800">#1800</a>.</li>
<li>Fixed issue with pie wrong chart data label connectors disappearing when hiding slice. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1810">#1810</a>.</li>
<li>Fixed issue with wrong min and max in selection events on categorized axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1207">#1207</a>.</li>
<li>Fix a bug when stacks wasn't updated after extremes change</li>
<li>Partially fixed issue with blurred legend contents in PDF export. Issue <a href="https://github.com/highslide-software/highcharts.com/issues/1782">#1782</a>.</li>
<li>Fixed issue with plot background image not being used in exported images. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1765">#1765</a>.</li>
<li>Fixed issue with higher ranks X axis labels not being applied to the last label. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1760">#1760</a>. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/1649">#1649</a>.</li>
<li>Fixed exception after destroying a chart while the tooltip is still visible. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1728">#1728</a>.</li>
<li>Fixed missing tooltips on flags when data grouping was disabled. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1730">#1730</a>.</li>
<li>Fixed issue with missing text decoration on data labels in export. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1729">#1729</a>.</li>
<li>Don't neglect sum points in positive bar calculations, issue <a href="https://github.com/highslide-software/highcharts.com/issues/1653">#1653</a></li>
<li>Fix error related to waterfall positive bar starting at negative value, close <a href="https://github.com/highslide-software/highcharts.com/issues/1653">#1653</a> and <a href="https://github.com/highslide-software/highcharts.com/issues/1732">#1732</a></li>
<li>Fixed JS error when a pie series is present in an inverted chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1736">#1736</a>.</li>
<li>Fixed issue with click events not being fired unless the mouse hasn't moved a pixel.</li>
<li>Fixed JS error issue in bubble charts when first series is hidden. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1737">#1737</a>.</li>
<li>Fixed issue with wrong sized bubbles when one series contains no points. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1735">#1735</a>.</li>
<li>Fixed IE8 issue with mislocated bubbles after hiding and showing a series.</li>
<li>Fixed issue with the smallest bubbles in a bubble chart occasionally disappearing. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1710">#1710</a>.</li>
<li>Fixed issue with missing markers on negative points when explicit color was set. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1702">#1702</a>.</li>
<li>Fixed issue with toolip appearing in printed chart when tooltip.shared was enabled. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1707">#1707</a>.</li>
<li>Fixed issue with chart axes and chart options getting out of sync on Axis.remove. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1706">#1706</a>.</li>
<li>Fixed issue with wrong tooltip date header format on single points. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/568">#568</a>.</li>
<li>Fixed issue with negativeColor not taking effect on area and similiar series types when lineWidth is 0. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1705">#1705</a>.</li>
<li>Fixed issue with null higher value in area range plots being interpreted as 0. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1703">#1703</a>.</li>
</ul>
<p>Version 3.0.1 (2013-04-09)</p>
<ul>
<li>Added new option, <a href="http://api.highcharts.com#tooltip.followTouchMove">tooltip.followTouchMove</a>. When this is true, the tooltip can be moved by dragging a single finger across the chart, like in Highcharts 2. When it is false, dragging a single finger is ignored by the chart, and causes the whole page to scroll. This applies only when zooming is not enabled. <a href="https://github.com/highslide-software/highcharts.com/issues/1644">Issue #1644</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/1662">Issue #1662</a>.</li>
<li>Added internationalization for the Print chart text. <a href="https://github.com/highslide-software/highcharts.com/issues/1656">Issue #1656</a>.</li>
<li>Fixed JS error on hiding negative bubbles. <a href="https://github.com/highslide-software/highcharts.com/issues/1691">Issue #1691</a>.</li>
<li>Fixed issue with wrong axis label break on vertical axis when marginLeft is set. <a href="https://github.com/highslide-software/highcharts.com/issues/1580">Issue #1580</a>.</li>
<li>Made loading mask use the current chart size, not the initial one. <a href="https://github.com/highslide-software/highcharts.com/issues/1601">Issue #1601</a>.</li>
<li>Fixed issue with unintentionally filled arcs in oldIE. <a href="https://github.com/highslide-software/highcharts.com/issues/1642">Issue #1642</a>.</li>
<li>Fixed missing crosshairs on logarithmic axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1671">Issue #1671</a>.</li>
<li>Fixed issue with missing median line on box plots in oldIE. <a href="https://github.com/highslide-software/highcharts.com/issues/1676">Issue #1676</a>.</li>
<li>Fixed issue with zooming near the edges of a bubble chart. <a href="https://github.com/highslide-software/highcharts.com/issues/1673">Issue #1673</a>.</li>
<li>Fixed another issue with label height in IE. <a href="https://github.com/highslide-software/highcharts.com/issues/1669">Issue #1669</a>.</li>
<li>Fixed issue with bent pie data label connectors when slicedOffset has a high value. <a href="https://github.com/highslide-software/highcharts.com/issues/1678">Issue #1678</a>.</li>
<li>Fixed regression issue with wrong Y axis extremes on logarithmic axes. <a href="https://github.com/highslide-software/highcharts.com/issues/1670">Issue #1670</a>.</li>
<li>Fixed regression with colorByPoint option in columns with negative value. <a href="https://github.com/highslide-software/highcharts.com/issues/1635">Issue #1635</a>.</li>
<li>Fixed regression with thousandsSep and decimalPoint options not being respected in the tooltip by default. <a href="https://github.com/highslide-software/highcharts.com/issues/1637">Issue #1637</a>.</li>
<li>Fixed issue with the first label on a datetime axis not taking a higher rank, like day format on an axis based on hours. <a href="https://github.com/highslide-software/highcharts.com/issues/1649">Issue #1649</a>.</li>
<li>Fixed issue with chart cursor being overwritten on chart click. <a href="https://github.com/highslide-software/highcharts.com/issues/1650">Issue #1650</a>.</li>
<li>Fixed regression with pies being clipped to the plot area by default. <a href="https://github.com/highslide-software/highcharts.com/issues/1647">Issue #1647</a>.</li>
<li>Fixed issue with area stacking. <a href="https://github.com/highslide-software/highcharts.com/issues/1651">Issue #1651</a>.</li>
<li>Fixed issue with horizontal offset for exporting context button not working. <a href="https://github.com/highslide-software/highcharts.com/issues/1654">Issue #1654</a>.</li>
<li>Fixed regression with minor grid lines and alternate grid bands not being hidden on axis hide. <a href="https://github.com/highslide-software/highcharts.com/issues/1667">Issue #1667</a>.</li>
<li>Fixed issue with stacked areas containing no data. <a href="https://github.com/highslide-software/highcharts.com/issues/1661">Issue #1661</a>.</li>
<li>Fixed regression with tooltips not showing on bar charts in IE7. <a href="https://github.com/highslide-software/highcharts.com/issues/1663">Issue #1663</a>.</li>
<li>Fixed Highcharts 3 regression with corrupted columns when redrawing the chart while animating. <a href="https://github.com/highslide-software/highcharts.com/issues/1623">Issue #1623</a>.</li>
</ul>
<p>Version 3.0.0 (2013-03-22)</p>
<ul>
<li>See the <a href="/component/content/article/2-news/54-highcharts-3-0-released">release announcement</a></li>
</ul>
<p>Version 2.3.5 (2012-12-19)</p>
<ul>
<li>Fixed problem with gauge dial overlapping data label. <a href="https://github.com/highslide-software/highcharts.com/issues/1403">Issue #1403</a>.</li>
<li>Fixed issue with data labels of hidden series being visible after exporting from IE8. <a href="https://github.com/highslide-software/highcharts.com/issues/1407">Issue #1407</a>.</li>
<li>Fixed IE6 and IE7 issue with image symbol markers not always being displayed after page reload. <a href="https://github.com/highslide-software/highcharts.com/issues/292">Issue #292</a>.</li>
<li>Fixed endless loop in Highstock JavaScript and SVG errors in all charts when setting a negative chart width. <a href="https://github.com/highslide-software/highcharts.com/issues/1393">Issue #1393</a>.</li>
<li>Fixed issue with wrong tooltip position in Android 4.0. <a href="https://github.com/highslide-software/highcharts.com/issues/1385">Issue #1385</a>.</li>
<li>Fixed issue with bottom checkboxes in a legend being hidden after cancelling legend scroll by resize.</li>
<li>Fixed issue with series-level image markers not being visible in exported charts.</li>
<li>Fixed issue with pie slices not being added to the legend after the first redraw. <a href="https://github.com/highslide-software/highcharts.com/issues/1329">Issue #1329</a>.</li>
<li>Fixed wrong Y axis extremes on stacked line series chart. <a href="https://github.com/highslide-software/highcharts.com/issues/1376">Issue #1376</a>.</li>
<li>Fixed issue with wrong placement of image backgrounds on labels, specifically image shapes in flag charts. <a href="https://github.com/highslide-software/highcharts.com/issues/1378">Issue #1378</a>.</li>
<li>Fixed problem with multiple buttons with menu items in exporting module.</li>
<li>Fixed issue with visible borders in exported chart when borderWidth = 0 on column charts in Firefox. <a href="https://github.com/highslide-software/highcharts.com/issues/1369">Issue #1369</a>.</li>
<li>Added <a href="http://api.highcharts.com/highcharts/#plotOptions.pie.startAngle">pie.startAngle</a> option.</li>
<li>Fixed issue with tooltip remaining visible after hiding its series. <a href="https://github.com/highslide-software/highcharts.com/issues/1361">Issue #1361</a>.</li>
<li>Added a delay before hiding exporting menu to prevent the menu from hiding in IE when hovering over neighbour elements and button title. <a href="https://github.com/highslide-software/highcharts.com/issues/1357">Issue #1357</a>.</li>
<li>Fixed issue with reflowing in IE &lt; 9, as well as frozen pivot on resizing gauges in IE &lt; 9. <a href="https://github.com/highslide-software/highcharts.com/issues/1235">Issue #1235</a>.</li>
<li>Fixed issue with backgrounds on multiple gauges within the same chart. <a href="https://github.com/highslide-software/highcharts.com/issues/1244">Issue #1244</a>.</li>
<li>Fixed JS error in IE8 when trying to assign a gradient color to image markers. <a href="https://github.com/highslide-software/highcharts.com/issues/1336">Issue #1336</a>.</li>
<li>Fixed issue with squished X axis labels on column charts with one single point. Now if the series only contains one value, only one tick is shown. <a href="https://github.com/highslide-software/highcharts.com/issues/1337">Issue #1337</a>.</li>
<li>Fixed issue with tick labels using useHTML and step being slightly visible. <a href="https://github.com/highslide-software/highcharts.com/issues/1338">Issue #1338</a>.</li>
<li>Fixed issue with legend items not responding to mouse interaction when legend.useHTML is true. Fixed positioning of legend items in Chrome when legend.useHTML is true. <a href="https://github.com/highslide-software/highcharts.com/issues/1249">Issue #1249</a>.</li>
<li>Fixed issue with wrong positioning of bars in a bar chart when grouping was set to false. <a href="https://github.com/highslide-software/highcharts.com/issues/1251">Issue #1251</a>.</li>
<li>Fixed issue with useHTML, fixed width and word wrapping in Firefox. <a href="https://github.com/highslide-software/highcharts.com/issues/1254">Issue #1254</a>.</li>
<li>Fixed issue with legend checkbox position not being updated in navigatable legends. <a href="https://github.com/highslide-software/highcharts.com/issues/1253">Issue #1253</a>.</li>
<li>Implemented warning on unsorted data for line charts and stock charts. <a href="https://github.com/highslide-software/highcharts.com/issues/725">Issue #725</a>. Also throw a Highcharts error on unsorted column data, because the column distance and width logic relies on sorted data. Related to #987.</li>
<li>Added line.step options: "left", "center", "right". Fixed issue with step in area ranges. <a href="https://github.com/highslide-software/highcharts.com/issues/1330">Issue #1330</a>.</li>
<li>Added a global lookup array, Highcharts.charts, holding all available chart instances in the page. This prevents issues with writing multiple charts to the same div.</li>
<li>Implemented better animation for donuts. <a href="https://github.com/highslide-software/highcharts.com/issues/779">Issue #779</a>.</li>
<li>Fixed issue with wrong placement of minor grid lines on datetime axes. <a href="https://github.com/highslide-software/highcharts.com/issues/1314">Issue #1314</a>.</li>
<li>Fixed issue with Highcharts.dateFormat only replacing the first occurence of a pattern. <a href="https://github.com/highslide-software/highcharts.com/issues/953">Issue #953</a>.</li>
<li>Reorganized event assignment so that devices with touch support not only observe the touch events, but also the corresponding mouse events. This prepares for the new generation of browsers with both mouse and touch support. <a href="https://github.com/highslide-software/highcharts.com/issues/1305">Issue #1305</a>.</li>
<li>Prevented getTimeTicks from creating corrupted array. Related to #1301.</li>
<li>Fixed issue with wrong dial rotation in angular gauges when used with logarithmic axes.</li>
<li>Fixed memory leaks in IE7 releated to SVGRenderer.label and MooTools. Refering to #1298.</li>
<li>Fixed issue with blinking column animation on extremely large columns. <a href="https://github.com/highslide-software/highcharts.com/issues/1303">Issue #1303</a>.</li>
<li>Fixed issue with data label alignment not being updated after point update. <a href="https://github.com/highslide-software/highcharts.com/issues/1306">Issue #1306</a>.</li>
<li>Fixed broken height detection of rotated labels in IE9. <a href="https://github.com/highslide-software/highcharts.com/issues/1307">Issue #1307</a>.</li>
<li>Fixed line graph tracker objects so that the stroke-linejoin is round. This ensures better tracking around spikes in the data. <a href="https://github.com/highslide-software/highcharts.com/issues/1225">Issue #1225</a>.</li>
<li>Fixed issue with placement of data labels on a column chart with reversed Y axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1308">Issue #1308</a>.</li>
<li>Fixed issue with visible gray marker objects appearing after Batik export from IE10.</li>
<li>Fixed error on exporting an empty chart due to labels with y attribute of NaN. <a href="https://github.com/highslide-software/highcharts.com/issues/1300">Issue #1300</a>.</li>
<li>Improved rendering speed of data labels by not adding a rectangle for labels without border or background.</li>
<li>Fixed issue with setting tooltip.valueDecimals to 0. <a href="https://github.com/highslide-software/highcharts.com/issues/1248">Issue #1248</a>.</li>
<li>Fixed JavaScript error on redrawing chart after series removal in IE &lt; 9. <a href="https://github.com/highslide-software/highcharts.com/issues/1258">Issue #1258</a>.</li>
<li>Better detection for repeating gradients. Instead for checking for the same object, the actual gradient definition is now used as the key. <a href="https://github.com/highslide-software/highcharts.com/issues/1282">Issue #1282</a>.</li>
<li>Fixed issue where the upper data label of a range point wasn't destroyed on Series.setData(). <a href="https://github.com/highslide-software/highcharts.com/issues/1286">Issue #1286</a>.</li>
</ul>
<p>Version 2.3.3 (2012-10-04)</p>
<ul>
<li>Refactored data label alignment logic for better maintainabilit. <a href="https://github.com/highslide-software/highcharts.com/issues/1168">Issue #1168</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/1212">Issue #1212</a>.</li>
<li>Worked around label positioning problem in IE9 and IE10. <a href="https://github.com/highslide-software/highcharts.com/issues/1101">Issue #1101</a>.</li>
<li>Fixed gauge series data labels after regression testing</li>
<li>Fixed issue with yAxis labels with a minus prefix being wrapped into two lines. <a href="https://github.com/highslide-software/highcharts.com/issues/1273">Issue #1273</a>.</li>
<li>Fixed JS errors on continuously destroying charts in window.resize. <a href="https://github.com/highslide-software/highcharts.com/issues/1257">Issue #1257</a>.</li>
<li>Fixed orphaned marker after Point.update to null. <a href="https://github.com/highslide-software/highcharts.com/issues/1269">Issue #1269</a>.</li>
<li>Fixed issue with text wrapping and bounding boxes in Android 2. <a href="https://github.com/highslide-software/highcharts.com/issues/1140">Issue #1140</a>.</li>
<li>Worked around Safari 6 bug causing disappearing pie slices. <a href="https://github.com/highslide-software/highcharts.com/issues/1208">Issue #1208</a>.</li>
<li>Fixed wrong positions of polar column chart data labels. <a href="https://github.com/highslide-software/highcharts.com/issues/1199">Issue #1199</a>.</li>
<li>Fixed error in VML browsers when redrawing a chart with an image background. <a href="https://github.com/highslide-software/highcharts.com/issues/1245">Issue #1245</a>.</li>
<li>Fixed issue with shadow.offsetX and shadow.offsetY set to 0 being replaced by 1. <a href="https://github.com/highslide-software/highcharts.com/issues/1224">Issue #1224</a>.</li>
<li>Fixed text rotation with useHTML in Firefox 15. <a href="https://github.com/highslide-software/highcharts.com/issues/916">Issue #916</a>.</li>
<li>Fixed issue with tooltip spilling out to the left in inverted chart. <a href="https://github.com/highslide-software/highcharts.com/issues/1231">Issue #1231</a>.</li>
<li>Fixed issue with null points in stacked columns on a logarithmic scale. <a href="https://github.com/highslide-software/highcharts.com/issues/1232">Issue #1232</a>.</li>
<li>Fixed issue with colors and borderWidth not being applied to individual dials in gauges.</li>
<li>Use point.name in the tooltip header even on datetime axis. <a href="https://github.com/highslide-software/highcharts.com/issues/976">Issue #976</a>.</li>
<li>Fixed JavaScript errors in Firefox 3.6 when displaying the tooltip. <a href="https://github.com/highslide-software/highcharts.com/issues/1236">Issue #1236</a>.</li>
<li>Fixed floating number errors in stack totals. <a href="https://github.com/highslide-software/highcharts.com/issues/1223">Issue #1223</a>.</li>
<li>Fixed issue in 2.3 with the sizing of linked axes. <a href="https://github.com/highslide-software/highcharts.com/issues/84">Issue #84</a>.</li>
<li>Fixed issue with span styles not being applied across line breaks in SVGRenderer. <a href="https://github.com/highslide-software/highcharts.com/issues/390">Issue #390</a>.</li>
<li>Fixed issue with series marker options not being reflected in the legend symbol. <a href="https://github.com/highslide-software/highcharts.com/issues/674">Issue #674</a>.</li>
</ul>
<p>Version 2.3.2 (2012-08-31)</p>
<ul>
<li>Added support for rotation of text when useHTML = true in modern browsers. <a href="https://github.com/highslide-software/highcharts.com/issues/916">Issue #916</a>.</li>
<li>Added new option, <a href="http://api.highcharts.com/highcharts/#plotOptions.pie.ignoreHiddenPoint">ignoreHiddenPoint</a>, for pies.</li>
<li>Changed the default line width for area range charts to 1 to avoid the area disappearing altogether in ranges where the min and max are equal. <a href="https://github.com/highslide-software/highcharts.com/issues/1213">Issue #1213</a>.</li>
<li>Reorganized VMLRenderer to move groups (divs) out of the viewport instead of toggling CSS visibility. This provides a faster and more compact fix for #61 and #586.</li>
<li>Rendering performance improvement due to better caching of bounding box for texts, leading to less DOM traffic.</li>
<li>Fixed JS error in IE7. <a href="https://github.com/highslide-software/highcharts.com/issues/1214">Issue #1214</a>.</li>
<li>Fixed JS error on zooming in to an arearange series in IE9. Prevented arearange data labels from being orphaned when zooming in below cropThreshold. &lt;ahref="https://github.com/highslide-software/highcharts.com/issues/1209"&gt;Issue #1209.</li>
<li>Fixed issue with data labels appearing outside plot area on initial load</li>
<li>Fixed 2.3 regression regarding unstable sorting in Chrome. <a href="https://github.com/highslide-software/highcharts.com/issues/337">Issue #337</a>.</li>
<li>Fixed auto connect calculation in polar charts when category values are skipped. <a href="https://github.com/highslide-software/highcharts.com/issues/1197">Issue #1197</a>.</li>
<li>Fixed issue with alternateGridColor placement not adhering to tickmarkPlacement setting. <a href="https://github.com/highslide-software/highcharts.com/issues/949">Issue #949</a>.</li>
<li>Fixed issue with config objects for data skipping a place in the color rotator in export. <a href="https://github.com/highslide-software/highcharts.com/issues/868">Issue #868</a>.</li>
<li>Fixed regression with stacking on a logarithmic axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1200">Issue #1200</a>.</li>
</ul>
<p>Version 2.3.1 (2012-08-29)</p>
<ul>
<li>Fixed security issue in export server.</li>
</ul>
<p>Version 2.3.0 (2012-08-24)</p>
<ul>
<li>Added radial gauges.</li>
<li>Added polar projection for cartesian chart types.</li>
<li>Added range series types: area range, area spline range and column range.</li>
<li>Added radial gradients for pies.</li>
<li>Fixed bugs</li>
</ul>
<p>Version 2.2.5 (2012-06-08)</p>
<ul>
<li>Fixed Android 2 compatibility problem. <a href="https://github.com/highslide-software/highcharts.com/issues/1034">Issue 1034</a></li>
<li>Fixed issue with legend text not wrapping correctly to itemStyle.width option ion IE8. <a href="https://github.com/highslide-software/highcharts.com/issues/1021">Issue 1021</a>.</li>
<li>Removed double clipping assignment in development branch, and subsequent JS error on Series.remove in legacy IE. <a href="https://github.com/highslide-software/highcharts.com/issues/1027">Issue 1027</a>.</li>
<li>Fixed broken minRange after the #878 fix.</li>
<li>Reverted fix for #904 where a line with lineWidth of 0 became visible in hover state. <a href="https://github.com/highslide-software/highcharts.com/issues/1016">Issue 1016</a>.</li>
<li>Added legend.maxHeight option for paging.</li>
<li>Fixed issue with chart title and subtitle responding too late to chart resize. <a href="https://github.com/highslide-software/highcharts.com/issues/1012">Issue 1012</a>.</li>
<li>Fixed JS error on quickly changing range selection in Highstock in column charts. <a href="https://github.com/highslide-software/highcharts.com/issues/1004">Issue 1004</a>.</li>
<li>Fixed issue with clipping of legend after resize to a greater width. <a href="https://github.com/highslide-software/highcharts.com/issues/1001">Issue 1001</a>.</li>
<li>Fixed issue with size detection of rotated text in exported charts legacy IE. <a href="https://github.com/highslide-software/highcharts.com/issues/997">Issue 997</a>.</li>
<li>Fixed issue with original mouse event information not being passed over to legendItemClick handler. Added it to event.browserEvent. <a href="https://github.com/highslide-software/highcharts.com/issues/4">Issue 4</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/992">Issue 992</a>.</li>
<li>Fixed issue with the series.pointRange option not affecting the width of columns.</li>
<li>Added tooltip formatting options: percentageDecimals, percentagePrefix, percentageSuffix, totalDecimals, totalPrefix, totalSuffix. <a href="https://github.com/highslide-software/highcharts.com/issues/864">Issue 864</a>.</li>
<li>Fixed issue with error #10 appearing on a chart with all null data if yAxis.min was set.</li>
<li>Fixed issue when colorByPoint was set to true, it started from the second item in the color array, whereas the first one was assigned to the whole series. <a href="https://github.com/highslide-software/highcharts.com/issues/974">Issue 974</a>.</li>
<li>Fixed JS error on setting categories with fewer items before the chart was redrawn. <a href="https://github.com/highslide-software/highcharts.com/issues/970">Issue 970</a>.</li>
</ul>
<p>Version 2.2.4 (2012-05-31)</p>
<ul>
<li>Added paging for the legend. Added <a href="/ref/#legend-navigation">legend.navigation</a> options set.</li>
<li>Added <a href="/ref/#tooltip-positioner">tooltip.positioner</a> option.</li>
<li>Refactored major parts of Highcharts by splitting the Chart object into separate prototypes. This eases extendability as the objects are available from the outside, and individual methods and properties can be overridden.</li>
<li>Worked around issue with overlapping shadows on stacked columns. Shadow elements are now cut off.</li>
<li>Made the tooltip follow the mouse position for shared tooltips with more than 1 series. This fixes problems with the tooltip being rendered close to the top series (or alternatively in another computed middle position) when the user is actually hovering another series. <a href="https://github.com/highslide-software/highcharts.com/issues/424">Issue #424</a>.</li>
<li>Worked around compatibility issue with jQuery 1.8 preview.</li>
<li>Fix bug that removed all win.resize handlers. <a href="https://github.com/highslide-software/highcharts.com/issues/982">Issue #982</a>.</li>
<li>Fixed issue with X axis labels becoming left aligned instead of centered in IE8 on an axis with many labels. <a href="https://github.com/highslide-software/highcharts.com/issues/983">Issue #983</a>.</li>
<li>Fixed problem with unwanted chart border when printing in Chrome. <a href="https://github.com/highslide-software/highcharts.com/issues/980">Issue #980</a>.</li>
<li>Fixed unresponsive browser in IE8 Standards when exporting pie charts with data labels. <a href="https://github.com/highslide-software/highcharts.com/issues/968">Issue #968</a>.</li>
<li>Fixed issue with xAxis label formats not landing on whole days when using local time. <a href="https://github.com/highslide-software/highcharts.com/issues/950">Issue #950</a>.</li>
<li>Fixed issue with tooltips not displaying over pie charts positioned outside plot area. <a href="https://github.com/highslide-software/highcharts.com/issues/68">Issue #68</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/956">Issue #956</a>.</li>
<li>Removed warnings on accessing layerX and layerY in Chrome.</li>
<li>Fixed JS error in Firefox on destroying chart with data labels using MooTools adapter. <a href="https://github.com/highslide-software/highcharts.com/issues/958">Issue #958</a>.</li>
<li>Added time-aware xDateFormat for tooltip headers in datetime axes. Added tooltip.dateTimeLabelFormat option. <a href="https://github.com/highslide-software/highcharts.com/issues/568">Issue #568</a>.</li>
<li>Fixed issue with black background in data labels in legacy IE and MooTools adapter. <a href="https://github.com/highslide-software/highcharts.com/issues/947">Issue #947</a>.</li>
<li>Fixed excessive looping in setTooltipPoints in certain conditions involving hidden series. <a href="https://github.com/highslide-software/highcharts.com/issues/945">Issue #945</a>.</li>
</ul>
<p>Version 2.2.3 (2012-05-07)</p>
<ul>
<li>Fixed issue with ticks and gridlines not being aligned after chart redraw.</li>
</ul>
<p>Version 2.2.2 (2012-04-26)</p>
<ul>
<li>Fixed bugs.</li>
</ul>
<p>Version 2.2.1 (2012-03-15)</p>
<ul>
<li>Added box options like <code>borderWidth</code>, <code>backgroundColor</code> and more for data labels.</li>
<li>Fixed bugs.</li>
</ul>
<p>Version 2.2.0 (2012-02-16)</p>
<ul>
<li>Better performance with thousands of points.</li>
<li>Improved useHTML feature on labels to skip SVG text generation and use true HTML bounding box.</li>
<li>Added configuration options to the Reset button.</li>
<li>Added support for logarithmic axes.</li>
<li>Numerous bug fixes.</li>
<li>Added partial support for Android 2.x. See <a href="/documentation/compatibility/#android2">the compatibility page</a> for limitations.</li>
</ul>
<p>Version 2.1.9 (2011-11-11)</p>
<ul>
<li>Fixed memory leaks in legacy IE.</li>
</ul>
<p>Version 2.1.8 (2011-11-05)</p>
<ul>
<li>Fixed compatibility issue with jQuery 1.7.</li>
</ul>
<p>Version 2.1.7 (2011-10-19)</p>
<ul>
<li>Added <code>useHTML</code> option for most text related configuration objects.</li>
<li>Added <code>softConnector</code> option for pie data labels.</li>
<li>Added <code>chart.selectionMarkerFill</code> option.</li>
<li>Fixed issues with data label positioning for pies.</li>
<li>Fixed issue with tooltips covering point in certain cases.</li>
<li>Fixed issues with latest MooTools.</li>
<li>Worked on memory leak issues.</li>
<li>Fixed issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a>under dates since the last maintenance version.</li>
</ul>
<p>Version 2.1.6 (2011-07-08)</p>
<ul>
<li>Rewrote data label positioning for pies.</li>
<li>Fixed issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.1.5 (2011-06-22)</p>
<ul>
<li>Added shadows for pies.</li>
<li>Exported charts now respect user set min and max after zoom and visibility option.</li>
<li>Added option series.connectNulls to connect line graphs through null points.</li>
<li>Added support for exporting image symbols in charts.</li>
<li>Added data labels for stack totals and improved positioning of column and bar data labels.</li>
<li>Fixed issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.1.4 (2011-03-02)</p>
<ul>
<li>Updated MooTools adapter to work with MooTools 1.3.</li>
<li>Fixed issue with charts not displaying in IE on pages with large background images or external resources.</li>
<li>Fixed issue Safari Mobile crashing after removing a series dynamically.</li>
<li>Fixed minor issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.1.3 (2011-02-07)</p>
<ul>
<li>Added soft line breaks for long category labels.</li>
<li>Fixed bugs as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.1.2 (2011-01-12)</p>
<ul>
<li>Added adapter for the Prototype JavaScript framework.</li>
<li>Added vertical centering logic for data labels on bars when y not given.</li>
<li>Fixed bugs as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.1.1 (2010-12-03)</p>
<ul>
<li>Added Highcharts.version property.</li>
<li>Fixed bugs as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.1.0 (2010-11-23)</p>
<ul>
<li>Implemented resizing and reflowing of charts.</li>
<li>Added automatic margin adjustment.</li>
<li>Added shared tooltip and crosshair.</li>
<li>Added more animation options.</li>
<li>Added category label anti collision options.</li>
<li>Added groups and stacks combination.</li>
<li>Added data label connectors for pies.</li>
<li>Optimized for iPad.</li>
<li>Added dashed lines.</li>
<li>Added labels for plot bands and plot lines.</li>
<li>Added a separate MooTools adapter.</li>
<li>Fixed bugs.</li>
<li>Upgrade notes:
<ul>
<li><strong>Legend positioning:</strong> Since version 2.1 Highcharts is aware of the size of the titles and legend and will try to make room for these in the chart's margins. When upgrading from older versions, this may lead to too great margins depending on where your legend is positioned. To prevent this, set a new option, <em>floating</em> to true in your legend options. Furthermore, the x and y values of the legend position is now relative to the <em>chart.spacingTop</em> and <em>chart.spacingLeft</em> etc. properties instead of the chart's outer edge.</li>
</ul>
</li>
</ul>
<p>Version 2.0.5 (2010-09-17)</p>
<ul>
<li>Optimized for IE9 Beta 1. Highcharts is now running beautifully under IE9 Standards mode, but quirks mode is slower than IE8.</li>
<li>Added second parameter, callback, for Highcharts.Chart().</li>
<li>Added text parameter for showLoading().</li>
<li>Fixed bugs as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.0.4 (2010-09-07)</p>
<ul>
<li>Fixed bugs as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 2.0.3 (2010-08-07)</p>
<ul>
<li>Fixed JS error on destroying chart with events in IE.</li>
</ul>
<p>Version 2.0.2 (2010-08-06)</p>
<ul>
<li>Added linked axes</li>
<li>Fixed minor bugs as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a>.</li>
</ul>
<p>Version 2.0.1 (2010-07-18)</p>
<ul>
<li>Removed chart.updatePosition method. Recalculating the position after moving the container is no longer necessary.</li>
<li>Fixed some minor bugs from 2.0.0.</li>
<li>Release notes:
<ul>
<li>chart.updatePosition is deprecated.</li>
</ul>
</li>
</ul>
<p>Version 2.0.0 (2010-07-13)</p>
<ul>
<li>Completely rewritten rendering layer based on SVG and VML.</li>
<li>Excanvas no longer needed.</li>
<li>Added exporting module for exporting to PNG, JPG, PDF and SVG as well as printing the charts.</li>
<li>Added donut charts</li>
<li>Better positioning options for legends</li>
<li>Dramatic speed improvements in Internet Explorer for series with many points.</li>
<li>Fixed memory build-up issues.</li>
<li>Fixed minor bugs reported since 1.2.5.</li>
<li>Release notes:
<ul>
<li>series.dataURL and series.dataParser are deprecated. Use jQuery ajax instead. Example can be seen at the <a href="/demo/?example=line-ajax&amp;theme=default">ajax loaded data</a> example.</li>
</ul>
</li>
</ul>
<p>Version 1.2.5 (2010-04-13)</p>
<ul>
<li>Added chart.updatePosition and chart.container.</li>
<li>Added possibility for initially empty charts.</li>
<li>Added options.chart.showAxes.</li>
<li>Added series.pointWidth for column series.</li>
<li>Added step property to lines.</li>
<li>Added legend.reversed option.</li>
<li>Fixed zooming issues on inverted charts.</li>
<li>Fixed error on stacking of only null points.</li>
<li>Fixed issue with excanvas not being initialied before Highcharts.</li>
<li>Fixed tickInterval issue.</li>
<li>Fixed image symbols not removed on zooming.</li>
<li>Fixed issue with datalabels not removed on zoom.</li>
<li>Fixed mouse events like click and mouseover not working when tooltip was disabled.</li>
<li>Fixed roundoff issues on axis labels on Firefox/Mac.</li>
<li>Fixed issues with setData in pies.</li>
</ul>
<p>Version 1.2.4 (2010-03-10)</p>
<ul>
<li>Added resetZoom and resetZoomTitle to the lang object.</li>
<li>Added the global.useUTC option.</li>
<li>Fixed error message in IE on window unload.</li>
<li>Fixed tooltip width detection issue in IE7.</li>
</ul>
<p>Version 1.2.3 (2010-03-08)</p>
<ul>
<li>Fixed error messages appearing in some cases after hiding all series.</li>
<li>Fixed issue with toggling the visibility of stacked columns.</li>
</ul>
<p>Version 1.2.2 (2010-03-05)</p>
<ul>
<li>Added lang.decimalPoint and lang.thousandsSep options.</li>
<li>Added chart.destroy method.</li>
<li>Added axis.setCategories method.</li>
<li>Fixed memory leaks.</li>
<li>Fixed two error messages.</li>
<li>Fixed pie slice border issue with WebKit.</li>
<li>Fixed minor issue with maxZoom and min/max values.</li>
<li>Fixed issues with null values.</li>
<li>Fixed rectangle redrawing issue with column and bar plots.</li>
</ul>
<p>Version 1.2.1 (2010-02-25)</p>
<ul>
<li>Fixed issue on initially hidden series.</li>
<li>Fixed issue with hover area on bars.</li>
<li>Fixed addPoint for pies.</li>
</ul>
<p>Version 1.2.0 (2010-02-23)</p>
<ul>
<li>Added methods and properties for working with charts, axes, series and points dynamically after render time.</li>
</ul>
<p>Version 1.1.3 (2010-02-03)</p>
<ul>
<li>Fixed a bug in the MooTools adapter.</li>
</ul>
<p>Version 1.1.2 (2010-01-22)</p>
<ul>
<li>Fixed some minor bugs and issues.</li>
</ul>
<p>Version 1.1.1 (2010-01-06)</p>
<ul>
<li>Fixed stacked charts in Safari 4.</li>
<li>Fixed spline series crashing when only one point defined.</li>
<li>Fixed tooltip borders not responding to changes in content height.</li>
<li>Fixed wrong placement of zero plane for area series.</li>
<li>Added individual color for column and bar plots.</li>
</ul>
<p>Version 1.1.0 (2009-12-18)</p>
<ul>
<li>Added support for multiple axes with options to place the axis on opposite side and offset from the plot area.</li>
<li>Added support for events.</li>
<li>Added explicit chart width and height.</li>
<li>Added plotLines.</li>
<li>Fixed some bugs</li>
</ul>
<p>Version 1.0.2 (2009-12-09)</p>
<ul>
<li>Fixed warnings in SSL mode in IE.</li>
<li>Fixed minor display issues.</li>
</ul>
<p>Version 1.0.1 (2009-12-06)</p>
<ul>
<li>Fixed zooming for splines.</li>
<li>Fixed legend symbols disappearing on zoom.</li>
<li>Fixed area and bar stacking issue.</li>
<li>Fixed zooming in stacked areas.</li>
<li>Fixed issue with single point column plots.</li>
<li>Fixed issue with zero level in column and bar charts.</li>
</ul>
<p>Version 1.0.0 (2009-11-27)</p>
<ul>
<li>First release.</li>
</ul>
<!-- //////////////////////////////////////////////////////////// -->
<h3 id="highstock">Highstock</h3>
<p>Version 2.1.3 (2015-02-27)</p>
<ul>
<li>Most issues listed under Highcharts 4.1.3 above also apply to Highstock 2.1.3.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3857">#3857</a>, issue with setExtremes and axis breaks causing Highstock scrolling not to work across breaks.</li>
</ul>
<p>Version 2.1.2 (2015-02-27)</p>
<ul>
<li>Most issues listed under Highcharts 4.1.2 above also apply to Highstock 2.1.2.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3882">#3882</a>, plot bands not displayed if they were clipped on the edge of the plot area.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3543">#3543</a>, scrolling passed data extremes threw off navigator.</li>
</ul>
<p>Version 2.1.1 (2015-02-17)</p>
<ul>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3818">#3818</a>, ordinal axis not working.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3821">#3821</a>, tooltip error with flags.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3816">#3816</a>, tooltip not working after series data or extremes changed.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3817">#3817</a>, JS errors with pies generated by highstock.js.</li>
</ul>
<p>Version 2.1.0 (2015-02-16)</p>
<ul>
<li>Most issues listed under Highcharts 4.1.0 above also apply to Highstock 2.1.0.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3755">#3755</a>, resize cursor set on scrollbar.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3706">#3706</a>, point.color not working when series.upColor was set.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3647">#3647</a>, missing markers in scatter chart because of auto-marker logic.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3639">#3639</a>, flags don't shifting position after removing one in a stack.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3539">#3539</a>, navigator outline one pixel off at the left side.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3519">#3519</a>, markers showing outside a clipped pane.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3524">#3524</a>, multipane plot line logic interfering with grid lines in heatmap.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3487">#3487</a>, JS error on creating stock chart with empty series.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3451">#3451</a>, clipped data series when changing chart size and series animation was disabled.</li>
</ul>
<p>Version 2.0.4 (2014-09-02)</p>
<ul>
<li>Most issues listed under Highcharts 4.0.4 above also apply to Highstock 2.0.4.</li>
<li>Added buttonPosition to RangeSelector, issue <a href="https://github.com/highslide-software/highcharts.com/issues/3395">#3395</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3274">#3274</a>, range selector not working in IExx because of issue with floats and Element.blur.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3211">#3211</a>, stuck tooltip and crosshair when touch-panning.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3359">#3359</a>, higher ranked time labels not showing with negative timezoneOffset.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3125">#3125</a>, overlapping extreme X axis labels on ordinal axis in certain cases.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3339">#3339</a>, ordinal axis crashing on updating too quickly.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3299">#3299</a> where Y axis labels on subsequent panes would be drawn outside the plot area when they should be inside like the first pane.</li>
<li>Regard "startOfWeek" option in data grouping</li>
</ul>
<p>Version 2.0.3 (2014-07-03)</p>
<ul>
<li>Most issues listed under Highcharts 4.0.3 above also apply to Highstock 2.0.3.</li>
<li>Added new option, <a href="http://api.highcharts.com/highstock#rangeSelector.allButtonsEnabled">rangeSelector.allButtonsEnabled</a> to force auto-disabled buttons on inadequate range to be clickable. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2418">#2418</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3150">#3150</a> causing error when setting dataGrouping options for flag series.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3146">#3146</a> causing auto alignment of axis labels to fail.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/1326">#1326</a> causing parts of candlesticks not to print from Chrome's printing dialog.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3040">#3040</a> where the scrollbar would be mispositioned when setting the extremes of a chart outside the data range.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3018">#3018</a> causing JS errors on negative height rectangle in low-height plot area.</li>
</ul>
<p>Version 2.0.0 (2014-04-22)</p>
<ul>
<li>See the <a href="/component/content/article/2-news/134-announcing-highcharts-4/">release announcement</a>.</li>
<li>The default design has been updated with Highstock 2, but all aspects of design can be reverted to the Highstock 1.3 looks by applying options. See <a href="http://jsfiddle.net/highcharts/Y5ak7/">this design compatibilty demo</a> for a listing of what options it applies to.</li>
</ul>
<p>Version 1.3.10 (2014-03-10)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.10 above also apply to Highstock 1.3.10.</li>
<li>Fixed #2708 where panning on an ordinal axis containing candlesticks, OHLC or column series would cause the zoomed range to decrease.</li>
<li>Fixed #2696 where a single point outside the visible X range would be grouped within the first data group.</li>
<li>Fixed issue with data grouping not being reset when zooming in and multiple series were present. Closes #2692.</li>
<li>Fixed issue with first point being left out in data grouping when grouped to an earlier time. Closes #2533.</li>
<li>Fixed issue with percentage stacking in combination with data grouping. Closes #2445.</li>
<li>Fixed issue with navigator not reflecting the limitations of the minRange. Closes #2618.</li>
<li>Fixed issue with scrollbar giving the wrong results in the chart when the axis was padded with axis.max. Closes #2611.</li>
<li>Fixed issue with compare mode breaking down when at least one series had empty data. Closes #2601.</li>
<li>Fixed issue with candlestick not aligning with crosshairs.</li>
</ul>
<p>Version 1.3.9 (2014-01-15)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.9 above also apply to Highstock 1.3.9.</li>
<li>Fixed broken panning in Highstock 1.3.8. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2590">#2590</a>.</li>
<li>Highstock: Fixed regression with missing tooltip on flag series. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2573">#2573</a>.</li>
</ul>
<p>Version 1.3.8 (2014-01-09)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.8 above also apply to Highstock 1.3.8.</li>
<li>Fixed issue with flags being clipped away when connected to the last X value. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2543">#2543</a>.</li>
<li>Fixed scrollbar issue with low precision and sometimes the scrollbar not moving at all when it was too small. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1468">#1468</a>.</li>
<li>Fixed issue with adding the first series dynamically to Highstock when the range selector was enabled. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/624">#624</a>.</li>
<li>Fixed issue with selected state range selector button not reflecting the real selection in exported charts. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2458">#2458</a>.</li>
<li>Fixed issue with the navigator not spanning the full width of the main data when the base series did not fill it. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2436">#2436</a>.</li>
<li>Fixed issue with non-sync data grouping on ordinal axis when X distribution differs. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2416">#2416</a>.</li>
<li>Fixed regression with data grouping getting stuck when zooming in. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2110">#2110</a>.</li>
<li>Fixed issue with ordinal axis and selected range being normalized to selected button even when time span doesn't allow it. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2290">#2290</a>.</li>
<li>Fixed issue with range selector inputs not allowing to set date to the actual data extreme when the extreme had higher precision of the input format. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2438">#2438</a>.</li>
</ul>
<p>Version 1.3.7 (2013-10-24)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.7 above also apply to Highstock 1.3.7.</li>
<li>Added options to control the size of range selector input boxes, Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2353">#2353</a>.</li>
<li>Fixed issue with scrollbar never going fully back to the axis max after clicking the scrollbar buttons. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2293">#2293</a>.</li>
<li>Fixed regression where series got truncated after hiding another series i a chart with data grouping enabled. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2373">#2373</a>.</li>
<li>Fixed issue with scatter points showing on the edge of the chart and taking up an ordinal position even when they are well outside the axis range. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2342">#2342</a>.</li>
<li>Fixed problems with panning or scrolling back to max last value when the navigator was previously zoomed to an earlier time span. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2341">#2341</a>.</li>
<li>Enabled data grouping by default on navigator series, so that turning off data grouping in the main series doesn't automatically turn it off in the navigator.</li>
</ul>
<p>Version 1.3.6 (2013-10-04)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.6 above also apply to Highstock 1.3.6.</li>
<li>Fixed Highstock issue with stacks not being properly cleared when moving between non-grouped and grouped data, leaving artefacts in a stacked area chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1651">#1651</a>.</li>
<li>Fixed issue with min and max on the navigator X axis not being settable. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2277">#2277</a>.</li>
<li>Fixed Highstock issue with the axis maximum changing when dragging the handle to change the axis minium, and vice versa. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2163">#2163</a>.</li>
<li>Fixed Highstock error messages when initiating a chart with set X axis min and max and empty series data. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2238">#2238</a>.</li>
<li>Fixed Highstock issue where data grouping would stick and be applied when not necessary after showing a time range where it was necessary. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2110">#2110</a>.</li>
<li>Fixed Highstock issue with tooltips displaying for points outside the X axis range and crosshairs displaying in the wrong position. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1149">#1149</a>.</li>
<li>Fixed issue in Standalone Framework where event were triggered in reversed directions, causing JS errors in Highstock. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2220">#2220</a>.</li>
<li>Fixed Highstock issue with flags not being correctly positioned on an axis if the X axis line width is zero. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2032">#2032</a>.</li>
<li>Fixed Highstock issue with flags showing on the edge of the zoomed area on ordinal axes. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2198">#2198</a>.</li>
<li>Fixed Highstock issue with fake columns appearing just outside the plot area on an ordinal axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1260">#1260</a>.</li>
<li>Added upLineColor option to candlestick</li>
</ul>
<p>Version 1.3.5 (2013-08-23)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.5 above also apply to Highstock 1.3.5.</li>
<li>Disables range selector buttons which range is below the X axis automatic or explicit minimum range.</li>
<li>Make sure Highstock zoomed range is moving at least one pixel when clicking scrollbar buttons. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1716">#1716</a>.</li>
<li>Improved range selector buttons by rendering them disabled when the associated range is not available. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2050">#2050</a>.</li>
<li>Fixed Highstock issue with range selector buttons becoming unselected after scrolling and panning. Highcharts now attempts to keep the range selector button pressed even in ordinal axes, as long as it is scrolling within a relatively linear-scaled area. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2041">#2041</a>.</li>
<li>Fixed Highstock issue with the Y axis tick label not being shown when there is only one singe value and one tick. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2100">#2100</a>.</li>
</ul>
<p>Version 1.3.4 (2013-08-02)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.4 above also apply to Highstock 1.3.4.</li>
<li>Fixed Highstock regressen with column grouping not working across Y axes on either side of the chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2086">#2086</a>.</li>
<li>Fixed Highstock regression after fixing <a href="https://github.com/highslide-software/highcharts.com/issues/460">#460</a>, where animating candlestick would give JS errors if it had no whiskers before. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2094">#2094</a>.</li>
<li>Fixed Highstock regression on adding an empty series next to a series with data grouping enabled. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/2090">#2090</a>.</li>
</ul>
<p>Version 1.3.3 (2013-07-31)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.3 above also apply to Highstock 1.3.3.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/2068">#2068</a> where Highstock export failed with navigator disabled specifically for the export.</li>
<li>Fixed JS errors in Highstock when resizing a window after a chart's container is hidden. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1998">#1998</a>.</li>
<li>Fixed error message in Highstock. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/872">#872</a>.</li>
<li>Implemented shadow option for candlesticks. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1955">#1955</a>.</li>
<li>Fixed Highstock issue with range selector button becoming unselected when updating data. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/690">#690</a>.</li>
<li>Fixed Highstock issue with range selector buttons not responding to hover in IE9 and IE10. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/667">#667</a>.</li>
<li>Fixed Highstock issue with columns in different panes reserving space for eachother. Stack groups are now tied to the Y axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/642">#642</a>.</li>
<li>Fixed Highstock issue where panning fully to the right didn't dock the zoomed area. Made the sticking more tolerant. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/570">#570</a>.</li>
<li>Fixed crosshairs position when series.compare is set. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1205">#1205</a>.</li>
<li>Fixed Highstock issue with long series being grouped and short series not being grouped. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1634">#1634</a>.</li>
<li>Reorganized and improved link between scroller and its data. It now allows the base series to be added async. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/624">#624</a>.</li>
<li>Fixed Highstock issue with navigator handles disappearing when zooming on hidden data set. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1946">#1946</a>.</li>
<li>Fixed Highstock issue with gapSize and switching from ordinal to non-ordinal axis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1794">#1794</a>.</li>
<li>Fixed issue with dynamically added events being removed from axis after Axis.update. In Highstock, this caused the scrollbar not to be updated to base axis zooming after running setCategories. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1842">#1842</a>.</li>
<li>Fixed issue with running setCompare when the compare option was initially unset. The setCompare method now also works on the Navigator yAxis. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1891">#1891</a>.</li>
<li>Fixed Highstock issue on touch devices where pinch zooming a chart with multiple panes would result in the lower pane moving up to the top of the chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1701">#1701</a>.</li>
<li>Fixed "Invalid date" appearing in range selector input when opening date was 0. Related to <a href="https://github.com/highslide-software/highcharts.com/issues/1878">#1878</a>.</li>
<li>Fixed Highstock issue with changeDecimals of 0 not taking effect. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1904">#1904</a>.</li>
<li>New default value for scroller.liveRedraw to prevent redrawing the chart while scrolling the navigator on slower mobile devices. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1926">#1926</a>.</li>
<li>Fixed issue with extra lines in the middle of candlesticks when open values are equal to high values. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/460">#460</a>.</li>
<li>Added new Highstock option, rangeSelector.inputDateParser.</li>
<li>Fixed Highstock issue with JavaScript errors and disappearing charts on scrollbar click when there is only one point present in the chart. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/1851">#1851</a>.</li>
</ul>
<p>Version 1.3.2 (2013-06-05)</p>
<ul>
<li>Most issues listed under Highcharts 3.0.2 above also apply to Highstock 1.3.2.</li>
<li>Fixed Highstock issue with updating zoomed range by the range selector when all series are hidden. Closes #1568.</li>
<li>Fixed Highstock issue with mispositioned xAxis when a floating legend was present. Closes #1816.</li>
<li>Additional fix in Highstock to ensure fixed scrollbar width when dragging scrollbar.</li>
<li>Fixed issue in Highstock where data labels on the navigator would cover the navigator handles and shades. Closes #1839.</li>
<li>Added information on DOM event to setExtremes handlers from navigator in Highstock. Closes #1838.</li>
<li>Fixed Highstock errors with two points with the same X value. Closes #1588.</li>
<li>Fixed Highstock regression with scatter series not displayed. Closes #1853.</li>
<li>Fixed Highstock issue with wrong up day calculation in OHLC and candlestick. Reverts the fix for #1395. After discussion among our users, there seems to be a consensus that an up day is a day where the close value is higher than the open value. As opposed to a day where the close value is higher than the previous trade day's close value. The functionality is now reverted to what it was before. Closes #1489.</li>
</ul>
<p>Version 1.3.1 (2013-04-09)</p>
<ul>
<li>Added new option, <a href="http://api.highcharts.com#tooltip.followTouchMove">tooltip.followTouchMove</a>. When this is true, the tooltip can be moved by dragging a single finger across the chart, like in Highcharts 2. When it is false, dragging a single finger is ignored by the chart, and causes the whole page to scroll. This applies only when zooming is not enabled. <a href="https://github.com/highslide-software/highcharts.com/issues/1644">Issue #1644</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/1662">Issue #1662</a>.</li>
<li>Added internationalization for the Print chart text. <a href="https://github.com/highslide-software/highcharts.com/issues/1656">Issue #1656</a>.</li>
<li>Fixed Highstock issue with OHLC and candlestick charts on logarithmic Y axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1697">Issue #1697</a>.</li>
<li>Fixed JS error on hiding negative bubbles. <a href="https://github.com/highslide-software/highcharts.com/issues/1691">Issue #1691</a>.</li>
<li>Fixed issue with wrong axis label break on vertical axis when marginLeft is set. <a href="https://github.com/highslide-software/highcharts.com/issues/1580">Issue #1580</a>.</li>
<li>Made loading mask use the current chart size, not the initial one. <a href="https://github.com/highslide-software/highcharts.com/issues/1601">Issue #1601</a>.</li>
<li>Fixed issue with unintentionally filled arcs in oldIE. <a href="https://github.com/highslide-software/highcharts.com/issues/1642">Issue #1642</a>.</li>
<li>Fixed Highstock issue with flag image backgrounds changing size after panning in and out of view. <a href="https://github.com/highslide-software/highcharts.com/issues/1630">Issue #1630</a>.</li>
<li>Fixed missing crosshairs on logarithmic axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1671">Issue #1671</a>.</li>
<li>Fixed issue with missing median line on box plots in oldIE. <a href="https://github.com/highslide-software/highcharts.com/issues/1676">Issue #1676</a>.</li>
<li>Fixed issue with zooming near the edges of a bubble chart. <a href="https://github.com/highslide-software/highcharts.com/issues/1673">Issue #1673</a>.</li>
<li>Fixed another issue with label height in IE. <a href="https://github.com/highslide-software/highcharts.com/issues/1669">Issue #1669</a>.</li>
<li>Fixed issue with bent pie data label connectors when slicedOffset has a high value. <a href="https://github.com/highslide-software/highcharts.com/issues/1678">Issue #1678</a>.</li>
<li>Fixed regression issue with wrong Y axis extremes on logarithmic axes. <a href="https://github.com/highslide-software/highcharts.com/issues/1670">Issue #1670</a>.</li>
<li>Fixed Highstock 1.3 issue in Firefox where the page would scroll all the way up when clicking the range selector inputs. <a href="https://github.com/highslide-software/highcharts.com/issues/1645">Issue #1645</a>.</li>
<li>Fixed issue with unsynchronized data grouping when one series is shorter than the other on an ordinal axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1675">Issue #1675</a>.</li>
<li>Fixed Highstock issue with columns and derived series types being cut off on an ordinal axis. <a href="https://github.com/highslide-software/highcharts.com/issues/988">Issue #988</a>.</li>
<li>Fixed regression with colorByPoint option in columns with negative value. <a href="https://github.com/highslide-software/highcharts.com/issues/1635">Issue #1635</a>.</li>
<li>Fixed regression with thousandsSep and decimalPoint options not being respected in the tooltip by default. <a href="https://github.com/highslide-software/highcharts.com/issues/1637">Issue #1637</a>.</li>
<li>Fixed issue with the first label on a datetime axis not taking a higher rank, like day format on an axis based on hours. <a href="https://github.com/highslide-software/highcharts.com/issues/1649">Issue #1649</a>.</li>
<li>Fixed issue with chart cursor being overwritten on chart click. <a href="https://github.com/highslide-software/highcharts.com/issues/1650">Issue #1650</a>.</li>
<li>Fixed regression with pies being clipped to the plot area by default. <a href="https://github.com/highslide-software/highcharts.com/issues/1647">Issue #1647</a>.</li>
<li>Fixed issue with area stacking. <a href="https://github.com/highslide-software/highcharts.com/issues/1651">Issue #1651</a>.</li>
<li>Fixed issue with horizontal offset for exporting context button not working. <a href="https://github.com/highslide-software/highcharts.com/issues/1654">Issue #1654</a>.</li>
<li>Fixed regression with minor grid lines and alternate grid bands not being hidden on axis hide. <a href="https://github.com/highslide-software/highcharts.com/issues/1667">Issue #1667</a>.</li>
<li>Fixed issue with stacked areas containing no data. <a href="https://github.com/highslide-software/highcharts.com/issues/1661">Issue #1661</a>.</li>
<li>Fixed regression with tooltips not showing on bar charts in IE7. <a href="https://github.com/highslide-software/highcharts.com/issues/1663">Issue #1663</a>.</li>
<li>Fixed Highstock regression with disappearing points for data prior to 1970 on an ordinal axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1666">Issue #1666</a>.</li>
<li>Fixed Highcharts 3 regression with corrupted columns when redrawing the chart while animating. <a href="https://github.com/highslide-software/highcharts.com/issues/1623">Issue #1623</a>.</li>
</ul>
<p>Version 1.3.0 (2013-03-22)</p>
<ul>
<li>Highstock 1.3 is built on Highcharts 3.0, and shares the same new features for cartesian series types. See the <a href="/component/content/article/2-news/54-highcharts-3-0-released">release announcement</a> for 3.0</li>
</ul>
<p>Version 1.2.5 (2012-12-19)</p>
<ul>
<li>Applied fixes for Highcharts Basic version 2.3.5.</li>
<li>Fixed JS error on quickly scrolling a chart with image markers. <a href="https://github.com/highslide-software/highcharts.com/issues/1390">Issue #1390</a>.</li>
<li>Fixed issue with wrong Y axis min/max detection on updated OHLC points. Partially solves #1374.</li>
<li>Fixed issue when adding points to hidden OHLC or candlestick series. <a href="https://github.com/highslide-software/highcharts.com/issues/1377">Issue #1377</a>.</li>
<li>Fixed issue with zoomed range increasing when moving the range without resizing it. <a href="https://github.com/highslide-software/highcharts.com/issues/1370">Issue #1370</a>.</li>
<li>Fixed issue with Exporting dropdown menu being covered by the range selector inputs.</li>
<li>Made the range selector inputs visible in exported charts. Added <a href="http://api.highcharts.com/highstock/#rangeSelector.inputPosition">rangeSelector.inputPosition</a> option.</li>
<li>Fixed Highstock issue with YTD button when not using UTC. <a href="https://github.com/highslide-software/highcharts.com/issues/941">Issue #941</a>.</li>
<li>Added <a href="http://api.highcharts.com/highstock/#scrollbar.minWidth">scrollbar.minWidth</a> option in Highstock. <a href="https://github.com/highslide-software/highcharts.com/issues/1246">Issue #1246</a>.</li>
<li>Fixed Highstock issue with unresponsive range selector buttons by applying clipping to the mouse tracker. <a href="https://github.com/highslide-software/highcharts.com/issues/484">Issue #484</a>.</li>
</ul>
<p>Version 1.2.4 (2012-10-08)</p>
<ul>
<li>Fixed issue where the upper data label of a range point wasn't destroyed on Series.setData(). <a href="https://github.com/highslide-software/highcharts.com/issues/1286">Issue #1286</a>.</li>
<li>Fixed regression with pie charts not working when loading highstock.js. <a href="https://github.com/highslide-software/highcharts.com/issues/1284">Issue #1284</a>.</li>
</ul>
<p>Version 1.2.3 (2012-10-04)</p>
<ul>
<li>Refactored data label alignment logic for better maintainability. <a href="https://github.com/highslide-software/highcharts.com/issues/1168">Issue #1168</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/1212">Issue #1212</a>.</li>
<li>Fixed JS error on moving reset button in Highstock. <a href="https://github.com/highslide-software/highcharts.com/issues/1278">Issue #1278</a>.</li>
<li>Worked around label positioning problem in IE9 and IE10. <a href="https://github.com/highslide-software/highcharts.com/issues/1101">Issue #1101</a>.</li>
<li>Fixed issue with yAxis labels with a minus prefix being wrapped into two lines. <a href="https://github.com/highslide-software/highcharts.com/issues/1273">Issue #1273</a>.</li>
<li>Fixed JS errors on continuously destroying charts in window.resize. <a href="https://github.com/highslide-software/highcharts.com/issues/1257">Issue #1257</a>.</li>
<li>Fixed JS error message in Highstock when destroying a chart after zoom. <a href="https://github.com/highslide-software/highcharts.com/issues/1267">Issue #1267</a>.</li>
<li>Fixed regression with plotOptions.series.dataGrouping not being respected since Highstock 1.2. <a href="https://github.com/highslide-software/highcharts.com/issues/1228">Issue #1228</a>.</li>
<li>Fixed error in VML browsers when redrawing a chart with an image background. <a href="https://github.com/highslide-software/highcharts.com/issues/1245">Issue #1245</a>.</li>
<li>Fixed issue with shadow.offsetX and shadow.offsetY set to 0 being replaced by 1. <a href="https://github.com/highslide-software/highcharts.com/issues/1224">Issue #1224</a>.</li>
<li>Fixed text rotation with useHTML in Firefox 15. <a href="https://github.com/highslide-software/highcharts.com/issues/916">Issue #916</a>.</li>
<li>Fixed issue with null points in stacked columns on a logarithmic scale. <a href="https://github.com/highslide-software/highcharts.com/issues/1232">Issue #1232</a>.</li>
<li>Highstock: Fixed buggy navigator when point distribution is smaller than minRange. <a href="https://github.com/highslide-software/highcharts.com/issues/1056">Issue #1056</a>.</li>
<li>Use point.name in the tooltip header even on datetime axis. <a href="https://github.com/highslide-software/highcharts.com/issues/976">Issue #976</a>.</li>
<li>Fixed JavaScript errors in Firefox 3.6 when displaying the tooltip. <a href="https://github.com/highslide-software/highcharts.com/issues/1236">Issue #1236</a>.</li>
<li>Fixed floating number errors in stack totals. <a href="https://github.com/highslide-software/highcharts.com/issues/1223">Issue #1223</a>.</li>
<li>Fixed issue in 2.3 with the sizing of linked axes. <a href="https://github.com/highslide-software/highcharts.com/issues/84">Issue #84</a>.</li>
<li>Fixed issue with span styles not being applied across line breaks in SVGRenderer. <a href="https://github.com/highslide-software/highcharts.com/issues/390">Issue #390</a>.</li>
<li>Fixed JS error on rendering a Highstock chart with an empty series array</li>
<li>Fixed Highstock issue where the reset zoom button would not show when the navigator and rangeSelector were hidden, and the scrollbar was visible. Related to #979.</li>
<li>Fixed issue with stacks becoming inverted after update, caused by recursive redrawing. <a href="https://github.com/highslide-software/highcharts.com/issues/1119">Issue #1119</a>.</li>
<li>Fixed issue with tooltip animation timer running constantly instead of only when the tooltip is moving.</li>
<li>Fixed issue with series marker options not being reflected in the legend symbol. <a href="https://github.com/highslide-software/highcharts.com/issues/674">Issue #674</a>.</li>
</ul>
<p>Version 1.2.2 (2012-08-31)</p>
<ul>
<li>Added demonstration of async data loading in Highstock</li>
<li>Added support for rotation of text when useHTML = true in modern browsers. <a href="https://github.com/highslide-software/highcharts.com/issues/916">Issue #916</a>.</li>
<li>Changed the default line width for area range charts to 1 to avoid the area disappearing altogether in ranges where the min and max are equal. <a href="https://github.com/highslide-software/highcharts.com/issues/1213">Issue #1213</a>.</li>
<li>Reorganized VMLRenderer to move groups (divs) out of the viewport instead of toggling CSS visibility. This provides a faster and more compact fix for #61 and #586.</li>
<li>Rendering performance improvement due to better caching of bounding box for texts, leading to less DOM traffic.</li>
<li>Worked on zoomType for stock charts, allowing the reset button to work more intuitively (#979)</li>
<li>Fixed issue with IE7 trying to load "ew-resize" when dragging the scrollbar in Highstock.</li>
<li>Fixed JS error in IE7. <a href="https://github.com/highslide-software/highcharts.com/issues/1214">Issue #1214</a>.</li>
<li>Fixed JS error on zooming in to an arearange series in IE9. Prevented arearange data labels from being orphaned when zooming in below cropThreshold. <a href="https://github.com/highslide-software/highcharts.com/issues/1209">Issue #1209</a>.</li>
<li>Fixed issue where flags on an X axis with an offset, height or top option defined, were not placed correctly on the axis.</li>
<li>Fixed issue with data labels appearing outside plot area on initial load</li>
<li>Fixed 1.2 regression regarding unstable sorting in Chrome. <a href="https://github.com/highslide-software/highcharts.com/issues/337">Issue #337</a>.</li>
<li>Fixed regression with stacking on a logarithmic axis. <a href="https://github.com/highslide-software/highcharts.com/issues/1200">Issue #1200</a>.</li>
</ul>
<p>Version 1.2.1 (2012-08-29)</p>
<ul>
<li>Fixed security issue in export server.</li>
</ul>
<p>Version 1.2.0 (2012-08-24)</p>
<ul>
<li>Added range series types: area range, area spline range and column range.</li>
<li>Fixed bugs</li>
</ul>
<p>Version 1.1.6</p>
<ul>
<li>Fixed issue with legend text not wrapping correctly to itemStyle.width option ion IE8. <a href="https://github.com/highslide-software/highcharts.com/issues/1021">Issue #1021</a>.</li>
<li>Removed double clipping assignment in development branch, and subsequent JS error on Series.remove in legacy IE. <a href="https://github.com/highslide-software/highcharts.com/issues/1027">Issue #1027</a>.</li>
<li>Fixed issues with grouped data points not being destroyed after zooming on Y axis only. <a href="https://github.com/highslide-software/highcharts.com/issues/622">Issue #622</a>.</li>
<li>Fixed error message in Firefox when using jQuery UI datepicker against range selector inputs. <a href="https://github.com/highslide-software/highcharts.com/issues/1020">Issue #1020</a>.</li>
<li>Fixed stuck tooltip, crosshairs and state marker after zooming in Highstock. <a href="https://github.com/highslide-software/highcharts.com/issues/1003">Issue #1003</a>.</li>
<li>Fixed JS errors in Highstock when trying to pan a chart with no series. <a href="https://github.com/highslide-software/highcharts.com/issues/1017">Issue #1017</a>.</li>
<li>Fixed JS error on quickly changing range selection in Highstock in column charts. <a href="https://github.com/highslide-software/highcharts.com/issues/1004">Issue #1004</a>.</li>
<li>Fixed issue with size detection of rotated text in exported charts legacy IE. <a href="https://github.com/highslide-software/highcharts.com/issues/997">Issue #997</a>.</li>
<li>Fixed issue with original mouse event information not being passed over to legendItemClick handler. Added it to event.browserEvent. <a href="https://github.com/highslide-software/highcharts.com/issues/4">Issue #4</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/992">Issue #992</a>.</li>
<li>Added tooltip formatting options: percentageDecimals, percentagePrefix, percentageSuffix, totalDecimals, totalPrefix, totalSuffix. <a href="https://github.com/highslide-software/highcharts.com/issues/864">Issue #864</a>.</li>
<li>Fixed issue with error #10 appearing on a chart with all null data if yAxis.min was set.</li>
<li>Fixed issue when colorByPoint was set to true, it started from the second item in the color array, whereas the first one was assigned to the whole series. <a href="https://github.com/highslide-software/highcharts.com/issues/974">Issue #974</a>.</li>
<li>Fixed JS error on setting categories with fewer items before the chart was redrawn. <a href="https://github.com/highslide-software/highcharts.com/issues/970">Issue #970</a>.</li>
<li>Worked around compatibility issue with jQuery 1.8 preview.</li>
<li>Fixed bug that removed all win.resize handlers. <a href="https://github.com/highslide-software/highcharts.com/issues/982">Issue #982</a>.</li>
<li>Fixed issue with X axis labels becoming left aligned instead of centered in IE8 on an axis with many labels. <a href="https://github.com/highslide-software/highcharts.com/issues/983">Issue #983</a>.</li>
<li>Fixed problem with unwanted chart border when printing in Chrome. <a href="https://github.com/highslide-software/highcharts.com/issues/980">Issue #980</a>.</li>
<li>Made the tooltip follow the mouse position for shared tooltips with more than 1 series. This fixes problems with the tooltip being rendered close to the top series (or alternatively in another computed middle position) when the user is actually hovering another series. <a href="https://github.com/highslide-software/highcharts.com/issues/424">Issue #424</a>.</li>
<li>Fixed Highstock error on accessing Navigator series</li>
<li>Fixed unresponsive browser in IE8 Standards when exporting pie charts with data labels. <a href="https://github.com/highslide-software/highcharts.com/issues/968">Issue #968</a>.</li>
<li>Fixed issue with scrollbar without navigator didn't respond to Chart.setSize. Partial fix for #955.</li>
<li>Fixed issue with xAxis label formats not landing on whole days when using local time. <a href="https://github.com/highslide-software/highcharts.com/issues/950">Issue #950</a>.</li>
<li>Fixed issue with tooltips not displaying over pie charts positioned outside plot area. <a href="https://github.com/highslide-software/highcharts.com/issues/68">Issue #68</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/956">Issue #956</a>.</li>
<li>Added scrolling for the legend. Added legend.navigation options set.</li>
<li>Removed warnings on accessing layerX and layerY in Chrome.</li>
<li>Worked around issue with overlapping shadows on stacked columns. Shadow elements are now cut off.</li>
<li>Added time-aware xDateFormat for tooltip headers in datetime axes. Added tooltip.dateTimeLabelFormat option. <a href="https://github.com/highslide-software/highcharts.com/issues/568">Issue #568</a>.</li>
<li>Fixed issue in protofy branch that choked on setting extremes in Highstock.</li>
<li>Fixed issue with black background in data labels in legacy IE and MooTools adapter. <a href="https://github.com/highslide-software/highcharts.com/issues/947">Issue #947</a>.</li>
<li>Fixed excessive looping in setTooltipPoints in certain conditions involving hidden series. <a href="https://github.com/highslide-software/highcharts.com/issues/945">Issue #945</a>.</li>
<li>Fixed issue with stack columns' position after redrawing chart. <a href="https://github.com/highslide-software/highcharts.com/issues/936">Issue #936</a>.</li>
<li>Fixed issue where a line with lineWidth of 0 wouldn't show in hover mode. <a href="https://github.com/highslide-software/highcharts.com/issues/940">Issue #940</a>.</li>
<li>Fixed issue with lang.decimalPoint option not being applied to axis labels. <a href="https://github.com/highslide-software/highcharts.com/issues/939">Issue #939</a>.</li>
<li>Fixed float rounding error that caused extra tick position on logarithmic Y axes. <a href="https://github.com/highslide-software/highcharts.com/issues/934">Issue #934</a>.</li>
<li>Updated fix for #608 to work around JS error in Firefox.</li>
<li>Fixed issue with alignTicks not being respected after a chart redraw. <a href="https://github.com/highslide-software/highcharts.com/issues/842">Issue #842</a>.</li>
<li>Fixed JS error when adding points to a series before redraw. <a href="https://github.com/highslide-software/highcharts.com/issues/927">Issue #927</a>.</li>
<li>Fixed JS error message on running Axis.setTitle before axis is first rendered. <a href="https://github.com/highslide-software/highcharts.com/issues/922">Issue #922</a>.</li>
<li>Fixed NaN in attributes in export in Firefox 3.5. <a href="https://github.com/highslide-software/highcharts.com/issues/912">Issue #912</a>.</li>
<li>Fixed test size detection bug in bar charts with line-broken labels. <a href="https://github.com/highslide-software/highcharts.com/issues/909">Issue #909</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/882">Issue #882</a>.</li>
<li>Fixed issues with setData for pies. <a href="https://github.com/highslide-software/highcharts.com/issues/542">Issue #542</a>.</li>
<li>Fixed error message on setSize without navigator in Highstock. <a href="https://github.com/highslide-software/highcharts.com/issues/904">Issue #904</a>.</li>
<li>Prevented trying to set extremes on empty axes when using selection zoom. <a href="https://github.com/highslide-software/highcharts.com/issues/859">Issue #859</a>. <a href="https://github.com/highslide-software/highcharts.com/issues/906">Issue #906</a>.</li>
<li>Fixed errors and crashes on resize. <a href="https://github.com/highslide-software/highcharts.com/issues/905">Issue #905</a>.</li>
<li>Fixed so stack totals are updated after point.update. <a href="https://github.com/highslide-software/highcharts.com/issues/787">Issue #787</a>.</li>
<li>Fixed issue with position of stack total labels. <a href="https://github.com/highslide-software/highcharts.com/issues/506">Issue #506</a> and #516.</li>
<li>Don't create multiple title nodes on subsequently setting attr title. <a href="https://github.com/highslide-software/highcharts.com/issues/891">Issue #891</a>.</li>
<li>Fixed error on forced grouped series with no data. <a href="https://github.com/highslide-software/highcharts.com/issues/885">Issue #885</a>.</li>
<li>Fixed problem with test size detection when rendering a chart within a container with an inherited display property. <a href="https://github.com/highslide-software/highcharts.com/issues/883">Issue #883</a>.</li>
<li>Fixed problem with chart.click events firing after selection. <a href="https://github.com/highslide-software/highcharts.com/issues/370">Issue #370</a>.</li>
<li>Worked around issue with tooltips for stacked bar chart were not visible in IE7. <a href="https://github.com/highslide-software/highcharts.com/issues/863">Issue #863</a>.</li>
<li>Added smooth animation when adding multiple points. <a href="https://github.com/highslide-software/highcharts.com/issues/860">Issue #860</a>.</li>
<li>Changed zIndex on the range selector buttons in order for the tooltip to show above them. <a href="https://github.com/highslide-software/highcharts.com/issues/852">Issue #852</a>.</li>
<li>Fixed issue with wrong tooltip to point binding on bar charts containing null values. <a href="https://github.com/highslide-software/highcharts.com/issues/833">Issue #833</a>.</li>
<li>Fixed problem with flags visible at the end of graph when zoomed off screen. <a href="https://github.com/highslide-software/highcharts.com/issues/847">Issue #847</a>.</li>
<li>Fixed problem with range selector buttons not becoming unselected when clicking a new button. This happened only when the actual range wasn't changed because the buttons spanned a too wide range. <a href="https://github.com/highslide-software/highcharts.com/issues/851">Issue #851</a>.</li>
<li>Prevented error on exporting in Prototype by setting default border radius for data labels to 0. <a href="https://github.com/highslide-software/highcharts.com/issues/853">Issue #853</a>.</li>
<li>Adding enctype to the exporting post to allow it to work in HTTPS in Firefox. <a href="https://github.com/highslide-software/highcharts.com/issues/839">Issue #839</a>.</li>
<li>Set xAxis.labels.overflow option to null by default in Highcharts, while 'justify' in Stock charts only. <a href="https://github.com/highslide-software/highcharts.com/issues/841">Issue #841</a>.</li>
<li>Allow the tooltip and the point hover state to survive a chart redraw. <a href="https://github.com/highslide-software/highcharts.com/issues/349">Issue #349</a>.</li>
<li>Worked on data labels for range series</li>
</ul>
<p>Version 1.1.5 (2012-03-15)</p>
<ul>
<li>Added feature for the first and last x axis label to stay within the plot area, or be hidden if there is no room.</li>
<li>Fixed bugs.</li>
</ul>
<p>Version 1.1.4 (2012-02-15)</p>
<ul>
<li>Added temporary workaround for <a href="https://github.com/highslide-software/highcharts.com/issues/732">text rendering bug</a> in Chrome 18 Beta.</li>
<li>Added support for setting height in chart.setSize().</li>
<li>Fixed issue with Navigator not responding to selection zoom.</li>
</ul>
<p>Version 1.1.3 (2012-02-03)</p>
<ul>
<li>Fixed issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 1.1.2 (2011-12-23)</p>
<ul>
<li>Fixed regression bug from 1.1.1 where touch events were not captured in iOS.</li>
</ul>
<p>Version 1.1.1 (2011-12-22)</p>
<ul>
<li>Fixed display bug with ordinal axes in Chrome 16.</li>
<li>Made navigator.xAxis.ordinal inherit xAxis.ordinal.</li>
</ul>
<p>Version 1.1.0 (2011-12-14)</p>
<ul>
<li>Added <a href="/stock/ref#xAxis--ordinal">ordinal axis option</a> for displaying non-linear data without gaps, typically intraday data withiout gaps for nights and weekends or daily data without gaps for weekends.</li>
<li>Added a few advanced options for axis and legend object.</li>
<li>Fixed issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 1.0.2 (2011-11-08)</p>
<ul>
<li>Fixed compatibility issue with jQuery 1.7.</li>
<li>Fixed issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 1.0.1 (2011-10-25)</p>
<ul>
<li>Added <a href="/stock/ref/#plotOptions-series--compare">series.compare</a> option to compare the development of values.</li>
<li>Fixed error on chart.addSeries</li>
<li>Fixed issues as listed at <a href="http://github.com/highslide-software/highcharts.com/commits/master">GitHub</a> under dates since the last maintenance version.</li>
</ul>
<p>Version 1.0.0 (2011-10-18)</p>
<ul>
<li>First release.</li>
</ul>
<!-- //////////////////////////////////////////////////////////// -->
<h3 id="highmaps">Highmaps</h3>
<p>Version 1.1.2 (2015-02-27)</p>
<ul>
<li>Some issues listed under Highcharts 4.1.2 above also apply to Highmaps 1.1.2.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3871">#3871</a>, marker for colorAxis not displaying in Highmaps 1.1.</li>
</ul>
<p>Version 1.1.0 (2015-02-16)</p>
<ul>
<li>Some issues listed under Highcharts 4.1.0 above also apply to Highmaps 1.1.0.</li>
<li>Added hover with full copyright text to map credits</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3789">#3789</a>, dragging failed after zooming and setting size.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3613">#3613</a>, problems panning a map when zoomed in close to its edges.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3627">#3627</a>, map not repositioning on chart reflow.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3218">#3218</a>, border gets wider on zooming in IE11.</li>
<li>Fixed issue where removing point would not cause view to reset</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3314">#3314</a>, negative coordinates in GeoJSON causing the map to be misaligned or drawn outside the plot area.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3190">#3190</a>, reversed color axis displaying the wrong gradient.</li>
</ul>
<p>Version 1.0.4 (2014-09-02)</p>
<ul>
<li>Some issues listed under Highcharts 4.0.4 above also apply to Highmaps 1.0.4.</li>
<li>Added true color animation for Highmaps and heat maps, so fills and strokes are animatable through SVGElement.animate. Closes <a href="https://github.com/highslide-software/highcharts.com/issues/3311">#3311</a>.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3360">#3360</a> incorrect ticks on the colorAxis</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3209">#3209</a>, the first map area missing when joinBy was null.</li>
<li>Fixed <a href="https://github.com/highslide-software/highcharts.com/issues/3219">#3219</a>, wrong color when only one data class on color axis.</li>
</ul> 

						
					</div>
					<div class="s-slider-nav left" style="margin:0 0 16px 16px;">
						<ul>
							<li><a href="#highcharts">Highcharts</a></li>
							<li><a href="#highstock">Highstock</a></li>
							<li><a href="#highmaps" class="noborder">Highmaps</a></li>
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