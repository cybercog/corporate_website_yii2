<?php
use yii\helpers\Url;

/* @var $image common\modules\files\models\Files */
/* @var $model mixed */
/* @var $fieldName string */
/* @var $isMultiple bool Это множественный инпут? */
/* @var $redactorId string */
?>
<li data-id="<?= $image->getAttribute('id') ?>" data-product-id="<?= $model->getAttribute('id') ?>">
    <img src="<?= $image->getSrc() ?>"
         alt="<?= $image->getAttribute('alt') ?>"
         data-edit-url="<?= Url::toRoute('/files/image/imageeditpopup') ?>">
    <i class="fileDelete-js"
        data-delete-url="<?= Url::to('deletefile') ?>"
        data-delete-id="<?= $model->getAttribute('id') ?>"
        <? if ($isMultiple): ?>
            data-delete-fileid="<?= $image->getAttribute('id') ?>"
        <? endif ?>
        <? if ($fieldName): ?>
            data-delete-field-name="<?= $fieldName ?>"
        <? endif ?>></i>
    <button
        class="dropImageAtCursor dropImageAtCursor-js"
        data-redactor-id="<?= $redactorId ?>"
        type="button">
        Добавить в редактор
    </button>
</li>