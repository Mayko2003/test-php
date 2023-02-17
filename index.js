$(document).ready(function () {

    $('#btnSignIn').click(() => {

        window.location.href = 'http://localhost:8000/signin.php';

    });


    $('#btnSignUp').click(() => {

        window.location.href = 'http://localhost:8000/signup.php';

    });

    $('#btnSignOut').click(() => {

        window.location.href = 'http://localhost:8000/signout.php';

    });


});