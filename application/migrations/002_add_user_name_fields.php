<?php

class Migration_Add_user_name_fields extends CI_Migration {

  public function up()
  {
    $fields = array(
      'first_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '50',
        'null' => TRUE
      ),
      'last_name' => array(
        'type' => 'VARCHAR',
        'constraint' => '50',
        'null' => TRUE
      )
    );

    $this->dbforge->add_column('users', $fields);
  }

  public function down()
  {
    $this->dbforge->drop_column('users', 'first_name');
    $this->dbforge->drop_column('users', 'last_name');
  }

}
