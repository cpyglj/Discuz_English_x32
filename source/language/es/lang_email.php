<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php by Valery Votintsev, codersclub.org
 *	Translated to Spanish by Willy Kuan', discuzhispano.com
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$lang = array
(
	'hello'				=> 'Hola',//'你好',
	'moderate_member_invalidate'	=> 'Rechazar',//'否决',
	'moderate_member_delete'	=> 'Eliminar',//'删除',
	'moderate_member_validate'	=> 'Aceptar',//'通过',


	'get_passwd_subject'	=> 'Recuperar contraseña',//'取回密码说明',
	'get_passwd_message'	=> '
<p>{username},
Esta carta fue enviada desde el {bbname}.</p>

<p>Usted ha recibido este mensaje, ya que esta dirección de correo electrónico está registrado como usuario de nuestros foros,
y se envió una solicitud de restablecer la contraseña por correo electrónico.</p>
<p>
----------------------------------------------------------------------<br />
<strong>Importante!</strong><br />
----------------------------------------------------------------------</p>

<p>Si no ha solicitado restablecer la contraseña o si no se ha registrado en nuestro foro,
por favor ignore y borre el mensaje.
En el caso de confirmar el restablecimiento de la contraseña,
le recomendamos que lea el siguiente contenido.</p>
<p>
----------------------------------------------------------------------<br />
<strong>Instrucciones para el restablecimiento de contraseña</strong><br />
----------------------------------------------------------------------</p>
</p>
Sólo tiene que presentar en el plazo de tres días después de una solicitud haciendo clic en el enlace a continuación para restablecer su contraseña:<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}</a>
<br />
(Si el enlace de arriba no funciona, por favor, pégue este código manualmente en la barra de direcciones del navegador.)</p>

<p>Después de abrir la página anterior, introducir una nueva contraseña y enviar un formulario, una vez entonces usted puede utilizar su nueva contraseña.
Usted puede cambiar su contraseña en cualquier momento en su panel de control de usuario.</p>

<p>Esta solicitud se presentó desde la dirección IP: {clientip}</p>


<p>
Atentamente,<br />
</p>
<p>{bbname} Equipo de Administración.
{siteurl}</p>',


	'email_verify_subject'	=> 'Verificación de la dirección de correo electrónico',//'Email 地址验证',
	'email_verify_message'	=> '
<p>{username},
Esta carta fué enviada desde el {bbname}.</p>

<p>Ustéd ha recibido este mensaje, porque se ha registrado en nuestro foro como usuario nuevo, 
o algún usuario ha utilizado la dirección para modificar su correo electrónico.
Si no ha visitado nuestro foro, o no ha llevado a cabo alguna de estas operaciónes, 
por favor ignore este mensaje.
No es necesario que se desuscriba o alguna otra acción.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Instrucciones de activación de cuenta</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>Usted es nuevo en nuestro foro, o modificó su dirección de correo electrónico de registro para utilizar este,
Tenemos que verificar la validez de su dirección de correo electrónico para evitar las acciones de abuso de spam o de otro tipo.</p>

<p>Para activar su cuenta de correo electrónico debe hacer clic en el enlace de abajo:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(Si el enlace de arriba no funciona, por favor, pega el código del enlace manualmente en la barra de direcciones del navegador.)</p>

<p>Gracias por su visita y le deseamos felicidad! </p>


<p>
Atentamente,<br />

{bbname} Equipo de Administración.<br />
{siteurl}</p>',

	'email_register_subject' =>	'Forum registration',//'论坛注册地址',
'email_register_message' =>	'<br />
<p>This letter is sent from {bbname}.</p>

<p>You have received this message due to somebody (may be you) registered this E-Mail address at {bbname}.
If you do not want to access to {bbname}, or you did not registered at this site,
please ignore this message.

