window.onload = function () {
    document.querySelector('form').onsubmit = function (e) {
    e.preventDefault();

        let name_student = document.querySelector('input[name="name_student"]').value;
        let course_direction = document.querySelector('input[name="course_direction"]').value;
        let name_group = document.querySelector('input[name="name_group"]').value;
        let year = document.querySelector('input[name="year"]').value;

        let errors = [];

        if (!/^[a-zA-Zа-яА-Я ]+$/.test(name_student)) {
            errors.push("Поле name_student должно содержать только буквы");
        }

        if (!/^\d+$/.test(course_direction)) {
            errors.push("Поле course_direction должно содержать только цифры");
        }

        if (!/^[a-zA-Zа-яА-Я ]+$/.test(name_group)) {
            errors.push("Поле name_group имя должно содержать только буквы");
        }

        if (!/^\d+$/.test(year)) {
                errors.push("Поле year должно содержать только цифры");
        }

        if (errors.length > 0) {
            alert(errors.join("\n"));
        } else {
            this.submit();
        }
    }
}