<?php
namespace NCSUFaker;

use Faker\Provider\Base;

class NcsuLoremIpsumProvider extends Base
{
    protected $doglorems=array(
        "Bah.", "Ha ba-bah.", "Ha bubba da ga dah.", "Ha bubba da da bah.", "Ha da ba da ga ta gah.", 
        "Ha da-dah.", "Ha ba bah.", "Ha ba ba da ga da gah.", "Bah.", 
        "Bah! Ba ba bah! Ba ba ba bah! Bababa ba bah! Bah! Bah! (HAAAAAA!) Bah! Ha ba ba bah! Ha bababa (HAAAAAA!)  ba bah! Bah! Ba baba ba (HAAAAAA!) ba bah! Hawawa? Ha! Ha.",
        "Ha wa wah! HAAA! Ha.", "Ha da ba da gah? Ha wa wa bwub.", "Ha ba ba bah.", "Ha wa wa wah...", 
        "HAAA! Ha da ba da! Ha...", "Ha wa wa wah.", "Ha wawa wah! Ha ha.", "Ha da ditch? Ba! Ba da gah?"
    );

    protected $trololos=array(
        "Ahhhhhhhhh\nYa ya yaaaah\nYa ya yaaah\nYaaah ya yah",
        "Ohohohohoooo Oh ya yaaah\nYa ya yaaah\nYaaah ya yah",
        "Ye-ye-ye-ye-yeh\nYe-ye-yeh\nYe-ye-yeh\nOhohohohoh",
        "Ye-ye-ye-ye-yeh\nYe-ye-yeh\nYe-ye-yeh\nOhohohohooooooooooo\nAaaaoooooh aaaooo\nHooo haha",
        "Nah nah nah nah\nNuh nuh nuh\nNuh nuh nuh\nNuh nuh nuh\nNuh nuh nah!",
        "Nah nah nah nah nun\nNun-ah nun\nNun-ah nuh\nNah nah nah nah nah!",
        "Nah nah nah nah Naaaaaaaaaaaaaaaaaaaaaaaaah!\nDah dah daaaaaaaaaah...\nDa-da-dah....\nDaaah..\nDa-dah...",
        "Lololololoooooooooooooo!",
        "Lah la-laaah\nLa la laaah\nlol\nhaha",
        "Ohohohoho\nho-ho-ho\nho-ho-ho\noh-ho-ho-ho-ho",
        "Ohohohoho\nho-ho-ho\nho-ho-ho\nLololololooo...",
        "AAIIEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE\neeeee-eeeee-EEEEEEEEE!",
        "Luh-luh-lah...\nLah\nLah-lah",
        "Ohohohohooooooooo!\nBOPadududu-dah-da-du-daaaah!\nDa-da-daaaah\nDaaah\nDa-daaah...",
        "Lololololo\nlololo\nlololol\nLalalalah!",
        "Trololololo\nlalala",
        "Oh-hahaha-ho\nHaha-hehe-ho\nHohoho-he-ho\nHahahaha-ho",
        "Lolololololo\nLolololololo\nLolololololo\nLololo-LOL!",
        "Aaaaaaaaaaahhhhhhhhhhhhh!\nLa-la-laaaah!\nLa la laaaah!\nLaaaah\nLa-lah...",
        "Ohohohohoooooooooo!\nLa,\nla-laaah!\nLa-la-laaah\nlol\nhaha...",
        "Lololololo\nLololo\nLololo",
        "Ohohohoho!",
        "Lololololol\nLololo\nLololo",
        "Ohohohohooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo!"
    );

    public function dogOfWisdomIpsum($sentences=5)
    {
      return $this->randomSentences($this->doglorems,$sentences);
    }

    public function trololoIpsum($sentences=5)
    {
      return $this->randomSentences($this->trololos,$sentences);
    }

    protected function randomSentences($lorem, $sentences)
    {
      $c = count($lorem);

      if ($sentences <= 0 || !is_numeric($sentences)) {
        $sentences=rand(2, $c);
      }


      $that=$this;

      if ($sentences > $c) {
          return $this->randomSentences($lorem,$sentences-$c) . " " . $this->randomSentences($lorem,$c);
      }

      $lorems = array_map(function($k) use ($lorem) { return $lorem[$k]; }, (array)array_rand($lorem, $sentences));

      return implode(" ", $lorems);
    }
}
