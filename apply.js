(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('application-form');
        var success = document.getElementById('apply-success');

        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }
                form.classList.add('hidden');
                if (success) success.classList.remove('hidden');
            });
        }

        var fileInput = document.getElementById('pitch-deck');
        var fileName = document.getElementById('pitch-deck-name');
        if (fileInput && fileName) {
            fileInput.addEventListener('change', function () {
                fileName.textContent = (fileInput.files && fileInput.files[0])
                    ? fileInput.files[0].name
                    : 'No file chosen';
            });
        }
    });
})();