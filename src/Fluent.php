<?php

namespace Maicol07\Flarum\Api;

use Illuminate\Support\Arr;
use Maicol07\Flarum\Api\Exceptions\UnauthorizedRequestMethodException;

/**
 * Class Fluent
 * @package Maicol07\Client\Api
 *
 * @method Fluent token() Get user token
 * @method Fluent discussions(string|int|null $id = null) Get discussions or only one if you provide an ID
 * @method Fluent groups(string|int|null $id = null) Get groups or only one if you provide an ID
 * @method Fluent users(string|int|null $id = null) Get users or only one if you provide an ID
 * @method Fluent tags(string|int|null $id = null) Get tags or only one if you provide an ID
 *
 *
 * @method Fluent get
 * @method Fluent head
 * @method Fluent post(array $variables = [])
 * @method Fluent put(array $variables = [])
 * @method Fluent patch(array $variables = [])
 * @method Fluent delete
 * @method bool|Resource\Collection|Resource\Item|null|Resource\Token request() If called alone, it returns Flarum info
 */
class Fluent
{
    /* @var array */
    protected $types = [
        'discussions',
        'users',
        'groups',
        'tags',
        'token'
    ];
    
    /* @var array */
    protected $methods = [
        'get', 'head',
        'post', 'put', 'patch',
        'delete'
    ];
    
    /* @var array */
    protected $methodsRequiringAuthorization = [
        'post', 'put', 'patch', 'delete'
    ];
    
    /** @var string[] */
    public $typesWithoutJsonApi = [
        'token'
    ];
    
    /* @var array */
    protected $pagination = [
        'filter',
        'page'
    ];
    
    /* @var array */
    protected $segments = [];
    
    /* @var array */
    protected $query = [];
    
    /* @var array */
    protected $includes = [];
    
    /* @var Client */
    protected $client;
    
    /* @var string */
    protected $method = 'get';
    
    /* @var array */
    protected $variables = [];
    
    public function __construct(Client $flarum)
    {
        $this->client = $flarum;
    }
    
    public function reset(): Fluent
    {
        $this->segments = [];
        $this->includes = [];
        $this->query = [];
        $this->variables = [];
        $this->method = 'get';
        
        return $this;
    }

    protected function handleType(string $type, $id): Fluent
    {
        $this->segments[] = $type;

        if ($id) {
            $this->segments[] = $id;
        }

        return $this;
    }

    public function setPath(string $path): Fluent
    {
        $this->segments = [$path];

        return $this;
    }

    /**
     * @param string $method
     * @return Fluent
     * @throws UnauthorizedRequestMethodException
     */
    public function setMethod(string $method): Fluent
    {
        $this->method = strtolower($method);
    
        if (
            $this->client->isStrict() &&
            !$this->client->isAuthorized() &&
            in_array($this->method, $this->methodsRequiringAuthorization, true)) {
            throw new UnauthorizedRequestMethodException($this->method);
        }

        return $this;
    }
    
    public function setVariables(array $variables = []): Fluent
    {
        if (isset($variables['relationships'])) {
            foreach ($variables['relationships'] as $relation => $relationship) {
                if (!Arr::get($relationship, 'data')) {
                    unset($variables['relationships'][$relation]);
                    $variables['relationships'][$relation]['data'] = $relationship;
                }
            }
        }

        if (count($variables) === 1 && is_array($variables[0])) {
            $this->variables = $variables[0];
        } else {
            $this->variables = $variables;
        }
    
        return $this;
    }
    
    public function getMethod(): string
    {
        return $this->method;
    }
    
    public function getType(): string
    {
        return $this->segments[0];
    }
    
    public function getVariables(): array
    {
        return $this->variables;
    }
    
    protected function handlePagination(string $type, $value): Fluent
    {
        $this->query[$type] = $value;
        
        return $this;
    }

    public function id(int $id): Fluent
    {
        $this->segments[] = $id;

        return $this;
    }

    public function include(string $include): Fluent
    {
        $this->includes[] = $include;

        return $this;
    }

    public function offset(int $number): Fluent
    {
        return $this->handlePagination('page[offset]', $number);
    }
    
    public function __toString()
    {
        $path = implode('/', $this->segments);
        
        if ($this->includes || $this->query) {
            $path .= '?';
        }
        
        if ($this->includes) {
            $path .= sprintf(
                'include=%s&',
                implode(',', $this->includes)
            );
        }

        if ($this->query) {
            $path .= http_build_query($this->query);
        }

        return $path;
    }
    
    /**
     * @param $name
     * @param $arguments
     * @return Fluent
     * @throws UnauthorizedRequestMethodException
     * @noinspection PhpInconsistentReturnPointsInspection
     */
    public function __call($name, $arguments)
    {
        if (in_array($name, $this->methods, true)) {
            if (!empty($arguments)) {
                $this->setVariables($arguments);
            }
            return $this->setMethod($name);
        }
    
        if (count($arguments) <= 1 && in_array($name, $this->types, true)) {
            return $this->handleType($name, $arguments[0] ?? null);
        }
    
        if (in_array($name, $this->pagination, true) && count($arguments) === 1) {
            return call_user_func_array([$this, 'handlePagination'], Arr::prepend($arguments, $name));
        }
    
        if (method_exists($this->client, $name)) {
            return call_user_func_array([$this->client, $name], $arguments);
        }
    }
}
