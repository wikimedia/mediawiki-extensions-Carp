<?php
/**
 * Internationalisation for Carp extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();/** Message documentation (Message documentation) */
$messages['qqq'] = array(
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
	'carp-template' => 'Template decorator. Used in stack backtrace.',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'carp-desc' => 'Ermöglicht Fehlerberichterstattungen und Stapelabwicklungen zu anderen Erweiterungen',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'carp-desc' => 'Zmóžnja zdźělenje zmylkow a wotwiwanje staplow k druhim rozšěrjenjam.',
);

/** Russian (русский) */
$messages['ru'] = array(
	'carp-desc' => 'Предоставляет другим расширениям сервис для сообщений об ошибках и раскрутки стека вызовов.',
);

