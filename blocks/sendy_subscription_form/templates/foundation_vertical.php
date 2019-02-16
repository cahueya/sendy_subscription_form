<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="subscribe-form">
    <?php if ($title){ ?>
        <h3><?= $title ?></h3>
    <?php } ?>
    <?php if ($description){ ?>
        <span><?= $description ?></span>
    <?php } ?>

    <form action="<?= $listURL ?>/subscribe" method="POST" accept-charset="utf-8">
        <div class="row">
            <div class="large-12 columns">
                <?= $form->label('name', t('Your Name')); ?>
                <?= $form->text('name', $name, array('class' => 'span2', 'placeholder'=>t('Your Name'))); ?>
            </div>
            <div class="large-12 columns">
                <?= $form->label('email', t('E-Mail')); ?>
                <?= $form->email('email', $email, array('class' => 'span2', 'placeholder'=>t('E-Mail'), 'required' => 'true')); ?>
            </div>
            <?php if ($addGDPR == "1") { ?>  
                <div class="large-12 columns">
                    <?= $form->checkbox('gdpr','0', $gdpr == '1' || $gdpr == '0' ,array('required' => 'true')); ?>
                    <label for="checkbox">
                        <?= t('I want to receive News and Updates and have read the ') ?>
                        <a href="<?= $privacyURL; ?>" target="_blank"><?= t('Privacy Policy'); ?><a>
                    </label>
                </div>
            <?php } ?>
            <div style="display:none;">
	            <label for="hp">HP</label>
	            <input type="text" name="hp" id="hp"/>
	        </div>
            <input type="hidden" name="list" value="<?php echo $listID; ?>"/>
	        <input type="hidden" name="subform" value="yes"/>
            <div class="large-12 columns">
                <input type="submit" class="button pull-right" name="submit" id="submit" value="<?= t('Submit') ?>"/>
            </div>
        </div>
    </form>
</div>