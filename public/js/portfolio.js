
document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    // Filter proyek
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');
    const emptyProjects = document.getElementById('emptyProjects');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter;
            let visible = 0;

            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-indigo-600', 'text-white');
                btn.classList.add(
                    'bg-slate-900',
                    'text-slate-400',
                    'border',
                    'border-slate-800'
                );
            });

            button.classList.add('active', 'bg-indigo-600', 'text-white');
            button.classList.remove(
                'bg-slate-900',
                'text-slate-400',
                'border',
                'border-slate-800'
            );

            projectItems.forEach(item => {
                const category = item.dataset.category || '';
                const show = filter === 'all' || category === filter;

                item.style.display = show ? '' : 'none';

                if (show) visible++;
            });

            if (emptyProjects) {
                emptyProjects.classList.toggle('hidden', visible > 0);
            }
        });
    });
});
