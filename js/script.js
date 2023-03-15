const profileBtn = document.querySelector('.avatar-btn');
const ProfileName = document.querySelector('.avatar_name');

const windowBtn = document.getElementById('registr_id');
const windowGBtn = document.getElementById('geolocation_id');
const windowGeoBtn = document.querySelector('.geoloc');
const windowClose = document.querySelector('.window_item_crest');
const windowGeoClose = document.querySelector('.window_item_crest_geo');
const signInBtn = document.querySelector('.siginbtn-down');
const signInForm = document.querySelector('.form-signin');
const signUpBtn = document.querySelector('.regbtn-down');
const signUpForm = document.querySelector('.form-signup');
const formBox = document.querySelector('.reg-block');

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

if (ProfileName.textContent == "Гость") {

    document.getElementById('gray_bgreg').addEventListener('click', function () {
        document.getElementById('registr_id').classList.remove('active');
        document.getElementById('gray_bgreg').classList.remove('active');
    })
    profileBtn.addEventListener('click', function () {
        document.getElementById('registr_id').classList.add('active');
        document.getElementById('gray_bgreg').classList.add('active');
    })

} else {

    document.getElementById('gray_bgreg_profile').addEventListener('click', function () {
        document.getElementById('profile_id').classList.remove('active');
        document.getElementById('gray_bgreg_profile').classList.remove('active');
    })
    profileBtn.addEventListener('click', function () {
        document.getElementById('profile_id').classList.add('active');
        document.getElementById('gray_bgreg_profile').classList.add('active');
    })

}

console.log(ProfileName.textContent);

// let filter = function () {
//     let input = document.getElementById('input');

//     input.addEventListener('keyup', function () {
//         let filter = input.value.toLowerCase(),
//             filterItems = document.querySelectorAll('#list li');

//         filterItems.forEach(item => {
//             if (item.innerHTML.toLowerCase().indexOf(filter) > -1) {
//                 item.style.display = '';
//             } else {
//                 item.style.display = 'none';
//             }
//         })

//     })

// };

// filter();

// document.getElementById('gray_bggeo').addEventListener('click', function () {
//     windowGBtn.classList.remove('active');
//     document.getElementById('gray_bggeo').classList.remove('active');
// })


signInBtn.classList.add('active');
signInForm.classList.add('active');

signUpBtn.addEventListener('click', function () {
    signUpForm.classList.add('active');
    signUpBtn.classList.add('active');
    signInForm.classList.remove('active');
    signInBtn.classList.remove('active');
})
signInBtn.addEventListener('click', function () {
    signInForm.classList.add('active');
    signInBtn.classList.add('active');
    signUpBtn.classList.remove('active');
    signUpForm.classList.remove('active');
})

// function textgeo(state) {

//     document.getElementById('geolocation').textContent = state;
//     windowGBtn.classList.remove('active');
//     document.getElementById('gray_bggeo').classList.remove('active');

// }