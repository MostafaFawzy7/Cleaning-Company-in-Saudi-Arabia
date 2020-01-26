<?
$cats = array();
foreach (get_categories(array('taxonomy'=>'category', 'hide_empty'=>0)) as $cat) {
	$cats[$cat->term_id] = $cat->cat_name;
}
$Opts = array();
$Opts[] = array(
	'name'   =>   'اعدادات عامة',
	'id'     =>   'General',
	'type'   =>   'title',
	'icon'   =>   'fa-dashboard',
);
$Opts[] = array(
	'name'   =>   'شعار  الهيدر',
	'id'     =>   'loGo',
	'type'   =>   'upload',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'شعار  الفوتر',
	'id'     =>   'loGo2',
	'type'   =>   'upload',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'التصنيف',
	'id'     =>   'category',
	'type'   =>   'select',
	'for'	 =>   'General',
	'options'=> $cats
);
$Opts[] = array(
	'name'   =>   'رابط الفيديو',
	'id'     =>   'videoEmbedCode',
	'type'   =>   'textarea_code',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'رقم التليفون لقائمة الهيدر',
	'id'     =>   'number',
	'type'   =>   'text',
	'for'	 =>   'General'
);

$Opts[] = array(
	'name'   =>   'الإيميل',
	'id'     =>   'e-mailing',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'مواعيد بدء العمل',
	'id'     =>   'hour',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'الموقع',
	'id'     =>   'city',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'المكان',
	'id'     =>   'address',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'وصف الخدمات',
	'id'     =>   'descripe',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'عنوان قسم المقالات بالصفحة الرئيسية',
	'id'     =>   'sessionHeadLine',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'عنوان المقالات المثبتة',
	'id'     =>   'checkedPosts',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'اختر قسم الرئيسية الأول',
	'id'     =>   'cat1',
	'type'   =>   'taxonomy_select',
	'tax'    =>   'category',
	'filter' =>   'id',
	'for'	 =>   'General'

);
$Opts[] = array(
	'name'   =>   'اختر قسم الرئيسية الثانية',
	'id'     =>   'cat2',
	'type'   =>   'taxonomy_select',
	'tax'    =>   'category',
	'filter' =>   'id',
	'for'	 =>   'General'

);
$Opts[] = array(
	'name'   =>   'اختر قسم الرئيسية الثالثة',
	'id'     =>   'cat3',
	'type'   =>   'taxonomy_select',
	'tax'    =>   'category',
	'filter' =>   'id',
	'for'	 =>   'General'

);
$Opts[] = array(
	'name'   =>   'عنوان البحث المتخصص',
	'id'     =>   'specialSearch',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'أخبارنا',
	'id'     =>   'news',
	'type'   =>   'text',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'الصورة الإفتراضية',
	'id'     =>   'defultImg',
	'type'   =>   'upload',
	'for'	 =>   'General'
);
$Opts[] = array(
	'name'   =>   'رابط  الفيسبوك',
	'id'     =>   'facebook',
	'type'   =>   'text',
	'for'    =>   'separator5'
);
$Opts[] = array(
	'name'   =>   'رابط  التويتر',
	'id'     =>   'twitter',
	'type'   =>   'text',
	'for'    =>   'separator5'
);
$Opts[] = array(
	'name'   =>   'رابط  اليوتيوب',
	'id'     =>   'youtube',
	'type'   =>   'text',
	'for'    =>   'separator5'
);
$Opts[] = array(
	'name'   =>   'رابط  لينكيدان',
	'id'     =>   'linked-in',
	'type'   =>   'text',
	'for'    =>   'separator5'

);
$Opts[] = array(
	'name'   =>   'ويب ماستر',
	'id'     =>   'wepMaster',
	'type'   =>   'textarea_code',
	'for'    =>   'separator5'
);
///////////////////////////////////////////////////////////////////////
$Opts[] = array(
	'name'   =>   'إعدادات  قسم المقدمة عن الشركة',
	'id'     =>   'separator',
	'type'   =>   'title',
);
$Opts[] = array(
	'name'   =>   ' عنوان رئيسي للمقدمة عن الشركة',
	'id'     =>   'introductionOurselves',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'مقدمة عن الشركة',
	'id'     =>   'introduction',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'شرح عن الخبرة',
	'id'     =>   'certifiedTitle',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'فقرة 1',
	'id'     =>   'context1',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'شرح فقرة 1',
	'id'     =>   'expText1',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'فقرة 2',
	'id'     =>   'context2',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'شرح فقرة 2',
	'id'     =>   'expText2',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'فقرة 3',
	'id'     =>   'context3',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'شرح فقرة 3',
	'id'     =>   'expText3',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'فقرة 4',
	'id'     =>   'context4',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'شرح فقرة 4',
	'id'     =>   'expText4',
	'type'   =>   'text',
	'for'	 =>   'separator'
);
$Opts[] = array(
	'name'   =>   'الصورة الجانبية',
	'id'     =>   'ImgLeftSide',
	'type'   =>   'upload',
	'for'	 =>   'separator'
);
///////////////////////////////////////////////////////////////////////
$Opts[] = array(
	'name'   =>   'إعدادات  الاتصال',
	'id'     =>   'separator2',
	'type'   =>   'title',
);
$Opts[] = array(
	'name'   =>   'عنوان البيان المجاني',
	'id'     =>   'free',
	'type'   =>   'text',
	'for'	 =>   'separator2'
);
$Opts[] = array(
	'name'   =>   'رقم البيان المجاني',
	'id'     =>   'freeTelephone',
	'type'   =>   'text',
	'for'	 =>   'separator2'
);
//////////////////////////////////////////////////////////////////////////
$Opts[] = array(
	'name'   =>   'قائمة الفوتر',
	'id'     =>   'separator5',
	'type'   =>   'title',
);
$Opts[] = array(
	'name'   =>   'العنوان',
	'id'     =>   'location',
	'type'   =>   'text',
	'for'    =>   'separator5'
);
$Opts[] = array(
	'name'   =>   'المحمول',
	'id'     =>   'mobile',
	'type'   =>   'text',
	'for'    =>   'separator5'
);
$Opts[] = array(
	'name'   =>   'الإيميل',
	'id'     =>   'email',
	'type'   =>   'text',
	'for'    =>   'separator5'
);
$Opts[] = array(
	'name'   =>   'تصفح موقعنا',
	'id'     =>   'float',
	'type'   =>   'text',
	'for'    =>   'separator5'
);

///////////////////////////////////////////////////////////////

	