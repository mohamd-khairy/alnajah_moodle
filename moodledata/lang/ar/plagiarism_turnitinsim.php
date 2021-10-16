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
 * Strings for component 'plagiarism_turnitinsim', language 'ar', version '3.10'.
 *
 * @package     plagiarism_turnitinsim
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = 'وصول الطالب';
$string['errorquizattemptnotfound'] = 'تعذر العثور على محاولة الاختبار لهذا التسليم.';
$string['eulalink'] = 'لإرسال هذا التسليم إلى Turnitin، ينبغي عليك قبول <a href="{$a}" target="_blank">اتفاقية الترخيص لمستخدم Turnitin</a>.';
$string['eulalinkgeneric'] = 'أذا أردت لتسليماتك المستقبلية أن يتم إرسالها إلى Turnitin، ينبغي عليك قبول <a href="{$a}" target="_blank">اتفاقية الترخيص لمستخدم Turnitin</a>.';
$string['eulalinkmodal'] = 'لإرسال هذا التسليم إلى Turnitin، ينبغي عليك قبول <a href="#" class="eula_link">اتفاقية الترخيص لمستخدم Turnitin</a>.';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = 'تم إرسال الاسم الأول للمستخدم إلى Turnitin عند إطلاق معاينة Turnitin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = 'تم إرسال الاسم الأخير للمستخدم إلى Turnitin عند إطلاق معاينة Turnitin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = 'يرجى أن تكون مدركاً بأن محتوى الملف/التسليم يتم إرسالها إلى Turnitin للمعالجة';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = 'اسم الملف المسلَّم سيتم إرساله إلى Turntin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = 'عنوان التسليم سيتم إرساله إلى Turntin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = 'درجة التشابه النهائية للتسليم';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = 'المُعرَّف المستعمل من قبل Turnitin للدلالة على التسليم';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'المُعرَّف المستعمل من قبل Turnitin للدلالة على المستخدم';
$string['receiptsinstructor:message'] = 'التسليم المعنون <strong>{$a->submission_title}</strong> المقدم إلى الوحدة <strong>{$a->module_name}</strong> في الصف <strong>{$a->course_fullname}</strong> تم إرساله إلى Turnitin.<br /><br />مُعرَّف التسليم: <strong>{$a->submission_id}</strong><br />تاريخ التسليم: <strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = 'تم إرسال التسليم إلى Turnitin';
$string['receiptstudent:message'] = 'عزيزنا {$a->firstname} {$a->lastname}،<br /><br />ملفك <strong>{$a->submission_title}</strong> في وحدة <strong>{$a->module_name}</strong> في الصف <strong>{$a->course_fullname}</strong> تم تقديمه بنجاح إلى Turnitin في <strong>{$a->submission_date}</strong>. مُعرَّف تسليمك هو <strong>{$a->submission_id}</strong>.<br /><br />شكرًا على استعمالك Turnitin،<br /><br />فريق Turnitin';
$string['submissiondisplayerror:corruptfile_help'] = 'يبدو أن الملف المرفوع تالف.';
$string['submissiondisplayerror:filelocked_help'] = 'الملف المرفوع يتطلب فتحه كلمة مرور.';
$string['submissiondisplayerror:generic'] = 'لم يتم إرسال الملف إلى Turnitin';
$string['submissiondisplayerror:notsent'] = 'لم يتم إرسال الملف إلى Turnitin';
$string['submissiondisplayerror:toomanypages'] = 'صفحات كثيرة جدًا';
$string['submissiondisplayerror:toomanypages_help'] = 'هناك صفحات كثيرة جدًا في التسليم بحيث يتعذر توليد تقرير التشابه (لا يمكن للتسليم أن يحتوي على أكثر من 400 صفحة)';
$string['submissiondisplayerror:unsupportedfiletype_help'] = 'نوع الملف المرفوع غير مدعوم.';
$string['taskgetreportscores'] = 'إجلب درجات التقرير لملحق نزاهة Turnitin';
$string['turnitinsiminternet'] = 'إفحص إزاء محتوى الإنترنت';
$string['turnitinsimprivate'] = 'إفحص إزاء المحتوى الشخصي';
$string['viewerpermissionoptions'] = 'صلاحيات المعاينة';
$string['viewlogs'] = 'سجلات الوقوعات';
