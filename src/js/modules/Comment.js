class Comment {
    constructor() {
        this.comments = document.getElementById('comments');

        this.events();
    }

    events() {
        this.comments.addEventListener('pointerup', (event) => {
            if (event.target.classList.contains('comment__trigger')) {
                let trigger = event.target;
                let video = event.target.parentElement.querySelector('video');
                let cover = event.target.parentElement.querySelector('.comment__cover');
                if (video.isPlaying) {
                    video.pause();
                    video.isPlaying = false;
                    trigger.classList.remove('comment__trigger--hidden');
                    // console.log(trigger.classList);
                    cover.classList.remove('comment__cover--hidden');
                } else {
                    video.play();
                    video.isPlaying = true;
                    trigger.classList.add('comment__trigger--hidden');
                    // console.log(trigger.classList);
                    cover.classList.add('comment__cover--hidden');
                }
            }
        });
    }
}

export default Comment;