<?php
class SkorPretest extends Zend_Db_Table 
{
	protected $_name;
    protected $_schema;
	protected $_db;

    public function init() 
    {
        $this->_name = 'skor_pretest';
        $this->_schema  = 'db_mooc';
        $this->_db = Zend_Registry::get('db');
    }
}