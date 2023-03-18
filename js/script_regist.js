function register_validate() {

    var $result = $("#register_result");
    var email_pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var phone_pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var name = document.getElementById('register_name');
    var email = document.getElementById('register_email');
    var phone = document.getElementById('register_phone');
    var pass = document.getElementById('register_pass');
    $result.text("");

    if (name.value == '') {
        $result.text("Введите имя");
        return false;
    } else {
        $result.text('');
    }

    if (email.value.match(email_pattern)) {
        $result.text('');
    }
    else {
        $result.text("Введите корректный адрес почты");
        return false;
    }

    if (phone.value.match(phone_pattern)) {
        $result.text('');
    }
    else {
        $result.text("Введите корректный номер телефона");
        return false;
    }

    if (pass.value == '') {
        $result.text("Введите пароль");
        return false;
    } else {
        $result.text('');
    }

}

$("#register_validate").bind("click", register_validate);

document.getElementById('login_btn_num6').addEventListener('click', function () {
    if (document.querySelector('.register_box').classList[1] == 'hell') {
        console.log(document.querySelector('.register_box').classList[1]);
        document.getElementById('register_btn_num1').classList.remove('active');
        document.getElementById('register_btn_num2').classList.remove('active');
        document.getElementById('register_btn_num3').classList.remove('active');
        document.getElementById('register_btn_num4').classList.remove('active');
        document.getElementById('register-title').classList.remove('active');
        document.querySelector('.register_box').classList.remove('active');
        document.querySelector('.register_box').classList.remove('hell');
        document.querySelector('.register_step_two').classList.remove('active');
        document.querySelector('.login_box').classList.remove('active');
    } else {
        console.log(document.querySelector('.register_box').classList[1]);
        document.getElementById('register_btn_num1').classList.remove('active');
        document.getElementById('register_btn_num2').classList.remove('active');
        document.getElementById('register_btn_num3').classList.remove('active');
        document.getElementById('register_btn_num4').classList.remove('active');
        document.getElementById('register-title').classList.remove('active');
        document.querySelector('.register_box').classList.remove('active');
        document.querySelector('.register_box').classList.remove('hell');
        document.querySelector('.register_step_two').classList.remove('active');
        document.querySelector('.login_box').classList.remove('active');
    }
})

document.getElementById('register_btn_num5').addEventListener('click', function () {
    document.getElementById('register_btn_num1').classList.add('active');
    document.getElementById('register_btn_num2').classList.add('active');
    document.getElementById('register_btn_num3').classList.add('active');
    document.getElementById('register_btn_num4').classList.add('active');
    document.getElementById('register-title').classList.add('active');
    document.querySelector('.register_box').classList.add('hell');
    document.querySelector('.register_step_two').classList.remove('active');
    document.querySelector('.login_box').classList.add('active');
})
document.getElementById('register_btn_num4').addEventListener('click', function () {
    document.getElementById('register_btn_num1').classList.add('active');
    document.getElementById('register_btn_num2').classList.add('active');
    document.getElementById('register_btn_num3').classList.add('active');
    document.getElementById('register_btn_num4').classList.add('active');
    document.getElementById('register-title').classList.add('active');
    document.querySelector('.register_box').classList.add('hell');
    document.querySelector('.register_step_two').classList.remove('active');
    document.querySelector('.login_box').classList.add('active');
})

document.getElementById('register_btn_num1').addEventListener('click', function () {
    document.getElementById('register_btn_num1').classList.add('active');
    document.getElementById('register_btn_num2').classList.add('active');
    document.getElementById('register_btn_num3').classList.add('active');
    document.getElementById('register_btn_num4').classList.add('active');
    document.querySelector('.register_box').classList.add('active');
    document.querySelector('.register_step_two').classList.add('active');
})
document.getElementById('register_btn_num2').addEventListener('click', function () {
    document.getElementById('register_btn_num1').classList.add('active');
    document.getElementById('register_btn_num2').classList.add('active');
    document.getElementById('register_btn_num3').classList.add('active');
    document.getElementById('register_btn_num4').classList.add('active');
    document.querySelector('.register_box').classList.add('active');
    document.querySelector('.register_step_two').classList.add('active');
})
document.getElementById('register_btn_num3').addEventListener('click', function () {
    document.getElementById('register_btn_num1').classList.add('active');
    document.getElementById('register_btn_num2').classList.add('active');
    document.getElementById('register_btn_num3').classList.add('active');
    document.getElementById('register_btn_num4').classList.add('active');
    document.querySelector('.register_box').classList.add('active');
    document.querySelector('.register_step_two').classList.add('active');
})