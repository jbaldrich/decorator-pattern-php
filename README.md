## Decorator Pattern example in PHP

This is a simple example when we have a base abstract class called `Text` and some implementations like `UppercaseText` and `LowercaseText`.

Then we have a `DecoratorText` abstract class which IS a `Text` but also HAS a `Text` and has some implementations like `SnakeDecorator` and `NoSpaceDecorator` that change the behaviour of any implementation of the `Text` abstract class.

## Diagram

![Decorator Pattern Diagram](https://raw.githubusercontent.com/jbaldrich/decorator-pattern-php/master/uml-diagram.png)


## Installation

1. Clone the repository:

````
git clone https://github.com/jbaldrich/decorator-pattern-php.git
````

2. Install the dependencies

````
composer install
````

3. Run the tests

````
composer test
````

