<?php

function clearTerminal () {
    // if (strncasecmp(PHP_OS, 'win', 3) === 0) {
      popen('cls', 'w');
    // } else {
    //   exec('clear');
    // }
  }

  echo "Hello world\n";
  clearTerminal();
  echo 'asdsadas';