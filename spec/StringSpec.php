<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringSpec extends ObjectBehavior
{
    public function it_should_be_array_when_clean_line() {
        $string = "1, 2, 3, 4, 5, 6";

        $this->prepare($string)->shouldBeArray();
    }

    public function it_should_be_null_when_empty_column() {
        $string = "1, 2, 3, , 5, 6";

        $this->prepare($string)->shouldBe(null);
    }

    public function it_should_be_null_when_more_empty_column() {
        $string = ", , 3, , 5, 6";

        $this->prepare($string)->shouldBe(null);
    }

    public function it_should_be_null_when_crash_column() {
        $string = "a, b , 3, c , 5, 6";

        $this->prepare($string)->shouldBe(null);
    }

    public function it_should_be_null_when_multi_comma() {
        $string = "1,2,,,,,,,";

        $this->prepare($string)->shouldBe(null);
    }

    public function it_should_be_null_when_middle_crash() {
        $string = "1, 1 2, 3, 4, 5";

        $this->prepare($string)->shouldBe(null);
    }

    public function it_should_be_null_when_double_comma() {
        $string = "1, 2, 3, 3, 4, 5,,";

        $this->prepare($string)->shouldBe(null);
    }

    public function it_should_be_null_when_float() {
        $string = "1, 1.2, 3, 3, 4, 5,,";

        $this->prepare($string)->shouldBe(null);
    }

}
