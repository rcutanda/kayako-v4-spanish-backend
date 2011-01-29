<?php
//=======================================
//###################################
// Kayako Web Solutions
//
// Source Copyright 2001-2004 Kayako Infotech Ltd.
// Unauthorized reproduction is not allowed
// License Number: $%LICENSE%$
// $Author$ ($Date$)
// $RCSfile$ : $Revision$ 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//                   www.kayako.com
//###################################
//=======================================


$__LANG = array (
	'issues' => 'Problemas',
	'settings' => 'Ajustes',
	'tabsettings' => 'Ajustes',

	// ======= GLOBAL =======
	'displayorder' => 'Orden de Visualización',
	'desc_displayorder' => 'Este es el orden de visualización por defecto. La lista está en Orden Ascedente.',

	// ======= TYPES =======
	'managetypes' => 'Administrar Tipos',
	'inserttype' => 'Insertar Tipo',
	'typetitle' => 'Título de Tipo de Problema',
	'desc_typetitle' => 'Introduce un título personalizado para este problema.',
	'issuetypeview' => 'Tipo de Visualización del Problema',
	'desc_issuetypeview' => 'Selecciona la vista del Tipo de Problema. Los Tipos de Problemas Públicos estarán visibles en el Portal del Usuario mientras que los Tipos Privados sólo lo verán miembros del Personal.',
	'displayicontype' => 'Icono',
	'desc_displayicontype' => 'Introduce la URL completa del icono que se mostrarán junto a cada tipo de problema. Puedes usar {$themepath} como una variable de sustitución de la URL completa al directorio del tema. El tamaño recomendado es de 16x16 píxeles.',
	'unabletoinserttype' => 'No se pudo insetar el tipo de fallo. Por favor, comprueba los ajustes de tu base de datos.',
	'titleinsertissuetype' => 'Se insertó el Tipo de Fallo "%s"',
	'msginsertissuetype' => 'Se insertó el tipo de fallo "%s" en la base de datos.',
	'titleduplicatetype' => 'El tipo de fallo "%s" está duplicado',
	'msgduplicatetype' => "Ya existe en la base de datos un Tipo de Fallo con el mismo título \"%s\". Es recomendable que cambies el título de este tipo <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=edittype&noheader=1&issuetypeid=%d', 'editissuetype', 'Editar Tipo de Fallo: %s', 'Cargando ventana..', 650, 350, true);\">pinchando aquí.</a>",
	'titledelissuetypemul' => 'Tipo de fallo "%d" Eliminado',
	'msgdelissuetypemul' => 'Se han eliminado los siguientes tipos de fallos de la base de datos:<br>%s',
	'titledelissuetype' => 'Eliminados "%s" Tipos de Fallos ',
	'msgdelissuetype' => 'Se ha eliminado correctamente el tipo de fallo "%s" de la base de datos',
	'typedelconfirmmsg' => '¿Seguro que quieres borrar este tipo de fallo?',
	'invalidissuetype' => 'Tipo de fallo inválido. Por favor, asegúrate de que este tipo de fallo existe en la base de datos.',
	'unabletoupdatetype' => 'No ha sido posible actualizar el tipo de fallo. Por favor, asegúrate de que este tipo de fallo existe en la base de datos y que la configuración de tu base de datos es correcta.',
	'edittype' => 'Editar Tipo > %s',
	'wineditissuetype' => 'Editar Tipo: %s',
	'msgeditissuetype' => 'Tipo de fallo actualizado "%s".',
	'titleeditissuetype' => 'Actualizado el tipo de fallo  "%s"',

	// ======= LINKS =======
	'managelinks' => 'Administrar Enlaces',
	'insertlink' => 'Insertar Enlace',
	'linktypetitle' => 'Título del Tipo de Enlace',
	'desc_linktypetitle' => 'Introduce un título de Tipo de Enlace personalizado.',
	'issuelinktype' => 'Tipo de Enlace',
	'desc_issuelinktype' => 'Selecciona el tipo de enlace. Los Enlaces Públicos estarán visibles en el portal del usuario mientras que los Enlaces Privados sólo serán visibles por el personal.',
	'invalidlinktype' => 'El Tipo de Enlace especificado no es válido. Por favor, asegúrate de que ese tipo de enlace existe en la base de datos.',
	'wineditissuelinktype' => 'Editar Enlace: %s',
	'linkdelconfirmmsg' => '¿Seguro que quieres borrar este tipo de enlace?',
	'titleinsertissuelink' => 'Insertado Enlace Fallo "%s"',
	'msginsertissuelink' => 'Se ha insertado el enlace al fallo "%s" en la base de datos.',
	'titleduplicatelinktype' => 'Enlace de Fallo Duplicado "%s"',
	'msgduplicatelinktype' => "Hay un enlace de fallo con el mismo título en la base de datos \"%s\". Es recomendable que cambies el título de este enlace <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editlink&noheader=1&issuelinktypeid=%d', 'editissuelink', 'Editar Enlace de Fallo: %s', 'Cargando Ventana..', 650, 300, true);\">pinchando aquí.</a>",
	'titleeditissuelinktype' => 'Enlace de Fallo Actualizado "%s"',
	'msgeditissuelinktype' => 'Se ha actualizado correctamente el enlace de fallo "%s".',
	'linkunableupd' => 'No se ha podido actualizar el tipo de enlace. Por favor, comprueba la configuración de tu base de datos.',
	'titledelissuelink' => 'Enlace de Fallo Eliminado "%s"',
	'msgdelissuelink' => 'Se ha eliminado el enlace de fallo "%s" de la base de datos.',
	'titledelissuelinkmul' => 'Se han borrado "%d" Enlaces de Fallos',
	'msgdelissuelinkmul' => 'Se han eliminado los siguientes Enlaces de Fallos de la base de datos:<br>%s',
	'editlink' => 'Editar Enlace',

	// ======= RESOLUTIONS =======
	'resolutiontitle' => 'Título de Solución',
	'viewtype' => 'Tipo',
	'resdelconfirm' => 'Solución de Problema eliminada correctamente',
	'wineditissueresolution' => 'Editar Solución: %s',
	'manageresolutions' => 'Administrar Soluciones',
	'insertresolution' => 'Insertar Solución',
	'resolutiontitle' => 'Título de Solución',
	'desc_resolutiontitle' => 'Introduce un título personalizado para la Solución.',
	'issueresolutiontype' => 'Tipo de Solución',
	'desc_issueresolutiontype' => 'Selecciona el tipo de Solución. Las soluciones Públicas serán visibles en el portal del usuario, mientras que las Privadas sólo serán visibles para el personal.',
	'titleinsertissueresolution' => 'Insertada solución de problema "%s"',
	'msginsertissueresolution' => 'Se ha insertado la solución de problema "%s" en la base de datos.',
	'titleduplicateresolution' => 'Solución de Problema Duplicada "%s"',
	'msgduplicateresolution' => "En la base de datos ya existe una Solución con el mismo título \"%s\". Es recomendable que cambies el título de esta solución <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editresolution&noheader=1&issueresolutionid=%d', 'editissueresolution', 'Editar Solución: %s', 'Cargando Ventana..', 650, 300, true);\">pinchando aquí.</a>",
	'editresolution' => 'Editar Solución > %s',
	'invalidissueresolution' => 'Solución Inválida. Por favor, asegúrate de que la solución existe en la base de datos y que tienes permiso para acceder a ella.',
	'failedupdres' => 'No se pudo actualizar la solución. Por favor, comprueba tu configuración.',
	'titleeditissueresolution' => 'Actualizada la Solución "%s"',
	'msgeditissueresolution' => 'Se ha actualizado correctamente la solución "%s".',
	'resdelconfirmmsg' => '¿Seguro que quieres borrar esta solución?',
	'titledelissueresolution' => 'Eliminada la Solución "%s"',
	'msgdelissueresolution' => 'Se ha eliminado la solución "%s" de la base de datos.',
	'titledelissueresolutionmul' => 'Solución "%d" Eliminada',
	'msgdelissueresolutionmul' => 'Se ha eliminado la siguiente solución de la base de datos:<br>%s',

	// ======= ISSUE STATUS =======
	'statustitle' => 'Título de Estado',
	'managestatus' => 'Administrar Estados',
	'insertstatus' => 'Insertar Estado',
	'statustitle' => 'Título Estado',
	'desc_statustitle' => 'Introduce tu Título de Estado de Problema personalizado.',
	'issuestatustype' => 'Tipo de Estado',
	'desc_issuestatustype' => 'Selecciona el tipo de Estado. Público será visible en el portal de los Usuarios, mientras que Privado sólo será visible por el personal.',
	'isresolved' => '¿Resuelto?',
	'desc_isresolved' => 'Si se acriva, este estado se considera como "Resuelto". Deberías activar esta opción  para el estado de elementos que no se muestran en la lista de estados principales y que están enlazados a acciones que tratan el problema como completado/resuelto/cerrado.',
	'displayicon' => 'Icono de Visualización',
	'desc_displayicon' => 'Introduce la URL completa para el icono que se mostrará junto al estado. Puedes usar la variable {$themepath} como sustituta de la URL completa de la ruta del directorio con el tema. El tamaño recomendado es de 16x16 píxeles.',
	'titleinsertissuestatus' => 'Estado de Problema Insertado "%s"',
	'msginsertissuestatus' => 'Se ha insertado el Estado de problema "%s" en la base de datos.',
	'invalidissuestatus' => 'El Estado de problema especificado no es válido',
	'wineditissuestatus' => 'Editar Estado de Problema',
	'titleeditissuestatus' => 'Estado de Problema Actualizado "%s"',
	'msgeditissuestatus' => 'Se ha actualizado correctamente el estado de problema "%s".',
	'titleduplicatestatus' => 'Estado de Problema Duplicado "%s"',
	'msgduplicatestatus' => "Hay un estado de problema con el mismo título en la base de datos \"%s\". Es recomendable que cambies el título de este estado <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editstatus&noheader=1&issuestatusid=%d', 'editissuestatus', 'Editar Estado de Problema', 'Cargando Ventana..', 680, 400, true);\">pinchando aquí.</a>",
	'titledelissuestatus' => 'Estado de Problema Eliminado "%s"',
	'msgdelissuestatus' => 'Se ha borrado el estado de problema "%s" de la base de datos.',
	'statusdelconfirmmsg' => '¿Seguro que quieres borrar este estado de problema?',
	'titledelissuestatusmul' => 'Estado de Problema "%d" borrado',
	'msgdelissuestatusmul' => 'Se ha borrado el siguiente estado de problema de la base de datos:<br>%s',

	// ======= ISSUE PRIORITIES =======
	'prioritytitle' => 'Título de Prioridad',
	'managepriorities' => 'Administrar Prioridades',
	'insertpriority' => 'Insertar Prioridad',
	'prioritytitle' => 'Título de Prioridad',
	'desc_prioritytitle' => 'Introduce tu título de Prioridad personalizado.',
	'issueprioritytype' => 'Tipo de Prioridad',
	'desc_issueprioritytype' => 'Selecciona el Tipo de Prioridad. Las Prioridades Públicas serán visibles en el portal de los usuarios, mientras que las Privadas únicamente serán visibles por el personal.',
	'displayiconpriority' => 'Icono de Visualización',
	'desc_displayiconpriority' => 'Introduce la URL completa del icono de visualización que se mostrarán junto a esta prioridad. Puedes usar la variable {$themepath} como sustituto de la URL completa de la ruta del directorio del tema. El tamaño recomendado es de 16x16 píxeles.',
	'titleinsertissuepriority' => 'Prioridad de Problema Insertada "%s"',
	'msginsertissuepriority' => 'Se ha insertado correctamente la prioridad de problema "%s" en la base de datos.',
	'titleduplicatepriority' => 'Prioridad de Problema Duplicada "%s"',
	'msgduplicatepriority' => "Hay una Prioridad de Problema con el mismo título en la base de datos \"%s\". Es recomendable que cambies el título <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editpriority&noheader=1&issuepriorityid=%d', 'editissuepriority', 'Editar Prioridad de Problema', 'Cargando Ventana..', 680, 350, true);\">pinchando aquí.</a>",
	'invalidissuepriority' => 'Prioridad de Problema especificada inválida. Por favor, asegúrate de que esta prioridad existe en la base de datos y que tienes permiso para acceder a ella.',
	'editpriority' => 'Editar Prioridad > %s',
	'issuepriorityupdfailed' => 'No se pudo actualizar la prioridad de problema',
	'wineditissuepriority' => 'Editar Prioridad: %s',
	'titleeditissuepriority' => 'Prioridad de Problema Actualizada "%s"',
	'msgeditissuepriority' => 'Prioridad de Problema Actualizada "%s".',
	'priodelconfirmmsg' => '¿Seguro que quieres borrar esta prioridad de problema?',
	'titledelissuepriority' => 'Prioridad de Problema Eliminada "%s"',
	'msgdelissuepriority' => 'Se ha eliminado la prioridad de problema "%s" de la base de datos.',
	'titledelissueprioritymul' => 'Eliminada la Prioridad de Problema "%d"',
	'msgdelissueprioritymul' => 'Se ha borrado la siguiente Prioridad de Problema de la base de datos:<br>%s',
);
?>