<?php
namespace Concrete\Package\SendySubscriptionForm\Block\SendySubscriptionForm;

use BlockType;
use Page;
use Core;
use \Concrete\Core\Block\BlockController;

class Controller extends BlockController {
    protected $btTable = 'btSendySubscriptionForm';
    protected $btInterfaceWidth = 500;
    protected $btInterfaceHeight = 600;
    protected $btDefaultSet = 'form';

    public $title = "";
    public $description = "";
    public $listURL = "";
    public $listID = "";
    public $addGDPR = "0";
    public $privacyURL = "";  
    
    public function getBlockTypeDescription()
    {
        return t("Sendy Subscription Form.");
    }

    public function getBlockTypeName()
    {
        return t("Sendy Subscription Form");
    }

    public function view() {
        $this->set('title', $this->title);
        $this->set('description', $this->description);
        $this->set('listURL', $this->listURL);     
        $this->set('listID', $this->listID);
        $this->set('addGDPR', $this->addGDPR);
        $this->set('privacyURL', $this->privacyURL);
    }
    
    /**
     * @param array $args
     */  
    public function save($args)
    {  
        $args['title']       = isset($args['title']) ?       trim($args['title']) : '';
        $args['description'] = isset($args['description']) ? trim($args['description']) : '';
        $args['listURL']     = isset($args['listURL']) ?     trim($args['listURL']) : '';
        $args['listID']      = isset($args['listID']) ?      trim($args['listID']) : '';
        $args['addGDPR']     = isset($args['addGDPR']) ?     trim($args['addGDPR']) : '0'; 
        $args['privacyURL']  = isset($args['privacyURL']) ?     trim($args['privacyURL']) : ''; 
        parent::save($args);
    }
    	
    public function validate($args) {
        $e = Core::make("helper/validation/error");                    
            if (empty($args['listURL'])){
                $e->add(t('List URL must be set'));
            }
            if (empty($args['listID'])){
                $e->add(t('List ID must be set'));
            }        
        return $e;
    }
} 
