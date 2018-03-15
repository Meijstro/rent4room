<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Postcode
{
  public static function format($postcode){
    $postcode = preg_replace('/\s+/', '', $postcode);
    $postcode = strtoupper($postcode);
    $postcode = trim($postcode,' \' ');
    return $postcode;
  }
  public static function is_valid($postcode) {
    $postcode = Postcode::format($postcode);

    $regex = '~\A[1-9]\d{3} ?[a-zA-Z]{2}\z~';

    $valid = preg_match($regex, $postcode, $matches);

    if($valid=1){
       return true;

    } 
    return false;
  }
}

class PostcodeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_format_all_postcodes_in_a_uniform_way()
    {
        $this->assertEquals("9123AJ", Postcode::format("9123 AJ"));
        $this->assertEquals("9123AJ", Postcode::format("9123 aj"));
        $this->assertEquals("9123AJ", Postcode::format("   9123  aj  "));
        $this->assertEquals("9123AJ", Postcode::format(" ' '  9123  aj  "));

    }

    public function test_if_a_postcode_is_a_valid_dutch_postcode () {
      $this->assertTrue(Postcode::is_valid("9123 AJ"));
      $this->assertFalse(Postcode::is_valid("AJ 9123"));
    }
}
