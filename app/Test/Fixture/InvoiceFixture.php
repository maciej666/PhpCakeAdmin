<?php
/**
 * Invoice Fixture
 */
class InvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'invoice_nr' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_polish_ci', 'charset' => 'utf8'),
		'issue_date' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'invoice_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'company_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_polish_ci', 'charset' => 'utf8'),
		'company_address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_polish_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_polish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_polish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'invoice_nr' => 'Lorem ipsum dolor sit amet',
			'issue_date' => 1491563342,
			'invoice_amount' => 1,
			'company_name' => 'Lorem ipsum dolor sit amet',
			'company_address' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet'
		),
	);

}
