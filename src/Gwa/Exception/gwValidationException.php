<?php

namespace Gwa\Exception;

/**
 * A validation exception.
 */
class gwValidationException extends gwCoreException
{
    /**
     * @var array
     */
    private $errors = [];

    const REQUIRED = 'gwValidationException::required';
    const INVALID  = 'gwValidationException::invalid';
    const METHOD_DOES_NOT_EXIST = 'gwValidationException::method_does_not_exist';

    public function __construct($message = 'gwValidationException::invalid', $info = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $info, $code, $previous);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        $ret = [];
        foreach ($this->errors as $v) {
            $ret[] = $v->message;
        }

        return $ret;
    }

    /**
     * @return array
     */
    public function getMessagesForFieldname($fieldname)
    {
        $ret = [];
        foreach ($this->errors as $v) {
            if ($v->field === $fieldname) {
                $ret[] = $v->message;
            }
        }

        return $ret;
    }

    /**
     * Add an error to this exception.
     *
     * @param string $fieldname
     * @param string $message
     */
    public function appendError($fieldname, $message)
    {
        $obj = new \stdClass();
        $obj->field = $fieldname;
        $obj->message = $message;
        $this->errors[] = $obj;
    }

    /**
     * @return boolean
     */
    public function hasErrors()
    {
        return count($this->errors) > 0;
    }
}
