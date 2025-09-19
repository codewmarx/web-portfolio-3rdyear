
function validateForm() {
    const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (username === '' || password === '') {
            alert("Both fields must be field out!");
            return false;
        }
        return true;
    }
    
    function formValidate() {
        const username = document.getElementByd("username").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim()
        const confPassword = document.getElementById("conf-password").value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
        let erorrMessage = "";
    
        if (!username || !email || !password || !confPassword) {
            erorrMessage = "All fields must not be empty.";
        } else if (!emailPattern.test(email)) {
            erorrMessage = "Please enter a valid email.";
        }
    }