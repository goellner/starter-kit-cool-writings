<?php

namespace App;

use Statamic\Entries\Entry;

class CustomEntry extends Entry
{
  protected function shallowAugmentedArrayKeys()
  {
    return [
      'id',
      'title',
      'url',
      'permalink',
      'api_url',
      'entries',
    ];
  }
}
