# PHP random string generator

[![Stability: Experimental](https://masterminds.github.io/stability/experimental.svg)](https://masterminds.github.io/stability/experimental.html)
[![MIT Licence](https://badges.frapsoft.com/os/mit/mit.svg?v=103)](https://opensource.org/licenses/mit-license.php)

## Basic usage

First, create new instance of Generator

    use Matanus\Temere\Generator;
    $g = new Generator;

This will use randomly selected method to generate a string.

    $g->generate(); // returns a string

Other option is to use a specific method.

    $g->useBrute(); // returns a string

At this initial stage, `useBrute()` is the only available method.

## Check default parameters

    $g->getLength(); // default is 20
    $g->getMinLength(); // 2
    $g->getMaxLength(); // 1024
    $g->getMethod(); // default is "brute"

## Modify defaults

    $g->setLength(50);
Now if we check current length, it was changed:

    $g->getLength(); // now returns 50
At this moment only length can be modified.
Maybe in future versions default values (including min/max length) can be modified using some kind of config file.

If you want to modify length, do it before generating a string.

## List of available generation methods

    $g->getAvailableMethods(); // array

To use any of these method, prepend with "use" and convert to (lower) camelCase. For instance, `brute` can be called as `$g->useBrute();`. In fact, at this moment only this one is available.

## List of all chars used by `brute()` method

    $g->getAllChars(); // string

In future versions I plan to allow to select types/groups of chars to be used.

## Roadmap/plans

1. Add other generation methods.
2. Make it possible to change the type of characters used (lowercase, uppercase, digits, special chars).
3. Document the code.
