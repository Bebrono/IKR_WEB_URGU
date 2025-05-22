<script setup>
// Здесь будет логика компонента
</script>

<template>
  <div class="app">
    <header>
      <nav>
        <h1>Инфопортал</h1>
        <ul>
          <li><router-link to="/">Главная</router-link></li>
        </ul>
      </nav>
    </header>

    <main>
      <router-view></router-view>
    </main>

    <footer>
      <p>© 2024 Инфопортал</p>
    </footer>
  </div>
</template>

<style>
.app {
  font-family: Arial, sans-serif;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

header {
  background-color: #f8f9fa;
  padding: 20px;
  margin-bottom: 20px;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav h1 {
  margin: 0;
  color: #333;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 20px;
  margin: 0;
  padding: 0;
}

nav a {
  text-decoration: none;
  color: #666;
}

nav a:hover {
  color: #333;
}

main {
  padding: 40px;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  min-height: 800px;
}

footer {
  margin-top: 20px;
  text-align: center;
  color: #666;
  padding: 20px;
  background-color: #f8f9fa;
}
</style>
