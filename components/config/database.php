<?php

return [
    /**
     * ------------------------
     * Freeze database
     * --------------------------
     * | Set true to stop RedBeanPHP from modifying database structure
     * | Available options are: true, false, 'auto', or array
     *
     */
    'freeze' => appEnv('DB_FREEZE', 'auto'),
    /**
     * Default database driver
     */
    'driver' => appEnv('DB_DRIVER', 'sqlite'),
    /**
     * MySQL Database configurations
     */
    'mysql' => [
        'host' => appEnv('MYSQL_HOST', 'localhost'),
        'port' => appEnv('MYSQL_PORT', 3306),
        'dbname' => appEnv('MYSQL_DB_NAME', 'liteframe'),
        'dbuser' => appEnv('MYSQL_DB_USER', 'root'),
        'dbpassword' => appEnv('MYSQL_DB_PASSWORD', '')
    ],
    /**
     * PostgreSQL database configurations
     */
    'pgsql' => [
        'host' => appEnv('PGSQL_HOST', 'localhost'),
        'port' => appEnv('PGSQL_PORT', 3306),
        'dbname' => appEnv('PGSQL_DB_NAME', 'liteframe'),
        'dbuser' => appEnv('PGSQL_DB_USER', 'root'),
        'dbpassword' => appEnv('PGSQL_DB_PASSWORD', '')
    ],
    /**
     * Cubrid database configurations
     */
    'cubrid' => [
        'host' => appEnv('CUBRID_HOST', 'localhost'),
        'port' => appEnv('CUBRID_PORT', 3306),
        'dbname' => appEnv('CUBRID_DB_NAME', 'liteframe'),
        'dbuser' => appEnv('CUBRID_DB_USER', 'root'),
        'dbpassword' => appEnv('CUBRID_DB_PASSWORD', '')
    ],
    /**
     * SQLite database configuration
     */
    'sqlite' => [
        'file' => appEnv('SQLITE_FILE', privateStoragePath('sqlite/dbfiledb'))
    ]
];
