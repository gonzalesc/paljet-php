<?php
namespace Paljet\Error;

/**
 * Paljet Exceptions
 */

/**
 * Base Paljet Exception
 */
class PaljetException extends \Exception {
    protected $message = "Base Paljet Exception";
}
/**
 * Input validation error
 */
namespace Paljet\Error;

class InputValidationError extends PaljetException {
    protected $message = "Fields validation error";
}
/**
 * Authentication error
 */
namespace Paljet\Error;

class AuthenticationError extends PaljetException {
    protected $message = "Authentication error";
}
/**
 * Resource not found
 */
namespace Paljet\Error;

class NotFound extends PaljetException {
    protected $message = "Resource not found";
}
/**
 * Method not allowed
 */
namespace Paljet\Error;

class MethodNotAllowed extends PaljetException {
    protected $message = "Method not allowed";
}
/**
 * Unhandled error
 */
namespace Paljet\Error;

class UnhandledError extends PaljetException {
    protected $message = "Unhandled error";
}
/**
 * Invalid Options
 */
namespace Paljet\Error;

class InvalidOptions extends PaljetException {
    protected $message = "Invalid Options";
}
/**
 * Invalid Token
 */
namespace Paljet\Error;

class InvalidToken extends PaljetException {
    protected $message = "Invalid token";
}
/**
 * Unable to connect to Paljet API
 */
namespace Paljet\Error;

class UnableToConnect extends PaljetException {
    protected $message = "Can not connect to Paljet API";
}
