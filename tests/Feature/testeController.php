<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testeController extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreate()
    {
        $data = [
            'name' => 'Test Name',
        ];

        $model = Category::create($data);

        $this->assertInstanceOf(Category::class, $model);
        $this->assertEquals($data['name'], $model->name);
    }
}
