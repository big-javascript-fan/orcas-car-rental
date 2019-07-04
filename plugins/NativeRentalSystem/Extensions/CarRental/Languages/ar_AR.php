<?php
/**
 * Language specific file
 * @Language - Arabian
 * @Author - This can be YOU! Just make this translation file great
 * and send it to info@hackathon.lt with your credits to put in here (Name, Website, Email)
 * To do a better translation, just use en_US.php file and translate it from there
 */
// Settings
$lang['LTR'] = TRUE;
$lang['NRS_RECAPTCHA_LANG'] = 'ar';

// Roles
$lang['NRS_PARTNER_ROLE_NAME_TEXT'] = 'Car Partner';
$lang['NRS_ASSISTANT_ROLE_NAME_TEXT'] = 'Car Assistant';
$lang['NRS_MANAGER_ROLE_NAME_TEXT'] = 'Car Manager';

// Admin - Ajax
$lang['NRS_ADMIN_AJAX_DELETE_FEATURE_CONFIRM_TEXT'] = 'Do you really want to delete this feature?';
$lang['NRS_ADMIN_AJAX_DELETE_BENEFIT_CONFIRM_TEXT'] = 'Do you really want to delete this benefit?';
$lang['NRS_ADMIN_AJAX_DELETE_CUSTOMER_CONFIRM_TEXT'] = 'Do you really want to delete this customer? Remember that all reservations made by this customer, invoices and all reserved cars will also be deleted.';
$lang['NRS_ADMIN_AJAX_DELETE_TRANSMISSION_TYPE_TEXT'] = 'Do you really want to delete this transmission type? Remember that cars, using this transmission type and related reservations also will be deleted.';
$lang['NRS_ADMIN_AJAX_DELETE_MANUFACTURER_CONFIRM_TEXT'] = 'Do you really want to delete this manufacturer? Remember that cars, made by this manufacturer and related reservations also will be deleted.';
$lang['NRS_ADMIN_AJAX_DELETE_ITEM_CONFIRM_TEXT'] = 'Do you want to delete this car? Remember that all corresponding reservations will also be deleted.';
$lang['NRS_ADMIN_AJAX_DELETE_FUEL_TYPE_CONFIRM_TEXT'] = 'Do you really want to delete this fuel type? Remember that cars, using this fuel type and related reservations also will be deleted.';
$lang['NRS_ADMIN_AJAX_DELETE_BODY_TYPE_CONFIRM_TEXT'] = 'Do you really want to delete this body type? Remember that cars, using this body type and related reservations also will be deleted.';
$lang['NRS_ADMIN_AJAX_DELETE_EXTRA_CONFIRM_TEXT'] = 'Do you want to delete this extra? Remember that all corresponding discounts will also be deleted.';
$lang['NRS_ADMIN_AJAX_DELETE_LOCATION_CONFIRM_TEXT'] = 'Do you want to delete this location? All related distances and upcoming reservations from/to this location will be deleted. Cars won\'t be deleted, just locations will be unassigned from them .';
$lang['NRS_ADMIN_AJAX_DELETE_DISTANCE_CONFIRM_TEXT'] = 'Do you want to delete this distance?';
$lang['NRS_ADMIN_AJAX_DELETE_PRICE_GROUP_CONFIRM_TEXT'] = 'Do you really want to delete this price group? Remember that all price plans attached to this price group will also be deleted.';
$lang['NRS_ADMIN_AJAX_PRICE_PLANS_NOT_FOUND_TEXT'] = 'No available price plans found!';
$lang['NRS_ADMIN_AJAX_PRICE_PLANS_PLEASE_SELECT_TEXT'] = 'Please select a price group first!';
$lang['NRS_ADMIN_AJAX_CLOSED_ON_SELECTED_DATES_TEXT'] = 'All or specified location were closed on selected dates!';
$lang['NRS_ADMIN_AJAX_PRINT_INVOICE_POPUP_TITLE_TEXT'] = 'Invoice #';
$lang['NRS_ADMIN_AJAX_CANCEL_BOOKING_CONFIRM_TEXT'] = 'Are you sure that you want to cancel this reservation?';
$lang['NRS_ADMIN_AJAX_DELETE_BOOKING_CONFIRM_TEXT'] = 'Are you sure that you want to delete this reservation? Remember once reservation deleted, it will be deleted forever from your database.';
$lang['NRS_ADMIN_AJAX_MARK_PAID_BOOKING_TEXT'] = 'Are you sure that customer paid for this reservation?';
$lang['NRS_ADMIN_AJAX_MARK_COMPLETED_EARLY_CONFIRM_TEXT'] = 'Are you sure that you want to mark this reservation as completed right now?';
$lang['NRS_ADMIN_AJAX_REFUND_BOOKING_CONFIRM_TEXT'] = 'Are you sure that you want to refund this reservation to customer? Remember that you will have to send payment refund manually to the customer.';
$lang['NRS_ADMIN_AJAX_EMAIL_DOES_NOT_EXIST_ERROR_TEXT'] = 'Sorry, no email found for this id.';
$lang['NRS_ADMIN_AJAX_CLOSE_DATE_ACCESS_ERROR_TEXT'] = 'Sorry, you are not allowed to manage locations.';
$lang['NRS_ADMIN_AJAX_PRICE_PLAN_DOES_NOT_EXIST_ERROR_TEXT'] = 'Sorry, no data found.';
$lang['NRS_ADMIN_AJAX_UNKNOWN_ERROR_TEXT'] = 'Unknown error.';

// Admin - Global
$lang['NRS_ADMIN_VIEW_DETAILS_TEXT'] = 'View Details';
$lang['NRS_ADMIN_VIEW_BOOKINGS_TEXT'] = 'عرض حجوزات';
$lang['NRS_ADMIN_VIEW_UNPAID_BOOKINGS_TEXT'] = 'View Unpaid Reservations';
$lang['NRS_ADMIN_NO_BOOKINGS_YET_TEXT'] = 'لا الحجوزات حتى الآن';
$lang['NRS_ADMIN_BOOKING_DETAILS_TEXT'] = 'تفاصيل الحجز';
$lang['NRS_ADMIN_CUSTOMER_DETAILS_FROM_DB_TEXT'] = 'تفاصيل العملاء (أحدث الإصدارات من قاعدة بيانات)';
$lang['NRS_ADMIN_BOOKING_STATUS_TEXT'] = 'حالة الحجز';
$lang['NRS_ADMIN_BOOKING_STATUS_UPCOMING_TEXT'] = 'Upcoming';
$lang['NRS_ADMIN_BOOKING_STATUS_DEPARTED_TEXT'] = 'الراحلون';
$lang['NRS_ADMIN_BOOKING_STATUS_COMPLETED_EARLY_TEXT'] = 'Completed Early';
$lang['NRS_ADMIN_BOOKING_STATUS_COMPLETED_TEXT'] = 'Completed';
$lang['NRS_ADMIN_BOOKING_STATUS_ACTIVE_TEXT'] = 'جارية';
$lang['NRS_ADMIN_BOOKING_STATUS_CANCELLED_TEXT'] = 'إلغاء';
$lang['NRS_ADMIN_BOOKING_STATUS_PAID_TEXT'] = 'Paid';
$lang['NRS_ADMIN_BOOKING_STATUS_UNPAID_TEXT'] = 'Unpaid';
$lang['NRS_ADMIN_BOOKING_STATUS_REFUNDED_TEXT'] = 'Refunded';
$lang['NRS_ADMIN_PRINT_INVOICE_TEXT'] = 'طباعة فاتورة';
$lang['NRS_ADMIN_BACK_TO_CUSTOMER_BOOKING_LIST_TEXT'] = 'الرجوع إلى قائمة حجوزات الزبون';
$lang['NRS_ADMIN_CUSTOMERS_BY_LAST_VISIT_TEXT'] = 'Customers by Last Visit Date';
$lang['NRS_ADMIN_CUSTOMERS_BY_REGISTRATION_TEXT'] = 'Customers by Registration Date';
$lang['NRS_ADMIN_BOOKINGS_PERIOD_FROM_TO_TEXT'] = 'Reserv. Period: %s - %s';
$lang['NRS_ADMIN_PICKUPS_PERIOD_FROM_TO_TEXT'] = 'Pick-ups Period: %s - %s';
$lang['NRS_ADMIN_RETURNS_PERIOD_FROM_TO_TEXT'] = 'Returns Period: %s - %s';
$lang['NRS_ADMIN_UPCOMING_TEXT'] = 'Upcoming';
$lang['NRS_ADMIN_PAST_TEXT'] = 'Past';
$lang['NRS_ADMIN_CUSTOMER_BOOKINGS_TEXT'] = 'Customer Reservations';
$lang['NRS_ADMIN_BOOKINGS_BY_TEXT'] = 'Reservations by %s';
$lang['NRS_ADMIN_ALL_BOOKINGS_TEXT'] = 'All Reservations';
$lang['NRS_ADMIN_ALL_PICKUPS_TEXT'] = 'All Pick-ups';
$lang['NRS_ADMIN_ALL_RETURNS_TEXT'] = 'All Returns';
$lang['NRS_ADMIN_MAX_ITEM_UNITS_PER_BOOKING_TEXT'] = 'Maximum car units per reservation';
$lang['NRS_ADMIN_TOTAL_ITEM_UNITS_IN_STOCK_TEXT'] = 'Total car units in garage';
$lang['NRS_ADMIN_MAX_EXTRA_UNITS_PER_BOOKING_TEXT'] = 'Maximum extra units per reservation';
$lang['NRS_ADMIN_TOTAL_EXTRA_UNITS_IN_STOCK_TEXT'] = 'Total extra units in stock';
$lang['NRS_ADMIN_ITEM_PRICES_TEXT'] = 'Car Prices';
$lang['NRS_ADMIN_ITEM_DEPOSITS_TEXT'] = 'Car Deposits';
$lang['NRS_ADMIN_EXTRA_PRICES_TEXT'] = 'Extra Prices';
$lang['NRS_ADMIN_EXTRA_DEPOSITS_TEXT'] = 'Extra Deposits';
$lang['NRS_ADMIN_PICKUP_FEES_TEXT'] = 'Pick-Up Fees';
$lang['NRS_ADMIN_DISTANCE_FEES_TEXT'] = 'Distance Fees';
$lang['NRS_ADMIN_RETURN_FEES_TEXT'] = 'Returns Fees';
$lang['NRS_ADMIN_REGULAR_PRICE_TEXT'] = 'Regular Price';
$lang['NRS_ADMIN_PRICE_TYPE_TEXT'] = 'Price Type';
$lang['NRS_ADMIN_ON_THE_LEFT_TEXT'] = 'On the Left';
$lang['NRS_ADMIN_ON_THE_RIGHT_TEXT'] = 'On the Right';
$lang['NRS_ADMIN_LOAD_FROM_OTHER_PLACE_TEXT'] = 'Load from other place';
$lang['NRS_ADMIN_LOAD_FROM_PLUGIN_TEXT'] = 'Load from this plugin';
$lang['NRS_ADMIN_EMAIL_TEXT'] = 'E-mail';
$lang['NRS_ADMIN_PUBLIC_TEXT'] = 'Public';
$lang['NRS_ADMIN_PRIVATE_TEXT'] = 'Private';
$lang['NRS_ADMIN_CALENDAR_NO_CALENDARS_FOUND_TEXT'] = 'No calendars found for selected date range';
$lang['NRS_ADMIN_CHOOSE_PAGE_TEXT'] = ' - Choose page - ';
$lang['NRS_ADMIN_SELECT_EMAIL_TYPE_TEXT'] = '--- اختر نوع البريد الإلكتروني ---';
$lang['NRS_ADMIN_TOTAL_REQUESTS_LEFT_TEXT'] = 'Total requests left';
$lang['NRS_ADMIN_FAILED_REQUESTS_LEFT_TEXT'] = 'failed requests left';
$lang['NRS_ADMIN_EMAIL_ATTEMPTS_LEFT_TEXT'] = 'e-mail attempts left';

