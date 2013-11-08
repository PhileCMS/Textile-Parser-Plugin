<?php
namespace Phile\Parser;

use \Netcarver\Textile\Parser as TextileParser;

class Textile implements ParserInterface {
	private $config;

	public function __construct($config = null)
	{
		if (!is_null($config)) {
			$this->config = $config;
		}
	}
	// overload parse with the Textile parser
	public function parse($data) {
		$parser = new TextileParser();
		return $parser->textileThis($data);
	}
}
