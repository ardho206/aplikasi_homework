const typed = new Typed("#typing-content", {
    strings: [
        "pengumpulan tugas menjadi sangat mudah!",
        "dapatkan nilai terbaik!",
        "buat pengumpulan tugasmu secepat kilat!",
    ],
    typeSpeed: 30,
    startDelay: 1000,
    backSpeed: 50,
    loop: true,
    loopCount: Infinity,
});

const showPassword = document.getElementById("show-password");
const hidePassword = document.getElementById("hide-password");
const inputPassword = document.getElementById("password-icon");

inputPassword.addEventListener("input", function () {
    if (inputPassword.value === '') {

        if (inputPassword.getAttribute('type') === 'password') {
            showPassword.classList.remove('flex');
            showPassword.classList.add('hidden');
        }

        if (inputPassword.getAttribute('type') === 'text') {
            hidePassword.classList.remove('flex');
            hidePassword.classList.add('hidden');
        }
    } else {

        if (inputPassword.getAttribute('type') === 'password') {
            showPassword.classList.remove('hidden');
            showPassword.classList.add('flex');
        }

        if (inputPassword.getAttribute('type') === 'text') {
            hidePassword.classList.remove('hidden');
            hidePassword.classList.add('flex');
        }
    }
});

showPassword.addEventListener("click", function () {

    inputPassword.setAttribute('type', 'text');

    showPassword.classList.remove('flex');
    showPassword.classList.add('hidden');

    hidePassword.classList.remove('hidden');
    hidePassword.classList.add('flex');

});

hidePassword.addEventListener("click", function () {
    inputPassword.setAttribute('type', 'password');

    hidePassword.classList.remove('flex');
    hidePassword.classList.add('hidden');

    showPassword.classList.remove('hidden');
    showPassword.classList.add('flex');

});

