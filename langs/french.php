<?php
function lang($txt){
    static $lang = array(
    // home page
    'html_dir' => 'ltr',
    'homeLinks' => 'left',
    'sponsored_align' => 'left',
    'main' => 'Main',
    'my_photos' => 'Mes photos',
    'my_posts' => 'Mes posts',
    'settings' => 'Paramètres',
    'my_notepad' => 'Mon notepad',
    'new_note' => 'Nouvelle note',
    'see_all_notes' => 'Voir mes notes',
    'more' => 'Support',
    'advertisement' => 'Publicité',
    'followers' => 'Followers',
    'following' => 'Following',
    'saved_posts' => 'Posts enregistrés',
    'sponsored' => 'Sponsorisé',
    'w_post_li' => 'left',
    'w_post_li2' => 'right',
    'w_post_align' => 'left',
    'w_post_dir' => 'ltr',
    'post_textbox_placeholder' => 'Partage quelque chose, une idée',
    'post_textbox_align' => 'left',
    'post_now' => 'Poster',
    'w_title_inputText' => 'Ajoute un titre à ton post (optionel)',
    'post_align' => 'left',
    'post_span_float' => 'right',
    'post_options' => 'right',
    'post_content_align' => 'left',
    'comment_field_align' => 'left',
    'comment_field_ph' => 'Ton commentaire ...',
    'comment' => 'Commente',
    'u_liked_this' => 'Tu as liké ça',
    'liked' => 'Like',
    'share_now' => 'Partage maintenant',
    'comment_time_align' => 'left',
    'comments' => 'commentaires',
    'no_comments' => 'Pas de commentaires',
    'likes' => 'Likes',
    'no_likes' => 'Sois le premier à liker',
    'like' => 'Like',
    'just_now' => 'A l\'instant',
    'minute_ago' => 'minute',
    'minutes_ago' => 'minutes',
    'hour_ago' => 'heure',
    'hours_ago' => 'heures',
    'day_ago' => 'jour',
    'days_ago' => 'jours',
    'week_ago' => 'semaine',
    'weeks_ago' => 'semaines',
    'month_ago' => 'mois',
    'months_ago' => 'mois',
    'year_ago' => 'année',
    'years_ago' => 'années',
    'HLP_b' => 'homelinksP_borderL',
    'user_info_align' => 'left',
    'comment_field_align' => 'left',
    'edit_profile' => 'Editer mon profil',
    'posts_str' => 'Posts',
    'followers_str' => 'Followers',
    'following_str' => 'Following',
    'uProf_ffTitle_align' => 'left',
    'uProf_followersTitle' => 'followers',
    'uProf_urfollowersTitle' => 'Tes followers',
    'uProf_followersTitleCheck' => 'en',
    'uProf_followingTitle' => 'following',
    'uProf_urfollowingTitle' => 'Personnes que tu follow',
    'uProf_followingTitleHe' => 'il ',
    'uProf_followingTitleShe' => 'elle ',
    'uProf_followingTitle1' => 'Personnes que',
    'uProf_followingTitle2' => 'entrain de follow',
    'followingBtn_str' => 'Following',
    'followBtn_str' => 'Follow',
    'postDropdown' => 'dropdown-menu-right',
    'postDropdownTxtAlign' => 'left',
    'EditPost_DDM' => 'Editer post',
    'DeletePost_DDM' => 'Supprimer post',
    'reportPost_DDM' => 'Signaler le post',
    'savePost_DDM' => 'Enregistrer post',
    'p_title_male' => ' mit à jour son image de profil',
    'p_title_famale' => ' mit à jour son image de profil',
    'pc_title_male' => ' mit à jour son cover picture',
    'pc_title_famale' => ' mit à jour son cover picture',
    'not_specified' => 'Non spoécifié',
    'verified_page' => 'Page vérifiée',
    'my_photos' => 'Mes photos',
    'my_photos_align' => 'left',
    'all_postsSTR' => 'tous les posts',
    'all_postsSTR_align' => 'left',
    'nothingToShow' => 'Y a rien ici',
    'working' => 'Travaille',
    'at' => 'à',
    'lives_in' => 'Vit à',
    'born_on' => 'Né à',
    'studies' => 'Etudes',
    'about' => 'A propos de',
    'bio' => 'Bio',
    'onlyUcanCThis' => 'Y a que toi qui peut voir ça',
    'save' => 'Sauvegarder',
    'cancel' => 'Annuler',
    'uploadPhoto' => 'Uplaod',
    'addToFavoritePages' => 'Ajouter aux pages favorites',
    'unFavoritePage' => 'Unfavorite page',
    'report' => 'Signale',
    'textAlign' => 'left',
    'errorPost_n1' => 'This post should not to be less than 15 characters.',
    'errorPost_n2' => 'Please select an image and then try again!',
    'errorPost_n3' => 'Your image must be less than 4MB of size.',
    'errorPost_n4' => 'Your image was not jpeg, jpg, or png file.',
    'errorPost_n5' => 'An error occured while processing the image. Try again.',
    'errorPost_n6' => 'ERROR: photo not uploaded. Try again.',
    'supportBox' => 'Support du site',
    'seeAll' => 'Voir tout',
    'language' => 'Langage',
    'float' => 'left',
    'float2' => 'right',
    'ul_navbar_nav1' => 'nav navbar-nav',
    'ul_navbar_nav2' => 'nav navbar-nav navbar-right',
    'navbar_home' => 'Home',
    'notifications' => 'Notifications',
    'messages' => 'Messages',
    'navbar_uMenu_UserProfile' => 'User profile',
    'adminOptions' => 'Admin options',
    'dashboard' => 'Dashboard',
    'terms' => 'Terms',
    'privacyPolicy' => 'Privacy policy',
    'Report_A_Problem' => 'Signaler un problème',
    'logout' => 'Logout',
    'navbar_serchBox_ph' => 'Rechercher..',
    'trending_worldWide' => 'Socialiser',
    'posts' => 'Posts',
    'pages' => 'Pages',
    'reactions' => 'reactions',
    'by' => 'By',
    'please_wait' => 'Attends STP..',
    'favourite_pages' => 'Favourite pages',
    'wpr_public' => 'Public',
    'wpr_followers' => 'Followers',
    'wpr_onlyme' => 'Que moi',
    'user_photos' => 'Photos',
    'stars_str' => 'Stars',
    'share' => 'share',
    'shares' => 'shares',
    'no_shares' => 'no shares',
    'wpost_write' => 'Ecrire',
    'wpost_upPhoto' => 'Photo',
    'wpost_title' => 'Titre',
    'shared_a_Post' => 'A partagé un post',
    'comm_edited' => 'Edité',
    'comm_edit' => 'Editer commentaire',
    'comm_delete' => 'Supprimer commentaire',
    'comm_report' => 'Signaler commentaire',
    'recently_starts_from' => 'Recently starts from :',
    'load_more' => 'Load more',
    'postSaved' => 'Post Sauvegardé',
    'postSavedBefore' => 'You saved this post before!',
    'errorSomthingWrong' => 'Error, An error occurred! Please try again later.',
    'postShared' => 'Post shared on your timeline.',
    'newLine_Shift_enter' => 'New line &xrarr;',
    'totalPhotos' => 'Total photos',
    'see_all' => 'See all',
    'likeNotify_str' => 'liked your post',
    'commmentNotify_str' => 'commented on your post',
    'shareNotify_str' => 'shared your post',
    'starNotify_str' => 'You got new star from',
    'followNotify_str' => 'starting folowing you',
    'no_notifications' => 'No notifications',
    'accountSetup' => 'Configuration de ton compte',
    'complete' => 'Compléter',
    'as_followPeople' => 'Suivre du monde',
    'as_profileInfo' => 'Infos de profil',
    'as_coverPhoto' => 'Photo de couverture',
    'as_userPhoto' => 'Photo de toi',
    'noMoreStories' => 'Pas d\'autres stories',
    'you_have_not_posted_anything_yet' => 'You have not posted anything yet',
    'has_not_posted_anything_yet' => 'has not posted anything yet',
    'not_found' => 'Not found',
    'no_users_like_the_name_you_entered' => 'No users like the name you entered',
    'publicPosts' => 'Public posts',
    'searchMoreAbout' => 'Search more about',
    'advancedSearch' => 'Advanced search',
    'profilePageNotFound_str1' => 'Sorry, This page isn\'t available',
    'profilePageNotFound_str2' => 'Sorry this page may have been removed, or that page doesn\'t exist!',
    'profilePageNotFound_str3' => 'Go back to the previous page',
    'posting' => 'Posting..',
    'hashtag_not_available' => 'Hashtag not available!',
    'news' => 'News',
    'tv' => 'Tv',
    'store' => 'Store',
    'new' => 'New',
    'job' => 'Job',
    'all_posts_that_you_saved' => 'All posts that you saved',
    'nothing_saved_yet' => 'Nothing saved yet',
    'do_you_want_to_delete_this' => 'Do you want to delete this?',
    'you_can_not_undo_this_after_deleting_it' => 'You can not undo this after deleting it',
    'delete' => 'Delete',
    'open' => 'open',
    'closed' => 'closed',
    'you_anonymously_reported_a' => 'You anonymously reported a',
    'post' => 'post',
    'click_to_view_your_report' => 'Click to view your report',
    'replay' => 'Replay',
    'your_report' => 'Your report',
    'help_us_to_make_our_community_better' => 'Aidez nous à rendre cette communauté meilleure',
    'submit' => 'submit',
    'subject' => 'Subject',
    'your_feedback_helps_us_improve_our_community' => 'Your feedback helps us improve our community',
    'post_reported' => 'Post signalé ! we will review your report soon',
    'mynotepad_main_title' => 'Save your secret password, codes, notes, links and everything online .. just you can view or edit it',
    'newNote_p' => 'Create new secret note, Only you can see and edit it',
    'newNote_title' => 'Note title',
    'newNote_content' => 'Note content',
    'create' => 'create',
    'saved' => 'Saved',
    'current_password_is_incorrect' => 'Current password is incorrect',
    'please_fill_required_fields' => 'Please fill required fields',
    'new_password_doesnt_match_the_confirm_field' => 'New password field doesn\'t match the confirm field',
    'changes_saved_seccessfully' => 'changes saved seccessfully',
    'remove_account' => 'Remove account',
    'general' => 'General',
    'male' => 'Male',
    'female' => 'Female',
    'fullname' => 'Full name',
    'username' => 'Username',
    'email' => 'Email Address',
    'required' => 'Required',
    'new_password' => 'New password',
    'confirm_new_password' => 'Confirm new password',
    'gender' => 'Gender',
    'current_password' => 'Current password',
    'save_changes' => 'Save changes',
    'education' => 'Education',
    'work' => 'Work',
    'work_title' => 'Work title',
    'work_place' => 'Work place',
    'at' => 'at',
    'country' => 'Country',
    'birthday' => 'Birthday',
    'website' => 'Website',
    'bio' => 'Bio',
    'profile_pic_shape' => 'Profile picture shape',
    'circle' => 'Circle',
    'square' => 'Square',
    'remove_account' => 'Remove account',
    'remove_account_note' => 'You can\'t undo this action and all data can not be recovered when you press <b>Remove account</b> button',
    'loadmore' => 'Load more',
    'users' => 'Users',
    'males' => 'Males',
    'females' => 'Females',
    'completed_profiles' => 'Completed profiles',
    'stars' => 'Stars',
    'notes' => 'Notes',
    'verified_users' => 'Verified users',
    'admins' => 'Admins',
    'verify_badge' => 'Verify badge',
    'verify_user' => 'Verify user',
    'remove_verifyBadge' => 'Remove verify badge',
    'edit_delete_dashboard' => 'Edite / Retire',
    'verify_badge_removed_succ_from' => 'Verify badge removed successfully from',
    'verified_successfully' => 'Verifié avec succès',
    'user_doesnt_exist' => 'Cet utilisateur n\'existe pas !',
    'yes' => 'Yes',
    'no' => 'No',
    'upgradeToAdmin' => 'Upgrade to admin',
    'password' => 'Password',
    'username_allowed_error' => 'Special characters or white spaces are not allowed,Just "_","." is allowed between words in username',
    'user_already_exist' => 'Username déjà prit !',
    'uCannot_access_admin_data' => 'You can not edit, delete or access main admin data!',
    'uCan_access_your_data_from_settings' => 'You are the main admin of this platform, you can access,edit or delete your data from settings',
    'from' => 'From',
    'time' => 'Time',
    'options' => 'Options',
    'report_about_post' => 'Reported about post',
    'dir' => 'ltr',
    'dir2' => 'rtl',
    'activeNow' => 'Active now',
    'notActiveNow' => 'Not Active',
    'selectToChat' => 'Please select a chat to start messaging',
    'user_profile' => 'User profile',
    'emptyChat' => 'You have no messages in this chat .. say hello to start chatting now',
    'you' => 'You',
    'write_a_message' => 'Ecrit un message..',
    'search' => 'Search..',
    'welcome' => 'Bienvenue',
    'help' => 'Help',
    'login' => 'Login',
    'signup' => 'Sign Up',
    'welcome_to' => 'Bienvenue à',
    'Hashtag_main_string' => 'Le site Codeur de Jeux est un réseau social pour apprendre à coder des jeux 2D en HTML',
    'login_now' => 'Login now',
    'forgot_password' => 'Mot de passe oublié ?',
    'dont_have_an_account' => 'Pas de compte ?',
    'for_free' => 'for free',
    'email_or_username' => 'Email ou username',
    'loading' => 'Chargement',
    'create_new_account' => 'Create new account',
    'create_account' => 'Créer compte',
    'confirm_password' => 'Confirm password',
    'by_clicking_signup_str' => 'By clicking Create account, you agree to our',
    'and' => 'and',
    'cookie_use' => 'Cookie use',
    'already_have_an_account' => 'Tu as déjà un compte',
    'creating_your_account' => 'Je crée ton compte',
    'done' => 'done',
    'enter_un_pwd_to_login' => 'Tape ton username or email and password to login',
    'enter_username_to_login' => 'Tape ton username pour login',
    'enter_password_to_login' => 'Tape ton password pour login',
    'cannot_login_attempts' => 'You can not login now! Attend (15 min) et réessaye',
    'un_email_not_exist' => 'Username ou email non existant',
    'password_incorrect_you_have' => 'User password incorrect! You have',
    'attempts_to_login' => 'attempts to login',
    'un_and_pwd_incorrect' => 'User and password incorrect',
    'email_already_exist' => 'Email address already exist',
    'password_short' => 'Your password must be at least 6 characters long. Please try another',
    'password_not_match_with_cpassword' => 'Your password does not match with confirm field',
    'invalid_email_address' => 'Invalid email address',
    'signup_username_should_be_1' => 'Special characters not allowed',
    'signup_username_should_be_2' => 'Username should be in English',
    'signup_username_should_be_3' => 'Only ( _ ) allowed between words',
    'signup_username_should_be_4' => 'Numbers and letters are allowed',
    'signup_username_should_be_5' => 'White spaces not allowed between words',
    'username_not_allowed' => 'Error in username',
    'username_not_exists' => 'User name not exists! No User name like that you entered',
    'friends' => 'Friedns',
    'requests' => 'Requests',
    'continue_reading' => 'Continue reading',


   // ==========================================

    );
    return $lang[$txt];
}

?>
