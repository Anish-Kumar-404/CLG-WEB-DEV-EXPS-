function validateRegistration(event) {
    event.preventDefault();

    const regUsername = document.getElementById('regUsername').value;
    const regPassword = document.getElementById('regPassword').value;

    if (regUsername.length < 5 || regPassword.length < 7) {
        alert('Invalid registration details. Username should be at least 5 characters, and password should be at least 7 characters.');
    } else {

        const existingData = JSON.parse(localStorage.getItem('userData')) || {};

        if (existingData[regUsername]) {
            alert('Username already exists. Please choose a different username.');
        } else {

            existingData[regUsername] = regPassword;
            localStorage.setItem('userData', JSON.stringify(existingData));

            alert('Registration successful! Redirecting to login page.');
            window.location.href = 'index.html';
        }
    }
}


function validateLogin(event) {
    event.preventDefault();

    const loginUsername = document.getElementById('loginUsername').value;
    const loginPassword = document.getElementById('loginPassword').value;


    const storedData = JSON.parse(localStorage.getItem('userData')) || {};


    if (storedData[loginUsername] === loginPassword) {
        alert('Login successful!');
        window.location.href = 'https://anish-kumar-portfolio.vercel.app/';
    } else {
        alert('Invalid login credentials.');
    }
}
