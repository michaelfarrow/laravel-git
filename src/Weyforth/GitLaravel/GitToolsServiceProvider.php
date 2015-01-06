<?php
/**
 * Handlebars Service Provider.
 *
 * @author    Mike Farrow <contact@mikefarrow.co.uk>
 * @license   Proprietary/Closed Source
 * @copyright Mike Farrow
 */

namespace Weyforth\GitLaravel;

use Illuminate\Support\ServiceProvider;

class GitToolsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var boolean
     */
    protected $defer = false;


    /**
     * Register the service provider.
     *
     * Extend view class to provide our custom loader.
     *
     * @return void
     */
    public function register()
    {
        $this->app->instance('gittools', new GitTools);
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('gittools');
    }


}
