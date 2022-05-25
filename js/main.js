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
/*var header = document.querySelector('.side-menu-ul')
var lis = header.getElementsByClassName('menu-item')
for (var i = 0; i < lis.length; i++) {
  lis[i].addEventListener('click', function () {
    var current = document.getElementsByClassName('active')
    if (current.length > 0) {
      current[0].className = current[0].className.replace(' active', '')
    }
    this.className += ' active'
  })
}*/
