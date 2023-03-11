<style>
    :root {
        --primary-color: #010712;
        --secondary-color: #818386;
        --bg-color: #fcfdfd;
        --button-color: #3b3636;
        --h1-color: #3f444c;
    }

    [data-theme="dark"] {
        --primary-color: #fcfdfd;
        --secondary-color: #818386;
        --bg-color: #010712;
        --button-color: #818386;
        --h1-color: #fcfdfd;
    }

    * {
        margin: 0;
        box-sizing: border-box;
        transition: all 0.3s ease-in-out;
    }

    .contact-container {
        display: flex;
        width: 100vw;
        height: 100vh;
        background: var(--bg-color);
    }

    .left-col {
        width: 30vw;
        height: 100%;
        background-image: url("https://didongmoi.com.vn/upload/images/content/danh-gia-samsung-galaxy-watch-3%20(25).jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .logo {
        border-radius: 55px;
        width: 8rem;
        padding: 2rem;
    }

    .right-col {
        background: var(--bg-color);
        width: 50vw;
        height: 100vh;
        padding: 1.5rem 1rem;
    }

    h1,
    label,
    button,
    .description {
        font-family: "Jost", sans-serif;
        font-weight: 400;
        letter-spacing: 0.1rem;
    }

    h1 {
        color: var(--h1-color);
        text-transform: uppercase;
        font-size: 2.5rem;
        letter-spacing: 0.5rem;
        font-weight: 300;
    }

    p {
        color: var(--secondary-color);
        font-size: 0.9rem;
        letter-spacing: 0.01rem;
        width: 40vw;
        margin: 0.25rem 0;
    }

    label,
    .description {
        color: var(--secondary-color);
        text-transform: uppercase;
        font-size: 0.625rem;
    }

    .form {
        width: 31.25rem;
        position: relative;
        margin-top: 2rem;
        padding: 1rem 0;
    }

    input,
    textarea,
    label {
        width: 40vw;
        display: block;
    }

    p,
    placeholder,
    input,
    textarea {
        font-family: "Helvetica Neue", sans-serif;
    }

    input::placeholder,
    textarea::placeholder {
        color: var(--primary-color);
    }

    input,
    textarea {
        color: var(--primary-color);
        font-weight: 500;
        background: var(--bg-color);
        border: none;
        border-bottom: 1px solid var(--secondary-color);
        padding: 0.5rem 0;
        margin-bottom: 1rem;
        outline: none;
    }

    textarea {
        resize: none;
    }

    button {
        text-transform: uppercase;
        font-weight: 300;
        background: var(--button-color);
        color: var(--bg-color);
        width: 10rem;
        height: 2.25rem;
        border: none;
        border-radius: 2px;
        outline: none;
        cursor: pointer;
    }

    input:hover,
    textarea:hover,
    button:hover {
        opacity: 0.5;
    }

    button:active {
        opacity: 0.8;
    }

    /* Toggle Switch */

    .theme-switch-wrapper {
        display: flex;
        align-items: center;
        text-align: center;
        width: 160px;
        position: absolute;
        top: 180px;
        right: 0;
    }

    .description {
        margin-left: 1.25rem;
    }

    .theme-switch {
        display: inline-block;
        height: 34px;
        position: relative;
        width: 60px;
    }

    .theme-switch input {
        display: none;
    }

    .slider {
        background-color: #ccc;
        bottom: 0;
        cursor: pointer;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: 0.4s;
    }

    .slider:before {
        background-color: #fff;
        bottom: 0.25rem;
        content: "";
        width: 26px;
        height: 26px;
        left: 0.25rem;
        position: absolute;
        transition: 0.4s;
    }

    input:checked+.slider {
        background-color: var(--button-color);
    }

    input:checked+.slider:before {
        transform: translateX(26px);
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    #error,
    #success-msg {
        width: 40vw;
        margin: 0.125rem 0;
        font-size: 0.75rem;
        text-transform: uppercase;
        font-family: "Jost";
        color: red;
    }

    #success-msg {
        transition-delay: 3s;
    }

    @media only screen and (max-width: 950px) {
        .logo {
            width: 8rem;
        }

        h1 {
            font-size: 1.75rem;
        }

        p {
            font-size: 0.7rem;
        }

        input,
        textarea,
        button {
            font-size: 0.65rem;
        }

        .description {
            font-size: 0.3rem;
            margin-left: 0.4rem;
        }

        button {
            width: 7rem;
        }

        .theme-switch-wrapper {
            width: 120px;
        }

        .theme-switch {
            height: 28px;
            width: 50px;
        }

        .theme-switch input {
            display: none;
        }

        .slider:before {
            background-color: #fff;
            bottom: 0.25rem;
            content: "";
            width: 20px;
            height: 20px;
            left: 0.25rem;
            position: absolute;
            transition: 0.4s;
        }

        input:checked+.slider:before {
            transform: translateX(16px);
        }

        .slider.round {
            border-radius: 15px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    }


    .page__footer {
        margin-block: 0 25%;
        margin: unset;
        padding: 10px;
        text-align: center;
        color: #3f444c;
        background-color: #FBECED;
    }

    #footer__text {
        font-weight: bold;
        color: #e05a99;
        position: relative;
    }

    .fa {
        color: #e05a99;
    }

    .fa:hover {
        color: rgb(15, 23, 235);
    }
