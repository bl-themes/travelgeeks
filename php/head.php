<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>
<!-- Dynamic keywords tag -->
<meta name="keywords" content="<?php echo $page->custom('keywords'); ?>">
<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>
<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<!-- Inner CSS -->
<style>
body {background-color: #f2f2f2;font-weight: light;}
.form-control {font-size: 12px;}
a {color:#333;text-decoration: none;}
a:hover {color:#333;text-decoration: none;}
.card-body p img {width: 100%;border-radius: 5px;}
</style>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
<!-- ogp -->
<meta property="og:title" content="<?php echo $page->title(); ?>" />
<meta property="og:description" content="<?php echo $page->description(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $page->permalink(); ?>" />
<meta property="og:image" content="<?php echo $page->coverImage(); ?>" />
<!-- Site head plugins -->
<?php Theme::plugins('siteHead'); ?>