--TEST--
Fatal error backtrace w/ zend.exception_ignore_args
--INI--
fatal_error_backtraces=On
zend.exception_ignore_args=On
--FILE--
<?php

function trigger_fatal($unused) {
    eval("class Foo {}; class Foo {}");
}

trigger_fatal("bar");
?>
--EXPECTF--
Fatal error: Cannot declare class Foo, because the name is already in use in %s : eval()'d code on line 1
Stack trace:
#0 %sfatal_error_backtraces_003.php(%d): eval()
#1 %sfatal_error_backtraces_003.php(%d): trigger_fatal()
#2 {main}
