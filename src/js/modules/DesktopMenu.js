class DesktopMenu {
    constructor() {
        // set top panel to default
        this.topPanel = document.querySelector('.hero__top');
        this.topPanel.classList.remove('hero__top--fixed');

        this.events();
    }

    events() {

    }
}

export default DesktopMenu;