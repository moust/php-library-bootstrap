<?php

namespace Sample\Test;

use Sample\Sample;

class SampleTest extends \PHPUnit_Framework_TestCase
{
	protected $sample;

	protected function setUp()
	{
		$this->sample = new Sample('hello world');
	}

	public function testHello()
	{
		$this->assertEquals('hello world', $this->sample->hello());
	}
}