</style>
<div class="container">
    <div class=" contact-container">
        <div class="left-col">
            <img class="logo" src="../images/logo1.png" />
        </div>
        <div class="right-col">
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                </label>
                <div class="description"></div>
            </div>

            <h1>Liên hệ với tôi</h1>
            <p style="font-size: 13px;">
                Chúng tôi rất vui khi nhận được sự hỗ trợ của bạn, vui lòng để lại tin nhắn cho chúng tôi.
                Yêu cầu của bạn sẽ được xử lý và phản hồi trong thời gian sớm nhất.
            </p>

            <form class="form form-group" id="contact-form" method="post">
                <label for="name">Họ tên của bạn</label>
                <input type="text" id="name" name="name" placeholder="Nhập vào họ tên của bạn" required />
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Địa chỉ Email" required />
                <label for="message">Tin nhắn</label>
                <textarea rows="4" placeholder="Lời nhắn của bạn" id="message" name="message" required></textarea>
                <a href="javascript:void(0)"><button class="form-control" type="submit" id="submit" name="submit">Gửi</button></a>
            </form>
            <div id="error"></div>
            <div id="success-msg"></div>
        </div>
    </div>

</div>


<script>
    const toggleSwitch = document.querySelector(
        '.theme-switch input[type="checkbox"]'
    );

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute("data-theme", "dark");
        } else {
            document.documentElement.setAttribute("data-theme", "light");
        }
    }

    toggleSwitch.addEventListener("change", switchTheme, false);

    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    const contactForm = document.getElementById("contact-form");
    const errorElement = document.getElementById("error");
    const successMsg = document.getElementById("success-msg");
    const submitBtn = document.getElementById("submit");

    const validate = (e) => {
        e.preventDefault();

        if (name.value.length < 3) {
            errorElement.innerHTML = "Tên của bạn phải dài ít nhất 3 ký tự.";
            return false;
        }

        if (!(email.value.includes(".") && email.value.includes("@"))) {
            errorElement.innerHTML = "Vui lòng nhập địa chỉ email hợp lệ.";
            return false;
        }

        if (!emailIsValid(email.value)) {
            errorElement.innerHTML = "Please enter a valid email address.";
            return false;
        }

        if (message.value.length < 15) {
            errorElement.innerHTML = "Hãy viết một tin nhắn dài hơn.";
            return false;
        }

        errorElement.innerHTML = "";
        successMsg.innerHTML =
            "Cảm ơn! Tôi sẽ liên lạc lại với bạn sớm nhất có thể.";

        e.preventDefault();
        setTimeout(function() {
            successMsg.innerHTML = "";
            document.getElementById("contact-form").reset();
        }, 6000);

        return true;
    };

    const emailIsValid = (email) => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    };

    submitBtn.addEventListener("click", validate);
</script>