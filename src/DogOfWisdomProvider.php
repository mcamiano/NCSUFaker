<?php
namespace NCSUFaker;

use Faker\Provider\Base;

class DogOfWisdomProvider extends Base
{
    protected $lorems=array("Bah.", "Ha ba-bah.", "Ha bubba da ga dah.", "Ha bubba da da bah.", "Ha da ba da ga ta gah.", "Ha da-dah.", "Ha ba bah.", "Ha ba ba da ga da gah.", "Bah.", "Bah! Ba ba bah! Ba ba ba bah! Bababa ba bah! Bah! Bah! (HAAAAAA!) Bah! Ha ba ba bah! Ha bababa (HAAAAAA!)  ba bah! Bah! Ba baba ba (HAAAAAA!) ba bah! Hawawa? Ha! Ha.", "Ha wa wah! HAAA! Ha.", "Ha da ba da gah? Ha wa wa bwub.", "Ha ba ba bah.", "Ha wa wa wah...", "HAAA! Ha da ba da! Ha...", "Ha wa wa wah.", "Ha wawa wah! Ha ha.", "Ha da ditch? Ba! Ba da gah?");

    public function dogOfWisdomIpsum($sentences=5)
    {
      $c = count($this->lorems);

      if ($sentences <= 0 || !is_numeric($sentences)) {
        $sentences=rand(2, $c);
      }


      $that=$this;

      if ($sentences > $c) {
          return $this->dogOfWisdomIpsum($sentences-$c) . " " . $this->dogOfWisdomIpsum($c);
      }

      $lorems = array_map(function($k) use ($that) { return $that->lorems[$k]; }, (array)array_rand($this->lorems, $sentences));

      return implode(" ", $lorems);
    }
}
