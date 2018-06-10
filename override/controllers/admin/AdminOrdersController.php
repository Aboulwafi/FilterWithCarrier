<?php
/**
* Overriding the AdminOrdersController
*/
class AdminOrdersController extends AdminOrdersControllerCore
{
	/*
    * module: Filterwithcarrier
    * date: 2018-06-10 12:47:39
    * version: 1.0.0
    */
    public function __construct()
	{
		parent::__construct();
        $this->_join .= 'LEFT JOIN `'._DB_PREFIX_.'carrier` cr ON (cr.`id_carrier` = a.`id_carrier`)';
        $this->_select .= ', cr.name as carrier';
        $this->fields_list['carrier'] = array(
            'title' => $this->l('Carrier'),
            'align' => 'text-center'
        );
	}
}