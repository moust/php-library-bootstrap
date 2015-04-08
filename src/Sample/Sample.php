<?php

namespace Sample;

class Sample
{
	protected $hello;

	public function __construct($hello)
	{
		$this->hello = $hello;
	}

	public function hello()
	{
		return $this->hello;
	}
}
