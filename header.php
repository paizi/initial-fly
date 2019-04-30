<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php if ($this->options->favicon): ?>
<link rel="shortcut icon" href="<?php $this->options->favicon(); ?>" />
<?php endif; ?>
<title><?php $this->archiveTitle(array(
'category'  =>  _t('分类 %s 下的文章'),
'search'    =>  _t('包含关键字 %s 的文章'),
'tag'       =>  _t('标签 %s 下的文章'),
'date'      =>  _t('在 %s 发布的文章'),
'author'    =>  _t('作者 %s 发布的文章')
), '', ' - '); ?><?php $this->options->title(); if ($this->is('index') && $this->options->subTitle): ?> - <?php $this->options->subTitle(); endif; ?></title>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&antiSpam=&atom='); ?>
<?php if ($this->options->DarkMode): ?>
<style>
    /* Dark mode */
    body.dark {
        background-color: #263238;
        color: #aaa;
    }
    body.dark .rewards a, body.dark .tags a, body.dark .comment-author a , body.dark .post-content a, body.dark .comment-content a {
        color: #6a85ca;
        border-bottom: 0px;
    }
    body.dark a, body.dark .nav-menu ul a, body.dark .post-content .more a, body.dark .post-meta {
        color: #888;
    }
    body.dark #header , body.dark .whisper .comment-list li.comment-parent , body.dark table td , body.dark .comment-level-even {
        background-color: #263238;
        border-bottom: 1px solid #182125;
    }
    body.dark table td , body.dark table th {
        border: 1px solid #182125;
    }
    body.dark #logo, body.dark .post-title a , body.dark .comment-author , body.dark blockquote {
        color: #aaa!important;
    }
    body.dark pre, body.dark code, body.dark input, body.dark textarea , body.dark button , body.dark blockquote , body.dark .post-content .links li a , body.dark .menu-parent ul , body.dark .comment-list li.comment-level-odd , body.dark .comment-list li.comment-by-author , body.dark .whisper .comment-child , body.dark table tr , body.dark table th {
        background: #344148;
    }
    body.dark .author-icon {
        background: linear-gradient(135deg,transparent 30%,rgba(111, 111, 111, 0.8) 0) left,linear-gradient(-135deg,transparent 30%,rgba(111, 111, 111, 0.8) 0) right;
        background-size: 50% 100%;
        background-repeat: no-repeat;
    }
    body.dark .menu-parent ul:before {
        border-bottom: 7px solid #344148;
    }
    body.dark .post-content .links li a i {
        background: #808080;
        color: #aaa;
    }
    body.dark .post-content .links a {
        color: #aaa;
    }
    body.dark blockquote {
        border-left: 4px solid #2c383e;
    }
    body.dark textarea , body.dark .comment-list li  {
        border: 1px solid #344148;
    }
    body.dark button , body.dark pre code , body.dark blockquote {
        color: #aaa;
    }
    body.dark img {
        filter: brightness(50%);
    }
    body.dark #footer , body.dark .comment-list .respond{
        border-top: 1px solid #344148;
    }
    body.dark .post-meta li {
        border-left: 1px solid #888;
    }
    body.dark .post-meta li:first-child {
        padding: 0;
        border: 0;
    }
    body.dark .ajaxload a, body.dark .ajaxload .loading:hover, body.dark .ajaxload .loading {
        color: #aaa;!important
    }
    /* 滚动条 */
    body.dark *::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }
    body.dark *::-webkit-scrollbar-thumb {
        background: #aaa;
    }
    body.dark *::-webkit-scrollbar-track {
        background: #344148;
    }
    body.dark *::-webkit-scrollbar-corner {
        background: #344148;
    }
    body.dark::-webkit-scrollbar-thumb {
        background: #aaa;
    }
    body.dark::-webkit-scrollbar-track {
        background: #344148;
    }
    body.dark::-webkit-scrollbar-corner {
        background: #344148;
    }
    /* Notice */
    body.dark .notie {
        background: rgba(0,0,0,.7)!important;
    }
