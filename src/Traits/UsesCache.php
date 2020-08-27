<?php

namespace Maicol07\Flarum\Api\Traits;

use Maicol07\Flarum\Api\Flarum;
use Maicol07\Flarum\Api\Resource\Item;

trait UsesCache
{
    /**
     * @return Item
     */
    public function cache()
    {
        Flarum::getCache()->set($this->id, $this, $this->type);

        return $this;
    }
}