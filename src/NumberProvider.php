<?php
namespace NCSUFaker;

use Faker\Provider\Base;

class NumberProvider extends Base
{
    public function naturalNumber($upto=NULL)
    {
      if (is_null($upto)) {
          $upto=mt_getrandmax();
      }

      return mt_rand(1,$upto);
    }
}
