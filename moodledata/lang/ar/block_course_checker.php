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
 * Strings for component 'block_course_checker', language 'ar', version '3.10'.
 *
 * @package     block_course_checker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedates_setting_coursesregex_help'] = 'قم بتعريف التعبير الاعتيادي للسماح بهذا التدقيق فقط حيث يطابق الأسماء الكاملة للمساقات.';
$string['admin_domain_list_notvalid'] = 'القائمة ليست قائمة صحيحة للمجالات';
$string['admin_domain_name_default_missing'] = 'اسم المجال مفقود: {$a}';
$string['admin_domain_name_notvalid'] = 'اسم المجال غير صحيح: {$a}. يرجى إضافة اسم مجال واحد لكل سطر.';
$string['admin_restrictedint_max'] = 'القيمة العظمى هي {$a}';
$string['admin_restrictedint_min'] = 'القيمة الصغرى هي {$a}';
$string['backtocourse'] = 'عودة إلى المقرر الدراسي';
$string['blocks_comparison'] = '(المساق المرجعي: "{$a->valuereference}" | المساق الحالي: "{$a->valuecurrent}")';
$string['blocks_setting'] = 'الكتل المُمَكَّنة';
$string['checker_blocks'] = 'فحص الكتل';
$string['checker_blocks_display'] = 'الكتل الموجودة';
$string['checker_data_display'] = 'نشاط البيانات مع الحقول';
$string['checker_links_book_chapter'] = 'فصل الكتاب: {$a->title}';
$string['checker_links_error_httpsecurity'] = 'المجال المعطى {$a} موضوع في القائمة السوداء عند التحقق من عنوانه ورقم منفذه إزاء القائمتين السوداء/البيضاء في إعدادات أمان HTTP لمودل.';
$string['checker_links_error_skipped'] = 'إن المجال {$a->host} هو ضمن القائمة البيضاء لـ {$a->url}';
$string['checker_links_setting_connect_timeout'] = 'مهلة اتصال cURL';
$string['checker_links_setting_timeout'] = 'مهلة cURL';
$string['checker_links_setting_whitelist'] = 'القائمة البيضاء لفاحص الروابط';
$string['checker_links_wiki_page'] = 'صفحة الويكي: {$a->title}';
$string['checker_quiz'] = 'فحص الاختبار';
$string['checker_quiz_display'] = 'الدرجة الإجمالية في الاختبار لانشط';
$string['checker_referencefilter_comparison'] = '(المساق المرجعي: "{$a->filtervaluereference}" | المساق الحالي: "{$a->filtervaluecurrent}")';
$string['checker_referencesettings_comparison'] = '(المساق المرجعي: "{$a->settingvaluereference}" | المساق الحالي: "{$a->settingvaluecurrent}")';
$string['course_checker:addinstance'] = 'إضافة كتلة جديدة من فاحص المساق';
$string['group_blocks'] = 'إعدادات الكتلة';
$string['groups_deactivated'] = 'إعداد التسليم في مجموعة تم تعطيله';
$string['pluginname'] = 'مدقق المساق';
$string['quiz_activity'] = 'النشاط: {$a->name}  ({$a->modname})';
$string['quiz_grade_sum_error'] = 'الدرجة القصوى ({$a->grade}) وإجمالي الدرجات ({$a->sumgrades}) ينبغي أن يكونا نفس الرقم في هذا الاختبار';
$string['quiz_grade_sum_success'] = 'الاختبار مهيأ بشكل صحيح';
$string['resultpermissiondenied'] = 'ليس مسموحًا لك بالوصول إلى هذه الصفحة';
$string['subheadings_labelignored'] = 'هذا الملصق مهمل نظراً للقائمة البيضاء في تهيئة الملحق.';
