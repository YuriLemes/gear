<?php

// diretório base da aplicação
define('BASE_PATH', dirname(__FILE__));

// configurações do PHP
ini_set('display_errors', true);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');


/**
*@param configName = Nome da configuração no arquivo config.ini.
* Por exemplo, para buscar o valor do parâmetro host da seção db, basta executar getConfig( 'db.host' ).
*/
function getConfig( $configName )
{
    $configFile = 'App/config.ini';
 
    $config = parse_ini_file( $configFile, true );
 
    list( $section, $param ) = explode( '.', $configName );
 
    if ( array_key_exists( $section, $config ) )
    {
        if ( array_key_exists( $param, $config[ $section ] ) )
        {
            return $config[ $section ][ $param ];
        }
    }
 
    return null;
}