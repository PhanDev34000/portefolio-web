//Mode DARK
const themeToggleBtn = document.getElementById('theme-toggle');
const darkIcon = document.getElementById('theme-toggle-dark-icon');
const lightIcon = document.getElementById('theme-toggle-light-icon');
const mainElement = document.querySelector('main'); // get the main element

   // Vérifie le thème actuel
if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark');
  mainElement.style.backgroundImage = "url('https://www.verniere-dev.com/images/CodeDark.png')"; // change the background image
  mainElement.classList.add('dark'); // add the dark class to the main element
  darkIcon.classList.remove('hidden');
  lightIcon.classList.add('hidden');
} else {
  document.documentElement.classList.remove('dark');
  mainElement.style.backgroundImage = "url('images/CodeAP.png')"; // change the background image
  mainElement.classList.remove('dark'); // remove the dark class from the main element
  darkIcon.classList.add('hidden');
  lightIcon.classList.remove('hidden');
}

themeToggleBtn.addEventListener('click', () => {
  document.documentElement.classList.toggle('dark');
  if (document.documentElement.classList.contains('dark')) {
    mainElement.style.backgroundImage = "url('https://www.verniere-dev.com/images/CodeDark.png')"; // change the background image
    mainElement.classList.add('dark'); // add the dark class to the main element
    localStorage.setItem('theme', 'dark');
  } else {
    mainElement.style.backgroundImage = "url('images/CodeAP.png')"; // change the background image
    mainElement.classList.remove('dark'); // remove the dark class from the main element
    localStorage.setItem('theme', 'light');
  }
  darkIcon.classList.toggle('hidden');
  lightIcon.classList.toggle('hidden');
});

// transformation de logo en NB

const headerLogo = document.getElementById('header-logo');
const footerLogo = document.getElementById('footer-logo');
const lkdLogo = document.getElementById('logo-linkedin');
const gitLogo = document.getElementById('logo-github');

function updateLogos() {
    if (document.documentElement.classList.contains('dark')) {
        headerLogo.src = 'images/LogoNB.png';
        footerLogo.src = 'images/LogoNB.png';
        lkdLogo.src= 'images/linkedin.png';
        gitLogo.src= 'images/github.png';
    } else {
        headerLogo.src = 'images/Logo.png';
        footerLogo.src = 'images/Logo.png';
        lkdLogo.src= 'images/linkedin_b.png';
        gitLogo.src= 'images/github_b.png';
    }
}

    // Initial check
updateLogos();

    // Update logos on theme change
themeToggleBtn.addEventListener('click', updateLogos);

// Animation <...> en mode dark
const animatedIcon = document.getElementById('animated-icon');

function updateIconColors() {
    if (document.documentElement.classList.contains('dark')) {
        animatedIcon.setAttribute('colors', 'primary:white,secondary:white');
    } else {
        animatedIcon.setAttribute('colors', 'primary:#1f3a93,secondary:#1f3a93');
    }
}

    // Initial check
updateIconColors();

    // Update icon colors on theme change
themeToggleBtn.addEventListener('click', updateIconColors);




