<?php

namespace Maicol07\Flarum\Api\Tests;

use Maicol07\Flarum\Api\Client;
use Maicol07\Flarum\Api\Models\Model;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Client
     */
    protected $flarum;
    
    protected function setUp(): void
    {
        parent::setUp();
        
        $token = getenv('FLARUM_TOKEN');
    
        $this->flarum = new Client(
            getenv('FLARUM_HOST') ?? 'https://discuss.flarum.org',
            $token ? compact('token') : []
        );

        Model::setDispatcher($this->flarum);
    }
}