<?php

namespace Gwa\Exception;

/**
 * An exception info container for out of range exceptions.
 */
class gwRangeExceptionInfo extends gwCoreExceptionInfo implements gwiExceptionInfo
{
    /**
     * @var int
     */
    protected $value;

    /**
     * @var int
     */
    protected $maximum;

    /**
     * @var int
     */
    protected $minimum;

    /**
     * @var string
     */
    protected $note;

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
        $this->value = $value;
        $this->minimum = $minimum;
        $this->maximum = $maximum;
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function fetch()
    {
        $output = sprintf(
            '%s MUST BE within the range of [%s to %s]',
            $this->value,
            $this->minimum,
            $this->maximum
        );
        if ($this->note) {
            $output .= ' ('.$this->note.')';
        }

        return $output;
    }

    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }
}
