<?php
defined('FIR') OR exit();
/**
 * The template for displaying Home page content
 */
?>
<div id="content" class="content bg-light d-flex align-items-center">
    <div class="container p-3 my-3 text-center">
        <h1>
            <span class="text-muted"><?=$this->lang('welcome')?>.</span>
            <span class="text-dark"><?=e($this->siteSettings('title'))?>.</span>
        </h1>

        <?=e($this->siteSettings('tagline'))?>

        <?=$data['menu']?>
    </div>
</div>