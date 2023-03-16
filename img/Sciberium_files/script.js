const profileBtn = document.querySelector('.avatar-btn');
const ProfileName = document.querySelector('.avatar_name');

console.log(ProfileName.textContent);
if (ProfileName.textContent == "") { ProfileName.textContent = "Гость"; }
console.log(ProfileName.textContent);

//     document.getElementById('gray_bgreg').addEventListener('click', function () {
//         document.getElementById('registr_id').classList.remove('active');
//         document.getElementById('gray_bgreg').classList.remove('active');
//     })
//     profileBtn.addEventListener('click', function () {
//         document.getElementById('registr_id').classList.add('active');
//         document.getElementById('gray_bgreg').classList.add('active');
//     })

// } else {

//     document.getElementById('gray_bgreg_profile').addEventListener('click', function () {
//         document.getElementById('profile_id').classList.remove('active');
//         document.getElementById('gray_bgreg_profile').classList.remove('active');
//     })
//     profileBtn.addEventListener('click', function () {
//         document.getElementById('profile_id').classList.add('active');
//         document.getElementById('gray_bgreg_profile').classList.add('active');
//     })

// }

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


// signInBtn.classList.add('active');
// signInForm.classList.add('active');

// signUpBtn.addEventListener('click', function () {
//     signUpForm.classList.add('active');
//     signUpBtn.classList.add('active');
//     signInForm.classList.remove('active');
//     signInBtn.classList.remove('active');
// })
// signInBtn.addEventListener('click', function () {
//     signInForm.classList.add('active');
//     signInBtn.classList.add('active');
//     signUpBtn.classList.remove('active');
//     signUpForm.classList.remove('active');
// })

// function textgeo(state) {

//     document.getElementById('geolocation').textContent = state;
//     windowGBtn.classList.remove('active');
//     document.getElementById('gray_bggeo').classList.remove('active');

// }