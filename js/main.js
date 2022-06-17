// var lastScrollTop = 0
// let header = document.getElementById('masthead')
// // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
// window.addEventListener(
//   'scroll',
//   function () {
//     var st = window.pageYOffset || document.documentElement.scrollTop // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
//     if (st > lastScrollTop) {
//       header.style.display = 'none'
//       header.style.transition = '.9s'
//     } else {
//       header.style.display = 'block'
//     }
//     lastScrollTop = st <= 0 ? 0 : st // For Mobile or negative scrolling
//   },
//   false
// )
var header = document.querySelector('.side-menu-ul')
var lis = header.getElementsByClassName('menu-item')
for (var i = 0; i < lis.length; i++) {
  lis[i].addEventListener('click', function () {
    var current = document.getElementsByClassName('active')
    if (current.length > 0) {
      current[0].className = current[0].className.replace(' active', '')
    }
    this.className += ' active'
  })
}

function expandCard(dataTarget) {
  let target = dataTarget
  let text = document.getElementById(`card-${target}`)
  let card = text.parentElement
  let title = card.getElementsByTagName('h4')[0]
  let year = card.querySelector('.galeria-year')
  let arrow = document.querySelector('.styled-down-icon')
  console.log(title)
  if (!title.classList.contains('text-white')) {
    title.classList.add('text-white')
    year.classList.add('text-white')
    card.style.backgroundColor = '#F08232'
    card.classList.add('h-100')
    arrow.classList.add = 'styled-up-arrow'
    arrow.classList.remove = 'styled-down-arrow'
    console.log('expand')
  } else if (title.classList.contains('text-white')) {
    title.classList.remove('text-white')
    year.classList.remove('text-white')
    card.style.backgroundColor = '#eee'
    card.classList.remove('h-100')
    arrow.classList.remove = 'styled-up-arrow'
    arrow.classList.add = 'styled-down-arrow'
    console.log('contrai')
  }
}

function expandCard(dataTarget) {
  let target = dataTarget
  let text = document.getElementById(`card-${target}`)
  let card = text.parentElement
  let arrow = document.querySelector('.styled-down-icon')
  console.log(title)
  if (!title.classList.contains('text-white')) {
    title.classList.add('text-white')
    year.classList.add('text-white')
    card.style.backgroundColor = '#F08232'
    card.classList.add('h-100')
    arrow.classList.add = 'styled-up-arrow'
    arrow.classList.remove = 'styled-down-arrow'
    console.log('expand')
  } else if (title.classList.contains('text-white')) {
    title.classList.remove('text-white')
    year.classList.remove('text-white')
    card.style.backgroundColor = '#eee'
    card.classList.remove('h-100')
    arrow.classList.remove = 'styled-up-arrow'
    arrow.classList.add = 'styled-down-arrow'
    console.log('contrai')
  }
}
