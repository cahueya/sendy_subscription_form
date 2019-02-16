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
	        <div class="large-6 columns">
	            <div class="row">
	                <div class="large-12 columns">    
                        <div class="input">
                            <?php echo $form->text('name', $name, array('class' => 'span2', 'placeholder'=>t('Your Name'))); ?>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="large-6 columns">
		        <div class="row collapse">
			        <div class="small-9 columns">
                        <?= $form->email('email', $email, array('class' => 'span2', 'placeholder'=>t('E-Mail'))); ?>
        	        </div>
                <div class="small-3 columns">	
          		    <input type="submit" name="submit" id="submit" class="button postfix" value="<?= t('Submit') ?>"/>
        	    </div>
            </div>        
        	<div style="display:none;">
			    <label for="hp">HP</label>
				<input type="text" name="hp" id="hp"/>
			</div>
			<input type="hidden" name="list" id="listid" value="<?php echo $listID; ?>"/>
			<input type="hidden" name="subform" value="yes"/>       
        </div>
        <?php if ($addGDPR == "1") { ?>
	        <div class="small-12 columns"> 	
		        <?= $form->checkbox('gdpr','0', $gdpr == '1' || $gdpr == '0' ,array('required' => 'true')); ?>
                <label for="checkbox">
                    <?= t('I want to receive News and Updates and have read the ') ?>
                    <a href="<?= $privacyURL; ?>" target="_blank"><?= t('Privacy Policy'); ?><a>
                </label>
	        </div>
        <?php } ?>
        </div>
    </form>
</div>