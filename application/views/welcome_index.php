<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>[Focus]焦点</title>
<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
* {
	margin:0px;
}
html {
	height: 100%;
}
body {
	height: 100%;
	font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif, "宋体";
}
#sidebar {
	width:240px;
	min-height:100%;
	background: #22262e;
	position:fixed
}
*html #sidebar {
	height:100%;
	position:fixed
}
*html body {
	height:100%;
}
.nav-list {
	text-shadow:none;
}
.nav-list li {
	text-shadow:none;
	line-height:30px;
}
.nav-list li a {
	text-shadow:none
}
.nav-header {
	font-size:14px;
	font-weight:normal;
	text-shadow:none;
	background:#1B1E24;
}
#content {
	width:100%px;
	padding-left:260px;
	padding-right:20px;
	padding-top:20px;
	height:auto;
}
#inner-content {
	width:100%;
	height:auto;
}
</style>
</head>

<body>
<div id="sidebar">
  <div id="inner-sidebar-top"> </div>
      
  <ul class="nav nav-list">
    <li class="nav-header nav-header-bak" style="line-height:35px;text-shadow:none;">工具集[Tools]</li>
    <li class="active"><a href="/">首页</a></li>
    <li><a href="<?php echo site_url("favorite");?>">我的收藏</a></li>
    <li><a href="<?php echo site_url("comment");?>">我的评论</a></li>
  </ul>
</div>
<div id="content">
  <div id="inner-content">
    <?php
    $rows = $this->data->fetch_all(array('id', 'title'), $this->uri->segment(4, 0));
    $config = array(
            'num_links' => 3,
            'full_tag_open' => '<div class="pagination pagination-centered"><ul>',
            'full_tag_close' => '</ul></div>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'first_link' => '首页',
            'first_tag_open' => '<li>',
            'first_tag_close' => '</li>',
            'last_link' => '尾页',
            'last_tag_open' => '<li>',
            'last_tag_close' => '</li>',
            'prev_link' => '上一页',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'next_link' => '下一页',
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'cur_tag_open' => '<li class="active"><span>',
            'cur_tag_close' => '</span></li>',
            'base_url' => '/welcome/index/page/',
            'total_rows' => $rows['num'],
            'per_page' => 17,
            'cur_page' => $this->uri->segment(4, 0),
        );
        $this->pagination->initialize($config);
        $pages = $this->pagination->create_links();
  ?>
    <?php
    if ($rows['data']) {
      foreach ($rows['data'] as $value) {
  ?>
    <ul class="media-list">
    <li class="media">
<a class="pull-left" href="#">
<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABP0lEQVR4nO2VMY7DIBBFc/+jUNNOST8H4Ay+AlsNmiVWlMRLnlb5xSuQyej5YZHbcRzjm7nRAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQXA5gZqOUMlmf995HKWXUWtGZWwK4+yilDHef0u7+a0+t9SXZHTO3BTCzhxL5JZ6V3TFzW4A4iUzvfT6P9Sobe/OnHs/fnYkECEF3v5Mys9Fam/tW2Vrr/I2Z/clM5AvIEnndWrs7ybw3Xm695K7M/HiAfEmdnWY+1bMvIC68HOHKzI8HiBd59Jd1dlqxXk/0ykwswH9HAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoFEAWoBGAWgBmq8P8AOx5Cse51YjWQAAAABJRU5ErkJggg==">
</a>
<div class="media-body">
<h4 class="media-heading"><a href="<?php echo site_url("welcome/view/".$value['id']);?>"><?php echo $value['title']?></a></h4>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
</div>
</li>
    </ul>
    <?php
      }
    }
  ?>
    <?php echo $pages;?> </div>
</div>
<script src="<?php echo base_url("jquery.js");?>"></script> 
<script src="<?php echo base_url("bootstrap/js/bootstrap.min.js");?>"></script>
</body>
</html>