/* =========================================================
   Otharo — Cohorts Page Scripts
   - Scroll-driven: highlights the left-list cohort matching
     the card nearest to the sticky stack line (--coh-pin).
   - Click-driven: clicking a cohort name scrolls smoothly to
     that card so its stack highlight follows.
   ========================================================= */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var slots = Array.prototype.slice.call(document.querySelectorAll('.coh-slot'));
        var items = Array.prototype.slice.call(document.querySelectorAll('.coh-list-item'));

        if (!slots.length || !items.length) return;

        var pinLine = window.innerHeight * 0.26;

        function nearestCardIndex() {
            var best = 0;
            var bestDist = Infinity;
            slots.forEach(function (slot, i) {
                var card = slot.querySelector('.coh-card');
                if (!card) return;
                var rect = card.getBoundingClientRect();
                var dist = Math.abs(rect.top - pinLine);
                if (dist < bestDist) {
                    bestDist = dist;
                    best = i;
                }
            });
            return best;
        }

        function highlight(i) {
            items.forEach(function (item, j) {
                item.classList.toggle('is-active', j === i);
            });
        }

        function apply() {
            highlight(nearestCardIndex());
        }

        var ticking = false;
        window.addEventListener('scroll', function () {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(function () {
                apply();
                ticking = false;
            });
        }, { passive: true });

        window.addEventListener('resize', function () {
            pinLine = window.innerHeight * 0.26;
            apply();
        });

        function scrollToCard(i) {
            var card = slots[i] && slots[i].querySelector('.coh-card');
            if (!card) return;
            var top = card.getBoundingClientRect().top + window.pageYOffset;
            window.scrollTo({ top: top - window.innerHeight * 0.26 + 40, behavior: 'smooth' });
        }

        items.forEach(function (item, i) {
            item.setAttribute('role', 'button');
            item.setAttribute('tabindex', '0');

            item.addEventListener('click', function () {
                scrollToCard(i);
            });

            item.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    scrollToCard(i);
                }
            });
        });

        apply();
    });
})();