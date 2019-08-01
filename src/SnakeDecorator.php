<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern;

final class SnakeDecorator extends DecoratorText {

	public function renderText() : string
	{
		return preg_replace(
			'/\s+/',
			'_',
			$this->text->renderText()
		);
	}

}