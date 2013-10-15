<?php

class Migration_Create_users extends CI_Migration {

  public function up()
  {
    $fields = array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'username' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
        'null' => FALSE
      ),
      'password' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
        'null' => FALSE
      )
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('users');
  }

  public function down()
  {
    $this->dbforge->drop_table('users');
  }

}
