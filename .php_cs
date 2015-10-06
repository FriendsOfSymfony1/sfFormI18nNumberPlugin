<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
  ->in(__DIR__ . DIRECTORY_SEPARATOR . 'lib')
  ->in(__DIR__ . DIRECTORY_SEPARATOR . 'test')
;

return Symfony\CS\Config\Config::create()
  ->setUsingCache(true)
  ->fixers(array('align_double_arrow'))
  ->finder($finder)
  ;
