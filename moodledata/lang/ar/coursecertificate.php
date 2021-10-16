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
 * Strings for component 'coursecertificate', language 'ar', version '3.10'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'هذا النشاط مخفي حاليًا. عبر جعله مرئيًا، سيتلقى الطلبة الذين تسمح لهم تقييدات الوصول إلى النشاط تلقائيًا نسخة بصيغة PDF من الشهادة.';
$string['automaticsenddisabled'] = 'الإرسال التلقائي لهذه الشهادة معطل.';
$string['automaticsenddisabled_help'] = 'عبر تركه معطلاً، سيكون على الطلاب النقر على رابط النشاط المعروض في صفحة المساق لتلقي الشهادة، بمجرد تلبيتهم لشروط الوصول إلى النشاط.<br/><br/>
عبر تمكينه، سيتلقى الطلاب تلقائيًا نسخة من شهاداتهم بصيغة PDF بمجرد تلبيتهم لشروط الوصول إلى هذا النشاط. لاحظ أن الطلاب الذين تسمح لهم مسبقًا تقييدات الوصول بالوصول إلى هذا النشاط سيتلقون نسخهم عند تمكينه.';
$string['automaticsenddisabledalert'] = 'سيتلقى الطلبة الذين تسمح لهم تقييدات الوصول إلى هذا النشاط شهاداتهم بمجرد وصولهم إليه.';
$string['automaticsenddisabledinfo'] = 'حاليًا، {$a} من الطلبة تسمح لهم تقييدات الوصول بالوصول إلى هذا النشاط وسيمنحون شهاداتهم بمجرد وصولهم إليه.';
$string['automaticsendenabled'] = 'الإرسال التلقائي لهذه الشهادة مُمَكَّن.';
$string['automaticsendenabled_help'] = 'عبر تركه مُمَكَّنًا، سيتلقى الطلاب تلقائيًا نسخة من شهاداتهم بصيغة PDF بمجرد تلبيتهم لشروط الوصول إلى هذا النشاط.<br/><br/>
عبر تعطيله، سيكون على الطلاب النقر على رابط النشاط المعروض في صفحة المساق لتلقي الشهادة، بمجرد تلبيتهم لشروط الوصول إلى النشاط.';
$string['certificateissues'] = 'منح الشهادة';
$string['coursecertificate:addinstance'] = 'إضافة نشاط جديد من شهادة المساق';
$string['coursecertificate:receive'] = 'تلقي الشهادات الممنوحة';
$string['coursecertificate:view'] = 'معاينة شهادة المساق';
$string['coursecertificate:viewreport'] = 'معاينة تقرير منح شهادة المساق';
$string['disableautomaticsend'] = 'لن يعود بإمكان الطلاب تلقائيًا تلقي نسخة بصيغة PDF من الشهادة بمجرد تلبيتهم لشروط الوصول إلى النشاط. بدلاً من ذلك، سيكون عليهم النقر على رابط النشاط المعروض في صفحة المساق لتلقي الشهادة، بمجرد تلبيتهم لشروط الوصول إلى النشاط.';
$string['enableautomaticsend'] = 'سيتلقى كل الطلبة نسخة من شهاداتهم بصيغة PDF بمجرد تلبيتهم لشروط الوصول إلى هذا النشاط.<br/><br/>حاليًا، {$a} من الطلبة تسمح لهم تقييدات الوصول بالوصول إلى هذا النشاط ولكنهم لم يصلوا إليه بعد. سيتلقون نسخهم أيضًا.<br/><br/>
الطلاب الذين سبق لهم الوصول إلى هذا النشاط لن يتلقوا الشهادة مرة أخرى.';
$string['enableautomaticsendpopup'] = 'سيتلقى كل الطلبة نسخة من شهاداتهم بصيغة PDF بمجرد تلبيتهم لشروط الوصول إلى هذا النشاط.<br/><br/>الطلاب الذين تسمح لهم مسبقًا تقييدات الوصول بالوصول إلى هذا النشاط ولكنهم لم يصلوا إليه بعد، سيتلقون نسخهم أيضًا بشكل فوري.<br/><br/>
الطلاب الذين سبق لهم الوصول إلى هذا النشاط لن يتلقوا الشهادة مرة أخرى.';
$string['managetemplates'] = 'إدارة قوالب الشهادة';
$string['modulename'] = 'شهادة المساق';
$string['modulename_help'] = 'تقدم وحدة شهادة المساق فرصة للمتعلمين للاحتفال بإنجازاتهم عبر الحصول على شهادات.<br/><br/>إنها تسمح لك بالاختيار ما بين عدة قوالب من الشهادات والتي ستعرض تلقائيًا بيانات المستخدم، مثل الاسم الكامل، المساق، إلخ.<br/><br/>سيتمكن المستخدمون من تنزيل نسخة من الشهادة بصيغة PDF بأنفسهم عبر الوصول إلى هذا النشاط، وهناك خيارات لإرسال نسخ PDF لهم عبر البريد الالكتروني بشكل تلقائي.<br/><br/>إذا كان القالب المستعمل في هذا النشاط يحتوي على ترميز QR، سيتمكن المستخدمون من مسحه للتحقق من شهاداتهم.';
$string['modulenameplural'] = 'شهادات المساق';
$string['notemplateselecteduser'] = 'الشهادة غير متاحة. يرجى التواصل مع المشرف على المساق.';
$string['notemplateswarningwithlink'] = 'لا تتوفر أي قوالب. يرجى الذهاب إلى <a href="{$a}">صفحة إدارة قوالب الشهادة</a> وإنشاء قالب جديد.';
$string['page-mod-coursecertificate-x'] = 'أي صفحة لوحدة شهادة المساق';
$string['pluginadministration'] = 'إدارة شهادة المساق';
$string['pluginname'] = 'شهادة المساق';
$string['previewcoursefullname'] = 'الاسم الكامل للمساق';
$string['privacy:metadata'] = 'إن ملحق نشاط شهادة المساق لا يخزن أي بيانات شخصية.';
$string['revokeissue'] = 'هل أنت متأكد من رغبتك في سحب الشهادة الممنوحة إلى هذا المستخدم؟';
$string['selecttemplatewarning'] = 'بمجرد منح هذا النشاط لشهادة واحدة على الأقل، سيتم تأمين هذا الحقل ولن يكون قابلاً للتحرير بعدها.';
$string['taskissuecertificates'] = 'منح شهادات المساق';
