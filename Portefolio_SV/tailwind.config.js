// tailwind.config.js
module.exports = {
  darkMode: 'class',
  content: [
    "./index.html", 
    "./src/**/*.{js,ts,jsx,tsx}", 
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Electrolyze', 'sans-serif'], 
        mono: ['Oxygen Mono', 'monospace'],
      },
      colors: {
        primary: '#93b4ff',
        secondary: '#ffffff',
        customprimary: '#1F3A93',
        tertary: '#FFF59D',
      }
    },
  },
  plugins: [],
};
