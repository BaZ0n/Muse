document.addEventListener("DOMContentLoaded", function() {

    const profileForm = document.getElementById("profileForm");
    if (profileForm) {
        document.getElementById("profileForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            const name = document.getElementById("userName").value;
            const lastName = document.getElementById("userLastName").value;
            const dateOB = document.getElementById("dateOB").value;
            const password = document.getElementById("oldPassword").value;
            const passwordRepeat = document.getElementById("passwordNew").value;
            const status = document.getElementById("statusNew").value;
            const about = document.getElementById("aboutNew").value;
            const photo = document.getElementById("photoNew").value;
            alertProfileSuccess = document.getElementById("alertProfile");
            alertProfileInfo = document.getElementById("alertProfileInfo");


            if (name === "" && lastName === "" && dateOB === "" && password === "" && passwordRepeat === "" && status === "" && about === "" && photo === "") {
                alertProfileInfo.classList.remove("d-none");
                setTimeout(() => {
                    alertProfileInfo.classList.add("show");
                }, 100);
                setTimeout(() => {
                    alertProfileInfo.classList.remove("show");
                    setTimeout(() => {
                        alertProfileInfo.classList.add("d-none");
                    }, 100);
                }, 3000);
            }
            else {
                alertProfileSuccess.classList.remove("d-none");
                setTimeout(() => {
                    alertProfileSuccess.classList.add("show");
                }, 100);
                setTimeout(() => {
                    alertProfileSuccess.classList.remove("show");
                    setTimeout(() => {
                        alertProfileSuccess.classList.add("d-none");
                    }, 100);
                }, 3000);
                setTimeout(()=> {
                    this.submit();
                }, 1000);
            }
        });
        
    }

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
                alert.classList.remove("d-none");
                setTimeout(() => {
                    alert.classList.add("show"); // Показываем уведомление
                },1);
                setTimeout(() => {
                    alert.classList.remove("show"); // Скрываем уведомление после 5 секунд
                    setTimeout(() => {
                        alert.classList.add("d-none");
                    }, 1000);
                }, 3000);
            } else {
                if (password.length < 8) {
                    alertPass.classList.remove("d-none");
                    setTimeout(() => {
                        alertPass.classList.add("show"); // Показываем уведомление
                    },1);
                    setTimeout(() => {
                        alertPass.classList.remove("show"); // Скрываем уведомление после 5 секунд
                        setTimeout(() => {
                            alertPass.classList.add("d-none");
                        }, 1000);
                    }, 3000);
                }
                else {
                    if (password != passwordRepeat) {
                        alertPassRep.classList.remove("d-none");
                        setTimeout(() => {
                            alertPassRep.classList.add("show"); // Показываем уведомление
                        },1);
                        setTimeout(() => {
                            alertPassRep.classList.remove("show"); // Скрываем уведомление после 5 секунд
                            setTimeout(() => {
                                alertPassRep.classList.add("d-none");
                            }, 1000);
                        }, 3000);
                    }
                    else {
                        alertPassRep.classList.remove("show");
                        setTimeout(() => {
                            alertPassRep.classList.add("d-none");
                        }, 1000);
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