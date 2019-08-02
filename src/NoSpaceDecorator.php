<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern;

final class NoSpaceDecorator extends DecoratorText {

	public function getText() : string
	{
		return preg_replace(
			'/\s+/',
			'',
			$this->text->getText()
		);
	}

}