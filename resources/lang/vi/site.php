<?php

return [
    'language' => [
        'title' => 'Quản lý ngôn ngữ',
        'name' => 'Tên',
        'code' => 'Mã',
        'default' => 'Mặc định',	
        'confirm' => 'Bạn có muốn xoá?',
        'name_lang' => 'Tên ngôn ngữ',
        'slug_lang' => 'Tên đường dẫn',
        'code_lang' => 'Mã ngôn ngữ',
        'status_lang' => 'Tình trạng',
        'default_lang' => 'Mặc định',
        'flag_lang' => "Mã hình",
        'not_delete' => "Bạn không thể xoá vì ngôn ngữ phải tồn tại ít nhất 1",
        'validation' => [
            'name_required' => "Tên không được để trống",
            'slug_required' => "Đường dẫn không được để trống",
            'code_required' => "Mã ngôn ngữ không được để trống",
            'flag_required' => "Mã hình không được để trống",
        ],
    ],
    'admin'=>[
        'confirm' => 'Bạn có muốn xoá?',
        'title'=>'Quản Lý Admin',
        'name' => 'Tên',
        'email'=>'Email',
        'password'=>'Mật Khẩu',
        'phone'=>'Số điện thoại',
        'image' => 'Hình đại diện',
        'not_delete' => "Bạn không thể xoá vì tài khoản quản trị phải tồn tại ít nhất 1",
        'profile' => "Chỉnh sửa hồ sơ",
        'change_pass' => 'Thay đổi mật khẩu',
        'confirm_password' => 'Mật khẩu xác thực',
        'old_password' => 'Mật khẩu cũ',
        'new_password' => 'Mật khẩu mới',
        'validation' => [
            'email_exist' => 'Email này đã tồn tại',
            'email_not_empty' => 'Email không được để trống',
            'name_exist' => 'Tên này đã tồn tại',
            'name_not_empty' => 'Tên không được để trống',
            'phone_regex' => 'Số điện thoại không đúng định dạng',
            'phone_unique' => 'Số điện thoại đã được sử dụng',
            'phone_min' => 'Số điện thoại không đúng định dạng',
            'image_mimes' => 'Hình ảnh sai định dạng! Chỉ chấp nhận png, jpg, jpeg, gif',
            'image_max' => 'Hình ảnh không được lớn hơn 1MB',
            'old_password_not_empty' => "Nhập vào mật khẩu cũ",
            'new_password_not_empty' => "Nhập vào mật khẩu mới",
            'confirm_password_not_empty' => "Nhập vào mật khẩu xác thực",
            'same_password' => 'Mật khẩu xác thực không giống'
        ],
        'role' => 'Quyền truy cập',
        'alias_not_empty' => 'Đường dẫn không được để trống!'
    ],
    'page'=>[
        'title' => 'Quản lý trang',
        'name' => 'Tên trang',
        'detail' => "Nội dung chi tiết",
        'seo_title' => "Tiêu đề",
        'keyword' => "Từ khóa",
        'description' => "Nội dung mô tả",
        'email'=>'Email',
        'seo_note' => "Vui lòng nhập nội dung của tiêu đề, từ khóa, mô tả bởi vì nó hỗ trợ cho SEO",
        'avatar' => 'Hình ảnh',
        'status' => 'Trạng thái',
        'status_home' => 'Hiển thị trang chủ',
        'status_lock' => 'Khoá',
        'published_at' => 'Ngày hiển thị',
        'disabled_at' => 'Ngày tắt',
        'created_at' => 'Ngày tạo',
        'info' => 'Mô tả ngắn',
    ],
    'trademark'=>[
        'title' => 'Quản lý nhãn hiệu',
        'name' => 'Tên Nhãn hiệu',
        'logo' => 'Logo',
        'info' => 'Nội dung ngắn',
        'address' => 'Địa chỉ',
        'phone_number' => 'Số điện thoại',
        'created_at' => 'Ngày tạo',
    ],
    'blog'=>[
        'title' => 'Quản lý bài viết',
        'category' => [
            'name_cate' => 'Chuyên mục',
            'avatar' => 'Hình ảnh',
            'name' => 'Tên',
            'status' => 'Trạng thái',
            'status_home' => 'Hiển thị trang chủ',
            'status_lock' => 'Khoá',
            'published_at' => 'Ngày hiển thị',
            'disabled_at' => 'Ngày tắt',
            'created_at' => 'Ngày tạo',
            'info' => 'Mô tả ngắn',
            'parent' => 'Danh mục cha',
            'delete_error' => "Không được xóa do tồn tại menu con"
        ],
        'post' => [
            'name_menu' => 'Quản lý bài viết',
            'avatar' => 'Hình ảnh',
            'name' => 'Tên',
            'status' => 'Trạng thái',
            'status_home' => 'Hiển thị trang chủ',
            'status_lock' => 'Khoá',
            'published_at' => 'Ngày hiển thị',
            'disabled_at' => 'Ngày tắt',
            'created_at' => 'Ngày tạo',
            'info' => 'Mô tả ngắn',
            'category' => 'Danh mục',
            'user' => "Người đăng",
        ],
        'name' => 'Tên danh mục',
        'info' => 'Nội dung ngắn',
        'detail' => "Nội dung chi tiết",
        'seo_title' => "Tiêu đề",
        'keyword' => "Từ khóa",
        'description' => "Nội dung mô tả",
        'email'=>'Email',
        'seo_note' => "Vui lòng nhập nội dung của tiêu đề, từ khóa, mô tả bởi vì nó hỗ trợ cho SEO",
    ],
    'add' => 'Thêm mới',
    'enable' => 'Cho phép',
    'disable' => 'Không cho phép',
    'yes' => 'Có',
    'no' => 'Không',
    'trash' => 'Thùng rác',
    'published_at' => 'Ngày hiển thị',
    'disabled_at' => 'Ngày tắt',
    'created_at' => 'Ngày tạo',
    'status' => 'Trạng thái',
    'status_show_home' => 'Hiển thị trang chủ',
    'status_lock' => 'Khóa',
    'status_comment' => 'Bình luận',
    'dashboard' => 'Bảng điều khiển',
    'icon' => 'Mã icon',
    'slug' => 'Đường dẫn',
    'button_add' => "Thêm mới",
    'button_update' => "Cập nhập",
    'button_choose' => "Chọn",
    'button_remove' => "Xóa",
    'reset' => "Huỷ bỏ",
    'logout' => "Thoát",
    'image' => "Hình ảnh",
    'configuration' => 'Cấu hình',
    'main_content' => 'Nội dung chính',
    'setting' => 'Cài đặt',
    'choose' => 'Chọn',
    'sort' => 'Sắp xếp',
    'settings' => [
        'title' => 'Cài đặt',
        'meta_tag' => "Meta Tag",
        'tracking_code' => "Mã theo dõi",
        'seo_note' => "Vui lòng nhập nội dung của tiêu đề, từ khóa, mô tả bởi vì nó hỗ trợ cho SEO",
        'seo_title' => "Title",
        'keyword' => "Thẻ Meta keywords",
        'description' => "Thẻ  description",
        'meta' => "Thẻ Meta khác",
        'logo' => "Logo",
        'favicon' => "Favicon",
        'main_setting' => "Cài đặt chung",
        'social' => "Mạng xã hội"
    ],
    'message' => [
        'update_success' => "Cập nhật thành công!",
        'add_success' => "Thêm mới thành công!",
        'delete_success' => "Xoá thành công!",
        'error' => "Có lỗi xảy ra!",
        'wrong_password' => 'Mật khẩu hiện tại không chính xác!'
    ],
    'role' => [
        'name' => 'Vai trò',
        'title' => "Vai trò trên trang",
        'warning_delete_exists_user' => "Không thể xóa vì có tài khoản đang sử dụng"
    ],
    'permission' => [
        'manage' => 'Quản lý phân quyền',
        'name' => 'Quyền truy cập',
        'title' => "Quyền truy cập",
        'placeholder_name' => "Vui lòng nhập vào quyền truy cập",
        'slug' => "Mã truy cập",
        'slug_not_empty' => 'Mã liên kết không được để trống',
    ],
    'department' => [
        'title' => 'Quản lý phòng ban',
        'manage' => 'Quản lý phòng ban',
        'name' => 'Tên',
        'code' => 'Mã',
        'default' => 'Mặc định',
        'confirm' => 'Bạn có muốn xoá?',
        'not_delete' => "Bạn không thể xoá vì ngôn ngữ phải tồn tại ít nhất 1",
        'status' => 'Trạng thái',
        'validation' => [
            'name_required' => "Tên không được để trống",
            'slug_required' => "Đường dẫn không được để trống",
            'code_required' => "Mã ngôn ngữ không được để trống",
            'flag_required' => "Mã hình không được để trống",
        ],
    ],
    'social' => [
        'name' => 'Tên mạng xã hội',
        'url' => 'Đường dẫn',
        'icon' => 'Icon'
    ],
    'category'=>[
        'name'=>'Tên loại',
        'validation'=>[
            'name_not_empty'=>"Tên không được để trống"
        ]
    ],
    'food'=>[
        'name'=>'Tên món ăn',
        'detail'=>'Chi tiết món ăn',
        'price'=>'Giá món ăn',
        'validation'=>[
            'name_not_empty'=>'Tên món ăn không được trống',
            'detail_not_empty'=>'Chi tiết món ăn không được trống',
            'price_not_empty'=>'Giá không được để trống',
            'price_number'=>'Giá tiền phải là một số',
            'image_mimes' => 'Chỉ được upload file hình ảnh',
            'image_max' => 'Hình ảnh không quá 1GB'
        ]

    ],
    'order'=>[
        'name'=>'Tên người đặt hàng',
        'phone'=>'Số điện thoại',
        'address'=>'Địa chỉ nhận hàng',
        'note'=>'Ghi chú',
        'validation'=>[
            'name_not_empty'=>'Tên người đặt không được trống',
            'address_not_empty'=>'Địa chỉ không được để trống',
            'phone_not_empty'=>'Số điện thoại không được để trống',
            'phone_number'=>'Số điện thoại chỉ được bao gồm số',
            'quantity_not_empty'=>'Số lượng không được để trống',
            'quantity_number'=>'Số lượng phải là một số'
        ]
    ],
    'cuisine' => [
        'title' => 'Quản lý thực đơn',
        'name_cate_menu' => 'Chuyên mục',
        'name_ingretients_menu' => 'Nguyên liệu',
        'name_cuisine_menu' => 'Món ăn',
        'choose_menu' => 'Chọn danh mục',
        'avatar' => 'Hình ảnh món ăn',
        'name' => 'Tên món ăn',
        'info' => 'Giới thiệu ngắn',
        'detail' => 'Thông tin chi tiết',
        'note' => 'Ghi chú',
        'video' => 'Link video',
        'category' => [
            'name_cate' => 'Chuyên mục',
            'avatar' => 'Hình ảnh',
            'name' => 'Tên',
            'status' => 'Trạng thái',
            'status_home' => 'Hiển thị trang chủ',
            'status_lock' => 'Khoá',
            'published_at' => 'Ngày hiển thị',
            'disabled_at' => 'Ngày tắt',
            'created_at' => 'Ngày tạo',
            'info' => 'Mô tả ngắn',
            'parent' => 'Danh mục cha',
            'delete_error' => "Không được xóa do tồn tại chuyên mục con",
            'info_list' => 'Thông tin thêm'
        ],
        'post' => [
            'name_menu' => 'Quản lý bài viết',
            'avatar' => 'Hình ảnh',
            'name' => 'Tên',
            'status' => 'Trạng thái',
            'status_home' => 'Hiển thị trang chủ',
            'status_lock' => 'Khoá',
            'published_at' => 'Ngày hiển thị',
            'disabled_at' => 'Ngày tắt',
            'created_at' => 'Ngày tạo',
            'info' => 'Mô tả ngắn',
            'category' => 'Danh mục',
            'user' => "Người đăng",
        ],
    ],
    'search' => 'Tìm kiếm',
    'album' => 'Album ảnh',
    'main_info' => 'Thông tin chính',
    'more_info' => 'Thông tin thêm',
    'seo' => 'Thông tin SEO',
    'more_lang' => 'Thông tin thêm',
    'filter' => 'Lọc',
    'limit' => 'Hiển thị',
    'enable_2fa' => "Bật bảo mật 2 lớp",
    'disable_2fa' => "Tắt bảo mật 2 lớp",
    'note_2fa1' => "Bạn phải thiết lập ứng dụng Google Authenticator của mình trước khi sử dụng.",
    'note_2fa2' => "Bạn sẽ không thể đăng nhập nếu không xác thực",
    'note_2fa' => "Vui lòng dùng điện thoại quét mã hoặc sử dụng mã code",
    'complete' => "Hoàn tất",
    '2fa' => "Bảo mật tài khoản",
    'login' => "Đăng nhập",
    'reset_2fa' => "Reset dữ liệu",
    'active' => "Kích hoạt",
    'inactive' => "Hủy kích hoạt",
    'widget' => [
        'title' => 'Tiện ích',
        'name' => 'Tên',
        'slug' => 'Đường dẫn',
        'code' => 'Code',
        'status' => 'Trạng thái',
        'lock' => 'Khóa'
    ]
];
