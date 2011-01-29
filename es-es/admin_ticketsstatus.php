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
	'tickets' => 'Tickets',
	'tabgeneral' => 'General',
	'tabpermissions' => 'Permisos',
	'staffvisibilitycustom' => '¿Restringir el Cambio a determinados equipos de personal?',
	'desc_staffvisibilitycustom' => 'Si se activa, únicamente los equipos de personal seleccionados podrán cambiar el estado de un ticket.',
	'staffgroups' => 'Equipos de Personal',
	'triggersurvey' => 'Activar Email Cuestionario',
	'desc_triggersurvey' => 'Si se activa, cuando se cambie el estado de un ticket se enviará al usuario un correo solicitándole valorar la atención.',
	'statustitle' => 'Título Estado',
	'desc_statustitle' => 'Introduce un Título de Estado personalizado para el Ticket',
	'statuscolor' => 'Color Estado',
	'desc_statuscolor' => 'Introduce el Código de Color que quieres asociar con este estado.',
	'statusbgcolor' => 'Color de Fondo de Estado',
	'desc_statusbgcolor' => 'Introduce el código de color que te gustaría asociar con este estado. Este color se usará para la "Barra de Etiqueta General" cuando se va el Ticket.',
	'displayorder' => 'Orden de Visualización',
	'desc_displayorder' => 'Este es el orden de visualización por defecto en que se mostrarán los elementos (ascendente).',
	'displayiconstatus' => 'Icono',
	'desc_displayiconstatus' => 'Sube la imagen de icono (png, gif, jpg) o indica una URL completa para el icono que se mostrará junto a este estado de ticket. Puedes usar la variable {$themepath}. El tamaño recomendado es de 16x16 píxeles.',
	'statusdep' => 'Enlace Estado',
	'desc_statusdep' => 'Esta opción te permite enlazar este Estado a un Departamento determinado. Si el Estado está enlazado a un Departamento únicamente será visible bajo el departamento enlazado.',
	'statusalldep' => '-- Sin Enlazar --',
	'markasresolved' => '¿Marcar como Resuelto?',
	'desc_markasresolved' => 'Si se activa, todos los tickets bajo este estado ser marcarán como Resueltos/Cerrados. Además, los tickets no aparecerán en la lista global de tickets. Es recomendable que se active esta opción para estados de Tickets Resueltos como "Cerrado, "Resuelto", "Solucionado", etc.',
	'displayinmainlist' => 'Mostrar en Listado de Tickets Principal',
	'desc_displayinmainlist' => 'Si se activa, todos los Tickets con este Estado se mostrarán en el Listado de Tickets Principal. Se recomienda que esta opción se desactive para TIckets con estados como "Cerrado", "Solucionado" o "Solicitud de Información"',
	'displaycount' => 'Mostrar Número de Tickets en el Árbol',
	'desc_displaycount' => 'Si se activa, se mostrarán el total de Tickets para este Estado en el Árbol de Filtrado de Tickets. Se recomienda que desactives esta opción para Estados asociados a Tickets Solucionados o Resueltos.',
	'statustype2' => 'Tipo de Estado',
	'desc_statustype2' => 'Selecciona el tipo de Estado. Los Estados Públicos son visibles en el Portal del Usuario, mientras que los Privados únicamente serán accesibles por el personal',
	'resetduetime' => 'Eliminar Fecha Límite',
	'desc_resetduetime' => 'Si se activa, el sistema eliminará automáticamente la fecha límite para un ticket cuando el estado del ticket cambie a este estado.',
	'dispatchnotification' => 'Enviar Notificación al Usuario',
	'desc_dispatchnotification' => 'Si se activa, el sistema enviará una notificación al usuario/creador cuando el estado de este ticket esté activo.',
	'insertstatus' => 'Insertar Estado',
	'desc_insertstatus' => '',
	'invalidticketstatus' => 'Estado de Ticket Inválido. Por favor, asegúrate de que este registro existe en la base de datos.',
	'managestatus' => 'Estados',
	'desc_managestatus' => '',
	'wineditticketstatus' => 'Editar Estado: %s',
	'editstatus' => 'Editar Estado',
	'desc_editstatus' => '',
	'taboptions' => 'Opciones',
	'titledelticketstatus' => 'Eliminados "%d" Estados de Tickets',
	'msgdelticketstatus' => 'Se han eliminado correctamente los siguientes estados de tickets de la base de datos:',
	'titleticketstatusinsert' => 'Insertados "%s" Estados de Tickets',
	'msgticketstatusinsert' => 'Se han insertado el Estado de Ticket "%s" en la base de datos.',
	'titleticketstatusupdate' => 'Actualizado "%s" Estado de Ticket',
	'msgticketstatusupdate' => 'Se ha actualizado correctamente el Estado de Ticket "%s".',
	'titlemasterstatusdelete' => 'No se ha podido eliminar el estado de ticket "%d"',
	'msgmasterstatusdelete' => SWIFT_PRODUCT . ' no ha podido eliminar el siguiente estado de ticket principal:',
	'tablanguages' => 'Idiomas: Traducción',
	// ======= END v4 LOCALES =======
);
?>