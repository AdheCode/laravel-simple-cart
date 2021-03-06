<?php

namespace Tests\Unit\Models\Categories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_has_many_children()
    {
        $category = factory(Category::class)->create();

        $category->children()->save(
        	factory(Category::class)->create()
        );

        $this->assertInstanceOf(Category::class, $category->children->first());
    }

    public function test_it_can_fetch_only_parents()
    {
        $category = factory(Category::class)->create();

        $category->children()->save(
        	factory(Category::class)->create()
        );

        $this->assertEquals(1, Category::parents()->count());
    }

    public function test_it_is_orderable_by_a_numbered_order()
    {
        $category = factory(Category::class)->create([
        	'order' => 2
        ]);

        $annotherCategory = factory(Category::class)->create([
        	'order' => 1
        ]);
        

        $this->assertEquals($annotherCategory->name, Category::ordered()->first()->name);
    }

    public function test_it_has_many_products()
    {
        $category = factory(Category::class)->create();

        $category->products()->save(
            factory(Product::class)->create()
        );

        $this->assertInstanceOf(Product::class, $category->products->first());
    }
}
