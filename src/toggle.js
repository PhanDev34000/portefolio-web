  // Bouton mode
  const themeToggleBtn = document.getElementById('theme-toggle');
  const darkIcon = document.getElementById('theme-toggle-dark-icon');
  const lightIcon = document.getElementById('theme-toggle-light-icon');

      // Vérifie le thème actuel
  if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
    darkIcon.classList.remove('hidden');
    lightIcon.classList.add('hidden');
  } else {
    document.documentElement.classList.remove('dark');
    darkIcon.classList.add('hidden');
    lightIcon.classList.remove('hidden');
  }

    // Bascule le thème lors du clic
  themeToggleBtn.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    darkIcon.classList.toggle('hidden');
    lightIcon.classList.toggle('hidden');

      // Enregistre la préférence de l'utilisateur
    if (document.documentElement.classList.contains('dark')) {
      localStorage.setItem('theme', 'dark');
    } else {
      localStorage.setItem('theme', 'light');
    }
  });

