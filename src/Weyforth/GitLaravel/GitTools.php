<?php
/**
 * Handlebars Laravel extension.
 *
 * Class to allow helpers to be added to be used by
 * the accompanying engine
 *
 * @author    Mike Farrow <contact@mikefarrow.co.uk>
 * @license   Proprietary/Closed Source
 * @copyright Mike Farrow
 */

namespace Weyforth\GitLaravel;

use Weyforth\GitPHP\GitTools as GitPHP;

class GitTools
{

    protected $tools;

    public function __construct(){
        $this->tools = new GitPHP(base_path());
    }

    

}
