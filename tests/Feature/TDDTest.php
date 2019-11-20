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
          テスト開発駆動
          １　TODOリストから実装する機能を決める
          ２　テストを書く
          ３　失敗する
          ４　素早く機能を実装する
          ５　リファクタリング
        */
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
