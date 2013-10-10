class Migration_Add_User_Name_Fields extends CI_Migration {

  public function up()
  {
    $fields = array(
      'first_name VARCHAR(50) DEFAULT NULL',
      'last_name VARCHAR(50) DEFAULT NULL'
    );

    $this->dbforge->add_column('users', $fields);
  }

  public function down()
  {
    $this->dbforge->drop_column('users', 'first_name');
    $this->dbforge->drop_column('users', 'last_name');
  }

}
