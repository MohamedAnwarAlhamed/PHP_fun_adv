<?php

  /*
    Constants
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase
  */

  define("DB_NAME", "elzero");
  define("MAIN_NUMBER", 5);

  echo DB_NAME;
  echo MAIN_NUMBER * 50;

  <?php

  /*
    Pre-Defined Constants [Case Sensitive]
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone

    Search
    - PHP Predefined Constants
    - Compile Time vs Runtime
    - List of Reserved Words
  */

  define("BREAKS", "AA");

  echo php_uname();
  echo '<br>';
  echo PHP_VERSION;
  echo '<br>';
  echo __LINE__;
  echo '<br>';
  echo __FILE__;
  echo '<br>';
  echo __dir__;
  echo '<br>';
  echo BREAKS;

  // No Problem Here
  function hello() {
    return "Hello";
  }

  echo hello();

  // Syntax Error => Reserved Word
  function clone() {
    return "Clone";
  }

  echo clone();