<?php
$quotes = \app\models\Quote::find()->all();
?>

<div id="centerlead" class="centerlead">
<!--    <h1>+7(960) 506-78-94</h1>-->
<!--    <h4>Иваново</h4>-->
</div>






<ul id="quotelist">
    <?php foreach ($quotes as $quote) : ?>
        <li class="quote<?= $quote['style_key']?> l<?= $quote['level']?>"><?= nl2br($quote['text']) ?></li>
    <?php endforeach; ?>
</ul>
