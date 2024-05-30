// resources/js/test-script.js
document.addEventListener('DOMContentLoaded', function () {
    const testBtn = document.getElementById('testBtn');
    if (testBtn) {
        testBtn.addEventListener('click', function () {
            alert('Test button clicked!');
        });
    }
});
