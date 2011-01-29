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
	'geoip' => 'GeoIP',
	'completed' => 'Completado',
	'maintenance' => 'Mantenimiento',
	'desc_maintenance' => '',
	'tabcitylocations' => 'Ciudad (Ubicaciones)',
	'tabcityblocks' => 'Ciudad (Bloques)',
	'generalinformation' => 'Información General',
	'indexsettings' => 'Ajustes de Índice',
	'rebuild' => 'Reconstruir',
	'taborganization' => 'Organización',
	'tabisp' => 'ISP',
	'tabnetspeed' => 'Velocidad de la Red',
	'geoiploadingalert' => 'Indexado en progreso. Por favor no cierres esta página o el indexado se cancelará.',
	'entriesperpass' => 'Número de entradas a procesar por pasada',
	'desc_entriesperpass' => 'Especifica el número de entradas a procesar en cada pasada. '. SWIFT_PRODUCT.' procesará todas las entradas de una en una, y entonces se reconstruirá el índice para las entradas cargadas. Un número mayor demandará más potencia del servidor. Si hay algún error durante el proceso prueba a usar un número más bajo.',
	'passnumber' => 'Número de pasadas por actualización',
	'desc_passnumber' => 'Especifica el número de pasadas a procesar en cada actualización. Un número mayor implica más potencia de procesado del servidor.',
	'sizeprocessed' => 'Tamaño Procesado (KB)',
	'totalsize' => 'Tamaño Total (KB)',
	'timeelapsed' => 'Tiempo Transcurrido',
	'timeremaining' => 'Tiempo Restante',
	'databaseinformation' => 'Información de la Base de datos',
	'rebuildoptions' => 'Opciones de Reconstrucción',
	'licensetype' => 'Tipo de Licencia:',
	'premium' => 'Premium (Alta Precisión)',
	'lite' => 'Lite (Gratuita: <b>Baja Precisión</b>)',
	'lastupdate' => 'Última Actualización:',
	'notavailable' => '- No Disponible -',
	'titlenofilecitylocation' => 'Ciudad (Ubicación) La Base de datos no está disponible',
	'msgnofilecitylocation' => SWIFT_PRODUCT.' no ha podido localizar una base de datos de válida GeoIP para Ciudad (Ubicaciones). Puedes descargar la última versión Lite (Gratuita) o Premium (de Pago) de la base de datos desde el Área de Usuarios para corregir este error. Por favor, consulta las instrucciones de instalación en la documentación.',
	'titlenofilecityblocks' => 'Ciudad (Bloques) La Base de datos no está disponible',
	'msgnofilecityblocks' => SWIFT_PRODUCT.' no está disponible para localizar una base de datos GeoIP válida para Ciudad (Bloques). Puedes descargar la última versión Lite (Gratuita) o Premium (de Pago) de la base de datos desde el Área de Usuarios para corregir este error. Por favor, consulta las instrucciones de instalación en la documentación.',
	'titlenofilenetspeed' => 'Base de Datos de la Velocidad de la Red o está disponible',
	'msgnofilenetspeed' => SWIFT_PRODUCT.' no ha podido localizar una base de datos GeoIP válida para Velocidad de la Red. Puedes descargar la última versión  Lite (Gratuita) o Premium (de Pago) de la base de datos desde el Área de Usuarios para corregir este error. Por favor, consulta las instrucciones de instalación en la documentación.',
	'titlenofileisp' => 'La Base de datos del ISP no está disponible',
	'msgnofileisp' => SWIFT_PRODUCT.' no ha podido localizar una base de datos GeoIP válida para el ISP. Puedes descargar la última versión  Lite (Gratuita) o Premium (de Pago) de la base de datos desde el Área de Usuarios para corregir este error. Por favor, consulta las instrucciones de instalación en la documentación.',
	'titlenofileorganization' => 'La Organización de la Base de datos no está disponible',
	'msgnofileorganization' => SWIFT_PRODUCT.' no ha podido localizar una base de datos válida para la Organización. Puedes descargar la última versión  Lite (Gratuita) o Premium (de Pago) de la base de datos desde el Área de Usuarios para corregir este error. Por favor, consulta las instrucciones de instalación en la documentación.',
	'titlenotbuiltcitylocations' => 'La base de datos GeoIP Ciudad (Ubicación) no está indexada',
	'msgnotbuiltcitylocations' => SWIFT_PRODUCT .' no ha indexado la base de datos GeoIP Ciudad (Ubicación). La información GeoIP será imprecisa o no estará disponible hasta que la base de datos se haya indexado por completo.',
	'titlenotbuiltcityblocks' => 'La base de datos GeoIP Ciudad (Bloques) no está indexada',
	'msgnotbuiltcityblocks' => SWIFT_PRODUCT .' no ha indexado la base de datos GeoIP Ciudad (Bloques). La información de GeoIP será imprecisa o no estará disponible hasta que la indexación de la base de datos se haya completado.',
	'titlenotbuiltisp' => 'La base de datos GeoIP ISP no está indexada',
	'msgnotbuiltisp' => SWIFT_PRODUCT .' no ha indexado la base de datos GeoIP ISP. La información de GeoIP será imprecisa o no estará disponible hasta que el indexado de la base de datos se haya completado.',
	'titlenotbuiltnetspeed' => 'La base de datos de GeoIP Netspeed no está indexada',
	'msgnotbuiltnetspeed' => SWIFT_PRODUCT .' no ha indexado la base de datos de GeoIP Netspeed. La información de GeoIPserá imprecisa o no estará disponible hasta que el indexado de la base de datos se haya completado.',
	'titlenotbuiltorganization' => 'La base de datos de Organización GeoIP no se ha indexado',
	'msgnotbuiltorganization' => SWIFT_PRODUCT .' no ha indexado la base de datos de Organización GeoIP. La información de GeoIP será imprecisa o no estará disponible hasta que el indexado de la base de datos se haya completado.',
	'titlenotbuiltgeoip' => 'La base de datos GeoIP no está indexada',
	'msgnotbuiltgeoip' => SWIFT_PRODUCT . ' no ha indexado la siguiente base de datos de GeoIP database. La información de GeoIP será imprecisa o no estará disponible hasta que el indexado de la base de datos se haya completado.',
	'titlenotuptodategeoip' => 'La base de datos GeoIP no está actualizada',
	'msgnotuptodategeoip' => SWIFT_PRODUCT . ' no contiene un índice actualizado para las siguientes bases de datos de GeoIP. La información de GeoIP será imprecisa o no estará disponible hasta que la base de datos se haya reindexado.',
);
?>