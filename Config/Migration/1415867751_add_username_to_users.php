<?php
class AddUsernameToUsers extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_username_to_users';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'users' => array(
					'username' => array('type' => 'string', 'null' => false, 'default' => null),
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'users' => array('username'),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