// Admin Menu
$lang['NRS_ADMIN_MENU_EXTENSION_PAGE_TITLE_TEXT'] = 'Car Rental System';
$lang['NRS_ADMIN_MENU_EXTENSION_LABEL_TEXT'] = 'Car Rental';
$lang['NRS_ADMIN_MENU_SYSTEM_UPDATE_TEXT'] = 'System Update';
$lang['NRS_ADMIN_MENU_NETWORK_UPDATE_TEXT'] = 'Network Update';
// Admin Menu - Benefit Manager
$lang['NRS_ADMIN_MENU_BENEFIT_MANAGER_TEXT'] = 'Benefit Manager';
$lang['NRS_ADMIN_MENU_ADD_EDIT_BENEFIT_TEXT'] = 'Add / Edit Benefit';
// Admin Menu - Item Manager
$lang['NRS_ADMIN_MENU_ITEM_MANAGER_TEXT'] = 'Car Manager';
$lang['NRS_ADMIN_MENU_ADD_EDIT_ITEM_TEXT'] = 'Add / Edit Car';
$lang['NRS_ADMIN_MENU_ADD_EDIT_MANUFACTURER_TEXT'] = 'Add / Edit Manufacturer';
$lang['NRS_ADMIN_MENU_ADD_EDIT_BODY_TYPE_TEXT'] = 'Add / Edit Body Type';
$lang['NRS_ADMIN_MENU_ADD_EDIT_FUEL_TYPE_TEXT'] = 'Add / Edit Fuel Type';
$lang['NRS_ADMIN_MENU_ADD_EDIT_TRANSMISSION_TYPE_TEXT'] = 'Add / Edit Transmission Type';
$lang['NRS_ADMIN_MENU_ADD_EDIT_FEATURE_TEXT'] = 'Add / Edit Feature';
$lang['NRS_ADMIN_MENU_ADD_EDIT_ITEM_OPTION_TEXT'] = 'Add / Edit Car Option';
$lang['NRS_ADMIN_MENU_BLOCK_ITEM_TEXT'] = 'Block Car';
// Admin Menu - Item Prices
$lang['NRS_ADMIN_MENU_ITEM_PRICES_TEXT'] = 'Car Prices';
$lang['NRS_ADMIN_MENU_ADD_EDIT_PRICE_GROUP_TEXT'] = 'Add / Edit Price Group';
$lang['NRS_ADMIN_MENU_ADD_EDIT_PRICE_PLAN_TEXT'] = 'Add / Edit Car Price Plan';
$lang['NRS_ADMIN_MENU_ADD_EDIT_ITEM_DISCOUNT_TEXT'] = 'Add / Edit Car Discount';
// Admin Menu - Extras Manager
$lang['NRS_ADMIN_MENU_EXTRAS_MANAGER_TEXT'] = 'Extras Manager';
$lang['NRS_ADMIN_MENU_ADD_EDIT_EXTRA_TEXT'] = 'Add / Edit Extra';
$lang['NRS_ADMIN_MENU_ADD_EDIT_EXTRA_OPTION_TEXT'] = 'Add / Edit Extra Option';
$lang['NRS_ADMIN_MENU_ADD_EDIT_EXTRA_DISCOUNT_TEXT'] = 'Add / Edit Extra Discount';
$lang['NRS_ADMIN_MENU_BLOCK_EXTRA_TEXT'] = 'Block Extra';
// Admin Menu - Location Manager
$lang['NRS_ADMIN_MENU_LOCATION_MANAGER_TEXT'] = 'Location Manager';
$lang['NRS_ADMIN_MENU_ADD_EDIT_LOCATION_TEXT'] = 'Add / Edit Location';
$lang['NRS_ADMIN_MENU_ADD_EDIT_DISTANCE_TEXT'] = 'Add / Edit Distance';
// Admin Menu - Reservation Manager
$lang['NRS_ADMIN_MENU_BOOKING_MANAGER_TEXT'] = 'Reservation Manager';
$lang['NRS_ADMIN_MENU_BOOKING_SEARCH_RESULTS_TEXT'] = 'Reservation Search Results';
$lang['NRS_ADMIN_MENU_ITEM_CALENDAR_SEARCH_RESULTS_TEXT'] = 'Car Calendar Search Results';
$lang['NRS_ADMIN_MENU_EXTRAS_CALENDAR_SEARCH_TEXT'] = 'Extras Calendar Search Results';
$lang['NRS_ADMIN_MENU_CUSTOMER_SEARCH_RESULTS_TEXT'] = 'Customer Search Results';
$lang['NRS_ADMIN_MENU_ADD_EDIT_CUSTOMER_TEXT'] = 'Add/Edit Customer';
$lang['NRS_ADMIN_MENU_ADD_EDIT_BOOKING_TEXT'] = 'Add/Edit Reservation';
$lang['NRS_ADMIN_MENU_VIEW_DETAILS_TEXT'] = 'View Reservation Details';
$lang['NRS_ADMIN_MENU_PRINT_INVOICE_TEXT'] = 'Print Invoice';
// Admin Menu - Payments & Taxes
$lang['NRS_ADMIN_MENU_PAYMENTS_AND_TAXES_TEXT'] = 'Payments &amp; Taxes';
$lang['NRS_ADMIN_MENU_ADD_EDIT_PAYMENT_METHOD_TEXT'] = 'Add / Edit Payment Method';
$lang['NRS_ADMIN_MENU_ADD_EDIT_PREPAYMENT_TEXT'] = 'Add / Edit Prepayment';
$lang['NRS_ADMIN_MENU_ADD_EDIT_TAX_TEXT'] = 'Add / Edit Tax';
// Admin Menu - Settings
$lang['NRS_ADMIN_MENU_SINGLE_MANAGER_TEXT'] = 'Settings';
$lang['NRS_ADMIN_MENU_ADD_EDIT_GLOBAL_SETTINGS_TEXT'] = 'Add / Edit Global Settings';
$lang['NRS_ADMIN_MENU_ADD_EDIT_CUSTOMER_SETTINGS_TEXT'] = 'Add / Edit Customer Settings';
$lang['NRS_ADMIN_MENU_ADD_EDIT_SEARCH_SETTINGS_TEXT'] = 'Add / Edit Search Settings';
$lang['NRS_ADMIN_MENU_ADD_EDIT_PRICE_SETTINGS_TEXT'] = 'Add / Edit Price Settings';
$lang['NRS_ADMIN_MENU_ADD_EDIT_EMAIL_TEXT'] = 'Add / Edit Email';
$lang['NRS_ADMIN_MENU_IMPORT_DEMO_TEXT'] = 'Import Demo';
$lang['NRS_ADMIN_MENU_CONTENT_PREVIEW_TEXT'] = 'Content Preview';
// Admin Menu - Instructions
$lang['NRS_ADMIN_MENU_INSTRUCTIONS_TEXT'] = 'Instructions';
// Admin Menu - Network Manager
$lang['NRS_ADMIN_MENU_NETWORK_MANAGER_TEXT'] = 'Network Manager';

// Admin Pages Post Type
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_NAME_TEXT'] = 'Rental Page'; // name
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_SINGULAR_NAME_TEXT'] = 'Rental Pages'; // singular_name
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_MENU_NAME_TEXT'] = 'Rental Pages'; // menu_name
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_PARENT_PAGE_COLON_TEXT'] = 'Parent Rental Page'; // parent_item_colon
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_ALL_PAGES_TEXT'] = 'All Information Pages'; // all_items
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_VIEW_PAGE_TEXT'] = 'View Rental Page'; // view_item
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_ADD_NEW_PAGE_TEXT'] = 'Add New Rental Page'; // add_new_item
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_ADD_NEW_TEXT'] = 'Add New Page'; // add_new
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_EDIT_PAGE_TEXT'] = 'Edit Rental Page'; // edit_item
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_UPDATE_PAGE_TEXT'] = 'Update Rental Page'; // update_item
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_SEARCH_PAGES_TEXT'] = 'Search Rental Page'; // search_items
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_NOT_FOUND_TEXT'] = 'Not Found'; // not_found
$lang['NRS_ADMIN_PAGE_POST_TYPE_LABEL_NOT_FOUND_IN_TRASH_TEXT'] = 'Not found in Trash'; // not_found_in_trash
$lang['NRS_ADMIN_PAGE_POST_TYPE_DESCRIPTION_TEXT'] = 'List of car information pages';

// Admin Item Post Type
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_NAME_TEXT'] = 'Car Page'; // name
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_SINGULAR_NAME_TEXT'] = 'Car Pages'; // singular_name
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_MENU_NAME_TEXT'] = 'Car Pages'; // menu_name
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_PARENT_ITEM_COLON_TEXT'] = 'Parent Car'; // parent_item_colon
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_ALL_ITEMS_TEXT'] = 'All Car Pages'; // all_items
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_VIEW_ITEM_TEXT'] = 'View Car Page'; // view_item
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_ADD_NEW_ITEM_TEXT'] = 'Add New Car Page'; // add_new_item
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_ADD_NEW_TEXT'] = 'Add New Page'; // add_new
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_EDIT_ITEM_TEXT'] = 'Edit Car Page'; // edit_item
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_UPDATE_ITEM_TEXT'] = 'Update Car Page'; // update_item
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_SEARCH_ITEMS_TEXT'] = 'Search Car Page'; // search_items
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_NOT_FOUND_TEXT'] = 'Not Found'; // not_found
$lang['NRS_ADMIN_ITEM_POST_TYPE_LABEL_NOT_FOUND_IN_TRASH_TEXT'] = 'Not found in Trash'; // not_found_in_trash
$lang['NRS_ADMIN_ITEM_POST_TYPE_DESCRIPTION_TEXT'] = 'List of car pages';

// Admin Location Post Type
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_NAME_TEXT'] = 'Car Location'; // name
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_SINGULAR_NAME_TEXT'] = 'Car Locations'; // singular_name
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_MENU_NAME_TEXT'] = 'Car Locations'; // menu_name
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_PARENT_LOCATION_COLON_TEXT'] = 'Parent Car Location'; // parent_item_colon
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_ALL_LOCATIONS_TEXT'] = 'All Car Location Pages'; // all_items
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_VIEW_LOCATION_TEXT'] = 'View Car Location Page'; // view_item
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_ADD_NEW_LOCATION_TEXT'] = 'Add New Car Location Page'; // add_new_item
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_ADD_NEW_TEXT'] = 'Add New Page'; // add_new
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_EDIT_LOCATION_TEXT'] = 'Edit Car Location Page'; // edit_item
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_UPDATE_LOCATION_TEXT'] = 'Update Car Location Page'; // update_item
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_SEARCH_LOCATIONS_TEXT'] = 'Search Car Location Page'; // search_items
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_NOT_FOUND_TEXT'] = 'Not Found'; // not_found
$lang['NRS_ADMIN_LOCATION_POST_TYPE_LABEL_NOT_FOUND_IN_TRASH_TEXT'] = 'Not found in Trash'; // not_found_in_trash
$lang['NRS_ADMIN_LOCATION_POST_TYPE_DESCRIPTION_TEXT'] = 'List of car location pages';

// Admin Core
$lang['NRS_ADMIN_EDIT_TEXT'] = 'تحرير';
$lang['NRS_ADMIN_DELETE_TEXT'] = 'حذف';
$lang['NRS_ADMIN_CANCEL_TEXT'] = 'Cancel';
$lang['NRS_ADMIN_UNBLOCK_TEXT'] = 'Unblock';
$lang['NRS_ADMIN_MARK_PAID_TEXT'] = 'Mark as Paid';
$lang['NRS_ADMIN_MARK_COMPLETED_EARLY_TEXT'] = 'Mark Completed Early';
$lang['NRS_ADMIN_REFUND_TEXT'] = 'Refund Payment';
$lang['NRS_ADMIN_SELECT_LOCATION_TEXT'] = '- اختر المكان -';
$lang['NRS_ADMIN_ALL_LOCATIONS_TEXT'] = 'All Locations';
$lang['NRS_ADMIN_AVAILABLE_TEXT'] = 'Available';
$lang['NRS_ADMIN_DISPLAYED_TEXT'] = 'Displayed';
$lang['NRS_ADMIN_VISIBLE_TEXT'] = 'مرئي';
$lang['NRS_ADMIN_HIDDEN_TEXT'] = 'مختفي';
$lang['NRS_ADMIN_ENABLED_TEXT'] = ' تمكين ';
$lang['NRS_ADMIN_DISABLED_TEXT'] = 'معطل';
$lang['NRS_ADMIN_ALLOWED_TEXT'] = 'Allowed';
$lang['NRS_ADMIN_FAILED_TEXT'] = 'Failed';
$lang['NRS_ADMIN_BLOCKED_TEXT'] = 'Blocked';
$lang['NRS_ADMIN_REQUEST_TEXT'] = 'Request';
$lang['NRS_ADMIN_REQUESTS_TEXT'] = 'Requests';
$lang['NRS_ADMIN_IP_TEXT'] = 'IP';
$lang['NRS_ADMIN_CHECK_TEXT'] = 'Check';
$lang['NRS_ADMIN_SKIP_TEXT'] = 'Skip';
$lang['NRS_ADMIN_YES_TEXT'] = 'نعم';
$lang['NRS_ADMIN_NO_TEXT'] = 'لا';
$lang['NRS_ADMIN_DAILY_TEXT'] = 'اليومية';
$lang['NRS_ADMIN_HOURLY_TEXT'] = 'ساعة';
$lang['NRS_ADMIN_PER_BOOKING_TEXT'] = 'Per Booking';
$lang['NRS_ADMIN_COMBINED_TEXT'] = 'الجامع - يومية & أمبير؛ كل ساعة';
$lang['NRS_ADMIN_NEVER_TEXT'] = 'Never';
$lang['NRS_ADMIN_DROPDOWN_TEXT'] = 'Dropdown';
$lang['NRS_ADMIN_SLIDER_TEXT'] = 'Slider';
$lang['NRS_ADMIN_SELECT_DEMO_TEXT'] = ' --- Select Live Demo --- ';
$lang['NRS_ADMIN_WITHOUT_TRANSLATION_TEXT'] = 'Without translation';
$lang['NRS_ADMIN_VIEW_PAGE_IN_NEW_WINDOW_TEXT'] = 'View %s page in new window';

