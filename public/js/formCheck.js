document.addEventListener("DOMContentLoaded", function() {
    // Функция для проверки полей формы регистрации
    const registrForm = document.getElementById("registrForm");
    if (registrForm) {
        document.getElementById("registrForm").addEventListener("submit", function(event) {
            event.preventDefault();  // Предотвращаем стандартное поведение формы
    
            const name = document.getElementById("userName").value;
            const lastName = document.getElementById("userLastName").value;
            const email = document.getElementById("email").value;
            const dateOB = document.getElementById("dateOB").value;
            const password = document.getElementById("password").value;
            const passwordRepeat = document.getElementById("passwordRepeat").value;
            const alert = document.getElementById("alert");
            const alertPass = document.getElementById("alertPass");
            const alertPassRep = document.getElementById("alertPassRep");
    
            // Проверяем, заполнены ли все поля
            if (name === "" || email === "" || dateOB === "") {
                alert.classList.add("show"); // Показываем уведомление
                setTimeout(() => {
                    alert.classList.remove("show"); // Скрываем уведомление после 5 секунд
                }, 3000);
            } else {
                if (password.length < 8) {
                    alertPass.classList.add("show");
                    setTimeout(() => {
                        alertPass.classList.remove("show"); // Скрываем уведомление после 5 секунд
                    }, 3000);
                }
                else {
                    if (password != passwordRepeat) {
                        alertPassRep.classList.add("show");
                        setTimeout(() => {
                            alertPassRep.classList.remove("show"); // Скрываем уведомление после 5 секунд
                        }, 3000);
                    }
                    else {
                        alertPassRep.classList.remove("show");
                        this.submit();
                    }
                    
                }
            } 
        });
    }
    
    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
        // Функция для проверки полей формы входа
        document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault();  // Предотвращаем стандартное поведение формы

        const email = document.getElementById("inputEmail").value;
        const password = document.getElementById("inputPassword").value;
        const alert = document.getElementById("alert");

        // Проверяем, заполнены ли все поля
        if (email === "" || password === "") {
            alert.classList.add("show")
            setTimeout(() => {
                alert.classList.remove("show"); // Скрываем уведомление после 5 секунд
            }, 3000);
        } else {
            alert.classList.add("d-none");
            this.submit();
        } 
    });
    }
});