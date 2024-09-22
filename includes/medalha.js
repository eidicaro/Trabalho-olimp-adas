document.addEventListener("DOMContentLoaded", function () {
    const table = document.getElementById('medalTable');
    const tbody = document.getElementById('medalBody');

    const observer = new IntersectionObserver((entries) => {
        
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                tbody.style.height = tbody.scrollHeight + 'px';

                table.classList.add('open');
                tbody.classList.add('open');

                observer.unobserve(entry.target);
            }
        });
    });

    observer.observe(table);
});