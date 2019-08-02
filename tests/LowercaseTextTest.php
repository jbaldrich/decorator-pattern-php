<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern\Tests;

use PHPUnit\Framework\TestCase;
use JacoBaldrich\DecoratorPattern\LowercaseText;
use JacoBaldrich\DecoratorPattern\SnakeDecorator;
use JacoBaldrich\DecoratorPattern\NoSpaceDecorator;

final class LowercaseTextTest extends TestCase
{

	public function testIsDecoratedAsSnake()
	{
		// Given:
		$string = 'OLA KE ASE';

		// When:
		$text = new LowercaseText( $string );
		$snake = new SnakeDecorator( $text );

		// Then:
		$this->assertEquals(
			'ola_ke_ase',
			$snake->getText()
		);
	}

	public function testIsDecoratedAsNoSpace()
	{
		// Given:
		$string = 'OLA KE ASE';

		// When:
		$text = new LowercaseText( $string );
		$snake = new NoSpaceDecorator( $text );

		// Then:
		$this->assertEquals(
			'olakease',
			$snake->getText()
		);
	}
}
