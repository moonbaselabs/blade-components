import Menu from './components/menu'

if (window.Alpine) {
  console.error('Alpine components must be included before AlpineJs')
}

window.Components = window.Components || {}

window.Components.menu = Menu
