<?php namespace Folklore\Bulle;

use Illuminate\Support\ServiceProvider;

class BulleServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('folklore/bulle', 'bulle');
		
		$this->app->register('Folklore\EloquentMediatheque\MediathequeServiceProvider');
		$this->app->register('Cviebrock\EloquentSluggable\SluggableServiceProvider');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
