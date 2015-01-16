<?php namespace Tbit\Omnipay;

use Illuminate\Support\ServiceProvider;

class OmnipayServiceProvider extends ServiceProvider 
{
	public function register()
	{
		$this->app->bind('gatewayfactory', function()
		{
			return $this->app->make('Omnipay\Common\GatewayFactory');
		});
	}
}