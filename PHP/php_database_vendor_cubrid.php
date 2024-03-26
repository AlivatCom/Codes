<?php
// ==============================
//            CONTENTS            
// ==============================
// PHP_DATABASE_VENDOR_CUBRID - BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_BIND - bool php_database_vendor_cubrid_cubrid_bind(resource $req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_PREPARE - bool php_database_vendor_cubrid_cubrid_close_prepare(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_REQUEST - bool php_database_vendor_cubrid_cubrid_close_request(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_GET - array php_database_vendor_cubrid_cubrid_col_get(resource $conn_identifier, string $oid, string $attr_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_SIZE - int php_database_vendor_cubrid_cubrid_col_size(resource $conn_identifier, string $oid, string $attr_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_NAMES - array php_database_vendor_cubrid_cubrid_column_names(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_TYPES - array php_database_vendor_cubrid_cubrid_column_types(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COMMIT - bool php_database_vendor_cubrid_cubrid_commit(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT_WITH_URL - resource php_database_vendor_cubrid_cubrid_connect_with_url(string $conn_url, string $userid, string $passwd, bool $new_link = false)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT - resource php_database_vendor_cubrid_cubrid_connect(string $host, int $port, string $dbname, string $userid, string $passwd, bool $new_link = false)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CURRENT_OID - string php_database_vendor_cubrid_cubrid_current_oid(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DISCONNECT - bool php_database_vendor_cubrid_cubrid_disconnect(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DROP - bool php_database_vendor_cubrid_cubrid_drop(resource $conn_identifier, string $oid)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE_FACILITY - int php_database_vendor_cubrid_cubrid_error_code_facility()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE - int php_database_vendor_cubrid_cubrid_error_code()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_MSG - string php_database_vendor_cubrid_cubrid_error_msg()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_EXECUTE - resource php_database_vendor_cubrid_cubrid_execute(resource $conn_identifier, string $sql, int $option = 0)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH - mixed php_database_vendor_cubrid_cubrid_fetch(resource $result, int $type = CUBRID_BOTH)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FREE_RESULT - bool php_database_vendor_cubrid_cubrid_free_result(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_AUTOCOMMIT - bool php_database_vendor_cubrid_cubrid_get_autocommit(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CHARSET - string php_database_vendor_cubrid_cubrid_get_charset(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CLASS_NAME - string php_database_vendor_cubrid_cubrid_get_class_name(resource $conn_identifier, string $oid)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CLIENT_INFO - string php_database_vendor_cubrid_cubrid_get_client_info()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_DB_PARAMETER - array php_database_vendor_cubrid_cubrid_get_db_parameter(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_QUERY_TIMEOUT - int php_database_vendor_cubrid_cubrid_get_query_timeout(resource $req_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_SERVER_INFO - string php_database_vendor_cubrid_cubrid_get_server_info(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET - mixed php_database_vendor_cubrid_cubrid_get(resource $conn_identifier, string $oid, mixed $attr)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_INSERT_ID - string php_database_vendor_cubrid_cubrid_insert_id(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_IS_INSTANCE - int php_database_vendor_cubrid_cubrid_is_instance(resource $conn_identifier, string $oid)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_CLOSE - bool php_database_vendor_cubrid_cubrid_lob_close(array $lob_identifier_array)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_EXPORT - bool php_database_vendor_cubrid_cubrid_lob_export(resource $conn_identifier, resource $lob_identifier, string $path_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_GET - array php_database_vendor_cubrid_cubrid_lob_get(resource $conn_identifier, string $sql)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_SEND - bool php_database_vendor_cubrid_cubrid_lob_send(resource $conn_identifier, resource $lob_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_SIZE - string php_database_vendor_cubrid_cubrid_lob_size(resource $lob_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_BIND - bool php_database_vendor_cubrid_cubrid_lob2_bind(resource $req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_CLOSE - bool php_database_vendor_cubrid_cubrid_lob2_close(resource $lob_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_EXPORT - bool php_database_vendor_cubrid_cubrid_lob2_export(resource $lob_identifier, string $file_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_IMPORT - bool php_database_vendor_cubrid_cubrid_lob2_import(resource $lob_identifier, string $file_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_NEW - resource php_database_vendor_cubrid_cubrid_lob2_new(resource $conn_identifier, string $type = "BLOB")
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_READ - string php_database_vendor_cubrid_cubrid_lob2_read(resource $lob_identifier, int $len)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SEEK64 - bool php_database_vendor_cubrid_cubrid_lob2_seek64(resource $lob_identifier, string $offset, int $origin = CUBRID_CURSOR_CURRENT)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SEEK - bool php_database_vendor_cubrid_cubrid_lob2_seek(resource $lob_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SIZE64 - string php_database_vendor_cubrid_cubrid_lob2_size64(resource $lob_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SIZE - int php_database_vendor_cubrid_cubrid_lob2_size(resource $lob_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_TELL64 - string php_database_vendor_cubrid_cubrid_lob2_tell64(resource $lob_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_TELL - int php_database_vendor_cubrid_cubrid_lob2_tell(resource $lob_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_WRITE - bool php_database_vendor_cubrid_cubrid_lob2_write(resource $lob_identifier, string $buf)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOCK_READ - bool php_database_vendor_cubrid_cubrid_lock_read(resource $conn_identifier, string $oid)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOCK_WRITE - bool php_database_vendor_cubrid_cubrid_lock_write(resource $conn_identifier, string $oid)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_MOVE_CURSOR - bool php_database_vendor_cubrid_cubrid_move_cursor(resource $req_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NEXT_RESULT - bool php_database_vendor_cubrid_cubrid_next_result(resource $result)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_COLS - int php_database_vendor_cubrid_cubrid_num_cols(resource $result)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_ROWS - int php_database_vendor_cubrid_cubrid_num_rows(resource $result)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PCONNECT_WITH_URL - resource php_database_vendor_cubrid_cubrid_pconnect_with_url(string $conn_url, string $userid, string $passwd)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PCONNECT - resource php_database_vendor_cubrid_cubrid_pconnect(string $host, int $port, string $dbname, string $userid, string $passwd)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PREPARE - resource php_database_vendor_cubrid_cubrid_prepare(resource $conn_identifier, string $prepare_stmt, int $option = 0)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PUT - bool php_database_vendor_cubrid_cubrid_put(resource $conn_identifier, string $oid, string $attr, mixed $value)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ROLLBACK - bool php_database_vendor_cubrid_cubrid_rollback(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SCHEMA - array php_database_vendor_cubrid_cubrid_schema(resource $conn_identifier, int $schema_type, string $class_name, string $attr_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_DROP - bool php_database_vendor_cubrid_cubrid_seq_drop(resource $conn_identifier, string $oid, string $attr_name, int $index)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_INSERT - bool php_database_vendor_cubrid_cubrid_seq_insert(resource $conn_identifier, string $oid, string $attr_name, int $index, string $seq_element)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_PUT - bool php_database_vendor_cubrid_cubrid_seq_put(resource $conn_identifier, string $oid, string $attr_name, int $index, string $seq_element)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_ADD - bool php_database_vendor_cubrid_cubrid_set_add(resource $conn_identifier, string $oid, string $attr_name, string $set_element)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_AUTOCOMMIT - bool php_database_vendor_cubrid_cubrid_set_autocommit(resource $conn_identifier, bool $mode)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_DB_PARAMETER - bool php_database_vendor_cubrid_cubrid_set_db_parameter(resource $conn_identifier, int $param_type, int $param_value)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_DROP - bool php_database_vendor_cubrid_cubrid_set_drop(resource $conn_identifier, string $oid, string $attr_name, string $set_element)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_QUERY_TIMEOUT - bool php_database_vendor_cubrid_cubrid_set_query_timeout(resource $req_identifier, int $timeout)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_VERSION - string php_database_vendor_cubrid_cubrid_version()
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_AFFECTED_ROWS - int php_database_vendor_cubrid_cubrid_affected_rows(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLIENT_ENCODING - string php_database_vendor_cubrid_cubrid_client_encoding(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE - bool php_database_vendor_cubrid_cubrid_close(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DATA_SEEK - bool php_database_vendor_cubrid_cubrid_data_seek(resource $result, int $row_number)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DB_NAME - string php_database_vendor_cubrid_cubrid_db_name(array $result, int $index)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERRNO - int php_database_vendor_cubrid_cubrid_errno(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR - string php_database_vendor_cubrid_cubrid_error(resource $connection)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ARRAY - array php_database_vendor_cubrid_cubrid_fetch_array(resource $result, int $type = CUBRID_BOTH)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ASSOC - array php_database_vendor_cubrid_cubrid_fetch_assoc(resource $result, int $type)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_FIELD - object php_database_vendor_cubrid_cubrid_fetch_field(resource $result, int $field_offset = 0)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_LENGTHS - array php_database_vendor_cubrid_cubrid_fetch_lengths(resource $result)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_OBJECT - object php_database_vendor_cubrid_cubrid_fetch_object(resource $result, string $class_name, array $params, int $type)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ROW - array php_database_vendor_cubrid_cubrid_fetch_row(resource $result, int $type)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_FLAGS - string php_database_vendor_cubrid_cubrid_field_flags(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_LEN - int php_database_vendor_cubrid_cubrid_field_len(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_NAME - string php_database_vendor_cubrid_cubrid_field_name(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_SEEK - bool php_database_vendor_cubrid_cubrid_field_seek(resource $result, int $field_offset = 0)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_TABLE - string php_database_vendor_cubrid_cubrid_field_table(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_TYPE - string php_database_vendor_cubrid_cubrid_field_type(resource $result, int $field_offset)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LIST_DBS - array php_database_vendor_cubrid_cubrid_list_dbs(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_FIELDS - int php_database_vendor_cubrid_cubrid_num_fields(resource $result)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PING - bool php_database_vendor_cubrid_cubrid_ping(resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_QUERY - resource php_database_vendor_cubrid_cubrid_query(string $query, resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_REAL_ESCAPE_STRING - string php_database_vendor_cubrid_cubrid_real_escape_string(string $unescaped_string, resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_RESULT - string php_database_vendor_cubrid_cubrid_result(resource $result, int $row, mixed $field = 0)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_UNBUFFERED_QUERY - resource php_database_vendor_cubrid_cubrid_unbuffered_query(string $query, resource $conn_identifier)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOAD_FROM_GLO - int php_database_vendor_cubrid_cubrid_load_from_glo(resource $conn_identifier, string $oid, string $file_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NEW_GLO - string php_database_vendor_cubrid_cubrid_new_glo(resource $conn_identifier, string $class_name, string $file_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SAVE_TO_GLO - int php_database_vendor_cubrid_cubrid_save_to_glo(resource $conn_identifier, string $oid, string $file_name)
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEND_GLO - int php_database_vendor_cubrid_cubrid_send_glo(resource $conn_identifier, string $oid)
// PHP_DATABASE_VENDOR_CUBRID - END
// ==============================


// ============================== BEGIN
//          REQUIREMENTS          
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== INSTALLATION
// NOT_BUNDLED (In order to have these functions available, you must install CUBRID, and compile CUBRID PHP Library with CUBRID support.)
// ============================== USING FUNCTIONS (98)
// cubrid_bind() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_close_prepare() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_close_request() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_col_get() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_col_size() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_column_names() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_column_types() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_commit() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_connect_with_url() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_connect() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_current_oid() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_disconnect() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_error_code_facility() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_error_code() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_error_msg() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_execute() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_fetch() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_free_result() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_get_autocommit() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// cubrid_get_charset() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_get_class_name() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_get_client_info() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_get_db_parameter() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_get_query_timeout() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_get_server_info() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_get() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_insert_id() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_is_instance() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_lob_close() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_lob_export() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_lob_get() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_lob_send() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_lob_size() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_lob2_bind() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_close() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_export() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_import() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_new() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_read() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_seek64() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_seek() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_size64() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_size() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_tell64() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_tell() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lob2_write() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_lock_read() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_lock_write() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_move_cursor() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_next_result() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// cubrid_num_cols() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_num_rows() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_pconnect_with_url() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_pconnect() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_prepare() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_put() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_rollback() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_schema() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_seq_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_seq_insert() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_seq_put() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_set_add() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_set_autocommit() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// cubrid_set_db_parameter() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// cubrid_set_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_set_query_timeout() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// cubrid_version() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_affected_rows() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_client_encoding() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_close() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_data_seek() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_db_name() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_errno() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_error() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_fetch_array() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_fetch_assoc() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_fetch_field() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_fetch_lengths() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_fetch_object() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_fetch_row() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_field_flags() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_field_len() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_field_name() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_field_seek() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_field_table() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_field_type() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_list_dbs() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_num_fields() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_ping() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_query() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// cubrid_real_escape_string() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_result() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_unbuffered_query() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_load_from_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_new_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_save_to_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// cubrid_send_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== USING CLASSES (0)
// ============================== USING DATA_TYPES (7)
// bool
// resource
// int
// mixed
// string
// array
// object
// ============================== END
//          REQUIREMENTS          
// ==============================


// ============================== BEGIN
//   PHP_DATABASE_VENDOR_CUBRID   
// ============================== ABOUT
// PHP Manual / Function Reference / Database Extensions / Vendor Specific Database Extensions / CUBRID
// URL: https://www.php.net/manual/en/book.cubrid.php
// ============================== DESCRIPTION
// CUBRID
// 
// CUBRID - BEGIN
// CUBRID
// 
// INTRODUCTION
// INSTALLING_CONFIGURING
// PREDEFINED_CONSTANTS
// EXAMPLES
// CUBRID_FUNCTIONS
// CUBRID_MYSQL_COMPATIBILITY_FUNCTIONS
// CUBRID_OBSOLETE_ALIASES_AND_FUNCTIONS
// 
// INTRODUCTION - BEGIN
// Introduction
// 
// These functions allow you to access CUBRID database servers. More information about CUBRID can be found at > CUBRID.
// Documentation for CUBRID can be found at > CUBRID Documentation.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/book.cubrid.php
// INTRODUCTION - END
// 
// INSTALLING_CONFIGURING - BEGIN
// Installing/Configuring
// 
// REQUIREMENTS
// INSTALLATION
// RUNTIME_CONFIGURATION
// RESOURCE_TYPES
// 
// REQUIREMENTS - BEGIN
// Requirements
// 
// In order to have these functions available, you must install CUBRID, and compile CUBRID PHP Library with CUBRID support.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.requirements.php
// REQUIREMENTS - END
// 
// INSTALLATION - BEGIN
// Installation
// 
// Information for installing this PECL extension may be found in the manual chapter titled Installation of PECL extensions. Additional information such as new releases, downloads, source files, maintainer information, and a CHANGELOG, can be located here: > https://pecl.php.net/package/cubrid.
// A DLL for this PECL extension is currently unavailable. See also the building on Windows section.
// For information about manual installation on Linux and Windows systems, please read the file build-guide.html included in the package.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.installation.php
// INSTALLATION - END
// 
// RUNTIME_CONFIGURATION - BEGIN
// Runtime Configuration
// 
// There is no runtime configuration now.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.configuration.php
// RUNTIME_CONFIGURATION - END
// 
// RESOURCE_TYPES - BEGIN
// Resource Types
// 
// There are four resource types used in CUBRID. The first one is the link identifier for a database connection, the second is the a resource which holds the result of a query, and the last two a resource which holds the query results of BLOB/CLOB data types.
// 
// connection identifier - A connection identifier returned by cubrid_connect(), cubrid_connect_with_url(), cubrid_pconnect() and cubrid_pconnect_with_url().
// request identifier    - A request identifier returned by cubrid_prepare() and cubrid_execute().
// LOB identifier        - A LOB identifier returned by cubrid_lob_get().
// LOB2 identifier       - A LOB identifier returned by cubrid_lob2_new() or get from the result set.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.resources.php
// RESOURCE_TYPES - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.setup.php
// INSTALLING_CONFIGURING - END
// 
// PREDEFINED_CONSTANTS - BEGIN
// Predefined Constants
// 
// The constants below are defined by this extension, and will only be available when the extension has either been compiled into PHP or dynamically loaded at runtime.
// 
// The following constants can be used when executing SQL statement. They can be passed to cubrid_prepare() and cubrid_execute().
// 
// CUBRID SQL execution flags
// Constant              - Description
// CUBRID_INCLUDE_OID    - Determine whether to get OID during query execution.
// CUBRID_ASYNC          - Execute the query in asynchronous mode.
// CUBRID_EXEC_QUERY_ALL - Execute the query in synchronous mode. This flag must be set when executing multiple SQL statements.
// 
// The following constants can be used when fetching the results to specify fetch behaviour. They can be passed to cubrid_fetch() and cubrid_fetch_array().
// 
// CUBRID fetch flags
// Constant      - Description
// CUBRID_NUM    - Get query result as a numeric array (0-default).
// CUBRID_ASSOC  - Get query result as an associative array.
// CUBRID_BOTH   - Get query result as both numeric and associative arrays (default value).
// CUBRID_OBJECT - Get query result an object.
// CUBRID_LOB    - The constant CUBRID_LOB can be used when you want to operate the lob object. It can be passed to cubrid_fetch(), cubrid_fetch_row(), cubrid_fetch_array(), cubrid_fetch_assoc() and cubrid_fetch_object().
// 
// The following constants can be used when positioning the cursor in query results. They can be passed to or returned by cubrid_move_cursor().
// 
// CUBRID cursor position flags
// Constant              - Description
// CUBRID_CURSOR_FIRST   - Move current cursor to the first position in the result.
// CUBRID_CURSOR_CURRENT - Move current cursor as a default value if the origin is not specified.
// CUBRID_CURSOR_LAST    - Move current cursor to the last position in the result.
// CUBRID_CURSOR_SUCCESS - Returned value of cubrid_move_cursor() function in case of success. This flag has been removed from 8.4.1.
// CUBRID_NO_MORE_DATA   - Returned value of cubrid_move_cursor() function in case of failure. This flag has been removed from 8.4.1.
// CUBRID_CURSOR_ERROR   - Returned value of cubrid_move_cursor() function in case of failure. This flag has been removed from 8.4.1.
// 
// The following constants can be used when setting the auto-commit mode for the database connection. They can be passed to cubrid_set_autocommit() or returned by cubrid_get_autocommit().
// 
// CUBRID auto-commit mode flags
// Constant                - Description
// CUBRID_AUTOCOMMIT_TRUE  - Enable the auto-commit mode.
// CUBRID_AUTOCOMMIT_FALSE - Disable the auto-commit mode.
// 
// The following constants can be used when setting the database parameter. They can be passed to cubrid_set_db_parameter().
// 
// CUBRID parameter flags
// Constant                     - Description
// CUBRID_PARAM_ISOLATION_LEVEL - Transaction isolation level for the database connection.
// CUBRID_PARAM_LOCK_TIMEOUT    - Transaction timeout in seconds.
// 
// The following constants can be used when setting the transaction isolation level. They can be passed to cubrid_set_db_parameter() or returned by cubrid_get_db_parameter().
// 
// CUBRID isolation level flags
// Constant                            - Description
// TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE - The lowest isolation level (1). A dirty, non-repeatable or phantom read may occur for the tuple and a non-repeatable read may occur for the table as well.
// TRAN_COMMIT_CLASS_COMMIT_INSTANCE   - A relatively low isolation level (2). A dirty read does not occur, but non-repeatable or phantom read may occur.
// TRAN_REP_CLASS_UNCOMMIT_INSTANCE    - The default isolation of CUBRID (3). A dirty, non-repeatable or phantom read may occur for the tuple, but repeatable read is ensured for the table.
// TRAN_REP_CLASS_COMMIT_INSTANCE      - A relatively low isolation level (4). A dirty read does not occur, but non-repeatable or phantom read may.
// TRAN_REP_CLASS_REP_INSTANCE         - A relatively high isolation level (5). A dirty or non-repeatable read does not occur, but a phantom read may.
// TRAN_SERIALIZABLE                   - The highest isolation level (6). Problems concerning concurrency (e.g. dirty read, non-repeatable read, phantom read, etc.) do not occur.
// 
// The following constants can be used when getting schema information. They can be passed to cubrid_schema().
// 
// CUBRID schema flags
// Constant                      - Description
// CUBRID_SCH_CLASS              - Get name and type of table in CUBRID.
// CUBRID_SCH_VCLASS             - Get name and type of view in CUBRID.
// CUBRID_SCH_QUERY_SPEC         - Get the query definition of view.
// CUBRID_SCH_ATTRIBUTE          - Get the attributes of table column.
// CUBRID_SCH_CLASS_ATTRIBUTE    - Get the attributes of table.
// CUBRID_SCH_METHOD             - Get the instance method. The instance method is a method called by a class instance. It is used more often than the class method because most operations are executed in the instance.
// CUBRID_SCH_CLASS_METHOD       - Get the class method. The class method is a method called by a class object. It is usually used to create a new class instance or to initialize it. It is also used to access or update class attributes.
// CUBRID_SCH_METHOD_FILE        - Get the information of the file where the method of the table is defined.
// CUBRID_SCH_SUPERCLASS         - Get the name and type of table which table inherites attributes from.
// CUBRID_SCH_SUBCLASS           - Get the name and type of table which inherites attributes from this table.
// CUBRID_SCH_CONSTRAINT         - Get the table constraints.
// CUBRID_SCH_TRIGGER            - Get the table triggers.
// CUBRID_SCH_CLASS_PRIVILEGE    - Get the privilege information of table.
// CUBRID_SCH_ATTR_PRIVILEGE     - Get the privilege information of column.
// CUBRID_SCH_DIRECT_SUPER_CLASS - Get the direct super table of table.
// CUBRID_SCH_PRIMARY_KEY        - Get the table primary key.
// CUBRID_SCH_IMPORTED_KEYS      - Get imported keys of table.
// CUBRID_SCH_EXPORTED_KEYS      - Get exported keys of table.
// CUBRID_SCH_CROSS_REFERENCE    - Get reference relationship of tow tables.
// 
// The following constants can be used when reporting errors. They can be returned from cubrid_error_code_facility().
// 
// CUBRID error facility code
// Constant               - Description
// CUBRID_FACILITY_DBMS   - The error occurred in CUBRID dbms.
// CUBRID_FACILITY_CAS    - The error occurred in CUBRID broker cas.
// CUBRID_FACILITY_CCI    - The error occurred in CUBRID cci.
// CUBRID_FACILITY_CLIENT - The error occurred in CUBRID PHP client.
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.constants.php
// PREDEFINED_CONSTANTS - END
// 
// EXAMPLES - BEGIN
// Examples 
// 
// The following is a simple example that establishes a connection between PHP and CUBRID. This section will cover the most basic and notable features. The following code required to connect to CUBRID database, which means CUBRID Server and CUBRID Broker have to be running.
// The example below uses the demodb database as an examples. By default it is created during the installation. Make sure it has been created.
// [example]
// Example #1 Example of Data Retrieval
// [code]
// <html>
//     <head>
//     <meta http-equiv="content-type" content="text/html; charset=euc-kr">
//     </head>
//     <body>
//     <center>
//     <table border=2>
// [php]
//         /**
//          * Set server information for CUBRID connection. host_ip is the IP
//          * address where the CUBRID Broker is installed (localhost in this
//          * example), and host_port is the port number of the CUBRID Broker.
//          * The port number is the default given during the installation.
//          * For details, see "Administrator's Guide."
//          */
//         $host_ip = "localhost";
//         $host_port = 33000;
//         $db_name = "demodb";
//         /**
//          * Connect to CUBRID Server. Do not make the actual connection, but
//          * only retain the connection information. The reason for not making
//          * the actual connection is to handle transaction more efficiently
//          * in the 3-tier architecture. 
//          */
//         $cubrid_con = @cubrid_connect($host_ip, $host_port, $db_name);
//  
//         if (!$cubrid_con) {
//             echo "Database Connection Error";
//             exit;
//         }
// [/php]
// [php]
//         $sql = "select sports, count(players) as players from event group by sports";
//         /**
//          * Request the CUBRID Server for the results of the SQL statement.
//          * Now make the actual connection to the CUBRID Server.
//          */
//         $result = cubrid_execute($cubrid_con, $sql);
//  
//         if ($result) {
//             /**
//              * Get the column names from the result set created by the SQL query.
//              */
//             $columns = cubrid_column_names($result);
//             /**
//              * Get the number of columns in the result set created by the SQL query.
//              */
//             $num_fields = cubrid_num_cols($result);
//             /**
//              * List the column names of the result set on the screen. 
//              */
//             echo "<tr>";
//  
//             while (list($key, $colname) = each($columns)) {
//                 echo "<td align=center>$colname</td>";
//             }
//  
//             echo "</tr>";
//  
//             /**
//              * Get the results from the result set.
//              */
//             while ($row = cubrid_fetch($result)) {
//                 echo "<tr>";
//  
//                 for ($i = 0; $i < $num_fields; $i++) {
//                     echo "<td align=center>";
//                     echo $row[$i];
//                     echo "</td>";
//                 }
//  
//                 echo "</tr>";
//             }
//         }
//         /**
//          * The PHP module in the CUBRID runs in a 3-tier architecture. Even when
//          * calling SELECT for transaction processing, it is processed as a part
//          * of the transaction. Therefore, the transaction needs to be rolled back
//          * by calling commit or rollback even though SELECT was called for smooth
//          * performance.
//          */
//         cubrid_commit($cubrid_con);
//         cubrid_disconnect($cubrid_con);
// [/php]
//     </body>
//     </html>
// [/code]
// [/example]
// [example]
// Example #2 Example of Data Insertion
// [code]
// <html>
//     <head>
//     <meta http-equiv="content-type" content="text/html; charset=euc- kr">
//     </head>
//     <body>
//     <center>
//     <table border=2>
// [php]
//         /**
//          * host_ip is the IP address where the CUBRID Broker is installed
//          * host_port is the port number of the CUBRID Broker
//          * db_name is the name of CUBRID Database
//          */
//         $host_ip = "localhost";
//         $host_port = 33000;
//         $db_name = "demodb";
//         $cubrid_con = @cubrid_connect($host_ip, $host_port, $db_name);
//  
//         if (!$cubrid_con) {
//             echo "Database Connection Error";
//             exit;
//         }
// [/php]
// [php]
//         $sql = "insert into olympic (host_year,host_nation,host_city,"
//             . "opening_date,closing_date) values (2008, 'China', 'Beijing',"
//             . "to_date('08-08-2008','mm-dd- yyyy'),to_date('08-24-2008','mm-dd-yyyy')) ;";
//         $result = cubrid_execute($cubrid_con, $sql);
//         if ($result) {
//             /**
//              * Handled successfully, so commit.
//              */
//             cubrid_commit($cubrid_con);
//             echo "Inserted successfully ";
//         } else {
//             /**
//              * Error occurred, so the error message is output and rollback is called.
//              */
//             echo cubrid_error_msg();
//             cubrid_rollback($cubrid_con);
//         }
//         cubrid_disconnect($cubrid_con);
// [/php]
//     </body>
//     </html>
// [/code]
// [/example]
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubrid.examples.php
// EXAMPLES - END
// 
// CUBRID_FUNCTIONS - BEGIN
// CUBRID Functions
// 
// Table of Contents
// * cubrid_bind                - Bind variables to a prepared statement as parameters
// * cubrid_close_prepare       - Close the request handle
// * cubrid_close_request       - Close the request handle
// * cubrid_col_get             - Get contents of collection type column using OID
// * cubrid_col_size            - Get the number of elements in collection type column using OID
// * cubrid_column_names        - Get the column names in result
// * cubrid_column_types        - Get column types in result
// * cubrid_commit              - Commit a transaction
// * cubrid_connect_with_url    - Establish the environment for connecting to CUBRID server
// * cubrid_connect             - Open a connection to a CUBRID Server
// * cubrid_current_oid         - Get OID of the current cursor location
// * cubrid_disconnect          - Close a database connection
// * cubrid_drop                - Delete an instance using OID
// * cubrid_error_code_facility - Get the facility code of error
// * cubrid_error_code          - Get error code for the most recent function call
// * cubrid_error_msg           - Get last error message for the most recent function call
// * cubrid_execute             - Execute a prepared SQL statement
// * cubrid_fetch               - Fetch the next row from a result set
// * cubrid_free_result         - Free the memory occupied by the result data
// * cubrid_get_autocommit      - Get auto-commit mode of the connection
// * cubrid_get_charset         - Return the current CUBRID connection charset
// * cubrid_get_class_name      - Get the class name using OID
// * cubrid_get_client_info     - Return the client library version
// * cubrid_get_db_parameter    - Returns the CUBRID database parameters
// * cubrid_get_query_timeout   - Get the query timeout value of the request
// * cubrid_get_server_info     - Return the CUBRID server version
// * cubrid_get                 - Get a column using OID
// * cubrid_insert_id           - Return the ID generated for the last updated AUTO_INCREMENT column
// * cubrid_is_instance         - Check whether the instance pointed by OID exists
// * cubrid_lob_close           - Close BLOB/CLOB data
// * cubrid_lob_export          - Export BLOB/CLOB data to file
// * cubrid_lob_get             - Get BLOB/CLOB data
// * cubrid_lob_send            - Read BLOB/CLOB data and send straight to browser
// * cubrid_lob_size            - Get BLOB/CLOB data size
// * cubrid_lob2_bind           - Bind a lob object or a string as a lob object to a prepared statement as parameters
// * cubrid_lob2_close          - Close LOB object
// * cubrid_lob2_export         - Export the lob object to a file
// * cubrid_lob2_import         - Import BLOB/CLOB data from a file
// * cubrid_lob2_new            - Create a lob object
// * cubrid_lob2_read           - Read from BLOB/CLOB data
// * cubrid_lob2_seek64         - Move the cursor of a lob object
// * cubrid_lob2_seek           - Move the cursor of a lob object
// * cubrid_lob2_size64         - Get a lob object's size
// * cubrid_lob2_size           - Get a lob object's size
// * cubrid_lob2_tell64         - Tell the cursor position of the LOB object
// * cubrid_lob2_tell           - Tell the cursor position of the LOB object
// * cubrid_lob2_write          - Write to a lob object
// * cubrid_lock_read           - Set a read lock on the given OID
// * cubrid_lock_write          - Set a write lock on the given OID
// * cubrid_move_cursor         - Move the cursor in the result
// * cubrid_next_result         - Get result of next query when executing multiple SQL statements
// * cubrid_num_cols            - Return the number of columns in the result set
// * cubrid_num_rows            - Get the number of rows in the result set
// * cubrid_pconnect_with_url   - Open a persistent connection to CUBRID server
// * cubrid_pconnect            - Open a persistent connection to a CUBRID server
// * cubrid_prepare             - Prepare a SQL statement for execution
// * cubrid_put                 - Update a column using OID
// * cubrid_rollback            - Roll back a transaction
// * cubrid_schema              - Get the requested schema information
// * cubrid_seq_drop            - Delete an element from sequence type column using OID
// * cubrid_seq_insert          - Insert an element to a sequence type column using OID
// * cubrid_seq_put             - Update the element value of sequence type column using OID
// * cubrid_set_add             - Insert a single element to set type column using OID
// * cubrid_set_autocommit      - Set autocommit mode of the connection
// * cubrid_set_db_parameter    - Sets the CUBRID database parameters
// * cubrid_set_drop            - Delete an element from set type column using OID
// * cubrid_set_query_timeout   - Set the timeout time of query execution
// * cubrid_version             - Get the CUBRID PHP module's version
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/ref.cubrid.php
// CUBRID_FUNCTIONS - END
// 
// CUBRID_MYSQL_COMPATIBILITY_FUNCTIONS - BEGIN
// CUBRID MySQL Compatibility Functions
// 
// Table of Contents
// * cubrid_affected_rows      - Return the number of rows affected by the last SQL statement
// * cubrid_client_encoding    - Return the current CUBRID connection charset
// * cubrid_close              - Close CUBRID connection
// * cubrid_data_seek          - Move the internal row pointer of the CUBRID result
// * cubrid_db_name            - Get db name from results of cubrid_list_dbs
// * cubrid_errno              - Return the numerical value of the error message from previous CUBRID operation
// * cubrid_error              - Get the error message
// * cubrid_fetch_array        - Fetch a result row as an associative array, a numeric array, or both
// * cubrid_fetch_assoc        - Return the associative array that corresponds to the fetched row
// * cubrid_fetch_field        - Get column information from a result and return as an object
// * cubrid_fetch_lengths      - Return an array with the lengths of the values of each field from the current row
// * cubrid_fetch_object       - Fetch the next row and return it as an object
// * cubrid_fetch_row          - Return a numerical array with the values of the current row
// * cubrid_field_flags        - Return a string with the flags of the given field offset
// * cubrid_field_len          - Get the maximum length of the specified field
// * cubrid_field_name         - Return the name of the specified field index
// * cubrid_field_seek         - Move the result set cursor to the specified field offset
// * cubrid_field_table        - Return the name of the table of the specified field
// * cubrid_field_type         - Return the type of the column corresponding to the given field offset
// * cubrid_list_dbs           - Return an array with the list of all existing CUBRID databases
// * cubrid_num_fields         - Return the number of columns in the result set
// * cubrid_ping               - Ping a server connection or reconnect if there is no connection
// * cubrid_query              - Send a CUBRID query
// * cubrid_real_escape_string - Escape special characters in a string for use in an SQL statement
// * cubrid_result             - Return the value of a specific field in a specific row
// * cubrid_unbuffered_query   - Perform a query without fetching the results into memory
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/cubridmysql.cubrid.php
// CUBRID_MYSQL_COMPATIBILITY_FUNCTIONS - END
// 
// CUBRID_OBSOLETE_ALIASES_AND_FUNCTIONS - BEGIN
// CUBRID Obsolete Aliases and Functions
// 
// Table of Contents
// * cubrid_load_from_glo - Read data from a GLO instance and save it in a file
// * cubrid_new_glo       - Create a glo instance
// * cubrid_save_to_glo   - Save requested file in a GLO instance
// * cubrid_send_glo      - Read data from glo and send it to std output
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/oldaliases.cubrid.php
// CUBRID_OBSOLETE_ALIASES_AND_FUNCTIONS - END
// 
// LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/book.cubrid.php
// CUBRID - END
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_BIND
// ============================== PUBLIC
// ============================== ABOUT
// Bind variables to a prepared statement as parameters.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_bind() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_bind($req_identifier, $bind_index, $bind_value, $bind_value_type)
{
$return_cubrid_bind = false;

// ========== CUBRID_BIND - BEGIN
// ===== ABOUT
// Bind variables to a prepared statement as parameters
// ===== DESCRIPTION
// The cubrid_bind() function is used to bind values to a corresponding named or question mark placeholder in the SQL statement that was passed to cubrid_prepare(). If bind_value_type is not given, string will be the default.
//  Note: If the type of data to be bound is BLOB/CLOB, CUBRID will try to map the data as a PHP stream. If the actually bind value type is not stream, CUBRID will convert it to string, and use it as the full path and file name of a file on the client filesystem.
//  If the type of data to be bound explicitly is ENUM, the bind_value argument should be the enum element which is in string format.
//  In CUBRID shard envrioment, the bind_value_type must be included in the cubrid_bind() function.
// The following table shows the types of substitute values.
// CUBRID Bind Date Types
// Support       | Bind Type         | Corresponding SQL Type
// Supported     | STRING            | CHAR, VARCHAR
//               | NCHAR             | NCHAR, NVARCHAR
//               | BIT               | BIT, VARBIT
//               | NUMERIC or NUMBER | SHORT, INT, NUMERIC
//               | FLOAT             | FLOAT
//               | DOUBLE            | DOUBLE
//               | TIME              | TIME
//               | DATE              | DATE
//               | TIMESTAMP         | TIMESTAMP
//               | OBJECT            | OBJECT
//               | ENUM              | ENUM
//               | BLOB              | BLOB
//               | CLOB              | CLOB
//               | NULL              | NULL
// Not supported | SET               | SET
//               | MULTISET          | MULTISET
//               | SEQUENCE          | SEQUENCE
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_bind(
//    resource $req_identifier,
//    int $bind_index,
//    mixed $bind_value,
//    string $bind_value_type = ?
// ): bool
// ===== CODE
$return_cubrid_bind = cubrid_bind(

$req_identifier, // resource req_identifier - Request identifier as a result of cubrid_prepare().

$bind_index, // int bind_index - Location of binding parameters. It starts with 1.

$bind_value, // mixed bind_value - Actual value for binding.

$bind_value_type // string bind_value_type - A type of the value to bind. (It is omitted by default. Thus, the system internally uses string by default. However, you need to specify the exact type of the value as an argument when they are NCHAR, BIT, or BLOB/CLOB).

); // Return Values
// Returns true on success or false on failure.
// 
// Changelog
// Version - Description
// 8.3.1   - Added BLOB/CLOB data types support.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_bind() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $result = cubrid_execute($conn, "SELECT code FROM event WHERE sports='Basketball' and gender='M'");
// $row = cubrid_fetch_array($result, CUBRID_ASSOC);
// $event_code = $row["code"];
// 
// cubrid_close_request($result);
// 
// $game_req = cubrid_prepare($conn, "SELECT athlete_code FROM game WHERE host_year=1992 and event_code=? and nation_code='USA'");
// cubrid_bind($game_req, 1, $event_code, "number");
// cubrid_execute($game_req);
// 
// printf("--- Dream Team (1992 United States men's Olympic basketball team) ---\n");
// while ($athlete_code = cubrid_fetch_array($game_req, CUBRID_NUM)) {
//     $athlete_req = cubrid_prepare($conn, "SELECT name FROM athlete WHERE code=? AND nation_code='USA' AND event='Basketball' AND gender='M'");
//     cubrid_bind($athlete_req, 1, $athlete_code[0], "number");
//     cubrid_execute($athlete_req);
//     $row = cubrid_fetch_assoc($athlete_req);
//     printf("%s\n", $row["name"]);
// }
// 
// cubrid_close_request($game_req);
// cubrid_close_request($athlete_req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// --- Dream Team (1992 United States men's Olympic basketball team) ---
// Stockton John
// Robinson David
// Pippen Scottie
// Mullin C.
// Malone Karl
// Laettner C.
// Jordan Michael
// Johnson Earvin
// Ewing Patrick
// Drexler Clyde
// Bird Larry
// Barkley Charles
// [/result]
// [/example]
// [example]
// Example #2 cubrid_bind() BLOB/CLOB example
// [php]
// $con = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//     cubrid_execute($con,"DROP TABLE if exists php_cubrid_lob_test");
//     cubrid_execute($con,"CREATE TABLE php_cubrid_lob_test (doc_content CLOB)");
//     $sql = "INSERT INTO php_cubrid_lob_test(doc_content) VALUES(?)"; 
//     $req = cubrid_prepare($con, $sql); 
// 
//     $fp = fopen("book.txt", "rb");
// 
//     cubrid_bind($req, 1, $fp, "clob"); 
//     cubrid_execute($req);  
// }
// [/php]
// [/example]
// [example]
// Example #3 cubrid_bind() BLOB/CLOB example
// [php]
// $con = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//     cubrid_execute($con,"DROP TABLE if exists php_cubrid_lob_test");
//     cubrid_execute($con,"CREATE TABLE php_cubrid_lob_test (image BLOB)");
//     $sql = "INSERT INTO php_cubrid_lob_test(image) VALUES(?)"; 
//     $req = cubrid_prepare($con, $sql); 
// 
//     cubrid_bind($req, 1, "cubrid_logo.png", "blob"); 
//     cubrid_execute($req);  
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/function.cubrid-bind.php
// ========== CUBRID_BIND - END

// SYNTAX:
// bool cubrid_bind(resource $req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type)

return $return_cubrid_bind; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_BIND
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_PREPARE
// ============================== PUBLIC
// ============================== ABOUT
// Close the request handle.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_close_prepare() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_close_prepare($req_identifier)
{
$return_cubrid_close_prepare = false;

// ========== CUBRID_CLOSE_PREPARE - BEGIN
// ===== ABOUT
// Close the request handle
// ===== DESCRIPTION
// The cubrid_close_prepare() function closes the request handle given by the req_identifier argument, and releases the memory region related to the handle. It is an alias of cubrid_close_request().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_close_prepare(resource $req_identifier): bool
// ===== CODE
$return_cubrid_close_prepare = cubrid_close_prepare(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Return true on success.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_close_prepare() example
// [php]
// $con = cubrid_connect ("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//    echo "connected successfully";
//    $req = cubrid_execute ( $con, "select * from members", 
//                            CUBRID_INCLUDE_OID | CUBRID_ASYNC);
//    if ($req) {
//       while ( list ($id, $name) = cubrid_fetch ($req) ){
//          echo $id;
//          echo $name;
//       } 
//       cubrid_close_prepare($req); // or you can use cubrid_close_request($req)
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-16)
// URL: https://www.php.net/manual/en/function.cubrid-close-prepare.php
// ========== CUBRID_CLOSE_PREPARE - END

// SYNTAX:
// bool cubrid_close_prepare(resource $req_identifier)

return $return_cubrid_close_prepare; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_PREPARE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_REQUEST
// ============================== PUBLIC
// ============================== ABOUT
// Close the request handle.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_close_request() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_close_request($req_identifier)
{
$return_cubrid_close_request = false;

// ========== CUBRID_CLOSE_REQUEST - BEGIN
// ===== ABOUT
// Close the request handle
// ===== DESCRIPTION
// The cubrid_close_request() function closes the request handle given by the req_identifier argument, and releases the memory region related to the handle. It is an alias of cubrid_close_prepare().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_close_request(resource $req_identifier): bool
// ===== CODE
$return_cubrid_close_request = cubrid_close_request(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Return true on success.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_close_request() example
// [php]
// $con = cubrid_connect ("localhost", 33000, "demodb", "dba", "");
// if ($con) {
//    echo "connected successfully";
//    $req = cubrid_execute ( $con, "select * from members", 
//                            CUBRID_INCLUDE_OID | CUBRID_ASYNC);
//    if ($req) {
//       while ( list ($id, $name) = cubrid_fetch ($req) ){
//          echo $id;
//          echo $name;
//       } 
//       cubrid_close_request($req); // or you can use cubrid_close_prepare($req)
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-close-request.php
// ========== CUBRID_CLOSE_REQUEST - END

// SYNTAX:
// bool cubrid_close_request(resource $req_identifier)

return $return_cubrid_close_request; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE_REQUEST
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_GET
// ============================== PUBLIC
// ============================== ABOUT
// Get contents of collection type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_col_get() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_col_get($conn_identifier, $oid, $attr_name)
{
$return_cubrid_col_get = null;

// ========== CUBRID_COL_GET - BEGIN
// ===== ABOUT
// Get contents of collection type column using OID
// ===== DESCRIPTION
// The cubrid_col_get() function is used to get contents of the elements of the collection type (set, multiset, sequence) attribute you requested as an array.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_col_get(resource $conn_identifier, string $oid, string $attr_name): array
// ===== CODE
$return_cubrid_col_get = cubrid_col_get(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance that you want to read.

$attr_name // string attr_name - Attribute name that you want to read from the instance.

); // Return Values
// Array (0-based numerical array) containing the elements you requested, when process is successful;
// false (to distinguish the error from the situation of attribute having empty collection or NULL, in case of error, a warning message is shown; in such case you can check the error by using cubrid_error_code()), when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_col_get() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// $size = cubrid_col_size($conn, $oid, "b");
// var_dump($size);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// int(3)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-col-get.php
// ========== CUBRID_COL_GET - END

// SYNTAX:
// array cubrid_col_get(resource $conn_identifier, string $oid, string $attr_name)

return $return_cubrid_col_get; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_GET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Get the number of elements in collection type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_col_size() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_col_size($conn_identifier, $oid, $attr_name)
{
$return_cubrid_col_size = 0;

// ========== CUBRID_COL_SIZE - BEGIN
// ===== ABOUT
// Get the number of elements in collection type column using OID
// ===== DESCRIPTION
// The cubrid_col_size() function is used to get the number of elements in a collection type (set, multiset, sequence) attribute.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_col_size(resource $conn_identifier, string $oid, string $attr_name): int
// ===== CODE
$return_cubrid_col_size = cubrid_col_size(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID the instance that you want to work with.

$attr_name // string attr_name - Name of the attribute that you want to work with.

); // Return Values
// Number of elements, when process is successful, or false on failure.
// 
// Changelog
// Version - Description
// 8.3.1   - Change return value: when process is unsuccessful, return false, not -1.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_col_size() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// $size = cubrid_col_size($conn, $oid, "b");
// var_dump($size);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// int(3)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-col-size.php
// ========== CUBRID_COL_SIZE - END

// SYNTAX:
// int cubrid_col_size(resource $conn_identifier, string $oid, string $attr_name)

return $return_cubrid_col_size; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COL_SIZE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_NAMES
// ============================== PUBLIC
// ============================== ABOUT
// Get the column names in result.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_column_names() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_column_names($req_identifier)
{
$return_cubrid_column_names = null;

// ========== CUBRID_COLUMN_NAMES - BEGIN
// ===== ABOUT
// Get the column names in result
// ===== DESCRIPTION
// The cubrid_column_names() function is used to get the column names of the query result by using req_identifier.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_column_names(resource $req_identifier): array
// ===== CODE
$return_cubrid_column_names = cubrid_column_names(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Array of string values containing the column names, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_column_names() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $column_names = cubrid_column_names($result);
// $column_types = cubrid_column_types($result);
// 
// printf("%-30s %-30s %-15s\n", "Column Names", "Column Types", "Column Maxlen");
// for($i = 0, $size = count($column_names); $i < $size; $i++) {
//     $column_len = cubrid_field_len($result, $i);
//     printf("%-30s %-30s %-15s\n", $column_names[$i], $column_types[$i], $column_len); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Column Names                   Column Types                   Column Maxlen  
// host_year                      integer                        11             
// event_code                     integer                        11             
// athlete_code                   integer                        11             
// stadium_code                   integer                        11             
// nation_code                    char                           3              
// medal                          char                           1              
// game_date                      date                           10             
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-column-names.php
// ========== CUBRID_COLUMN_NAMES - END

// SYNTAX:
// array cubrid_column_names(resource $req_identifier)

return $return_cubrid_column_names; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_NAMES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_TYPES
// ============================== PUBLIC
// ============================== ABOUT
// Get column types in result.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_column_types() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_column_types($req_identifier)
{
$return_cubrid_column_types = null;

// ========== CUBRID_COLUMN_TYPES - BEGIN
// ===== ABOUT
// Get column types in result
// ===== DESCRIPTION
// The cubrid_column_types() function gets column types of query results by using req_identifier.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_column_types(resource $req_identifier): array
// ===== CODE
$return_cubrid_column_types = cubrid_column_types(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Array of string values containing the column types, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_column_types() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $column_names = cubrid_column_names($result);
// $column_types = cubrid_column_types($result);
// 
// printf("%-30s %-30s %-15s\n", "Column Names", "Column Types", "Column Maxlen");
// for($i = 0, $size = count($column_names); $i < $size; $i++) {
//     $column_len = cubrid_field_len($result, $i);
//     printf("%-30s %-30s %-15s\n", $column_names[$i], $column_types[$i], $column_len); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Column Names                   Column Types                   Column Maxlen  
// host_year                      integer                        11             
// event_code                     integer                        11             
// athlete_code                   integer                        11             
// stadium_code                   integer                        11             
// nation_code                    char                           3              
// medal                          char                           1              
// game_date                      date                           10             
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-column-types.php
// ========== CUBRID_COLUMN_TYPES - END

// SYNTAX:
// array cubrid_column_types(resource $req_identifier)

return $return_cubrid_column_types; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COLUMN_TYPES
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Commit a transaction.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_commit() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_commit($conn_identifier)
{
$return_cubrid_commit = false;

// ========== CUBRID_COMMIT - BEGIN
// ===== ABOUT
// Commit a transaction
// ===== DESCRIPTION
// The cubrid_commit() function is used to execute commit on the transaction pointed by conn_identifier, currently in progress. Connection to the server is closed after the cubrid_commit() function is called; However, the connection handle is still valid.
// In CUBRID PHP, auto-commit mode is disabled by default for transaction management. You can set it by using cubrid_set_autocommit(). You can get its status by using cubrid_get_autocommit(). Before you start a transaction, remember to disable the auto-commit mode.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_commit(resource $conn_identifier): bool
// ===== CODE
$return_cubrid_commit = cubrid_commit(

$conn_identifier // resource conn_identifier - Connection identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_commit() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba"// );
// 
// @cubrid_execute($conn, "DROP TABLE publishers");
// 
// $sql = <<<EOD
// CREATE TABLE publishers(
// pub_id CHAR(3), 
// pub_name VARCHAR(20), 
// city VARCHAR(15), 
// state CHAR(2), 
// country VARCHAR(15)
// )
// EOD;
// cubrid_set_autocommit($conn,false);
// if (!cubrid_execute($conn, $sql)) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// 
// $req = cubrid_prepare($conn, "INSERT INTO publishers VALUES(?, ?, ?, ?, ?)");
// 
// $id_list = array("P01", "P02", "P03", "P04");
// $name_list = array("Abatis Publishers", "Core Dump Books", "Schadenfreude Press", "Tenterhooks Press");
// $city_list = array("New York", "San Francisco", "Hamburg", "Berkeley");
// $state_list = array("NY", "CA", NULL, "CA");
// $country_list = array("USA", "USA", "Germany", "USA");
// 
// for ($i = 0, $size = count($id_list); $i < $size; $i++) {
//     cubrid_bind($req, 1, $id_list[$i]);
//     cubrid_bind($req, 2, $name_list[$i]);
//     cubrid_bind($req, 3, $city_list[$i]);
//     cubrid_bind($req, 4, $state_list[$i]);
//     cubrid_bind($req, 5, $country_list[$i]);
// 
//     if (!($ret = cubrid_execute($req))) {
//         break;
//     }
// }
// 
// if (!$ret) {
//     cubrid_rollback($conn);
// } else {
//     cubrid_commit($conn);
// 
//     $req = cubrid_execute($conn, "SELECT * FROM publishers");
//     while ($result = cubrid_fetch_assoc($req)) {
//         printf("%-3s %-20s %-15s %-3s %-15s\n", 
//             $result["pub_id"], $result["pub_name"], $result["city"], $result["state"], $result["country"]);
//     }
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// P01 Abatis Publishers    New York        NY  USA            
// P02 Core Dump Books      San Francisco   CA  USA            
// P03 Schadenfreude Press  Hamburg             Germany        
// P04 Tenterhooks Press    Berkeley        CA  USA            
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-commit.php
// ========== CUBRID_COMMIT - END

// SYNTAX:
// bool cubrid_commit(resource $conn_identifier)

return $return_cubrid_commit; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_COMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT_WITH_URL
// ============================== PUBLIC
// ============================== ABOUT
// Establish the environment for connecting to CUBRID server.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_connect_with_url() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_connect_with_url($conn_url, $userid, $passwd, $new_link = false)
{
$return_cubrid_connect_with_url = null;

// ========== CUBRID_CONNECT_WITH_URL - BEGIN
// ===== ABOUT
// Establish the environment for connecting to CUBRID server
// ===== DESCRIPTION
// The cubrid_connect_with_url() function is used to establish the environment for connecting to your server by using connection information passed with an url string argument. If the HA feature is enabled in CUBRID, you must specify the connection information of the standby server, which is used for failover when failure occurs, in the url string argument of this function. If the user name and password is not given, then the "PUBLIC" connection will be made by default.
// <url> ::= CUBRID:<host>:<db_name>:<db_user>:<db_password>:[?<properties>]
// <properties> ::= <property> [&<property>]
// <properties> ::= alhosts=<alternative_hosts>[ &rctime=<time>]
// <properties> ::= login_timeout=<milli_sec>
// <properties> ::= query_timeout=<milli_sec>
// <properties> ::= disconnect_on_query_timeout=true|false
// <alternative_hosts> ::= <standby_broker1_host>:<port> [,<standby_broker2_host>:<port>]
// <host> := HOSTNAME | IP_ADDR
// <time> := SECOND
// <milli_sec> := MILLI SECOND
// * host : A host name or IP address of the master database
// * db_name : A name of the database
// * db_user : A name of the database user
// * db_password : A database user password
// * alhosts : Specifies the broker information of the standby server, which is used for failover when it is impossible to connect to the active server. You can specify multiple brokers for failover, and the connection to the brokers is attempted in the order listed in alhosts
// * rctime : An interval between the attempts to connect to the active broker in which failure occurred. After a failure occurs, the system connects to the broker specified by althosts (failover), terminates the transaction, and then attempts to connect to the active broker of the master database at every rctime. The default value is 600 seconds.
// * login_timeout : Timeout value (unit: msec.) for database login. The default value is 0, which means infinite postponement.
// * query_timeout : Timeout value (unit: msec.) for query request. Upon timeout, a message to cancel requesting a query transferred to server is sent. The return value can depend on the disconnect_on_query_timeout configuration; even though the message to cancel a request is sent to server, that request may succeed.
// * disconnect_on_query_timeout : Configures a value whether to immediately return an error of function being executed upon timeout. The default value is false.
//  Note: ? and : that are used as identifiers in PHP connection URL can't be included in the password. The following is an example of a password that is invalid to use as connection URL because it contains "?:".
//  [code]
//  $url = "CUBRID:localhost:33000:tdb:dba:12?:?login_timeout=100";
//  [/code]
//  Passwords that contain ? or : may be passed as a separate parameter.
//  [code]
//  $url = "CUBRID:localhost:33000:tbd:::?login_timeout=100";
//  $conn = cubrid_connect_with_url($url, "dba", "12?");
//  [/code]
//  If user or password is empty,you can't delete ":",the following is an example.
//  [code]
//  $url = "CUBRID:localhost:33000:demodb:::";
//  [/code]
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_connect_with_url(
//    string $conn_url,
//    string $userid = ?,
//    string $passwd = ?,
//    bool $new_link = false
// ): resource
// ===== CODE
$return_cubrid_connect_with_url = cubrid_connect_with_url(

$conn_url, // string conn_url - A character string that contains server connection information.

$userid, // string userid - User name for the database.

$passwd, // string passwd - User password.

$new_link // bool new_link - If a second call is made to cubrid_connect_with_url() with the same arguments, no new connection will be established, but instead, the connection identifier of the already opened connection will be returned. The new_link parameter modifies this behavior and makes cubrid_connect_with_url() always open a new connection, even if cubrid_connect_with_url() was called before with the same parameters.

); // Return Values
// Connection identifier, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_connect_with_url() url without properties example
// [php]
// $conn_url = "CUBRID:localhost:33000:demodb:dba::";
// $con = cubrid_connect_with_url($conn_url);
// 
// if ($con) {
//    echo "connected successfully";
//    cubrid_execute($con, "create table person(id int,name char(16))");
//    $req =cubrid_execute($con, "insert into person values(1,'James')");
// 
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [example]
// Example #2 cubrid_connect_with_url() url with properties example
// [php]
// $conn_url = "CUBRID:127.0.0.1:33000:demodb:dba::?login_timeout=100";
// $con = cubrid_connect_with_url ($conn_url);
// 
// if ($con) {
//    echo "connected successfully";
//    cubrid_execute($con, "create table person(id int,name char(16))");
//    $req =cubrid_execute($con, "insert into person values(1,'James')");
// 
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-connect-with-url.php
// ========== CUBRID_CONNECT_WITH_URL - END

// SYNTAX:
// resource cubrid_connect_with_url(string $conn_url, string $userid, string $passwd, bool $new_link = false)

return $return_cubrid_connect_with_url; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT_WITH_URL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Open a connection to a CUBRID Server.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_connect() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_connect($host, $port, $dbname, $userid, $passwd, $new_link = false)
{
$return_cubrid_connect = null;

// ========== CUBRID_CONNECT - BEGIN
// ===== ABOUT
// Open a connection to a CUBRID Server
// ===== DESCRIPTION
// The cubrid_connect() function is used to establish the environment for connecting to your server by using your server address, port number, database name, user name, and password. If the user name and password is not given, then the "PUBLIC" connection will be made by default.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_connect(
//    string $host,
//    int $port,
//    string $dbname,
//    string $userid = ?,
//    string $passwd = ?,
//    bool $new_link = false
// ): resource
// ===== CODE
$return_cubrid_connect = cubrid_connect(

$host, // string host - Host name or IP address of CUBRID CAS server.

$port, // int port - Port number of CUBRID CAS server (BROKER_PORT configured in $CUBRID/conf/cubrid_broker.conf).

$dbname, // string dbname - Name of database.

$userid, // string userid - User name for the database. If not given, the default value is "public".

$passwd, // string passwd - User password. If not given, the default value is "".

$new_link // bool new_link - If a second call is made to cubrid_connect() with the same arguments, no new connection will be established, but instead, the connection identifier of the already opened connection will be returned. The new_link parameter modifies this behavior and makes cubrid_connect() always open a new connection, even if cubrid_connect() was called before with the same parameters.

); // Return Values
// Connection identifier, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_connect() example
// [php]
// printf("%-30s %s\n", "CUBRID PHP Version:", cubrid_version());
// 
// printf("\n");
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// if (!$conn) {
//     die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
// }
// 
// $db_params = cubrid_get_db_parameter($conn);
// 
// while (list($param_name, $param_value) = each($db_params)) {
//     printf("%-30s %s\n", $param_name, $param_value);
// }
// 
// printf("\n");
// 
// $server_info = cubrid_get_server_info($conn);
// $client_info = cubrid_get_client_info();
// 
// printf("%-30s %s\n", "Server Info:", $server_info);
// printf("%-30s %s\n", "Client Info:", $client_info);
// 
// printf("\n");
// 
// $charset = cubrid_get_charset($conn);
// 
// printf("%-30s %s\n", "CUBRID Charset:", $charset);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// CUBRID PHP Version:            9.1.0.0001
// 
// PARAM_ISOLATION_LEVEL          3
// LOCK_TIMEOUT                   -1
// MAX_STRING_LENGTH              1073741823
// PARAM_AUTO_COMMIT              1
// 
// Server Info:                   9.1.0.0212
// Client Info:                   9.1.0
// 
// CUBRID Charset:                iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-connect.php
// ========== CUBRID_CONNECT - END

// SYNTAX:
// resource cubrid_connect(string $host, int $port, string $dbname, string $userid, string $passwd, bool $new_link = false)

return $return_cubrid_connect; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CURRENT_OID
// ============================== PUBLIC
// ============================== ABOUT
// Get OID of the current cursor location.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_current_oid() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_current_oid($req_identifier)
{
$return_cubrid_current_oid = null;

// ========== CUBRID_CURRENT_OID - BEGIN
// ===== ABOUT
// Get OID of the current cursor location
// ===== DESCRIPTION
// The cubrid_current_oid() function is used to get the oid of the current cursor location from the query result. To use cubrid_current_oid(), the query executed must be a updatable query, and the CUBRID_INCLUDE_OID option must be included during the query execution.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_current_oid(resource $req_identifier): string
// ===== CODE
$return_cubrid_current_oid = cubrid_current_oid(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Oid of current cursor location, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_current_oid() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code", CUBRID_INCLUDE_OID);
// $oid = cubrid_current_oid($req);
// $res = cubrid_get($conn, $oid);
// 
// print_r($res);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [s_name] => X
//     [f_name] => Mixed
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-current-oid.php
// ========== CUBRID_CURRENT_OID - END

// SYNTAX:
// string cubrid_current_oid(resource $req_identifier)

return $return_cubrid_current_oid; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CURRENT_OID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DISCONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Close a database connection.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_disconnect() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_disconnect($conn_identifier)
{
$return_cubrid_disconnect = false;

// ========== CUBRID_DISCONNECT - BEGIN
// ===== ABOUT
// Close a database connection
// ===== DESCRIPTION
// The cubrid_disconnect() function closes the connection handle and disconnects from server. If any request handle is not closed at this point, it will be closed. It is similar to the CUBRID MySQL compatible function cubrid_close().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_disconnect(resource $conn_identifier = ?): bool
// ===== CODE
$return_cubrid_disconnect = cubrid_disconnect(

$conn_identifier // resource conn_identifier - Connection identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_disconnect() example
// [php]
// $con = cubrid_connect ("localhost", 33000, "demodb");
// if ($con) {
//    echo "connected successfully";
//    
//    $req = cubrid_execute( $con, "create table person(id int,name char(10))");
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    
//    $req = cubrid_execute( $con, "insert into person values(1,'James')");
//    if ($req) {
//       cubrid_close_request($req);
//       cubrid_commit($con);
//    } else {
//       cubrid_rollback($con);
//    }
//    cubrid_disconnect($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-disconnect.php
// ========== CUBRID_DISCONNECT - END

// SYNTAX:
// bool cubrid_disconnect(resource $conn_identifier)

return $return_cubrid_disconnect; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DISCONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DROP
// ============================== PUBLIC
// ============================== ABOUT
// Delete an instance using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_drop($conn_identifier, $oid)
{
$return_cubrid_drop = false;

// ========== CUBRID_DROP - BEGIN
// ===== ABOUT
// Delete an instance using OID
// ===== DESCRIPTION
// The cubrid_drop() function is used to delete an instance from database by using the oid of the instance.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_drop(resource $conn_identifier, string $oid): bool
// ===== CODE
$return_cubrid_drop = cubrid_drop(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid // string oid - Oid of the instance that you want to delete.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_drop() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// printf("--- Before Drop: ---\n");
// $attr = cubrid_get($conn, $oid);
// var_dump($attr);
// 
// if (cubrid_drop($conn, $oid)) {
//     cubrid_commit($conn);
// } else {
//     cubrid_rollback($conn);
// }
// 
// cubrid_close_request($req);
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// printf("\n--- After Drop: ---\n");
// $attr = cubrid_get($conn, $oid);
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// --- Before Drop: ---
// array(4) {
//   ["a"]=>
//   string(1) "1"
//   ["b"]=>
//   array(3) {
//     [0]=>
//     string(1) "1"
//     [1]=>
//     string(1) "2"
//     [2]=>
//     string(1) "3"
//   }
//   ["c"]=>
//   array(4) {
//     [0]=>
//     string(2) "11"
//     [1]=>
//     string(2) "22"
//     [2]=>
//     string(2) "33"
//     [3]=>
//     string(3) "333"
//   }
//   ["d"]=>
//   string(10) "a         "
// }
// 
// --- After Drop: ---
// array(4) {
//   ["a"]=>
//   string(1) "2"
//   ["b"]=>
//   array(3) {
//     [0]=>
//     string(1) "4"
//     [1]=>
//     string(1) "5"
//     [2]=>
//     string(1) "7"
//   }
//   ["c"]=>
//   array(4) {
//     [0]=>
//     string(2) "44"
//     [1]=>
//     string(2) "55"
//     [2]=>
//     string(2) "66"
//     [3]=>
//     string(3) "666"
//   }
//   ["d"]=>
//   string(10) "b         "
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-drop.php
// ========== CUBRID_DROP - END

// SYNTAX:
// bool cubrid_drop(resource $conn_identifier, string $oid)

return $return_cubrid_drop; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DROP
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE_FACILITY
// ============================== PUBLIC
// ============================== ABOUT
// Get the facility code of error.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_error_code_facility() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_error_code_facility()
{
$return_cubrid_error_code_facility = 0;

// ========== CUBRID_ERROR_CODE_FACILITY - BEGIN
// ===== ABOUT
// Get the facility code of error
// ===== DESCRIPTION
// The cubrid_error_code_facility() function is used to get the facility code (level in which the error occurred) from the error code of the error that occurred during the API execution. Usually, you can get the error code when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_error_code_facility(): int
// ===== CODE
$return_cubrid_error_code_facility = cubrid_error_code_facility(

// This function has no parameters.

); // Return Values
// Facility code of the error code that occurred: CUBRID_FACILITY_DBMS, CUBRID_FACILITY_CAS, CUBRID_FACILITY_CCI, CUBRID_FACILITY_CLIENT.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_error_code_facility() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = @cubrid_execute($conn, "SELECT * FROM unknown");
// if (!$req) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", 
//         cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// [/php]
// The above example will output:
// [result]
// Error facility: 1
// Error code: -493
// Error msg: Syntax: In line 1, column 15 before END OF STATEMENT
// Syntax error: unexpected 'unknown'
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-error-code-facility.php
// ========== CUBRID_ERROR_CODE_FACILITY - END

// SYNTAX:
// int cubrid_error_code_facility()

return $return_cubrid_error_code_facility; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE_FACILITY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE
// ============================== PUBLIC
// ============================== ABOUT
// Get error code for the most recent function call.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_error_code() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_error_code()
{
$return_cubrid_error_code = 0;

// ========== CUBRID_ERROR_CODE - BEGIN
// ===== ABOUT
// Get error code for the most recent function call
// ===== DESCRIPTION
// The cubrid_error_code() function is used to get the error code of the error that occurred during the API execution. Usually, it gets the error code when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_error_code(): int
// ===== CODE
$return_cubrid_error_code = cubrid_error_code(

// This function has no parameters.

); // Return Values
// Error code of the error that occurred, or 0 (zero) if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_error_code() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_prepare($conn , "SELECT * FROM code WHERE s_name=?");
// 
// $req = @cubrid_execute($req);
// if (!$req) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", 
//         cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// [/php]
// The above example will output:
// [result]
// Error facility: 4
// Error code: -30015
// Error msg: Some parameter not binded
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-error-code.php
// ========== CUBRID_ERROR_CODE - END

// SYNTAX:
// int cubrid_error_code()

return $return_cubrid_error_code; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_CODE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_MSG
// ============================== PUBLIC
// ============================== ABOUT
// Get last error message for the most recent function call.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_error_msg() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_error_msg()
{
$return_cubrid_error_msg = null;

// ========== CUBRID_ERROR_MSG - BEGIN
// ===== ABOUT
// Get last error message for the most recent function call
// ===== DESCRIPTION
// The cubrid_error_msg() function is used to get the error message that occurred during the use of CUBRID API. Usually, it gets error message when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_error_msg(): string
// ===== CODE
$return_cubrid_error_msg = cubrid_error_msg(

// This function has no parameters.

); // Return Values
// Error message that occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_error_msg() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// if (!@cubrid_schema($conn, 100000)) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", 
//         cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// [/php]
// The above example will output:
// [result]
// Error facility: 2
// Error code: -10015
// Error msg: Invalid T_CCI_SCH_TYPE value
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-error-msg.php
// ========== CUBRID_ERROR_MSG - END

// SYNTAX:
// string cubrid_error_msg()

return $return_cubrid_error_msg; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR_MSG
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_EXECUTE
// ============================== PUBLIC
// ============================== ABOUT
// Execute a prepared SQL statement.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_execute() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_execute($conn_identifier, $sql, $option = 0)
{
$return_cubrid_execute = null;

// ========== CUBRID_EXECUTE - BEGIN
// ===== ABOUT
// Execute a prepared SQL statement
// ===== DESCRIPTION
// The cubrid_execute() function is used to execute the given SQL statement. It executes the query by using conn_identifier and SQL, and then returns the request identifier created. It is used for simple execution of query, where the parameter binding is not needed. In addition, the cubrid_execute() function is used to execute the prepared statement by means of cubrid_prepare() and cubrid_bind(). At this time, you need to specify arguments of request_identifier and option.
// The option is used to determine whether to get OID after query execution and whether to execute the query in synchronous or asynchronous mode. CUBRID_INCLUDE_OID and CUBRID_ASYNC (or CUBRID_EXEC_QUERY_ALL if you want to execute multiple SQL statements) can be specified by using a bitwise OR operator. If not specified, neither of them isselected. If the flag CUBRID_EXEC_QUERY_ALL is set, a synchronous mode (sync_mode) is used to retrieve query results, and in such cases the following rules are applied:
//  * The return value is the result of the first query.
//  * If an error occurs in any query, the execution is processed as a failure.
//  * In a query composed of q1 q2 q3, if an error occurs in q2 after q1 succeeds the execution, the result of q1 remains valid. That is, the previous successful query executions are not rolled back when an error occurs.
//  * If a query is executed successfully, the result of the second query can be obtained using cubrid_next_result().
// If the first argument is request_identifier to execute the cubrid_prepare() function, you can specify an option, CUBRID_ASYNC only.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_execute(resource $conn_identifier, string $sql, int $option = 0): resource
// 
// cubrid_execute(resource $request_identifier, int $option = 0): bool
// ===== CODE
$return_cubrid_execute = cubrid_execute(

$conn_identifier, // resource conn_identifier - Connection identifier.

$sql, // string sql - SQL to be executed.

$option // int option - Query execution option CUBRID_INCLUDE_OID, CUBRID_ASYNC, CUBRID_EXEC_QUERY_ALL.

// resource request_identifier - cubrid_prepare() identifier.

); // Return Values
// Request identifier, when process is successful and first param is conn_identifier; true, when process is successful and first argument is request_identifier, or false on failure.
// 
// Changelog
// Version - Description
// 8.4.0   - Add new option CUBRID_EXEC_QUERY_ALL.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_execute() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $result = cubrid_execute($conn, "SELECT code FROM event WHERE name='100m Butterfly' and gender='M'", CUBRID_ASYNC);
// $row = cubrid_fetch_array($result, CUBRID_ASSOC);
// $event_code = $row["code"];
// 
// cubrid_close_request($result);
// 
// $history_req = cubrid_prepare($conn, "SELECT * FROM history WHERE event_code=?");
// cubrid_bind($history_req, 1, $event_code, "number");
// cubrid_execute($history_req);
// 
// printf("%-20s %-9s %-10s %-5s\n", "athlete", "host_year", "score", "unit");
// while ($row = cubrid_fetch_array($history_req, CUBRID_ASSOC)) {
//     printf("%-20s %-9s %-10s %-5s\n", 
//         $row["athlete"], $row["host_year"], $row["score"], $row["unit"]);
// }
// 
// cubrid_close_request($history_req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// athlete              host_year score      unit 
// Phelps Michael       2004      51.25      time 
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-execute.php
// ========== CUBRID_EXECUTE - END

// SYNTAX:
// resource cubrid_execute(resource $conn_identifier, string $sql, int $option = 0)

return $return_cubrid_execute; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_EXECUTE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the next row from a result set.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_fetch() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== USING CONSTANTS (1)
// CUBRID_BOTH - cubrid_fetch()
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch($result, $type = CUBRID_BOTH)
{
$return_cubrid_fetch = null;

// ========== CUBRID_FETCH - BEGIN
// ===== ABOUT
// Fetch the next row from a result set
// ===== DESCRIPTION
// The cubrid_fetch() function is used to get a single row from the query result. The cursor automatically moves to the next row after getting the result.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_fetch(resource $result, int $type = CUBRID_BOTH): mixed
// ===== CODE
$return_cubrid_fetch = cubrid_fetch(

$result, // resource result - result comes from a call to cubrid_execute()

$type // int type - Array type of the fetched result CUBRID_NUM, CUBRID_ASSOC, CUBRID_BOTH, CUBRID_OBJECT. If you want to operate the lob object, you can use CUBRID_LOB.

); // Return Values
// Result array or object, when process is successful.
// false, when there are no more rows; NULL, when process is unsuccessful.
// The result can be received either as an array or as an object, and you can decide which data type to use by setting the type argument. The type variable can be set to one of the following values:
// * CUBRID_NUM : Numerical array (0-based)
// * CUBRID_ASSOC : Associative array
// * CUBRID_BOTH : Numerical & Associative array (default)
// * CUBRID_OBJECT : object that has the attribute name as the column name of query result
// When type argument is omitted, the result will be received using CUBRID_BOTH option as default. When you want to receive query result in object data type, the column name of the result must obey the naming rules for identifiers in PHP. For example, column name such as "count(*)" cannot be received in object type.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_execute($conn, "SELECT * FROM stadium WHERE nation_code='GRE' AND seats > 10000");
// 
// printf("%-40s %-10s %-6s %-20s\n", "name", "area", "seats", "address");
// while ($row = cubrid_fetch($req)) {
//     printf("%-40s %-10s %-6s %-20s\n", 
//         $row["name"], $row["area"], $row["seats"], $row["address"]);
// }
// 
// // if you want to operate lob object, you can use cubrid_fetch($req, CUBRID_LOB)
// 
// cubrid_close_request($req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// name                                     area       seats  address             
// Panathinaiko Stadium                     86300.00   50000  Athens, Greece      
// Olympic Stadium                          54700.00   13000  Athens, Greece      
// Olympic Indoor Hall                      34100.00   18800  Athens, Greece      
// Olympic Hall                             52400.00   21000  Athens, Greece      
// Olympic Aquatic Centre                   42500.00   11500  Athens, Greece      
// Markopoulo Olympic Equestrian Centre     64000.00   15000  Markopoulo, Athens, Greece
// Faliro Coastal Zone Olympic Complex      34650.00   12171  Faliro, Athens, Greece
// Athens Olympic Stadium                   120400.00  71030  Maroussi, Athens, Greece 
// Ano Liossia                              34000.00   12000  Ano Liosia, Athens, Greece
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-17)
// URL: https://www.php.net/manual/en/function.cubrid-fetch.php
// ========== CUBRID_FETCH - END

// SYNTAX:
// mixed cubrid_fetch(resource $result, int $type = CUBRID_BOTH)

return $return_cubrid_fetch; // mixed
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FREE_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Free the memory occupied by the result data.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_free_result() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_free_result($req_identifier)
{
$return_cubrid_free_result = false;

// ========== CUBRID_FREE_RESULT - BEGIN
// ===== ABOUT
// Free the memory occupied by the result data
// ===== DESCRIPTION
// This function frees the memory occupied by the result data. It returns true on success or false on failure. Note that it can only frees the client fetch buffer now, and if you want free all memory, use function cubrid_close_request().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_free_result(resource $req_identifier): bool
// ===== CODE
$return_cubrid_free_result = cubrid_free_result(

$req_identifier // resource req_identifier - This is the request identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_free_result() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $req = cubrid_execute($conn, "SELECT * FROM history WHERE host_year=2004 ORDER BY event_code");
// $row = cubrid_fetch_assoc($req);
// var_dump($row);
// 
// cubrid_free_result($req);
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(5) {
//   ["event_code"]=>
//   string(5) "20005"
//   ["athlete"]=>
//   string(12) "Hayes Joanna"
//   ["host_year"]=>
//   string(4) "2004"
//   ["score"]=>
//   string(5) "12.37"
//   ["unit"]=>
//   string(4) "time"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-18)
// URL: https://www.php.net/manual/en/function.cubrid-free-result.php
// ========== CUBRID_FREE_RESULT - END

// SYNTAX:
// bool cubrid_free_result(resource $req_identifier)

return $return_cubrid_free_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FREE_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_AUTOCOMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Get auto-commit mode of the connection.
// ============================== SUPPORT
// PECL_CUBRID_8_4_0
// ============================== USING FUNCTIONS (1)
// cubrid_get_autocommit() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_autocommit($conn_identifier)
{
$return_cubrid_get_autocommit = false;

// ========== CUBRID_GET_AUTOCOMMIT - BEGIN
// ===== ABOUT
// Get auto-commit mode of the connection
// ===== DESCRIPTION
// The cubrid_get_autocommit() function is used to get the status of CUBRID database connection auto-commit mode.
// For CUBRID 8.4.0, auto-commit mode is disabled by default for transaction management.
// For CUBRID 8.4.1, auto-commit mode is enabled by default for transaction management.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_0
// ===== SYNTAX
// cubrid_get_autocommit(resource $conn_identifier): bool
// ===== CODE
$return_cubrid_get_autocommit = cubrid_get_autocommit(

$conn_identifier // resource conn_identifier - Connection identifier.

); // Return Values
// true, when auto-commit is on.
// false, when auto-commit is off.
// null on error.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-02-18)
// URL: https://www.php.net/manual/en/function.cubrid-get-autocommit.php
// ========== CUBRID_GET_AUTOCOMMIT - END

// SYNTAX:
// bool cubrid_get_autocommit(resource $conn_identifier)

return $return_cubrid_get_autocommit; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_AUTOCOMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CHARSET
// ============================== PUBLIC
// ============================== ABOUT
// Return the current CUBRID connection charset.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_get_charset() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_charset($conn_identifier)
{
$return_cubrid_get_charset = null;

// ========== CUBRID_GET_CHARSET - BEGIN
// ===== ABOUT
// Return the current CUBRID connection charset
// ===== DESCRIPTION
// This function returns the current CUBRID connection charset and is similar to the CUBRID MySQL compatible function cubrid_client_encoding().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_get_charset(resource $conn_identifier): string
// ===== CODE
$return_cubrid_get_charset = cubrid_get_charset(

$conn_identifier // resource conn_identifier - The CUBRID connection.

); // Return Values
// A string that represents the CUBRID connection charset on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get_charset() example
// [php]
// 
// $con = cubrid_connect("localhost", 33000, "demodb");
// if (!$con)
// {
//     die('Could not connect.');
// }
// 
// printf("CUBRID current charset: %s\n", cubrid_get_charset($con));
// 
// [/php]
// The above example will output:
// [result]
// CUBRID current charset: iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-get-charset.php
// ========== CUBRID_GET_CHARSET - END

// SYNTAX:
// string cubrid_get_charset(resource $conn_identifier)

return $return_cubrid_get_charset; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CHARSET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CLASS_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Get the class name using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_get_class_name() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_class_name($conn_identifier, $oid)
{
$return_cubrid_get_class_name = null;

// ========== CUBRID_GET_CLASS_NAME - BEGIN
// ===== ABOUT
// Get the class name using OID
// ===== DESCRIPTION
// The cubrid_get_class_name() function is used to get the class name from oid. It doesn't work when selecting data from the system tables, for example db_class.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_get_class_name(resource $conn_identifier, string $oid): string
// ===== CODE
$return_cubrid_get_class_name = cubrid_get_class_name(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid // string oid - OID of the instance that you want to check the existence.

); // Return Values
// Class name when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get_class_name() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code", CUBRID_INCLUDE_OID);
// $oid = cubrid_current_oid($req);
// $class_name = cubrid_get_class_name($conn, $oid);
// 
// print_r($class_name);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// code
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-get-class-name.php
// ========== CUBRID_GET_CLASS_NAME - END

// SYNTAX:
// string cubrid_get_class_name(resource $conn_identifier, string $oid)

return $return_cubrid_get_class_name; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CLASS_NAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CLIENT_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Return the client library version.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_get_client_info() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_client_info()
{
$return_cubrid_get_client_info = null;

// ========== CUBRID_GET_CLIENT_INFO - BEGIN
// ===== ABOUT
// Return the client library version
// ===== DESCRIPTION
// This function returns a string that represents the client library version.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_get_client_info(): string
// ===== CODE
$return_cubrid_get_client_info = cubrid_get_client_info(
); // Return Values
// A string that represents the client library version on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get_client_info() example
// [php]
// printf("%-30s %s\n", "CUBRID PHP Version:", cubrid_version());
// 
// printf("\n");
// 
// $conn = cubrid_connect("localhost", 33088, "demodb");
// 
// if (!$conn) {
//     die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
// }
// 
// $db_params = cubrid_get_db_parameter($conn);
// 
// while (list($param_name, $param_value) = each($db_params)) {
//     printf("%-30s %s\n", $param_name, $param_value);
// }
// 
// printf("\n");
// 
// $server_info = cubrid_get_server_info($conn);
// $client_info = cubrid_get_client_info();
// 
// printf("%-30s %s\n", "Server Info:", $server_info);
// printf("%-30s %s\n", "Client Info:", $client_info);
// 
// printf("\n");
// 
// $charset = cubrid_get_charset($conn);
// 
// printf("%-30s %s\n", "CUBRID Charset:", $charset);
// 
// cubrid_disconnect($conn);
// 
// [/php]
// The above example will output:
// [result]
// CUBRID PHP Version:            9.1.0.0001
// 
// PARAM_ISOLATION_LEVEL          3
// LOCK_TIMEOUT                   -1
// MAX_STRING_LENGTH              1073741823
// PARAM_AUTO_COMMIT              1
// 
// Server Info:                   9.1.0.0212
// Client Info:                   9.1.0
// 
// CUBRID Charset:                iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-get-client-info.php
// ========== CUBRID_GET_CLIENT_INFO - END

// SYNTAX:
// string cubrid_get_client_info()

return $return_cubrid_get_client_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_CLIENT_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_DB_PARAMETER
// ============================== PUBLIC
// ============================== ABOUT
// Returns the CUBRID database parameters.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_get_db_parameter() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_db_parameter($conn_identifier)
{
$return_cubrid_get_db_parameter = null;

// ========== CUBRID_GET_DB_PARAMETER - BEGIN
// ===== ABOUT
// Returns the CUBRID database parameters
// ===== DESCRIPTION
// This function returns the CUBRID database parameters, or false on failure. It returns an associative array with the values for the following parameters:
// * PARAM_ISOLATION_LEVEL
// * PARAM_LOCK_TIMEOUT
// * PARAM_MAX_STRING_LENGTH
// * PARAM_AUTO_COMMIT
// 
// Database parameters
// Parameter             - Description
// PARAM_ISOLATION_LEVEL - The transaction isolation level.
// LOCK_TIMEOUT          - CUBRID provides the lock timeout feature, which sets the waiting time (in seconds) for the lock until the transaction lock setting is allowed. The default value of the lock_timeout_in_secs parameter is -1, which means the application client will wait indefinitely until the transaction lock is allowed.
// PARAM_AUTO_COMMIT     - In CUBRID PHP, auto-commit mode is disabled by default for transaction management. It can be set by using cubrid_set_autocommit().
// 
// The following table shows the isolation levels from 1 to 6. It consists of table schema (row) and isolation level:
// 
// Levels of Isolation Supported by CUBRID
// Name                                                                          - Description
// SERIALIZABLE (6)                                                              - In this isolation level, problems concerning concurrency (e.g. dirty read, non-repeatable read, phantom read, etc.) do not occur.
// REPEATABLE READ CLASS with REPEATABLE READ INSTANCES (5)                      - Another transaction T2 cannot update the schema of table A while transaction T1 is viewing table A. Transaction T1 may experience phantom read for the record R that was inserted by another transaction T2 when it is repeatedly retrieving a specific record.
// REPEATABLE READ CLASS with READ COMMITTED INSTANCES (or CURSOR STABILITY) (4) - Another transaction T2 cannot update the schema of table A while transaction T1 is viewing table A. Transaction T1 may experience R read (non-repeatable read) that was updated and committed by another transaction T2 when it is repeatedly retrieving the record R.
// REPEATABLE READ CLASS with READ UNCOMMITTED INSTANCES (3)                     - Default isolation level. Another transaction T2 cannot update the schema of table A while transaction T1 is viewing table A. Transaction T1 may experience R' read (dirty read) for the record that was updated but not committed by another transaction T2.
// READ COMMITTED CLASS with READ COMMITTED INSTANCES (2)                        - Transaction T1 may experience A' read (non-repeatable read) for the table that was updated and committed by another transaction T2 while it is viewing table A repeatedly. Transaction T1 may experience R' read (non-repeatable read) for the record that was updated and committed by another transaction T2 while it is retrieving the record R repeatedly.
// READ COMMITTED CLASS with READ UNCOMMITTED INSTANCES (1)                      - Transaction T1 may experience A' read (non-repeatable read) for the table that was updated and committed by another transaction T2 while it is repeatedly viewing table A. Transaction T1 may experience R' read (dirty read) for the record that was updated but not committed by another transaction T2.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_get_db_parameter(resource $conn_identifier): array
// ===== CODE
$return_cubrid_get_db_parameter = cubrid_get_db_parameter(

$conn_identifier // resource conn_identifier - The CUBRID connection. If the connection identifier is not specified, the last link opened by cubrid_connect() is assumed.

); // Return Values
// An associative array with CUBRID database parameters; on success, or false on failure.
// 
// Changelog
// Version - Description
// 8.4.0   - Change LOCK_TIMEOUT to PARAM_LOCK_TIMEOUT, and MAX_STRING_LENGTH to PARAM_MAX_STRING_LENGTH in result.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get_db_parameter() example
// [php]
// printf("%-30s %s\n", "CUBRID PHP Version:", cubrid_version());
// 
// printf("\n");
// 
// $conn = cubrid_connect("localhost", 33088, "demodb");
// 
// if (!$conn) {
//     die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
// }
// 
// $db_params = cubrid_get_db_parameter($conn);
// 
// while (list($param_name, $param_value) = each($db_params)) {
//     printf("%-30s %s\n", $param_name, $param_value);
// }
// 
// printf("\n");
// 
// $server_info = cubrid_get_server_info($conn);
// $client_info = cubrid_get_client_info();
// 
// printf("%-30s %s\n", "Server Info:", $server_info);
// printf("%-30s %s\n", "Client Info:", $client_info);
// 
// printf("\n");
// 
// $charset = cubrid_get_charset($conn);
// 
// printf("%-30s %s\n", "CUBRID Charset:", $charset);
// 
// cubrid_disconnect($conn);
// 
// [/php]
// The above example will output:
// [result]
// CUBRID PHP Version:            9.1.0.0001
// 
// PARAM_ISOLATION_LEVEL          3
// LOCK_TIMEOUT                   -1
// MAX_STRING_LENGTH              1073741823
// PARAM_AUTO_COMMIT              1
// 
// Server Info:                   9.1.0.0212
// Client Info:                   9.1.0
// 
// CUBRID Charset:                iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-get-db-parameter.php
// ========== CUBRID_GET_DB_PARAMETER - END

// SYNTAX:
// array cubrid_get_db_parameter(resource $conn_identifier)

return $return_cubrid_get_db_parameter; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_DB_PARAMETER
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_QUERY_TIMEOUT
// ============================== PUBLIC
// ============================== ABOUT
// Get the query timeout value of the request.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_get_query_timeout() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_query_timeout($req_identifier)
{
$return_cubrid_get_query_timeout = 0;

// ========== CUBRID_GET_QUERY_TIMEOUT - BEGIN
// ===== ABOUT
// Get the query timeout value of the request
// ===== DESCRIPTION
// The cubrid_get_query_timeout() function is used to get the query timeout of the request.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_get_query_timeout(resource $req_identifier): int
// ===== CODE
$return_cubrid_get_query_timeout = cubrid_get_query_timeout(

$req_identifier // resource req_identifier - Request identifier.

); // Return Values
// Returns the query timeout value in milliseconds of the current request on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get_query_timeout() example
// [php]
// 
// $host = "localhost";
// $port = 33000;
// $db = "demodb";
// 
// $conn =
// cubrid_connect_with_url("CUBRID:$host:$port:$db:::?login_timeout=50000&query_timeout=5000&disconnect_on_query_timeout=yes");
// 
// $req = cubrid_prepare($conn, "SELECT * FROM code");
// 
// $timeout = cubrid_get_query_timeout($req);
// var_dump($timeout);
// 
// cubrid_set_query_timeout($req, 1000);
// $timeout = cubrid_get_query_timeout($req);
// var_dump($timeout);
// 
// cubrid_close($conn);
// [/php]
// The above example will output:
// [result]
// int(5000)
// int(1000)
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-get-query-timeout.php
// ========== CUBRID_GET_QUERY_TIMEOUT - END

// SYNTAX:
// int cubrid_get_query_timeout(resource $req_identifier)

return $return_cubrid_get_query_timeout; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_QUERY_TIMEOUT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_SERVER_INFO
// ============================== PUBLIC
// ============================== ABOUT
// Return the CUBRID server version.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_get_server_info() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get_server_info($conn_identifier)
{
$return_cubrid_get_server_info = null;

// ========== CUBRID_GET_SERVER_INFO - BEGIN
// ===== ABOUT
// Return the CUBRID server version
// ===== DESCRIPTION
// This function returns a string that represents the CUBRID server version.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_get_server_info(resource $conn_identifier): string
// ===== CODE
$return_cubrid_get_server_info = cubrid_get_server_info(

$conn_identifier // resource conn_identifier - The CUBRID connection.

); // Return Values
// A string that represents the CUBRID server version on success, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get_server_info() example
// [php]
// printf("%-30s %s\n", "CUBRID PHP Version:", cubrid_version());
// 
// printf("\n");
// 
// $conn = cubrid_connect("localhost", 33088, "demodb");
// 
// if (!$conn) {
//     die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
// }
// 
// $db_params = cubrid_get_db_parameter($conn);
// 
// while (list($param_name, $param_value) = each($db_params)) {
//     printf("%-30s %s\n", $param_name, $param_value);
// }
// 
// printf("\n");
// 
// $server_info = cubrid_get_server_info($conn);
// $client_info = cubrid_get_client_info();
// 
// printf("%-30s %s\n", "Server Info:", $server_info);
// printf("%-30s %s\n", "Client Info:", $client_info);
// 
// printf("\n");
// 
// $charset = cubrid_get_charset($conn);
// 
// printf("%-30s %s\n", "CUBRID Charset:", $charset);
// 
// cubrid_disconnect($conn);
// 
// [/php]
// The above example will output:
// [result]
// CUBRID PHP Version:            9.1.0.0001
// 
// PARAM_ISOLATION_LEVEL          3
// LOCK_TIMEOUT                   -1
// MAX_STRING_LENGTH              1073741823
// PARAM_AUTO_COMMIT              1
// 
// Server Info:                   9.1.0.0212
// Client Info:                   9.1.0
// 
// CUBRID Charset:                iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-get-server-info.php
// ========== CUBRID_GET_SERVER_INFO - END

// SYNTAX:
// string cubrid_get_server_info(resource $conn_identifier)

return $return_cubrid_get_server_info; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET_SERVER_INFO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET
// ============================== PUBLIC
// ============================== ABOUT
// Get a column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_get() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_get($conn_identifier, $oid, $attr)
{
$return_cubrid_get = null;

// ========== CUBRID_GET - BEGIN
// ===== ABOUT
// Get a column using OID
// ===== DESCRIPTION
// The cubrid_get() function is used to get the attribute of the instance of the given oid. You can get single attribute by using string data type for the attr argument, or many attributes by using array data type for the attr argument.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_get(resource $conn_identifier, string $oid, mixed $attr = ?): mixed
// ===== CODE
$return_cubrid_get = cubrid_get(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance that you want to read.

$attr // mixed attr - Name of the attribute that you want to read.

); // Return Values
// Content of the requested attribute, when process is successful; When attr is set with string data type, the result is returned as a string; when attr is set with array data type (0-based numerical array), then the result is returned in associative array. When attr is omitted, then all attributes are received in array form.
// false when process is unsuccessful or result is NULL (If error occurs to distinguish empty string from NULL, then it prints the warning message. You can check the error by using cubrid_error_code())
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_get($conn, $oid, "b");
// var_dump($attr);
// 
// $attr = cubrid_get($conn, $oid);
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// string(9) "{1, 2, 3}"
// array(4) {
//   ["a"]=>
//   string(1) "1"
//   ["b"]=>
//   array(3) {
//     [0]=>
//     string(1) "1"
//     [1]=>
//     string(1) "2"
//     [2]=>
//     string(1) "3"
//   }
//   ["c"]=>
//   array(4) {
//     [0]=>
//     string(2) "11"
//     [1]=>
//     string(2) "22"
//     [2]=>
//     string(2) "33"
//     [3]=>
//     string(3) "333"
//   }
//   ["d"]=>
//   string(10) "a         "
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-get.php
// ========== CUBRID_GET - END

// SYNTAX:
// mixed cubrid_get(resource $conn_identifier, string $oid, mixed $attr)

return $return_cubrid_get; // mixed
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_GET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_INSERT_ID
// ============================== PUBLIC
// ============================== ABOUT
// Return the ID generated for the last updated AUTO_INCREMENT column.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_insert_id() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_insert_id($conn_identifier)
{
$return_cubrid_insert_id = null;

// ========== CUBRID_INSERT_ID - BEGIN
// ===== ABOUT
// Return the ID generated for the last updated AUTO_INCREMENT column
// ===== DESCRIPTION
// The cubrid_insert_id() function retrieves the ID generated for the AUTO_INCREMENT column which is updated by the previous INSERT query. It returns 0 if the previous query does not generate new rows, or FALSE on failure.
// Note: CUBRID supports AUTO_INCREMENT for more than one columns in a table. In most cases, there will be a single AUTO_INCREMENT column in a table. If there are multiple AUTO_INCREMENT columns, this function should not be used even if it will return a value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_insert_id(resource $conn_identifier = ?): string
// ===== CODE
$return_cubrid_insert_id = cubrid_insert_id(

$conn_identifier // resource conn_identifier - The connection identifier previously obtained by a call to cubrid_connect().

); // Return Values
// A string representing the ID generated for an AUTO_INCREMENT column by the previous query, on success.
// 0, if the previous query does not generate new rows.
// false on failure.
// 
// Changelog
// Version - Description
// 8.4.0   - Change the return value from an array to string; Remove the first parameter class_name.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_insert_id() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// @cubrid_execute($conn, "DROP TABLE cubrid_test");
// cubrid_execute($conn, "CREATE TABLE cubrid_test (d int AUTO_INCREMENT(1, 2), t varchar)");
// 
// for ($i = 0; $i < 10; $i++) {
//     cubrid_execute($conn, "INSERT INTO cubrid_test(t) VALUES('cubrid_test')");
// }
// 
// $id = cubrid_insert_id();
// var_dump($id);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// string(2) "19"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-insert-id.php
// ========== CUBRID_INSERT_ID - END

// SYNTAX:
// string cubrid_insert_id(resource $conn_identifier)

return $return_cubrid_insert_id; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_INSERT_ID
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_IS_INSTANCE
// ============================== PUBLIC
// ============================== ABOUT
// Check whether the instance pointed by OID exists.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_is_instance() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_is_instance($conn_identifier, $oid)
{
$return_cubrid_is_instance = 0;

// ========== CUBRID_IS_INSTANCE - BEGIN
// ===== ABOUT
// Check whether the instance pointed by OID exists
// ===== DESCRIPTION
// The cubrid_is_instance() function is used to check whether the instance pointed by the given oid exists or not.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_is_instance(resource $conn_identifier, string $oid): int
// ===== CODE
$return_cubrid_is_instance = cubrid_is_instance(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid // string oid - OID of the instance that you want to check the existence.

); // Return Values
// 1, if such instance exists;
// 0, if such instance does not exist;
// -1, in case of error
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_is_instance() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $sql = <<<EOD
// SELECT host_year, medal, game_date 
// FROM game 
// WHERE athlete_code IN 
//     (SELECT code FROM athlete WHERE name='Thorpe Ian');
// EOD;
// 
// $req = cubrid_execute($conn, $sql, CUBRID_INCLUDE_OID);
// $oid = cubrid_current_oid($req);
// 
// $res = cubrid_is_instance ($conn, $oid);
// if ($res == 1) {
//     echo "Instance pointed by $oid exists.\n";
// } else if ($res == 0){
//     echo "Instance pointed by $oid doesn't exist.\n";
// } else {
//     echo "error\n";
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Instance pointed by @0|0|0 doesn't exist.
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-21)
// URL: https://www.php.net/manual/en/function.cubrid-is-instance.php
// ========== CUBRID_IS_INSTANCE - END

// SYNTAX:
// int cubrid_is_instance(resource $conn_identifier, string $oid)

return $return_cubrid_is_instance; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_IS_INSTANCE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close BLOB/CLOB data.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob_close() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob_close($lob_identifier_array)
{
$return_cubrid_lob_close = false;

// ========== CUBRID_LOB_CLOSE - BEGIN
// ===== ABOUT
// Close BLOB/CLOB data
// ===== DESCRIPTION
// cubrid_lob_close() is used to close all BLOB/CLOB returned from cubrid_lob_get().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_lob_close(array $lob_identifier_array): bool
// ===== CODE
$return_cubrid_lob_close = cubrid_lob_close(

$lob_identifier_array // array lob_identifier_array - LOB identifier array returned from cubrid_lob_get().

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob_close() example
// [php]
// $conn = cubrid_connect ("localhost", 33000, "demodb", "dba");
// 
// cubrid_execute($conn,"DROP TABLE if exists doc");
// cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
// cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");
// 
// $lobs = cubrid_lob_get($conn, "SELECT doc_content FROM doc WHERE id=5");
// echo "Doc size: ".cubrid_lob_size($lobs[0])." bytes";
// cubrid_lob_export($conn, $lobs[0], "doc_5.txt");
// cubrid_lob_close($lobs);
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob-close.php
// ========== CUBRID_LOB_CLOSE - END

// SYNTAX:
// bool cubrid_lob_close(array $lob_identifier_array)

return $return_cubrid_lob_close; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_EXPORT
// ============================== PUBLIC
// ============================== ABOUT
// Export BLOB/CLOB data to file.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob_export() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob_export($conn_identifier, $lob_identifier, $path_name)
{
$return_cubrid_lob_export = false;

// ========== CUBRID_LOB_EXPORT - BEGIN
// ===== ABOUT
// Export BLOB/CLOB data to file
// ===== DESCRIPTION
// cubrid_lob_export() is used to get BLOB/CLOB data from CUBRID database, and saves its contents to a file. To use this function, you must use cubrid_lob_get() first to get BLOB/CLOB info from CUBRID.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_lob_export(resource $conn_identifier, resource $lob_identifier, string $path_name): bool
// ===== CODE
$return_cubrid_lob_export = cubrid_lob_export(

$conn_identifier, // resource conn_identifier - Connection identifier.

$lob_identifier, // resource lob_identifier - LOB identifier.

$path_name // string path_name - Path name of the file.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob_export() example
// [php]
// $conn = cubrid_connect ("localhost", 33000, "demodb", "dba");
// 
// cubrid_execute($conn,"DROP TABLE if exists doc");
// cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
// cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");
// 
// $lobs = cubrid_lob_get($conn, "SELECT doc_content FROM doc WHERE id=5");
// echo "Doc size: ".cubrid_lob_size($lobs[0])." bytes";
// cubrid_lob_export($conn, $lobs[0], "doc_5.txt");
// cubrid_lob_close($lobs);
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob-export.php
// ========== CUBRID_LOB_EXPORT - END

// SYNTAX:
// bool cubrid_lob_export(resource $conn_identifier, resource $lob_identifier, string $path_name)

return $return_cubrid_lob_export; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_EXPORT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_GET
// ============================== PUBLIC
// ============================== ABOUT
// Get BLOB/CLOB data.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob_get() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob_get($conn_identifier, $sql)
{
$return_cubrid_lob_get = null;

// ========== CUBRID_LOB_GET - BEGIN
// ===== ABOUT
// Get BLOB/CLOB data
// ===== DESCRIPTION
// cubrid_lob_get() is used to get BLOB/CLOB meta info from CUBRID database, CUBRID gets BLOB/CLOB by executing the SQL statement, and returns all LOBs as a resource array. Be sure that the SQL retrieves only one column and its data type is BLOB or CLOB.
// Remember to use cubrid_lob_close() to release the LOBs if you don't need it any more.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_lob_get(resource $conn_identifier, string $sql): array
// ===== CODE
$return_cubrid_lob_get = cubrid_lob_get(

$conn_identifier, // resource conn_identifier - Connection identifier.

$sql // string sql - SQL statement to be executed.

); // Return Values
// Return an array of LOB resources, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob_get() example
// [php]
// $conn = cubrid_connect ("localhost", 33000, "demodb", "dba");
// 
// cubrid_execute($conn,"DROP TABLE if exists doc");
// cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
// cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");
// 
// $lobs = cubrid_lob_get($conn, "SELECT doc_content FROM doc WHERE id=5");
// echo "Doc size: ".cubrid_lob_size($lobs[0])." bytes";
// cubrid_lob_export($conn, $lobs[0], "doc_5.txt");
// cubrid_lob_close($lobs);
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob-get.php
// ========== CUBRID_LOB_GET - END

// SYNTAX:
// array cubrid_lob_get(resource $conn_identifier, string $sql)

return $return_cubrid_lob_get; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_GET
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_SEND
// ============================== PUBLIC
// ============================== ABOUT
// Read BLOB/CLOB data and send straight to browser.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob_send() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob_send($conn_identifier, $lob_identifier)
{
$return_cubrid_lob_send = false;

// ========== CUBRID_LOB_SEND - BEGIN
// ===== ABOUT
// Read BLOB/CLOB data and send straight to browser
// ===== DESCRIPTION
// cubrid_lob_send() reads BLOB/CLOB data and passes it straight through to the browser. To use this function, you must use cubrid_lob_get() first to get BLOB/CLOB info from CUBRID.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_lob_send(resource $conn_identifier, resource $lob_identifier): bool
// ===== CODE
$return_cubrid_lob_send = cubrid_lob_send(

$conn_identifier, // resource conn_identifier - Connection identifier.

$lob_identifier // resource lob_identifier - LOB identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob_send() example
// [php]
// $conn = cubrid_connect ("localhost", 33000, "demodb", "dba");
// 
// cubrid_execute($conn,"DROP TABLE if exists doc");
// cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
// cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");
// 
// $lobs = cubrid_lob_get($conn, "SELECT doc_content FROM doc WHERE id=5");
// 
// cubrid_lob_send($conn, $lobs[0]);
// cubrid_lob_close($lobs);
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob-send.php
// ========== CUBRID_LOB_SEND - END

// SYNTAX:
// bool cubrid_lob_send(resource $conn_identifier, resource $lob_identifier)

return $return_cubrid_lob_send; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_SEND
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Get BLOB/CLOB data size.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob_size() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob_size($lob_identifier)
{
$return_cubrid_lob_size = null;

// ========== CUBRID_LOB_SIZE - BEGIN
// ===== ABOUT
// Get BLOB/CLOB data size
// ===== DESCRIPTION
// cubrid_lob_size() is used to get BLOB/CLOB data size.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_lob_size(resource $lob_identifier): string
// ===== CODE
$return_cubrid_lob_size = cubrid_lob_size(

$lob_identifier // resource lob_identifier - LOB identifier.

); // Return Values
// A string representing LOB data size, when process is successful, or false on failure.
// 
// Changelog
// Version - Description
// 8.4.0   - Change return value type from int to string.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob_size() example
// [php]
// $lobs = cubrid_lob_get($con, "SELECT doc_content FROM doc WHERE doc_id=5");
// echo "Doc size:".cubrid_lob_size($lobs[0]);
// cubrid_lob_export($conn, $lobs[0], "doc_5.txt");
// cubrid_lob_close($lobs);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob-size.php
// ========== CUBRID_LOB_SIZE - END

// SYNTAX:
// string cubrid_lob_size(resource $lob_identifier)

return $return_cubrid_lob_size; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB_SIZE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_BIND
// ============================== PUBLIC
// ============================== ABOUT
// Bind a lob object or a string as a lob object to a prepared statement as parameters.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_bind() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_bind($req_identifier, $bind_index, $bind_value, $bind_value_type)
{
$return_cubrid_lob2_bind = false;

// ========== CUBRID_LOB2_BIND - BEGIN
// ===== ABOUT
// Bind a lob object or a string as a lob object to a prepared statement as parameters
// ===== DESCRIPTION
// The cubrid_lob2_bind() function is used to bind BLOB/CLOB datas to a corresponding question mark placeholder in the SQL statement that was passed to cubrid_prepare(). If bind_value_type is not given, string will be "BLOB" as the default. But if you use cubrid_lob2_new() before, bind_value_type will be consistent with type in cubrid_lob2_new() as the default.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_bind(
//    resource $req_identifier,
//    int $bind_index,
//    mixed $bind_value,
//    string $bind_value_type = ?
// ): bool
// ===== CODE
$return_cubrid_lob2_bind = cubrid_lob2_bind(

$req_identifier, // resource req_identifier - Request identifier as a result of cubrid_prepare().

$bind_index, // int bind_index - Location of binding parameters. It starts with 1.

$bind_value, // mixed bind_value - Actual value for binding.

$bind_value_type // string bind_value_type - It must be "BLOB" or "CLOB" and it won't be case-sensitive. If it not be given, the default value is "BLOB".

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob2_bind() example
// [php]
// // Table: test_lob (id INT, contents CLOB)
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// cubrid_execute($conn,"DROP TABLE if exists test_lob");
// cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");
// 
// $req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES (?, ?)");
// 
// cubrid_bind($req,1, 3);
// 
// $lob = cubrid_lob2_new($conn, 'CLOB');
// cubrid_lob2_bind($req, 2, $lob);
// 
// cubrid_execute($req);
// 
// cubrid_bind($req, 1, 4);
// 
// cubrid_lob2_bind($req, 2, 'CUBRID LOB2 TEST', 'CLOB');
// 
// cubrid_execute($req);
// 
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-bind.php
// ========== CUBRID_LOB2_BIND - END

// SYNTAX:
// bool cubrid_lob2_bind(resource $req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type)

return $return_cubrid_lob2_bind; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_BIND
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close LOB object.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_close() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_close($lob_identifier)
{
$return_cubrid_lob2_close = false;

// ========== CUBRID_LOB2_CLOSE - BEGIN
// ===== ABOUT
// Close LOB object
// ===== DESCRIPTION
// The cubrid_lob2_close() function is used to close LOB object returned from cubrid_lob2_new() or got from the result set.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_close(resource $lob_identifier): bool
// ===== CODE
$return_cubrid_lob2_close = cubrid_lob2_close(

$lob_identifier // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-close.php
// ========== CUBRID_LOB2_CLOSE - END

// SYNTAX:
// bool cubrid_lob2_close(resource $lob_identifier)

return $return_cubrid_lob2_close; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_EXPORT
// ============================== PUBLIC
// ============================== ABOUT
// Export the lob object to a file.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_export() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_export($lob_identifier, $file_name)
{
$return_cubrid_lob2_export = false;

// ========== CUBRID_LOB2_EXPORT - BEGIN
// ===== ABOUT
// Export the lob object to a file
// ===== DESCRIPTION
// The cubrid_lob2_export() function is used to save the contents of BLOB/CLOB data to a file. To use this function, you must use cubrid_lob2_new() or fetch a lob object from CUBRID database first. If the file already exists, the operation will fail. This function will not influence the cursor position of the lob object. It operates the entire lob object.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_export(resource $lob_identifier, string $file_name): bool
// ===== CODE
$return_cubrid_lob2_export = cubrid_lob2_export(

$lob_identifier, // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

$file_name // string filename - File name you want to store BLOB/CLOB data. It also supports the path of the file.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob2_export() example
// [php]
// // Table: test_lob (id INT, contents CLOB)
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// cubrid_execute($conn,"DROP TABLE if exists doc");
// cubrid_execute($conn,"CREATE TABLE doc (id INT, doc_content CLOB)");
// cubrid_execute($conn,"INSERT INTO doc VALUES (5,'hello,cubrid')");
// 
// $req = cubrid_prepare($conn, "select * from doc");
// 
// cubrid_execute($req);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// 
// $row = cubrid_fetch($req, CUBRID_NUM | CUBRID_LOB);
// 
// cubrid_lob2_export($row[1], "doc_3.txt");
// 
// cubrid_lob2_close($row[1]);
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-export.php
// ========== CUBRID_LOB2_EXPORT - END

// SYNTAX:
// bool cubrid_lob2_export(resource $lob_identifier, string $file_name)

return $return_cubrid_lob2_export; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_EXPORT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_IMPORT
// ============================== PUBLIC
// ============================== ABOUT
// Import BLOB/CLOB data from a file.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_import() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_import($lob_identifier, $file_name)
{
$return_cubrid_lob2_import = false;

// ========== CUBRID_LOB2_IMPORT - BEGIN
// ===== ABOUT
// Import BLOB/CLOB data from a file
// ===== DESCRIPTION
// The cubrid_lob2_import() function is used to save the contents of BLOB/CLOB data from a file. To use this function, you must use cubrid_lob2_new() or fetch a lob object from CUBRID database first. If the file already exists, the operation will fail. This function will not influence the cursor position of the lob object. It operates the entire lob object.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_import(resource $lob_identifier, string $file_name): bool
// ===== CODE
$return_cubrid_lob2_import = cubrid_lob2_import(

$lob_identifier, // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

$file_name // string filename - File name you want to import BLOB/CLOB data. It also supports the path of the file.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob2_export() example
// [php]
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// cubrid_execute($conn,"DROP TABLE if exists test_lob");
// cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");
// 
// $req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES (?, ?)");
// cubrid_bind($req, 1, 1);
// 
// $lob = cubrid_lob2_new($conn, "clob");
// cubrid_lob2_import($lob, "doc_1.txt");
// cubrid_lob2_bind($req, 2, $lob, 'CLOB'); // or cubrid_lob2_bind($req, 2, $lob);
// 
// cubrid_execute($req);
// 
// cubrid_lob2_close($lob);
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-import.php
// ========== CUBRID_LOB2_IMPORT - END

// SYNTAX:
// bool cubrid_lob2_import(resource $lob_identifier, string $file_name)

return $return_cubrid_lob2_import; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_IMPORT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_NEW
// ============================== PUBLIC
// ============================== ABOUT
// Create a lob object.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_new() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_new($conn_identifier, $type = "BLOB")
{
$return_cubrid_lob2_new = null;

// ========== CUBRID_LOB2_NEW - BEGIN
// ===== ABOUT
// Create a lob object
// ===== DESCRIPTION
// The cubrid_lob2_new() function is used to create a lob object (both BLOB and CLOB). This function should be used before you bind a lob object.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_new(resource $conn_identifier = ?, string $type = "BLOB"): resource
// ===== CODE
$return_cubrid_lob2_new = cubrid_lob2_new(

$conn_identifier, // resource conn_identifier - Connection identifier. If the connection identifier is not specified, the last connection opened by cubrid_connect() or cubrid_connect_with_url() is assumed.

$type // string type - It may be "BLOB" or "CLOB", it won't be case-sensitive. The default value is "BLOB".

); // Return Values
// Lob identifier when it is successful, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-new.php
// ========== CUBRID_LOB2_NEW - END

// SYNTAX:
// resource cubrid_lob2_new(resource $conn_identifier, string $type = "BLOB")

return $return_cubrid_lob2_new; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_NEW
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_READ
// ============================== PUBLIC
// ============================== ABOUT
// Read from BLOB/CLOB data.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_read() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_read($lob_identifier, $len)
{
$return_cubrid_lob2_read = null;

// ========== CUBRID_LOB2_READ - BEGIN
// ===== ABOUT
// Read from BLOB/CLOB data
// ===== DESCRIPTION
// The cubrid_lob2_read() function reads len bytes from the LOB data and returns the bytes read.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_read(resource $lob_identifier, int $len): string
// ===== CODE
$return_cubrid_lob2_read = cubrid_lob2_read(

$lob_identifier, // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

$len // int len - Length from buffer you want to read from the lob data.

); // Return Values
// Returns the contents as a string, false when there is no more data, or null on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob2_read() example 1
// [php]
// // test_lob (id INT, contents CLOB)
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "public", "");
// 
// $req = cubrid_execute($conn, "select * from test_lob");
// 
// $row = cubrid_fetch_row($req, CUBRID_LOB);
// 
// print "position now is " . cubrid_lob2_tell($row[1]) . "\n";
// 
// cubrid_lob2_seek($row[1], 10, CUBRID_CURSOR_FIRST);
// 
// print "\nposition after moving farword is " . cubrid_lob2_tell($row[1]) . "\n";
// 
// $data = cubrid_lob2_read($row[1], 12);
// 
// print "\nposition after reading is " . cubrid_lob2_tell($row[1]) . "\n";
// 
// print $data . "\n";
// 
// cubrid_lob2_seek($row[1], 5, CUBRID_CURSOR_CURRENT);
// 
// print "\nposition after moving again is " . cubrid_lob2_tell($row[1]) . "\n";
// 
// $data = cubrid_lob2_read($row[1], 20);
// print $data . "\n";
// 
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [example]
// Example #2 cubrid_lob2_read() example 2
// [php]
// // test_lob (id INT, contents CLOB)
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// $req = cubrid_execute($conn, "select * from test_lob");
// 
// $row = cubrid_fetch_row($req, CUBRID_LOB);
// 
// while (true) {
//     if ($data = cubrid_lob2_read($row[1], 1024)) {
//         print $data . "\n";
//     }
//     elseif ($data === false) {
//         print "There is no more data\n";
//         break;
//     }
//     else {
//         print "There must some errors\n";
//         break;
//     }
// }
// 
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-read.php
// ========== CUBRID_LOB2_READ - END

// SYNTAX:
// string cubrid_lob2_read(resource $lob_identifier, int $len)

return $return_cubrid_lob2_read; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_READ
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SEEK64
// ============================== PUBLIC
// ============================== ABOUT
// Move the cursor of a lob object.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_seek64() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== USING CONSTANTS (1)
// CUBRID_CURSOR_CURRENT - cubrid_lob2_seek64()
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_seek64($lob_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT)
{
$return_cubrid_lob2_seek64 = false;

// ========== CUBRID_LOB2_SEEK64 - BEGIN
// ===== ABOUT
// Move the cursor of a lob object
// ===== DESCRIPTION
// The cubrid_lob2_seek64() function is used to move the cursor position of a lob object by the value set in the offset argument, to the direction set in the origin argument. If the offset you want to move is larger than an integer data can be stored, you can use this function.
// To set the origin argument, you can use CUBRID_CURSOR_FIRST to set the cursor position moving forward offset units from the first beginning. In this case, offset must be a positive value.
// If you use CUBRID_CURSOR_CURRENT for origin, you can move forward or backward. and offset can be positive or negative.
// If you use CUBRID_CURSOR_LAST for origin, you can move backward offset units from the end of LOB object and offset only can be positive.
// Note: If you use this function to move the cursor position of the lob object, you should pass offset as a string.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_seek64(resource $lob_identifier, string $offset, int $origin = CUBRID_CURSOR_CURRENT): bool
// ===== CODE
$return_cubrid_lob2_seek64 = cubrid_lob2_seek64(

$lob_identifier, // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

$offset, // string offset - Number of units you want to move the cursor.

$origin // int origin - This parameter can be the following values:
// CUBRID_CURSOR_FIRST   : move forward from the first beginning.
// CUBRID_CURSOR_CURRENT : move forward or backward from the current position.
// CUBRID_CURSOR_LAST    : move backward at the end of LOB object.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob2_seek64() example
// [php]
// // test_lob (id INT, contents CLOB)
// // Data length of doc_1.txt should be greater than 20101029056306120215.
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// cubrid_execute($conn,"DROP TABLE if exists test_lob");
// cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");
// 
// $req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES (?, ?)");
// cubrid_bind($req, 1, 1);
// 
// $lob = cubrid_lob2_new($conn, "clob");
// cubrid_lob2_import($lob, "doc_1.txt");
// cubrid_lob2_bind($req, 2, $lob, 'CLOB'); // or cubrid_lob2_bind($req, 2, $lob);
// 
// cubrid_execute($req);
// 
// cubrid_lob2_close($lob);
// 
// $req = cubrid_execute($conn, "select * from test_lob");
// $row = cubrid_fetch_row($req, CUBRID_LOB);
// $lob = $row[1];
// 
// cubrid_lob2_seek64($lob, "20101029056306120215", CUBRID_CURSOR_FIRST);
// $data = cubrid_lob2_read($lob, 20);
// echo $data."\n";
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-seek64.php
// ========== CUBRID_LOB2_SEEK64 - END

// SYNTAX:
// bool cubrid_lob2_seek64(resource $lob_identifier, string $offset, int $origin = CUBRID_CURSOR_CURRENT)

return $return_cubrid_lob2_seek64; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SEEK64
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Move the cursor of a lob object.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_seek() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== USING CONSTANTS (1)
// CUBRID_CURSOR_CURRENT - cubrid_lob2_seek()
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_seek($lob_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT)
{
$return_cubrid_lob2_seek = false;

// ========== CUBRID_LOB2_SEEK - BEGIN
// ===== ABOUT
// Move the cursor of a lob object
// ===== DESCRIPTION
// The cubrid_lob2_seek() function is used to move the cursor position of a lob object by the value set in the offset argument, to the direction set in the origin argument.
// To set the origin argument, you can use CUBRID_CURSOR_FIRST to set the cursor position moving forward offset units from the first beginning. In this case, offset must be a positive value.
// If you use CUBRID_CURSOR_CURRENT for origin, you can move forward or backward. and offset can be positive or negative.
// If you use CUBRID_CURSOR_LAST for origin, you can move backward offset units from the end of LOB object and offset only can be positive.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_seek(resource $lob_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT): bool
// ===== CODE
$return_cubrid_lob2_seek = cubrid_lob2_seek(

$lob_identifier, // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

$offset, // int offset - Number of units you want to move the cursor.

$origin // int origin - This parameter can be the following values:
// CUBRID_CURSOR_FIRST   : move forward from the first beginning.
// CUBRID_CURSOR_CURRENT : move forward or backward from the current position.
// CUBRID_CURSOR_LAST    : move backward at the end of LOB object.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob2_seek() example
// [php]
// // test_lob (id INT, contents CLOB)
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// cubrid_execute($conn,"DROP TABLE if exists test_lob");
// cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");
// $req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES(2, ?)");
// 
// $lob = cubrid_lob2_new($conn, 'CLOB');
// $len = cubrid_lob2_write($lob, "Hello world");
// 
// cubrid_lob2_seek($lob, 0, CUBRID_CURSOR_LAST);
// cubrid_lob2_write($lob, "beautiful");
// 
// cubrid_lob2_seek($lob, 15, CUBRID_CURSOR_FIRST);
// $data = cubrid_lob2_read($lob, 5);
// 
// echo $data."\n";
// 
// cubrid_lob2_bind($req, 1, $lob);
// cubrid_execute($req);
// 
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-seek.php
// ========== CUBRID_LOB2_SEEK - END

// SYNTAX:
// bool cubrid_lob2_seek(resource $lob_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT)

return $return_cubrid_lob2_seek; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SIZE64
// ============================== PUBLIC
// ============================== ABOUT
// Get a lob object's size.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_size64() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_size64($lob_identifier)
{
$return_cubrid_lob2_size64 = null;

// ========== CUBRID_LOB2_SIZE64 - BEGIN
// ===== ABOUT
// Get a lob object's size
// ===== DESCRIPTION
// The cubrid_lob2_size64() function is used to get the size of a lob object. If the size of a lob object is larger than an integer data can be stored, you can use this function and it will return the size as a string.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_size64(resource $lob_identifier): string
// ===== CODE
$return_cubrid_lob2_size64 = cubrid_lob2_size64(

$lob_identifier // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

); // Return Values
// It will return the size of the LOB object as a string when it processes successfully, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-size64.php
// ========== CUBRID_LOB2_SIZE64 - END

// SYNTAX:
// string cubrid_lob2_size64(resource $lob_identifier)

return $return_cubrid_lob2_size64; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SIZE64
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SIZE
// ============================== PUBLIC
// ============================== ABOUT
// Get a lob object's size.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_size() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_size($lob_identifier)
{
$return_cubrid_lob2_size = 0;

// ========== CUBRID_LOB2_SIZE - BEGIN
// ===== ABOUT
// Get a lob object's size
// ===== DESCRIPTION
// The cubrid_lob2_size() function is used to get the size of a lob object.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_size(resource $lob_identifier): int
// ===== CODE
$return_cubrid_lob2_size = cubrid_lob2_size(

$lob_identifier // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

); // Return Values
// It will return the size of the LOB object when it processes successfully, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-size.php
// ========== CUBRID_LOB2_SIZE - END

// SYNTAX:
// int cubrid_lob2_size(resource $lob_identifier)

return $return_cubrid_lob2_size; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_SIZE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_TELL64
// ============================== PUBLIC
// ============================== ABOUT
// Tell the cursor position of the LOB object.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_tell64() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_tell64($lob_identifier)
{
$return_cubrid_lob2_tell64 = null;

// ========== CUBRID_LOB2_TELL64 - BEGIN
// ===== ABOUT
// Tell the cursor position of the LOB object
// ===== DESCRIPTION
// The cubrid_lob2_tell64() function is used to tell the cursor position of the LOB object. If the size of a lob object is larger than an integer data can be stored, you can use this function and it will return the position information as a string.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_tell64(resource $lob_identifier): string
// ===== CODE
$return_cubrid_lob2_tell64 = cubrid_lob2_tell64(

$lob_identifier // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

); // Return Values
// It will return the cursor position on the LOB object as a string when it processes successfully, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-tell64.php
// ========== CUBRID_LOB2_TELL64 - END

// SYNTAX:
// string cubrid_lob2_tell64(resource $lob_identifier)

return $return_cubrid_lob2_tell64; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_TELL64
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_TELL
// ============================== PUBLIC
// ============================== ABOUT
// Tell the cursor position of the LOB object.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_tell() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_tell($lob_identifier)
{
$return_cubrid_lob2_tell = 0;

// ========== CUBRID_LOB2_TELL - BEGIN
// ===== ABOUT
// Tell the cursor position of the LOB object
// ===== DESCRIPTION
// The cubrid_lob2_tell() function is used to tell the cursor position of the LOB object.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_tell(resource $lob_identifier): int
// ===== CODE
$return_cubrid_lob2_tell = cubrid_lob2_tell(

$lob_identifier // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

); // Return Values
// It will return the cursor position on the LOB object when it processes successfully, or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-22)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-tell.php
// ========== CUBRID_LOB2_TELL - END

// SYNTAX:
// int cubrid_lob2_tell(resource $lob_identifier)

return $return_cubrid_lob2_tell; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_TELL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_WRITE
// ============================== PUBLIC
// ============================== ABOUT
// Write to a lob object.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_lob2_write() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lob2_write($lob_identifier, $buf)
{
$return_cubrid_lob2_write = false;

// ========== CUBRID_LOB2_WRITE - BEGIN
// ===== ABOUT
// Write to a lob object
// ===== DESCRIPTION
// The cubrid_lob2_write() function reads as much as data from buf and stores it to the LOB object. Note that this function can only append characters now.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_lob2_write(resource $lob_identifier, string $buf): bool
// ===== CODE
$return_cubrid_lob2_write = cubrid_lob2_write(

$lob_identifier, // resource lob_identifier - Lob identifier as a result of cubrid_lob2_new() or get from the result set.

$buf // string buf - Data that need to be written to the lob object.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lob2_write() example 1
// [php]
// // test_lob (id INT, contents CLOB)
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// cubrid_execute($conn,"DROP TABLE if exists test_lob");
// cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");
// 
// $req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES(2, ?)");
// 
// $lob = cubrid_lob2_new($conn, 'CLOB');
// $len = cubrid_lob2_write($lob, "Hello world");
// 
// cubrid_lob2_bind($req, 1, $lob);
// cubrid_execute($req);
// 
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [example]
// Example #2 cubrid_lob2_write() example 2
// [php]
// // test_lob (id INT, contents CLOB)
// 
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba", "");
// 
// cubrid_execute($conn,"DROP TABLE if exists test_lob");
// cubrid_execute($conn,"CREATE TABLE test_lob (id INT, contents CLOB)");
// 
// $req = cubrid_prepare($conn, "INSERT INTO test_lob VALUES(1, ?)");
// $lob1 = cubrid_lob2_new($conn, 'CLOB');
// $len = cubrid_lob2_write($lob1, "cubrid php driver");
// cubrid_lob2_bind($req, 1, $lob1);
// cubrid_execute($req);
// 
// $req = cubrid_execute($conn, "select * from test_lob");
// 
// $row = cubrid_fetch_row($req, CUBRID_LOB);
// $lob2 = $row[1];
// cubrid_lob2_seek($lob2, 0, CUBRID_CURSOR_LAST);
// 
// $pos = cubrid_lob2_tell($lob2);
// print "pos before write: $pos\n";
// 
// cubrid_lob2_write($lob2, "Hello world");
// 
// $pos = cubrid_lob2_tell($lob2);
// print "pos after write: $pos\n";
// 
// cubrid_disconnect($conn);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-lob2-write.php
// ========== CUBRID_LOB2_WRITE - END

// SYNTAX:
// bool cubrid_lob2_write(resource $lob_identifier, string $buf)

return $return_cubrid_lob2_write; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOB2_WRITE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOCK_READ
// ============================== PUBLIC
// ============================== ABOUT
// Set a read lock on the given OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_lock_read() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lock_read($conn_identifier, $oid)
{
$return_cubrid_lock_read = false;

// ========== CUBRID_LOCK_READ - BEGIN
// ===== ABOUT
// Set a read lock on the given OID
// ===== DESCRIPTION
// The cubrid_lock_read() function is used to put read lock on the instance pointed by given oid.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_lock_read(resource $conn_identifier, string $oid): bool
// ===== CODE
$return_cubrid_lock_read = cubrid_lock_read(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid // string oid - OID of the instance that you want to put read lock on.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lock_read() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// cubrid_lock_read($conn, $oid);
// 
// $attr = cubrid_get($conn, $oid, "b");
// var_dump($attr);
// 
// $attr = cubrid_get($conn, $oid);
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// string(9) "{1, 2, 3}"
// array(4) {
//   ["a"]=>
//   string(1) "1"
//   ["b"]=>
//   array(3) {
//     [0]=>
//     string(1) "1"
//     [1]=>
//     string(1) "2"
//     [2]=>
//     string(1) "3"
//   }
//   ["c"]=>
//   array(4) {
//     [0]=>
//     string(2) "11"
//     [1]=>
//     string(2) "22"
//     [2]=>
//     string(2) "33"
//     [3]=>
//     string(3) "333"
//   }
//   ["d"]=>
//   string(10) "a         "
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-lock-read.php
// ========== CUBRID_LOCK_READ - END

// SYNTAX:
// bool cubrid_lock_read(resource $conn_identifier, string $oid)

return $return_cubrid_lock_read; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOCK_READ
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOCK_WRITE
// ============================== PUBLIC
// ============================== ABOUT
// Set a write lock on the given OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_lock_write() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_lock_write($conn_identifier, $oid)
{
$return_cubrid_lock_write = false;

// ========== CUBRID_LOCK_WRITE - BEGIN
// ===== ABOUT
// Set a write lock on the given OID
// ===== DESCRIPTION
// The cubrid_lock_write() function is used to put write lock on the instance pointed by the given oid.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_lock_write(resource $conn_identifier, string $oid): bool
// ===== CODE
$return_cubrid_lock_write = cubrid_lock_write(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid // string oid - OID of the instance that you want to put write lock on.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_lock_write() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// cubrid_lock_write($conn, $oid);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_put($conn, $oid, "b", array(2, 4, 8));
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// array(3) {
//   [0]=>
//   string(1) "2"
//   [1]=>
//   string(1) "4"
//   [2]=>
//   string(1) "8"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-lock-write.php
// ========== CUBRID_LOCK_WRITE - END

// SYNTAX:
// bool cubrid_lock_write(resource $conn_identifier, string $oid)

return $return_cubrid_lock_write; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOCK_WRITE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_MOVE_CURSOR
// ============================== PUBLIC
// ============================== ABOUT
// Move the cursor in the result.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_move_cursor() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== USING CONSTANTS (1)
// CUBRID_CURSOR_CURRENT - cubrid_move_cursor()
// ============================== CODE
function php_database_vendor_cubrid_cubrid_move_cursor($req_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT)
{
$return_cubrid_move_cursor = false;

// ========== CUBRID_MOVE_CURSOR - BEGIN
// ===== ABOUT
// Move the cursor in the result
// ===== DESCRIPTION
// The cubrid_move_cursor() function is used to move the current cursor location of req_identifier by the value set in the offset argument, to the direction set in the origin argument. To set the origin argument, you can use CUBRID_CURSOR_FIRST for the first part of the result, CUBRID_CURSOR_CURRENT for the current location of the result, or CUBRID_CURSOR_LAST for the last part of the result. If origin argument is not explicitly designated, then the function uses CUBRID_CURSOR_CURRENT as its default value.
// If the value of cursor movement range goes over the valid limit, then the cursor moves to the next location after the valid range for the cursor. For example, if you move 20 units in the result with the size of 10, then the cursor will move to 11th place and return CUBRID_NO_MORE_DATA.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_move_cursor(resource $req_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT): bool
// ===== CODE
$return_cubrid_move_cursor = cubrid_move_cursor(

$req_identifier, // resource req_identifier - Request identifier.

$offset, // int offset - Number of units you want to move the cursor.

$origin // int origin - Location where you want to move the cursor from CUBRID_CURSOR_FIRST, CUBRID_CURSOR_CURRENT, CUBRID_CURSOR_LAST.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_move_cursor() example
// [php]
// $conn = cubrid_connect("127.0.0.1", 33000, "demodb", "dba");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code");
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_LAST);
// 
// $result = cubrid_fetch_row($req);
// var_dump($result);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $result = cubrid_fetch_row($req);
// var_dump($result);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_CURRENT);
// $result = cubrid_fetch_row($req);
// var_dump($result);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(2) {
//   [0]=>
//   string(1) "G"
//   [1]=>
//   string(4) "Gold"
// }
// array(2) {
//   [0]=>
//   string(1) "X"
//   [1]=>
//   string(5) "Mixed"
// }
// array(2) {
//   [0]=>
//   string(1) "M"
//   [1]=>
//   string(3) "Man"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-move-cursor.php
// ========== CUBRID_MOVE_CURSOR - END

// SYNTAX:
// bool cubrid_move_cursor(resource $req_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT)

return $return_cubrid_move_cursor; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_MOVE_CURSOR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NEXT_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Get result of next query when executing multiple SQL statements.
// ============================== SUPPORT
// PECL_CUBRID_8_4_0
// ============================== USING FUNCTIONS (1)
// cubrid_next_result() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_next_result($result)
{
$return_cubrid_next_result = false;

// ========== CUBRID_NEXT_RESULT - BEGIN
// ===== ABOUT
// Get result of next query when executing multiple SQL statements
// ===== DESCRIPTION
// The cubrid_next_result() function is used to get results of next query if multiple SQL statements are executed and CUBRID_EXEC_QUERY_ALL flag is set upon cubrid_execute().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_0
// ===== SYNTAX
// cubrid_next_result(resource $result): bool
// ===== CODE
$return_cubrid_next_result = cubrid_next_result(

$result // resource result - result comes from a call to cubrid_execute()

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_next_result() example
// [php]
// $conn = cubrid_connect("127.0.0.1", 33000, "demodb", "dba");
// 
// $sql_stmt = "SELECT * FROM code; SELECT * FROM history WHERE host_year=2004 AND event_code=20281";
// $res = cubrid_execute($conn, $sql_stmt, CUBRID_EXEC_QUERY_ALL);
// 
// get_result_info($res);
// cubrid_next_result($res);
// get_result_info($res);
// 
// function get_result_info($req)
// {
//     printf("\n------------ get_result_info --------------------\n");
// 
//     $row_num = cubrid_num_rows($req);
//     $col_num = cubrid_num_cols($req);
// 
//     $column_name_list = cubrid_column_names($req);
//     $column_type_list = cubrid_column_types($req);
// 
//     $column_last_name = cubrid_field_name($req, $col_num - 1);
//     $column_last_table = cubrid_field_table($req, $col_num - 1);
// 
//     $column_last_type = cubrid_field_type($req, $col_num - 1);
//     $column_last_len = cubrid_field_len($req, $col_num - 1);
// 
//     $column_1_flags = cubrid_field_flags($req, 1);
// 
//     printf("%-30s %d\n", "Row count:", $row_num);
//     printf("%-30s %d\n", "Column count:", $col_num);
//     printf("\n");
// 
//     printf("%-30s %-30s %-15s\n", "Column Names", "Column Types", "Column Len");
//     printf("------------------------------------------------------------------------------\n");
// 
//     $size = count($column_name_list);
//     for($i = 0; $i < $size; $i++) {
//         $column_len = cubrid_field_len($req, $i);
//         printf("%-30s %-30s %-15s\n", $column_name_list[$i], $column_type_list[$i], $column_len); 
//     }
//     printf("\n\n");
// 
//     printf("%-30s %s\n", "Last Column Name:", $column_last_name);
//     printf("%-30s %s\n", "Last Column Table:", $column_last_table);
//     printf("%-30s %s\n", "Last Column Type:", $column_last_type);
//     printf("%-30s %d\n", "Last Column Len:", $column_last_len);
//     printf("%-30s %s\n", "Second Column Flags:", $column_1_flags);
// 
//     printf("\n\n");
// }
// [/php]
// The above example will output:
// [result]
// ------------ get_result_info --------------------
// Row count:                     6
// Column count:                  2
// 
// Column Names                   Column Types                   Column Len     
// ------------------------------------------------------------------------------
// s_name                         char                           1              
// f_name                         varchar                        6              
// 
// 
// Last Column Name:              f_name
// Last Column Table:             code
// Last Column Type:              varchar
// Last Column Len:               6
// Second Column Flags:           
// 
// 
// 
// ------------ get_result_info --------------------
// Row count:                     4
// Column count:                  5
// 
// Column Names                   Column Types                   Column Len     
// ------------------------------------------------------------------------------
// event_code                     integer                        11             
// athlete                        varchar                        40             
// host_year                      integer                        11             
// score                          varchar                        10             
// unit                           varchar                        5              
// 
// 
// Last Column Name:              unit
// Last Column Table:             history
// Last Column Type:              varchar
// Last Column Len:               5
// Second Column Flags:           not_null primary_key unique_key
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-next-result.php
// ========== CUBRID_NEXT_RESULT - END

// SYNTAX:
// bool cubrid_next_result(resource $result)

return $return_cubrid_next_result; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NEXT_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_COLS
// ============================== PUBLIC
// ============================== ABOUT
// Return the number of columns in the result set.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_num_cols() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_num_cols($result)
{
$return_cubrid_num_cols = 0;

// ========== CUBRID_NUM_COLS - BEGIN
// ===== ABOUT
// Return the number of columns in the result set
// ===== DESCRIPTION
// The cubrid_num_cols() function is used to get the number of columns from the query result. It can only be used when the query executed is a SELECT statement.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_num_cols(resource $result): int
// ===== CODE
$return_cubrid_num_cols = cubrid_num_cols(

$result // resource result - Result.

); // Return Values
// Number of columns, when process is successful.
// false, if SQL statement is not SELECT.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_num_cols() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code");
// 
// $row_num = cubrid_num_rows($req);
// $col_num = cubrid_num_cols($req);
// 
// printf("Row Num: %d\nColumn Num: %d\n", $row_num, $col_num);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Row Num: 6
// Column Num: 2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-num-cols.php
// ========== CUBRID_NUM_COLS - END

// SYNTAX:
// int cubrid_num_cols(resource $result)

return $return_cubrid_num_cols; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_COLS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Get the number of rows in the result set.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_num_rows() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_num_rows($result)
{
$return_cubrid_num_rows = 0;

// ========== CUBRID_NUM_ROWS - BEGIN
// ===== ABOUT
// Get the number of rows in the result set
// ===== DESCRIPTION
// The cubrid_num_rows() function is used to get the number of rows from the query result. It can be used for SELECT statements. For INSERT, UPDATE, or DELETE queries, use the cubrid_affected_rows() function.
// Note: The cubrid_num_rows() function can only be used for synchronous query; it returns 0 when it is used for asynchronous query.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_num_rows(resource $result): int
// ===== CODE
$return_cubrid_num_rows = cubrid_num_rows(

$result // resource result - result comes from a call to cubrid_execute(), cubrid_query() and cubrid_prepare()

); // Return Values
// Number of rows, when process is successful.
// 0 when the query was done in async mode.
// -1, if SQL statement is not SELECT.
// false when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_num_rows() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code");
// 
// $row_num = cubrid_num_rows($req);
// $col_num = cubrid_num_cols($req);
// 
// printf("Row Num: %d\nColumn Num: %d\n", $row_num, $col_num);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Row Num: 6
// Column Num: 2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-num-rows.php
// ========== CUBRID_NUM_ROWS - END

// SYNTAX:
// int cubrid_num_rows(resource $result)

return $return_cubrid_num_rows; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PCONNECT_WITH_URL
// ============================== PUBLIC
// ============================== ABOUT
// Open a persistent connection to CUBRID server.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_pconnect_with_url() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_pconnect_with_url($conn_url, $userid, $passwd)
{
$return_cubrid_pconnect_with_url = null;

// ========== CUBRID_PCONNECT_WITH_URL - BEGIN
// ===== ABOUT
// Open a persistent connection to CUBRID server
// ===== DESCRIPTION
// Establishes a persistent connection to a CUBRID server.
// cubrid_pconnect_with_url() acts very much like cubrid_connect_with_url() with two major differences.
// First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, port, dbname and userid. If one is found, an identifier for it will be returned instead of opening a new connection.
// Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (cubrid_close() or cubrid_disconnect() will not close links established by cubrid_pconnect_with_url()).
// This type of link is therefore called 'persistent'.
// <url> ::= CUBRID:<host>:<db_name>:<db_user>:<db_password>:[?<properties>]
// <properties> ::= <property> [&<property>]
// <properties> ::= alhosts=<alternative_hosts>[ &rctime=<time>]
// <properties> ::= login_timeout=<milli_sec>
// <properties> ::= query_timeout=<milli_sec>
// <properties> ::= disconnect_on_query_timeout=true|false
// <alternative_hosts> ::= <standby_broker1_host>:<port> [,<standby_broker2_host>:<port>]
// <host> := HOSTNAME | IP_ADDR
// <time> := SECOND
// <milli_sec> := MILLI SECOND
// * host : A host name or IP address of the master database
// * db_name : A name of the database
// * db_user : A name of the database user
// * db_password : A database user password
// * alhosts : Specifies the broker information of the standby server, which is used for failover when it is impossible to connect to the active server. You can specify multiple brokers for failover, and the connection to the brokers is attempted in the order listed in alhosts
// * rctime : An interval between the attempts to connect to the active broker in which failure occurred. After a failure occurs, the system connects to the broker specified by althosts (failover), terminates the transaction, and then attempts to connect to the active broker of the master database at every rctime. The default value is 600 seconds.
// * login_timeout : Timeout value (unit: msec.) for database login. The default value is 0, which means infinite postponement.
// * query_timeout : Timeout value (unit: msec.) for query request. Upon timeout, a message to cancel requesting a query transferred to server is sent. The return value can depend on the disconnect_on_query_timeout configuration; even though the message to cancel a request is sent to server, that request may succeed.
// * disconnect_on_query_timeout : Configures a value whether to immediately return an error of function being executed upon timeout. The default value is false.
//  Note:
//  ? and : that are used as identifiers in PHP connection URL can't be included in the password. The following is an example of a password that is invalid to use as connection URL because it contains "?:".
//  $url = "CUBRID:localhost:33000:tdb:dba:12?:?login_timeout=100";
//  Passwords that contain ? or : may be passed as a separate parameter.
//  $url = "CUBRID:localhost:33000:tbd:::?login_timeout=100";
//  $conn = cubrid_pconnect_with_url ($url, "dba", "12?");
//  If user or password is empty,you can't delete ":",the following is an example.
//  $url = "CUBRID:localhost:33000:demodb:::";
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_pconnect_with_url(string $conn_url, string $userid = ?, string $passwd = ?): resource
// ===== CODE
$return_cubrid_pconnect_with_url = cubrid_pconnect_with_url(

$conn_url, // string conn_url - A character string that contains server connection information.

$userid, // string userid - User name for the database.

$passwd // string passwd - User password.

); // Return Values
// Connection identifier, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_pconnect_with_url() url without properties example
// [php]
// $conn_url = "CUBRID:127.0.0.1:33000:demodb:dba::";
// $con = cubrid_pconnect_with_url ($conn_url);
// 
// if ($con) {
//    echo "connected successfully";
//    cubrid_execute($con, "create table person(id int,name char(16))");
//    $req =cubrid_execute($con, "insert into person values(1,'James')");
// 
//    if ($req) {
//       cubrid_close_request ($req);
//       cubrid_commit ($con);
//    } else {
//       cubrid_rollback ($con);
//    }
//    cubrid_disconnect ($con);
// }
// [/php]
// [/example]
// [example]
// Example #2 cubrid_pconnect_with_url() url with properties example
// [php]
// $conn_url = "CUBRID:127.0.0.1:33000:demodb:dba::?althost=10.34.63.132:33088&rctime=100";
// $con = cubrid_pconnect_with_url ($conn_url);
// 
// if ($con) {
//    echo "connected successfully";
//    $req =cubrid_execute($con, "insert into person values(1,'James')");
// 
//    if ($req) {
//       cubrid_close_request ($req);
//       cubrid_commit ($con);
//    } else {
//       cubrid_rollback ($con);
//    }
//    cubrid_disconnect ($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-pconnect-with-url.php
// ========== CUBRID_PCONNECT_WITH_URL - END

// SYNTAX:
// resource cubrid_pconnect_with_url(string $conn_url, string $userid, string $passwd)

return $return_cubrid_pconnect_with_url; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PCONNECT_WITH_URL
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PCONNECT
// ============================== PUBLIC
// ============================== ABOUT
// Open a persistent connection to a CUBRID server.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_pconnect() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_pconnect($host, $port, $dbname, $userid, $passwd)
{
$return_cubrid_pconnect = null;

// ========== CUBRID_PCONNECT - BEGIN
// ===== ABOUT
// Open a persistent connection to a CUBRID server
// ===== DESCRIPTION
// Establishes a persistent connection to a CUBRID server.
// cubrid_pconnect() acts very much like cubrid_connect() with two major differences.
// First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, port, dbname and userid. If one is found, an identifier for it will be returned instead of opening a new connection.
// Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (cubrid_close() or cubrid_disconnect() will not close links established by cubrid_pconnect()).
// This type of link is therefore called 'persistent'.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_pconnect(
//    string $host,
//    int $port,
//    string $dbname,
//    string $userid = ?,
//    string $passwd = ?
// ): resource
// ===== CODE
$return_cubrid_pconnect = cubrid_pconnect(

$host, // string host - Host name or IP address of CUBRID CAS server.

$port, // int port - Port number of CUBRID CAS server (BROKER_PORT configured in $CUBRID/conf/cubrid_broker.conf).

$dbname, // string dbname - Name of database.

$userid, // string userid - User name for the database.

$passwd // string passwd - User password.

); // Return Values
// Connection identifier, when process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_connect() example
// [php]
// printf("%-30s %s\n", "CUBRID PHP Version:", cubrid_version());
// 
// printf("\n");
// 
// $conn = cubrid_pconnect("localhost", 33000, "demodb", "dba");
// 
// if (!$conn) {
//     die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
// }
// 
// $db_params = cubrid_get_db_parameter($conn);
// 
// while (list($param_name, $param_value) = each($db_params)) {
//     printf("%-30s %s\n", $param_name, $param_value);
// }
// 
// printf("\n");
// 
// $server_info = cubrid_get_server_info($conn);
// $client_info = cubrid_get_client_info();
// 
// printf("%-30s %s\n", "Server Info:", $server_info);
// printf("%-30s %s\n", "Client Info:", $client_info);
// 
// printf("\n");
// 
// $charset = cubrid_get_charset($conn);
// 
// printf("%-30s %s\n", "CUBRID Charset:", $charset);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// CUBRID PHP Version:            9.1.0.0001
// 
// PARAM_ISOLATION_LEVEL          3
// LOCK_TIMEOUT                   -1
// MAX_STRING_LENGTH              1073741823
// PARAM_AUTO_COMMIT              1
// 
// Server Info:                   9.1.0.0212
// Client Info:                   9.1.0
// 
// CUBRID Charset:                iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-pconnect.php
// ========== CUBRID_PCONNECT - END

// SYNTAX:
// resource cubrid_pconnect(string $host, int $port, string $dbname, string $userid, string $passwd)

return $return_cubrid_pconnect; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PCONNECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PREPARE
// ============================== PUBLIC
// ============================== ABOUT
// Prepare a SQL statement for execution.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_prepare() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_prepare($conn_identifier, $prepare_stmt, $option = 0)
{
$return_cubrid_prepare = null;

// ========== CUBRID_PREPARE - BEGIN
// ===== ABOUT
// Prepare a SQL statement for execution
// ===== DESCRIPTION
// The cubrid_prepare() function is a sort of API which represents SQL statements compiled previously to a given connection handle. This pre-compiled SQL statement will be included in the cubrid_prepare().
// Accordingly, you can use this statement effectively to execute several times repeatedly or to process long data. Only a single statement can be used and a parameter may put a question mark (?) to appropriate area in the SQL statement. Add a parameter when you bind a value in the VALUES clause of INSERT statement or in the WHERE clause. Note that it is allowed to bind a value to a MARK(?) by using the cubrid_bind() function only.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_prepare(resource $conn_identifier, string $prepare_stmt, int $option = 0): resource
// ===== CODE
$return_cubrid_prepare = cubrid_prepare(

$conn_identifier, // resource conn_identifier - Connection identifier.

$prepare_stmt, // string prepare_stmt - Prepare query.

$option // int option - OID return option CUBRID_INCLUDE_OID.

); // Return Values
// Request identifier, if process is successful, or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_prepare() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $sql = <<<EOD
// SELECT g.event_code, e.name 
// FROM game g 
// JOIN event e ON g.event_code=e.code 
// WHERE host_year = ? AND event_code NOT IN (SELECT event_code FROM game WHERE host_year=?) GROUP BY event_code;
// EOD;
// 
// $req = cubrid_prepare($conn, $sql);
// 
// cubrid_bind($req, 1, 2004);
// cubrid_bind($req, 2, 2000);
// cubrid_execute($req);
// 
// $row_num = cubrid_num_rows($req);
// printf("There are %d event that exits in 2004 olympic but not in 2000. For example:\n\n", $row_num);
// 
// printf("%-15s %s\n", "Event_code", "Event_name");
// printf("----------------------------\n");
// 
// $row = cubrid_fetch_assoc($req);
// printf("%-15d %s\n", $row["event_code"], $row["name"]);
// $row = cubrid_fetch_assoc($req);
// printf("%-15d %s\n", $row["event_code"], $row["name"]);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// There are 27 event that exits in 2004 olympic but not in 2000. For example:
// 
// Event_code      Event_name
// ----------------------------
// 20063           +91kg
// 20070           64kg
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-prepare.php
// ========== CUBRID_PREPARE - END

// SYNTAX:
// resource cubrid_prepare(resource $conn_identifier, string $prepare_stmt, int $option = 0)

return $return_cubrid_prepare; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PREPARE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PUT
// ============================== PUBLIC
// ============================== ABOUT
// Update a column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_put() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_put($conn_identifier, $oid, $attr, $value)
{
$return_cubrid_put = false;

// ========== CUBRID_PUT - BEGIN
// ===== ABOUT
// Update a column using OID
// ===== DESCRIPTION
// The cubrid_put() function is used to update an attribute of the instance of the given oid.
// You can update single attribute by using string data type to set attr. In such case, you can use integer, floating point or string type data for the value argument. To update multiple number of attributes, you can disregard the attr argument, and set value argument with associative array data type.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_put(
//    resource $conn_identifier,
//    string $oid,
//    string $attr = ?,
//    mixed $value
// ): bool
// ===== CODE
$return_cubrid_put = cubrid_put(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance that you want to update.

$attr, // string attr - Name of the attribute that you want to update.

$value // mixed value - New value that you want to assign to the attribute.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_put() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_put($conn, $oid, "b", array(2, 4, 8));
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// array(3) {
//   [0]=>
//   string(1) "2"
//   [1]=>
//   string(1) "4"
//   [2]=>
//   string(1) "8"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-put.php
// ========== CUBRID_PUT - END

// SYNTAX:
// bool cubrid_put(resource $conn_identifier, string $oid, string $attr, mixed $value)

return $return_cubrid_put; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PUT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ROLLBACK
// ============================== PUBLIC
// ============================== ABOUT
// Roll back a transaction.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_rollback() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_rollback($conn_identifier)
{
$return_cubrid_rollback = false;

// ========== CUBRID_ROLLBACK - BEGIN
// ===== ABOUT
// Roll back a transaction
// ===== DESCRIPTION
// The cubrid_rollback() function executes rollback on the transaction pointed by conn_identifier, currently in progress.
// Connection to server is closed after calling cubrid_rollback(). Connection handle, however, is still valid.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_rollback(resource $conn_identifier): bool
// ===== CODE
$return_cubrid_rollback = cubrid_rollback(

$conn_identifier // resource conn_identifier - Connection identifier.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_rollback() example
// [php]
// $conn = cubrid_connect("127.0.0.1", 33000, "demodb", "dba");
// cubrid_set_autocommit($conn,false);
// 
// @cubrid_execute($conn, "DROP TABLE publishers");
// 
// $sql = <<<EOD
// CREATE TABLE publishers(
// pub_id CHAR(3), 
// pub_name VARCHAR(20), 
// city VARCHAR(15), 
// state CHAR(2), 
// country VARCHAR(15)
// )
// EOD;
// 
// if (!cubrid_execute($conn, $sql)) {
//     printf("Error facility: %d\nError code: %d\nError msg: %s\n", cubrid_error_code_facility(), cubrid_error_code(), cubrid_error_msg());
// 
//     cubrid_disconnect($conn);
//     exit;
// }
// 
// $req = cubrid_prepare($conn, "INSERT INTO publishers VALUES(?, ?, ?, ?, ?)");
// 
// $id_list = array("P01", "P02", "P03", "P04");
// $name_list = array("Abatis Publishers", "Core Dump Books", "Schadenfreude Press", "Tenterhooks Press");
// $city_list = array("New York", "San Francisco", "Hamburg", "Berkeley");
// $state_list = array("NY", "CA", NULL, "CA");
// $country_list = array("USA", "USA", "Germany", "USA");
// 
// for ($i = 0, $size = count($id_list); $i < $size; $i++) {
//     cubrid_bind($req, 1, $id_list[$i]);
//     cubrid_bind($req, 2, $name_list[$i]);
//     cubrid_bind($req, 3, $city_list[$i]);
//     cubrid_bind($req, 4, $state_list[$i]);
//     cubrid_bind($req, 5, $country_list[$i]);
// 
//     if (!($ret = cubrid_execute($req))) {
//         break;
//     }
// }
// 
// if (!$ret) {
//     cubrid_rollback($conn);
// } else {
//     cubrid_commit($conn);
// 
//     $req = cubrid_execute($conn, "SELECT * FROM publishers");
//     while ($result = cubrid_fetch_assoc($req)) {
//         printf("%-3s %-20s %-15s %-3s %-15s\n", 
//             $result["pub_id"], $result["pub_name"], $result["city"], $result["state"], $result["country"]);
//     }
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// P01 Abatis Publishers    New York        NY  USA            
// P02 Core Dump Books      San Francisco   CA  USA            
// P03 Schadenfreude Press  Hamburg             Germany        
// P04 Tenterhooks Press    Berkeley        CA  USA
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-rollback.php
// ========== CUBRID_ROLLBACK - END

// SYNTAX:
// bool cubrid_rollback(resource $conn_identifier)

return $return_cubrid_rollback; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ROLLBACK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SCHEMA
// ============================== PUBLIC
// ============================== ABOUT
// Get the requested schema information.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_schema() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_schema($conn_identifier, $schema_type, $class_name, $attr_name)
{
$return_cubrid_schema = null;

// ========== CUBRID_SCHEMA - BEGIN
// ===== ABOUT
// Get the requested schema information
// ===== DESCRIPTION
// The cubrid_schema() function is used to get the requested schema information from database. To get information about specific class, set the class_name, to get information about specific attribute (can be used only with CUBRID_SCH_ATTR_PRIVILEGE), set the attr_name.
// The result of the cubrid_schema() function is returned as a two-dimensional array (column (associative array) * row (numeric array)). The following tables shows types of schema and the column structure of the result array to be returned based on the schema type.
// 
// Result Composition of Each Type
// Schema                                            | Column Number | Column Name            | Value
// CUBRID_SCH_CLASS                                  | 1             | NAME                   |
//                                                   | 2             | TYPE                   | 0:system class 1:vclass 2:class
// CUBRID_SCH_VCLASS                                 | 1             | NAME                   |
//                                                   | 2             | TYPE                   | 1:vclass
// CUBRID_SCH_QUERY_SPEC                             | 1             | QUERY_SPEC             |
// CUBRID_SCH_ATTRIBUTE / CUBRID_SCH_CLASS_ATTRIBUTE | 1             | ATTR_NAME              |
//                                                   | 2             | DOMAIN                 |
//                                                   | 3             | SCALE                  |
//                                                   | 4             | PRECISION              |
//                                                   | 5             | INDEXED                | 1:indexed
//                                                   | 6             | NOT NULL               | 1:not null
//                                                   | 7             | SHARED                 | 1:shared
//                                                   | 8             | UNIQUE                 | 1:unique
//                                                   | 9             | DEFAULT                |
//                                                   | 10            | ATTR_ORDER             | base:1
//                                                   | 11            | CLASS_NAME             |
//                                                   | 12            | SOURCE_CLASS           |
//                                                   | 13            | IS_KEY                 | 1:key
// CUBRID_SCH_METHOD / CUBRID_SCH_CLASS_METHOD       | 1             | NAME                   |
//                                                   | 2             | RET_DOMAIN             |
//                                                   | 3             | ARG_DOMAIN             |
// CUBRID_SCH_METHOD_FILE                            | 1             | METHOD_FILE            |
// CUBRID_SCH_SUPERCLASS / CUBRID_SCH_DIRECT_SUPER_CLASS / CUBRID_SCH_SUBCLASS | 1 | CLASS_NAME |
//                                                   | 2             | TYPE                   | 0:system class 1:vclass 2:class
// CUBRID_SCH_CONSTRAINT                             | 1             | TYPE                   | 0:unique 1:index 2:reverse unique 3:reverse index
//                                                   | 2             | NAME                   |
//                                                   | 3             | ATTR_NAME              |
//                                                   | 4             | NUM_PAGES              |
//                                                   | 5             | NUM_KEYS               |
//                                                   | 6             | PRIMARY_KEY            | 1:primary key
//                                                   | 7             | KEY_ORDER              | base:1
// CUBRID_SCH_TRIGGER                                | 1             | NAME                   |
//                                                   | 2             | STATUS                 |
//                                                   | 3             | EVENT                  |
//                                                   | 4             | TARGET_CLASS           |
//                                                   | 5             | TARGET_ATTR            |
//                                                   | 6             | ACTION_TIME            |
//                                                   | 7             | ACTION                 |
//                                                   | 8             | PRIORITY               |
//                                                   | 9             | CONDITION_TIME         |
//                                                   | 10            | CONDITION              |
// CUBRID_SCH_CLASS_PRIVILEGE / CUBRID_SCH_ATTR_PRIVILEGE | 1        | CLASS_NAME / ATTR_NAME |
//                                                   | 2             | PRIVILEGE              |
//                                                   | 3             | GRANTABLE              |
// CUBRID_SCH_PRIMARY_KEY                            | 1             | CLASS_NAME             |
//                                                   | 2             | ATTR_NAME              |
//                                                   | 3             | KEY_SEQ                | base:1
//                                                   | 4             | KEY_NAME               |
// CUBRID_SCH_IMPORTED_KEYS / CUBRID_SCH_EXPORTED_KEYS / CUBRID_SCH_CROSS_REFERENCE | 1 | PKTABLE_NAME |
//                                                   | 2             | PKCOLUMN_NAME          |
//                                                   | 3             | FKTABLE_NAME           | base:1
//                                                   | 4             | FKCOLUMN_NAME          |
//                                                   | 5             | KEY_SEQ                | base:1
//                                                   | 6             | UPDATE_ACTION          | 0:cascade 1:restrict 2:no action 3:set null
//                                                   | 7             | DELETE_ACTION          | 0:cascade 1:restrict 2:no action 3:set null
//                                                   | 8             | FK_NAME                |
//                                                   | 9             | PK_NAME                |
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_schema(
//    resource $conn_identifier,
//    int $schema_type,
//    string $class_name = ?,
//    string $attr_name = ?
// ): array
// ===== CODE
$return_cubrid_schema = cubrid_schema(

$conn_identifier, // resource conn_identifier - Connection identifier.

$schema_type, // int schema_type - Schema data that you want to know.

$class_name, // string class_name - Class you want to know the schema of.

$attr_name // string attr_name - Attribute you want to know the schema of.

); // Return Values
// Array containing the schema information, when process is successful, or false on failure.
// 
// Changelog
// Version - Description
// 8.3.1   - Change return value: when process is unsuccessful, return false, not -1.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_schema() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// printf("\n--- Primary Key ---\n");
// $pk = cubrid_schema($conn, CUBRID_SCH_PRIMARY_KEY, "game");
// var_dump($pk);
// 
// printf("\n--- Foreign Keys ---\n");
// $fk = cubrid_schema($conn, CUBRID_SCH_IMPORTED_KEYS, "game");
// var_dump($fk);
// 
// printf("\n--- Column Attribute ---\n");
// $attr = cubrid_schema($conn, CUBRID_SCH_ATTRIBUTE, "stadium", "area");
// var_dump($attr);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// --- Primary Key ---
// array(3) {
//   [0]=>
//   array(4) {
//     ["CLASS_NAME"]=>
//     string(4) "game"
//     ["ATTR_NAME"]=>
//     string(12) "athlete_code"
//     ["KEY_SEQ"]=>
//     string(1) "3"
//     ["KEY_NAME"]=>
//     string(41) "pk_game_host_year_event_code_athlete_code"
//   }
//   [1]=>
//   array(4) {
//     ["CLASS_NAME"]=>
//     string(4) "game"
//     ["ATTR_NAME"]=>
//     string(10) "event_code"
//     ["KEY_SEQ"]=>
//     string(1) "2"
//     ["KEY_NAME"]=>
//     string(41) "pk_game_host_year_event_code_athlete_code"
//   }
//   [2]=>
//   array(4) {
//     ["CLASS_NAME"]=>
//     string(4) "game"
//     ["ATTR_NAME"]=>
//     string(9) "host_year"
//     ["KEY_SEQ"]=>
//     string(1) "1"
//     ["KEY_NAME"]=>
//     string(41) "pk_game_host_year_event_code_athlete_code"
//   }
// }
// 
// --- Foreign Keys ---
// array(2) {
//   [0]=>
//   array(9) {
//     ["PKTABLE_NAME"]=>
//     string(7) "athlete"
//     ["PKCOLUMN_NAME"]=>
//     string(4) "code"
//     ["FKTABLE_NAME"]=>
//     string(4) "game"
//     ["FKCOLUMN_NAME"]=>
//     string(12) "athlete_code"
//     ["KEY_SEQ"]=>
//     string(1) "1"
//     ["UPDATE_RULE"]=>
//     string(1) "1"
//     ["DELETE_RULE"]=>
//     string(1) "1"
//     ["FK_NAME"]=>
//     string(20) "fk_game_athlete_code"
//     ["PK_NAME"]=>
//     string(15) "pk_athlete_code"
//   }
//   [1]=>
//   array(9) {
//     ["PKTABLE_NAME"]=>
//     string(5) "event"
//     ["PKCOLUMN_NAME"]=>
//     string(4) "code"
//     ["FKTABLE_NAME"]=>
//     string(4) "game"
//     ["FKCOLUMN_NAME"]=>
//     string(10) "event_code"
//     ["KEY_SEQ"]=>
//     string(1) "1"
//     ["UPDATE_RULE"]=>
//     string(1) "1"
//     ["DELETE_RULE"]=>
//     string(1) "1"
//     ["FK_NAME"]=>
//     string(18) "fk_game_event_code"
//     ["PK_NAME"]=>
//     string(13) "pk_event_code"
//   }
// }
// 
// --- Column Attribute ---
// array(1) {
//   [0]=>
//   array(13) {
//     ["ATTR_NAME"]=>
//     string(4) "area"
//     ["DOMAIN"]=>
//     string(1) "7"
//     ["SCALE"]=>
//     string(1) "2"
//     ["PRECISION"]=>
//     string(2) "10"
//     ["INDEXED"]=>
//     string(1) "0"
//     ["NON_NULL"]=>
//     string(1) "0"
//     ["SHARED"]=>
//     string(1) "0"
//     ["UNIQUE"]=>
//     string(1) "0"
//     ["DEFAULT"]=>
//     NULL
//     ["ATTR_ORDER"]=>
//     string(1) "4"
//     ["CLASS_NAME"]=>
//     string(7) "stadium"
//     ["SOURCE_CLASS"]=>
//     string(7) "stadium"
//     ["IS_KEY"]=>
//     string(1) "0"
//   }
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-schema.php
// ========== CUBRID_SCHEMA - END

// SYNTAX:
// array cubrid_schema(resource $conn_identifier, int $schema_type, string $class_name, string $attr_name)

return $return_cubrid_schema; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SCHEMA
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_DROP
// ============================== PUBLIC
// ============================== ABOUT
// Delete an element from sequence type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_seq_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_seq_drop($conn_identifier, $oid, $attr_name, $index)
{
$return_cubrid_seq_drop = false;

// ========== CUBRID_SEQ_DROP - BEGIN
// ===== ABOUT
// Delete an element from sequence type column using OID
// ===== DESCRIPTION
// The cubrid_seq_drop() function is used to delete an element you request from the given sequence type attribute in the database.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_seq_drop(
//    resource $conn_identifier,
//    string $oid,
//    string $attr_name,
//    int $index
// ): bool
// ===== CODE
$return_cubrid_seq_drop = cubrid_seq_drop(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance you want to work with.

$attr_name, // string attr_name - Name of the attribute that you want to delete an element from.

$index // int index - Index of the element that you want to delete (1-based).

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_seq_drop() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c sequence(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "c");
// var_dump($attr);
// 
// cubrid_seq_drop($conn, $oid, "c", 4);
// 
// $attr = cubrid_col_get($conn, $oid, "c");
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(4) {
//   [0]=>
//   string(2) "11"
//   [1]=>
//   string(2) "22"
//   [2]=>
//   string(2) "33"
//   [3]=>
//   string(3) "333"
// }
// array(3) {
//   [0]=>
//   string(2) "11"
//   [1]=>
//   string(2) "22"
//   [2]=>
//   string(2) "33"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-seq-drop.php
// ========== CUBRID_SEQ_DROP - END

// SYNTAX:
// bool cubrid_seq_drop(resource $conn_identifier, string $oid, string $attr_name, int $index)

return $return_cubrid_seq_drop; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_DROP
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_INSERT
// ============================== PUBLIC
// ============================== ABOUT
// Insert an element to a sequence type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_seq_insert() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_seq_insert($conn_identifier, $oid, $attr_name, $index, $seq_element)
{
$return_cubrid_seq_insert = false;

// ========== CUBRID_SEQ_INSERT - BEGIN
// ===== ABOUT
// Insert an element to a sequence type column using OID
// ===== DESCRIPTION
// The cubrid_col_insert() function is used to insert an element to a sequence type attribute in a requested location.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_seq_insert(
//    resource $conn_identifier,
//    string $oid,
//    string $attr_name,
//    int $index,
//    string $seq_element
// ): bool
// ===== CODE
$return_cubrid_seq_insert = cubrid_seq_insert(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance you want to work with.

$attr_name, // string attr_name - Name of the attribute you want to insert an instance to.

$index, // int index - Location of the element, you want to insert the element to (1-based).

$seq_element // string seq_element - Content of the element that you want to insert.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_seq_insert() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c sequence(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "c");
// var_dump($attr);
// 
// cubrid_seq_insert($conn, $oid, "c", 5, "44");
// 
// $attr = cubrid_col_get($conn, $oid, "c");
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(4) {
//   [0]=>
//   string(2) "11"
//   [1]=>
//   string(2) "22"
//   [2]=>
//   string(2) "33"
//   [3]=>
//   string(3) "333"
// }
// array(5) {
//   [0]=>
//   string(2) "11"
//   [1]=>
//   string(2) "22"
//   [2]=>
//   string(2) "33"
//   [3]=>
//   string(3) "333"
//   [4]=>
//   string(2) "44"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-seq-insert.php
// ========== CUBRID_SEQ_INSERT - END

// SYNTAX:
// bool cubrid_seq_insert(resource $conn_identifier, string $oid, string $attr_name, int $index, string $seq_element)

return $return_cubrid_seq_insert; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_INSERT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_PUT
// ============================== PUBLIC
// ============================== ABOUT
// Update the element value of sequence type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_seq_put() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_seq_put($conn_identifier, $oid, $attr_name, $index, $seq_element)
{
$return_cubrid_seq_put = false;

// ========== CUBRID_SEQ_PUT - BEGIN
// ===== ABOUT
// Update the element value of sequence type column using OID
// ===== DESCRIPTION
// The cubrid_seq_put() function is used to update the content of the requested element in a sequent type attribute using OID.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_seq_put(
//    resource $conn_identifier,
//    string $oid,
//    string $attr_name,
//    int $index,
//    string $seq_element
// ): bool
// ===== CODE
$return_cubrid_seq_put = cubrid_seq_put(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance you want to work with.

$attr_name, // string attr_name - Name of the attribute that you want to update an element.

$index, // int index - Index (1-based) of the element that you want to update.

$seq_element // string seq_element - New content that you want to use for the update.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_seq_put() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c sequence(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "c");
// var_dump($attr);
// 
// cubrid_seq_put($conn, $oid, "c", 1, "111");
// 
// $attr = cubrid_col_get($conn, $oid, "c");
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(4) {
//   [0]=>
//   string(2) "11"
//   [1]=>
//   string(2) "22"
//   [2]=>
//   string(2) "33"
//   [3]=>
//   string(3) "333"
// }
// array(4) {
//   [0]=>
//   string(3) "111"
//   [1]=>
//   string(2) "22"
//   [2]=>
//   string(2) "33"
//   [3]=>
//   string(3) "333"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-seq-put.php
// ========== CUBRID_SEQ_PUT - END

// SYNTAX:
// bool cubrid_seq_put(resource $conn_identifier, string $oid, string $attr_name, int $index, string $seq_element)

return $return_cubrid_seq_put; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEQ_PUT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_ADD
// ============================== PUBLIC
// ============================== ABOUT
// Insert a single element to set type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_set_add() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_set_add($conn_identifier, $oid, $attr_name, $set_element)
{
$return_cubrid_set_add = false;

// ========== CUBRID_SET_ADD - BEGIN
// ===== ABOUT
// Insert a single element to set type column using OID
// ===== DESCRIPTION
// The cubrid_set_add() function is used to insert a single element to a set type attribute (set, multiset, sequence) you requested.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_set_add(
//    resource $conn_identifier,
//    string $oid,
//    string $attr_name,
//    string $set_element
// ): bool
// ===== CODE
$return_cubrid_set_add = cubrid_set_add(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance you want to work with.

$attr_name, // string attr_name - Name of the attribute you want to insert an element.

$set_element // string set_element - Content of the element you want to insert.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_set_add() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_set_add($conn, $oid, "b", "4");
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// array(4) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
//   [3]=>
//   string(1) "4"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-set-add.php
// ========== CUBRID_SET_ADD - END

// SYNTAX:
// bool cubrid_set_add(resource $conn_identifier, string $oid, string $attr_name, string $set_element)

return $return_cubrid_set_add; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_ADD
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_AUTOCOMMIT
// ============================== PUBLIC
// ============================== ABOUT
// Set autocommit mode of the connection.
// ============================== SUPPORT
// PECL_CUBRID_8_4_0
// ============================== USING FUNCTIONS (1)
// cubrid_set_autocommit() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_set_autocommit($conn_identifier, $mode)
{
$return_cubrid_set_autocommit = false;

// ========== CUBRID_SET_AUTOCOMMIT - BEGIN
// ===== ABOUT
// Set autocommit mode of the connection
// ===== DESCRIPTION
// The cubrid_set_autocommit() function is used to set the CUBRID database auto-commit mode of the current database connection.
// In CUBRID PHP, auto-commit mode is disabled by default for transaction management. When auto-commit mode is truned from off to on, any pending work is automatically committed.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_0
// ===== SYNTAX
// cubrid_set_autocommit(resource $conn_identifier, bool $mode): bool
// ===== CODE
$return_cubrid_set_autocommit = cubrid_set_autocommit(

$conn_identifier, // resource conn_identifier - Connection identifier.

$mode // bool mode - Auto-commit mode. The following constants can be used:
// * CUBRID_AUTOCOMMIT_FALSE
// * CUBRID_AUTOCOMMIT_TRUE

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-set-autocommit.php
// ========== CUBRID_SET_AUTOCOMMIT - END

// SYNTAX:
// bool cubrid_set_autocommit(resource $conn_identifier, bool $mode)

return $return_cubrid_set_autocommit; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_AUTOCOMMIT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_DB_PARAMETER
// ============================== PUBLIC
// ============================== ABOUT
// Sets the CUBRID database parameters.
// ============================== SUPPORT
// PECL_CUBRID_8_4_0
// ============================== USING FUNCTIONS (1)
// cubrid_set_db_parameter() - PECL_CUBRID >= PECL_CUBRID_8_4_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_set_db_parameter($conn_identifier, $param_type, $param_value)
{
$return_cubrid_set_db_parameter = false;

// ========== CUBRID_SET_DB_PARAMETER - BEGIN
// ===== ABOUT
// Sets the CUBRID database parameters
// ===== DESCRIPTION
// The cubrid_set_db_parameter() function is used to set the CUBRID database parameters. It can set the following CUBRID database parameters:
// * PARAM_ISOLATION_LEVEL
// * PARAM_LOCK_TIMEOUT
// Note: The auto-commit mode can be set by using cubrid_set_autocommit().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_0
// ===== SYNTAX
// cubrid_set_db_parameter(resource $conn_identifier, int $param_type, int $param_value): bool
// ===== CODE
$return_cubrid_set_db_parameter = cubrid_set_db_parameter(

$conn_identifier, // resource conn_identifier - The CUBRID connection. If the connection identifier is not specified, the last link opened by cubrid_connect() is assumed.

$param_type, // int param_type - Database parameter type.

$param_value // int param_value - Isolation level value (1-6) or lock timeout (in seconds) value.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_get_db_parameter() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// $params = cubrid_get_db_parameter($conn);
// var_dump($params);
// 
// cubrid_set_autocommit($conn, CUBRID_AUTOCOMMIT_TRUE);
// cubrid_set_db_parameter($conn, CUBRID_PARAM_ISOLATION_LEVEL, 2);
// 
// $params_new = cubrid_get_db_parameter($conn);
// var_dump($params_new);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(4) {
//   ["PARAM_ISOLATION_LEVEL"]=>
//   int(3)
//   ["PARAM_LOCK_TIMEOUT"]=>
//   int(-1)
//   ["PARAM_MAX_STRING_LENGTH"]=>
//   int(1073741823)
//   ["PARAM_AUTO_COMMIT"]=>
//   int(0)
// }
// array(4) {
//   ["PARAM_ISOLATION_LEVEL"]=>
//   int(2)
//   ["PARAM_LOCK_TIMEOUT"]=>
//   int(-1)
//   ["PARAM_MAX_STRING_LENGTH"]=>
//   int(1073741823)
//   ["PARAM_AUTO_COMMIT"]=>
//   int(1)
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-set-db-parameter.php
// ========== CUBRID_SET_DB_PARAMETER - END

// SYNTAX:
// bool cubrid_set_db_parameter(resource $conn_identifier, int $param_type, int $param_value)

return $return_cubrid_set_db_parameter; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_DB_PARAMETER
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_DROP
// ============================== PUBLIC
// ============================== ABOUT
// Delete an element from set type column using OID.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_set_drop() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_set_drop($conn_identifier, $oid, $attr_name, $set_element)
{
$return_cubrid_set_drop = false;

// ========== CUBRID_SET_DROP - BEGIN
// ===== ABOUT
// Delete an element from set type column using OID
// ===== DESCRIPTION
// The cubrid_set_drop() function is used to delete an element that you request from the given set type (set, multiset) attribute of the database.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_set_drop(
//    resource $conn_identifier,
//    string $oid,
//    string $attr_name,
//    string $set_element
// ): bool
// ===== CODE
$return_cubrid_set_drop = cubrid_set_drop(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - OID of the instance you want to work with.

$attr_name, // string attr_name - Name of the attribute you want to delete an element from.

$set_element // string set_element - Content of the element you want to delete.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_set_drop() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb", "dba");
// 
// @cubrid_execute($conn, "DROP TABLE foo");
// cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
// cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);
// 
// cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
// $oid = cubrid_current_oid($req);
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_set_drop($conn, $oid, "b", "1");
// 
// $attr = cubrid_col_get($conn, $oid, "b");
// var_dump($attr);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(3) {
//   [0]=>
//   string(1) "1"
//   [1]=>
//   string(1) "2"
//   [2]=>
//   string(1) "3"
// }
// array(2) {
//   [0]=>
//   string(1) "2"
//   [1]=>
//   string(1) "3"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-set-drop.php
// ========== CUBRID_SET_DROP - END

// SYNTAX:
// bool cubrid_set_drop(resource $conn_identifier, string $oid, string $attr_name, string $set_element)

return $return_cubrid_set_drop; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_DROP
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_QUERY_TIMEOUT
// ============================== PUBLIC
// ============================== ABOUT
// Set the timeout time of query execution.
// ============================== SUPPORT
// PECL_CUBRID_8_4_1
// ============================== USING FUNCTIONS (1)
// cubrid_set_query_timeout() - PECL_CUBRID >= PECL_CUBRID_8_4_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_set_query_timeout($req_identifier, $timeout)
{
$return_cubrid_set_query_timeout = false;

// ========== CUBRID_SET_QUERY_TIMEOUT - BEGIN
// ===== ABOUT
// Set the timeout time of query execution
// ===== DESCRIPTION
// The cubrid_set_query_timeout() function is used to set the timeout time of query execution.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_4_1
// ===== SYNTAX
// cubrid_set_query_timeout(resource $req_identifier, int $timeout): bool
// ===== CODE
$return_cubrid_set_query_timeout = cubrid_set_query_timeout(

$req_identifier, // resource req_identifier - Request identifier.

$timeout // int timeout - Timeout time in milliseconds.

); // Return Values
// Returns true on success or false on failure.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-set-query-timeout.php
// ========== CUBRID_SET_QUERY_TIMEOUT - END

// SYNTAX:
// bool cubrid_set_query_timeout(resource $req_identifier, int $timeout)

return $return_cubrid_set_query_timeout; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SET_QUERY_TIMEOUT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_VERSION
// ============================== PUBLIC
// ============================== ABOUT
// Get the CUBRID PHP module's version.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_version() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_version()
{
$return_cubrid_version = null;

// ========== CUBRID_VERSION - BEGIN
// ===== ABOUT
// Get the CUBRID PHP module's version
// ===== DESCRIPTION
// The cubrid_version() function is used to get the CUBRID PHP module's version.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_version(): string
// ===== CODE
$return_cubrid_version = cubrid_version(

// This function has no parameters.

); // Return Values
// Version information (eg. "8.3.1.0001").
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_version() example
// [php]
// printf("%-30s %s\n", "CUBRID PHP Version:", cubrid_version());
// 
// printf("\n");
// 
// $conn = cubrid_connect("localhost", 33088, "demodb", "dba");
// 
// if (!$conn) {
//     die('Connect Error ('. cubrid_error_code() .')' . cubrid_error_msg());
// }
// 
// $db_params = cubrid_get_db_parameter($conn);
// 
// while (list($param_name, $param_value) = each($db_params)) {
//     printf("%-30s %s\n", $param_name, $param_value);
// }
// 
// printf("\n");
// 
// $server_info = cubrid_get_server_info($conn);
// $client_info = cubrid_get_client_info();
// 
// printf("%-30s %s\n", "Server Info:", $server_info);
// printf("%-30s %s\n", "Client Info:", $client_info);
// 
// printf("\n");
// 
// $charset = cubrid_get_charset($conn);
// 
// printf("%-30s %s\n", "CUBRID Charset:", $charset);
// 
// cubrid_disconnect($conn);
// 
// [/php]
// The above example will output:
// [result]
// CUBRID PHP Version:            9.1.0.0001
// 
// PARAM_ISOLATION_LEVEL          3
// LOCK_TIMEOUT                   -1
// MAX_STRING_LENGTH              1073741823
// PARAM_AUTO_COMMIT              1
// 
// Server Info:                   9.1.0.0212
// Client Info:                   9.1.0
// 
// CUBRID Charset:                iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-version.php
// ========== CUBRID_VERSION - END

// SYNTAX:
// string cubrid_version()

return $return_cubrid_version; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_VERSION
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_AFFECTED_ROWS
// ============================== PUBLIC
// ============================== ABOUT
// Return the number of rows affected by the last SQL statement.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_affected_rows() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_affected_rows($conn_identifier)
{
$return_cubrid_affected_rows = 0;

// ========== CUBRID_AFFECTED_ROWS - BEGIN
// ===== ABOUT
// Return the number of rows affected by the last SQL statement
// ===== DESCRIPTION
// The cubrid_affected_rows() function is used to get the number of rows affected by the SQL statement (INSERT, DELETE, UPDATE).
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_affected_rows(resource $conn_identifier = ?): int
// 
// cubrid_affected_rows(resource $req_identifier = ?): int
// ===== CODE
$return_cubrid_affected_rows = cubrid_affected_rows(

$conn_identifier // resource conn_identifier - The CUBRID connection. If the connection identifier is not specified, the last link opend by cubrid_connect() is assumed.

// resource req_identifier - Request Identifier, could be returned from either cubrid_prepare() or cubrid_execute(). If the request identifier is not specified, the last identifier requested by cubrid_prepare() or cubrid_execute() is assumed.

); // Return Values
// Number of rows affected by the SQL statement, when process is successful.
// -1, when SQL statement is not INSERT, DELETE or UPDATE.
// false, when the request identifier is not specified, and there is no last request.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_affected_rows() example
// [php]
// $conn = cubrid_connect('localhost', 33000, 'demodb', 'dba', '');
// cubrid_execute($conn, "DROP TABLE IF EXISTS cubrid_test");
// cubrid_execute($conn, "CREATE TABLE cubrid_test (d varchar)");
// $sql_stmt = "INSERT INTO cubrid_test(d) VALUES('php-test')";
// $req = cubrid_prepare($conn, $sql_stmt);
// 
// for ($i = 0; $i < 10; $i++) {
//     cubrid_execute($req);
// }
// cubrid_commit($conn);
// 
// $req = cubrid_execute($conn, "DELETE FROM cubrid_test WHERE d='php-test'", CUBRID_ASYNC);
// var_dump(cubrid_affected_rows());
// var_dump(cubrid_affected_rows($conn));
// var_dump(cubrid_affected_rows($req));
// 
// cubrid_disconnect($conn);
// 
// print "done!";
// [/php]
// The above example will output:
// [result]
// Rows deleted: 5
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-23)
// URL: https://www.php.net/manual/en/function.cubrid-affected-rows.php
// ========== CUBRID_AFFECTED_ROWS - END

// SYNTAX:
// int cubrid_affected_rows(resource $conn_identifier)

return $return_cubrid_affected_rows; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_AFFECTED_ROWS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLIENT_ENCODING
// ============================== PUBLIC
// ============================== ABOUT
// Return the current CUBRID connection charset.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_client_encoding() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_client_encoding($conn_identifier)
{
$return_cubrid_client_encoding = null;

// ========== CUBRID_CLIENT_ENCODING - BEGIN
// ===== ABOUT
// Return the current CUBRID connection charset
// ===== DESCRIPTION
// This function returns the current CUBRID connection charset and is similar to the CUBRID function cubrid_get_charset().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_client_encoding(resource $conn_identifier = ?): string
// ===== CODE
$return_cubrid_client_encoding = cubrid_client_encoding(

$conn_identifier // resource conn_identifier - The CUBRID connection. If the connection identifier is not specified, the last link opened by cubrid_connect() is assumed.

); // Return Values
// A string that represents the CUBRID connection charset; on success.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_client_encoding() example
// [php]
// 
// $con = cubrid_connect("localhost", 33000, "demodb");
// if (!$con)
// {
//     die('Could not connect.');
// }
// 
// printf("CUBRID current charset: %s\n", cubrid_client_encoding($con));
// 
// [/php]
// The above example will output:
// [result]
// CUBRID current charset: iso8859-1
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-25)
// URL: https://www.php.net/manual/en/function.cubrid-client-encoding.php
// ========== CUBRID_CLIENT_ENCODING - END

// SYNTAX:
// string cubrid_client_encoding(resource $conn_identifier)

return $return_cubrid_client_encoding; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLIENT_ENCODING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE
// ============================== PUBLIC
// ============================== ABOUT
// Close CUBRID connection.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_close() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_close($conn_identifier)
{
$return_cubrid_close = false;

// ========== CUBRID_CLOSE - BEGIN
// ===== ABOUT
// Close CUBRID connection
// ===== DESCRIPTION
// The cubrid_close() function ends the transaction currently in process, closes the connection handle and disconnects from server. If there is any request handles not closed yet at this point, they will be closed. It is similar to the CUBRID function cubrid_disconnect().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_close(resource $conn_identifier = ?): bool
// ===== CODE
$return_cubrid_close = cubrid_close(

$conn_identifier // resource conn_identifier - The CUBRID connection identifier. If the connection identifier is not specified, the last connection opened by cubrid_connect() is assumed.

); // Return Values
// true, when process is successful.
// false, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_close() example
// [php]
// $con = cubrid_connect ("localhost", 33000, "demodb");
// if ($con) {
//    echo "connected successfully";
//    $req = cubrid_execute ( $con, "insert into person values(1,'James')");
//    if ($req) {
//       cubrid_close_request ($req);
//       cubrid_commit ($con);
//    } else {
//       cubrid_rollback ($con);
//    }
//    cubrid_close ($con);
// }
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-25)
// URL: https://www.php.net/manual/en/function.cubrid-close.php
// ========== CUBRID_CLOSE - END

// SYNTAX:
// bool cubrid_close(resource $conn_identifier)

return $return_cubrid_close; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_CLOSE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DATA_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Move the internal row pointer of the CUBRID result.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_data_seek() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_data_seek($result, $row_number)
{
$return_cubrid_data_seek = false;

// ========== CUBRID_DATA_SEEK - BEGIN
// ===== ABOUT
// Move the internal row pointer of the CUBRID result
// ===== DESCRIPTION
// This function performs the moving of the internal row pointer of the CUBRID result (associated with the specified result identifier) to point to a specific row number. There are functions, such as cubrid_fetch_assoc(), which use the current stored value of row number.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_data_seek(resource $result, int $row_number): bool
// ===== CODE
$return_cubrid_data_seek = cubrid_data_seek(

$result, // resource result - The result.

$row_number // int row_number - This is the desired row number of the new result pointer.

); // Return Values
// Returns true on success or false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_data_seek() example
// [php]
// $conn = cubrid_connect("127.0.0.1", 33000, "demodb");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code");
// cubrid_data_seek($req, 0);
// 
// $result = cubrid_fetch_row($req);
// var_dump($result);
// 
// cubrid_data_seek($req, 2);
// $result = cubrid_fetch_row($req);
// var_dump($result);
// 
// cubrid_data_seek($req, 4);
// $result = cubrid_fetch_row($req);
// var_dump($result);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(2) {
//   [0]=>
//   string(1) "X"
//   [1]=>
//   string(5) "Mixed"
// }
// array(2) {
//   [0]=>
//   string(1) "M"
//   [1]=>
//   string(3) "Man"
// }
// array(2) {
//   [0]=>
//   string(1) "S"
//   [1]=>
//   string(6) "Silver"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-25)
// URL: https://www.php.net/manual/en/function.cubrid-data-seek.php
// ========== CUBRID_DATA_SEEK - END

// SYNTAX:
// bool cubrid_data_seek(resource $result, int $row_number)

return $return_cubrid_data_seek; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DATA_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DB_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Get db name from results of cubrid_list_dbs.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_db_name() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_db_name($result, $index)
{
$return_cubrid_db_name = null;

// ========== CUBRID_DB_NAME - BEGIN
// ===== ABOUT
// Get db name from results of cubrid_list_dbs
// ===== DESCRIPTION
// Retrieve the database name from a call to cubrid_list_dbs().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_db_name(array $result, int $index): string
// ===== CODE
$return_cubrid_db_name = cubrid_db_name(

$result, // array result - The result pointer from a call to cubrid_list_dbs().

$index // int index - The index into the result set.

); // Return Values
// Returns the database name on success, and false on failure. If false is returned, use cubrid_error() to determine the nature of the error.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_db_name() example
// [php]
// error_reporting(E_ALL);
// 
// $conn = cubrid_connect('localhost', 33000, 'demodb', 'dba', '');
// $db_list = cubrid_list_dbs($conn);
// 
// $i = 0;
// $cnt = count($db_list);
// while ($i < $cnt) {
//     echo cubrid_db_name($db_list, $i) . "\n";
//     $i++;
// }
// [/php]
// The above example will output:
// [result]
// demodb
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-db-name.php
// ========== CUBRID_DB_NAME - END

// SYNTAX:
// string cubrid_db_name(array $result, int $index)

return $return_cubrid_db_name; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_DB_NAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERRNO
// ============================== PUBLIC
// ============================== ABOUT
// Return the numerical value of the error message from previous CUBRID operation.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_errno() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_errno($conn_identifier)
{
$return_cubrid_errno = 0;

// ========== CUBRID_ERRNO - BEGIN
// ===== ABOUT
// Return the numerical value of the error message from previous CUBRID operation
// ===== DESCRIPTION
// Returns the error number from the last CUBRID function.
// The cubrid_errno() function is used to get the error code of the error that occurred during the API execution. Usually, it gets the error code when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_errno(resource $conn_identifier = ?): int
// ===== CODE
$return_cubrid_errno = cubrid_errno(

$conn_identifier // resource conn_identifier - The CUBRID connection identifier. If the connection identifier is not specified, the last connection opened by cubrid_connect() is assumed.

); // Return Values
// Returns the error number from the last CUBRID function, or 0 (zero) if no error occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_errno() example
// [php]
// $con = cubrid_connect('localhost', 33000, 'demodb', 'dba', '');
// $req = cubrid_execute($con, "select id, name from person");
// if ($req) {
//     while (list ($id, $name) = cubrid_fetch($req)) 
//     echo $id, $name;
// } else {
//     echo "Error Code: ", cubrid_errno($con);
//     echo "Error Message: ", cubrid_error($con);
// }
// [/php]
// The above example will output:
// [result]
// Error Code: -493 Error Message: Syntax: Unknown class "person". select id, [name] from person
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-errno.php
// ========== CUBRID_ERRNO - END

// SYNTAX:
// int cubrid_errno(resource $conn_identifier)

return $return_cubrid_errno; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERRNO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR
// ============================== PUBLIC
// ============================== ABOUT
// Get the error message.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_error() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_error($connection)
{
$return_cubrid_error = null;

// ========== CUBRID_ERROR - BEGIN
// ===== ABOUT
// Get the error message
// ===== DESCRIPTION
// The cubrid_error() function is used to get the error message that occurred during the use of CUBRID API. Usually, it gets error message when API returns false as its return value.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_error(resource $connection = ?): string
// ===== CODE
$return_cubrid_error = cubrid_error(

$connection // resource connection - The CUBRID connection.

); // Return Values
// Error message that occurred.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_error() example
// [php]
// $con = cubrid_connect('localhost', 33000, 'demodb', 'dba', '');
// $req = cubrid_execute($con, "select id, name from person");
// if ($req) {
//     while (list ($id, $name) = cubrid_fetch($req)) 
//     echo $id, $name;
// } else {
//     echo "Error Code: ", cubrid_errno($con);
//     echo "Error Message: ", cubrid_error($con);
// }
// [/php]
// The above example will output:
// [result]
// Error Code: -493 Error Message: Syntax: Unknown class "person". select id, [name] from person
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-error.php
// ========== CUBRID_ERROR - END

// SYNTAX:
// string cubrid_error(resource $connection)

return $return_cubrid_error; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_ERROR
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ARRAY
// ============================== PUBLIC
// ============================== ABOUT
// Fetch a result row as an associative array, a numeric array, or both.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_fetch_array() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== USING CONSTANTS (1)
// CUBRID_BOTH - cubrid_fetch_array()
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch_array($result, $type = CUBRID_BOTH)
{
$return_cubrid_fetch_array = null;

// ========== CUBRID_FETCH_ARRAY - BEGIN
// ===== ABOUT
// Fetch a result row as an associative array, a numeric array, or both
// ===== DESCRIPTION
// The cubrid_fetch_array() function is used to get a single row from the query result and returns an array. The cursor automatically moves to the next row after getting the result.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_fetch_array(resource $result, int $type = CUBRID_BOTH): array
// ===== CODE
$return_cubrid_fetch_array = cubrid_fetch_array(

$result, // resource result - Result comes from a call to cubrid_execute()

$type // int type - Array type of the fetched result CUBRID_NUM, CUBRID_ASSOC, CUBRID_BOTH. If you need to operate the lob object, you can use CUBRID_LOB.

); // Return Values
// Returns an array of strings that corresponds to the fetched row, when process is successful.
// false, when there are no more rows; NULL, when process is unsuccessful.
// The type of returned array depends on how type is defined. By using CUBRID_BOTH (default), you'll get an array with both associative and number indices, and you can decide which data type to use by setting the type argument. The type variable can be set to one of the following values:
// * CUBRID_NUM   : Numerical array (0-based)
// * CUBRID_ASSOC : Associative array
// * CUBRID_BOTH  : Numerical & Associative array (default)
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch_array() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_execute($conn, "SELECT name,area,seats,address FROM stadium WHERE nation_code='GRE' AND seats > 10000");
// 
// printf("%-40s %-10s %-6s %-20s\n", "name", "area", "seats", "address");
// while ($row = cubrid_fetch_array($req, CUBRID_NUM)) {
//     printf("%-40s %-10s %-6s %-20s\n", $row[0], $row[1], $row[2], $row[3]);
// }
// 
// // if you want to operate LOB object, you can use cubrid_fetch_array($req, CUBRID_NUM | CUBRID_LOB)
// 
// cubrid_close_request($req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// name                                     area       seats  address             
// Panathinaiko Stadium                     86300.00   50000  Athens, Greece      
// Olympic Stadium                          54700.00   13000  Athens, Greece      
// Olympic Indoor Hall                      34100.00   18800  Athens, Greece      
// Olympic Hall                             52400.00   21000  Athens, Greece      
// Olympic Aquatic Centre                   42500.00   11500  Athens, Greece      
// Markopoulo Olympic Equestrian Centre     64000.00   15000  Markopoulo, Athens, Greece
// Faliro Coastal Zone Olympic Complex      34650.00   12171  Faliro, Athens, Greece
// Athens Olympic Stadium                   120400.00  71030  Maroussi, Athens, Greece 
// Ano Liossia                              34000.00   12000  Ano Liosia, Athens, Greece
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-fetch-array.php
// ========== CUBRID_FETCH_ARRAY - END

// SYNTAX:
// array cubrid_fetch_array(resource $result, int $type = CUBRID_BOTH)

return $return_cubrid_fetch_array; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ARRAY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ASSOC
// ============================== PUBLIC
// ============================== ABOUT
// Return the associative array that corresponds to the fetched row.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_fetch_assoc() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch_assoc($result, $type)
{
$return_cubrid_fetch_assoc = null;

// ========== CUBRID_FETCH_ASSOC - BEGIN
// ===== ABOUT
// Return the associative array that corresponds to the fetched row
// ===== DESCRIPTION
// This function returns the associative array, that corresponds to the fetched row, and then moves the internal data pointer ahead, or returns FALSE when the end is reached.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_fetch_assoc(resource $result, int $type = ?): array
// ===== CODE
$return_cubrid_fetch_assoc = cubrid_fetch_assoc(

$result, // resource result - result comes from a call to cubrid_execute()

$type // int type - Type can only be CUBRID_LOB, this parameter will be used only when you need to operate the lob object.

); // Return Values
// Associative array, when process is successful.
// false, when there are no more rows; NULL, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch_assoc() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_execute($conn, "SELECT name,area,seats,address FROM stadium WHERE nation_code='GRE' AND seats > 10000");
// 
// printf("%-40s %-10s %-6s %-20s\n", "name", "area", "seats", "address");
// while ($row = cubrid_fetch_assoc($req)) {
//     printf("%-40s %-10s %-6s %-20s\n", 
//         $row["name"], $row["area"], $row["seats"], $row["address"]);
// }
// 
// // if you want to operate LOB object, you can use cubrid_fetch_assoc($req, CUBRID_LOB)
// 
// cubrid_close_request($req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// name                                     area       seats  address             
// Panathinaiko Stadium                     86300.00   50000  Athens, Greece      
// Olympic Stadium                          54700.00   13000  Athens, Greece      
// Olympic Indoor Hall                      34100.00   18800  Athens, Greece      
// Olympic Hall                             52400.00   21000  Athens, Greece      
// Olympic Aquatic Centre                   42500.00   11500  Athens, Greece      
// Markopoulo Olympic Equestrian Centre     64000.00   15000  Markopoulo, Athens, Greece
// Faliro Coastal Zone Olympic Complex      34650.00   12171  Faliro, Athens, Greece
// Athens Olympic Stadium                   120400.00  71030  Maroussi, Athens, Greece 
// Ano Liossia                              34000.00   12000  Ano Liosia, Athens, Greece
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-fetch-assoc.php
// ========== CUBRID_FETCH_ASSOC - END

// SYNTAX:
// array cubrid_fetch_assoc(resource $result, int $type)

return $return_cubrid_fetch_assoc; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ASSOC
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_FIELD
// ============================== PUBLIC
// ============================== ABOUT
// Get column information from a result and return as an object.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_fetch_field() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch_field($result, $field_offset = 0)
{
$return_cubrid_fetch_field = null;

// ========== CUBRID_FETCH_FIELD - BEGIN
// ===== ABOUT
// Get column information from a result and return as an object
// ===== DESCRIPTION
// This function returns an object with certain properties of the specific column. The properties of the object are:
// name         - column name
// table        - name of the table that the column belongs to
// def          - default value of the column
// max_length   - maximum length of the column
// not_null     - 1 if the column cannot be NULL
// primary_key  - 1 if the column is a primary key
// unique_key   - 1 if the column is an unique key
// multiple_key - 1 if the column is a non-unique key
// numeric      - 1 if the column is numeric
// blob         - 1 if the column is a BLOB
// type         - the type of the column
// unsigned     - 1 if the column is unsigned
// zerofill     - 1 if the column is zero-filled
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_fetch_field(resource $result, int $field_offset = 0): object
// ===== CODE
$return_cubrid_fetch_field = cubrid_fetch_field(

$result, // resource result - result comes from a call to cubrid_execute()

$field_offset // int field_offset - The numerical field offset. If the field offset is not specified, the next field (that was not yet retrieved by this function) is retrieved. The field_offset starts at 0.

); // Return Values
// Object with certain properties of the specific column, when process is successful.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch_field() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_execute($conn, "SELECT event_code,athlete_code,nation_code,game_date FROM game WHERE host_year=1988 and event_code=20001;");
// 
// var_dump(cubrid_fetch_row($req));
// 
// cubrid_field_seek($req, 1);
// $field = cubrid_fetch_field($req);
// 
// printf("\n--- Field Properties ---\n");
// printf("%-30s %s\n", "name:", $field->name);
// printf("%-30s %s\n", "table:", $field->table);
// printf("%-30s \"%s\"\n", "default value:", $field->def);
// printf("%-30s %d\n", "max length:", $field->max_length);
// printf("%-30s %d\n", "not null:", $field->not_null);
// printf("%-30s %d\n", "primary key:", $field->primary_key);
// printf("%-30s %d\n", "unique key:", $field->unique_key);
// printf("%-30s %d\n", "multiple key:", $field->multiple_key);
// printf("%-30s %d\n", "numeric:", $field->numeric);
// printf("%-30s %d\n", "blob:", $field->blob);
// printf("%-30s %s\n", "type:", $field->type);
// printf("%-30s %d\n", "unsigned:", $field->unsigned);
// printf("%-30s %d\n", "zerofill:", $field->zerofill);
// 
// cubrid_close_request($req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(4) {
//   [0]=>
//   string(5) "20001"
//   [1]=>
//   string(5) "16681"
//   [2]=>
//   string(3) "KOR"
//   [3]=>
//   string(9) "1988-9-30"
// }
// 
// --- Field Properties ---
// name:                          athlete_code
// table:                         game
// default value:                 ""
// max length:                    0
// not null:                      1
// primary key:                   1
// unique key:                    1
// multiple key:                  0
// numeric:                       1
// blob:                          0
// type:                          integer
// unsigned:                      0
// zerofill:                      0
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-fetch-field.php
// ========== CUBRID_FETCH_FIELD - END

// SYNTAX:
// object cubrid_fetch_field(resource $result, int $field_offset = 0)

return $return_cubrid_fetch_field; // object
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_FIELD
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_LENGTHS
// ============================== PUBLIC
// ============================== ABOUT
// Return an array with the lengths of the values of each field from the current row.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_fetch_lengths() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch_lengths($result)
{
$return_cubrid_fetch_lengths = null;

// ========== CUBRID_FETCH_LENGTHS - BEGIN
// ===== ABOUT
// Return an array with the lengths of the values of each field from the current row
// ===== DESCRIPTION
// This function returns a numeric array with the lengths of the values of each field from the current row of the result set or it returns FALSE on failure.
// Note: If field data type is BLOB/CLOB, you should get its length by using cubrid_lob_size().
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_fetch_lengths(resource $result): array
// ===== CODE
$return_cubrid_fetch_lengths = cubrid_fetch_lengths(

$result // resource result - result comes from a call to cubrid_execute()

); // Return Values
// A numeric array, when process is successful.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch_lengths() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $row = cubrid_fetch_row($result);
// print_r($row);
// 
// $lens = cubrid_fetch_lengths($result);
// print_r($lens);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Array
// (
//     [0] => 2004
//     [1] => 20085
//     [2] => 15118
//     [3] => 30134
//     [4] => AUS
//     [5] => G
//     [6] => 2004-8-20
// )
// Array
// (
//     [0] => 4
//     [1] => 5
//     [2] => 5
//     [3] => 5
//     [4] => 3
//     [5] => 1
//     [6] => 10
// )
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-fetch-lengths.php
// ========== CUBRID_FETCH_LENGTHS - END

// SYNTAX:
// array cubrid_fetch_lengths(resource $result)

return $return_cubrid_fetch_lengths; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_LENGTHS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_OBJECT
// ============================== PUBLIC
// ============================== ABOUT
// Fetch the next row and return it as an object.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_fetch_object() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch_object($result, $class_name, $params, $type)
{
$return_cubrid_fetch_object = null;

// ========== CUBRID_FETCH_OBJECT - BEGIN
// ===== ABOUT
// Fetch the next row and return it as an object
// ===== DESCRIPTION
// This function returns an object with the column names of the result set as properties. The values of these properties are extracted from the current row of the result.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_fetch_object(
//    resource $result,
//    string $class_name = ?,
//    array $params = ?,
//    int $type = ?
// ): object
// ===== CODE
$return_cubrid_fetch_object = cubrid_fetch_object(

$result, // resource result - result comes from a call to cubrid_execute()

$class_name, // string class_name - The name of the class to instantiate. If not specified, a stdClass (stdClass is PHP's generic empty class that's used when casting other types to objects) object is returned.

$params, // array params - An optional array of parameters to pass to the constructor for class_name objects.

$type // int type - Type can only be CUBRID_LOB, this parameter will be used only when you need to operate the lob object.

); // Return Values
// An object, when process is successful.
// false, when there are no more rows; NULL, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch_object() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $res = cubrid_execute($conn, "SELECT * FROM code");
// 
// var_dump(cubrid_fetch_object($res));
// 
// // if you want to operate LOB object, you can use cubrid_fetch_object($res, CUBRID_LOB)
// 
// class demodb_code {
//     public $s_name = null;
//     public $f_name = null;
// 
//     public function toString() {
//         var_dump($this);
//     }
// }
// 
// var_dump(cubrid_fetch_object($res, "demodb_code"));
// 
// // if you want to operate LOB object, you can use cubrid_fetch_object($res, "demodb_code", CUBRID_LOB)
// 
// class demodb_code_construct extends demodb_code {
//     public function __construct($s, $f) {
//         $this->s_name = $s; 
//         $this->f_name = $f; 
//     }   
// }
// 
// var_dump(cubrid_fetch_object($res, 'demodb_code_construct', array('s_name', 'f_name')));
// 
// // if you want to operate LOB object, you can use cubrid_fetch_object($res, 'demodb_code_construct', array('s_name', 'f_name'), CUBRID_LOB)
// 
// 
// var_dump(cubrid_fetch_object($res));
// 
// cubrid_close_request($res);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// object(stdClass)#1 (2) {
//   ["s_name"]=>
//   string(1) "X"
//   ["f_name"]=>
//   string(5) "Mixed"
// }
// object(demodb_code)#1 (2) {
//   ["s_name"]=>
//   string(1) "W"
//   ["f_name"]=>
//   string(5) "Woman"
// }
// object(demodb_code_construct)#1 (2) {
//   ["s_name"]=>
//   string(6) "s_name"
//   ["f_name"]=>
//   string(6) "f_name"
// }
// object(stdClass)#1 (2) {
//   ["s_name"]=>
//   string(1) "B"
//   ["f_name"]=>
//   string(6) "Bronze"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-fetch-object.php
// ========== CUBRID_FETCH_OBJECT - END

// SYNTAX:
// object cubrid_fetch_object(resource $result, string $class_name, array $params, int $type)

return $return_cubrid_fetch_object; // object
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_OBJECT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ROW
// ============================== PUBLIC
// ============================== ABOUT
// Return a numerical array with the values of the current row.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_fetch_row() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_fetch_row($result, $type)
{
$return_cubrid_fetch_row = null;

// ========== CUBRID_FETCH_ROW - BEGIN
// ===== ABOUT
// Return a numerical array with the values of the current row
// ===== DESCRIPTION
// This function returns a numerical array with the values of the current row from the result set, starting from 0, and moves the internal data pointer ahead.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_fetch_row(resource $result, int $type = ?): array
// ===== CODE
$return_cubrid_fetch_row = cubrid_fetch_row(

$result, // resource result - result comes from a call to cubrid_execute()

$type // int type - Type can only be CUBRID_LOB, this parameter will be used only when you need to operate the lob object.

); // Return Values
// A numerical array, when process is successful.
// false, when there are no more rows; NULL, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_fetch_row() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_execute($conn, "SELECT name,area,seats,address FROM stadium WHERE nation_code='GRE' AND seats > 10000");
// 
// printf("%-40s %-10s %-6s %-20s\n", "name", "area", "seats", "address");
// while ($row = cubrid_fetch_row($req)) {
//     printf("%-40s %-10s %-6s %-20s\n", $row[0], $row[1], $row[2], $row[3]);
// }
// 
// // if you want to operate LOB object, you can use cubrid_fetch_row($req, CUBRID_LOB)
// 
// cubrid_close_request($req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// name                                     area       seats  address             
// Panathinaiko Stadium                     86300.00   50000  Athens, Greece      
// Olympic Stadium                          54700.00   13000  Athens, Greece      
// Olympic Indoor Hall                      34100.00   18800  Athens, Greece      
// Olympic Hall                             52400.00   21000  Athens, Greece      
// Olympic Aquatic Centre                   42500.00   11500  Athens, Greece      
// Markopoulo Olympic Equestrian Centre     64000.00   15000  Markopoulo, Athens, Greece
// Faliro Coastal Zone Olympic Complex      34650.00   12171  Faliro, Athens, Greece
// Athens Olympic Stadium                   120400.00  71030  Maroussi, Athens, Greece 
// Ano Liossia                              34000.00   12000  Ano Liosia, Athens, Greece
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-fetch-row.php
// ========== CUBRID_FETCH_ROW - END

// SYNTAX:
// array cubrid_fetch_row(resource $result, int $type)

return $return_cubrid_fetch_row; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FETCH_ROW
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_FLAGS
// ============================== PUBLIC
// ============================== ABOUT
// Return a string with the flags of the given field offset.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_field_flags() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_field_flags($result, $field_offset)
{
$return_cubrid_field_flags = null;

// ========== CUBRID_FIELD_FLAGS - BEGIN
// ===== ABOUT
// Return a string with the flags of the given field offset
// ===== DESCRIPTION
// This function returns a string with the flags of the given field offset separated by space. You can split the returned value using explode. The possible flags could be: not_null, primary_key, unique_key, foreign_key, auto_increment, shared, reverse_index, reverse_unique and timestamp.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_field_flags(resource $result, int $field_offset): string
// ===== CODE
$return_cubrid_field_flags = cubrid_field_flags(

$result, // resource result - result comes from a call to cubrid_execute()

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// A string with flags, when process is successful.
// false when invalid field_offset value.
// -1 if SQL sentence is not SELECT.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_field_flags() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $col_num = cubrid_num_cols($result);
// 
// printf("%-30s %s\n", "Field Name", "Field Flags");
// for($i = 0; $i < $col_num; $i++) {
//     printf("%-30s %s\n", cubrid_field_name($result, $i), cubrid_field_flags($result, $i)); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Field Name                     Field Flags
// host_year                      not_null primary_key unique_key
// event_code                     not_null primary_key unique_key foreign_key
// athlete_code                   not_null primary_key unique_key foreign_key
// stadium_code                   not_null
// nation_code                    
// medal                          
// game_date
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-field-flags.php
// ========== CUBRID_FIELD_FLAGS - END

// SYNTAX:
// string cubrid_field_flags(resource $result, int $field_offset)

return $return_cubrid_field_flags; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_FLAGS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_LEN
// ============================== PUBLIC
// ============================== ABOUT
// Get the maximum length of the specified field.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_field_len() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_field_len($result, $field_offset)
{
$return_cubrid_field_len = 0;

// ========== CUBRID_FIELD_LEN - BEGIN
// ===== ABOUT
// Get the maximum length of the specified field
// ===== DESCRIPTION
// This function returns the maximum length of the specified field on success, or it returns FALSE on failure.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_field_len(resource $result, int $field_offset): int
// ===== CODE
$return_cubrid_field_len = cubrid_field_len(

$result, // resource result - result comes from a call to cubrid_execute()

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// Maximum length, when process is successful.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_field_len() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $column_names = cubrid_column_names($result);
// $column_types = cubrid_column_types($result);
// 
// printf("%-30s %-30s %-15s\n", "Column Names", "Column Types", "Column Maxlen");
// for($i = 0, $size = count($column_names); $i < $size; $i++) {
//     $column_len = cubrid_field_len($result, $i);
//     printf("%-30s %-30s %-15s\n", $column_names[$i], $column_types[$i], $column_len); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Column Names                   Column Types                   Column Maxlen  
// host_year                      integer                        11             
// event_code                     integer                        11             
// athlete_code                   integer                        11             
// stadium_code                   integer                        11             
// nation_code                    char                           3              
// medal                          char                           1              
// game_date                      date                           10
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-field-len.php
// ========== CUBRID_FIELD_LEN - END

// SYNTAX:
// int cubrid_field_len(resource $result, int $field_offset)

return $return_cubrid_field_len; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_LEN
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_NAME
// ============================== PUBLIC
// ============================== ABOUT
// Return the name of the specified field index.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_field_name() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_field_name($result, $field_offset)
{
$return_cubrid_field_name = null;

// ========== CUBRID_FIELD_NAME - BEGIN
// ===== ABOUT
// Return the name of the specified field index
// ===== DESCRIPTION
// This function returns the name of the specified field index on success or it returns FALSE on failure.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_field_name(resource $result, int $field_offset): string
// ===== CODE
$return_cubrid_field_name = cubrid_field_name(

$result, // resource result - result comes from a call to cubrid_execute()

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// Name of specified field index, on success.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_field_name() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");
// 
// $col_num = cubrid_num_cols($result);
// 
// printf("%-30s %s\n", "Field Name", "Field Flags");
// for($i = 0; $i < $col_num; $i++) {
//     printf("%-30s %s\n", cubrid_field_name($result, $i), cubrid_field_flags($result, $i)); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Field Name                     Field Flags
// host_year                      not_null primary_key unique_key
// event_code                     not_null primary_key unique_key foreign_key
// athlete_code                   not_null primary_key unique_key foreign_key
// stadium_code                   not_null
// nation_code                    
// medal                          
// game_date
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-field-name.php
// ========== CUBRID_FIELD_NAME - END

// SYNTAX:
// string cubrid_field_name(resource $result, int $field_offset)

return $return_cubrid_field_name; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_NAME
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_SEEK
// ============================== PUBLIC
// ============================== ABOUT
// Move the result set cursor to the specified field offset.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_field_seek() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_field_seek($result, $field_offset = 0)
{
$return_cubrid_field_seek = false;

// ========== CUBRID_FIELD_SEEK - BEGIN
// ===== ABOUT
// Move the result set cursor to the specified field offset
// ===== DESCRIPTION
// This function moves the result set cursor to the specified field offset. This offset is used by cubrid_fetch_field() if it doesn't include a field offset. It returns TRUE on success or FALSE on failure.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_field_seek(resource $result, int $field_offset = 0): bool
// ===== CODE
$return_cubrid_field_seek = cubrid_field_seek(

$result, // resource result - result comes from a call to cubrid_execute()

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// true on success.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_field_seek() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $req = cubrid_execute($conn, "SELECT event_code,athlete_code,nation_code,game_date FROM game WHERE host_year=1988 and event_code=20001;");
// 
// var_dump(cubrid_fetch_row($req));
// 
// cubrid_field_seek($req, 1);
// $field = cubrid_fetch_field($req);
// 
// printf("\n--- Field Properties ---\n");
// printf("%-30s %s\n", "name:", $field->name);
// printf("%-30s %s\n", "table:", $field->table);
// printf("%-30s \"%s\"\n", "default value:", $field->def);
// printf("%-30s %d\n", "max length:", $field->max_length);
// printf("%-30s %d\n", "not null:", $field->not_null);
// printf("%-30s %d\n", "unique key:", $field->unique_key);
// printf("%-30s %d\n", "multiple key:", $field->multiple_key);
// printf("%-30s %d\n", "numeric:", $field->numeric);
// printf("%-30s %s\n", "type:", $field->type);
// 
// cubrid_close_request($req);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(4) {
//   [0]=>
//   string(5) "20001"
//   [1]=>
//   string(5) "16132"
//   [2]=>
//   string(3) "KOR"
//   [3]=>
//   string(9) "1988-09-30"
// }
// 
// --- Field Properties ---
// name:                          athlete_code
// table:                         game
// default value:                 ""
// max length:                    0
// not null:                      1
// unique key:                    1
// multiple key:                  0
// numeric:                       1
// type:                          integer
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-field-seek.php
// ========== CUBRID_FIELD_SEEK - END

// SYNTAX:
// bool cubrid_field_seek(resource $result, int $field_offset = 0)

return $return_cubrid_field_seek; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_SEEK
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_TABLE
// ============================== PUBLIC
// ============================== ABOUT
// Return the name of the table of the specified field.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_field_table() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_field_table($result, $field_offset)
{
$return_cubrid_field_table = null;

// ========== CUBRID_FIELD_TABLE - BEGIN
// ===== ABOUT
// Return the name of the table of the specified field
// ===== DESCRIPTION
// This function returns the name of the table of the specified field. This is useful when using large select queries with JOINS.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_field_table(resource $result, int $field_offset): string
// ===== CODE
$return_cubrid_field_table = cubrid_field_table(

$result, // resource result - result comes from a call to cubrid_execute()

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// Name of the table of the specified field, on success.
// false when invalid field_offset value.
// -1 if SQL sentence is not SELECT.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_field_table() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $result = cubrid_execute($conn, "SELECT * FROM code");
// 
// $col_num = cubrid_num_cols($result);
// 
// printf("%-15s %-15s %s\n", "Field Table", "Field Name", "Field Type");
// for($i = 0; $i < $col_num; $i++) {
//     printf("%-15s %-15s %s\n", 
//         cubrid_field_table($result, $i), cubrid_field_name($result, $i), cubrid_field_type($result, $i)); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Field Table     Field Name      Field Type
// code            s_name          char
// code            f_name          varchar
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-field-table.php
// ========== CUBRID_FIELD_TABLE - END

// SYNTAX:
// string cubrid_field_table(resource $result, int $field_offset)

return $return_cubrid_field_table; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_TABLE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_TYPE
// ============================== PUBLIC
// ============================== ABOUT
// Return the type of the column corresponding to the given field offset.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_field_type() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_field_type($result, $field_offset)
{
$return_cubrid_field_type = null;

// ========== CUBRID_FIELD_TYPE - BEGIN
// ===== ABOUT
// Return the type of the column corresponding to the given field offset
// ===== DESCRIPTION
// This function returns the type of the column corresponding to the given field offset. The returned field type could be one of the following: "int", "real", "string", etc.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_field_type(resource $result, int $field_offset): string
// ===== CODE
$return_cubrid_field_type = cubrid_field_type(

$result, // resource result - result comes from a call to cubrid_execute()

$field_offset // int field_offset - The numerical field offset. The field_offset starts at 0. If field_offset does not exist, an error of level E_WARNING is also issued.

); // Return Values
// Type of the column, on success.
// false when invalid field_offset value.
// -1 if SQL sentence is not SELECT.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_field_type() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// $result = cubrid_execute($conn, "SELECT * FROM code");
// 
// $col_num = cubrid_num_cols($result);
// 
// printf("%-15s %-15s %s\n", "Field Table", "Field Name", "Field Type");
// for($i = 0; $i < $col_num; $i++) {
//     printf("%-15s %-15s %s\n", 
//         cubrid_field_table($result, $i), cubrid_field_name($result, $i), cubrid_field_type($result, $i)); 
// }
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Field Table     Field Name      Field Type
// code            s_name          char
// code            f_name          varchar
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-field-type.php
// ========== CUBRID_FIELD_TYPE - END

// SYNTAX:
// string cubrid_field_type(resource $result, int $field_offset)

return $return_cubrid_field_type; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_FIELD_TYPE
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LIST_DBS
// ============================== PUBLIC
// ============================== ABOUT
// Return an array with the list of all existing CUBRID databases.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_list_dbs() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_list_dbs($conn_identifier)
{
$return_cubrid_list_dbs = null;

// ========== CUBRID_LIST_DBS - BEGIN
// ===== ABOUT
// Return an array with the list of all existing CUBRID databases
// ===== DESCRIPTION
// This function returns an array with the list of all existing Cubrid databases.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_list_dbs(resource $conn_identifier = ?): array
// ===== CODE
$return_cubrid_list_dbs = cubrid_list_dbs(

$conn_identifier // resource conn_identifier - The CUBRID connection.

); // Return Values
// An numeric array with all existing Cubrid databases; on success.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_list_dbs() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $db_list = cubrid_list_dbs($conn);
// var_dump($db_list);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(1) {
//   [0]=>
//   string(6) "demodb"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-list-dbs.php
// ========== CUBRID_LIST_DBS - END

// SYNTAX:
// array cubrid_list_dbs(resource $conn_identifier)

return $return_cubrid_list_dbs; // array
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LIST_DBS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_FIELDS
// ============================== PUBLIC
// ============================== ABOUT
// Return the number of columns in the result set.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_num_fields() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_num_fields($result)
{
$return_cubrid_num_fields = 0;

// ========== CUBRID_NUM_FIELDS - BEGIN
// ===== ABOUT
// Return the number of columns in the result set
// ===== DESCRIPTION
// This function returns the number of columns in the result set, on success, or it returns FALSE on failure.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_num_fields(resource $result): int
// ===== CODE
$return_cubrid_num_fields = cubrid_num_fields(

$result // resource result - result comes from a call to cubrid_execute(), cubrid_query() and cubrid_prepare()

); // Return Values
// Number of columns, on success.
// -1 if SQL sentence is not SELECT.
// false when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_num_fields() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code");
// 
// $row_num = cubrid_num_rows($req);
// $col_num = cubrid_num_fields($req);
// 
// printf("Row Num: %d\nColumn Num: %d\n", $row_num, $col_num);
// 
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// Row Num: 6
// Column Num: 2
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-num-fields.php
// ========== CUBRID_NUM_FIELDS - END

// SYNTAX:
// int cubrid_num_fields(resource $result)

return $return_cubrid_num_fields; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NUM_FIELDS
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PING
// ============================== PUBLIC
// ============================== ABOUT
// Ping a server connection or reconnect if there is no connection.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_ping() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_ping($conn_identifier)
{
$return_cubrid_ping = false;

// ========== CUBRID_PING - BEGIN
// ===== ABOUT
// Ping a server connection or reconnect if there is no connection
// ===== DESCRIPTION
// Checks whether or not the connection to the server is working.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_ping(resource $conn_identifier = ?): bool
// ===== CODE
$return_cubrid_ping = cubrid_ping(

$conn_identifier // resource conn_identifier - The CUBRID connection identifier. If the connection identifier is not specified, the last connection opened by cubrid_connect() is assumed.

); // Return Values
// Returns true if the connection to the server CUBRID server is working, otherwise false.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_ping() example
// [php]
// set_time_limit(0);
// 
// $conn = cubrid_connect('localhost', 33000, 'demodb');
// 
// /* Assuming this query will take a long time */
// $sql = "select * from athlete";
// $result = cubrid_query($sql);
// if (!$result) {
//     echo 'Query #1 failed, exiting.';
//     exit;
// }
// 
// /* Make sure the connection is still alive, if not, try to reconnect */
// if (!cubrid_ping($conn)) {
//     echo 'Lost connection, exiting after query #1';
//     exit;
// }
// cubrid_free_result($result);
// 
// /* So the connection is still alive, let's run another query */
// $sql2 = "select * from code";
// $result2 = cubrid_query($sql2);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-ping.php
// ========== CUBRID_PING - END

// SYNTAX:
// bool cubrid_ping(resource $conn_identifier)

return $return_cubrid_ping; // bool
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_PING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Send a CUBRID query.
// ============================== SUPPORT
// PECL_CUBRID_8_3_1
// ============================== USING FUNCTIONS (1)
// cubrid_query() - PECL_CUBRID >= PECL_CUBRID_8_3_1
// ============================== CODE
function php_database_vendor_cubrid_cubrid_query($query, $conn_identifier)
{
$return_cubrid_query = null;

// ========== CUBRID_QUERY - BEGIN
// ===== ABOUT
// Send a CUBRID query
// ===== DESCRIPTION
// cubrid_query() sends a unique query (multiple queries are not supported) to the currently active database on the server that's associated with the specified conn_identifier.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_1
// ===== SYNTAX
// cubrid_query(string $query, resource $conn_identifier = ?): resource
// ===== CODE
$return_cubrid_query = cubrid_query(

$query, // string query - An SQL query
// Data inside the query should be properly escaped.

$conn_identifier // resource conn_identifier - The CUBRID connection. If the connection identifier is not specified, the last connection opened by cubrid_connect() is assumed.

); // Return Values
// For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset, cubrid_query() returns a resource on success, or false on error.
// For other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc, cubrid_query() returns true on success or false on error.
// The returned result resource should be passed to cubrid_fetch_array(), and other functions for dealing with result tables, to access the returned data.
// Use cubrid_num_rows() to find out how many rows were returned for a SELECT statement or cubrid_affected_rows() to find out how many rows were affected by a DELETE, INSERT, REPLACE, or UPDATE statement.
// cubrid_query() will also fail and return false if the user does not have permission to access the table(s) referenced by the query.
// 
// [examples]
// Examples
// [example]
// Example #1 Invalid Query
// The following query is syntactically invalid, so cubrid_query() fails and returns false.
// [php]
// $conn = cubrid_connect('localhost', 33000, 'demodb');
// 
// $result = cubrid_query('SELECT * WHERE 1=1');
// if (!$result) {
//     die('Invalid query: ' . cubrid_error());
// }
// 
// [/php]
// [/example]
// [example]
// Example #2 Valid Query
// The following query is valid, so cubrid_query() returns a resource.
// [php]
// // This could be supplied by a user, for example
// $firstname = 'fred';
// $lastname  = 'fox';
// 
// $conn = cubrid_connect('localhost', 33000, 'demodb');
// 
// cubrid_execute($conn,"DROP TABLE if exists friends");
// cubrid_execute($conn,"create table friends(firstname varchar,lastname varchar,address char(24),age int)");
// cubrid_execute($conn,"insert into friends values('fred','fox','home-1','20')");
// cubrid_execute($conn,"insert into friends values('blue','cat','home-2','21')");
// // Formulate Query
// // This is the best way to perform an SQL query
// // For more examples, see cubrid_real_escape_string()
// $query = sprintf("SELECT firstname, lastname, address, age FROM friends WHERE firstname='%s' AND lastname='%s'",
// cubrid_real_escape_string($firstname),
// cubrid_real_escape_string($lastname));
// 
// // Perform Query
// $result = cubrid_query($query);
// 
// // Check result
// // This shows the actual query sent to CUBRID, and the error. Useful for debugging.
// if (!$result) {
//     $message  = 'Invalid query: ' . cubrid_error() . "\n";
//     $message .= 'Whole query: ' . $query;
//     die($message);
// }
// 
// // Use result
// // Attempting to print $result won't allow access to information in the resource
// // One of the cubrid result functions must be used
// // See also cubrid_result(), cubrid_fetch_array(), cubrid_fetch_row(), etc.
// while ($row = cubrid_fetch_assoc($result)) {
//     echo $row['firstname'];
//     echo $row['lastname'];
//     echo $row['address'];
//     echo $row['age'];
// }
// 
// // Free the resources associated with the result set
// // This is done automatically at the end of the script
// cubrid_free_result($result);
// [/php]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-query.php
// ========== CUBRID_QUERY - END

// SYNTAX:
// resource cubrid_query(string $query, resource $conn_identifier)

return $return_cubrid_query; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_REAL_ESCAPE_STRING
// ============================== PUBLIC
// ============================== ABOUT
// Escape special characters in a string for use in an SQL statement.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_real_escape_string() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_real_escape_string($unescaped_string, $conn_identifier)
{
$return_cubrid_real_escape_string = null;

// ========== CUBRID_REAL_ESCAPE_STRING - BEGIN
// ===== ABOUT
// Escape special characters in a string for use in an SQL statement
// ===== DESCRIPTION
// This function returns the escaped string version of the given string. It will escape the following characters: '. In general, single quotations are used to enclose character string. Double quotations may be used as well depending on the value of ansi_quotes, which is a parameter related to SQL statement. If the ansi_quotes value is set to no, character string enclosed by double quotations is handled as character string, not as an identifier. The default value is yes. If you want to include a single quote as part of a character string, enter two single quotes in a row.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_real_escape_string(string $unescaped_string, resource $conn_identifier = ?): string
// ===== CODE
$return_cubrid_real_escape_string = cubrid_real_escape_string(

$unescaped_string, // string unescaped_string - The string that is to be escaped.

$conn_identifier // resource conn_identifier - The CUBRID connection. If the connection identifier is not specified, the last connection opened by cubrid_connect() is assumed.

); // Return Values
// Escaped string version of the given string, on success.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_real_escape_string() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $unescaped_str = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
// $escaped_str = cubrid_real_escape_string($unescaped_str);
// 
// $len = strlen($unescaped_str);
// 
// @cubrid_execute($conn, "DROP TABLE cubrid_test");
// cubrid_execute($conn, "CREATE TABLE cubrid_test (t char($len))");
// cubrid_execute($conn, "INSERT INTO cubrid_test (t) VALUES('$escaped_str')");
// 
// $req = cubrid_execute($conn, "SELECT * FROM cubrid_test");
// $row = cubrid_fetch_assoc($req);
// 
// var_dump($row);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// array(1) {
//   ["t"]=>
//   string(95) " !"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~"
// }
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-real-escape-string.php
// ========== CUBRID_REAL_ESCAPE_STRING - END

// SYNTAX:
// string cubrid_real_escape_string(string $unescaped_string, resource $conn_identifier)

return $return_cubrid_real_escape_string; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_REAL_ESCAPE_STRING
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_RESULT
// ============================== PUBLIC
// ============================== ABOUT
// Return the value of a specific field in a specific row.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_result() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_result($result, $row, $field = 0)
{
$return_cubrid_result = null;

// ========== CUBRID_RESULT - BEGIN
// ===== ABOUT
// Return the value of a specific field in a specific row
// ===== DESCRIPTION
// This function returns the value of a specific field in a specific row from a result set.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_result(resource $result, int $row, mixed $field = 0): string
// ===== CODE
$return_cubrid_result = cubrid_result(

$result, // resource result - result comes from a call to cubrid_execute()

$row, // int row - The row number from the result that is being retrieved. Row numbers start at 0.

$field // mixed field - The name or offset of the field being retrieved. It can be the field's offset, the field's name, or the field's table dot field name (tablename.fieldname). If the column name has been aliased ('select foo as bar from...'), use the alias instead of the column name. If undefined, the first field is retrieved.

); // Return Values
// Value of a specific field, on success (NULL if value if null).
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_result() example
// [php]
// $conn = cubrid_connect("localhost", 33000, "demodb");
// 
// $req = cubrid_execute($conn, "SELECT * FROM code");
// 
// $result = cubrid_result($req, 0);
// var_dump($result);
// 
// $result = cubrid_result($req, 0, 1);
// var_dump($result);
// 
// $result = cubrid_result($req, 5, "f_name");
// var_dump($result);
// 
// cubrid_close_request($req);
// cubrid_disconnect($conn);
// [/php]
// The above example will output:
// [result]
// string(1) "X"
// string(5) "Mixed"
// string(4) "Gold"
// [/result]
// [/example]
// [/examples]
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-result.php
// ========== CUBRID_RESULT - END

// SYNTAX:
// string cubrid_result(resource $result, int $row, mixed $field = 0)

return $return_cubrid_result; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_RESULT
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_UNBUFFERED_QUERY
// ============================== PUBLIC
// ============================== ABOUT
// Perform a query without fetching the results into memory.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_unbuffered_query() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_unbuffered_query($query, $conn_identifier)
{
$return_cubrid_unbuffered_query = null;

// ========== CUBRID_UNBUFFERED_QUERY - BEGIN
// ===== ABOUT
// Perform a query without fetching the results into memory
// ===== DESCRIPTION
// This function performs a query without waiting for that all query results have been complete. It will return when the results are being generated.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_unbuffered_query(string $query, resource $conn_identifier = ?): resource
// ===== CODE
$return_cubrid_unbuffered_query = cubrid_unbuffered_query(

$query, // string query - A SQL query.

$conn_identifier // resource conn_identifier - The CUBRID connection. If the connection identifier is not specified, the last connection opened by cubrid_connect() is assumed.

); // Return Values
// For SELECT, SHOW, DESCRIBE or EXPLAIN statements returns a request identifier resource on success.
// For other type of SQL statements, UPDATE, DELETE, DROP, etc, returns true on success.
// false on failure.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_unbuffered_query() example
// [php]
//     $link = cubrid_connect("localhost", 30000, "demodb", "dba", "");
//     if (!$link)
//     {
//         die('Could not connect.');
//     }
//     $query = "select * from code";
//     $result = cubrid_unbuffered_query($query, $link);
// 
//     while ($row = cubrid_fetch($result))
//     {
//         var_dump($row);
//     }
// 
//     cubrid_close_request($result);
//     cubrid_disconnect($link);
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: The benefits of cubrid_unbuffered_query() come at a cost: you cannot use cubrid_num_rows() and cubrid_data_seek() on a result set returned from cubrid_unbuffered_query().
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-unbuffered-query.php
// ========== CUBRID_UNBUFFERED_QUERY - END

// SYNTAX:
// resource cubrid_unbuffered_query(string $query, resource $conn_identifier)

return $return_cubrid_unbuffered_query; // resource
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_UNBUFFERED_QUERY
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOAD_FROM_GLO
// ============================== PUBLIC
// ============================== ABOUT
// Read data from a GLO instance and save it in a file.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_load_from_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_load_from_glo($conn_identifier, $oid, $file_name)
{
$return_cubrid_load_from_glo = 0;

// ========== CUBRID_LOAD_FROM_GLO - BEGIN
// ===== ABOUT
// Read data from a GLO instance and save it in a file
// ===== DESCRIPTION
// The cubrid_load_from_glo() function is used to read a data from a glo instance, and saves it in a designated file.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_load_from_glo(resource $conn_identifier, string $oid, string $file_name): int
// ===== CODE
$return_cubrid_load_from_glo = cubrid_load_from_glo(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - Oid of the glo instance that you want to read the data from.

$file_name // string file_name - Name of the file where you want to save the data in.

); // Return Values
// true, when process is successful.
// false, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_load_from_glo() example
// [php]
// $req = cubrid_execute ($con, "select image from person where id=1");
// if ($req) {
//    list ($oid) = cubrid_fetch($req);
//    cubrid_close_request($req);
//    $res = cubrid_load_from_glo ($con, $oid, "output.jpg");
//    if ($res) {
//       echo "image changed successfully";
//    }
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: cubrid_load_from_glo()
// Note: This function is removed from CUBRID 3.1.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-load-from-glo.php
// ========== CUBRID_LOAD_FROM_GLO - END

// SYNTAX:
// int cubrid_load_from_glo(resource $conn_identifier, string $oid, string $file_name)

return $return_cubrid_load_from_glo; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_LOAD_FROM_GLO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NEW_GLO
// ============================== PUBLIC
// ============================== ABOUT
// Create a glo instance.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_new_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_new_glo($conn_identifier, $class_name, $file_name)
{
$return_cubrid_new_glo = null;

// ========== CUBRID_NEW_GLO - BEGIN
// ===== ABOUT
// Create a glo instance
// ===== DESCRIPTION
// The cubrid_new_glo() function is used to create a glo instance in the requested class (glo class). The glo created is a LO type, and is stored in the file_name file.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_new_glo(resource $conn_identifier, string $class_name, string $file_name): string
// ===== CODE
$return_cubrid_new_glo = cubrid_new_glo(

$conn_identifier, // resource conn_identifier - Connection identifier.

$class_name, // string class_name - Name of the class that you want to create a glo in.

$file_name // string file_name - The file name that you want to save in the newly created glo.

); // Return Values
// Oid of the instance created, when process is successful.
// false, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_new_glo() example
// [php]
// $oid = cubrid_new_glo ($con, "glo", "input.jpg");
// if ($oid){
//    // the type of column "image" is "object"
//    $req = cubrid_execute ($con, "insert into person(image) values($oid)");
//    if ($req) {
//       echo "image inserted successfully";
//       cubrid_close_request ($req);
//       cubrid_commit($con);
//    }
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: cubrid_new_glo()
// Note: This function is removed from CUBRID 3.1.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-new-glo.php
// ========== CUBRID_NEW_GLO - END

// SYNTAX:
// string cubrid_new_glo(resource $conn_identifier, string $class_name, string $file_name)

return $return_cubrid_new_glo; // string
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_NEW_GLO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SAVE_TO_GLO
// ============================== PUBLIC
// ============================== ABOUT
// Save requested file in a GLO instance.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_save_to_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_save_to_glo($conn_identifier, $oid, $file_name)
{
$return_cubrid_save_to_glo = 0;

// ========== CUBRID_SAVE_TO_GLO - BEGIN
// ===== ABOUT
// Save requested file in a GLO instance
// ===== DESCRIPTION
// The cubrid_save_to_glo() function is used to save requested file in a glo instance.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_save_to_glo(resource $conn_identifier, string $oid, string $file_name): int
// ===== CODE
$return_cubrid_save_to_glo = cubrid_save_to_glo(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid, // string oid - Oid of the glo instance that you want to save a file in.

$file_name // string file_name - The name of the file that you want to save.

); // Return Values
// true, when process is successful.
// false, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_save_to_glo() example
// [php]
// $req = cubrid_execute ($con, "select image from person where id=1");
// if ($req) {
//    list ($oid) = cubrid_fetch($req);
//    cubrid_close_request($req);
//    $res = cubrid_save_to_glo ($con, $oid, "input.jpg");
//    if ($res) {
//       echo "image changed successfully";
//    }
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: cubrid_save_to_glo()
// Note: This function is removed from CUBRID 3.1.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-save-to-glo.php
// ========== CUBRID_SAVE_TO_GLO - END

// SYNTAX:
// int cubrid_save_to_glo(resource $conn_identifier, string $oid, string $file_name)

return $return_cubrid_save_to_glo; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SAVE_TO_GLO
// ==============================


// ============================== BEGIN
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEND_GLO
// ============================== PUBLIC
// ============================== ABOUT
// Read data from glo and send it to std output.
// ============================== SUPPORT
// PECL_CUBRID_8_3_0
// ============================== USING FUNCTIONS (1)
// cubrid_send_glo() - PECL_CUBRID >= PECL_CUBRID_8_3_0
// ============================== CODE
function php_database_vendor_cubrid_cubrid_send_glo($conn_identifier, $oid)
{
$return_cubrid_send_glo = 0;

// ========== CUBRID_SEND_GLO - BEGIN
// ===== ABOUT
// Read data from glo and send it to std output
// ===== DESCRIPTION
// The cubrid_send_glo() function is used to read data from glo instance and sends it to the PHP standard output.
// ===== SUPPORTED
// PECL_CUBRID >= PECL_CUBRID_8_3_0
// ===== SYNTAX
// cubrid_send_glo(resource $conn_identifier, string $oid): int
// ===== CODE
$return_cubrid_send_glo = cubrid_send_glo(

$conn_identifier, // resource conn_identifier - Connection identifier.

$oid // string oid - Oid of the glo instance that you want to read data from.

); // Return Values
// true, when process is successful.
// false, when process is unsuccessful.
// 
// [examples]
// Examples
// [example]
// Example #1 cubrid_send_glo() example
// [php]
// $req = cubrid_execute ($con, "select image from person where id =1");
// if ($req) {
//   list ($oid) = cubrid_fetch($req);
//   cubrid_close_request($req);
//   Header ("Content-type: image/jpeg");
//   cubrid_send_glo ($con, $oid);
// }
// [/php]
// [/example]
// [/examples]
// 
// Notes
// Note: For backward compatibility, the following deprecated alias may be used: cubrid_send_glo()
// Note: This function is removed from CUBRID 3.1.
// ===== LITERATURE_SOURCES
// * PHP_NET (2024-03-26)
// URL: https://www.php.net/manual/en/function.cubrid-send-glo.php
// ========== CUBRID_SEND_GLO - END

// SYNTAX:
// int cubrid_send_glo(resource $conn_identifier, string $oid)

return $return_cubrid_send_glo; // int
}
// ============================== END
// PHP_DATABASE_VENDOR_CUBRID_CUBRID_SEND_GLO
// ==============================


// ============================== END
//   PHP_DATABASE_VENDOR_CUBRID   
// ==============================
?>