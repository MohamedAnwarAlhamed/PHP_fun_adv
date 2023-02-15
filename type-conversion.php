<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
  */

  echo 1 + "2"; // 3
  echo '<br>';
  echo gettype(1 + "2"); // Integer
  echo '<br>';
  echo True; // 1
  echo '<br>';
  echo gettype(True); // Boolean
  echo '<br>';
  echo True + True; // 2
  echo '<br>';
  echo gettype(True + True); // Integer
  echo '<br>';
  echo 5 + '5 Lessons'; // 10 => Warning
  echo '<br>';
  echo gettype(5 + '5 Lessons'); // Integer => Warning
  echo '<br>';
  echo 10 + 15.5; // 25.5
  echo '<br>';
  echo gettype(10 + 15.5); // double => Float
  echo '<br>';

  <?php

  /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  */

  var_dump((bool) "");
  echo '<br>';
  var_dump((bool) array());
  echo '<br>';
  var_dump((bool) []);
  echo '<br>';
  var_dump((bool) 0);
  echo '<br>';
  var_dump((bool) "0");
  echo '<br>';
  var_dump((bool) "Elzero");
  echo '<br>';
  var_dump((bool) array(1));
  echo '<br>';
  var_dump((bool) [1]);
  echo '<br>';
  var_dump((bool) 100);
  echo '<br>';
  var_dump((bool) -100);
  echo '<br>';
  var_dump((bool) 10.5);
  echo '<br>';
  var_dump((bool) -10.5);