You do not need to unsubscribe or do any other further action.</p>
<br />
----------------------------------------------------------------------<br />
<strong>New user registration instructions</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>If you are a {bbname} new user, or have modified your registered before Email address,
it is required to verify your mailbox address in order to avoid junk or malicious e-mail.</p>

<p>For register just click on the link below. The following link is valid for 3 days. After expired you can request to re-send the activation email to a new e-mail address:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(If the above link is not working, copy the link URL and paste it into your browser address bar manually)</p>

<p>Thank you for your visit, we are glad to see you at our site!</p>


<p>
Sincerely yours,<br />

{bbname} management team.<br />
{siteurl}</p>',


	'add_member_subject'	=> 'Se le agrego como un miembro',//'您被添加成为会员',
	'add_member_message'	=> '
{newusername},
Esta carta fue enviada desde {bbname}.
<br />
Yo soy {adminusername}, uno de los administradores de {bbname}.<br />
Usted ha recibido este mensaje porque has sido añadido al grupo de miembros<br />
en nuestro foro, desde su dirección de correo electrónico actual que está registrado.<br />
<br />
----------------------------------------------------------------------<br />
Importante!<br />
----------------------------------------------------------------------<br />
<br />
Si usted no está interesado en nuestro foro o no la intención de convertirse en un miembro, por favor ignore este mensaje.<br />
<br />
----------------------------------------------------------------------<br />
Your Account Information<br />
----------------------------------------------------------------------<br />
<br />
Nombre del Foro: {bbname}<br />
Dirección del foro:{siteurl}<br />
<br />
Nombre de usuario: {newusername}<br />
Contraseña: {newpassword}<br />
<br />
A partir de ahora, usted puede utilizar su cuenta para acceder a nuestro foro, te deseamos una agradable de usar!<br />
<br />
<br />
<br />
Atentamente,<br />
<br />
{bbname} Equipo de Administración.<br />
{siteurl}',


	'birthday_subject'	=> 'Feliz Cumpleaños!',//'祝您生日快乐',
	'birthday_message'	=> '
{username},<br />
Esta carta ha sido enviada por {bbname}.<br />
<br />
Usted ha recibido este mensaje, ya que esta dirección de correo electrónico está registrado en nuestro foro.<br />
De acuerdo con la información de su perfil, hoy es tu cumpleaños.<br />
Equipo de administración del Foro le complace felicitarlo con su cumpleaños,
y sinceramente desearle un feliz cumpleaños!<br />
<br />
PD
Si usted no es un miembro de nuestro foro, o no tienen ningún cumpleaños hoy,
puede ser un error occure.
Compruebe su dirección de correo electrónico y fecha de nacimiento en su perfil.
Este mensaje no será enviado a esta dirección de correo electrónico, por favor ignore este
Mensaje.
<br />
<br />
Atentamente,
<br />
{bbname} Equipo de Administración.<br />
{siteurl}',

	'email_to_friend_subject'	=> '{$_G[member][username]} Te recomendamos visitar: $thread[subject]',//'{$_G[member][username]} 推荐给您: $thread[subject]',
	'email_to_friend_message'	=> '
Esta carta fue enviada por {$_G[member][username]} desde {$_G[setting][bbname]}.
<br />
Usted ha recibido este mensaje debido a {$_G[member][username]} desde {$_G[setting][bbname]}<br />
clic en el "e-mail a un amigo" enlace para recomendar a usted lo siguiente.<br />
Si usted no está interesado en esto, por favor ignore este mensaje.<br />
No es necesario darse de baja o adopción de nuevas medidas.<br />
<br />
----------------------------------------------------------------------<br />
Inicio del mensaje original<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
Fin del mensaje original<br />
----------------------------------------------------------------------<br />
<br />
Tenga en cuenta que esta carta fue iniciado por el usuario del foro por "correo electrónico a un amigo"!<br />
Equipo de Manejo de los foros no es responsable de ese tipo de mensajes.<br />
<br />
<br />
Bienvenido a {$_G[setting][bbname]}<br />
$_G[siteurl]',

	'email_to_invite_subject'	=> 'Tu amigo {$_G[member][username]} te invita a que te registres en {$_G[setting][bbname]}',//'您的朋友 {$_G[member][username]} 发送 {$_G[setting][bbname]} 论坛注册邀请码给您',
	'email_to_invite_message'	=> '<br />
