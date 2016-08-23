<?php
namespace Base\Exceptions;

/**
 * Represents a programming error.
 *
 * A logic error is distinguished from other faults in that they ought not to
 * happen. The existence of a logic error should be considered a bug.
 *
 * The logic error may not exist in the same component which threw the
 * exception. This happens, for instance, if one component passes invalid
 * arguments to another component. In this case, the latter component will throw
 * the exception, while the first component is the one with the error in logic.
 * The information attached to a fault should be enough for a human to figure
 * out which component has the error.
 *
 * @since 1.0.0
 */
class LogicError extends Fault {
}
?>
