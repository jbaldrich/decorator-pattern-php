<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern;

final class NoSpaceDecorator extends DecoratorText {

	public function renderText() : string
	{
		return preg_replace(
			'/\s+/',
			'',
			$this->text->renderText()
		);
	}

}