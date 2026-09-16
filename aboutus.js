/* =========================================================
   Otharo — About Us Page Scripts
   Polaroid cluster: hover / tap / keyboard activates a single
   card (straighten + caption) while siblings dim. Hover state
   clears the moment the pointer leaves the cluster.
   ========================================================= */

(function () {
    'use strict';

    var cluster = document.getElementById('team-cluster');
    if (!cluster) return;

    var coarse = window.matchMedia && window.matchMedia('(pointer: coarse)').matches;
    var cards = Array.prototype.slice.call(cluster.querySelectorAll('.team-card'));

    function setActive(card, active) {
        cards.forEach(function (c) {
            var on = active && c === card;
            c.classList.toggle('is-active', on);
            c.setAttribute('aria-expanded', on ? 'true' : 'false');
        });
        cluster.classList.toggle('js-focus', !!(active && card));
    }

    function activate(card) {
        setActive(card, true);
    }

    function deactivate() {
        setActive(null, false);
    }

    /* Desktop hover: follow the pointer across cards, clear on leave */
    if (!coarse) {
        cluster.addEventListener('mouseover', function (e) {
            var card = e.target && e.target.closest ? e.target.closest('.team-card') : null;
            if (card && cluster.contains(card)) activate(card);
        });
        cluster.addEventListener('mouseleave', function () {
            deactivate();
        });
    }

    /* Keyboard support (works on any device) */
    cards.forEach(function (card) {
        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                var on = !card.classList.contains('is-active');
                setActive(card, on);
            } else if (e.key === 'Escape') {
                deactivate();
            }
        });
    });

    /* Touch / tap: click toggles a pinned card (no hover on touch) */
    if (coarse) {
        cards.forEach(function (card) {
            card.addEventListener('click', function (e) {
                e.stopPropagation();
                var on = !card.classList.contains('is-active');
                setActive(card, on);
            });
        });
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.team-card')) deactivate();
        });
    }
})();