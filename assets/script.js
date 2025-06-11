window.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    themeToggle.addEventListener('click', () => {
        body.classList.toggle('dark');
        body.classList.toggle('light');
    });

    const textInput = document.getElementById('text');
    textInput.addEventListener('paste', () => {
        setTimeout(() => autoTranslate(), 10);
    });
});

function autoTranslate() {
    const text = document.getElementById('text').value;
    const from = document.getElementById('from').value;
    const to = document.getElementById('to').value;
    fetch('translate.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `text=${encodeURIComponent(text)}&from=${from}&to=${to}`
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById('result').textContent = data;
    });
}
