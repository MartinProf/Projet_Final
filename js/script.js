const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('.textAnim');
        }
    });
});

observer.observe(document.querySelector('.textAnim'));

