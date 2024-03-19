window.addEventListener('load', function() {
    setMode();
});

function setMode(mode) {
    var body = document.body;

    if (!mode) {
        var prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
        body.classList.toggle("dark-mode", prefersDarkScheme);
    } else {
        if (mode === 'white') {
            body.classList.remove("dark-mode");
        } else if (mode === 'dark') {
            body.classList.add("dark-mode");
        }
    }
}
