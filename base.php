<?php

// Methyl
// github.com/MethylGH

// Base 2, Base 10 & Base 16 command line operations and conversions

  passthru("clear");

  echo "What do you want to do ?\n\n";
  echo "[\e[91m1\e[m] \e[91mSimple conversion\e[m\n";
  echo "[\e[91m2\e[m] \e[91mOperations\e[m\n\n";
  echo "Choose option \e[91m1\e[m or \e[91m2\e[m : ";

  $handle = fopen ("php://stdin","r");
  $line = fgets($handle);

  passthru("clear");

  if(trim($line) == 1){
    echo "What type of conversion ?\n\n";
    echo "[|===========================|]\n";
    echo "[| \e[91mDecimal\e[m to :              |]\n";
    echo "[|  [\e[91m1\e[m] => \e[91mBinary\e[m            |]\n";
    echo "[|  [\e[91m2\e[m] => \e[91mHex\e[m               |]\n";
    echo "[|===========================|]\n";
    echo "[| \e[91mBinary\e[m to :               |]\n";
    echo "[|  [\e[91m3\e[m] => \e[91mDecimal\e[m           |]\n";
    echo "[|  [\e[91m4\e[m] => \e[91mHex\e[m               |]\n";
    echo "[|===========================|]\n";
    echo "[| \e[91mHex\e[m to :                  |]\n";
    echo "[|  [\e[91m5\e[m] => \e[91mDecimal\e[m           |]\n";
    echo "[|  [\e[91m6\e[m] => \e[91mBinary\e[m            |]\n";
    echo "[|===========================|]\n\n";

    echo "Choose option between \e[91m1\e[m and \e[91m6\e[m : ";

    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);

    if(trim($line) == 1){

      echo "Choose a decimal, you want to convert : ";

      $handle = fopen ("php://stdin","r");
      $dec = fgets($handle);
      $binary = decbin($dec);

      echo "\e[91m$dec\e[m" . " = " . "\e[91m" . $binary . "\e[m\n\n";
      exit;

    } elseif(trim($line) == 2){

      echo "Choose a decimal, you want to convert : ";

      $handle = fopen ("php://stdin","r");
      $dec = fgets($handle);
      $hex = hex2bin($dec);

      echo "\e[91m$dec\e[m" . " = " . "\e[91m" . $hex . "\e[m\n\n";
      exit;

    } elseif(trim($line) == 3){
      
      echo "Choose a binary, you want to convert : ";

      $handle = fopen ("php://stdin","r");
      $bin = fgets($handle);
      $dec = bindec($bin);

      echo "\e[91m$bin\e[m" . " = " . "\e[91m" . $dec . "\e[m\n\n";
      exit;

    } elseif(trim($line) == 4){    

      echo "Choose a binary, you want to convert : ";

      $handle = fopen ("php://stdin","r");
      $bin = fgets($handle);
      $hex = bin2hex($bin);

      echo "\e[91m$bin\e[m" . " = " . "\e[91m" . $hex . "\e[m\n\n";
      exit;

    } elseif(trim($line) == 5){
            
      echo "Choose a hex, you want to convert : ";

      $handle = fopen ("php://stdin","r");
      $hex = fgets($handle);
      $dec = bindec($bin);

      echo "\e[91m$hex\e[m" . " = " . "\e[91m" . $dec . "\e[m\n\n";
      exit;

    } elseif(trim($line) == 6){
      
      echo "Choose a hex, you want to convert : ";

      $handle = fopen ("php://stdin","r");
      $hex = fgets($handle);
      $bin = hex2bin($bin);

      echo "\e[91m$hex\e[m = \e[91m$bin\e[m\n\n";
      exit;

    }
  }

  if(trim($line) == 2){
    echo "What type of operation ?\n\n";
    echo "[|===========================|]\n";
    echo "[| \e[91mDecimal\e[m to :              |]\n";
    echo "[|  [\e[91m1\e[m] => \e[91mAddition\e[m          |]\n";
    echo "[|  [\e[91m2\e[m] => \e[91mSoustraction\e[m      |]\n";
    echo "[|  [\e[91m3\e[m] => \e[91mMultiplication\e[m    |]\n";
    echo "[|  [\e[91m4\e[m] => \e[91mDivision\e[m          |]\n";
    echo "[|===========================|]\n";
    echo "[| \e[91mBinary\e[m to :               |]\n";
    echo "[|  [\e[91m5\e[m] => \e[91mAddition\e[m          |]\n";
    echo "[|  [\e[91m6\e[m] => \e[91mSoustraction\e[m      |]\n";
    echo "[|  [\e[91m7\e[m] => \e[91mMultiplication\e[m    |]\n";
    echo "[|  [\e[91m8\e[m] => \e[91mDivision\e[m          |]\n";
    echo "[|===========================|]\n";
    echo "[| \e[91mHex\e[m to :                  |]\n";
    echo "[|  [\e[91m9\e[m] => \e[91mAddition\e[m          |]\n";
    echo "[|  [\e[91m10\e[m] => \e[91mSoustraction\e[m     |]\n";
    echo "[|  [\e[91m11\e[m] => \e[91mMultiplication\e[m   |]\n";
    echo "[|  [\e[91m12\e[m] => \e[91mDivision\e[m         |]\n";
    echo "[|===========================|]\n\n";

    echo "Choose option between \e[91m1\e[m and \e[91m12\e[m : ";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);

    if(trim($line) == 1){

      echo "Write your \e[91maddition\e[m (exemple : \e[91m1+1\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('+', $line); 
      $result = intval($args[0]) + intval($args[1]);

      echo "\e[91m$line\e[m = \e[91m$result\e[m\n\n";

      exit;
    }
    if(trim($line) == 2){

      echo "Write your \e[91msoustraction\e[m (exemple : \e[91m1-1\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('-', $line); 
      $result = intval($args[0]) - intval($args[1]);

      echo "\e[91m$line\e[m = \e[91m$result\e[m\n\n";

      exit;
    }
    if(trim($line) == 3){

      echo "Write your \e[91mmultiplication\e[m (exemple : \e[91m1*1\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('*', $line); 
      $result = intval($args[0]) * intval($args[1]);

      echo "\e[91m$line\e[m = \e[91m$result\e[m\n\n";

      exit;
    }
    if(trim($line) == 4){

      echo "Write your \e[91mdivision\e[m (exemple : \e[91m1/1\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('/', $line); 
      $result = intval($args[0]) / intval($args[1]);

      echo "\e[91m$line\e[m = \e[91m$result\e[m\n\n";

      exit;

    }
    if(trim($line) == 5){

      echo "Write your \e[91maddition\e[m (exemple : \e[91m011001+0110001\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('+', $line); 

      $a = bindec($args[0]);
      $b = bindec($args[1]);
      
      $result = $a + $b;

      echo "\e[91m$line\e[m = \e[91m " . decbin($result) . "\e[m\n\n";

      exit;
    }
    if(trim($line) == 6){

      echo "Write your \e[91msoustraction\e[m (exemple : \e[91m011001-0110001\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('-', $line); 

      $a = bindec($args[0]);
      $b = bindec($args[1]);
      
      $result = $a - $b;

      echo "\e[91m$line\e[m = \e[91m " . decbin($result) . "\e[m\n\n";

      exit;
    }
    if(trim($line) == 7){

      echo "Write your \e[91mmultiplication\e[m (exemple : \e[91m011001*0110001\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('*', $line); 

      $a = bindec($args[0]);
      $b = bindec($args[1]);
      
      $result = $a * $b;

      echo "\e[91m$line\e[m = \e[91m " . decbin($result) . "\e[m\n\n";

      exit;
    }
    if(trim($line) == 8){

      echo "Write your \e[91mdivision\e[m (exemple : \e[91m011001/0110001\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('/', $line); 

      $a = bindec($args[0]);
      $b = bindec($args[1]);
      
      $result = $a / $b;

      echo "\e[91m$line\e[m = \e[91m " . decbin($result) . "\e[m\n\n";

      exit;
    }
    if(trim($line) == 9){

      echo "Write your \e[91maddition\e[m (exemple : \e[91mAE6+72B\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('+', $line); 

      $a = hexdec($args[0]);
      $b = hexdec($args[1]);
      
      $result = $a + $b;

      echo "\e[91m$line\e[m = \e[91m " . dechex($result) . "\e[m\n\n";

      exit;
    }
    if(trim($line) == 10){

      echo "Write your \e[91msoustraction\e[m (exemple : \e[91mAE6-72B\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('-', $line); 

      $a = hexdec($args[0]);
      $b = hexdec($args[1]);
      
      $result = $a - $b;

      echo "\e[91m$line\e[m = \e[91m " . dechex($result) . "\e[m\n\n";

      exit;
    }
    if(trim($line) == 11){

      echo "Write your \e[91mmultiplication\e[m (exemple : \e[91mAE6*72B\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('*', $line); 

      $a = hexdec($args[0]);
      $b = hexdec($args[1]);
      
      $result = $a * $b;

      echo "\e[91m$line\e[m = \e[91m " . dechex($result) . "\e[m\n\n";

      exit;
    }
    if(trim($line) == 12){
      echo "Write your \e[91mdivision\e[m (exemple : \e[91mAE6/72B\e[m) : ";

      $handle = fopen ("php://stdin","r");
      $line = fgets($handle);

      $args = explode('/', $line); 

      $a = hexdec($args[0]);
      $b = hexdec($args[1]);
      
      $result = $a / $b;

      echo "\e[91m$line\e[m = \e[91m " . dechex($result) . "\e[m\n\n";

      exit;
    }
  }

  fclose($handle);

?>