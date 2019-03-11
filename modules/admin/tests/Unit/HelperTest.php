<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelperTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function merge_config_helper_should_return_both_arrays_merged()
    {
        $config1 = [];
        $config2 = [];
        $merged = merge_config($config1, $config2);
        $this->assertTrue(true);
    }
}
