<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 4/04/17
 * Time: 21:31
 */

namespace App\Http\Controllers;


class UsersController extends Controller
{
    public function fetchUser()
    {
        return User::all();
    }

}