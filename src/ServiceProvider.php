<?php

namespace RuLong\Area;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{

    protected $commands = [
        Command::class,
    ];

    /**
     * [部署时加载]
     * @Author:<C.Jason>
     * @Date:2018-10-17T17:09:22+0800
     * @return [type] [description]
     */
    public function boot()
    {
        $this->commands($this->commands);
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
        }
    }
}
