<?php
namespace	Base\Exceptions;


/**
 * A convenience base class for defining exceptions without error codes.
 *
 * @since 2.0.0
 */
class BaseException extends \Exception
{
	/**
	 * Initialize the exception.
	 *
	 * Exceptions extending this class will always be assigned an error code of 0.
	 *
	 * @param string $message
	 *   The exception message.
	 *
	 * @param \Throwable|null $previous
	 *   The previous throwable for chaining.
	 */
	public function __construct(string $message, \Throwable $previous = null)
	{
		parent::__construct($message, 0, $previous);
	}
}
