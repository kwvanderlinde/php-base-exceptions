<?php
namespace Base\Exceptions;

/**
 * Represents a fault.
 *
 * A fault is an *unexpected* condition which may arise for a variety of
 * reasons. These can be programming errors or other unexpected conditions such
 * as a lost database connection.
 *
 * @see \Base\Exceptions\LogicError       A `Fault` specialized for programming
 *                                        errors.
 * @see \Base\Exceptions\UnexpectedError  A `Fault` specialized for unexpected
 *                                        conditions.
 */
abstract class Fault extends Exception {
}
?>
