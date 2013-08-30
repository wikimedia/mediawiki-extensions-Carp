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
	'carp-desc' => 'Provides error reporting and stack unwinding to other extensions',
	'carp-function-msg' => '&#123;&#123; $1: $2 &#125;&#125;',
	'carp-template-msg' => '&#123;&#123; $1 &#124; $2 &#125;&#125;',
	'carp-template'     => '&#123;&#123; $1 &#125;&#125;',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'carp-desc' => '{{desc|name=Carp|url=http://www.mediawiki.org/wiki/Extension:Carp}}',
	'carp-function-msg' => '{{Optional}}
Parser function error decorator. Parameters:
* $1 - name of function
* $2 - the error message
This message formats parser function errors. For example,
    &#123;&#123; $1: $2 &#125;&#125;
will generate message like this:
    <nowiki>{{ function-name: error-message }}</nowiki>
Translators can change order (e.g. put function name on the left side of error message for LTR languages) or use another separator instead of colon, etc.',
	'carp-template-msg' => '{{Optional}}
Template error decorator. Parameters:
* $1 - template name
* $2 - error message
Similar to parser function decorator, but this one formats template errors.',
	'carp-template' => '{{Optional}}
Template decorator. Used in stack backtrace. Parameters:
* $1 - frame name',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'carp-desc' => "Ufre informes d'error y desendolcu de la pila de memoria a otres estensiones.",
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'carp-desc' => 'آیری اوزانتیلارا خطا بیلدیرمک و استک آچماق ایمکانی وئریر',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'carp-desc' => 'Minataong pagtatala nin kasalaan asin bangay na minabuhi kan ibang mga ekstensyon',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'carp-desc' => 'Магчымасьць паведамленьня пра памылкі і адлюстраваньня разгорнутага стэку для іншых пашырэньняў.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Purodha
 */
$messages['de'] = array(
	'carp-desc' => 'Ermöglicht Fehlerberichte und Stapelabwicklung für andere Erweiterungen',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'carp-desc' => 'Zmóžnja rozpšawjenje a wótwijanje štapjelow k drugim rozšyrjenjam.',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'carp-desc' => 'Proporciona informes de errores y el desenredo de la pila de memoria a las otras extensiones.',
);

/** Persian (فارسی)
 * @author Reza1615
 */
$messages['fa'] = array(
	'carp-desc' => 'تهیهٔ گزارش خطا و پشتهٔ انهدام برای افزونه‌های دیگر',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'carp-desc' => "Fournit à d'autres extensions un rapport d'erreur et de pile d'exécution",
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'carp-desc' => 'Proporciona informes de erros e desenrolamento de pilas de memoria ás outras extensións.',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'carp-desc' => 'דיווח שגיאות ותצוגת מחסנית להרחבות אחרות',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'carp-desc' => 'Zmóžnja zdźělenje zmylkow a wotwiwanje staplow k druhim rozšěrjenjam.',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'carp-desc' => 'Hiba jelentés és stack visszakeresési szolgáltatásokat biztosít más bővítményeknek.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'carp-desc' => 'Forni a altere extensiones le reportage de errores e analyse del pila de memoria',
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
	'carp-desc' => '他の拡張機能に、エラー報告やスタック解放の機能を提供する',
	'carp-function-msg' => '&#123;&#123; $1: $2 &#125;&#125;',
	'carp-template-msg' => '&#123;&#123; $1 &#124; $2 &#125;&#125;',
	'carp-template' => '&#123;&#123; $1 &#125;&#125;',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
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

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'carp-desc' => 'Määt Fählermäldonge on Stapelußjaabe för ander Zohsazprojramme möjjelesch.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'carp-desc' => 'Пријавува грешки и одвиткува складови за другите додатоци.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'carp-desc' => 'Menyediakan ciri-ciri melaporkan ralat dan merungkai tindanan pada sambungan lain',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'carp-desc' => 'Voegt de mogelijkheid toe voor het rapporteren van fouten en het uitpluizen van de stack voor andere uitbreidingen',
);

/** Polish (polski)
 * @author BeginaFelicysym
 */
$messages['pl'] = array(
	'carp-desc' => 'Umożliwia raportowanie błędów i stos przywracania do innych rozszerzeń.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'carp-desc' => "A forniss a d'àutre estension un rapòrt d'eror e ëd baron d'esecussion",
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'carp-desc' => "Dèje 'a segnalazione de errore e lleve 'a pile de le otre estenziune",
);

/** Russian (русский)
 * @author Van de Bugger
 */
$messages['ru'] = array(
	'carp-desc' => 'Предоставляет другим расширениям сервис для сообщений об ошибках и раскрутки стека вызовов.',
);

/** Ukrainian (українська)
 * @author Base
 */
$messages['uk'] = array(
	'carp-desc' => 'Надає іншим розширенням сервіс для повідомлень про помилки і розкрутки стеку викликів',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'carp-desc' => '提供错误报告和堆栈展开到给其他扩展',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 */
$messages['zh-hant'] = array(
	'carp-desc' => '提供錯誤報表並展開堆疊到其他擴展',
);
