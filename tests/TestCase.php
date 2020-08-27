<?php

namespace Maicol07\Flarum\Api\Tests;

use Maicol07\Flarum\Api\Flarum;
use Maicol07\Flarum\Api\Models\Model;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Flarum
     */
    protected $flarum;
    
    protected function setUp(): void
    {
        parent::setUp();
        
        $token = getenv('FLARUM_TOKEN');
        
        $this->flarum = new Flarum(
            getenv('FLARUM_HOST') ?? 'https://discuss.flarum.org',
            $token ? compact('token') : []
        );

        Model::setDispatcher($this->flarum);
    }
}