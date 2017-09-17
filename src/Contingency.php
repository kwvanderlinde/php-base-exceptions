<?php
namespace Base\Exceptions;


/**
 * Represents a contingency.
 *
 * A contingency represents an *expected* condition, albeit not the "normal"
 * condition. In other words, if an API is documented to throw a `Contingency`,
 * the user of the API is required to either handle the contingency or should
 * otherwise be documented as also throwing the contingency. An example use case
 * for contingencies is to provide alternate return paths, though they are
 * certainly not restricted to such usage.
 *
 * @since 2.0.0
 */
interface Contingency extends \Throwable
{
}
?>
