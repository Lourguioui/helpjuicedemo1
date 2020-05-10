let root = document.documentElement;

var currentIndex = 0

var indexesInRight = []

function getDistance(e1, e2) {
    var x1 = e1.getBoundingClientRect().left
    var x2 = e2.getBoundingClientRect().left
    return Math.abs(x1 - x2)
}

function setPointerEvents(className, state){
    document.querySelectorAll(className).forEach(element => {
            element.setAttribute('pointer-events', state)
        })
}

function animateLogos(j) {
    if (j !== currentIndex) {
        setPointerEvents('.mini-logo','none')
        if (!indexesInRight.includes(j)) {
            document.querySelectorAll('.big-logo')[currentIndex].classList.replace('in-middle', 'in-right')
            indexesInRight.unshift(currentIndex)
            document.querySelectorAll('.big-logo')[j].classList.replace('in-left', 'in-middle')
            setPointerEvents('.mini-logo','all')
        } else {
            document.querySelectorAll('.big-logo')[currentIndex].classList.replace('in-middle', 'in-left')
            for (let i = 0; i < indexesInRight.indexOf(j) + 1; i++) {
                const element = indexesInRight[i];
                setTimeout(() => {
                    if (j === element) {
                        console.log('hna')
                        document.querySelectorAll('.big-logo')[element].classList.replace('in-right', 'in-middle')
                        indexesInRight.shift()
                        setTimeout(() => {
                            setPointerEvents('.mini-logo','all')
                        }, 300)
                    } else {
                        document.querySelectorAll('.big-logo')[element].classList.replace('in-right', 'in-left')
                        indexesInRight.shift()
                    }
                }, 200)
            }
        }
    }
}

document.querySelectorAll('.mini-logo').forEach(
    (element, i) => {
        element.addEventListener('click', (e) => {
            animateLogos(i)
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