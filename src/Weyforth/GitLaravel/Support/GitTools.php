<?php
/**
 * Facade to expose GitTools class.
 *
 * @author    Mike Farrow <contact@mikefarrow.co.uk>
 * @license   Proprietary/Closed Source
 * @copyright Mike Farrow
 */

namespace Weyforth\GitLaravel\Support;

use Illuminate\Support\Facades\Facade;

class GitTools extends Facade
{


    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gittools';
    }


}
