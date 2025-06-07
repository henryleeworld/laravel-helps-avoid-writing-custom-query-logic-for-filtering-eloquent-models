<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller 
{
    /**
     * Display the specified resource.
     */
    public function show() 
    {
        $sql = User::filter([
            [
                'target' => 'name',
                'type'   => '$eq',
                'value'  => ($name = __('Administrator')),
            ],
        ])->toRawSql();
        echo __('SQL statement to filter the user name, :name: ', ['name' => $name]) . $sql . PHP_EOL;
    }
}