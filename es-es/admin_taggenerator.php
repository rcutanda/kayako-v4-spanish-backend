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
 * ####################################
 * =======================================
 */

$__LANG = array (
	'chattagtype' => 'Tipo de Etiqueta',
	'chatprompttype' => 'Tipo de Solicitud',
	'desc_chatprompttype' => '<br /><i>Chat: </i> Al visitante se le solicita una sesión de chat y se redirige al primer operador de chat disponible.<br /><i>Llamar (Pincha para Llamar): </i>Al visitante se le solicita por un número de teléfono junto con los detalles del chat. El envío da inicio a la solicitud de chat y una llamda es dirigida de inmediato al primer operador disponible.',
	'chat' => 'Chat',
	'callrequest' => 'Llamar (Pincha para Llamar)',
	'taggenerator' => 'Generador de Etiquetas',
	'manage' => 'Administrar',
	'next' => 'Siguiente',
	'livechat' => 'Chat',
	'tabchats' => 'Chat',
	'tag_htmlbutton' => 'Botón HTML',
	'desc_tag_htmlbutton' => 'Esta etiqueta mostrará una imagen de estado "asistencia/llámanos: online/offline" (e hiperenlace) dependiendo de si hay o no personal disponible online para hacerse cargo del chat o la llamada.<BR /><BR />Si hay alguien del personal disponible, aparecerá una ventana cuando el visitante pinche en la imagen. Si no hay nadie del personal disponible, se le ofrecerá al visitante enviar un mensaje offline.<BR /><BR />Añadiendo este código HTML a una página web también podrás los visitantes de esa página a través de ' . SWIFT_PRODUCT . '.',
	'tag_sitebadge' => 'Etiqueta de Web',
	'desc_tag_sitebadge' => 'Esta etiqueta mostrará una imagen flotante vertical (a la izquierda de tu web) para iniciar una llamada o sesión de chat. Si hay alguien del personal disponible se mostrará una ventana cuando el visitante pinche en la imagen. Si no hay nadie del personal disponible se le sugerirá al visitante para enviar un mensaje offline.<BR /><BR />Añadiendo este código HTML en una página web podrás hacer un seguimiento de los visitantes en esa página ' . SWIFT_PRODUCT . '.',
	'tag_textlink' => 'Enlace de Texto',
	'desc_tag_textlink' => 'Este etoqieta mostrará un enlace de texto.<BR /><BR />Si hay alguien del personal disponible se mostrará una ventana cuando el visitante pinche en el enlace. Si no hay nadie del personal disponible se le sugerirá al visitante para enviar un mensaje offline.<BR /><BR />NOTA: Usando este etiqueta no podrás hacer el seguimiento de los visitantes mediante ' . SWIFT_PRODUCT . '.',
	'tag_monitoring' => 'Monitorización',
	'desc_tag_monitoring' => 'Esta etiqueta colocará un código de seguimiento en tu página web.<BR /><BR />NOTA: Añadiendo este código HTML en una página web, sólo podrás seguir a los visitantes, que no podrán ver ninguna imagen o enlace para iniciar el chat.',
	'generate' => 'Generar',
	'tabchatsextended' => 'Live Chat &raquo; %s',
	'filteroptions' => 'Opciones de Filtrado',
	'filterbydepartment' => 'Filtrar por Departamento',
	'desc_filterbydepartment' => 'Si no se elige aquí algún departamento específico, ' . SWIFT_PRODUCT . ' sólo usará los departamentos seleccionados para determinar el estado online/offline de los usuarios. Los usuarios, además, únicamente podrán elegir los departamentos seleccionados cuando soliciten un chat.<BR /><BR /><b>NOTA:</b> Esto quiere decir que si todos los agentes en el departamento seleccionado están offline se le mostrará al usuario que no hay nadie disponible, aún en el caso de que haya agentes disponibles en otros departamentos.',
	'routetochatskill' => 'Redirigir a la Especialidad de Chat',
	'desc_routetochatskill' => SWIFT_PRODUCT . ' le dará preferencia a los operadores online con la especialidad seleccionada. Si no hay operadores disponibles con la especialidad seleccionada, el chat será redirigido usando el método estándar.',
	'generaloptions' => 'Opciones Generales',
	'usesecurelinks' => 'Usar Enlaces Seguros (https://)',
	'desc_usesecurelinks' => 'Si se activa, los enlaces de chat javascript se cambiarán por su equivalente https equivalente. Debes asegurarte de que la URL del sistema de contacto se define como "https" para que esta opción funcione.',
	'notselected' => '- Sin Seleccionar -',
	'usedefault' => '- Usar Estándar -',
	'tagtemplategroup' => 'Grupo de Plantilla',
	'desc_tagtemplategroup' => 'Si se selecciona, ' . SWIFT_PRODUCT . ' cargará todas las plantillas solicitadas para el grupo de plantilla seleccionado.',
	'skipuserdetails' => 'Saltar Detalles de Usuario',
	'desc_skipuserdetails' => 'Si se activa, el usuario será redirigido inmediatamente al inicio de chat y no s requerirán detalles adicionales como nombre, email o asunto.',
	'nojavascript' => '¿Sin JavaScript?',
	'desc_nojavascript' => 'Si se activa, ' . SWIFT_PRODUCT . ' generará una etiqueta HTML que no incluirá JavaScript.<BR /><font color="red"><b>NOTA IMPORTANTE: </b></font>Esta opción desactivará todas las funciones de seguimiento de visitantes y únicamente se recomienda para firmas de correo, páginas de subastas o áreas en las que el HTML está muy limitado.',
	'defaulttextcontents' => 'Chat',
	'defaulttextcontentscall' => 'Pincha para Llamar',
	'textcontents' => 'Enlazar Contenidos',
	'desc_textcontents' => '',
	'insertvariable' => 'Insertar Variable',
	'insertalert' => 'Insertar Alerta',
	'tabcustomize' => 'Personalizar',
	'customonlineimage' => 'Imagen Online Personalizada',
	'desc_customonlineimage' => '',
	'customofflineimage' => 'Imagen Offline Personalizada',
	'desc_customofflineimage' => '',
	'customawayimage' => 'Imagen de Ausente Personalizada',
	'desc_customawayimage' => '',
	'custombackshortlyimage' => 'Imagen de Vuelvo Enseguida Personalizada',
	'desc_custombackshortlyimage' => '',
	'badgewhite' => 'Blanco',
	'badgeblack' => 'Negro',
	'sitebadgecolor' => 'Color de Texto',
	'desc_sitebadgecolor' => 'Selecciona el color de la imagen para la web',
	'sitebadgelanguage' => 'Idioma Imagen',
	'desc_sitebadgelanguage' => 'Seleccionar el idioma del texto que se mostrará en la imagen.',
	'title_tagcode' => 'Generador de Etiqueta de Código',
	'desc_tagcode' => 'Ubica el foco del teclado en el siguiente campo, luego copia los contenidos y pégalos en el código fuente HTML.',
	'tagcode' => 'Código de Etiqueta',
	'tagcodeheader' => 'INICIO ' . SWIFT_PRODUCT . ' CÓDIGO ETIQUETA',
	'tagcodefooter' => 'FIN ' . SWIFT_PRODUCT . ' CÓDIGO ETIQUETA',
	'jswarning' => 'JAVASCRIPT NO ESTÁ ACTIVO',
	'tagpoweredlivechat' => 'Chat',
	'tagpoweredby' => 'por',
	'badgelivechat' => 'chat online',
	'badgelivehelp' => 'ayuda online',
	'badgecallus' => 'llámanos',
	'badgecallme' => 'llámame',
	'sitebadgetext' => 'Texto Imagen',
	'desc_sitebadgetext' => 'Selecciona el texto que debería aparecer en la imagen para la web.',
	'sitebadgeonlinecolor' => 'Color de Fondo: Online',
	'desc_sitebadgeonlinecolor' => '',
	'sitebadgeofflinecolor' => 'Color de Fondo: Offline',
	'desc_sitebadgeofflinecolor' => '',
	'sitebadgeawaycolor' => 'Color de Fondo: Ausente',
	'desc_sitebadgeawaycolor' => '',
	'sitebadgebackshortlycolor' => 'Cpñpr de Fondo: De Vuelta Enseguida',
	'titleinvalidfileext' => 'Extensión de Archivo de Imagen Incorrecta',
	'msginvalidfileext' => 'El archivo de imagen para el botón tiene una extensión inválida. Las extensiones permitidas son: gif, jpeg, jpg, png',

	/*
	 * ###############################################
	 * BADGE LANGUAGE LOCALES
	 * ###############################################
	 */
	'badgeenglish' => 'English',
	'badgespanish' => 'Español',
);
?>