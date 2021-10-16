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
 * Strings for component 'taskchain', language 'ar', version '3.10'.
 *
 * @package     taskchain
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityname'] = 'اسم النشاط';
$string['allowpaste_help'] = 'عند تمكين هذا الإعداد، سيسمح للطلاب بنسخ، لصق، وسحب النص إلى مربعات إدخال النصوص.';
$string['answers'] = 'الإجابات';
$string['answersshort'] = 'ج';
$string['applydefaults'] = 'تطبيق القيم الافتراضية المحددة';
$string['attempts'] = 'محاولات';
$string['averagescore'] = 'متوسط الدرجة';
$string['bodystylesbackground'] = 'لون وصورة الخلفية';
$string['bodystylescolor'] = 'لون النص';
$string['bodystylesfont'] = 'حجم الخط ونوعه';
$string['chainname_help'] = 'اسم نشاط سلسلة المهام هذا التي سيتم عرضها في صفحة المساق';
$string['completedalltasks_redo'] = 'إذا أردت إعادة العمل مع أحد مهام هذا النشاط، أنقر اسم المهمة في القائمة أدناه.';
$string['conditionscore'] = 'درجة الشرط';
$string['configframeheight'] = 'عند عرض المهمة ضمن إطار، هذه القيمة هي الارتفاع (بالبكسل) للإطار العلوي الذي يحتوي على أدوات التنقلفي مودل.';
$string['correct'] = 'صحيح';
$string['d_index'] = 'مؤشر التمييز';
$string['entry_dates'] = 'التواريخ';
$string['entry_title'] = 'اسم السلسلة كعنوان';
$string['entrycm'] = 'النشاط السابق';
$string['entrycmcourse'] = 'النشاط السابق في هذا المساق';
$string['entrycmsection'] = 'النشاط السابق في هذا المقطع من المساق';
$string['entrygrade'] = 'علامة النشاط السابق';
$string['entrygradewarning'] = 'لا يمكنك البدء بهذا النشاط إلى أن تحرز {$a->entrygrade}% في {$a->entryactivity}. حالياً، درجتك في ذلك النشاط هي {$a->usergrade}%';
$string['entryoptions_help'] = 'خانات التأشير هذه تحدد عرض أو إخفاء العناصر في صفحة إدخال سلسلة المهام.

**اسم السلسلة كعنوان**
: عند تأشيره، سيُعرض اسم السلسلة بمثابة عنوان صفحة الإدخال.

**التقييم**
: عند تأشيره، ستُعرض معلومات تقييم سلسلة المهام في صفحة الإدخال.

**التواريخ**
: عند تأشيره، سيُعرض تاريخا فتح وإغلاق سلسلة المهام في صفحة الإدخال.

