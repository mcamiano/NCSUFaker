<?php
namespace NCSUFaker;

use Faker\Provider\Base;

class CalendarProvider extends Base
{
    public function strm($yearFrom=NULL, $yearTo=NULL)
    {
      if (is_null($yearFrom)) {
        $yearFrom=Date('y')-3;
      }
      if (is_null($yearTo)) {
        $yearTo=Date('y')+2;
      }
      $terms=array(1,6,7,8);
      $term=rand(0,3);

      $n=sprintf("%02d", rand($yearFrom,$yearTo));

      return "2{$n}{$terms[$term]}";
    }
}
