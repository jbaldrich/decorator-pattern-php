<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern\Tests;

use PHPUnit\Framework\TestCase;
use JacoBaldrich\DecoratorPattern\UppercaseText;
use JacoBaldrich\DecoratorPattern\SnakeDecorator;
use JacoBaldrich\DecoratorPattern\NoSpaceDecorator;

final class TestUppercaseText extends TestCase
{

	public function testIsDecoratedAsSnake()
	{
		// Given:
		$string = 'ola ke ase';

		// When:
		$text = new UppercaseText( $string );
		$snake = new SnakeDecorator( $text );

		// Then:
		$this->assertEquals(
			'OLA_KE_ASE',
			$snake->renderText()
		);
	}

	public function testIsDecoratedAsNoSpace()
	{
		// Given:
		$string = 'ola ke ase';

		// When:
		$text = new UppercaseText( $string );
		$snake = new NoSpaceDecorator( $text );

		// Then:
		$this->assertEquals(
			'OLAKEASE',
			$snake->renderText()
		);
	}
}
