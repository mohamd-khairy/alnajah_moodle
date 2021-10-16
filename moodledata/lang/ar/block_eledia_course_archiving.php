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
 * Strings for component 'block_eledia_course_archiving', language 'ar', version '3.10'.
 *
 * @package     block_eledia_course_archiving
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure_description'] = 'هنا يمكنك تهيئة عملية الأرشفة. إنها تعني جعل المساق مخفيًا، منقولاً إلى تصنيف الأرشفة المعد له وكل مستخدميه من الطلاب سيلغى انضمامهم إليه.
سيتم فحص كل المساقات المتواجدة مباشرة في التصنيفات الأصلية بالنسبة إلى الطابع الزمني المحدد.
إعتمادًا على إعدادات الطابع الزمي، ستحدث هنا المجريات الآتية.<br />

تاريخ بدء المساق:<br />
إذا كان التاريخ ضمن النطاق الزمني الحاضر والأيام المحددة كانت في الماضي، ستتم أرشفة المساق. في خطوة ثانية، سيتم التحقق من كل المساقات التي في تصنيف الأرشفة.
إذا كانت أبعد من الأيام المحددة في الماضي، سيتم حذف المساق.<br />
<br />
آخر نشاط في المساق:<br />
إذا كان التاريخ أبعد من التاريخ المحدد في الماضي، ستتم أرشفة المساق. في خطوة ثانية، سيتم التحقق من كل المساقات التي في تصنيف الأرشفة.
إذا كانت المساقات هناك غير فعالة لأكثر من ضعف عدد الأيام التي في الإعداد، سيتم حذفها بشكل نهائي.<br />
<br />
يمكن الشروع بالعملية عبر نموذج مرتبط بالكتلة. يمكن إضافة الكتلة إلى الصفحة الرئيسية حصرًا.
كبديل عن ذلك، يمكنك تهيئة العملية لتنطلق عبر مشغل الوظائف الدورية.';
$string['days'] = 'عدد الأيام المزمع أرشفتها';
$string['pluginname'] = 'أرشفة المساق';
$string['run_cron'] = 'تفعيل مهمة الأرشفة لمشغل الوظائف المجدولة';
