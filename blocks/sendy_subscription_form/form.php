<?php defined('C5_EXECUTE') or die("Access Denied.");
$page = Page::getCurrentPage();
?>

<div>
    <fieldset>
        <div class="form-group">
            <?php echo $form->label('header', t('Title')); ?>
            <div class="input">
            <?php echo $form->text('title', $title); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->label('description', t('Description')); ?>
            <div class="input">
            <?php echo $form->text('description', $description); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->label('listURL', t('URL of your Sendy Installation')); ?>
            <div class="input">
            <?php echo $form->text('listURL', $listURL, array('required' => 'true')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->label('listID', t('List ID of the List you want to submit to')); ?>
            <div class="input">
            <?php echo $form->text('listID', $listID, array('required' => 'true')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->label('privacyURL', t('The URL to your Data Protection Declaration')); ?>
            <div class="input">
            <?php echo $form->text('privacyURL', $privacyURL); ?>
            </div>
        </div>
        <div class="form-group">
            <label>
                <?= $form->checkbox('addGDPR','1', $addGDPR == '1' || $addGDPR == '0' ); ?> <?php  echo t('Add GDPR compliance'); ?>
            </label>
            </br><small id="gdpr" class="form-text text-muted"><?= t('If you want to comply to GDPR, you must provide an appropriate Privacy Policy.'); ?></small>
        </div>
    </fieldset>     
</div>

