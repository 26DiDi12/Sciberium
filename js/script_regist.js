
function validateEmail(email) {
    var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email);
}

function validate() {
    var $result = $("#result");
    var email = $("#email").val();
    console.log($result.text());
    $result.text("");

    if (validateEmail(email)) {
        console.log(email + " подтвержден.");
        $result.text(email + " подтвержден.");
    } else {
        console.log(email + " не подтвержден.");
        $result.text(email + " не подтвержден.");
    }
    return false;
}

$("#validate").bind("click", validate);

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