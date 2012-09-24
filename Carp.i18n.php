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
$messages['en'] = array(
	'carp-desc' => 'Provides error reporting and stack unwinding to other extensions.',
	'carp-function-msg' => '&#123;&#123; $1: $2 &#125;&#125;',
	'carp-template-msg' => '&#123;&#123; $1 &#124; $2 &#125;&#125;',
	'carp-template'     => '&#123;&#123; $1 &#125;&#125;',
);

/** Message documentation (Message documentation) */
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

/** Belarusian (Taraškievica orthography) (‪беларуская (тарашкевіца)‬)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'carp-desc' => 'Магчымасьць паведамленьня пра памылкі і адлюстраваньня разгорнутага стэку для іншых пашырэньняў.',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'carp-desc' => 'Ermöglicht Fehlerberichterstattungen und Stapelabwicklungen zu anderen Erweiterungen',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'carp-desc' => 'Zmóžnja rozpšawjenje a wótwijanje štapjelow k drugim rozšyrjenjam.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'carp-desc' => 'Proporciona informes de erros e desenrolamento de pilas de memoria ás outras extensións.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'carp-desc' => 'Zmóžnja zdźělenje zmylkow a wotwiwanje staplow k druhim rozšěrjenjam.',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'carp-desc' => 'Fornisce le segnalazioni di errori e le chiamate nello stack di altre estensioni.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'carp-desc' => '他の拡張機能に、エラー報告やスタック解放の機能を提供する。',
	'carp-function-msg' => '&#123;&#123; $1: $2 &#125;&#125;',
	'carp-template-msg' => '&#123;&#123; $1 &#124; $2 &#125;&#125;',
	'carp-template' => '&#123;&#123; $1 &#125;&#125;',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'carp-desc' => '다른 확장 기능에 오류 보고와 스택 해제 기능을 제공합니다.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'carp-desc' => 'Пријавува грешки и одвиткува складови за другите додатоци.',
);

/** Polish (polski)
 * @author BeginaFelicysym
 */
$messages['pl'] = array(
	'carp-desc' => 'Umożliwia raportowanie błędów i stos przywracania do innych rozszerzeń.',
);

/** Russian (русский)
 * @author Van de Bugger
 */
$messages['ru'] = array(
	'carp-desc' => 'Предоставляет другим расширениям сервис для сообщений об ошибках и раскрутки стека вызовов.',
);

