class Video {
    constructor() {
        this.videoTrigger = document.querySelector('.video__trigger')
        this.videoCover = document.querySelector('.video__cover');
        this.videoHeader = document.querySelector('.video__header');
        this.video = document.getElementById('promo-vid');
        this.isVideoPlaying = false;

        this.events();
    }

    events() {
        this.videoTrigger.addEventListener('click', (event) => {
            // this.videoTrigger.classList.toggle('video__trigger--hidden');
            // this.videoCover.classList.add('video__cover--hidden');
            // this.videoHeader.classList.add('video__header--hidden');
            
            if (!this.isVideoPlaying) {
                this.video.play();
            } else {
                this.video.pause();
            }
            
            this.isVideoPlaying = !this.isVideoPlaying;
        });
        
        this.video.addEventListener('play', (event) => {
            this.videoTrigger.classList.add('video__trigger--hidden');
            this.videoCover.classList.add('video__cover--hidden');
            this.videoHeader.classList.add('video__header--hidden');
        })
        
        this.video.addEventListener('pause', (event) => {
            this.videoTrigger.classList.remove('video__trigger--hidden');
            this.videoHeader.classList.remove('video__header--hidden');
        })
        
        this.video.addEventListener('ended', (event) => {
            this.videoTrigger.classList.remove('video__trigger--hidden');
            this.videoHeader.classList.remove('video__header--hidden');
        });
    }
}

export default Video;