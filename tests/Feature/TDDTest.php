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
          home画面をリファクタリング
          css弄ってるだけなのでもちろんテストは通る
        */
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
