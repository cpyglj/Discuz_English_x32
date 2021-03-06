<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupthread.php by Valery Votintsev, codersclub.org
 *      Translated to Spanish by jhoxi, discuzhispano.com
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupthread_fids'			=> 'Grupo ID',//'群组ID',
	'groupthread_fids_comment'		=> 'ID grupo específico, use "," para separar IDs',//'指定群组ID，多个ID之间用 , 分割',
	'groupthread_gtids'			=> 'Categorías de grupo',//'群组分类',
	'groupthread_gtids_comment'		=> 'Seleccione la categoría de grupo',//'选择群组分类',
	'groupthread_uids'			=> 'Autor UID',//'楼主UID',
	'groupthread_uids_comment'		=> 'Tema específico ID de autor, use "," para separar IDs',//'指定主题作者ID，多个ID之间用 , 分割',
	'groupthread_keyword'			=> 'Palabras clave',//'标题关键字',
	'groupthread_keyword_comment'		=> 'Establecer las palabras clave usadas.<br />Puede utilizar comodines "*" en las palabras clave.<br />Si usted desea utilizar algunas palabras clave al mismo tiempo, se puede utilizar "AND". Ejemplo: win32 AND unix.<br />Si desea utilizar sólo una de las palabras clave, puede utilizar "|" o "OR". Ejemplo: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤<br />关键字中可使用通配符 "*"<br />匹配多个关键字全部，可用空格或 "AND" 连接。如 win32 AND unix<br />匹配多个关键字其中部分，可用 "|" 或 "OR" 连接。如 win32 OR unix',
	'groupthread_startrow'			=> 'Primera fila',//'起始数据行数',
	'groupthread_startrow_comment'		=> 'Si usted necesita para establecer la fila de inicio, por favor, introduzca un número, 0 es la primera fila',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'groupthread_items'			=> 'Filas',//'显示数据条数',
	'groupthread_items_comment'		=> 'Establecer el número de filas que desea mostrar, debe entero y mayor que 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'groupthread_titlelength'		=> 'Longitud del título',//'标题最大字节数',
	'groupthread_maxlength_comment'		=> 'Establecer la longitud máxima del título, cuando el título es más largo que este valor, será cortado de forma automática, 0 es desactivar',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'groupthread_fnamelength'		=> 'Foro longitud del título',//'标题最大字节数包含版块名称',
	'groupthread_fnamelength_comment'	=> 'Establecer la longitud máxima del título como el nombre del foro',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'groupthread_summarylength'		=> 'Resumen de longitud',//'主题简短内容文字数',
	'groupthread_summarylength_comment'	=> 'Establecer la longitud del resumen, 0 igual al valor por defecto (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'groupthread_picpre'			=> 'Prefijo Icono',//'前缀图标',
	'groupthread_picpre_comment'		=> 'Establecer el icono de prefijo tema, mantener en blanco para desactivar',//'设置是否在主题前加入图片形式的图标，输入图片的 URL (绝对或相对)地址即可，留空为不显示前缀图标',
	'groupthread_tids'			=> 'Temas especificados',//'指定主题',
	'groupthread_tids_comment'		=> 'Establecer los temas se especifica lo que desea mostrar, use "," para separar tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
