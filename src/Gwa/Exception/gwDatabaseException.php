<?php
namespace Gwa\Exception;

/**
 * @brief A database exception
 * @ingroup exceptions
 */
class gwDatabaseException extends gwCoreException
{
    const ERR_DB_CONNECT = 'gwDatabaseException::db_connect';
    const ERR_TABLE_NOT_EXIST = 'gwDatabaseException::table_not_exist';
}
