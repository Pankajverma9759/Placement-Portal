// Example JavaScript functionality for interactivity
document.querySelectorAll('form').forEach((form) => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Form submitted!');
    });
});
