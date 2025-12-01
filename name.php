<?php

namespace MyApp;

require_once __DIR__ . "/Utilities.php";
require_once __DIR__ . "/StringHelper.php";

use Utilities\Logger;
use Utilities\Logger as Log;
use function Utilities\Functions\formatDate as fd;
use function Utilities\functions\formatDate;
use const Utilities\DEFAULT_VALUE;
use Utilities\{MathHelper, StringHelper};

$logger = new Logger();
$log = new Log();
$result = fd();
$date = formatDate();
$math = new MathHelper();
$strHelper = new StringHelper();
$constant = DEFAULT_VALUE;

echo "結果： $result\n";
echo "定数： $constant\n";
