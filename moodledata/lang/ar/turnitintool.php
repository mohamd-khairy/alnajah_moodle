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
 * Strings for component 'turnitintool', language 'ar', version '3.10'.
 *
 * @package     turnitintool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allstudents'] = 'كل الطلاب';
$string['autorefreshgrades'] = 'تنشيط الدرجات/العلامات تلقائياً';
$string['commenteditwindow'] = 'التعليقات تبقى قابلة للتحرير';
$string['editwindow'] = 'قابل للتحرير لـ';
$string['enablepseudo'] = 'تمكين خصوصية الطالب';
$string['enablepseudo_desc'] = 'إذا تم تحديد هذا الخيار، سيجري تحويل عناوين البريد الالكتروني للطلاب إلى ما يكافئها من العناوين الزائفة من أجل استدعاءات واجهة برمجة التطبيق في Turnitin.<br /><i>(<b>ملاحظة:</b> لا يمكن تغيير هذا الخيار إذا سبق وأن تمت مزامنة بيانات أي من المستخدمين مع Turnitin)</i>';
$string['excludevalue'] = 'استبعاد التطابقات الصغيرة';
$string['goback'] = 'رجوع';
$string['maxfilesize'] = 'أقصى حجم للملف';
$string['nogrades'] = 'لا، سأقوم بتنشيط درجات الأصالة وعلاماتها يدوياً';
$string['nonmoodlestudents'] = 'الطلاب من خارج مودل';
$string['partnameerror'] = 'اسم الجزء لا يمكن تركه فارغاً.<br />';
$string['partnaming'] = 'أسماء الأجزاء';
$string['partweighterror'] = 'وزن الجزء {$a} لا يمكن أن يكون فارغاً<br />';
$string['privacy:metadata:turnitintool_client:firstname'] = 'تم إرسال الاسم الأول للمستخدم إلى Turnitin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:turnitintool_client:lastname'] = 'تم إرسال الاسم الأخير للمستخدم إلى Turnitin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:turnitintool_client:submission_filename'] = 'اسم الملف المسلَّم سيتم إرساله إلى Turntin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:turnitintool_client:submission_title'] = 'عنوان التسليم سيتم إرساله إلى Turntin ليكون بالإمكان التعرف عليه';
$string['privacy:metadata:turnitintool_comments'] = 'التعليقات التي كُتِبَت عن التسليم الذي تم إرساله إلى Turnitin';
$string['privacy:metadata:turnitintool_submissions'] = 'معلومات عن التسليم الذي تم إرساله إلى Turnitin';
$string['privacy:metadata:turnitintool_submissions:submission_attempts'] = 'طابع زمني يشير إلى وقت معاينة المستخدم للإفادة في تسليمه';
$string['privacy:metadata:turnitintool_submissions:submission_filename'] = 'اسم الملف المقدم إلى Turnitin';
$string['privacy:metadata:turnitintool_submissions:submission_objectid'] = 'المُعرَّف المستعمل من قبل Turnitin للدلالة على التسليم';
$string['privacy:metadata:turnitintool_submissions:submission_score'] = 'درجة التشابه للتسليم';
$string['privacy:metadata:turnitintool_submissions:submission_title'] = 'عنوان التسليم';
$string['pseudoemailaddress'] = 'عنوان البريد الالكتروني الزائف';
$string['pseudoemaildomain'] = 'مجال البريد الالكتروني الزائف';
$string['pseudoemaildomain_desc'] = '<b>[إختياري]</b><br />مجال إختياري لعناوين البريد الالكتروني الزائفة. (إفتراضياً هو @tiimoodle.com إذا تُرك فارغاً)';
$string['pseudoemailsalt'] = 'الشفرة الفريدة الزائفة';
$string['pseudoemailsalt_desc'] = '<b>[إختياري]</b><br />شفرة فريدة إختيارية لزيادة تعقيد عنوان البريد الالكتروني الزائف المولد للطالب.<br />(<b>ملاحظة:</b> ينبغي الحفاظ على الشفرة الفريدة بلا تغيير لضمان تناسق عناوين البريد الالكتروني الزائفة)';
$string['pseudofirstname'] = 'الاسم الأول الزائف للطالب';
$string['pseudolastname'] = 'الاسم الأخير الزائف للطالب';
$string['pseudolastname_desc'] = 'الاسم الأخير للطالب لعرضه في معاينة مستندات Turnitin';
$string['pseudolastnamegen_desc'] = 'إذا تم ضبطه إلى نعم، وتم ضبط الاسم الأخير الزائف للمستخدم إلى حقل من الملف الشخصي، فستتم تعبئة الحقل تلقائيًا بمُعرَّف فريد.';
$string['resultsperpage'] = 'النتائج لكل صفحة';
$string['scorenotavailable'] = 'درجة الأصالة ليست متاحة بعد.';
$string['student'] = 'الطالب';
$string['studentdataprivacy_desc'] = 'يمكن تهيئة الإعدادات الآتية لضمان عدم إرسال البيانات الشخصية للطلاب إلى Turnitin بواسطة واجهة برمجة التطبيق.';
$string['studentreports_help'] = 'يسمح لك بعرض تقارير الأصالة من Turnitin للطلاب. عند جعله \'نعم\'، تقرير الأصالة المولد من قبل Turnitin سيكون متاحًا للطلاب لمعاينته.';
$string['studentsname'] = 'أسماء الطلاب';
$string['submissionstudent'] = 'تسليم الطالب';
$string['submissiontitle'] = 'عنوان التسليم';
$string['submissiontitle_help'] = 'أدخل عنوان التسليم لجزء العمل الذي تقوم بتسليمه.';
$string['submissiontitleduplicate'] = 'ينبغي عليك إدخال عنوان مختلف لكل تسليم';
$string['submissiontitleerror'] = 'ينبغي عليك تضمين عنوان لهذا التسليم';
$string['submitpapersto'] = 'تخزين أوراق الطالب';
$string['title'] = 'العنوان';
$string['turnitinenrollstudents'] = 'ضم كل الطلاب';
$string['turnitinpartname'] = 'اسم الجزء';
$string['turnitinstudentemail'] = 'عناوين البريد الالكتروني للطلاب';
$string['updatingreport'] = 'استرجاع درجة تقرير Turnitin';
$string['urltosubmit'] = 'عنوان رابط صفحة التسليم';
$string['yesgrades'] = 'نعم، قم بتنشيط درجات الأصالة وعلاماتها تلقائياً';
