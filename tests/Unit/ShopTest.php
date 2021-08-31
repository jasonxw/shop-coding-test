<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Shop;

class ShopTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public $testArry = ['apple','orange','apple','apple'];

    public function test_shop_construct()
    {
        $shop = new Shop($this->testArry);

        $this->assertInstanceOf(
            Shop::class,$shop
        );
    }

    public function test_shop_calPrice_return_type()
    {
        $shop = new Shop($this->testArry);

        $testReslut = $shop->calPrice();

        $this->assertIsFloat($testReslut);
    }

    public function test_shop_calPrice_value()
    {
        $shop = new Shop($this->testArry);

        $shop->countItems();

        $testReslut = $shop->calPrice();

        $this->assertEquals(2.45,$testReslut);
    }

}