// Core
$lang['NRS_IMAGE_ALT_TEXT']  = 'Image';
$lang['NRS_PER_BOOKING_SHORT_TEXT'] = '';
$lang['NRS_PER_DAY_SHORT_TEXT'] = ' د.';
$lang['NRS_PER_HOUR_SHORT_TEXT'] = '/ ساعة';
$lang['NRS_PER_BOOKING_TEXT'] = 'booking';
$lang['NRS_PER_DAY_TEXT'] = 'يوم';
$lang['NRS_PER_HOUR_TEXT'] = 'ساعة';
$lang['NRS_SELECT_DATE_TEXT'] = 'التسجيل';
$lang['NRS_SELECT_YEAR_TEXT'] = 'السنة';
$lang['NRS_SELECT_MONTH_TEXT'] = 'شهر';
$lang['NRS_SELECT_DAY_TEXT'] = 'يوم';
$lang['NRS_PRICE_TEXT'] = 'الأسعار';
$lang['NRS_PERIOD_TEXT'] = 'الفترة';
$lang['NRS_DURATION_TEXT'] = 'المدة';
$lang['NRS_MON_TEXT'] = 'Mon';
$lang['NRS_TUE_TEXT'] = 'Tue';
$lang['NRS_WED_TEXT'] = 'Wed';
$lang['NRS_THU_TEXT'] = 'Thu';
$lang['NRS_FRI_TEXT'] = 'Fri';
$lang['NRS_SAT_TEXT'] = 'Sat';
$lang['NRS_SUN_TEXT'] = 'Sun';
$lang['NRS_LUNCH_TEXT'] = 'Lunch';
$lang['NRS_MONDAYS_TEXT'] = 'Mondays';
$lang['NRS_TUESDAYS_TEXT'] = 'Tuesdays';
$lang['NRS_WEDNESDAYS_TEXT'] = 'Wednesdays';
$lang['NRS_THURSDAYS_TEXT'] = 'Thursdays';
$lang['NRS_FRIDAYS_TEXT'] = 'Fridays';
$lang['NRS_SATURDAYS_TEXT'] = 'Saturdays';
$lang['NRS_SUNDAYS_TEXT'] = 'Sundays';
$lang['NRS_LUNCH_TIME_TEXT'] = 'Lunch Time';
$lang['NRS_ALL_YEAR_TEXT'] = 'All Year';
$lang['NRS_ALL_DAY_TEXT'] = '00:00 - 24:00';
$lang['NRS_PARTIAL_DAY_TEXT'] = '%s - 24:00';
$lang['NRS_MIDNIGHT_TEXT'] = '00:00';
$lang['NRS_NOON_TEXT'] = '12:00';
$lang['NRS_CLOSED_TEXT'] = 'Closed';
$lang['NRS_OPEN_TEXT'] = 'Open';
$lang['NRS_TODAY_TEXT'] = 'Today';
$lang['NRS_DATE_TEXT'] = 'التسجيل';
$lang['NRS_TIME_TEXT'] = 'الوقت';
$lang['NRS_DAYS_TEXT'] = 'أيام';
$lang['NRS_DAYS2_TEXT'] = 'أيام';
$lang['NRS_DAY_TEXT'] = 'يوم';
$lang['NRS_HOURS_TEXT'] = 'ساعات';
$lang['NRS_HOURS2_TEXT'] = 'ساعات';
$lang['NRS_HOUR_TEXT'] = 'ساعة';
$lang['NRS_MINUTES_TEXT'] = 'دقيقة';
$lang['NRS_MINUTES2_TEXT'] = 'دقيقة';
$lang['NRS_MINUTE_TEXT'] = 'دقيقة';
$lang['NRS_DAILY_TEXT'] = 'Daily';
$lang['NRS_HOURLY_TEXT'] = 'Hourly';
$lang['NRS_ON_ST_TEXT'] = 'st';
$lang['NRS_ON_ND_TEXT'] = 'nd';
$lang['NRS_ON_RD_TEXT'] = 'rd';
$lang['NRS_ON_TH_TEXT'] = 'th';
$lang['NRS_ON_TEXT'] = 'on'; // on
$lang['NRS_THE_ST_TEXT'] = 'st';
$lang['NRS_THE_ND_TEXT'] = 'nd';
$lang['NRS_THE_RD_TEXT'] = 'rd';
$lang['NRS_THE_TH_TEXT'] = 'th';
$lang['NRS_UNCLASSIFIED_ITEM_TYPE_TEXT'] = 'أخرى';
$lang['NRS_NO_ITEMS_AVAILABLE_TEXT'] = 'لا السيارات المتاحة';
$lang['NRS_NO_ITEMS_AVAILABLE_IN_THIS_CLASS_TEXT'] = 'لا السيارات المتاحة في هذه الفئة';
$lang['NRS_NO_EXTRAS_AVAILABLE_TEXT'] = 'No extras available';
$lang['NRS_NO_MANUFACTURERS_AVAILABLE_TEXT'] = 'No manufacturers available';
$lang['NRS_NO_LOCATIONS_AVAILABLE_TEXT'] = 'No locations available';
$lang['NRS_NO_BENEFITS_AVAILABLE_TEXT'] = 'No benefits available';
$lang['NRS_NA_TEXT'] = 'N / A';
$lang['NRS_NONE_TEXT'] = 'None';
$lang['NRS_NOT_SET_TEXT'] = 'Not set';
$lang['NRS_DO_NOT_EXIST_TEXT'] = 'Not exist';
$lang['NRS_EXIST_TEXT'] = 'Exist';
$lang['NRS_NOT_REQ_TEXT'] = 'Not req.';
$lang['NRS_REQ_TEXT'] = 'Req.';
$lang['NRS_NOT_REQUIRED_TEXT'] = 'غير مطلوب';
$lang['NRS_REQUIRED_TEXT'] = 'مطلوب';
$lang['NRS_DONT_DISPLAY_TEXT'] = 'لا تعرض';
$lang['NRS_WITH_TAX_TEXT'] = 'with VAT';
$lang['NRS_WITHOUT_TAX_TEXT'] = 'ث / س VAT';
$lang['NRS_TAX_TEXT'] = 'VAT';
$lang['NRS_FROM_TEXT'] = 'From';
$lang['NRS_TO_TEXT'] = 'To';
$lang['NRS_ALL_TEXT'] = 'All';
$lang['NRS_OR_TEXT'] = 'Or';
$lang['NRS_AND_TEXT'] = 'و';
$lang['NRS_UNLIMITED_TEXT'] = 'غير محدود';
$lang['NRS_DEPOSIT_TEXT'] = 'ودائع';
$lang['NRS_DISCOUNT_TEXT'] = 'الخصم';
$lang['NRS_PREPAYMENT_TEXT'] = 'المبلغ المسبق';
$lang['NRS_TOTAL_TEXT'] = 'إجمالي عدد';
$lang['NRS_BACK_TEXT'] = 'عودة';
$lang['NRS_CONTINUE_TEXT'] = 'متابعة';
$lang['NRS_SEARCH_TEXT'] = 'بحث';
$lang['NRS_SELECT_DROPDOWN_TEXT'] = '--- اختر ---';
$lang['NRS_ITEM_TEXT'] = 'السيارات';
$lang['NRS_EXTRA_TEXT'] = 'Extra';
$lang['NRS_RENTAL_OPTION_TEXT'] = 'Extra';
$lang['NRS_ITEMS_TEXT'] = 'سيارات';
$lang['NRS_EXTRAS_TEXT'] = 'تأجير خيارات';
$lang['NRS_RENTAL_OPTIONS_TEXT'] = 'تأجير خيارات';
$lang['NRS_SHOW_ITEM_TEXT'] = 'عرض سيارة';
$lang['NRS_VIA_PARTNER_TEXT'] = 'via %s';
$lang['NRS_COUPON_TEXT'] = 'Coupon';

// Booking step no. 1 - item search
$lang['NRS_BOOKING_TEXT'] = 'الحجز';
$lang['NRS_PICKUP_TEXT'] = 'Pick Up';
$lang['NRS_RETURN_TEXT'] = 'Return';
$lang['NRS_OTHER_TEXT'] = 'Other';
$lang['NRS_INFORMATION_TEXT'] = 'Information';
$lang['NRS_CITY_AND_LOCATION_TEXT'] = 'مدينة & أمبير؛ المكان:';
$lang['NRS_PICKUP_CITY_AND_LOCATION_TEXT'] = 'وانيت مدينة اند الموقع:';
$lang['NRS_RETURN_CITY_AND_LOCATION_TEXT'] = 'قطرة معطلة مدينة اند الموقع:';
$lang['NRS_SELECT_BOOKING_DATE_TEXT'] = 'التسجيل:';
$lang['NRS_SELECT_BOOKING_PERIOD_TEXT'] = 'فترة الحجز:';
$lang['NRS_COUPON_CODE_TEXT'] = 'Coupon code';
$lang['NRS_I_HAVE_BOOKING_CODE_TEXT'] = 'لدي رقم الحجز:';
$lang['NRS_I_HAVE_COUPON_CODE_TEXT'] = 'I have coupon code:';
$lang['NRS_PICKUP_LOCATION_TEXT'] = 'البيك اب الموقع';
$lang['NRS_RETURN_LOCATION_TEXT'] = 'الانزال الموقع';
$lang['NRS_ALL_BODY_TYPES_DROPDOWN_TEXT'] = '---- جميع أنواع ----';
$lang['NRS_ALL_TRANSMISSION_TYPES_DROPDOWN_TEXT'] = '---- كل الإرسال ----';
$lang['NRS_SELECT_PICKUP_LOCATION_TEXT'] = '- اختر اقطة الموقع -';
$lang['NRS_SELECT_RETURN_LOCATION_TEXT'] = '- اختر المكان الإفلات من -';
$lang['NRS_PICKUP_DATE_TEXT'] = 'البيك اب التسجيل';
$lang['NRS_RETURN_DATE_TEXT'] = 'الانزال التسجيل';
$lang['NRS_PICKUP_DATE_ALERT_TEXT'] = 'الرجاء إدخال تاريخ الوصول';
$lang['NRS_RETURN_DATE_ALERT_TEXT'] = 'الرجاء إدخال تاريخ المغادرة';
$lang['NRS_BOOKING_PERIOD_ALERT_TEXT'] = 'Please selected reservation period!';
$lang['NRS_PICKUP_LOCATION_ALERT_TEXT'] = 'الرجاء تحديد البيك اب الموقع.';
$lang['NRS_RETURN_LOCATION_ALERT_TEXT'] = 'الرجاء تحديد غلبه النعاس الموقع.';
$lang['NRS_COUPON_CODE_ALERT_TEXT'] = 'Please enter coupon code!';
$lang['NRS_SHOW_ITEM_DESCRIPTION_TEXT'] = 'مشاهدة وصف سيارة';
$lang['NRS_UPDATE_BOOKING_TEXT'] = 'تحديث حجزي';
$lang['NRS_CANCEL_BOOKING_TEXT'] = 'الغاء الحجز';
$lang['NRS_CHANGE_BOOKING_DATE_TIME_AND_LOCATION_TEXT'] = 'تغيير التاريخ والوقت اند الموقع';
$lang['NRS_CHANGE_BOOKED_ITEMS_TEXT'] = 'تغيير سيارات';
$lang['NRS_CHANGE_EXTRAS_TEXT'] = 'تغيير إضافات';
$lang['NRS_CHANGE_RENTAL_OPTIONS_TEXT'] = 'تغيير إضافات';
$lang['NRS_IN_THIS_LOCATION_TEXT'] = 'في هذا الفرع';
$lang['NRS_AFTERHOURS_PICKUP_IS_NOT_ALLOWED_TEXT'] = 'غير مسموح';
$lang['NRS_AFTERHOURS_RETURN_IS_NOT_ALLOWED_TEXT'] = 'غير مسموح';

