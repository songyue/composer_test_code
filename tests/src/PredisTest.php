<?php
/**
 * File Name: tests/src/predisTest.php
 * Author: songyue
 * mail: songyue118@gmail.com
 * Created Time: Fri Jul  9 19:04:52 2021
 */
namespace Tests\src;

use Tests\TestCase;

class PredisTest extends TestCase
{
    protected $client;

    public function setUp(): void
    {
        $this->client = new \Predis\Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
        ]);
        parent::setUp();
    }

    public function testKeys()
    {
        $res = $this->client->keys('*');
        print_r($res);
        $this->assertIsArray($res);
    }

}
