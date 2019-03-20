<?php
defined('FIR') OR exit();
/**
 * The template for displaying the header section
 */
?>
<div id="header" class="header bg-white shadow-sm">
    <div class="container py-3">
        <div class="row">
            <div class="col-auto d-flex align-items-center">
                <a href="<?=$this->siteUrl()?>/">
                    <div class="logo">
                        <img src="<?=$this->siteUrl()?>/<?=$this->publicPath()?>/<?=$this->themePath()?>/assets/images/logo.svg">
                    </div>
                </a>
            </div>

            <div class="col">

            </div>

            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=mb_strtoupper(mb_substr($data['language'], 0, 2))?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right text-capitalize" aria-labelledby="dropdownMenuButton">
                        <?php foreach($data['languages_list'] as $language): ?>
                            <a class="dropdown-item" href="<?=$this->siteUrl()?>/lang/<?=$language?>"><?=$language?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>