<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

$__LANG = array (
	// ======= BEGIN v4 LOCALES =======
	'dbexport' => 'Exportar XML',
	'desc_dbexport' => '',
	'tabexportxml' => 'Exportar XML',
	'export' => 'Exportar',
	'dbtables' => 'Tablas de Base de Datos',
	'exportdata' => 'Exportar Datos',
	'desc_exportdata' => 'Activado, '. SWIFT_PRODUCT .' exportará los datos de la tabla junto con el esquema.',
	'dbdiagnostics' => 'Diagnóstico',
	'desc_dbdiagnostics' => '',
	'tabdiagnostics' => 'Diagnóstico',
	'fieldname' => 'Nombre del Campo',
	'maxlength' => 'Longitud Máxima',
	'fieldtype' => 'Tipo',
	'fieldprimary' => 'Clave Primaria',
	'fieldautoincrement' => 'Auto Incremento',
	// ======= END v4 LOCALES =======

	'backup' => 'Respaldar',
	'database' => 'Base de datos',
	'desc_backup' => 'Realiza una copia de seguridad de la base de datos generando y descargando un archivo de volcado MySQL. Si la base de datos es de gran tamaño, es recomendable usar la utilidad <b>mysqldump</b>  (a través de la línea de comandos de MySQL). Puedes restaurar el archivo de volcado más adelante usando MySQL CLI o aplicaciones de gestión de bases de datos de terceros como phpMyAdmin.',
	'backupoptions' => 'Opciones de Copia',
	'genbackup' => 'Generar Copia',
	'title_createtable' => 'Añadir declaración SQL "CREATE TABLE"',
	'desc_createtable' => 'Al activar esta opción se añadirá una declaración SQL "CREATE TABLE tablename;" antes de insertar declaraciones (actívalo si planeas restaurar el archivo de volcado en una base de datos vacía).',
	'title_compressdump' => 'Comprimir Volcado SQL',
	'desc_compressdump' => 'Comprime el archivo de volcado usando <b>gzip</b>.',
	'repairoptimize' => 'Reparar/Optimizar',
	'desc_repairoptimize' => 'Optimizar una base de datos da como resultado reescribir los índices y es un proceso de gran consumo de recursos en tablas grandes..',
	'repair' => 'Reparar',
	'optimize' => 'Optimizar',
	'repairall' => 'Reparar Todo',
	'optimizeall' => 'Optimizar Todo',
	'tablelist' => 'Lista de Tablas',
	'tablename' => 'Nombre de Tabla',
	'tabletype' => 'Tipo de Tabla',
	'rows' => 'Filas',
	'indexsize' => 'Tamaño Índice',
	'optimizedtable' => 'Optimizada tabla %s. Mensajes de estado MySQL: %s',
	'repairedtable' => 'Tabla reparada %s. Mensaje de estado MySQL: %s',
	'optimizedalltables' => 'Optimizadas %s tablas',
	'repairedalltables' => 'Reparadas %s tablas',
);

?>