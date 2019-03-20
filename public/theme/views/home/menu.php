<?php
defined('FIR') OR exit();
/**
 * The template for displaying Home page menu
 */
?>
<ul class="nav justify-content-center text-capitalize mt-3">
<?php foreach($data['links'] as $link): ?>
    <li class="nav-item">
        <a class="nav-link active" href="<?=$this->siteUrl()?>/example/<?=$link?>"><?=$link?></a>
    </li>
<?php endforeach ?>
</ul>