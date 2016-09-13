<?php
namespace test\mass_calculation;

require_once("../lib/mass_calculator.php");

use PHPUnit\Framework\TestCase;
use mass_calculator as mc;

class calculation_testcase extends TestCase {
    public function test_gravitational_force_on_earth(){
        $this->assertEquals(981, mc\calculate_gravitational_force_on_earth(100));
        $this->assertEquals(0, mc\calculate_gravitational_force_on_earth(0));
        $this->assertEquals(49.05, mc\calculate_gravitational_force_on_earth(5));
    }

    public function test_weight_on_moon(){
        $this->assertEquals(16.51, mc\calculate_weight_on_moon(100));
        $this->assertEquals(0, mc\calculate_weight_on_moon(0));
        $this->assertEquals(0.83, mc\calculate_weight_on_moon(5));
    }

    public function test_gravitational_force_on_moon(){
        $this->assertEquals(26.75, mc\calculate_gravitational_force_on_moon(100));
        $this->assertEquals(0, mc\calculate_gravitational_force_on_moon(0));
        $this->assertEquals(1.34, mc\calculate_gravitational_force_on_moon(5));
    }
}
