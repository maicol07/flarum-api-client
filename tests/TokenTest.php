<?php


namespace Maicol07\Flarum\Api\Tests;

use Maicol07\Flarum\Api\Resource\Token;

class TokenTest extends TestCase
{
    /**
     * @test
     *
     * @return Token
     */
    public function tokenTest(): Token
    {
        if (!env('FLARUM_USERNAME') || !env('FLARUM_PASSWORD')) {
            self::markTestSkipped('No credentials provided.');
        }

        if (!env('FLARUM_API_KEY')) {
            // Remove strictness
            $this->client->setStrict(false);
        }

        $request = $this->client->token()->post([
            'identification' => env('FLARUM_USERNAME'),
            'password' => env('FLARUM_PASSWORD'),
            'bypassCsrfToken' => true
        ]);
        $token = $request->request();

        self::assertInstanceOf(Token::class, $token);
        self::assertIsInt($token->userId);
        self::assertIsString($token->token);

        return $token;
    }
}
