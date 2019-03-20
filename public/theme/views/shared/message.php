<?php
defined('FIR') OR exit();
/**
 * The template for displaying the success, info and error messages
 */
?>
<div class="notification-box notification-box-<?=$data['message']['type']?>">
    <p><?=e($data['message']['content'])?></p>
    <div class="notification-close notification-close-<?=$data['message']['type']?>"></div>
</div>