<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="format-detection" content="telephone=no" />
<meta name="author" content="産業技術大学院大学" />
<meta name="copyright" content="産業技術大学院大学" />
<meta name="robots" content="index,follow" />
<meta name="description" content="日本国内の15大学が連携して実践的な人材育成を推進する教育ネットワーク「enPiT」。その中でビジネスアプリケーション分野を担当する産業技術大学院大学の学びを紹介します。" />
<meta name="keywords" content="産業技術大学院大学,enPiT,ビジネスアプリケーション,実践的人材育成,プロジェクト型学習,PBL" />
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/html/css/import/common.css" type="text/css" title="style" />
<link rel="canonical" href="http://aiit.ac.jp/" />
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript">
	if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
		document.write('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=2, user-scalable=yes" />');
		document.write('<link rel="stylesheet" type="text/css" href="/html/css/sp.css" />');
	}
	else {
		document.write('<link rel="stylesheet" href="/html/css/pc.css" type="text/css" title="style" />');
		document.write('<link rel="stylesheet" href="/html/css/import/attachment.css" type="text/css" title="style" />');
		document.write('<link rel="stylesheet" href="/html/css/import/width.css" type="text/css" title="style" />');
	}
</script>
<script type="text/javascript">

 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-4739369-2']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
 })();

</script>
<?php wp_head(); ?>
</head>

<body>
<div id="wrap">
<div id="container">
<div id="syllabus">

<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

</div><!-- /syllabus -->
</div><!-- /wrap -->
</div><!-- /wrap -->
<?php wp_footer(); ?>
</body>
</html>
