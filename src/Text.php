<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern;

abstract class Text {

	public abstract function renderText() : string;

}