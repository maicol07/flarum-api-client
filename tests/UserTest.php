<?php


namespace Maicol07\Flarum\Api\Tests;

use Maicol07\Flarum\Api\Resource\Collection;

class UserTest extends TestCase
{
    /**
     * @test
     *
     * @return Collection
     */
    public function getUsers(): Collection
    {
        $users = $this->client->users()->request();
        
        self::assertInstanceOf(Collection::class, $users);
        
        return $users;
    }
}
