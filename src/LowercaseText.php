<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern;

final class LowercaseText extends Text {

	private $text;

	public function __construct( string $text )
	{
		$this->text = $text;
	}

	public function getText() : string
	{
		return \strtolower( $this->text );
	}

}