</style>
<?php endif; ?>
<link rel="stylesheet" href="<?php cjUrl('style.min.css') ?>" />
<?php if ($this->options->FlyStyle): ?>
<style>
    #body .container {
        padding: 0px;
    }
    .site-name {
        padding-left: 6px;
    }
    .whisper .comment-child {
        padding: 5px 8px;
    }
    #header, .ajaxload a, .post, .comment-body, .respond #textarea, .textbutton, .thumb img, .post-content img, .avatar , .notie {
        box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
    }
    .thumb img, .post-content img, .post, .respond #textarea, .textbutton, .comment-body, .avatar , .notie {
        border-radius: 3px;
    }
    .textbutton .text , .notie {
        border: 0px!important;
    }
    .whisper {
        line-height: 21px;
    }
    .ajaxload a, .ajaxload .loading:hover, .ajaxload .loading {
        padding: 5px 20px;
        border: 1px solid #666;
        border-radius: 5px;
    }
    .whisper .comment-list li.comment-parent {
        margin-top: 10px;
        padding: 10px;
    }
    code {
        color: #489eb9;
    }
    #comments, .breadcrumbs, .tags , .rewards {
        margin-bottom: 0px;
        margin-left: 8px;
        margin-right: 8px;
    }
    .breadcrumbs {
        margin-top: 10px;
    }
    .copyright {
        color: #999;
        font-size: .875em;
        line-height: 1.5;
    }
    .post-near {
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 8px;
        margin-right: 8px;
    }
    #comments {
        border-top: 0px;
        padding-top: 0px;
    }
    .post {
        margin-left: 8px;
        margin-right: 8px;
        margin-top: 8px;
        margin-bottom: 8px;
        padding: 16px;
    }
    .post-title {
        margin-top: 0px;
    }
    .more {
        margin-bottom: 0px;
    }
    .noties {
        top: 61px!important;
    }
    /* 滚动条 */
    *::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }
    *::-webkit-scrollbar-thumb {
        background: #444;
    }
    *::-webkit-scrollbar-track {
        background: #f3f3f3;
    }
    *::-webkit-scrollbar-corner {
        background: #f3f3f3;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    table tr {
        background-color: #fff;
        border-top: 1px solid #c6cbd1;
    }
    table td , table th {
        border: 1px solid #dfe2e5;
        padding: 6px 13px;
    }
    table tr {
        background-color: #fff;
        border-top: 1px solid #c6cbd1;
    }
</style>
<?php endif; ?>
</head>
<body class="<?php if($_COOKIE['dark']=='1'): ?>dark<?php endif; ?> <?php if ($this->options->HeadFixed): ?>head-fixed<?php endif; ?>">
<!--[if lt IE 9]>
<div class="browsehappy">当前网页可能 <strong>不支持</strong> 您正在使用的浏览器. 为了正常的访问, 请 <a href="https://api.i-meto.com/chrome.page">升级您的浏览器</a>.</div>
<![endif]-->
<header id="header">
<div class="container clearfix">
<div class="site-name">
<?php if ($this->options->logoUrl): ?>
<h1>
<a id="logo" href="<?php $this->options->siteUrl(); ?>" style="margin-left: 8px;">
<?php if ($this->options->customTitle): $this->options->customTitle(); else: $this->options->title(); endif; ?>
</a>
</h1>
<?php else: ?>
<h1>
<a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php if ($this->options->customTitle): $this->options->customTitle(); else: $this->options->title(); endif; ?></a>
</h1>
<?php endif; ?>
</div>
<script>function Navswith(){document.getElementById("header").classList.toggle("on")}</script>
<button id="nav-swith" onclick="Navswith()"><span></span></button>
<div id="nav">
<div id="site-search">
<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>">
<input type="text" id="s" name="s" class="text" placeholder="输入关键字搜索" required />
<button type="submit"></button>
</form>
</div>
<ul class="nav-menu">
<li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
<?php if (!empty($this->options->Navset) && in_array('ShowCategory', $this->options->Navset)): if (in_array('AggCategory', $this->options->Navset)): ?>
<li class="menu-parent"><a><?php if ($this->options->CategoryText): $this->options->CategoryText(); else: ?>分类<?php endif; ?></a>
<ul>
<?php
endif;
$this->widget('Widget_Metas_Category_List')->to($categorys);
while($categorys->next()):
if ($categorys->levels == 0):
$children = $categorys->getAllChildren($categorys->mid);
if (empty($children)):
?>
<li><a href="<?php $categorys->permalink(); ?>" title="<?php $categorys->name(); ?>"><?php $categorys->name(); ?></a></li>
<?php else: ?>
<li class="menu-parent">
<a href="<?php $categorys->permalink(); ?>" title="<?php $categorys->name(); ?>"><?php $categorys->name(); ?></a>
<ul class="menu-child">
<?php foreach ($children as $mid) {
$child = $categorys->getCategory($mid); ?>
<li><a href="<?php echo $child['permalink'] ?>" title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?></a></li>
<?php } ?>
</ul>
</li>
<?php
endif;
endif;
endwhile;
?>
<?php if (in_array('AggCategory', $this->options->Navset)): ?>
</ul>
</li>
<?php
endif;
endif;
if (!empty($this->options->Navset) && in_array('ShowPage', $this->options->Navset)):
if (in_array('AggPage', $this->options->Navset)):
?>
<li class="menu-parent"><a><?php if ($this->options->PageText): $this->options->PageText(); else: ?>其他<?php endif; ?></a>
<ul>
<?php
endif;
$this->widget('Widget_Contents_Page_List')->to($pages);
while($pages->next()):
?>
<li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
<?php endwhile;
if (in_array('AggPage', $this->options->Navset)): ?>
</ul>
</li>
<?php endif;
MyLinks($this->options->MyLinks);
endif; ?>
</ul>
</div>
</div>
</header>
<div id="body">
<div class="container clearfix">
