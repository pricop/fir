<?php
defined('FIR') OR exit();
/**
 * The main template file
 * This file puts together the three main section of the software, header, content and footer
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?=e($this->docTitle())?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?=$this->siteUrl()?>/<?=$this->publicPath()?>/<?=$this->themePath()?>/assets/images/favicon.png" rel="icon">

    <?php foreach(['bootstrap.min', 'style'] as $css): ?>
        <link href="<?=$this->siteUrl()?>/<?=$this->themePath()?>/assets/css/<?=$css?>.css" rel="stylesheet" type="text/css">
    <?php endforeach ?>

    <?php foreach(['jquery', 'bootstrap.bundle.min', 'functions'] as $js): ?>
        <script type="text/javascript" src="<?=$this->siteUrl()?>/<?=$this->themePath()?>/assets/js/<?=$js?>.js"></script>
    <?php endforeach ?>
</head>
<body>
    <div id="loading-bar"></div>
    <?=$data['header_view']?>
    <?=$data['content_view']?>
    <?=$data['footer_view']?>
</body>
</html>