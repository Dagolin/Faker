<?php

namespace Faker\Provider\zh_TW;

class Payment extends \Faker\Provider\Payment
{
    public function creditCardDetails($valid = true)
    {
        return \Faker\Factory::create('en_US')->creditCardDetails($valid);
    }

    /**
     * return standard VAT / Tax ID / Uniform Serial Number
     *
     * @example 28263822
     *
     * @return int
     */
    public function VAT()
    {
        return static::randomNumber(8, true);
    }
}
