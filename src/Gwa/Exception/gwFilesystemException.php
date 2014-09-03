<?php
namespace Gwa\Exception;

/**
 * @brief Provides a generic exception for filesystem exceptions.
 * @ingroup exceptions
 * @ingroup filesystem
 */
class gwFilesystemException extends gwCoreException
{
    const ERR_DELETE = 'gwFilesystemException::could_not_delete';
    const ERR_FILE_NOT_EXIST = 'gwFilesystemException::file_not_exist';
    const ERR_FILE_NOT_READABLE = 'gwFilesystemException::file_not_readable';
    const ERR_FILE_NOT_WRITEABLE = 'gwFilesystemException::file_not_writeable';
    const ERR_DIRECTORY_NOT_EXIST = 'gwFilesystemException::directory_not_exist';
    const ERR_DIRECTORY_ALREADY_EXIST = 'gwFilesystemException::directory_already_exists';
    const ERR_DIRECTORY_NOT_READABLE = 'gwFilesystemException::directory_not_readable';
    const ERR_DIRECTORY_NOT_WRITEABLE = 'gwFilesystemException::directory_not_writeable';
    const ERR_WRONG_FILE_TYPE = 'gwFilesystemException::wrong_file_type';
    const ERR_CLASS_NOT_IN_FILE = 'gwFilesystemException::class_not_in_file';
}
