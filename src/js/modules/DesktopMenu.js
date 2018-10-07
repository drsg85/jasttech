class DesktopMenu {
    constructor() {
        // set top panel to default
        this.topPanel = document.querySelector('.hero__top');
        this.topPanel.classList.remove('hero__top--fixed');

        this.hero = document.querySelector('.hero');

        this.events();
    }

    events() {
        document.addEventListener('scroll', (event) => {
            if (window.scrollY >= this.hero.offsetHeight / 2) {
                this.topPanel.classList.add('hero__top--fixed');
            } else {
                this.topPanel.classList.remove('hero__top--fixed');
            }
            // console.log(window.scrollY, ' - ', this.hero.offsetHeight);
        });
    }
}

export default DesktopMenu;