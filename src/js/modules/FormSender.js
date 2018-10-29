class FormSender {
    constructor() {
        this.popup = document.querySelector('.contact-popup');
        this.events();
    }
    
    events() {
        document.addEventListener("submit", event => {
            event.preventDefault();
            
            this.sendForm(event.target);
        });
    }

    sendForm(form) {
        let inputs = form.querySelectorAll('.form__input');

        let dataToSend = { content: "<p>" };
        for (let input of inputs) {
            dataToSend.content += `${input.name}: ${input.value}<br>`;
        }
        dataToSend.content += '</p>';
        dataToSend.email = form.querySelector("input[type='email']").value;

        console.log(dataToSend);

        let XHR = new XMLHttpRequest();
        let jsonData = JSON.stringify(dataToSend);
        XHR.addEventListener("load", event => {
            console.log(event.target.responseText);
        });
        XHR.open("POST", `${window.location.origin}/jasttech/order`, true);
        XHR.open("POST", `${window.location.origin}/order`, true);
        // XHR.open("POST", `http://localhost/jasttech/order/`, true);
        XHR.send(jsonData);
    }
}

export default FormSender;