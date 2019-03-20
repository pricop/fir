<?php
defined('FIR') OR exit();
/**
 * The template for displaying the footer section
 */
?>
<div id="footer" class="footer">
    <div class="container bg-white py-3">
        <?=sprintf($this->lang('copyright'), date('Y'), e($this->siteSettings('title')))?>
    </div>
</div>