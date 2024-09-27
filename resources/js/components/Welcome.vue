<template>
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
      <div class="max-w-md w-full p-8 bg-white border border-gray-200 rounded-lg shadow-xl welcome-card">
        <div class="flex items-center mb-6">
          <i class="pi pi-calendar text-green-600 text-6xl welcome-icon"></i>
          <h1 class="ml-4 text-4xl font-extrabold text-gray-900 welcome-title">Bienvenue sur TableBooker !</h1>
        </div>
        <p class="text-gray-700 text-lg mb-6 welcome-text">
          Nous sommes ravis de vous accueillir sur TableBooker, votre compagnon idéal pour réserver une table dans vos restaurants et bars préférés. Trouvez, réservez et profitez d'une expérience culinaire exceptionnelle sans tracas.
        </p>

      </div>
    </div>
  </template>

  <script>
  export default {
    name: 'WelcomeMessage'
  }
  </script>

  <style scoped>
  /* Styles personnalisés pour le message de bienvenue */
  .welcome-card {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border: 1px solid #e0e0e0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  </style>
