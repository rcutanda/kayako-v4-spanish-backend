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
	'downloads' => 'Descargas',

	'categories' => 'Categorías',

	// Import from v3
	'errorurlregex' => 'ERROR: Has introducido una URL incorrecta para un archivo externo. Por favor, introduce la URL con la estructura "http://dominio.com/archivo"',

	// Insert Category
	'selectonetgroup' => 'ERROR: Se debe indicar al menos un grupo de plantill',
	'insertcategory' => 'Insertar Categoría',
	'dlcatdetails' => 'Detalles de la Categoría',
	'dlcattitle' => 'Título de la Categoría',
	'desc_dlcattitle' => 'Título para la categoría de descargas.',
	'dlcatdisporder' => 'Orden de Visualización',
	'desc_dlcatdisporder' => 'Las categorías se ordenarán en la forma indicada aquí (ascendente).',
	'usergroups' => 'Grupos Usuarios',
	'desc_usergroups' => '',
	'insertdlcat' => 'Insertar Categoría',
	'updatedlcat' => 'Actualizar Categoría',
	'parentcategory' => 'Categoría Padre',
	'desc_parentcategory' => 'La categoría padre en la que se creará la nueva categoría.',
	'cattype' => 'Tipo de Categoría',
	'desc_cattype' => '<i>Pública:</i> Visible tanto para usuarios como para el personal a través de la interfaz de soporte.<br><br><i>Privada:</i> Visible únicamente al personal a través del panel de control del personal.',
	'maincategory' => 'Categoría Principal',
	'downloadscat' => '(Descargas)',
	'dlinsertconfirm' => 'La Categoría "%s" se ha insertado correctamente',
	'templategroups' => 'Grupos de Plantillas',
	'desc_templategroups' => 'Las Categorías se pueden asignar a grupos de plantillas específicos. Al hacerlo esta categoría será visible únicamente dentro de los grupos especificados.',
	'filtertgroupid' =>'Grupo de Plantilla',
	'desc_filtertgroupid' => 'Las categorías pueden filtrase por grupos para que sean más fáciles de administrar.',

	// Manage Categories
	'managecategories' => 'Administrar Categorías',
	'categorylist' => 'Lista de Categorías',
	'filter' => 'Filtro',
	'addsubcat' => 'Añadir Subcategoría',
	'addfile' => 'Añadir Archivo',
	'dlcatdelconfirmmsg' => '¿Seguro que deseas borrar esta categoría? Borrar una categoría supone el borrado total de todas las subcategorías y elementos de descarga. ¡Esta acción es irreversible!',
	'dlcatdeleteconfirm' => 'Eliminada la categoría de descarga "%s"',

	// Manage Files
	'managefiles' => 'Administrar Archivos',
	'dlitemlist' => 'Lista de Archivos',
	'passprotected' => 'Protección por Contraseña',
	'legend' => 'Legenda: ',
	'filelinkact' => 'Enlace',
	'dlitemsdelconfirm' => 'Borrado de ítem de descarga correcto',
	'dlitemdelconfirm' => 'Borrado de ítem de descarga correcto',
	'dlitemdelconfirmmsg' => '¿Seguro que quieres borrar este ítem de descarga? Una vez eliminado tanto el archivo como en la entrada en la base de datos desaparecerán.',

	// Insert File
	'insertfile' => 'Insertar Archivo',
	'dlitemtitle' => 'Título de Descarga',
	'desc_dlitemtitle' => 'Nombre o título para la descarga.',
	'dlitemdesc' => 'Descripción de la Descarga',
	'desc_dlitemdesc' => 'Una descripción para el ítem de descarga.',
	'dlitemfilename' => 'Nombre de descarga',
	'dlitemfilesize' => 'Tamaño descarga',
	'dltotaldownloads' => 'Descargas Totales',
	'dlfiledetails' => 'Detalles Descarga',
	'dlfiledisplayorder' => 'Orden de Visualización',
	'desc_dlfiledisplayorder' => 'Las Descargas se ordenarán en función del orden de visualización (ascendente) especificado aquí.',
	'insertfile' => 'Insertar Archivo',
	'dlitemfile' => 'Subir Archivo',
	'desc_dlitemfile' => 'Navega y selecciona el archivo a enviar al servidor.',
	'passwordprotection' => 'Protección por Contraseña',
	'enablepassword' => 'Activar la Protección por Contraseña',
	'desc_enablepassword' => 'Si se protege por contraseña, el cliente necesitará introducir un contraseña antes de poder descargar el archivo.',
	'password' => 'Contraseña',
	'desc_password' => 'Introduce la contraseña (ver <i>Activar Protección por Contraseña</i> más arriba).',
	'passwordconfirm' => 'Confirmar Contraseña',
	'desc_passwordconfirm' => 'Confirmar la contraseña.',
	'errorfilesize' => 'ERROR: El tamaño del archivo es demasiado grande. El tamaño máximo definido en la variable <b>upload_max_filesize set</b> del archivo php.ini (el archivo de configuración de PHP) tiene un valor más bajo del necesario.',
	'errorpartialupload' => 'ERROR: El archivo no se envió correctamente',
	'errornofile' => 'ERROR: No se envió el archivo',
	'filetype' => 'Tipo de Archivo',
	'dlitemfilelink' => 'O enlace a un archivo existente',
	'desc_dlitemfilelink' => 'En lugar de enviar un archivo pudes enlazar a un archivo alojado en otro servidor.',
	'passworddontmatch' => 'ERROR: Las contraseñas no coinciden',
	'dliteminsertconfirm' => 'El ítem de descarga "%s" se ha insertado correctamente',

	// Update File
	'updatefile' => 'Subir Descarga',
	'editfile' => 'Editar Descarga',
	'invaliddlitem' => 'Ítem de descarga inválido',
	'dlitemupdateconfirm' => 'La descarga "%s" se ha actualizado correctamente',
	'resetpassword' => 'Reiniciar Contraseña',

	// Edit Category
	'invaliddlcat' => 'Categoría de descarga inválida',
	'editcategory' => 'Editar Categoría',
	'dlupdateconfirm' => 'La categoría de Descarga "%s" se ha actualizado correctamente',

	// Comments
	'comments' => 'Comentarios',

	// Reports
	'populardownloads' => 'Descargas Populares',
	'downloadno' => 'Descargas',
	'filetitle' => 'Título de Descarga',
	'chartfiles' => 'a r c h i v o s',
);
?>