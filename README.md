# spl-mock-test

Test which SPL classes cannot be mocked in PHPUnit tests.

See on Travis.ci which SPL mock creations fail:

[![Build Status](https://travis-ci.org/SenseException/spl-mock-test.svg?branch=master)](https://travis-ci.org/SenseException/spl-mock-test)


## Spl Filesystem classes

Creating a mock of SplFileInfo, SplFileObject, DirectoryIterator and FilesystemIterator
disabling the constructor results in an error and therefore failing tests. 

* `testSplError()` is the failing test
* `testSplWorks()` is the workaround to make the test pass

### PHP versions

| 5.3 | 5.4 | 5.5 | 5.6 | 7.0 | hhvm |
| --- | --- | --- | --- | --- | ---- |
| pass | fail | fail | pass | pass | pass |

PHP 5.4 and 5.5 are failing with:
PHPUnit_Framework_MockObject_RuntimeException: unserialize(): Error at offset 36 of 37 bytes
