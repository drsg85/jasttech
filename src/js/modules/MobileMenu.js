class MobileMenu {
    constructor() {
        this.menuButton = document.querySelector('.menu-button');
        this.mainMenu = document.querySelector('.hero__nav');

        this.events();
    }

    events() {
        this.menuButton.addEventListener('click', () => {
            this.toggleMenu();
        });

        this.mainMenu.addEventListener('click', (event) => {
            if (event.target.classList.contains('main-nav__link')) {
                this.toggleMenu();
            }
        })
    }

    toggleMenu() {
        this.mainMenu.classList.toggle('hero__nav--shown');
        this.menuButton.classList.toggle('menu-button--close');
    }
}

export default MobileMenu;