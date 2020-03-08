<?php

require 'vendor/autoload.php';

// FILESYSTEM LOADER
$loader = new \Twig\Loader\FilesystemLoader('views');

$twig = new \Twig\Environment($loader);

$md5Filter = new \Twig\TwigFilter('md5', function($string) {
  return md5($string);
});

$twig->addFilter($md5Filter);

echo $twig->render('hello.html', array(
  'name' => 'Fabien',
  'age' => 52,

  'users' => array(
    array('name' => 'Max', 'age' => 18),
    array('name' => 'James', 'age' => 22),
    array('name' => 'Billy', 'age' => 34)
  )
));


// ARRAY LOADER
// $loader = new \Twig\Loader\ArrayLoader([
//   'arrayloader.html' => 'Hello {{ name }}!',
// ]);
// $twig = new \Twig\Environment($loader);

// echo $twig->render('arrayloader.html', ['name' => 'Fabien']);

