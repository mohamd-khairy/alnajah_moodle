<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_coursearchiver', language 'ar', version '3.10'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archivedeletesetting_help'] = 'كم هو عدد أيام تأخير حذف الأرشيف؟';
$string['coursearchiver_help'] = 'البحث عن المساقات باستعمال المعايير الآتية: مطابقة الاسم المختصر، الاسم الكامل، المُعرَّف، مُعرَّف المساق، تاريخ آخر وصول إلى المساق، أو المساقات الفارغة*
.\\n
تظهر المساقات رمادية إذا كانت مخفية. سيكون الاسم الكامل للمساق مشطوبًا إن كان فارغًا.\\n\\n
ملاحظة: البحث حسب تاريخ آخر وصول سيرجع نتائج تقتصر على المساقات التي تم إنشاؤها قبل التاريخ المعطى.\\n
ملاحظة: عدد عناوين البريد الالكتروني المعثور عليها قد يختلف عد عدد الرسائل المرسلة. هناك سببان لذلك.\\n
   1. المساق المخفي سابقًا لن يرسل رسالة لإشعار مالكيه إذا تم اختياره ليكون مخفيًا.\\n
   2. العنوان المنفرد الذي يظهر ضمن مساقات متعددة سيتم تجميعه ليظهر مرة واحدة.\\n\\n
*المساقات المخفية هي تلك التي فيها 0 من الواجبات، 0 من الموارد، 0 من التصنيفات في سجل التقديرات، و 0 من مفردات التقييم في سجل التقديرات.';
$string['errormissingto'] = 'المتغير %to كان مفقودًا من قالب البريد الالكتروني. هذا هو اسم المستلم.';
$string['optoutleft'] = '{$a} من الأيام بقيت';
$string['optoutlist'] = 'إدارة قائمة الانسحاب';
