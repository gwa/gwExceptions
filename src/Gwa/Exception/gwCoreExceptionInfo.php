<?php
namespace Gwa\Exception;

/**
 * @brief The core exception info class to be extended by all other exception info classes.
 * The basic info is simply a string.
 * @ingroup exceptions
 */
class gwCoreExceptionInfo implements gwiExceptionInfo
{
    /**
     * @var gwCoreException
     */
    protected $_exception;

    /**
     * @var string
     */
    protected $_info;

    /**
     * Constructor.
     * @param gwCoreException $info
     * @param string $info
     */
    public function __construct( $info=null )
    {
        $this->_info = $info === null ? '' : $info;
    }

    /**
     * Exception setter.
     * @param gwCoreException $exception
     */
    final public function setException( gwCoreException $exception )
    {
        $this->_exception = $exception;
    }

    /**
     * Returns a string representation of this object.
     * @return string
     */
    public function __toString()
    {
        return $this->fetch();
    }

    /**
     * Returns a plain text representation of the info contained in this object.
     * @return string
     */
    public function fetch()
    {
        return $this->_info;
    }

    /**
     * Returns a HTML representation of the info contained in this object.
     * @return string
     */
    public function fetchHTML()
    {
        return $this->fetch();
    }

    /**
     * Returns a string representation of a value.
     * Used by subclasses.
     * @link http://www.php.net/manual/en/function.get-resource-type.php
     * @param mixed $value
     * @return  string
     */
    public function getAsString( $value )
    {
        if (is_string($value)) return $value;
        if (is_bool($value)) return $value ? 'TRUE' : 'FALSE';
        if (is_null($value)) return 'NULL';
        if (is_resource($value)) return get_resource_type($value);
        if (is_object($value)) return '{'.get_class($value).'}';
        return (string) $value;
    }
}
