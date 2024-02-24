window.onload = function () {
    document.querySelector('form').onsubmit = function (e) {
    e.preventDefault();
        let name_direction = document.querySelector('input[name="name_direction"]').value;
        let errors = [];
        if (!/^[a-zA-Zа-яА-Я ]+$/.test(name_direction)) {
            errors.push("Поле name_direction имя должно содержать только буквы");
        }
        if (errors.length > 0) {
            alert(errors.join("\n"));
        } else {
            this.submit();
        }
    }
}