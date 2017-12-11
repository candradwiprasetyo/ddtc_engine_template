<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title><?= $this->library->get_meta($meta['title'], 1) ?></title>
    <meta name="title" content="<?= $this->library->get_meta($meta['title'], 1) ?>">
		<meta name="description" content="<?= $this->library->get_meta($meta['description'], 4) ?>">
		<meta name="keywords" content="<?= $this->library->get_meta($meta['keyword'], 3) ?>">
		<meta name="author" content="DDTCNews">
		<link rel="image_src" href="<?= $this->library->get_meta($meta['image'], 2) ?>">

		<!-- facebook -->
		<meta property="og:site_name" content="<?= $this->library->get_meta($meta['title'], 1) ?>">
		<meta property="og:type" content="article">
		<meta property="og:url" content="<?= base_url(uri_string()); ?>">
		<meta property="og:image" content="<?= $this->library->get_meta($meta['image'], 2) ?>">
		<meta property="og:description" content="<?= $this->library->get_meta($meta['description'], 4) ?>">
		<meta property="og:title" content="<?= $this->library->get_meta($meta['title'], 1) ?>">
		<meta property="fb:pages" content="1814331908795344" />
		<meta property="fb:article_style" content="DDTCNews">

		<!-- twitter -->
		<meta name="twitter:title" content="<?= $this->library->get_meta($meta['title'], 1) ?>">
		<meta name="twitter:description" content="<?= $this->library->get_meta($meta['description'], 4) ?>">
		<meta name="twitter:image" content=" <?= $this->library->get_meta($meta['image'], 2) ?>">
		<meta name="twitter:card" content="summary_large_image">
		
		<meta name="robots" content="nofollow">
		<meta http-equiv="refresh" content="360">
		<link rel="canonical" href="">    
		<link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
		<link rel="icon" sizes="192x192" href="<?= base_url() ?>assets/images/favicon-highres.png">
        <link rel="icon" sizes="128x128" href="<?= base_url() ?>assets/images/favicon.png">
        <link rel="apple-touch-icon" sizes="128x128" href="<?= base_url() ?>assets/images/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?= base_url() ?>assets/images/favicon.png">
        <!-- Opera Speed Dial Favicon -->
        <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/favicon-195.png" />
        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/images/favicon-114.png">
        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/images/favicon-72.png">
        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url() ?>assets/images/favicon-57.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#F77B04">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#F77B04">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-capable" content="yes"><!-- 
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css?v=13" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/poppins.css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/raleway.css?family=Raleway" rel="stylesheet"> <!-- 
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

    <!-- Function -->
    <!-- <script src="<?= base_url() ?>assets/js/function.js?v=9"></script> -->
	
  </head>

  <body>
    
