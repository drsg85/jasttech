class ContactPopup {
    constructor() {
        this.popup = document.querySelector('.contact-popup');
        this.closeButton = document.querySelector('.contact-popup__close');
        this.popupCover = document.querySelector('.contact-popup__cover');
        this.events();
    }

    events() {
        document.addEventListener('click', (event) => {
            if (event.target.classList.contains('contact-button')) {
                event.preventDefault();
                this.popup.classList.remove('contact-popup--hidden');
            }
        });
        
        this.closeButton.addEventListener('click', (event) => {
            this.popup.classList.add('contact-popup--hidden');
        });
        
        this.popupCover.addEventListener('click', (event) => {
            this.popup.classList.add('contact-popup--hidden');
        });
    }
}

export default ContactPopup;