document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('register-form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        /*$.blockUI({
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff',
            },
            message: "Creating new account..."
        });*/

        const toasts = new Toasts();

        toasts.push({
            title: 'My Toast Notification Title',
            content: 'My toast notification description.',
            style: 'success'
        });

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        console.log("email: " + email);
        console.log("password: " + password);
    })
});