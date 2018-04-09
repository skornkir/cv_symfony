<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BundleControllerTest extends WebTestCase
{
    public function testHow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blog');
    }

}
