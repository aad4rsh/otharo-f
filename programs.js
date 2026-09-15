/* =========================================================
   Otharo — Programs Page Scripts
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('[data-tab]');
    var panels = document.querySelectorAll('[data-panel]');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var key = tab.getAttribute('data-tab');

            tabs.forEach(function (t) {
                t.classList.toggle('is-active', t === tab);
            });

            panels.forEach(function (panel) {
                panel.classList.toggle('hidden', panel.getAttribute('data-panel') !== key);
            });
        });
    });
});
