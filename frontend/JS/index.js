//-------spreminjanje barve za title----------
const title = document.getElementById('naslov');
const scrollThreshold = 60; //preskrolani piksli 

window.addEventListener('scroll', () => {
    if (window.scrollY > scrollThreshold) {
        title.classList.add('title_scrolled');
    } else {
        title.classList.remove('title_scrolled');
    }
});

//-------prikaz motota----------
const moto = document.getElementById('moto');
const scrollThreshold_moto = 300; //preskrolani piksli 

window.addEventListener('scroll', () => {
    if (window.scrollY > scrollThreshold_moto) {
        moto.classList.add('moto');
        moto.classList.remove('moto_prescroll')
    } else {
        moto.classList.remove('moto');
        moto.classList.add('moto_prescroll')
    }
});


//-------nastavljanje vrednosti v local storage kot privzeto----
let izbira = 1;
localStorage.setItem("izbira prijave: ", izbira);


//-------izbira register ali login----------
function izbira_prijave() {
    let izbira = localStorage.getItem("izbira prijave: ");

    // Elementi registracije
    let register = document.getElementById("register");
    let naslov_register = document.getElementById("naslov_register");
    let ime_reg = document.getElementById("name");
    let label_ime = document.getElementById("label_name_r");
    let priimek_reg = document.getElementById("surname");
    let label_surname = document.getElementById("label_surname_r");
    let email_reg = document.getElementById("email");
    let label_email = document.getElementById("label_email_r");
    let username_reg = document.getElementById("username_register");
    let label_username_reg = document.getElementById("label_username_r");
    let password_reg = document.getElementById("passwordregister");
    let label_password_reg = document.getElementById("label_password_r");
    let registerButton_selected = document.getElementById("register_submit");
    let form_register = document.getElementById("form_register");

    // Gumbi za preklop
    let register_button_unselected = document.getElementById("register-button-unselected");
    let login_button_unselected = document.getElementById("login-button-unselected");

    // Elementi prijave
    let login = document.getElementById("login");
    let form_login = document.getElementById("form_login");
    let naslov_login = document.getElementById("naslov_login");
    let username_login = document.getElementById("username");
    let label_username_login = document.getElementById("label_username");
    let password_login = document.getElementById("password");
    let label_password_login = document.getElementById("label_password");
    let loginButton_selected = document.getElementById("login_submit");


    if (izbira == 1) {
        // Skrij registracijo
        naslov_register.style.display = "none";
        ime_reg.style.display = "none";
        label_ime.style.display = "none";
        priimek_reg.style.display = "none";
        label_surname.style.display = "none";
        email_reg.style.display = "none";
        label_email.style.display = "none";
        username_reg.style.display = "none";
        label_username_reg.style.display = "none";
        password_reg.style.display = "none";
        label_password_reg.style.display = "none";
        registerButton_selected.style.display = "none";
        form_register.style.display = "none";

        register.classList.add("register-unselected");
        register.classList.remove("register-selected");
        register_button_unselected.style.display = "block";

        // Prikaži prijavo
        naslov_login.style.display = "block";
        username_login.style.display = "block";
        label_username_login.style.display = "block";
        password_login.style.display = "block";
        label_password_login.style.display = "block";
        loginButton_selected.style.display = "block";
        if (form_login) {
            form_login.style.display = "flex";
        }

        login.classList.add("login-selected");
        login.classList.remove("login-unselected");
        login_button_unselected.style.display = "none";

    } else if (izbira == 2) {
        // Skrij prijavo
        naslov_login.style.display = "none";
        username_login.style.display = "none";
        label_username_login.style.display = "none";
        password_login.style.display = "none";
        label_password_login.style.display = "none";
        loginButton_selected.style.display = "none";
        form_login.style.display = "none";

        login.classList.add("login-unselected");
        login.classList.remove("login-selected");
        login_button_unselected.style.display = "block";

        // Prikaži registracijo
        naslov_register.style.display = "block";
        ime_reg.style.display = "block";
        label_ime.style.display = "block";
        priimek_reg.style.display = "block";
        label_surname.style.display = "block";
        email_reg.style.display = "block";
        label_email.style.display = "block";
        username_reg.style.display = "block";
        label_username_reg.style.display = "block";
        password_reg.style.display = "block";
        label_password_reg.style.display = "block";
        registerButton_selected.style.display = "block";
        if (form_register) {
            form_register.style.display = "flex";
        }

        register.classList.add("register-selected");
        register.classList.remove("register-unselected");
        register_button_unselected.style.display = "none";
    }
    console.log("izvedena je bila izbira prijave");
}

function shrani2() {
    let izbira = 2;
    localStorage.setItem("izbira prijave: ", izbira);
    izbira_prijave();
}

function shrani1() {
    let izbira = 1;
    localStorage.setItem("izbira prijave: ", izbira);
    izbira_prijave();
}

//------posiljanje login samo ob pritisku gumba------
const form = document.getElementById('form_login');

form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default submission
    form.action = 'http://localhost:8888/backend/login.php'; 
    form.submit(); // Manually submit the form
});


//------posiljanje register samo ob pritisku gumba------
const form2 = document.getElementById('form_register');

form2.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default submission
    form2.action = 'http://localhost:8888/backend/register.php';
    form2.submit(); // Manually submit the form
});