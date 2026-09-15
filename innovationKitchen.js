/* =========================================================
   Otharo — Innovation Kitchen Page Scripts
   ========================================================= */

/* Smooth scroll (Locomotive / Lenis v5) */
if (window.LocomotiveScroll) {
    new window.LocomotiveScroll({
        lenisOptions: {
            smoothWheel: true,
            smoothTouch: false,
            lerp: 0.1
        }
    });
}

/* Flip-card toggle — only one card flipped at a time */
document.addEventListener('DOMContentLoaded', function () {
    var cards = document.querySelectorAll('.flip-card');

    function flip(card) {
        var wasFlipped = card.classList.contains('is-flipped');
        cards.forEach(function (c) { c.classList.remove('is-flipped'); });
        card.classList.toggle('is-flipped', !wasFlipped);
    }

    cards.forEach(function (card) {
        card.addEventListener('click', function () { flip(card); });

        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                flip(card);
            }
        });
    });
});