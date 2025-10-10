toastr.options = {
  "closeButton": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "timeOut": "3000"
};

$(document).ready(function () {

    /*******************************
     * PAGE LOGIN, REGISTER
     *******************************/

    // Validate register form
    $("#register-form").submit(function (e) {
        e.preventDefault();

        let name = $('input[name="name"]').val().trim();
        let email = $('input[name="email"]').val().trim();
        let password = $('input[name="password"]').val();
        let confirmPassword = $('input[name="confirmPassword"]').val();
        let checkbox1 = $('input[name="checkbox1"]').is(':checked');
        let checkbox2 = $('input[name="checkbox2"]').is(':checked');

        let errorMessage = "";

        // Kiểm tra họ và tên
        if (name.length < 3) {
            errorMessage += "Họ và tên phải có ít nhất 3 ký tự.<br>";
        }

        // Kiểm tra email
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorMessage += "Email không hợp lệ.<br>";
        }

        // Kiểm tra mật khẩu
        if (password.length < 6) {
            errorMessage += "Mật khẩu phải có ít nhất 6 ký tự.<br>";
        }

        // Kiểm tra xác nhận mật khẩu
        if (password !== confirmPassword) {
            errorMessage += "Mật khẩu và xác nhận mật khẩu không khớp.<br>";
        }

        // Kiểm tra checkbox
        if (!checkbox1 || !checkbox2) {
            errorMessage += "Bạn phải đồng ý với Điều khoản dịch vụ.<br>";
        }

        // Nếu có lỗi thì hiển thị tất cả lỗi
        if (errorMessage !== "") {
            toastr.error(errorMessage);
            return; // dừng lại, không gửi form
        }

        // Nếu không có lỗi thì submit form
        this.submit();
    });

});