// Booking step no. 2 - search results
$lang['NRS_DISTANCE_AWAY_TEXT'] = '%s away';
$lang['NRS_BOOKING_DATA_TEXT'] = 'تفاصيل الحجز';
$lang['NRS_BOOKING_CODE_TEXT'] = 'الحجز لا.';
$lang['NRS_BOOKING_EDIT_TEXT'] = 'تحرير';
$lang['NRS_BOOKING_PICKUP_TEXT'] = 'بيك أب';
$lang['NRS_BOOKING_BUSINESS_HOURS_TEXT'] = 'ساعات العمل';
$lang['NRS_BOOKING_FEE_TEXT'] = 'الرسوم';
$lang['NRS_BOOKING_RETURN_TEXT'] = 'عودة';
$lang['NRS_BOOKING_NIGHTLY_RATE_TEXT'] = 'بعد ساعات';
$lang['NRS_BOOKING_AFTERHOURS_TEXT'] = 'بعد ساعات';
$lang['NRS_BOOKING_EARLY_TEXT'] = 'Early';
$lang['NRS_BOOKING_LATE_TEXT'] = 'Late';
$lang['NRS_BOOKING_AFTERHOURS_PICKUP_TEXT'] = 'بعد ساعات بيك آب';
$lang['NRS_BOOKING_AFTERHOURS_PICKUP_IMPOSSIBLE_TEXT'] = 'مستحيل';
$lang['NRS_BOOKING_AFTERHOURS_RETURN_TEXT'] = 'بعد ساعة من عودته';
$lang['NRS_BOOKING_AFTERHOURS_RETURN_IMPOSSIBLE_TEXT'] = 'مستحيل';
$lang['NRS_CHOOSE_TEXT'] = 'اختيار';
$lang['NRS_SEARCH_RESULTS_TEXT'] = 'نتائج البحث';
$lang['NRS_MILEAGE_TEXT'] = 'الأميال';

//class.Step3BookingOptionsController.php
$lang['NRS_SELECT_RENTAL_OPTIONS_TEXT'] = 'اختيار الاكسسوارات';
$lang['NRS_SELECTED_ITEMS_TEXT'] = 'سيارات مختارة';
$lang['NRS_FOR_DEPENDANT_ITEM_TEXT'] = ' (for %s)';
$lang['NRS_NO_EXTRAS_AVAILABLE_CLICK_CONTINUE_TEXT'] = 'لا سيارة إضافات تتوفر انقر على زر متابعة.';

// Booking step no. 4 - booking details
$lang['NRS_PICKUP_DATE_AND_TIME_TEXT'] = 'البيك اب التسجيل اند الوقت';
$lang['NRS_RETURN_DATE_AND_TIME_TEXT'] = 'غلبه النعاس، التاريخ وأمبير؛ الوقت';
$lang['NRS_UNIT_PRICE_TEXT'] = 'سعر الوحدة';
$lang['NRS_QUANTITY_TEXT'] = 'الكمية';
$lang['NRS_QUANTITY_SHORT_TEXT'] = 'Qty.';
$lang['NRS_PICKUP_FEE_TEXT'] = 'البيك اب تهمة';
$lang['NRS_RETURN_FEE_TEXT'] = 'تهمة غلبه النعاس';
$lang['NRS_NIGHTLY_PICKUP_RATE_APPLIED_TEXT'] = '(معدل ليلا تطبيق)';
$lang['NRS_NIGHTLY_RETURN_RATE_APPLIED_TEXT'] = '(معدل ليلا تطبيق)';
$lang['NRS_ITEM_QUANTITY_SUFFIX_TEXT'] = 'السيارة (ق)';
$lang['NRS_EXTRA_QUANTITY_SUFFIX_TEXT'] = 'extra(s)';
$lang['NRS_PAY_NOW_OR_AT_PICKUP_TEXT'] = 'الدفع الآن / في اقطة';
$lang['NRS_PAY_NOW_TEXT'] = 'الدفع الآن';
$lang['NRS_PAY_AT_PICKUP_TEXT'] = 'الدفع في اقطة';
$lang['NRS_PAY_LATER_OR_ON_RETURN_TEXT'] = 'Pay Later / on Return';
$lang['NRS_PAY_LATER_TEXT'] = 'Pay Later';
$lang['NRS_PAY_ON_RETURN_TEXT'] = 'Pay on Return';
$lang['NRS_ITEM_RENTAL_DETAILS_TEXT'] = 'تأجير تفاصيل';
$lang['NRS_MANUFACTURER_TEXT'] = 'بائع السيارات';
$lang['NRS_ITEM_MODEL_TEXT'] = 'نوع السيارة';
$lang['NRS_GROSS_TOTAL_TEXT'] = 'الباطن إجمالي';
$lang['NRS_GRAND_TOTAL_TEXT'] = 'المجموع';
$lang['NRS_BOOKING_DETAILS_TEXT'] = 'تفاصيل الحجز';
$lang['NRS_CUSTOMER_DETAILS_TEXT'] = 'تفاصيل العملاء';
$lang['NRS_EXISTING_CUSTOMER_DETAILS_TEXT'] = 'تفاصيل العملاء الحاليين';
$lang['NRS_EXISTING_CUSTOMER_TEXT'] = 'العملاء الحاليين';
$lang['NRS_EMAIL_ADDRESS_TEXT'] = 'عنوان البريد الإلكتروني';
$lang['NRS_FETCH_CUSTOMER_DETAILS_TEXT'] = 'الجلب تفاصيل';
$lang['NRS_OR_ENTER_NEW_DETAILS_TEXT'] = 'OR';
$lang['NRS_CUSTOMER_TEXT'] = 'عميل';
$lang['NRS_TITLE_TEXT'] = 'عنوان';
$lang['NRS_MR_TEXT'] = 'السيد';
$lang['NRS_MS_TEXT'] = 'السيدة';
$lang['NRS_MRS_TEXT'] = 'السيدة';
$lang['NRS_MISS_TEXT'] = 'ملكة جمال';
$lang['NRS_DR_TEXT'] = 'الدكتور';
$lang['NRS_PROF_TEXT'] = 'البروفيسور';
$lang['NRS_FIRST_NAME_TEXT'] = 'الاسم';
$lang['NRS_LAST_NAME_TEXT'] = 'اسم العائلة';
$lang['NRS_DATE_OF_BIRTH_TEXT'] = 'تاريخ الميلاد';
$lang['NRS_YEAR_OF_BIRTH_TEXT'] = 'Year of Birth';
$lang['NRS_ADDRESS_TEXT'] = 'عنوان';
$lang['NRS_STREET_ADDRESS_TEXT'] = 'عنوان';
$lang['NRS_CITY_TEXT'] = 'مدينة';
$lang['NRS_STATE_TEXT'] = 'الدولة';
$lang['NRS_ZIP_CODE_TEXT'] = 'الرمز البريدي';
$lang['NRS_COUNTRY_TEXT'] = 'البلد';
$lang['NRS_PHONE_TEXT'] = 'الهاتف';
$lang['NRS_EMAIL_TEXT'] = 'البريد الإلكتروني';
$lang['NRS_ADDITIONAL_COMMENTS_TEXT'] = 'تعليقات إضافية';
$lang['NRS_CUSTOMER_ID_TEXT'] = 'ID العميل';
$lang['NRS_IP_ADDRESS_TEXT'] = 'عنوان IP';
$lang['NRS_PAY_BY_SHORT_TEXT'] = 'الدفع عن طريق';
$lang['NRS_I_AGREE_WITH_TERMS_AND_CONDITIONS_TEXT'] = 'وأنا أتفق مع شروط & أمبير؛ الظروف';
$lang['NRS_TERMS_AND_CONDITIONS_TEXT'] = 'الشروط والاحكام';
$lang['NRS_CONFIRM_TEXT'] = 'تأكيد';
$lang['NRS_FIELD_REQUIRED_TEXT'] = 'هذا الحقل مطلوب';

// Booking step no. 5 - process booking
$lang['NRS_PAYMENT_DETAILS_TEXT'] = 'تفاصيل الدفع';
$lang['NRS_PAYMENT_OPTION_TEXT'] = 'الدفع بواسطة';
$lang['NRS_PAYER_EMAIL_TEXT'] = 'الدافع البريد الإلكتروني';
$lang['NRS_TRANSACTION_ID_TEXT'] = 'ID عملية';
$lang['NRS_PROCESSING_PAYMENT_TEXT'] = 'Processing Payment...';
$lang['NRS_PLEASE_WAIT_UNTIL_PAYMENT_WILL_BE_PROCESSED_TEXT'] = 'Please wait, your order will be processed...';

//display-booking-confirm.php
$lang['NRS_STEP5_PAY_ONLINE_TEXT'] = 'الإنترنت دفعت';
$lang['NRS_STEP5_PAY_AT_PICKUP_TEXT'] = 'الدفع في اقطة';
$lang['NRS_THANK_YOU_TEXT'] = 'شكرا!';
$lang['NRS_YOUR_BOOKING_CONFIRMED_TEXT'] = 'أكد الحجز الحجز لا.';
$lang['NRS_INVOICE_SENT_TO_YOUR_EMAIL_ADDRESS_TEXT'] = 'أرسلت الفاتورة في عنوان البريد الإلكتروني الخاص بك';

//display-booking-failure.php
$lang['NRS_BOOKING_FAILURE_TEXT'] = 'الفشل الحجز';
$lang['NRS_BOOKING_FAILURE_SEARCH_ALL_ITEMS_TEXT'] = 'بحث جميع سيارات';

// display-item-price-table.php
$lang['NRS_DAY_PRICE_TEXT'] = 'يوم السعر من';
$lang['NRS_HOUR_PRICE_TEXT'] = 'سعر ساعة من';
$lang['NRS_NO_ITEMS_IN_THIS_CATEGORY_TEXT'] = 'لا توجد سيارات في هذه الفئة';
$lang['NRS_PRICE_FOR_DAY_FROM_TEXT'] = 'سعر يوميا ابتداء من';
$lang['NRS_PRICE_FOR_HOUR_FROM_TEXT'] = 'الأسعار لمدة ساعة بدءا من';
$lang['NRS_PRICE_WITH_APPLIED_TEXT'] = 'مع التطبيقية';
$lang['NRS_WITH_APPLIED_DISCOUNT_TEXT'] = 'الخصم';

// class.ItemsAvailability.php
$lang['NRS_MONTH_DAY_TEXT'] = 'يوم';
$lang['NRS_MONTH_DAYS_TEXT'] = 'Days';
$lang['NRS_ITEMS_AVAILABILITY_FOR_TEXT'] = 'Cars Availability For';
$lang['NRS_ITEMS_AVAILABILITY_IN_NEXT_30_DAYS_TEXT'] = 'Cars Availability in Next 30 Days';
$lang['NRS_ITEMS_PARTIAL_AVAILABILITY_FOR_TEXT'] = 'Partial Cars Availability For';
$lang['NRS_ITEMS_AVAILABILITY_THIS_MONTH_TEXT'] = 'سيارات توافر هذا الشهر';
$lang['NRS_ITEMS_AVAILABILITY_NEXT_MONTH_TEXT'] = 'سيارات التوفر الشهر القادم';
$lang['NRS_ITEM_ID_TEXT'] = 'ID:';
$lang['NRS_TOTAL_ITEMS_TEXT'] = 'مجموع السيارات:';

// class.ExtrasAvailability.php
$lang['NRS_EXTRAS_AVAILABILITY_FOR_TEXT'] = 'Extras Availability For';
$lang['NRS_EXTRAS_AVAILABILITY_IN_NEXT_30_DAYS_TEXT'] = 'Extras Availability in Next 30 Days';
$lang['NRS_EXTRAS_PARTIAL_AVAILABILITY_FOR_TEXT'] = 'Partial Extras Availability For';
$lang['NRS_EXTRAS_AVAILABILITY_THIS_MONTH_TEXT'] = 'Extras Availability This Month';
$lang['NRS_EXTRAS_AVAILABILITY_NEXT_MONTH_TEXT'] = 'Extras Availability Next Month';
$lang['NRS_EXTRA_ID_TEXT'] = 'ID';
$lang['NRS_TOTAL_EXTRAS_TEXT'] = 'Total extras';

// class.ItemsController.php
$lang['NRS_SHOW_ITEM_PAGE_TEXT'] = 'مشاهدة وصف سيارة';
$lang['NRS_PARTNER_TEXT'] = 'Partner';
$lang['NRS_BODY_TYPE_TEXT'] = 'الدرجة';
$lang['NRS_TRANSMISSION_TYPE_TEXT'] = 'علبة';
$lang['NRS_FUEL_TYPE_TEXT'] = 'لوقود';
$lang['NRS_ITEM_FUEL_CONSUMPTION_TEXT'] = 'استهلاك الوقود';
$lang['NRS_ITEM_PASSENGERS_TEXT'] = 'الركاب سعة';
$lang['NRS_ITEM_PRICE_FROM_TEXT'] = 'الأسعار من';
$lang['NRS_INQUIRE_TEXT'] = 'Call';
$lang['NRS_GET_A_QUOTE_TEXT'] = 'Get a quote';
$lang['NRS_ITEM_FEATURES_TEXT'] = 'ملامح';
$lang['NRS_BOOK_ITEM_TEXT'] = 'كتاب';

