<?php

namespace App\Traits;

use Illuminate\Database\DatabaseManager;

trait MsSqlConnectionTrait
{
    public function testMsSqlConnection()
    {
        $db = app(DatabaseManager::class);
        $connection = $db->connection('sqlsrv');
        if ($connection) {
            echo 'MS SQL database connection successful!';
        } else {
            echo 'MS SQL database connection failed!';
        }
    }
}
