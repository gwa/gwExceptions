<?php

namespace Gwa\Exception;

/**
 * @brief The core exception class, to be extended by all other Exceptions.
 * @ingroup exceptions
 */
class gwCoreException extends \Exception
{
    /**
     * A logic error.
     *
     * @var string
     */
    const ERR_LOGIC_ERROR = 'gwCoreException::logic_error';

    /**
     * Method does not exist on object
     * info = name of method called.
     *
     * @var string
     */
    const ERR_BAD_METHOD_CALL = 'gwCoreException::bad_method_call';

    /**
     * Argument passed to a method is invalid, and is not one of the following:
     * - invalid type
     * - out of bounds
     * - out of range.
     *
     * @var string
     */
    const ERR_INVALID_ARGUMENT = 'gwCoreException::invalid_argument';

    /**
     * Required argument is missing. Possibly within an array passed as an
     * argument.
     *
     * @var string
     */
    const ERR_MISSING_ARGUMENT = 'gwCoreException::missing_argument';

    /**
     * Argument passed to a method has the wrong type.
     *
     * @var string
     */
    const ERR_INVALID_TYPE = 'gwCoreException::invalid_type';

    /**
     * Argument passed is out of the allowed numeric range.
     *
     * @var string
     */
    const ERR_OUT_OF_RANGE = 'gwCoreException::out_of_range';

    /**
     * Argument passed is out of the allowed set of possible options
     * Could be used
     * - when an array key does not exist
     * - when an property does not exist on an object
     * - when a value is not within a specific range.
     *
     * @var string
     */
    const ERR_OUT_OF_BOUNDS = 'gwCoreException::out_of_bounds';

    /**
     * Thrown when trying to create an entry with a key that should be unique.
     * E.g. insert into database, create element in array.
     *
     * @var string
     */
    const ERR_KEY_EXISTS = 'gwCoreException::key_exists';

    /**
     * Thrown when trying to retrieve an entry with a key and no entry exists.
     * E.g. read from database, read from array.
     *
     * @var string
     */
    const ERR_KEY_NOT_EXIST = 'gwCoreException::key_not_exist';

    /**
     * Thrown by a method when caller does not have sufficient privileges.
     * E.g. database entry exists, but is blocked, inactive, unconfirmed, etc.
     *
     * @var string
     */
    const ERR_ACCESS_DENIED = 'gwCoreException::access_denied';

    /**
     * Value returned by method or function was unexpected.
     *
     * @var string
     */
    const ERR_UNEXPECTED_VALUE = 'gwCoreException::unexpected_value';

    /**
     * Container is full and someone is trying to add something to it.
     *
     * @var string
     */
    const ERR_OVERFLOW = 'gwCoreException::overflow';

    /**
     * Container is empty and someone is trying to remove something from it.
     *
     * @var string
     */
    const ERR_UNDERFLOW = 'gwCoreException::underflow';

    /**
     * @var gwCoreExceptionInfo
     */
    protected $info;

    /**
     * Constructor.
     *
     * @param string              $message
     * @param gwCoreExceptionInfo $info
     * @param int                 $code
     * @param Exception           $previous
     */
    public function __construct($message, $info = null, $code = 0)
    {
        if (!is_a($info, 'gwCoreExceptionInfo')) {
            $info = new gwCoreExceptionInfo($info);
        }
        $info->setException($this);
        $this->info = $info;
        parent::__construct($message, $code);
    }

    /**
     * @return string representation of this Exception
     */
    public function __toString()
    {
        return __CLASS__." [$this->code]: $this->message | ".$this->info->fetch();
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function __set($key, $value)
    {
        switch ($key) {
            case 'info' :
                $this->info = $value;
                break;
        }
    }

    /**
     * @param string $key
     *
     * @return gwCoreExceptionInfo
     */
    public function __get($key)
    {
        switch ($key) {
            case 'info' :
                return $this->info;
        }
    }

    /**
     * @return gwCoreExceptionInfo
     */
    public function getInfo()
    {
        return $this->info;
    }
}
