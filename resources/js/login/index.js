import * as Vue from "vue";
import { ref } from "vue";

const application = {
    setup() {
        const registerForm = ref();
        const loginForm = ref();
        const id = ref("");
        const password = ref("");

        let registerSubmit = function () {
            if (id.value == "") {
                alert("id を入力してください。");
                return;
            }
            if (password.value == "") {
                alert("password を入力してください。");
                return;
            }

            registerForm.value.submit();
        };
        let loginSubmit = function () {
            if (id.value == "") {
                alert("id を入力してください。");
                return;
            }
            if (password.value == "") {
                alert("password を入力してください。");
                return;
            }
            loginForm.value.submit();
        };

        return {
            registerForm,
            loginForm,

            id,
            password,

            registerSubmit,
            loginSubmit,
        };
    },
};

Vue.createApp(application).mount("#login");