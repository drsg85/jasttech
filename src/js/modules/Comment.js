class Comment {
    constructor() {
        this.comments = document.getElementById('comments');

        this.events();
    }

    events() {
        this.comments.addEventListener('click', (event) => {
            if (event.target.classList.contains('comment__trigger')) {
                let trigger = event.target;
                let video = event.target.parentElement.querySelector('video');
                let cover = event.target.parentElement.querySelector('.comment__cover');
                if (video.isPlaying) {
                    video.pause();
                    video.isPlaying = false;
                    trigger.classList.remove('comment__trigger--hidden');
                    cover.classList.remove('comment__cover--hidden');
                } else {
                    video.play();
                    video.isPlaying = true;
                    trigger.classList.add('comment__trigger--hidden');
                    cover.classList.add('comment__cover--hidden');
                    video.addEventListener('click', () => {
                        video.pause();
                    });
                }
            }
        });

        this.comments.addEventListener('pointerup', (event) => {
            if (event.target.classList.contains('comment__cover')) {
                let cover = event.target;
                let video = event.target.parentElement.querySelector('video');
                let trigger = event.target.parentElement.querySelector('.comment__trigger');
                if (video.isPlaying) {
                    video.pause();
                    video.isPlaying = false;
                    trigger.classList.remove('comment__trigger--hidden');
                    cover.classList.remove('comment__cover--hidden');
                }
            }
        });
    }
}

export default Comment;