//	'groupthread_keyword'			=> 'Palabras clave',//'标题关键字',
//	'groupthread_keyword_comment'		=> 'Establecer las palabras clave usadas.<br />Puede utilizar comodines "*" en las palabras clave.<br />Si usted desea utilizar algunas palabras clave al mismo tiempo, se puede utilizar "AND". Ejemplo: win32 AND unix.<br />Si desea utilizar sólo una de las palabras clave, puede utilizar "|" o "OR". Ejemplo: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤<br />关键字中可使用通配符 "*"<br />匹配多个关键字全部，可用空格或 "AND" 连接。如 win32 AND unix<br />匹配多个关键字其中部分，可用 "|" 或 "OR" 连接。如 win32 OR unix',
	'groupthread_typeids'			=> 'Tipos de temas',//'主题分类',
	'groupthread_typeids_comment'		=> 'Seleccione el tipo de tema específico. Nota: Seleccionar todo o Borrar todo para desactivar ningún tipo de filtrado.',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_typeids_all'		=> 'Todos los tipos de tema',//'全部的主题分类',
	'groupthread_sortids'			=> 'Tipo Ids(Categorías?)',//'分类信息',
	'groupthread_sortids_comment'		=> 'Establecer la clasificación de tema. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_sortids_all'		=> 'Todas las categorías',//'全部的分类信息',
	'groupthread_threadtype'		=> 'Tema tipo de prefijo',//'显示主题分类前缀',
	'groupthread_threadtype_comment'	=> 'Mostrar el prefijo antes de los temas',//'设置是否在主题列表中，给分类的主题前加上分类名称',
	'groupthread_groupthreadort'		=> 'Mostrar prefijo de categoría',//'显示分类信息前缀',
	'groupthread_groupthreadort_comment'	=> 'Configurada para mostrar el prefijo antes del nombre de categoría en la lista de Temas',//'设置是否在主题列表中，给分类信息的主题前加上分类信息名称',
	'groupthread_highlight'			=> 'Destacar',//'显示主题的高亮特性',
	'groupthread_highlight_comment'		=> 'Mantener lo más destacados de los temas',//'设置是否显示主题的高亮特性',
	'groupthread_digest'			=> 'Digerir filtro',//'精华主题过滤',
	'groupthread_digest_comment'		=> 'Seleccione el rango de tema específico. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_digest_0'			=> 'Tema general',//'普通主题',
	'groupthread_digest_1'			=> 'Digerir I',//'精华 I',
	'groupthread_digest_2'			=> 'Digerir II',//'精华 II',
	'groupthread_digest_3'			=> 'Digerir III',//'精华 III',
	'groupthread_stick'			=> 'Pegar filtro',//'置顶主题过滤',
	'groupthread_stick_comment'		=> 'Seleccione el rango de tema específico. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_stick_0'			=> 'Tema general',//'普通主题',
	'groupthread_stick_1'			=> 'Pegar I',//'置顶 I',
	'groupthread_stick_2'			=> 'Pegar II',//'置顶 II',
	'groupthread_stick_3'			=> 'Pegar III',//'置顶 III',
	'groupthread_special'			=> 'Filtro de tema especial',//'特殊主题过滤',
	'groupthread_special_comment'		=> 'Seleccione el rango de tema específico. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_special_1'			=> 'Tema de Encuesta',//'投票主题',
	'groupthread_special_2'			=> 'Tema de Mercado',//'商品主题',
	'groupthread_special_3'			=> 'Tema de Premio',//'悬赏主题',
	'groupthread_special_4'			=> 'Tema de Evento',//'活动主题',
	'groupthread_special_5'			=> 'Tema de Debate',//'辩论主题',
	'groupthread_special_0'			=> 'Tema general',//'普通主题',
	'groupthread_special_reward'		=> 'Filtro de recompensa',//'悬赏主题过滤',
	'groupthread_special_reward_comment'	=> 'Seleccione los tipos específicos de recompensa',//'设置特定类型的悬赏主题',
	'groupthread_picrequired'		=> 'Archivo adjunto de imagen requerida',//'必须含图片附件',
	'groupthread_picrequired_comment'	=> 'Situado a sólo para ver subprocesos contienen archivos adjuntos de imagen',//'设置是否只显示含有图片附件的主题',
	'groupthread_special_reward_0'		=> 'Todos',//'全部',
	'groupthread_special_reward_1'		=> 'Terminado',//'已解决',
	'groupthread_special_reward_2'		=> 'Activo',//'未解决',
	'groupthread_recommend'			=> 'Tema de filtro recomendado',//'推荐主题过滤',
	'groupthread_recommend_comment'		=> 'Mostrar sólo los temas recomendados',//'设置是否只显示推荐的主题',
	'groupthread_orderby'			=> 'Ordenado por',//'主题排序方式',
	'groupthread_orderby_comment'		=> 'Establecer el orden de los temas',//'设置以哪一字段或方式对主题进行排序',
	'groupthread_orderby_lastpost'		=> 'Último post',//'按最后回复时间倒序排序',
	'groupthread_orderby_dateline'		=> 'Hora de inicio',//'按发布时间倒序排序',
	'groupthread_orderby_replies'		=> 'Respuestas',//'按回复数倒序排序',
	'groupthread_orderby_views'		=> 'Vistas',//'按浏览次数倒序排序',
	'groupthread_orderby_heats'		=> 'Nuevo',//'按热度倒序排序',
	'groupthread_orderby_recommends'	=> 'Recomendar',//'按主题评价倒序排序',
	'groupthread_orderby_hourviews'		=> 'Vista dentro del tiempo especificado',//'按小时内浏览次数倒序排序',
	'groupthread_orderby_todayviews'	=> 'Visitas hoy',//'按当天浏览次数倒序排序',
	'groupthread_orderby_weekviews'		=> 'Vistas la semana pasada',//'按本周浏览次数倒序排序',
	'groupthread_orderby_monthviews'	=> 'Visitas el mes pasado',//'按当月浏览次数倒序排序',
	'groupthread_postdateline'		=> 'Tiempo de la publicación',
	'groupthread_postdateline_nolimit'	=> 'Cualquier',
	'groupthread_postdateline_hour'		=> 'Última Hora',
	'groupthread_postdateline_day'		=> 'Último día',
	'groupthread_postdateline_week'		=> 'Semana pasada',
	'groupthread_postdateline_month'	=> 'Mes pasado',
	'groupthread_lastpost'			=> 'Último post',//'最后更新时间',
	'groupthread_lastpost_nolimit'		=> 'Sin límite',//'不限制',
	'groupthread_lastpost_hour'		=> 'Última hora',//'1小时内',
	'groupthread_lastpost_day'		=> 'Último día',//'24小时内',
	'groupthread_lastpost_week'		=> 'Semana pasada',//'7天内',
	'groupthread_lastpost_month'		=> 'Mes pasado',//'1个月内',
	'groupthread_orderby_displayorder'	=> 'Orden por defecto',//'按默认顺序',
	'groupthread_gviewperm'			=> 'Grupo ver los permisos',//'群组浏览权限',
	'groupthread_gviewperm_nolimit'		=> 'Sin límites',
	'groupthread_gviewperm_only_member'	=> 'Sólo para miembros',//'仅成员',
	'groupthread_gviewperm_all_member'	=> 'Todos',//'所有人'
	'groupthread_highlight'			=> 'Resalta las palabras encontradas',
);

