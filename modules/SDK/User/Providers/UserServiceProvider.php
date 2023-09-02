<?php

namespace Mod\SDK\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register ()
    {
        $this->loadRoutesFrom('modules/SDK/User/Routes/route_user.php');
    }

    public function boot ()
    {
        //dd('Public Boot');
        //echo 'Public Boot';
    }
}
