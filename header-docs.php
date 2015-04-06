<?php

  
  include "../config.php";
  
  $doc = "index";
  if(isset($_GET['doc'])) {
  $doc = $_GET['doc'];
  $doc = str_replace("'", "", $doc);
  $doc = str_replace(" ", "", $doc);
  }
  $link = my_mysql_connect();
  $select = "select title,author,content,lastupdate,datetime from hc_docs where name = '$doc' and status = 0";
  $docs = my_mysql_query($link,$select);
  if(mysql_num_rows($docs) ==0) {
    header("location:/404.html");
    exit();
  }
  $d = mysql_fetch_row($docs);
  $title = "$d[0] | Highcharts中文教程";
?>

<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
<head>
  <meta charset="UTF-8">
  <title><?=$title ?></title>
  <meta name="keywords" content="Highcharts,Highcharts中文网,Charts,Highcharts api文档,Highcharts教程,Highcharts资源下载" />
  <meta name="description" content="Highcharts中文网，一站式Highcharts学习
资源。提供Highcharts中文论坛、Highcharts在线示例、Highcharts中文APi、Highcharts>中文教程、Highcharts资源下载等" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.hcharts.cn/docs/index.php?doc=<?=$doc?>" />
  <meta property="og:title" content="<?=$d[0]?>" />
  <meta property="og:description" content="<?=$title?>" />
  <meta name="weibo: article:create_at" content="<?=$d[4]?>" />
  <meta name="weibo: article:update_at" content="<?=$d[3]?>" />
        
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <nav id="navigater">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner spring">
        <div class="container">
          <ul class="nav">
            <li class="active">
              <a href="/index.php" class="brand">Highcharts中文网</a>
            </li>
            
            <li index="index">
              <a href="/index.php">首页</a>
            </li>
            
            <li>
              <a href="http://bbs.hcharts.cn" target="_blank">中文论坛</a>
            </li>       
            <li class="dropdown" index="demo">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">在线演示&nbsp;<b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="/demo/index.php">Highcharts 在线演示</a></li>
              <li><a href="/demo/highstock.php">Highstock&nbsp; 在线演示</a></li>
            </ul>
            </li>
            
            <li index="docs">
              <a href="/docs/index.php">中文教程</a>
            </li>
            
            <li class="dropdown" index="api">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">API 文档&nbsp;<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/api/index.php" >Highcharts API 文档</a></li>
                <li><a href="/api/highstock.php" >Highstock&nbsp; API 文档</a></li>
                <li><a href="/api/highmaps.php" >HighMaps&nbsp; API 文档</a></li>
                <li class="divider"></li>
                <li><a href='/api/api.php'>API 文档翻译</a></li>
              </ul>
            </li>           
            <li  class="dropdown" index="product">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">产品中心&nbsp;<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/product/highcharts.php">产品中心</a></li>
                <li><a href="/product/download.php">下载中心</a></li>
                <li><a href="/product/changelog.php">更新日志</a></li>
                <li><a href="/product/roadmap.php">发展路线</a></li>
              </ul>
            </li>
            <li index="service">
              <a href="/service/index.php">支持服务</a>
            </li>
            <li index="about">
              <a href="/about/index.php">关于我们</a>
            </li>
          </ul> 
        </div>
      </div>
    </div>
  </nav>