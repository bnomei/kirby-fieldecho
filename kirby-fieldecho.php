<?php

$kirby->set('tag', 'fieldecho', array(
  'attr' => array('output'),
  'html' => function($tag) {
    $option = $tag->attr('fieldecho');
    if($tag->attr('output') == 'kirbytext') {
    	return $tag->page()->{$option}()->kirbytext();
    } else {
    	return $tag->page()->{$option}()->value();
    }
  }
));
