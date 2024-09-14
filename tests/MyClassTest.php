<?php

use Henryust12\MyPhpPackage\MyClass;

it('says hello', function () {
    $myClass = new MyClass();
    expect($myClass->sayHello())->toBe('Hello from My Composer Package!');
});