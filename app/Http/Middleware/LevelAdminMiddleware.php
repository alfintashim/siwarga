<?php

namespace App\Http\Middleware;

class LevelAdminMiddleware extends LevelMiddleware
{   
    protected $level = '1';
}