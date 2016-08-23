<?php
namespace Base\Exceptions;

/**
 * The root of the contingency and fault hierarchy.
 *
 * This isn't really the root, because it necessarily extends `\Exception`.
 * However, it is provided because we would like some independence from the
 * standard exception root. For instance, we provide a constructor which does
 * not accept exception codes.
 */
abstract class Exception extends \Exception {
	/**
	 * Initializes an `Exception`.
	 *
	 * @param string $message
	 * A human-readable message to accompany the exception.
	 *
	 * @param \Exception|null $previous
	 * A previous exception which caused this exception.
	 */
	public function __construct($message = '', \Exception $previous = null) {
		parent::__construct($message, 0, $previous);
	}
}
?>