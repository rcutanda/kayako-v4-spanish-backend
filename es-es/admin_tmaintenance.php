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
	'tabpostindex' => 'Índice Mensajes',
	'tabmoveattachments' => 'Mover Adjuntos',
	'attachmentsperpass' => 'Número de Adjuntos a procesar por página',
	'desc_attachmentsperpass' => 'Especifica el número de adjuntos a procesar en una página. '.SWIFT_PRODUCT . ' procesará todos los adjuntos de una página al mismo tiempo y luego moverá los adjuntos cargados. Un número elevado requerirá mayor capacidad de procesado y, por tanto, un servidor más potente. Si recibes un error durante el proceso, prueba a usar un número inferior.',
	'move' => 'Mover',
	'dbtofiles' => 'Base de datos (%d) => Archivos',
	'filestodb' => 'Archivos (%d) => Base de datos',
	'movetype' => 'Mover Adjuntos de',
	'desc_movetype' => 'Selecciona el tipo de traslado para los adjuntos. Si deseas mover adjuntos de archivos a la base de datos es recomendable que compruebes el ajuste del tamaño máximo por paquete de tu base de daos para evitar corrupción o pérdida d datos.',
	'attachmentsprocessed' => 'Adjuntos Movidos',
	'totalattachments' => 'Adjuntos Totales',
	// ======= END v4 LOCALES =======
	'tickets' => 'Tickets',
	'maintenance' => 'Mantenimiento',
	'rebuildpindex' => 'Reconstruir Índice de Mensajes',
	'indexseterror' => 'Nota: El método de búsqueda por defecto está definido como Texto Completo. Para usar el motor de búsqueda interno cambia el <b>Tipo de Búsqeda</b> En <i>Ajustes > Tickets</i>.',
	'rebuild' => 'Reconstruir',
	'postperpass' => 'Número de mensajes a procesar por página',
	'desc_postperpass' => 'Especifica el número de mensajes a procesar en cada tanda. ' . SWIFT_PRODUCT . ' procesará todos los mensajes de una tanda a la vez y luego reconstruirá el índice de mensajes. Un número elevado requerirá mayor capacidad de procesado y, por tanto, un servidor más potente. Si recibes un error durante el proceso prueba a usar un número inferior.',
	'generalinformation' => 'Información General',

	'wordsprocessed' => 'Palabras Procesadas',
	'totalposts' => 'Mensajes Totales',
	'postsprocesed' => 'Mensajes Procesados',
	'timeelapsed' => 'Time Transcurrido',
	'timeremaining' => 'Tiempo Est. Restante',
	'closewindow' => 'Cerrar Ventana',
);
?>