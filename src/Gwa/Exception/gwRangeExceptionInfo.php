<?php

namespace Gwa\Exception;

/**
 * @brief An exception info container for out of range exceptions.
 * @ingroup exceptions
 */
class gwRangeExceptionInfo extends gwCoreExceptionInfo implements gwiExceptionInfo
{
    /**
     * @var int
     */
    protected $_value;

    /**
     * @var int
     */
    protected $_maximum;

    /**
     * @var int
     */
    protected $_minimum;

    /**
     * @var string
     */
    protected $_note;

    /**
     * Constructor.
     *
     * @param int    $value   the actual value that caused the exception
     * @param int    $minimum the minimum legal value
     * @param int    $maximum the maximum legal value
     * @param string $note    an optional note
     */
    public function __construct($value, $minimum, $maximum, $note = '')
    {
        $this->_value = $value;
        $this->_minimum = $minimum;
        $this->_maximum = $maximum;
        $this->_note = $note;
    }

    /**
     * @return string
     */
    public function fetch()
    {
        $output = sprintf(
            '%s MUST BE within the range of [%s to %s]',
            $this->_value,
            $this->_minimum,
            $this->_maximum
        );
        if ($this->_note) {
            $output .= ' ('.$this->_note.')';
        }

        return $output;
    }

    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->_maximum;
    }

    /**
     * @return int
     */
    public function getMinimum()
    {
        return $this->_minimum;
    }
}
