<?php
namespace Base\Exceptions;

/**
 * Represents a unpreventable error condition.
 *
 * Certain conditions are simply not preventable. For instance, there is not
 * usually anything a program can do to predict or prevent a network failure.
 * These conditions are not generally suitable as contingencies, since they do
 * not represent expected conditions, are not usually intended to leak through
 * a API boundary.
 *
 * Sometimes these conditions can be represented as contingencies within an API
 * boundary. For instance, one resource is unavailable, perhaps another could be
 * used instead. However, such conditions should likely not be passed through an
 * API boundary and should instead be converted to an `UnexpectedError` before
 * passing the exception outside the API boundary.
 *
 * @since 1.0.0
 */
class UnexpectedError extends Fault {
}
?>
