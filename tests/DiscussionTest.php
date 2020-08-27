<?php

namespace Maicol07\Flarum\Api\Tests;

use Maicol07\Flarum\Api\Client;
use Maicol07\Flarum\Api\Models\Discussion;
use Maicol07\Flarum\Api\Models\Model;
use Maicol07\Flarum\Api\Resource\Collection;
use Maicol07\Flarum\Api\Resource\Item;

class DiscussionTest extends TestCase
{
    /**
     * @test
     */
    public function frontpage(): Collection
    {
        /** @var Collection $collection */
        $collection = $this->flarum->discussions()->request();
        
        $this->assertInstanceOf(Collection::class, $collection);
        
        $this->assertGreaterThan(0, $collection->collect()->count());
        
        return $collection;
    }

    /**
     * @test
     * @depends frontpage
     * @param Collection $collection
     */
    public function discussion(Collection $collection)
    {
        /** @var Item $discussion */
        $discussion = $collection->collect()->first();

        /** @var Item $item */
        $item = $this->flarum->discussions()->id($discussion->id)->request();

        $this->assertEquals($discussion->id, $item->id, 'Requesting an existing discussion retrieves an incorrect result.');
        $this->assertEquals($discussion->type, $item->type, 'Requesting an existing discussion retrieves an incorrect resource type.');
    
        $cached = Client::getCache()->get($discussion->id, null, $discussion->type);

        $this->assertNotNull($cached, 'Discussion was not automatically persisted to global store.');
        $this->assertEquals($discussion->id, $cached->id, 'The wrong discussion was stored into cache.');

        $this->assertNotNull($discussion->title);
        $this->assertNotNull($discussion->slug);

        $this->assertNotNull($discussion->tags, 'The relation tags should be set on a discussion.');

        $this->assertNotNull($discussion->startPost, 'A discussion has a start post.');
    }

    /**
     * @test
     */
    public function createsDiscussions()
    {
        if (! $this->flarum->isAuthorized()) {
            $this->markTestSkipped('No authentication set.');
        }

        $discussion = new Discussion([
            'title' => 'Foo',
            'content' => 'Some testing content'
        ]);

        $resource = $discussion->save();

        $this->assertInstanceOf(Item::class, $resource);

        $this->assertEquals($discussion->title, $resource->title);
        $this->assertNotEmpty($resource->startPost);
        $this->assertEquals($discussion->content, $resource->startPost->content);

        return $resource;
    }

    /**
     * @test
     * @depends createsDiscussions
     * @param Item $resource
     */
    public function deletesDiscussions(Item $resource)
    {
        if (! $this->flarum->isAuthorized()) {
            $this->markTestSkipped('No authentication set.');
        }

        $discussion = Discussion::fromResource($resource);
        $model = Model::fromResource($resource);

        // Resolve the same instance.
        $this->assertEquals($discussion, $model);

        // See if we can delete things.
        $this->assertTrue($discussion->delete());
    }
}