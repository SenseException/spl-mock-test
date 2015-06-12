# spl-mock-test

Test which SPL classes cannot be mocked in PHPUnit tests.

See on Travis.ci which SPL mock creations fail:

[![Build Status](https://travis-ci.org/SenseException/spl-mock-test.svg?branch=master)](https://travis-ci.org/SenseException/spl-mock-test)

## SplFileInfo

Creating a mock of SplFileInfo disabling the constructor results in an error and
therefore failing tests. 

* `testSplError()` is the failing test
* `testSplWorks()` is the workaround to make the test pass

* 5.3 - pass
* 5.4 - PHPUnit_Framework_MockObject_RuntimeException: unserialize()
* 5.5 - PHPUnit_Framework_MockObject_RuntimeException: unserialize()
* 5.6 - pass
* 7.0 - pass
* hhvm - pass