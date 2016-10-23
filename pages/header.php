<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="shortcut icon" href="<?php echo $baseURI; ?>/assets/images/favicon.ico" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,900&amp;subset=latin-ext" />
<link rel="stylesheet" href="<?php echo $baseURI; ?>/assets/css/fallacy.css?26" />

<!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ie8/0.2.9/ie8.js"></script>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<title><?php echo $data->getPageTitle(); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($data->getPageDescription()); ?>">

<meta property="og:title" content="<?php echo htmlspecialchars($data->getPageTitle()); ?>" />
<meta property="og:image" content="<?php echo $data->getPageImage(); ?>" />
<meta property="og:image:width" content="<?php echo $data->getPageImageWidth(); ?>" />
<meta property="og:image:height" content="<?php echo $data->getPageImageHeight(); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($data->getPageDescription()); ?>" />
<meta property="og:url" content="<?php echo $data->getPageUrl(); ?>"/>
<meta property="og:type" content="website" />
</head>

<body>
<div style="display:none">
    <img src="<?php echo $baseURI; ?>/assets/images/title-home.png" id="homepage_image" />
    <img src="<?php echo $baseURI; ?>/assets/images/title-fallacy.png" id="miscpage_image" />
</div>

<div class="wrap">
    <div class="sunbeams"></div>
    <div class="clouds"></div>

    <header id="header">
        <div class="container">
            <div class="container">
                <a href="<?php echo $baseURI; ?>">
                    <img src="<?php echo $data->getPageHeaderImage(); ?>" alt="<?php echo htmlspecialchars($data->getPageTitle()); ?>" />
                </a>
            </div>
        </div>
    </header>

    <div class="container main">
