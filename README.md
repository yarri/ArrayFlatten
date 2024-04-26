ArrayFlatten
============

[![Build Status](https://app.travis-ci.com/yarri/ArrayFlatten.svg?token=Kc7UxgK5oqFG8sZAhCzg&branch=master)](https://app.travis-ci.com/yarri/ArrayFlatten)

Convert a multi-dimensional array into a single-dimensional array

Function signature
------------------

    array_flatten(array $array, array $options = []): array

#### Parameters

**array**

The multi-dimensional array.

**options**

The default options are:

    Array(
      "preserve_keys" => false
    )

#### Return value

The function array_flatten returns single-dimensional array or false if no array is given as the parameter $array.

Usage
-----
    $ar = ["a", ["b", "c"], [["d",["e","f"]]]];
    array_flatten($ar); // ["a","b","c","d","e","f"]

    $ar = ["x" => "a", "y" => ["z" => "b", "c"]];
    array_flatten($ar); // ["a", "b", "c"]
    array_flatten($ar,["preserve_keys" => false]); // ["a", "b", "c"]
    array_flatten($ar,["preserve_keys" => true]); // ["x" => "a", "z" => "b", 0 => "c"]

    // !! duplicit key "x"
    $ar = ["x" => "a", "y" => ["z" => "b", "x" => "c"]];
    array_flatten($ar); // ["a", "b", "c"]
    array_flatten($ar,["preserve_keys" => true]); // ["x" => "c", "z" => "b"]

Installation
------------

Just use the Composer:

    composer require yarri/array-flatten

License
-------

ArrayFlatten is free software distributed [under the terms of the MIT license](http://www.opensource.org/licenses/mit-license)

[//]: # ( vim: set ts=2 et: )
