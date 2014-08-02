<?php
namespace Quynguyen\Countonline;

use Illuminate\Support\ServiceProvider;

class CountonlineServiceProvider extends ServiceProvider {
	public function register()
    {
        $this->app->bind('countonline', function()
        {
            return new Countonline;
        });
    }
}