<?php
class PesertaBatch extends Zend_Db_Table 
{
	protected $_name;
    protected $_schema;
	protected $_db;

    public function init() 
    {
        $this->_name = 'peserta_batch';
        $this->_schema  = 'db_mooc';
        $this->_db = Zend_Registry::get('db');
    }
}