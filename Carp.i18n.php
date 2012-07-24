<?php
/**
 * Internationalisation for Carp extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Van de Bugger
 */
$messages[ 'en' ] = array(
	'carp-desc' => 'Provides error reporting and stack unwinding to other extensions.',
	'carp-function-msg' => '&#123;&#123; $1: $2 &#125;&#125;',
	'carp-template-msg' => '&#123;&#123; $1 &#124; $2 &#125;&#125;',
	'carp-template'     => '&#123;&#123; $1 &#125;&#125;',
);

$messages[ 'qqq' ] = array(
	'carp-function-msg' => 'Parser function error decorator. Paramaters:
$1 is name of function,
$2 is the error message.
This message formats parser function errors. For example,
    &#123;&#123; $1: $2 &#125;&#125;
will generate message like this:
    {{ function-name: error-message }}
Translators can change order (e. g. put function name on the left side of error message for LTR languages) or use another separator instead of colon, etc.',
	'carp-template-msg' => 'Template error decorator. Parameters:
$1 is template name,
$2 is error message.
Similar to parser function decorator, but this one formats template errors.',
	'carp-template'     => 'Template decorator. Used in stack backtrace.',
);

/** Russian (Русский)
 * @author Van de Bugger
 */
$messages[ 'ru' ] = array(
	'carp-desc' => 'Предоставляет другим расширениям сервис для сообщений об ошибках и раскрутки стека вызовов.',
);
