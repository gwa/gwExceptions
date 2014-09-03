<?php
namespace Gwa\Exception;

/**
 * @brief File upload exception
 * @ingroup exceptions
 * @ingroup data
 */
class gwUploadException extends gwCoreException
{
    const ERR_WRONG_MIME_TYPE = 'gwUploadException::wrong_mime_type';
    const ERR_EXCEEDS_MAX_FILESIZE = 'gwUploadException::exceeds_max_filesize';
    const ERR_WRONG_DIMENSIONS = 'gwUploadException::wrong_dimensions';

    // Value: 1; The uploaded file exceeds the upload_max_filesize directive in
    // php.ini.
    const ERR_INI_SIZE = 'gwUploadException::exceeds_php_max_filesize';

    // Value: 2; The uploaded file exceeds the MAX_FILE_SIZE directive that was
    // specified in the HTML form.
    const ERR_FORM_SIZE = 'gwUploadException::exceeds_form_max_filesize';

    // Value: 3; The uploaded file was only partially uploaded.
    const ERR_PARTIAL = 'gwUploadException::partial_upload';

    // Value: 4; No file was uploaded.
    const ERR_NO_FILE = 'gwUploadException::no_uploaded_file';

    // Value: 6; Missing a temporary folder. Introduced in PHP 4.3.10 and
    // PHP 5.0.3.
    const ERR_NO_TMP_DIR = 'gwUploadException::no_temp_dir';

    // Value: 7; Failed to write file to disk. Introduced in PHP 5.1.0.
    const ERR_CANT_WRITE = 'gwUploadException::cannot_write_to_disk';

    // Value: 8; File upload stopped by extension. Introduced in PHP 5.2.0.
    const ERR_EXTENSION = 'gwUploadException::extension_stopped_upload';
}
