<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FooTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Foo::class);

        $component->assertStatus(200);
    }
}
