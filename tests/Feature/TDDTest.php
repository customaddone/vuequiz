<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TDDTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        /*
          素早く実装　→　テストが通る
          test以下の全てのファイルがテストされるのでExampleTestは消しとこうね
        */
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