**المحاولات**
: عند تأشيره، سيُعرض جدول بتفاصيل المحاولات السابقة للمستخدم لسلسلة المهام هذه في صفحة الإدخال. سيكون هناك زر استئناف في العمود أقصى اليمين إزاء المحاولات القابلة للاستئناف.';
$string['error_noinputparameters'] = 'لا معاملات إدخال';
$string['event_attempt_started'] = 'محاولة سلسلة مهام تم بدؤها';
$string['event_attempt_started_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" بدأ محاولة في مهمة لنشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}".';
$string['event_attempt_started_explanation'] = 'مستخدم ما قام توًا ببدء محاولة في نشاط سلسلة المهام';
$string['event_attempt_submitted'] = 'محاولة سلسلة مهام تم تسليمها';
$string['event_attempt_submitted_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" قام بتسليم محاولة في مهمة لنشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}".';
$string['event_attempt_submitted_explanation'] = 'مستخدم ما قام توًا بتسليم محاولة في مهمة لنشاط سلسلة المهام';
$string['event_base'] = 'حدث HotPot تم اكتشافه';
$string['event_base_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" بدأ بحدث في مهمة لنشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}".';
$string['event_base_explanation'] = 'حدث تم اكتشافه من قبل وحدة سلسلة المهام';
$string['event_chains_edited'] = 'سلاسل سلسلة مهام تم تحريرها';
$string['event_chains_edited_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" قام بتحرير كل السلاسل لنشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->courseid}".';
$string['event_chains_edited_explanation'] = 'مستخدم ما قام توًا بتحرير كل السلاسل لنشاط سلسلة المهام';
$string['event_columnlists_edited'] = 'قوائم عمود سلسلة مهام تم تحريرها';
$string['event_columnlists_edited_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" قام بتحرير قوائم عمود السلاسل لنشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}".';
$string['event_columnlists_edited_explanation'] = 'مستخدم ما قام توًا بتحرير قوائم عمود السلاسل لنشاط سلسلة المهام';
$string['event_condition_edited'] = 'شرط سلسلة مهام تم تحريره';
$string['event_condition_edited_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" قام بتحرير شرط في نشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}".';
$string['event_condition_edited_explanation'] = 'مستخدم ما قام توًا بتحرير شرط في نشاط سلسلة المهام';
$string['event_report_viewed'] = 'تقرير سلسلة المهام تمت معاينته';
$string['event_report_viewed_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" شاهد تقرير نشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'مستخدم ما شاهد توًا تقريرًا للمحاولات في نشاط سلسلة المهام';
$string['event_task_edited'] = 'مهمة سلسلة مهام تم تحريرها';
$string['event_task_edited_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" قام بتحرير مهمة في نشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_task_edited_explanation'] = 'مستخدم ما قام توًا بتحرير مهمة في نشاط سلسلة المهام';
$string['event_tasks_edited'] = 'مهمات سلسلة مهام تم تحريرها';
$string['event_tasks_edited_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" قام بتحرير كل المهام في نشاط "سلسلة المهام" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_tasks_edited_explanation'] = 'مستخدم ما قام توًا بتحرير كل المهام في نشاط سلسلة المهام';
$string['exit_attemptscore'] = 'درجتك في تلك المحاولة كانت {$a}';
$string['exit_course_text'] = 'عودة إلى صفحة المساق الرئيسية';
$string['exit_feedback'] = 'إفادة صفحة الخروج';
$string['exit_feedback_help'] = 'هذه الخيارات تحدد عرض أو إخفاء عناصر الإفادة في صفحة الخروج لسلسلة المهام.

**اسم السلسلة كعنوان**
: عند تأشيره، سيُعرض اسم السلسلة بمثابة عنوان صفحة الخروج.

**التشجيع**
: عند تأشيره، سيُعرض تشجيع ما في صفحة الخروج.
التشجيع يعتمد على علامة سلسلة المهام:
: **> 90%**: ممتاز!
: **> 60%**: أحسنت
: **> 0%**: محاولة جيدة
: **= 0%**: هل أنت بخير؟

**علامة محاولة سلسلة المهام**
: عند تأشيره، سيُعرض تقدير محاولة سلسلة المهام في صفحة الخروج.

**علامة سلسلة المهام**
: عند تأشيره، سيُعرض تقدير سلسلة المهام في صفحة الخروج.

إضافة إلى ذلك، إذا كانت طريقة تقييم السلسلة هي العلامة الأعلى، ستُعرض رسالة تخبر المستخدم فيما إذا كانت محاولته الأخيرة أفضل من سابقتها أو مكافئة لها.';
$string['exit_next_text'] = 'حاول النشاط التالي';
$string['exit_taskchaingrade_highest_zero'] = 'لم تحرز أعلى من {$a} لهذا النشاط بعد';
$string['exitcm'] = 'النشاط الآتي';
$string['exitcmcourse'] = 'النشاط التالي في هذا المساق';
$string['exitcmsection'] = 'النشاط التالي في هذا المقطع من المساق';
$string['exitgrade'] = 'علامة النشاط التالي';
$string['exitpage_help'] = 'هل ينبغي عرض صفحة خروج بعد إكمال مهمة سلسلة المهام؟

**نعم**
: ستظهر للطالب صفحة خروج بعد إكمال سلسلة المهام. يتم تحديد محتويات صفحة الخروج في الإعدادات الخاصة بإفادة صفحة الخروج لسلسلة المهام وروابطها.

**لا**
: لن تظهر للطالب صفحة خروج بعد إكمال المهمة. بدلاً من ذلك، سيذهب مباشرةً إلى النشاط التالي أو يعود إلى صفحة المساق في مودل.';
$string['feedback'] = 'الإفادة';
$string['firstattempt'] = 'المحاولة الأولى';
$string['grademethod_help'] = 'هذا الإعداد يعرف كيفية إحتساب التقدير لنشاط TaskChain من تقديرات المحاولات.

**الدرجة الأعلى**
: سيتم ضبط تقدير النشاط على أعلى درجة لأي محاولة لنشاط TaskChain.

**متوسط الدرجة**
: سيتم ضبط التقدير على متوسط درجات كل محاولات نشاط TaskChain.

**المحاولة الأولى**
: سيتم ضبط التقدير على درجة المحاولة الأولى لنشاط TaskChain.

**المحاولة الأخيرة**
: سيتم ضبط التقدير على درجة المحاولة الأخيرة لنشاط TaskChain.';
$string['highestscore'] = 'الدرجة العليا';
$string['highesttaskscore'] = 'الدرجة العليا للمهمة';
$string['inprogress'] = 'قيد التنفيذ';
$string['lasttaskabandoned'] = 'درجة آخر مهمة متروكة';
$string['lasttaskattempted'] = 'درجة آخر مهمة تمت محاولتها';
$string['lasttaskcompleted'] = 'درجة آخر مهمة تم إكمالها';
$string['lasttasktimedout'] = 'درجة آخر مهمة انتهت مهلتها';
$string['maxeventlength'] = 'أقصى عدد من الأيام للحدث الواحد في التقويم';
$string['name'] = 'الاسم';
$string['nameadd'] = 'الاسم';
$string['noreview'] = 'عذرًا، ليس مسموحًا لك بمعاينة تفاصيل محاولة المهمة هذه.';
$string['noreviewbeforeclose'] = 'عذرًا، ليس مسموحًا لك بمعاينة تفاصيل محاولة المهمة هذه حتى {$a}.';
$string['noscore'] = 'بلا درجة';
$string['score'] = 'الدرجة';
$string['scorelimit'] = 'حد الدرجة';
$string['scoremethod_help'] = 'هذا الإعداد يعرف كيفية إحتساب التقدير لمحاولات المهمة.

**الأعلى**
: سيتم ضبط تقدير المهمة على أعلى درجة لأي محاولة للمهمة.

**المتوسط**
: سيتم ضبط التقدير على متوسط درجات كل محاولات المهمة.

**الأولى**
: سيتم ضبط التقدير على درجة المحاولة الأولى للمهمة.

**الأخيرة**
: سيتم ضبط التقدير على درجة المحاولة الأخيرة للمهمة.';
$string['scores'] = 'الدرجات';
$string['scoreweighting'] = 'وزن الدرجات';
$string['showdescription'] = 'عَرض الوصف';
$string['showdescription_help'] = 'عند تمكين هذا الإعداد، سيظهر نص الإدخال المبين أدناه في صفحة المساق كوصف لهذا النشاط.';
$string['showpopup_help'] = '**نفس النافذة**
سيتم إظهار نشاط سلسلة المهام في نفس النافذة المخصصة لصفحة المساق في مودل.

**نافذة جديدة**
سيتم إظهار نشاط سلسلة المهام في نافذة منبثقة.
يمكن تمكين مزايا متعددة للنافذة المنبثقة أو تعطيلها عبر خانات تأشير.
العرض والارتفاع المطلوبين للنافذة المنبثقة محددين بعدد البكسلات.';
$string['studentfeedback'] = 'إفادة الطالب';
$string['studentfeedbackurl'] = 'رابط إفادة الطالب';
$string['taskattemptnotinprogress'] = 'محاولة المهمة ليست قيد التنفيذ';
$string['tasknames'] = 'أسماء المهام';
$string['taskscore'] = 'درجة المهمة';
$string['title'] = 'العنوان';
$string['titletext'] = 'نص العنوان';
$string['totaltaskscores'] = 'إجمالي درجات المهمة';
$string['window'] = 'النافذة';
$string['window_help'] = 'إظهار النشاط في نافذة مودل الرئيسية، أو في نافذة منبثقة.

**نفس النافذة**
: سيتم إظهار نشاط سلسلة المهام في نفس النافذة المخصصة لصفحة المساق في مودل.

**نافذة جديدة**
: سيتم إظهار نشاط سلسلة المهام في نافذة منبثقة. يمكن تمكين مزايا متعددة للنافذة المنبثقة أو تعطيلها عبر خانات تأشير. العرض والارتفاع المطلوبين للنافذة المنبثقة محددين بعدد البكسلات.';
$string['windowdirectories'] = 'إظهار روابط المجلد';
$string['windowheight'] = 'الارتفاع الافتراضي للنافذة (بالبكسل)';
$string['windowlocation'] = 'إظهار شريط الموضع';
$string['windowmenubar'] = 'إظهار شريط القوائم';
$string['windowmoodlebutton'] = 'إظهار زر إغلاق النافذة';
$string['windowmoodlefooter'] = 'إظهار تذييل صفحة مودل';
$string['windowmoodleheader'] = 'إظهار عنوان صفحة مودل';
$string['windowmoodlenavbar'] = 'إظهار شريط تنقل مودل';
$string['windownew'] = 'نافذة جديدة';
$string['windowresizable'] = 'السماح للنافذة بإعادة التحجيم';
$string['windowsame'] = 'نفس النافذة';
$string['windowscrollbars'] = 'السماح للنافذة بالتمرير';
$string['windowstatus'] = 'إظهار شريط الحالة';
$string['windowtoolbar'] = 'إظهار شريط الأدوات';
$string['windowwidth'] = 'العرض الافتراضي للنافذة (بالبكسل)';
