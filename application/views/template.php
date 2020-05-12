<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= $appname ?></title>
    <!-- Bootstrap core CSS -->
    <link href="/storage/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="/storage/css/sticky-footer-navbar.css" rel="stylesheet"/>
    <!-- script js -->
    <script src="/storage/js/funcao.js" type="text/javascript"></script>
    <!-- favicons -->
    <link rel="apple-touch-icon" href="/storage/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/storage/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/storage/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/storage/img/favicons/manifest.json">
    <link rel="mask-icon" href="/storage/img/favicons/safari-pinned-tab.svg" color="#563d7c">
	<link rel="icon" href="/storage/img/favicons/favicon.ico">
</head>
<body class="d-flex flex-column h-100">
	<header>
		<?=$menu."\n" ?>
	</header>

	<!-- Begin page content -->
	<main role="main" class="flex-shrink-0">
		<div class="container">
			<?= $main_content->render()."\n" ?>
		</div>
	</main>

	<footer class="footer mt-auto py-3">
		<div class="container">
			<span class="text-muted"><?=$footer?></span>
		</div>
	</footer>
	<script src="/storage/js/jquery-3.4.1.slim.min.js"></script>
	<script>window.jQuery || document.write('<script src="/storage/js/jquery.slim.min.js"><\/script>')</script>
	<script src="/storage/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>