// class.LocationsController.php
$lang['NRS_LOCATIONS_BUSINESS_HOURS_TEXT'] = 'Business Hours';
$lang['NRS_LOCATION_FEES_TEXT'] = 'رسوم الموقع';
$lang['NRS_EARLY_PICKUP_TEXT'] = 'Early Pick-Up';
$lang['NRS_LATE_PICKUP_TEXT'] = 'Late Pick-Up';
$lang['NRS_EARLY_RETURN_TEXT'] = 'Early Return';
$lang['NRS_LATE_RETURN_TEXT'] = 'Late Return';
$lang['NRS_EARLY_PICKUP_FEE_TEXT'] = 'Early pick-up fee';
$lang['NRS_LATE_RETURN_FEE_TEXT'] = 'Late return fee';
$lang['NRS_VIEW_LOCATION_TEXT'] = 'View Location';

// class.SingleItemController.php
$lang['NRS_ITEM_ENGINE_CAPACITY_TEXT'] = 'قدرة المحرك';
$lang['NRS_ITEM_LUGGAGE_TEXT'] = 'ماكس الأمتعة';
$lang['NRS_ITEM_DOORS_TEXT'] = 'أبواب';
$lang['NRS_ITEM_DRIVER_AGE_TEXT'] = 'عمر السائق الحد الأدنى';
$lang['NRS_ADDITIONAL_INFORMATION_TEXT'] = 'معلومات إضافية';

// class.SingleLocationController.php
$lang['NRS_CONTACTS_TEXT'] = 'Contacts';
$lang['NRS_CONTACT_DETAILS_TEXT'] = 'Contact Details';
$lang['NRS_BUSINESS_HOURS_FEES_TEXT'] = 'Business Hours Fees';
$lang['NRS_AFTERHOURS_FEES_TEXT'] = 'After Hours Fees';

// template.BookingCancelled.php
$lang['NRS_CANCELLED_SUCCESSFULLY_TEXT'] = 'إلغاء بنجاح';
$lang['NRS_NOT_CANCELLED_TEXT'] = 'لم يكن إلغاء الحجز';

// template.EditBookingForm.php
$lang['NRS_EDIT_TEXT'] = 'Change';
$lang['NRS_BOOKING2_TEXT'] = 'reservation';
$lang['NRS_EDIT_BOOKING_BUTTON_TEXT'] = 'تغيير الحجز';
$lang['NRS_EDIT_BOOKING_PLEASE_ENTER_BOOKING_NUMBER_TEXT'] = 'الرجاء إدخال رقم الحجز!';

// Admin System Errors
// Unfortunately, they are untranslatable
$lang['NRS_ERROR_IN_METHOD_TEXT'] = 'Error in %s method: ';

// Exceptions
$lang['NRS_ERROR_CANNOT_BIND_TEMPLATE_VARIABLE_TEXT'] = 'Cannot bind variable named &#39;templateFile&#39;.';
$lang['NRS_ERROR_TEMPLATE_NOT_EXIST_TEXT'] = 'Template file %s does not exist.';

// Errors
$lang['NRS_ERROR_EXTENSION_NAME_TEXT'] = 'Car Rental System';
$lang['NRS_ERROR_REQUIRED_FIELD_TEXT'] = 'حقل مطلوب';
$lang['NRS_ERROR_IS_EMPTY_TEXT'] = 'فارغ';
$lang['NRS_ERROR_SLIDER_CANT_BE_DISPLAYED_TEXT'] = 'Slider can&#39;t be displayed';
$lang['NRS_ERROR_CUSTOMER_DETAILS_NOT_FOUND_TEXT'] = 'تفاصيل لا توجد يرجى الاشتراك.';
$lang['NRS_ERROR_CUSTOMER_DETAILS_NO_ERROR_TEXT'] = 'لا أخطاء';
$lang['NRS_ERROR_CUSTOMER_DETAILS_UNKNOWN_ERROR_TEXT'] = 'خطأ غير معروف';
$lang['NRS_ERROR_EXCEEDED_CUSTOMER_LOOKUP_ATTEMPTS_TEXT'] = 'You have exceeded customer detail lookup attempts. Please enter your details manually in the form bellow.';
$lang['NRS_ERROR_BOOKING_DOES_NOT_EXIST_TEXT'] = 'لا وجود لها';
$lang['NRS_ERROR_ITEM_NOT_AVAILABLE_TEXT'] = 'This car is not available.';
$lang['NRS_ERROR_PLEASE_SELECT_AT_LEAST_ONE_ITEM_TEXT'] = 'الرجاء تحديد سيارة واحدة على الأقل';
$lang['NRS_ERROR_NO_ITEM_AVAILABLE_PLEASE_TRY_DIFFERENT_DATE_TEXT'] = 'لا السيارات المتاحة الرجاء محاولة فتحة تاريخ المختلفة أو تعديل معايير البحث الخاصة بك.';
$lang['NRS_ERROR_SEARCH_ENGINE_DISABLED_TEXT'] = 'الحجز عبر الإنترنت آسف غير متوفرة حاليا يرجى المحاولة لاحقا.';
$lang['NRS_ERROR_OUT_BEFORE_IN_TEXT'] = 'عذرا قمت بإدخال معايير البحث غير صحيحة الرجاء المحاولة مع معايير البحث صالحة.';
$lang['NRS_ERROR_MINIMUM_NUMBER_OF_NIGHT_SHOULD_NOT_BE_LESS_THAN_TEXT'] = 'لا ينبغي أن يكون الحد الأدنى لعدد أقل من ليلة';
$lang['NRS_ERROR_PLEASE_MODIFY_YOUR_SEARCH_CRITERIA_TEXT'] = 'الرجاء تعديل معايير البحث الخاصة بك.';
$lang['NRS_ERROR_PICKUP_IS_NOT_POSSIBLE_ON_TEXT'] = 'الحجز غير ممكن لفحص في تاريخ:';
$lang['NRS_ERROR_PLEASE_MODIFY_YOUR_PICKUP_TIME_BY_WEBSITE_TIME_TEXT'] = 'الرجاء تعديل معايير البحث الخاصة بك وفقا لموقع الحجز التاريخ الحالي وأمبير؛ في المرة';
$lang['NRS_ERROR_CURRENT_DATE_TIME_TEXT'] = 'موقع الحجز التاريخ والوقت الحالي:';
$lang['NRS_ERROR_EARLIEST_POSSIBLE_PICKUP_DATE_TIME_TEXT'] = 'Earliest possible pickup date date &amp; time is';
$lang['NRS_ERROR_OR_NEXT_BUSINESS_HOURS_OF_PICKUP_LOCATION_TEXT'] = 'or the first time after it, when selected pickup location is open';
$lang['NRS_ERROR_PICKUP_DATE_CANT_BE_LESS_THAN_RETURN_DATE_TEXT'] = 'Pick-Up تاريخ و أمبير؛ الوقت لا يمكن أن يكون أقل من من السقوط خارج التاريخ والوقت. يرجى اختيار الصحيح البيك اب وغلبه النعاس، التاريخ والوقت ';
$lang['NRS_ERROR_PICKUP_LOCATION_IS_CLOSED_AT_THIS_DATE_TEXT'] = 'Pick-up branch %s at address %s is closed at this date (%s).';
$lang['NRS_ERROR_PICKUP_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT'] = 'Pick-up branch %s at address %s is closed at this time (%s).';
$lang['NRS_ERROR_RETURN_LOCATION_IS_CLOSED_AT_THIS_DATE_TEXT'] = 'Return branch %s at address %s is closed at this date (%s).';
$lang['NRS_ERROR_RETURN_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT'] = 'Return branch %s at address %s is closed at this time (%s).';
$lang['NRS_ERROR_AFTERHOURS_PICKUP_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT'] = 'بعد فرع ساعات بيك اب هو٪ الصورة في عنوان٪ الصورة ولكن تم إغلاق هذا الفرع أيضا في هذا الوقت.';
$lang['NRS_ERROR_AFTERHOURS_RETURN_LOCATION_IS_CLOSED_AT_THIS_TIME_TEXT'] = 'بعد ساعات يتجمعوا الفرع٪ الصورة في عنوان٪ الصورة ولكن يتم إغلاق هذا الفرع أيضا في هذا الوقت.';
$lang['NRS_ERROR_LOCATION_OPEN_HOURS_ARE_TEXT'] = 'This location open hours on %s, %s are %s.';
$lang['NRS_ERROR_LOCATION_WEEKLY_OPEN_HOURS_ARE_TEXT'] = 'This location open hours during the week are:';
$lang['NRS_ERROR_AFTERHOURS_PICKUP_LOCATION_OPEN_HOURS_ARE_TEXT'] = 'بعد فرع ساعات بيك اب ساعات مفتوحة ل٪ الصورة.';
$lang['NRS_ERROR_AFTERHOURS_RETURN_LOCATION_OPEN_HOURS_ARE_TEXT'] = 'بعد ساعات يتجمعوا فرع مفتوحة ساعات هي٪ الصورة.';
$lang['NRS_ERROR_AFTERHOURS_PICKUP_IS_NOT_ALLOWED_AT_LOCATION_TEXT'] = 'بعد غير مسموح ساعات صغيرة في هذا الموقع.';
$lang['NRS_ERROR_AFTERHOURS_RETURN_IS_NOT_ALLOWED_AT_LOCATION_TEXT'] = 'بعد غير مسموح ساعات يتجمعوا في هذا الموقع.';
$lang['NRS_ERROR_MAXIMUM_BOOKING_LENGTH_CANT_BE_MORE_THAN_TEXT'] = 'طول حجز أقصى لا يمكن أن يكون أطول من (بالأيام)';
$lang['NRS_ERROR_INVALID_BOOKING_CODE_TEXT'] = 'Invalid reservation code or this reservation do not exist anymore.';
$lang['NRS_ERROR_INVALID_SECURITY_CODE_TEXT'] = 'Security code is not valid.';
$lang['NRS_ERROR_DRIVER_AGE_VIOLATION_FOR_ITEM_TEXT'] = 'Based on your birthdate, your age does not match the minimum driver age requirement for %s.';
$lang['NRS_ERROR_DRIVER_AGE_VIOLATION_TEXT'] = 'Based on your birthdate, your age does not match the minimum driver age requirement for one of selected cars.';
$lang['NRS_ERROR_DEPARTED_TEXT'] = 'Booking No. %s already marked as departed, and is not available for further editing.';
$lang['NRS_ERROR_CANCELLED_TEXT'] = 'Booking No. %s has been cancelled.';
$lang['NRS_ERROR_REFUNDED_TEXT'] = 'Booking No. %s was already refunded and is not available anymore.';
$lang['NRS_ERROR_SYSTEM_IS_UNABLE_TO_SEND_EMAIL_TEXT'] = 'Error: System was not able to send a confirmation email. Either system email settings are not configured properly, or customer&#39;s email address is not correct.';
$lang['NRS_ERROR_PAYMENT_METHOD_IS_NOT_YET_IMPLEMENTED_TEXT'] = 'Error: You&#39;re tried to pay with a payment method, that is not yet available for use in the system.';
$lang['NRS_ERROR_OTHER_BOOKING_ERROR_TEXT'] = 'خطأ حجز باقي اذا واصلتم رؤية هذه الرسالة، يرجى الاتصال بمسؤول الموقع.';

// Admin Discount controller
$lang['NRS_ADMIN_DISCOUNT_ITEM_BOOKING_IN_ADVANCE_TEXT'] = 'Add/Edit Car Discount for Booking in Advance';
$lang['NRS_ADMIN_DISCOUNT_ITEM_BOOKING_DURATION_TEXT'] = 'Add/Edit Car Discount for Booking Duration';
$lang['NRS_ADMIN_DISCOUNT_EXTRA_BOOKING_IN_ADVANCE_TEXT'] = 'Add/Edit Extra Discount for Booking in Advance';
$lang['NRS_ADMIN_DISCOUNT_EXTRA_BOOKING_DURATION_TEXT'] = 'Add/Edit Extra Discount for Booking Duration';
$lang['NRS_ADMIN_DISCOUNT_DURATION_BEFORE_TEXT'] = 'Duration Before:';
$lang['NRS_ADMIN_DISCOUNT_DURATION_UNTIL_TEXT'] = 'Duration Until:';
$lang['NRS_ADMIN_DISCOUNT_DURATION_FROM_TEXT'] = 'Duration From:';
$lang['NRS_ADMIN_DISCOUNT_DURATION_TILL_TEXT'] = 'Duration Till:';

