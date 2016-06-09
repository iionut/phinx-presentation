<?php

use Phinx\Migration\AbstractMigration;

class FirstMigration extends AbstractMigration
{
    public function up()
    {
        $this->table("users")
            ->addColumn("username", "string", [
                "null" => false
            ])
            ->addColumn("password", "string", [
                "limit" => 32,
                "null" => false,
                "comment" => "Hashed with MD5"
            ])
            ->save();
    }

    public function down()
    {
        $this->dropTable("users");
    }
}
