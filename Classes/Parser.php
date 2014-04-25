<?php
/**
 * Parser class
 */
namespace Phile\Plugin\Phile\Textile;

use \Netcarver\Textile\Parser as TextileParser;
use Phile\ServiceLocator\ParserInterface;

class Parser implements ParserInterface {
	private $config;

	/**
	 * the constructor
	 * @param null $config
	 */
	public function __construct($config = null) {
		if (!is_null($config)) {
			$this->config = $config;
		}
	}

	/**
	 * overload parse with the Textile parser
	 *
	 * @param $data
	 *
	 * @return mixed
	 */
	public function parse($data) {
		$parser = new TextileParser();
		return $parser->textileThis($data);
	}
}
