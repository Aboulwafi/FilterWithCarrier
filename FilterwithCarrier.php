<?php
if (!defined('_PS_VERSION_')) {
  exit;
}
 
class FilterwithCarrier extends Module
{
  public function __construct()
  {
    $this->name = 'Filterwithcarrier';
    $this->tab = 'administration';
    $this->version = '1.0.0';
    $this->author = 'ABOULWAFI ISSAM';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); 
    $this->bootstrap = true;
 
    parent::__construct();
 
    $this->displayName = $this->l('ORDERS FILTER');
    $this->description = $this->l('Filter Orders with Carriers');
 
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    
  }
  public function install()
	{
    if (!parent::install())
      return false;
    
      if (!$this->registerHook('displayAdminOrder'))
      return false;
    return true;
  }
}