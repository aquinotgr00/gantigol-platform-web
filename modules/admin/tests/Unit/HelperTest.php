<?php

namespace Modules\Admin\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelperTest extends TestCase
{
    /**
     * @test
     */
    public function merge_config_helper_should_return_both_arrays_merged(): void
    {
        $config1 = [
            'a'=>1,
            'b'=>[
                'c'=>2,
                'd'=>3
            ]
        ];
        
        $config2 = [
            'b'=>[
                'e'=>4,
                'f'=>5
            ],
            'g'=>6
        ];
        
        $merged = merge_config($config1, $config2);
        
        $this::assertTrue($merged===[
            'a'=>1,
            'b'=>[
                'c'=>2,
                'd'=>3,
                'e'=>4,
                'f'=>5
            ]
        ]);
    }
}
