<?php

namespace Hiraeth\Inflector;

use Hiraeth;
use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;

/**
 * {@inheritDoc}
 */
class InflectorDelegate implements Hiraeth\Delegate
{
	/**
	 * {@inheritDoc}
	 */
	static public function getClass(): string
	{
		return Inflector::class;
	}


	/**
	 * {@inheritDoc}
	 */
	public function __invoke(Hiraeth\Application $app): object
	{
		return InflectorFactory::createForLanguage(
			$app->getConfig('packages/inflector', 'language', 'english')
		)->build();
	}
}
