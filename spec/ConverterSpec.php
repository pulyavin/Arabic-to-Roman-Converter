<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConverterSpec extends ObjectBehavior
{
    public function it_should_return_null_when_less_0() {
        $rand = -rand(0, 100000);

        $this->getRoman($rand)->shouldBe(null);
    }

    public function it_should_return_null_when_over_3999() {
    	$rand = rand(3999, 100000);

    	$this->getRoman($rand)->shouldBe(null);
    }

    public function it_should_return_I() {
    	$this->getRoman(1)->shouldBe("I");
    }

    public function it_should_return_II() {
    	$this->getRoman(2)->shouldBe("II");
    }

    public function it_should_return_III() {
    	$this->getRoman(3)->shouldBe("III");
    }

    public function it_should_return_IV() {
    	$this->getRoman(4)->shouldBe("IV");
    }

    public function it_should_return_V() {
    	$this->getRoman(5)->shouldBe("V");
    }

    public function it_should_return_VIII() {
    	$this->getRoman(8)->shouldBe("VIII");
    }

    public function it_should_return_IX() {
    	$this->getRoman(9)->shouldBe("IX");
    }

    public function it_should_return_X() {
    	$this->getRoman(10)->shouldBe("X");
    }

    public function it_should_return_XV() {
    	$this->getRoman(15)->shouldBe("XV");
    }

    public function it_should_return_XXX() {
        $this->getRoman(30)->shouldBe("XXX");
    }

    public function it_should_return_CMXXVII() {
        $this->getRoman(927)->shouldBe("CMXXVII");
    }

    public function it_should_return_C() {
    	$this->getRoman(100)->shouldBe("C");
    }

    public function it_should_return_MMCX() {
    	$this->getRoman(2110)->shouldBe("MMCX");
    }

    public function it_should_return_CMXCIX() {
    	$this->getRoman(999)->shouldBe("CMXCIX");
    }

    public function it_should_return_MMMCMXCIX() {
    	$this->getRoman(3999)->shouldBe("MMMCMXCIX");
    }
}
