document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('nav');
    const mobileMenu = document.getElementById('mobileMenu');
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            const offset = nav.offsetHeight;
            const top = target.offsetTop - offset;
            window.scrollTo({ top, behavior: 'smooth' });
            if (mobileMenu) mobileMenu.classList.add('hidden');
        });
    });

    window.addEventListener('scroll', () => {
        nav.classList.toggle('shadow-md', window.scrollY > 0);
    });
});
