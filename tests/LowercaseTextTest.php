<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern\Tests;

use PHPUnit\Framework\TestCase;
use JacoBaldrich\DecoratorPattern\Text;
use JacoBaldrich\DecoratorPattern\LowercaseText;
use JacoBaldrich\DecoratorPattern\SnakeDecorator;
use JacoBaldrich\DecoratorPattern\NoSpaceDecorator;

final class LowercaseTextTest extends TestCase
{

	public function testIsDecoratedAsSnake() : void
	{
		$text = $this->givenALowercaseText();

		$decorator = $this->whenAddDecorator(
			SnakeDecorator::class,
			$text
		);

		$this->thenResultIs(
			'ola_ke_ase',
			$decorator
		);
	}

	public function testIsDecoratedAsNoSpace() : void
	{
		$text = $this->givenALowercaseText();

		$decorator = $this->whenAddDecorator(
			NoSpaceDecorator::class,
			$text
		);

		$this->thenResultIs(
			'olakease',
			$decorator
		);
	}

	private function givenALowercaseText() : LowercaseText
	{
		return new LowercaseText('OLA KE ASE');
	}

	private function whenAddDecorator( string $decorator, LowercaseText $text ) : Text
	{
		return new $decorator( $text );
	}

	private function thenResultIs( string $expected, Text $decorator ) : void
	{
		$this->assertEquals(
			$expected,
			$decorator->getText()
		);
	}
}
