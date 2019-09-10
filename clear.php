<?php

// function clearTerminal () {
//     // if (strncasecmp(PHP_OS, 'win', 3) === 0) {
//       popen('cls', 'w');
//     // } else {
//     //   exec('clear');
//     // }
//   }

//   echo "Hello world\n";
//   clearTerminal();
//   echo 'asdsadas';

class First {
  public function lol()
  {
    echo "parent class";
  }
}

class Second extends First{
  public function lol()
  {
    parent::lol();
    echo "child class";
  }
}

$obj = new Second();
$obj->lol();