<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Addons extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'addon_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'addon_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'addon_description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
			'author_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'author_forum_usernamne' => array(
				'type' => 'CHAR',
				'constraint' => '25',
				'null' => TRUE,
			),
			'ci_compat_version' => array(
				'type' => 'CHAR',
				'constraint' => '25',
				'null' => TRUE,
			),
			'addon_type' => array(
				'type' => 'CHAR',
				'constraint' => '25',
				'null' => TRUE,
			),
			'author_email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),
			'homepage_url' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),
			'download_url' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),
			'version' => array(
				'type' => 'CHAR',
				'constraint' => '25',
			),
			'github_username' => array(
				'type' => 'CHAR',
				'constraint' => '25',
				'null' => TRUE,
			),
			'github_repository' => array(
				'type' => 'CHAR',
				'constraint' => '25',
				'null' => TRUE,
			),
			'score' => array(
				'type' => 'TINYINT',
				'null' => TRUE,
			),
			'license' => array(
				'type' => 'CHAR',
				'constraint' => '25',
				'null' => TRUE,
			),
			'is_composer_addon' => array(
				'type' => 'BIT',
				'default' => FALSE,
			),
			'added_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
			'category_id INT unsigned NOT NULL',
			'FOREIGN KEY (category_id) REFERENCES categories(category_id)',
		));

		$this->dbforge->add_key('addon_id', TRUE);
		$this->dbforge->create_table('addons');
	}

	public function down()
	{
		$this->dbforge->drop_table('addons');
	}

}
