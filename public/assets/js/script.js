const dropdown = document.querySelector('.dropdown')
const drop = document.querySelector('.drop')
const menu = document.querySelector('.menu')


dropdown.addEventListener('mouseover', () => {
  menu.style.display = 'flex'
  drop.style.transform = 'rotate3d(0, 0, 1, 180deg)'
})

dropdown.addEventListener('mouseleave', () => {
  menu.style.display = 'none'
  drop.style.transform = 'rotate3d(0, 0, 1, 0deg)'
})