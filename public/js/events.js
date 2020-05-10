function getDistance(e1, e2) {
    var x1 = e1.getBoundingClientRect().left
    var x2 = e2.getBoundingClientRect().left
    return Math.abs(x1 - x2)
}

let root = document.documentElement;
var currentIndex = 0

document.querySelectorAll('.mini-logo').forEach(
    (element, i) => {
        element.addEventListener('click', (e) => {
            preSelected = document.querySelectorAll('.is-Selected')[0]
            newSelected = element.parentNode.parentNode
            if (i - currentIndex > 2) {
                currentIndex = i
                root.style.setProperty('--offset', '-' + getDistance(newSelected, preSelected) + "px");
                newSelected.classList.add('to-left')
                preSelected.classList.add('no-transition')
                preSelected.classList.remove('is-Selected')
                setTimeout(() => {
                    preSelected.classList.remove('no-transition')
                    newSelected.classList.remove('to-left')
                    newSelected.classList.add('is-Selected')
                }, 10)
            } else {
                currentIndex = i
                preSelected.classList.remove('is-Selected')
                newSelected.classList.add('is-Selected')
            }
            document.querySelectorAll('.event-picture.is-showed')[0].classList.remove('is-showed')
            document.querySelectorAll('.event-picture')[i].classList.add('is-showed')
        })
    }
)
