<?php
function lang($txt){
    static $lang = array(
    // home page
    'site_name' => 'Hashtag',
    'html_dir' => 'rtl',
    'homeLinks' => 'right',
    'sponsored_align' => 'right',
    'main' => 'الرئيسية',
    'my_photos' => 'صوري',
    'my_posts' => 'منشوراتي',
    'settings' => 'الاعدادات',
    'my_notepad' => 'مذكرتي',
    'new_note' => 'انشاء ملاحظة جديدة',
    'see_all_notes' => 'رؤية الكل',
    'more' => 'المزيد',
    'advertisement' => 'الاعلانات',
    'followers' => 'اللذين يتابعونني',
    'following' => 'اللذين اتابعهم',
    'saved_posts' => 'المنشورات المحفوظة',
    'sponsored' => 'اعلان ممول',
    'w_post_li' => 'right',
    'w_post_li2' => 'left',
    'w_post_align' => 'right',
    'w_post_dir' => 'rtl',
    'post_textbox_placeholder' => 'شارك اهتماماتك وما يجول في بالك في مجتمعنا',
    'post_textbox_align' => 'right',
    'post_now' => 'نشر الان',
    'w_title_inputText' => 'اكتب عنوان لمنشورك (اختياري)',
    'post_align' => 'right',
    'post_span_float' => 'left',
    'post_options' => 'left',
    'post_content_align' => 'right',
    'comment_field_align' => 'right',
    'comment_field_ph' => '..اكتب تعليق',
    'comment' => 'تعليق',
    'u_liked_this' => 'اعجبك هذا',
    'liked' => 'اعجبني',
    'share_now' => 'مشاركة الان',
    'comment_time_align' => 'left',
    'comments' => 'تعليقات',
    'no_comments' => 'لا يوجد تعليقات',
    'likes' => 'اعجابات',
    'no_likes' => 'كن اول من يعجب بهذا',
    'like' => 'اعجاب',
    'just_now' => 'الآن',
    'minute_ago' => 'دقيقة',
    'minutes_ago' => 'دقائق',
    'hour_ago' => 'ساعة',
    'hours_ago' => 'ساعات',
    'day_ago' => 'يوم مضى',
    'days_ago' => 'أيام',
    'week_ago' => 'اسبوع مضى',
    'weeks_ago' => 'أسابيع',
    'month_ago' => 'شهر مضى',
    'months_ago' => 'أشهر',
    'year_ago' => 'سنة',
    'years_ago' => 'سنين',
    'HLP_b' => 'homelinksP_borderR',
    'user_info_align' => 'right',
    'comment_field_align' => 'right',
    'edit_profile' => 'تعديل الملف الشخصي',
    'posts_str' => 'المنشورات',
    'followers_str' => 'المتابِعين',
    'following_str' => 'المتابَعين',
    'uProf_ffTitle_align' => 'right',
    'uProf_followersTitle' => 'متابعين',
    'uProf_urfollowersTitle' => 'الاشخاص اللذين يتابعونك',
    'uProf_followersTitleCheck' => 'ar',
    'uProf_followingTitle' => 'following',
    'uProf_urfollowingTitle' => 'الاشخاص اللذين اتابعهم',
    'uProf_followingTitleHe' => 'هو ي',
    'uProf_followingTitleShe' => 'هي ت',
    'uProf_followingTitle1' => 'الاشخاص اللذين',
    'uProf_followingTitle2' => 'تابعهم',
    'followingBtn_str' => 'متابع',
    'followBtn_str' => 'متابعة',
    'postDropdown' => '',
    'postDropdownTxtAlign' => 'right',
    'EditPost_DDM' => 'تعديل المنشور',
    'DeletePost_DDM' => 'حذف المنشور',
    'reportPost_DDM' => 'الابلاغ عن المنشور',
    'savePost_DDM' => 'حفظ المنشور',
    'p_title_male' => ' قام بتحديث صورته الشخصية',
    'p_title_famale' => ' قامت بتحديث صورتها الشخصية',
    'pc_title_male' => ' قام بتحديث صورة الغلاف',
    'pc_title_famale' => ' قامت بتحديث صورة الغلاف',
    'not_specified' => 'غير محدد',
    'verified_page' => 'صفحة موثقة',
    'my_photos' => 'الصور الخاصة بي',
    'my_photos_align' => 'right',
    'all_postsSTR' => 'جميع المنشورات',
    'all_postsSTR_align' => 'right',
    'nothingToShow' => 'لا يوجد شئ لعرضه',
    'working' => 'يعمل',
    'at' => 'لدى',
    'lives_in' => 'يعيش في',
    'born_on' => 'ولد في',
    'studies' => 'يدرس',
    'about' => 'حول',
    'bio' => 'السيرة الذاتية',
    'onlyUcanCThis' => 'فقط أنت يمكمك رؤية هذا',
    'save' => 'حفظ',
    'cancel' => 'الغاء',
    'uploadPhoto' => 'رفع صورة',
    'addToFavoritePages' => 'اضافة الى الصفحات المفضلة',
    'unFavoritePage' => 'الغاء من المفضلة',
    'report' => 'إبلاغ',
    'textAlign' => 'right',
    'errorPost_n1' => 'يجب ألا يقل هذا المنشور عن 15 حرفاً.',
    'errorPost_n2' => 'رجاءاً اختر صورة وحاول مجدداً',
    'errorPost_n3' => 'الصورة الخاصة بك يجب ان يكون حجمها اقل من 4 ميجابايت',
    'errorPost_n4' => 'يجب ان يكون امتداد الصورة jpg ,jpeg او png ',
    'errorPost_n5' => 'حدث خطأ ما اثناء معالجة الصورة .. حاول مجددا',
    'errorPost_n6' => 'خطأ في رفع الصورة',
    'supportBox' => 'صندوق الدعم',
    'seeAll' => 'رؤية الكل',
    'language' => 'اللغة',
    'float' => 'right',
    'float2' => 'left',
    'ul_navbar_nav1' => 'nav navbar-nav navbar-right',
    'ul_navbar_nav2' => 'nav navbar-nav',
    'navbar_home' => 'الرئيسية ',
    'notifications' => 'الأشعارات',
    'messages' => 'الرسائل',
    'navbar_uMenu_UserProfile' => 'الملف الشخصي للمستخدم',
    'adminOptions' => 'خيارات المسؤول',
    'dashboard' => 'لوحة التحكم',
    'terms' => 'الشروط',
    'privacyPolicy' => 'سياسة الخصوصية',
    'Report_A_Problem' => 'الأبلاغ عن مشكلة',
    'logout' => 'تسجيل خروج',
    'navbar_serchBox_ph' => '..بحث',
    'trending_worldWide' => 'الشائع - حول العالم',
    'posts' => 'منشورات',
    'pages' => 'صفحات',
    'reactions' => 'تفاعل',
    'by' => 'بواسطة',
    'please_wait' => 'إنتظر ..',
    'favourite_pages' => 'الصفحات المفضلة',
    'wpr_public' => 'العامة',
    'wpr_followers' => 'المتابعين فقط',
    'wpr_onlyme' => 'انا فقط',
    'user_photos' => 'الصور',
    'stars_str' => 'النجوم',
    'share' => 'مشاركة',
    'shares' => 'مشاركات',
    'no_shares' => 'لاتوجد مشاركات',
    'wpost_write' => 'كتابة ...',
    'wpost_upPhoto' => 'صورة',
    'wpost_title' => 'العنوان',
    'shared_a_Post' => 'تم مشاركة منشور',
    'comm_edited' => 'تم التعديل',
    'comm_edit' => 'تعديل التعليق',
    'comm_delete' => 'حذف التعليق',
    'comm_report' => 'الابلاغ عن التعليق',
    'recently_starts_from' => 'آخر النجوم التي حصلت عليها من :',
    'load_more' => 'تحميل المزيد',
    'postSaved' => 'تم حفظ المنشور',
    'postSavedBefore' => 'لقد قمت مسبقا بحفظ هذا المنشور!',
    'errorSomthingWrong' => 'خطأ, حدث خطأ غير متوقع .. الرجاء اعادة المحاولة لاحقاً',
    'postShared' => 'تم مشاركة هذا المنشور في يومياتك',
    'newLine_Shift_enter' => 'سطر جديد &xlarr;',
    'totalPhotos' => 'مجموع الصور',
    'see_all' => 'رؤية الكل',
    'likeNotify_str' => 'اعجب بمنشورك',
    'commmentNotify_str' => 'علق على منشورك',
    'shareNotify_str' => 'شارك منشورك',
    'starNotify_str' => 'حصلت على نجمة من',
    'followNotify_str' => 'قام بمتابعتك',
    'no_notifications' => 'لايوجد إشعارات',
    'accountSetup' => 'إعداد الحساب',
    'complete' => 'إكمال',
    'as_followPeople' => 'متابعة أشخاص',
    'as_profileInfo' => 'معلومات الحساب',
    'as_coverPhoto' => 'صورة الغلاف',
    'as_userPhoto' => 'الصورة الشخصية',
    'noMoreStories' => 'لايوجد المزيد من المنشورات',
    'you_have_not_posted_anything_yet' => 'انت لم تقم بنشر أي شئ حتى الآن',
    'has_not_posted_anything_yet' => 'لم يقم بنشر أي شئ حتى الآن',
    'not_found' => 'لايوجد',
    'no_users_like_the_name_you_entered' => 'لايوجد شخص بالاسم الذي أدخلته',
    'publicPosts' => 'منشور عام',
    'searchMoreAbout' => 'إبحث المزيد عن',
    'advancedSearch' => 'بحث متقدم',
    'profilePageNotFound_str1' => 'عذراً هذه الصفحة غير متوفرة',
    'profilePageNotFound_str2' => 'قد تكون هذه الصفحة قد حذفت ,أو هذه الصفحة غير موجودة',
    'profilePageNotFound_str3' => 'العودة الى الصفحة السابقة',
    'posting' => 'جارِ النشر ..',
    'hashtag_not_available' => 'الهاشتاغ غير متوفر!',
    'news' => 'الاخبار',
    'tv' => 'تلفزيون',
    'store' => 'متجر',
    'new' => 'جديد',
    'job' => 'عمل',
    'all_posts_that_you_saved' => 'جميع المنشورات التي قمت بحفظها',
    'nothing_saved_yet' => 'لم تحفظ اي شي حتى الآن',
    'do_you_want_to_delete_this' => 'هل تريد حذف هذا؟',
    'you_can_not_undo_this_after_deleting_it' => 'لا تستطيع التراجع عند هذا الفعل بعد تنفيذه',
    'delete' => 'حذف',
    'open' => 'مفتوح',
    'closed' => 'مغلق',
    'you_anonymously_reported_a' => 'لقد قمت بالابلاغ بسرية عن',
    'post' => 'منشور',
    'click_to_view_your_report' => 'إضغط هنا لاظهار ابلاغك',
    'replay' => 'رد',
    'your_report' => 'إبلاغك',
    'help_us_to_make_our_community_better' => 'ساعدنا لجعل مجتمعنا أفضل',
    'submit' => 'تقديم',
    'subject' => 'الموضوع',
    'your_feedback_helps_us_improve_our_community' => 'ملاحظاتك تساعد في تحسن مجتمعنا',
    'post_reported' => 'تم الابلاغ! سنقوم بمراجعة إبلاغك بأقرب وقت',
    'mynotepad_main_title' => 'احفظ كلمات السر ,الروابط ,الملاحظات ,الشيفرات و اي شي اونلاين على حسابك .. فقط أنت من يمكنه رؤية وتعديل هذه الملاحظات',
    'newNote_p' => 'أنشاء ملاحظة سرية جديدة ,فقط أنت من يمكنة رؤيتها أو تعديلها',
    'newNote_title' => 'عنوان الملاحظة',
    'newNote_content' => 'محتوى الملاحظة',
    'create' => 'إنشاء',
    'saved' => 'المحفزظ',
    'current_password_is_incorrect' => 'كلمة السر الحالية غير صحيحة',
    'please_fill_required_fields' => 'رجاءاً قم بملئ الحقول المطلوبة',
    'new_password_doesnt_match_the_confirm_field' => 'حقل كلمة السر الجديدة لاتطابق حقل التاكيد',
    'changes_saved_seccessfully' => 'تم حفظ التغييرات بنجاح',
    'remove_account' => 'حذف الحساب',
    'general' => 'عام',
    'male' => 'ذكر',
    'female' => 'انثى',
    'fullname' => 'الاسم الكامل',
    'username' => 'إسم المستخدم (باللغة الانجليزية)',
    'email' => 'البريد الالكتروني',
    'required' => 'مطلوب',
    'new_password' => 'كلمة سر جديدة',
    'confirm_new_password' => 'تأكيد كلمة السر الجديدة',
    'gender' => 'الجنس',
    'current_password' => 'كلمة السر الحالية',
    'save_changes' => 'حفظ التغييرات',
    'education' => 'الدراسة',
    'work' => 'العمل',
    'work_title' => 'عنوان العمل',
    'work_place' => 'مكان العمل',
    'at' => 'لدى',
    'country' => 'البلد',
    'birthday' => 'تاريخ الميلاد',
    'website' => 'الموقع الالكتروني',
    'bio' => 'وصف قصير',
    'profile_pic_shape' => 'شكل الصورة الشخصة في صفحتك',
    'circle' => 'دائرة',
    'square' => 'مربع',
    'remove_account' => 'حذف الحساب',
    'remove_account_note' => 'لا تستطيع التراجع عن هذا الفعل وجميع البيانات لايمكن استرجاعها في حال قمت بالنقر على زر <b>حذف الحساب</b>',
    'loadmore' => 'حميل المزيد',
    'users' => 'المستخدمين',
    'males' => 'الذكور',
    'females' => 'الاناث',
    'completed_profiles' => 'الصفحات الكتملة',
    'stars' => 'النجوم',
    'notes' => 'الملاحظات',
    'verified_users' => 'المستخدمين الموثقين',
    'admins' => 'المدراء',
    'verify_badge' => 'علامة التوثيق',
    'verify_user' => 'توثيق المستخدم',
    'remove_verifyBadge' => 'حذف علامة التوثيق',
    'edit_delete_dashboard' => 'تعديل / حذف',
   'verify_badge_removed_succ_from' => 'تم ازالة علامة التوثيق من',
    'verified_successfully' => 'تم التوثيق بنجاح',
    'user_doesnt_exist' => 'هذا المستخدم غير موجود!',
    'yes' => 'نعم',
    'no' => 'كلا',
    'upgradeToAdmin' => 'ترقية الى مدير',
    'password' => 'كلمة السر',
    'username_allowed_error' => 'لا يسمح بالرموز الخاصة ولا المساحات بين الكلمات في اسم المستخدم,فقط "_","." يسمح به',
    'user_already_exist' => 'اسم المستخدم بالفعل موجود!',
    'uCannot_access_admin_data' => 'لا يمكنك تعديل, حذف و الوصول الى بيانات المدير الرئيسي!',
    'uCan_access_your_data_from_settings' => 'انت المدير الرئيسي لهذه المنصة , يمكنك الوصول,تعديل وحذف بياناتك عن طريق الاعدادات',
    'from' => 'مِن',
    'time' => 'الوقت',
    'options' => 'الإختيارات',
    'report_about_post' => 'تم الإبلاغ عن منشور',
    'dir' => 'rtl',
    'dir2' => 'ltr',
    'activeNow' => 'نشط الان',
    'notActiveNow' => 'غير نشط',
    'selectToChat' => 'رجاءاً قم بتحديد الشخص لبدء المحادثة معه الان',
    'user_profile' => 'الملف الشخصي للمستخدم',
    'emptyChat' => 'لا يوجد رسائل لديك مع هذه المحادثة .. قل مرحبا لبدء المحادثة الآن',
    'you' => 'أنت',
    'write_a_message' => 'إكتب رسالة ..',
    'search' => 'بحث..',
    'welcome' => 'أهلا وسهلا',
    'help' => 'مساعدة',
    'login' => 'تسجيل دخول',
    'signup' => 'إنشاء حساب',
    'welcome_to' => 'أهلا وسهلا بكم في',
    'Hashtag_main_string' => 'إلتقي بأصدقاء جدد وإبقى متصلا مع عائلتك ومع من تحب في اي وقت واي مكان',
    'login_now' => 'تسجيل الدخول الآن',
    'forgot_password' => 'نسيت كلمة السر؟',
    'dont_have_an_account' => 'لا تمتلك حساب؟',
    'for_free' => 'مجاناً',
    'email_or_username' => 'البريد الالكتروني او اسم الامستخدم',
    'loading' => 'جارِ التحميل',
    'create_new_account' => 'إتشاء حساب جديد',
    'create_account' => 'إنشاء الحساب',
    'confirm_password' => 'تأكيد كلمة السر',
    'by_clicking_signup_str' => 'بالضغط على إنشاء الحساب, أنت توافق على',
    'and' => 'و',
    'cookie_use' => '‏استخدام ملفات تعريف الارتباط',
    'already_have_an_account' => 'بالفعل تمتلك حساب؟',
    'creating_your_account' => 'جارِ إنشاء الحساب',
    'done' => 'إكتمل',
    'enter_un_pwd_to_login' => 'أدخل بريدك الالكتروني او اسم الامستخدم و كلمة السر لتسجيل الدخول',
    'enter_username_to_login' => 'أدخل إسم المستخدم لتسجيل الدخول',
    'enter_password_to_login' => 'أدخل كلمة السر لتسجيل الدخول',
    'cannot_login_attempts' => 'لا تستطيع تسجيل الدخول الآن! إنتظر (15) دقيقة ثم أعد المحاولة',
    'un_email_not_exist' => 'أسم المستخدم او البريد الالكتروني غير موجود',
    'password_incorrect_you_have' => 'كلمة السر غير صحيحة! لديك',
    'attempts_to_login' => 'محاولات لتسجيل الدخول',
    'un_and_pwd_incorrect' => 'اسم الامستخدم و كلمة السر غير صحيحان',
    'email_already_exist' => 'البريد الالكتروني بالفعل موجود',
    'password_short' => 'كلمة السر يجب ان لا تقل عن 6 حروف',
    'password_not_match_with_cpassword' => 'كلمة السر لا تتطابق مع حقل التأكد',
    'invalid_email_address' => 'البريد الالكتروني غير متوفر',
    'signup_username_should_be_1' => 'لا يسمح باستخدام الرموز الخاصة',
    'signup_username_should_be_2' => 'اسم المستخدم يجب ان يكون باللغة الانجليزية',
    'signup_username_should_be_3' => 'فقط يسمح بـ ( _ ) بين الكلمات',
    'signup_username_should_be_4' => 'الارقام والحروف مسموح بها فقط',
    'signup_username_should_be_5' => 'المسافات بين الكلمات غير مسموح بها',
    'username_not_allowed' => 'خطأ في إسم المستخدم',
    'username_not_exists' => 'إسم المستخدم غير موجود! لايوجد إسم مستخدم مثل اللذي أدخلته',
    'friends' => 'الاصدقاء',
    'requests' => 'الطلبات',
    'continue_reading' => 'أكمل القراءة',

   // ==========================================

    );
    return $lang[$txt];
}

?>
