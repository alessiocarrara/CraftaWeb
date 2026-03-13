$(document).ready(function() {
    const track = document.querySelector('.tech-track');
    if (track) {
        const width = track.scrollWidth / 2;
        const speed = 50;
        const duration = width / speed;
        track.style.animationDuration = duration + 's';
    }
});