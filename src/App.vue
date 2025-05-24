<script setup>
import { ref } from 'vue'

const isMobileMenuOpen = ref(false)

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}
</script>

<template>
  <div class="app">
    <header class="header">
      <div class="header-content">
        <div class="logo-section">
          <h1>Инфопортал</h1>
        </div>
        
        <button class="mobile-menu-button" @click="toggleMobileMenu">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <nav :class="{ 'is-open': isMobileMenuOpen }">
          <ul>
            <li><router-link to="/" @click="isMobileMenuOpen = false">Главная</router-link></li>
            <li><router-link to="/investment-declaration" @click="isMobileMenuOpen = false">Инвестиционная декларация</router-link></li>
            <li><router-link to="/investment-agency" @click="isMobileMenuOpen = false">Агентство инвестиционного развития</router-link></li>
            <li><router-link to="/investment-map" @click="isMobileMenuOpen = false">Инвестиционная карта</router-link></li>
            <li><router-link to="/investment-committee" @click="isMobileMenuOpen = false">Инвестиционный комитет</router-link></li>
            <li><router-link to="/investment-rules" @click="isMobileMenuOpen = false">Свод инвестиционных правил</router-link></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <router-view v-slot="{ Component }">
        <transition name="fade" mode="out-in">
          <component :is="Component" />
        </transition>
      </router-view>
    </main>

    <footer>
      <div class="footer-content">
        <p>© 2025 Инфопортал Челябинской области</p>
        <div class="footer-links">
          <a href="#">Контакты</a>
          <a href="#">Правовая информация</a>
        </div>
      </div>
    </footer>
  </div>
</template>

<style>
:root {
  --primary-color: #0066ff;
  --primary-light: #4d8fff;
  --primary-dark: #0047b3;
  --secondary-color: #3385ff;
  --text-color: #333333;
  --text-light: #666666;
  --background-light: #f5f8ff;
  --white: #ffffff;
  --shadow-color: rgba(0, 102, 255, 0.1);
  --transition-speed: 0.3s;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', 'Arial', sans-serif;
  line-height: 1.6;
  color: var(--text-color);
  background-color: var(--background-light);
}

.app {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

.header {
  background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
  padding: 0;
  position: sticky;
  top: 0;
  z-index: 1000;
  box-shadow: 0 2px 8px var(--shadow-color);
}

.header-content {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;
}

.logo-section h1 {
  color: var(--white);
  font-size: 1.8rem;
  font-weight: 500;
  margin: 0;
}

nav {
  flex-grow: 1;
  margin-left: 40px;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 30px;
  justify-content: flex-end;
  align-items: center;
}

nav a {
  text-decoration: none;
  color: var(--white);
  font-size: 1rem;
  font-weight: 500;
  padding: 8px 0;
  position: relative;
  transition: all var(--transition-speed) ease;
}

nav a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: var(--white);
  transition: width var(--transition-speed) ease;
}

nav a:hover::after,
nav a.router-link-active::after {
  width: 100%;
}

.mobile-menu-button {
  display: none;
  background: none;
  border: none;
  cursor: pointer;
  padding: 10px;
}

.mobile-menu-button span {
  display: block;
  width: 25px;
  height: 2px;
  background-color: var(--white);
  margin: 5px 0;
  transition: var(--transition-speed) ease;
}

main {
  flex-grow: 1;
  max-width: 1400px;
  width: 100%;
  margin: 40px auto;
  padding: 0 20px;
  background: transparent;
}

.footer {
  background-color: var(--primary-dark);
  color: var(--white);
  padding: 40px 0;
  margin-top: auto;
}

.footer-content {
  max-width: 1400px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-links {
  display: flex;
  gap: 20px;
}

.footer-links a {
  color: var(--white);
  text-decoration: none;
  transition: opacity var(--transition-speed) ease;
}

.footer-links a:hover {
  opacity: 0.8;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity var(--transition-speed) ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

@media (max-width: 1024px) {
  nav ul {
    gap: 20px;
  }
  
  nav a {
    font-size: 0.9rem;
  }
}

@media (max-width: 768px) {
  .header-content {
    height: 60px;
  }

  .mobile-menu-button {
    display: block;
    z-index: 1001;
  }

  .is-open .mobile-menu-button span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }

  .is-open .mobile-menu-button span:nth-child(2) {
    opacity: 0;
  }

  .is-open .mobile-menu-button span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -7px);
  }

  nav {
    position: fixed;
    top: 0;
    right: -100%;
    width: 100%;
    height: 100vh;
    background-color: var(--primary-color);
    margin: 0;
    padding: 80px 20px 20px;
    transition: right var(--transition-speed) ease;
  }

  nav.is-open {
    right: 0;
  }

  nav ul {
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
  }

  nav a {
    font-size: 1.1rem;
    width: 100%;
    padding: 10px 0;
  }

  .footer-content {
    flex-direction: column;
    gap: 20px;
    text-align: center;
  }
}
</style>
