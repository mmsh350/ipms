<?php

namespace App\Http\Controllers;

use App\Traits\MsSqlConnectionTrait;

class DatabaseConnectionTest extends Controller
{
    //Use the connection Traits
    use MsSqlConnectionTrait;

    //Test Database Connection
    public function establishConnection()
    {
        $this->testMsSqlConnection();
    }
}
