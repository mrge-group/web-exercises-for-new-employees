<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class User extends Controller
{

    /**
     * returns all users except user from role admin
     * ToDo: return all users from storage/app/users.json. Except users with the role: admin
     * @param Request $request
     */
    public function getUsers(Request  $request)
    {

    }


    /**
     * returns a user except user from role admin
     * ToDo: return a specific user from storage/app/users.json. If the user is role: admin return an empty array
     * @param int $userId
     */
    public function getUser(int $userId)
    {

    }
}
