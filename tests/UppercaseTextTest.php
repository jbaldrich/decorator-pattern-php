<?php declare( strict_types=1 );

namespace JacoBaldrich\DecoratorPattern\Tests;

use PHPUnit\Framework\TestCase;
use JacoBaldrich\DecoratorPattern\Text;
use JacoBaldrich\DecoratorPattern\UppercaseText;
use JacoBaldrich\DecoratorPattern\SnakeDecorator;
use JacoBaldrich\DecoratorPattern\NoSpaceDecorator;

final class UppercaseTextTest extends TestCase
{

	public function testIsDecoratedAsSnake() : void
	{
		$text = $this->givenAnUppercaseText();

		$decorator = $this->whenAddDecorator(
			SnakeDecorator::class,
			$text
		);

		$this->thenResultIs(
			'OLA_KE_ASE',
			$decorator
		);
	}

	public function testIsDecoratedAsNoSpace() : void
	{
		$text = $this->givenAnUppercaseText();

		$decorator = $this->whenAddDecorator(
			NoSpaceDecorator::class,
			$text
		);

		$this->thenResultIs(
			'OLAKEASE',
			$decorator
		);
	}

	private function givenAnUppercaseText() : UppercaseText
	{
		return new UppercaseText('ola ke ase');
	}

	private function whenAddDecorator( string $decorator, UppercaseText $text ) : Text
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
