<?php
namespace {
    require_once "vendor/illuminate/support/helpers.php";
}

namespace Maicol07\Flarum\Api\Tests {
    
    use Maicol07\Flarum\Api\Client;
    use Maicol07\Flarum\Api\Models\Model;
    
    abstract class TestCase extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var Client
         */
        protected $client;
        
        protected function setUp(): void
        {
            parent::setUp();
            
            $token = env('FLARUM_TOKEN');
            
            $this->client = new Client(
                env('FLARUM_HOST') ?? 'https://discuss.flarum.org',
                $token ? compact('token') : [],
                env('DEBUG') ? ['debug' => true] : []
            );
            
            Model::setDispatcher($this->client);
        }
    }
}