--TEST--
Fatal error backtrace
--INI--
fatal_error_backtraces=On
--FILE--
<?php

eval("class Foo {}; class Foo {}");
?>
--EXPECTF--
Fatal error: Cannot declare class Foo, because the name is already in use in %s : eval()'d code on line 1
Stack trace:
#0 %sfatal_error_backtraces_001.php(%d): eval()
#1 {main}
