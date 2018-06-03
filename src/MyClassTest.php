<?php declare(strict_types=1);

require_once __DIR__ . '/MyClass.php';

use PHPUnit\Framework\TestCase;

final class MyClassTest extends TestCase {

	public function testIsWorking() {
		$myClass = new \MyClass();
		self::assertTrue($myClass->isWorking());
	}
}
