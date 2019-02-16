<?php
namespace Concrete\Package\SendySubscriptionForm;

use Concrete\Core\Block\BlockType\BlockType;
use Concrete\Core\Block\BlockType\Set as BlockTypeSet;
use Concrete\Core\Package\Package;
use Database;

class Controller extends Package {
    /**
     * The package handle.
     *
     * @var string
     */
    protected $pkgHandle = 'sendy_subscription_form';
	
    /**
     * The minimum concrete5 version.
     *
     * @var string
     */
    protected $appVersionRequired = '8.4.3';
	
    /**
     * The package version.
     *
     * @var string
     */
    protected $pkgVersion = '0.6';

    /**
     * {@inheritdoc}
     *
     * @see Package::getPackageDescription()
     */
	public function getPackageDescription () {
		return t("A Form Block to subscribe to a Sendy List");
	}
 
    /**
     * {@inheritdoc}
     *
     * @see Package::getPackageName()
     */
	public function getPackageName () {
		return t("Sendy Subscription Form");
	}

    /**
     * {@inheritdoc}
     *
     * @see Package::install()
     */
	public function install() {        
        $pkg = parent::install();
        $bt = BlockType::getByHandle('sendy_subscription_form');   
        BlockType::installBlockTypeFromPackage('sendy_subscription_form', $pkg);     
        
        
        $btSet = BlockTypeSet::getByHandle('form');
        
        if (is_object($bt) && is_object($btSet)) {
            $btSet->addBlockType($bt);
        }       
    }        

    public function uninstall(){
        $pkg = parent::uninstall();
        $db = \Database::connection();
        $db->query('drop table btSendySubscriptionForm');
    }

	public function upgrade () {
		$pkg =parent::upgrade();
		$pkg = Package::getByHandle($this->pkgHandle);

	}
}