// Admin Settings Controller
$lang['NRS_ADMIN_SETTINGS_OKAY_GLOBAL_SETTINGS_UPDATED_TEXT'] = 'Completed: Global settings updated successfully!';
$lang['NRS_ADMIN_SETTINGS_OKAY_CUSTOMER_SETTINGS_UPDATED_TEXT'] = 'Completed: Customer settings updated successfully!';
$lang['NRS_ADMIN_SETTINGS_OKAY_SEARCH_SETTINGS_UPDATED_TEXT'] = 'Completed: Search settings updated successfully!';
$lang['NRS_ADMIN_SETTINGS_OKAY_PRICE_SETTINGS_UPDATED_TEXT'] = 'Completed: Price settings updated successfully!';

// OK / Error Messages - Benefit Element
$lang['NRS_BENEFIT_TITLE_EXISTS_ERROR_TEXT'] = 'Error: Benefit with this title already exists!';
$lang['NRS_BENEFIT_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing benefit!';
$lang['NRS_BENEFIT_UPDATED_TEXT'] = 'Completed: Benefit has been updated successfully!';
$lang['NRS_BENEFIT_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new benefit!';
$lang['NRS_BENEFIT_INSERTED_TEXT'] = 'Completed: New benefit has been added successfully!';
$lang['NRS_BENEFIT_REGISTERED_TEXT'] = 'Benefit title registered for translation.';
$lang['NRS_BENEFIT_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing benefit. No rows were deleted from database!';
$lang['NRS_BENEFIT_DELETED_TEXT'] = 'Completed: Benefit has been deleted successfully!';

// OK / Error Messages - Block Element
$lang['NRS_BLOCK_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new block!';
$lang['NRS_BLOCK_INSERTED_TEXT'] = 'Completed: New block has been added successfully!';
$lang['NRS_BLOCK_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing block. No rows were deleted from database!';
$lang['NRS_BLOCK_DELETED_TEXT'] = 'Completed: Block has been deleted successfully!';
$lang['NRS_BLOCK_DELETE_OPTIONS_ERROR_TEXT'] = 'Failed: No cars or extras were deleted from block!';
$lang['NRS_BLOCK_OPTIONS_DELETED_TEXT'] = 'Completed: All cars and extras were deleted from block!';

// OK / Error Messages - Body Type Element
$lang['NRS_BODY_TYPE_TITLE_EXISTS_ERROR_TEXT'] = 'Error: Body type with this title already exists!';
$lang['NRS_BODY_TYPE_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing body type!';
$lang['NRS_BODY_TYPE_UPDATED_TEXT'] = 'Completed: Body type has been updated successfully!';
$lang['NRS_BODY_TYPE_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new body type!';
$lang['NRS_BODY_TYPE_INSERTED_TEXT'] = 'Completed: New body type has been added successfully!';
$lang['NRS_BODY_TYPE_REGISTERED_TEXT'] = 'Body type title registered for translation.';
$lang['NRS_BODY_TYPE_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing body type. No rows were deleted from database!';
$lang['NRS_BODY_TYPE_DELETED_TEXT'] = 'Completed: Body type has been deleted successfully!';

// OK / Error Messages - Booking Element
$lang['NRS_BOOKING_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing reservation!';
$lang['NRS_BOOKING_UPDATED_TEXT'] = 'Completed: Reservation has been updated successfully!';
$lang['NRS_BOOKING_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new reservation!';
$lang['NRS_BOOKING_INSERTED_TEXT'] = 'Completed: New reservation has been added successfully!';
$lang['NRS_BOOKING_CANCEL_ERROR_TEXT'] = 'Error: MySQL update error appeared when tried to cancel existing reservation!';
$lang['NRS_BOOKING_CANCELLED_TEXT'] = 'Completed: Reservation has been cancelled successfully!';
$lang['NRS_BOOKING_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing reservation. No rows were deleted from database!';
$lang['NRS_BOOKING_DELETED_TEXT'] = 'Completed: Reservation has been deleted successfully!';
$lang['NRS_BOOKING_DELETE_OPTIONS_ERROR_TEXT'] = 'Failed: No cars or extras were deleted from reservation!';
$lang['NRS_BOOKING_OPTIONS_DELETED_TEXT'] = 'Completed: All cars and extras were deleted from reservation!';
$lang['NRS_BOOKING_MARK_AS_PAID_ERROR_TEXT'] = 'Failed: Reservation was not marked as paid!';
$lang['NRS_BOOKING_MARKED_AS_PAID_TEXT'] = 'Completed: Reservation was marked as paid!';
$lang['NRS_BOOKING_MARK_COMPLETED_EARLY_ERROR_TEXT'] = 'Failed: Reservation was not marked as completed early!';
$lang['NRS_BOOKING_MARKED_COMPLETED_EARLY_TEXT'] = 'Completed: Reservation was marked as completed early!';
$lang['NRS_BOOKING_REFUND_ERROR_TEXT'] = 'Failed: Reservation was not refunded!';
$lang['NRS_BOOKING_REFUNDED_TEXT'] = 'Completed: Reservation was refunded successfully!';

// OK / Error Messages - (Extra) Booking Option Element
$lang['NRS_EXTRA_BOOKING_ID_QUANTITY_OPTION_SKU_ERROR_TEXT'] = 'Error: New extra can&#39;t be blocked because of bad reservation id (%s), SKU (%s) or quantity (%s)!';
$lang['NRS_EXTRA_BOOKING_OPTION_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new extra (SKU - %s) reservation/block!';
$lang['NRS_EXTRA_BOOKING_OPTION_INSERTED_TEXT'] = 'Completed: New extra (SKU - %s) has been blocked/reserved!';
$lang['NRS_EXTRA_BOOKING_OPTION_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing reserved/blocked extra. No rows row were deleted from database!';
$lang['NRS_EXTRA_BOOKING_OPTION_DELETED_TEXT'] = 'Completed: Extra has been removed from reservation/block!';

// OK / Error Messages - (Item) Booking Option Element
$lang['NRS_ITEM_BOOKING_ID_QUANTITY_OPTION_SKU_ERROR_TEXT'] = 'Error: New car can&#39;t be blocked because of bad reservation id (%s), SKU (%s) or quantity (%s)!';
$lang['NRS_ITEM_BOOKING_OPTION_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new car (SKU - %s) reservation/block!';
$lang['NRS_ITEM_BOOKING_OPTION_INSERTED_TEXT'] = 'Completed: New car (SKU - %s) has been blocked/reserved!';
$lang['NRS_ITEM_BOOKING_OPTION_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing reserved/blocked car. No rows row were deleted from database!';
$lang['NRS_ITEM_BOOKING_OPTION_DELETED_TEXT'] = 'Completed: Car has been removed from reservation/block!';

// OK / Error Messages - Customer Element
$lang['NRS_CUSTOMER_TITLE_REQUIRED_ERROR_TEXT'] = 'Error: Customer title is required!';
$lang['NRS_CUSTOMER_FIRST_NAME_REQUIRED_ERROR_TEXT'] = 'Error: Customer first name is required!';
$lang['NRS_CUSTOMER_LAST_NAME_REQUIRED_ERROR_TEXT'] = 'Error: Customer last name is required!';
$lang['NRS_CUSTOMER_BIRTHDATE_REQUIRED_ERROR_TEXT'] = 'Error: Customer birthdate is required!';
$lang['NRS_CUSTOMER_STREET_ADDRESS_REQUIRED_ERROR_TEXT'] = 'Error: Customer street address is required!';
$lang['NRS_CUSTOMER_CITY_REQUIRED_ERROR_TEXT'] = 'Error: Customer city is required!';
$lang['NRS_CUSTOMER_STATE_REQUIRED_ERROR_TEXT'] = 'Error: Customer state is required!';
$lang['NRS_CUSTOMER_ZIP_CODE_REQUIRED_ERROR_TEXT'] = 'Error: Customer zip code is required!';
$lang['NRS_CUSTOMER_COUNTRY_REQUIRED_ERROR_TEXT'] = 'Error: Customer country is required!';
$lang['NRS_CUSTOMER_PHONE_REQUIRED_ERROR_TEXT'] = 'Error: Customer phone is required!';
$lang['NRS_CUSTOMER_EMAIL_REQUIRED_ERROR_TEXT'] = 'Error: Customer email is required!';
$lang['NRS_CUSTOMER_COMMENTS_REQUIRED_ERROR_TEXT'] = 'Error: Customer comments is required!';
$lang['NRS_CUSTOMER_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing customer!';
$lang['NRS_CUSTOMER_UPDATED_TEXT'] = 'Completed: Customer has been updated successfully!';
$lang['NRS_CUSTOMER_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new customer!';
$lang['NRS_CUSTOMER_INSERTED_TEXT'] = 'Completed: New customer has been added successfully!';
$lang['NRS_CUSTOMER_LAST_VISIT_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for customer last visit date!';
$lang['NRS_CUSTOMER_LAST_VISIT_UPDATED_TEXT'] = 'Completed: Customer last visit date has been updated!';
$lang['NRS_CUSTOMER_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing customer. No rows were deleted from database!';
$lang['NRS_CUSTOMER_DELETED_TEXT'] = 'Completed: Customer has been deleted successfully!';

// OK / Error Messages - Demo Element
$lang['NRS_DEMO_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error in demo data import!';
$lang['NRS_DEMO_INSERTED_TEXT'] = 'Completed: Demo data has been imported successfully!';

// OK / Error Messages - Distance Element
$lang['NRS_DISTANCE_PICKUP_NOT_SELECTED_ERROR_TEXT'] = 'Error: Pick up location must be selected!';
$lang['NRS_DISTANCE_RETURN_NOT_SELECTED_ERROR_TEXT'] = 'Error: Return location must be selected!';
$lang['NRS_DISTANCE_SAME_PICKUP_AND_RETURN_ERROR_TEXT'] = 'Error: Pick-up and return locations cannot be the same!';
$lang['NRS_DISTANCE_EXISTS_ERROR_TEXT'] = 'Error: This distance already exists!';
$lang['NRS_DISTANCE_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing distance!';
$lang['NRS_DISTANCE_UPDATED_TEXT'] = 'Completed: Distance has been updated successfully!';
$lang['NRS_DISTANCE_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new distance!';
$lang['NRS_DISTANCE_INSERTED_TEXT'] = 'Completed: New distance has been added successfully!';
$lang['NRS_DISTANCE_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing distance. No rows were deleted from database!';
$lang['NRS_DISTANCE_DELETED_TEXT'] = 'Completed: Distance has been deleted successfully!';

// OK / Error Messages - (Extra) Discount Element
$lang['NRS_EXTRA_DISCOUNT_DAYS_INTERSECTION_ERROR_TEXT'] = 'Error: Extra discount days range intersects other discount for specific extra or all extras!';
$lang['NRS_EXTRA_DISCOUNT_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing extra discount!';
$lang['NRS_EXTRA_DISCOUNT_UPDATED_TEXT'] = 'Completed: Extra discount has been updated successfully!';
$lang['NRS_EXTRA_DISCOUNT_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new extra discount!';
$lang['NRS_EXTRA_DISCOUNT_INSERTED_TEXT'] = 'Completed: New extra discount has been added successfully!';
$lang['NRS_EXTRA_DISCOUNT_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing extra discount. No rows were deleted from database!';
$lang['NRS_EXTRA_DISCOUNT_DELETED_TEXT'] = 'Completed: Extra discount has been deleted successfully!';

// OK / Error Messages - (Price Plan) Discount Element
$lang['NRS_PRICE_PLAN_DISCOUNT_DAYS_INTERSECTION_ERROR_TEXT'] = 'Error: Price plan discount days range intersects other discount for specific price plan or all price plans!';
$lang['NRS_PRICE_PLAN_DISCOUNT_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing price plan discount!';
$lang['NRS_PRICE_PLAN_DISCOUNT_UPDATED_TEXT'] = 'Completed: Price plan discount has been updated successfully!';
$lang['NRS_PRICE_PLAN_DISCOUNT_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new price plan discount!';
$lang['NRS_PRICE_PLAN_DISCOUNT_INSERTED_TEXT'] = 'Completed: New price plan discount has been added successfully!';
$lang['NRS_PRICE_PLAN_DISCOUNT_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing price plan discount. No rows were deleted from database!';
$lang['NRS_PRICE_PLAN_DISCOUNT_DELETED_TEXT'] = 'Completed: Price plan discount has been deleted successfully!';

// OK / Error Messages - Email Element
$lang['NRS_EMAIL_DEMO_LOCATION_NAME_TEXT'] = 'Demo Location';
$lang['NRS_EMAIL_DEMO_LOCATION_PHONE_TEXT'] = '+1 600 10000';
$lang['NRS_EMAIL_DEMO_LOCATION_EMAIL_TEXT'] = 'info@location.com';
$lang['NRS_EMAIL_SUBJECT_EXISTS_ERROR_TEXT'] = 'Error: Other email already exist with this subject!';
$lang['NRS_EMAIL_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing email!';
$lang['NRS_EMAIL_UPDATED_TEXT'] = 'Completed: Email has been updated successfully!';
$lang['NRS_EMAIL_REGISTERED_TEXT'] = 'Email subject and body registered for translation.';
$lang['NRS_EMAIL_SENDING_ERROR_TEXT'] = 'Failed: System was unable to send the email to %s!';
$lang['NRS_EMAIL_SENT_TEXT'] = 'Completed: Email was sent successfully to %s!';

// OK / Error Messages - Extra Element
$lang['NRS_EXTRA_SKU_EXISTS_ERROR_TEXT'] = 'Error: Extra with this stock keeping unit (SKU) already exist!';
$lang['NRS_EXTRA_MORE_UNITS_PER_BOOKING_THAN_IN_STOCK_ERROR_TEXT'] = 'Error: You can&#39;t allow to reserve more extra units per one reservation than you have in stack!';
$lang['NRS_EXTRA_ITEM_DOES_NOT_EXIST_ERROR_TEXT'] = 'Error: Selected car does not exist!';
$lang['NRS_EXTRA_ITEM_ASSIGN_ERROR_TEXT'] = 'Error: You are not allowed to assign extras to that car!';
$lang['NRS_EXTRA_ITEM_SELECT_ERROR_TEXT'] = 'Error: Please select a car!';
$lang['NRS_EXTRA_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing extra!';
$lang['NRS_EXTRA_UPDATED_TEXT'] = 'Completed: Extra has been updated successfully!';
$lang['NRS_EXTRA_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new extra!';
$lang['NRS_EXTRA_INSERTED_TEXT'] = 'Completed: New extra has been added successfully!';
$lang['NRS_EXTRA_REGISTERED_TEXT'] = 'Extra name registered for translation.';
$lang['NRS_EXTRA_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing extra. No rows were deleted from database!';
$lang['NRS_EXTRA_DELETED_TEXT'] = 'Completed: Extra has been deleted successfully!';

// OK / Error Messages - Feature Element
$lang['NRS_FEATURE_TITLE_EXISTS_ERROR_TEXT'] = 'Error: Feature with this title already exists!';
$lang['NRS_FEATURE_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing feature!';
$lang['NRS_FEATURE_UPDATED_TEXT'] = 'Completed: Feature has been updated successfully!';
$lang['NRS_FEATURE_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new feature!';
$lang['NRS_FEATURE_INSERTED_TEXT'] = 'Completed: New feature has been added successfully!';
$lang['NRS_FEATURE_REGISTERED_TEXT'] = 'Feature title registered for translation.';
$lang['NRS_FEATURE_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing feature. No rows were deleted from database!';
$lang['NRS_FEATURE_DELETED_TEXT'] = 'Completed: Feature has been deleted successfully!';

// OK / Error Messages - Fuel Type Element
$lang['NRS_FUEL_TYPE_TITLE_EXISTS_ERROR_TEXT'] = 'Error: Fuel type with this title already exists!';
$lang['NRS_FUEL_TYPE_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing fuel type!';
$lang['NRS_FUEL_TYPE_UPDATED_TEXT'] = 'Completed: Fuel type has been updated successfully!';
$lang['NRS_FUEL_TYPE_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new fuel type!';
$lang['NRS_FUEL_TYPE_INSERTED_TEXT'] = 'Completed: New fuel type has been added successfully!';
$lang['NRS_FUEL_TYPE_REGISTERED_TEXT'] = 'Fuel type title registered for translation.';
$lang['NRS_FUEL_TYPE_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing fuel type. No rows were deleted from database!';
$lang['NRS_FUEL_TYPE_DELETED_TEXT'] = 'Completed: Fuel type has been deleted successfully!';

// OK / Error Messages - Install Element
$lang['NRS_INSTALL_INSERT_ERROR_TEXT'] = 'Error on blog #%s: MySQL insert error in new installation!';
$lang['NRS_INSTALL_INSERTED_TEXT'] = 'Completed on blog #%s: Installation data has been inserted successfully!';
$lang['NRS_INSTALL_REPLACE_ERROR_TEXT'] = 'Error on blog #%s: MySQL replace error for installation data!';
$lang['NRS_INSTALL_REPLACED_TEXT'] = 'Completed on blog #%s: Installation data has been replaced successfully!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_EXTENSION_TABLE_CREATE_ERROR_TEXT'] = 'Error on blog #%s: MySQL extension table creation query could not be processed for &#39;%s&#39; table!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_EXTENSION_TABLE_DROP_ERROR_TEXT'] = 'Error on blog #%s: MySQL extension table drop query could not be processed for tables:&#39;%s&#39;!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_WP_TABLE_INSERT_ERROR_TEXT'] = 'Error on blog #%s: MySQL WordPress table insert query could not be processed for &#39;%s&#39; table!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_EXTENSION_TABLE_INSERT_ERROR_TEXT'] = 'Error on blog #%s: MySQL extension table insert query could not be processed in &#39;%s&#39; table!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_WP_TABLE_REPLACE_ERROR_TEXT'] = 'Error on blog #%s: MySQL WordPress table replace query could not be processed in &#39;%s&#39; table!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_EXTENSION_TABLE_REPLACE_ERROR_TEXT'] = 'Error on blog #%s: MySQL extension table replace query could not be processed in &#39;%s&#39; table!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_WP_TABLE_DELETE_ERROR_TEXT'] = 'Error on blog #%s: MySQL WordPress delete table content query could not be processed in &#39;%s&#39; table!';
$lang['NRS_INSTALL_QUERY_FAILED_FOR_EXTENSION_TABLE_DELETE_ERROR_TEXT'] = 'Error on blog #%s: MySQL extension delete table content query could not be processed for &#39;%s&#39; table!';

// Install Element
$lang['NRS_INSTALL_DEFAULT_COMPANY_NAME_TEXT'] = 'Car Rental Company';
$lang['NRS_INSTALL_DEFAULT_COMPANY_STREET_ADDRESS_TEXT'] = '625 2nd Street';
$lang['NRS_INSTALL_DEFAULT_COMPANY_CITY_TEXT'] = 'San Francisco';
$lang['NRS_INSTALL_DEFAULT_COMPANY_STATE_TEXT'] = 'CA';
$lang['NRS_INSTALL_DEFAULT_COMPANY_ZIP_CODE_TEXT'] = '94107';
$lang['NRS_INSTALL_DEFAULT_COMPANY_COUNTRY_TEXT'] = '';
$lang['NRS_INSTALL_DEFAULT_COMPANY_PHONE_TEXT'] = '(450) 600 4000';
$lang['NRS_INSTALL_DEFAULT_COMPANY_EMAIL_TEXT'] = 'info@yourdomain.com';
$lang['NRS_INSTALL_DEFAULT_PAGE_URL_SLUG_TEXT'] = 'car-rental'; // Latin letters only
$lang['NRS_INSTALL_DEFAULT_ITEM_URL_SLUG_TEXT'] = 'car'; // Latin letters only
$lang['NRS_INSTALL_DEFAULT_LOCATION_URL_SLUG_TEXT'] = 'car-location'; // Latin letters only
$lang['NRS_INSTALL_DEFAULT_SEARCH_PAGE_URL_SLUG_TEXT'] = 'search'; // Latin letters only
$lang['NRS_INSTALL_DEFAULT_CANCELLED_PAYMENT_PAGE_TITLE_TEXT'] = 'Payment cancelled';
$lang['NRS_INSTALL_DEFAULT_CANCELLED_PAYMENT_PAGE_CONTENT_TEXT'] = 'Payment was cancelled. Your reservation were not confirmed.';
$lang['NRS_INSTALL_DEFAULT_CONFIRMATION_PAGE_TITLE_TEXT'] = 'Reservation confirmed';
$lang['NRS_INSTALL_DEFAULT_CONFIRMATION_PAGE_CONTENT_TEXT'] = 'Thank you. We received your payment. Your reservation is now confirmed.';
$lang['NRS_INSTALL_DEFAULT_TERMS_AND_CONDITIONS_PAGE_TITLE_TEXT'] = 'شروط الاستخدام لتأجير السيارات';
$lang['NRS_INSTALL_DEFAULT_TERMS_AND_CONDITIONS_PAGE_CONTENT_TEXT'] = 'يجب اتباع المبادئ التوجيهية اند. حيث لتأجير السيارات العادية';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_PAYPAL_TEXT'] = 'اون لاين - باي بال';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_PAYPAL_DESCRIPTION_TEXT'] = 'Secure Instant Payment';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_STRIPE_TEXT'] = 'Credit Card (via Stripe.com)';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_BANK_TEXT'] = 'نقل البنك';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_BANK_DETAILS_TEXT'] = 'معلوماتك بنك';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_PAY_OVER_THE_PHONE_TEXT'] = 'الدفع عبر الهاتف';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_PAY_ON_ARRIVAL_TEXT'] = 'الدفع في البيك اب';
$lang['NRS_INSTALL_DEFAULT_PAYMENT_METHOD_PAY_ON_ARRIVAL_DETAILS_TEXT'] = 'بطاقة الائتمان مطلوبة';
$lang['NRS_INSTALL_DEFAULT_DEAR_TEXT'] = 'عزيزي';
$lang['NRS_INSTALL_DEFAULT_REGARDS_TEXT'] = 'تحياتي';
$lang['NRS_INSTALL_DEFAULT_EMAIL_TITLE_BOOKING_DETAILS_TEXT'] = 'Reservation details - no. [BOOKING_CODE]';
$lang['NRS_INSTALL_DEFAULT_EMAIL_TITLE_BOOKING_CONFIRMED_TEXT'] = 'Reservation no. [BOOKING_CODE] - confirmed';
$lang['NRS_INSTALL_DEFAULT_EMAIL_TITLE_BOOKING_CANCELLED_TEXT'] = 'Reservation no. [BOOKING_CODE] - cancelled';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_TITLE_BOOKING_DETAILS_TEXT'] = 'Notification: new reservation - [BOOKING_CODE]';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_TITLE_BOOKING_CONFIRMED_TEXT'] = 'Notification: reservation paid - [BOOKING_CODE]';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_TITLE_BOOKING_CANCELLED_TEXT'] = 'Notification: reservation cancelled - [BOOKING_CODE]';
$lang['NRS_INSTALL_DEFAULT_EMAIL_BODY_BOOKING_RECEIVED_TEXT'] = 'Your reservation details were received.';
$lang['NRS_INSTALL_DEFAULT_EMAIL_BODY_BOOKING_DETAILS_TEXT'] = 'Your reservation details:';
$lang['NRS_INSTALL_DEFAULT_EMAIL_BODY_PAYMENT_RECEIVED_TEXT'] = 'We received your payment. Your reservation is now confirmed.';
$lang['NRS_INSTALL_DEFAULT_EMAIL_BODY_BOOKING_CANCELLED_TEXT'] = 'Your reservation no. [BOOKING_CODE] were cancelled.';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_BODY_BOOKING_RECEIVED_TEXT'] = 'New reservation no. [BOOKING_CODE] received from [CUSTOMER_NAME].';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_BODY_BOOKING_DETAILS_TEXT'] = 'Reservation details:';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_BODY_BOOKING_PAID_TEXT'] = 'Reservation no. [BOOKING_CODE] was recently paid by [CUSTOMER_NAME].';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_BODY_BOOKING_CANCELLED_TEXT'] = 'Reservation no. [BOOKING_CODE] for [CUSTOMER_NAME] was recently cancelled.';
$lang['NRS_INSTALL_DEFAULT_NOTIFICATION_EMAIL_BODY_CANCELLED_BOOKING_DETAILS_TEXT'] = 'Details of reservation, which were cancelled:';

// OK / Error Messages - Invoice Element
$lang['NRS_INVOICE_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing invoice!';
$lang['NRS_INVOICE_UPDATED_TEXT'] = 'Completed: Invoice has been updated successfully!';
$lang['NRS_INVOICE_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new invoice!';
$lang['NRS_INVOICE_INSERTED_TEXT'] = 'Completed: Invoice has been added successfully!';
$lang['NRS_INVOICE_APPEND_ERROR_TEXT'] = 'Error: MySQL update error when trying to append the existing invoice. No rows were updated in database!';
$lang['NRS_INVOICE_APPENDED_TEXT'] = 'Completed: Invoice has been appended successfully!';
$lang['NRS_INVOICE_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing invoice. No rows were deleted from database!';
$lang['NRS_INVOICE_DELETED_TEXT'] = 'Completed: Invoice has been deleted successfully!';

// OK / Error Messages - Item Element
$lang['NRS_ITEM_SKU_EXISTS_ERROR_TEXT'] = 'Error: Car with this stock keeping unit (SKU) already exist!';
$lang['NRS_ITEM_MORE_UNITS_PER_BOOKING_THAN_IN_STOCK_ERROR_TEXT'] = 'Error: You can&#39;t allow to reserve more car units per one reservation than you have in garage!';
$lang['NRS_ITEM_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing car!';
$lang['NRS_ITEM_UPDATED_TEXT'] = 'Completed: Car details has been updated successfully!';
$lang['NRS_ITEM_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new car!';
$lang['NRS_ITEM_INSERTED_TEXT'] = 'Completed: New car has been added successfully!';
$lang['NRS_ITEM_REGISTERED_TEXT'] = 'Car model name registered for translation.';
$lang['NRS_ITEM_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing car. No rows were deleted from database!';
$lang['NRS_ITEM_DELETED_TEXT'] = 'Completed: Car has been deleted successfully!';

// OK / Error Messages - Location Element
$lang['NRS_LOCATION_CODE_EXISTS_ERROR_TEXT'] = 'Error: Location with this code already exists!';
$lang['NRS_LOCATION_NAME_EXISTS_ERROR_TEXT'] = 'Error: Location with this name already exists!';
$lang['NRS_LOCATION_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing location!';
$lang['NRS_LOCATION_UPDATED_TEXT'] = 'Completed: Location has been updated successfully!';
$lang['NRS_LOCATION_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new location!';
$lang['NRS_LOCATION_INSERTED_TEXT'] = 'Completed: New location has been added successfully!';
$lang['NRS_LOCATION_REGISTERED_TEXT'] = 'Location name registered for translation.';
$lang['NRS_LOCATION_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing location. No rows were deleted from database!';
$lang['NRS_LOCATION_DELETED_TEXT'] = 'Completed: Location has been deleted successfully!';

// OK / Error Messages - Manufacturer Element
$lang['NRS_MANUFACTURER_TITLE_EXISTS_ERROR_TEXT'] = 'Error: Manufacturer with this title already exists!';
$lang['NRS_MANUFACTURER_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing manufacturer!';
$lang['NRS_MANUFACTURER_UPDATED_TEXT'] = 'Completed: Manufacturer has been updated successfully!';
$lang['NRS_MANUFACTURER_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new manufacturer!';
$lang['NRS_MANUFACTURER_INSERTED_TEXT'] = 'Completed: New manufacturer has been added successfully!';
$lang['NRS_MANUFACTURER_REGISTERED_TEXT'] = 'Manufacturer title registered for translation.';
$lang['NRS_MANUFACTURER_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing manufacturer. No rows were deleted from database!';
$lang['NRS_MANUFACTURER_DELETED_TEXT'] = 'Completed: Manufacturer has been deleted successfully!';

// OK / Error Messages - (Extra) Option Element
$lang['NRS_EXTRA_OPTION_PLEASE_SELECT_ERROR_TEXT'] = 'Error: Please select an extra!';
$lang['NRS_EXTRA_OPTION_NAME_EXISTS_ERROR_TEXT'] = 'Error: Option with chosen name already exists for this extra!';
$lang['NRS_EXTRA_OPTION_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing extra option!';
$lang['NRS_EXTRA_OPTION_UPDATED_TEXT'] = 'Completed: Extra option has been updated successfully!';
$lang['NRS_EXTRA_OPTION_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new extra option!';
$lang['NRS_EXTRA_OPTION_INSERTED_TEXT'] = 'Completed: New extra option has been added successfully!';
$lang['NRS_EXTRA_OPTION_REGISTERED_TEXT'] = 'Extra option name registered for translation.';
$lang['NRS_EXTRA_OPTION_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing extra option. No rows were deleted from database!';
$lang['NRS_EXTRA_OPTION_DELETED_TEXT'] = 'Completed: Extra option has been deleted successfully!';

// OK / Error Messages - (Item) Option Element
$lang['NRS_ITEM_OPTION_PLEASE_SELECT_ERROR_TEXT'] = 'Error: Please select a car!';
$lang['NRS_ITEM_OPTION_NAME_EXISTS_ERROR_TEXT'] = 'Error: Option with chosen name already exists for this car!';
$lang['NRS_ITEM_OPTION_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing car option!';
$lang['NRS_ITEM_OPTION_UPDATED_TEXT'] = 'Completed: Car option has been updated successfully!';
$lang['NRS_ITEM_OPTION_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new car option!';
$lang['NRS_ITEM_OPTION_INSERTED_TEXT'] = 'Completed: New car option has been added successfully!';
$lang['NRS_ITEM_OPTION_REGISTERED_TEXT'] = 'Car option name registered for translation.';
$lang['NRS_ITEM_OPTION_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing car option. No rows were deleted from database!';
$lang['NRS_ITEM_OPTION_DELETED_TEXT'] = 'Completed: Car option has been deleted successfully!';

// OK / Error Messages - Payment Method Element
$lang['NRS_PAYMENT_METHOD_CODE_EXISTS_ERROR_TEXT'] = 'Error: Payment method with this code already exist!';
$lang['NRS_PAYMENT_METHOD_INVALID_NAME_TEXT'] = 'Error: Please enter valid payment method name!';
$lang['NRS_PAYMENT_METHOD_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing payment method!';
$lang['NRS_PAYMENT_METHOD_UPDATED_TEXT'] = 'Completed: Payment method has been updated successfully!';
$lang['NRS_PAYMENT_METHOD_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new payment method!';
$lang['NRS_PAYMENT_METHOD_INSERTED_TEXT'] = 'Completed: New payment method has been added successfully!';
$lang['NRS_PAYMENT_METHOD_REGISTERED_TEXT'] = 'Payment method name and description registered for translation.';
$lang['NRS_PAYMENT_METHOD_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing payment method. No rows were deleted from database!';
$lang['NRS_PAYMENT_METHOD_DELETED_TEXT'] = 'Completed: Payment method has been deleted successfully!';

// OK / Error Messages - Prepayment Element
$lang['NRS_PREPAYMENT_DAYS_INTERSECTION_ERROR_TEXT'] = 'Error: Prepayment plan days range intersects other prepayment plan!';
$lang['NRS_PREPAYMENT_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing prepayment plan!';
$lang['NRS_PREPAYMENT_UPDATED_TEXT'] = 'Completed: Prepayment plan has been updated successfully!';
$lang['NRS_PREPAYMENT_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new prepayment plan!';
$lang['NRS_PREPAYMENT_INSERTED_TEXT'] = 'Completed: New prepayment plan has been added successfully!';
$lang['NRS_PREPAYMENT_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing prepayment plan. No rows were deleted from database!';
$lang['NRS_PREPAYMENT_DELETED_TEXT'] = 'Completed: Prepayment plan has been deleted successfully!';

// OK / Error Messages - Price Group Element
$lang['NRS_PRICE_GROUP_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing price group!';
$lang['NRS_PRICE_GROUP_UPDATED_TEXT'] = 'Completed: Price group has been updated successfully!';
$lang['NRS_PRICE_GROUP_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new price group!';
$lang['NRS_PRICE_GROUP_INSERTED_TEXT'] = 'Completed: New price group has been added successfully!';
$lang['NRS_PRICE_GROUP_REGISTERED_TEXT'] = 'Price group name registered for translation.';
$lang['NRS_PRICE_GROUP_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing price group. No rows were deleted from database!';
$lang['NRS_PRICE_GROUP_DELETED_TEXT'] = 'Completed: Price group has been deleted successfully!';

// OK / Error Messages - Price Plan Element
$lang['NRS_PRICE_PLAN_LATER_DATE_ERROR_TEXT'] = 'Error: Start date can&#39;t be later or equal than end date!';
$lang['NRS_PRICE_PLAN_INVALID_PRICE_GROUP_ERROR_TEXT'] = 'Error: Please select valid price group!';
$lang['NRS_PRICE_PLAN_EXISTS_FOR_DATE_RANGE_ERROR_TEXT'] = 'Error: There is an existing price plan for this date range without coupon code or with same coupon code!';
$lang['NRS_PRICE_PLAN_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing price plan!';
$lang['NRS_PRICE_PLAN_UPDATED_TEXT'] = 'Completed: Price plan has been updated successfully!';
$lang['NRS_PRICE_PLAN_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new price plan!';
$lang['NRS_PRICE_PLAN_INSERTED_TEXT'] = 'Completed: New price plan has been added successfully!';
$lang['NRS_PRICE_PLAN_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing price plan. No rows were deleted from database!';
$lang['NRS_PRICE_PLAN_DELETED_TEXT'] = 'Completed: Price plan has been deleted successfully!';

// OK / Error Messages - Tax Element
$lang['NRS_TAX_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing tax!';
$lang['NRS_TAX_UPDATED_TEXT'] = 'Completed: Tax has been updated successfully!';
$lang['NRS_TAX_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new tax!';
$lang['NRS_TAX_INSERTED_TEXT'] = 'Completed: New tax has been added successfully!';
$lang['NRS_TAX_REGISTERED_TEXT'] = 'Tax name registered for translation.';
$lang['NRS_TAX_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing tax. No rows were deleted from database!';
$lang['NRS_TAX_DELETED_TEXT'] = 'Completed: Tax has been deleted successfully!';

// OK / Error Messages - Transmission Type Element
$lang['NRS_TRANSMISSION_TYPE_TITLE_EXISTS_ERROR_TEXT'] = 'Error: Transmission type with this title already exists!';
$lang['NRS_TRANSMISSION_TYPE_UPDATE_ERROR_TEXT'] = 'Error: MySQL update error for existing transmission type!';
$lang['NRS_TRANSMISSION_TYPE_UPDATED_TEXT'] = 'Completed: Transmission type has been updated successfully!';
$lang['NRS_TRANSMISSION_TYPE_INSERT_ERROR_TEXT'] = 'Error: MySQL insert error for new transmission type!';
$lang['NRS_TRANSMISSION_TYPE_INSERTED_TEXT'] = 'Completed: New transmission type has been added successfully!';
$lang['NRS_TRANSMISSION_TYPE_REGISTERED_TEXT'] = 'Transmission type title registered for translation.';
$lang['NRS_TRANSMISSION_TYPE_DELETE_ERROR_TEXT'] = 'Error: MySQL delete error for existing transmission type. No rows were deleted from database!';
$lang['NRS_TRANSMISSION_TYPE_DELETED_TEXT'] = 'Completed: Transmission type has been deleted successfully!';

// OK / Error Messages - (Database) Update
$lang['NRS_DATABASE_UPDATE_EARLY_STRUCTURE_ALTER_ERROR_TEXT'] = 'Error on blog #%s: MySQL alter error for plugin early structure!';
$lang['NRS_DATABASE_UPDATE_EARLY_STRUCTURE_ALTERED_TEXT'] = 'Completed on blog #%s: Plugin early structure has been altered successfully!';
$lang['NRS_DATABASE_UPDATE_LATE_STRUCTURE_ALTER_ERROR_TEXT'] = 'Error on blog #%s: MySQL alter error for plugin late structure!';
$lang['NRS_DATABASE_UPDATE_LATE_STRUCTURE_ALTERED_TEXT'] = 'Completed on blog #%s: Plugin late structure has been altered successfully!';
$lang['NRS_DATABASE_UPDATE_DATA_UPDATE_ERROR_TEXT'] = 'Error on blog #%s: MySQL update error for plugin data!';
$lang['NRS_DATABASE_UPDATE_DATA_UPDATED_TEXT'] = 'Completed on blog #%s: Plugin data has been updated successfully!';
$lang['NRS_DATABASE_UPDATE_QUERY_FAILED_FOR_TABLE_ERROR_TEXT'] = 'Error on blog #%s: MySQL query could not be processed in &#39;%s&#39; table at counter #%s!';
$lang['NRS_DATABASE_UPDATE_VERSION_UPDATE_ERROR_TEXT'] = 'Error on blog #%s: MySQL update error for plugin database version!';
$lang['NRS_DATABASE_UPDATE_VERSION_UPDATED_TEXT'] = 'Completed on blog #%s: Plugin database version has been updated to %s!';
$lang['NRS_DATABASE_UPDATE_NOT_ALLOWED_ERROR_TEXT'] = 'Failed: You are not allowed to update. You either already updated the plugin, 
or you have plugin version older than 4.0 (in that case please install 4.X plugin version first).';
$lang['NRS_DATABASE_UPDATE_UPGRADE_NOT_ALLOWED_ERROR_TEXT'] = 'Failed: You are not allowed to upgrade. You either already upgraded the plugin, 
or you have plugin version older than 4.0 (in that case please install 4.X plugin version first).';
$lang['NRS_DATABASE_UPDATE_NETWORK_UPDATE_NOT_ALLOWED_ERROR_TEXT'] = 'Failed: You are not allowed to network-update. You either already updated the plugin, 
or you have plugin version older than 4.0 (in that case please install 4.X plugin version first).';
$lang['NRS_DATABASE_UPDATE_NETWORK_UPGRADE_NOT_ALLOWED_ERROR_TEXT'] = 'Failed: You are not allowed to network-upgrade. You either already upgraded the plugin, 
or you have plugin version older than 4.0 (in that case please install 4.X plugin version first).';