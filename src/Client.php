<?php

namespace Maicol07\Flarum\Api;

use GuzzleHttp\Client as Guzzle;
use Illuminate\Cache\ArrayStore;
use Illuminate\Support\Arr;
use Maicol07\Flarum\Api\Response\Factory;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Client
 * @package Maicol07\Client\Api
 * @mixin Fluent
 */
class Client
{
    /* @var Cache */
    protected static $cache;
    /* @var Guzzle */
    protected $rest;
    /* @var Fluent */
    protected $fluent;
    /* @var bool Whether to enforce specific markup/variables setting. */
    protected $authorized = false;
    /* @var bool */
    protected $strict = true;
    
    /**
     * Client constructor.
     * @param string $host Full FQDN hostname to your Client forum, eg http://example.com/forum
     * @param array $authorization Holding either "token" or "username" and "password" as keys.
     * @param array $options Custom options for the Guzzle HTTP Client
     */
    public function __construct($host, array $authorization = [], array $options = [])
    {
        $this->rest = new Guzzle(array_merge([
            'base_uri' => "$host/api/",
            'headers' => $this->requestHeaders($authorization)
        ], $options));
    
        $this->fluent = new Fluent($this);
    
        static::$cache = new Cache(new ArrayStore);
    }
    
    protected function requestHeaders(array $authorization = []): array
    {
        $headers = [
            'Accept' => 'application/vnd.api+json, application/json',
            'User-Agent' => 'Maicol07 Client Api Client'
        ];
        
        $token = Arr::get($authorization, 'token');
        
        if ($token) {
            $this->authorized = true;
            Arr::set($headers, 'Authorization', "Token $token");
        }
        
        return $headers;
    }
    
    public static function getCache(): Cache
    {
        return self::$cache;
    }
    
    /** @noinspection PhpInconsistentReturnPointsInspection */
    public function request()
    {
        $method = $this->fluent->getMethod();

        /** @var ResponseInterface $response */
        try {
            $response = $this->rest->{$method}((string)$this->fluent, $this->getVariablesForMethod());
        } finally {
            // Reset the fluent builder for a new request.
            $this->fluent->reset();
        }
        
        /** @noinspection NotOptimalIfConditionsInspection */
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
            return Factory::build($response);
        }
    }
    
    protected function getVariablesForMethod(): array
    {
        $variables = $this->fluent->getVariables();
        
        if (empty($variables)) {
            return [];
        }
        
        if ($this->fluent->getMethod() === 'get') {
            return $variables;
        }
        
        return [
            'json' => ['data' => $variables]
        ];
    }
    
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->fluent, $name], $arguments);
    }
    
    public function getFluent(): Fluent
    {
        return $this->fluent;
    }
    
    public function getRest(): Guzzle
    {
        return $this->rest;
    }
    
    public function isStrict(): bool
    {
        return $this->strict;
    }
    
    public function setStrict(bool $strict): Client
    {
        $this->strict = $strict;
        return $this;
    }
    
    public function isAuthorized(): bool
    {
        return $this->authorized;
    }
}
