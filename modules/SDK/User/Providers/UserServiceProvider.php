<?php

namespace Mod\SDK\User\Providers;

use Illuminate\Support\ServiceProvider;
use Mod\SDK\User\Components\Btn;

class UserServiceProvider extends ServiceProvider
{
    public function register ()
    {
        $this->mergeConfigFrom(__DIR__. '/../Config/user_config.php', 'userConfig');
        $this->loadMigrationsFrom(__DIR__. '/../Database/Migrations/');
        $this->loadRoutesFrom(__DIR__. '/../Routes/route_user.php');
        $this->loadViewsFrom(__DIR__. '/../Resources/Views/', 'User');
        $this->loadViewComponentsAs('user', [
            Btn::class
        ]);
    }

    public function boot ()
    {
        //dd('Public Boot');
        //echo 'Public Boot';
    }
}
