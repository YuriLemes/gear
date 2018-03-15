<?php
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 13/03/2018
 * Time: 19:39
 */

/**
 * Realiza conexão com o Banco de Dados a partir do arquivo config.ini
 * @return PDO
 */
function db_connect(){

    $PDO = new PDO(sprintf('mysql:dbname=%s;host=%s', getConfig('db.dbname'), getConfig('db.host')), getConfig('db.user'), getConfig('db.pass'));
    return $PDO;
}

/**
 *@param configName = Nome da configuração no arquivo config.ini.
 * Por exemplo, para buscar o valor do parâmetro host da seção db, basta executar getConfig( 'db.host' ).
 */
function getConfig( $configName )
{
    $configFile = 'config.ini';

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

/**
 * Verifica se o usuário está logado
 */
function estaLogado()
{
    if (!isset($_SESSION['login']['logado']) || $_SESSION['login']['logado'] !== true) {
        return false;
    }

    return true;
}