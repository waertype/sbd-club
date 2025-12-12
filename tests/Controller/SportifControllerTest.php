<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class SportifControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/sportif');

        self::assertResponseIsSuccessful();
    }
}
