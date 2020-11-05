<?php

namespace App;

use Statamic\Assets\Asset;

class CustomAsset extends Asset
{
  protected function shallowAugmentedArrayKeys()
  {
    return [
      'url',
      'permalink',
      'path',
      'alt',
      'title',
      'is_image',
      'is_video',
      'size',
      'size_bytes',
      'size_kilobytes',
      'size_megabytes',
      'size_gigabytes',
      'height',
      'width',
      'orientation',
      'focus_css',
      'extension'
    ];
  }
}