$sendtoname,<br />
Esta carta ha sido enviada por {$_G[member][username]} desde {$_G[setting][bbname]}.<br />
<br />
Has recibido este mensaje porque el miembro {$_G[member][username]}
de nuestro foro te envió un codigo de invitación, que permiten que se registre<br />
en nuestro formulario, y le dijo, además, los siguientes.<br />
<br />
!!! Si usted no está interesado en esto, por favor ignore este mensaje.<br />
No es necesario darse de baja o adopción de nuevas medidas.<br />
<br />
----------------------------------------------------------------------<br />
Comienzo de la carta original<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
Fin de la carta original<br />
----------------------------------------------------------------------<br />
<br />
Tenga en cuenta que esta carta fue iniciado por el usuario.<br />
Equipo de Manejo de los foros no es responsable de ese tipo de mensajes.<br />
<br />
Bienvenido a {$_G[setting][bbname]}
$_G[siteurl]',


	'moderate_member_subject'	=> 'Resultados de la auditoría para informar al usuario',//'用户审核结果通知',
	'moderate_member_message'	=> '<br />
<p>{username},
Esta carta fue enviada desde el {bbname}.</p>

<p>Usted ha recibido este mensaje, porque de cada registro de nuevos usuarios
en nuestro foro requiere para verificar dirección de correo electrónico registrada por el administrador del sitio.
Después de la verificación manual se le notificará sobre los resultados de las audiciones.
</p>
<br />
----------------------------------------------------------------------<br />
<strong>Registro de información y resultados de la auditoría</strong><br />
----------------------------------------------------------------------<br />
<br />
Nombre de usuario: {username}<br />
Tiempo de registro: {regdate}<br />
Tiempo de presentación: {submitdate}<br />
Enviar el número: {submittimes}<br />
Razón del registro: {message}<br />
<br />
resultados de la auditoría: {modresult}<br />
Tiempo de auditoría: {moddate}<br />
Gerente de Auditoría: {adminusername}<br />
Mensaje del administrador: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>Resultados de la auditoría explicación</strong><br />
----------------------------------------------------------------------<br />

<p>Approved: Su registro ha sido aprobado, que se han convertido en un usuario oficial de nuestro foro.</p>

<p>Rejected:
Tu información de registro está incompleta,
o no cumple con algunos de nuestros requerimientos.
Puede enviar un mensaje al administrador,
completar su información de registro,
y luego presentarlo.</p>

<p>Eliminado:
Su solicitud de registro no cumple con nuestros requisitos,
o el número de nuevas matriculaciones superior a nuestras posibilidades.
Su solicitud está completamente rechazada, su cuenta eliminado de la base de datos.
No se puede utilizar para registro en o presentado para volver a examinar,
por favor, comprenda.</p>
<br />
<br />
Atentamente,<br />
<br />
{bbname} Equipo de Administración.<br />
{siteurl}',

	'adv_expiration_subject' => 'Su anuncio será el sitio {day} días después de la debida, Por favor, procesamiento oportuno',
	'adv_expiration_message' => 'Los siguientes anuncios en su sitio serán vencidos en {day} dias, por favor, tratarlo con:<br /><br />{advs}',
	'invite_payment_email_message'	=> '
Gracias por usar el {bbname}, ({siteurl}), su orden {orderid} ha sido pagado, su orden ha sido validado.<br />
<br />----------------------------------------------------------------------<br />
Aquí es lo que obtienes el código de invitación
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
Importante!
<br />----------------------------------------------------------------------<br />',
);

