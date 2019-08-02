<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern;

abstract class DecoratorText extends Text {

	protected $text;

	public function __construct( Text $text )
	{
		$this->text = $text;
	}

	public abstract function getText() : string;

}