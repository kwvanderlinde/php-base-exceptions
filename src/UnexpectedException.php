<?php
namespace Base\Exceptions;

/**
 * Represents a unpreventable error condition.
 *
 * Certain conditions are simply not preventable. For instance, there is not
 * usually anything a program can do to predict or prevent a network failure.
 * These conditions are not generally suitable as contingencies, since they do
 * not represent expected conditions. They are also not usually intended to leak
 * through an API boundary.
 *
 * @since 2.0.0
 */
class UnexpectedException extends BaseException implements Fault
{
}
?>
