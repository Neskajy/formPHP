//This file is not used

// const firstNameInput = document.querySelector('.firstname');
// const emailInput = document.querySelector('.email');
// const passwordInput = document.querySelector('.password');
// const button = document.querySelector('.submit');

// const firstNameInput = "Николай";
// const emailInput = "besonovs@gmail.com";
// const passwordInput = "234nSfgdDSF32f";

// class validateForm {
//     constructor(firstName, email, password) {
//         this.regExpFirstName = RegExp('^[A-Za-zА-Яа-я ]{2,}$');
//         // this.regExpEmail = RegExp('\w+@(?:gmail|mail|outlook|bk|yandex|Yahoo|inbox)\.(?:com|ru)');
//         this.regExpPassword = RegExp('.{8,}');
//         this.firstName = firstName;
//         this.email = email;
//         this.password = password;
//     }

//     validateName() {
//         return this.firstName.value.match(this.regExpFirstName) !== null;
//     }
//     validatePassword() {
//         return this.password.value.match(this.regExpPassword) !== null;
//     }
//     async sentDataToPhp(url, data) {
//         const jsonData = JSON.stringify(data);

//         const response = await fetch(url, {
//             method: "POST",
//             body: jsonData
//         });

//         if (!response.ok) {
//             throw new Error(`Ошибка по адресу ${url}, статус ошибки ${response}`);
//         }
//         return await response.json();
//     }
// }


// const validator = new validateForm(firstNameInput, emailInput, passwordInput);

// const responseObj = {
//     id: 1
// }

// validator.sentDataToPhp("https://test.loc/", responseObj)
//     .then(() => {
//         console.log("Данные успешно отправлены!");
//     });

//Uncaught (in promise) SyntaxError: Unexpected token '<', "<!DOCTYPE "... is not valid JSON