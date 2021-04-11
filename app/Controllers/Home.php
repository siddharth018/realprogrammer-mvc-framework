<?php

namespace App\Controllers;

use \System\View;
use \App\Models\User;
/**
 * Home controller
 */
class Home extends \System\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    
    public function index()
    {
        View::renderTemplate('Home/index.html');
    }
    
    public function user()
    {
        $user = User::getAll();        
        View::renderTemplate('Home/about.html', ['user'=> $user]);
    }
}
