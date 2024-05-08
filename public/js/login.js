const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

signUpButton.addEventListener('click', function(){
    signInForm.style.display = "none"; // menyembunyikan formulir masuk
    signUpForm.style.display = "block"; // menampilkan formulir pendaftaran
});

signInButton.addEventListener('click', function(){
    signUpForm.style.display = "none"; // menyembunyikan formulir pendaftaran
    signInForm.style.display = "block"; // menampilkan formulir masuk
});
