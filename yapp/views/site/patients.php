<?php
use \yii\helpers\Html;
?>
<div class="container">
    <div class="row">
        <div class=" text-center  pagename mt150">
            <h1 >Интересные пациенты</h1>
        </div>

    </div>

<?php foreach ($posts as $post) : ?>

        <div class="row">

            <div class="bikename ">
                <h2><?= $post['pagehead'] ?></h2>
            </div>
            <div class="col-sm-6 nopadding <?
                    if ($post['layout_type']=='left') {
                        echo 'col-sm-push-6';
                    } ?>">
                <div class="imagewrap postImageBlock">

                    <?php if (count($post->postImages)==1) : ?>
                        <div class="postImageItem"
                             style="
                                 background-image: url(/img/<?= $post->postImages[0]->image['name'] ?>);
                                 background-size: cover;
                                 background-position:
                                 center center;">

                            <div class="textContent">
                                <span class="head"><?= $post['pagehead'] ?></span>
                                <p><?= nl2br($post->postImages[0]['alt'])  ?></p>
                            </div>
                        </div>

                    <?php endif; ?>
                    <?php if (count($post->postImages)>1) : ?>
                        <div class="postImageSlick">
                            <?php foreach ($post->postImages as $postImage) : ?>
                                <div class="postImageItem"
                                     style="
                                         background-image: url(/img/<?= $postImage->image['name'] ?>);
                                         background-size: cover;
                                         background-position:
                                         center center;">

                                    <div class="textContent">
                                        <span class="head"><?= $post['pagehead'] ?></span>
                                        <p><?= nl2br($postImage['alt'])  ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="carouselControlWrap"></div>
                        </div>


                    <?php endif; ?>

                </div>
            </div>
            <div class="col-sm-6 nomargin patientsimagetext right_text <?
                    if ($post['layout_type']=='left') {
                        echo ' col-sm-pull-6';
                    } ?>">

                <p class="blue"><i> Симптомы: </i></p>
                <p class="alignwide"><?= nl2br($post['symptom']) ?></p>
                <p class="blue"><i> Лечение: </i></p>
                <p class="alignwide"><?= nl2br($post['treatment']) ?></p>
                <p class="blue"><i>Итог: </i></p>
                <p class="alignwide"><?= nl2br($post['result']) ?></p>

            </div>

        </div>

<?php endforeach; ?>
</div>