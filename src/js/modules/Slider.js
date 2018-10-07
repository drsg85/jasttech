class Slider {
    constructor() {
        this.slider = document.querySelector('.slider');
        this.sliderContainer = document.querySelector('.slider__slides');
        this.prevButton = document.querySelector('.slider__prev');
        this.nextButton = document.querySelector('.slider__next');

        this.slides = this.sliderContainer.children;
        this.slidesNum = this.slides.length;
        this.currentSlide = 0;

        this.events();
    }

    events() {
        this.prevButton.addEventListener('click', (event) => {
            this.showSlide(this.currentSlide - 1);
        });

        this.nextButton.addEventListener('click', (event) => {
            this.showSlide(this.currentSlide + 1);
        });
    }

    showSlide(slideNum) {
        if (slideNum >= this.slidesNum) {
            slideNum = 0;
        } else if (slideNum < 0) {
            slideNum = this.slidesNum - 1;
        }

        this.currentSlide = slideNum;
        // this.sliderContainer
        // console.log(this.sliderContainer.scrollLeft);
        this.sliderContainer.scrollLeft = this.currentSlide * this.sliderContainer.offsetWidth;
    }
}

export default Slider;