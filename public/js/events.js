let root = document.documentElement;

var currentIndex = 0
var currentRow = 1
var scroll_to_left = false
var is_selected = "is-Selected"

var indexesInRight = []

// This array is our events' data
var events = [
    {
        name: 'Hack !T',
        mini_logo_className: 'hackit-mini-logo',
        mini_logo: 'img/logo.svg',
        logo: './img/Groupe 37629.png',
        alt: 'Hack !T logo',
        logo_className: 'hackit-logo',
        video: "https://www.youtube.com/embed/0weQDE2xqJo"
    },
    {
        name: 'Leapfrog',
        mini_logo_className: 'leapfrog-mini-logo',
        mini_logo: './img/Groupe 10158.svg',
        logo: './img/Groupe 37630.png',
        logo_className: 'leapfrog-logo',
        alt: 'Leapfrog logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'ConfsDay',
        mini_logo_className: 'confsday-mini-logo',
        mini_logo: './img/Groupe 10161.svg',
        logo: './img/Groupe 10161.svg',
        logo_className: 'confsday-logo',
        alt: 'ConfsDay logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'Local Hack Day',
        mini_logo_className: 'lhd-mini-logo',
        mini_logo: 'img/Groupe 37547.svg',
        logo: './img/Asset 2.png',
        logo_className: 'lhd-logo',
        alt: 'LHD logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'Casbahtech <br/> Hackathon',
        mini_logo_className: 'casbahtech-mini-logo',
        mini_logo: './img/Groupe 10164.svg',
        logo: './img/Groupe 37631.png',
        logo_className: 'casbahtech-logo',
        alt: 'Casbahtch logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'Smart Mobility <br/> Challenge',
        mini_logo_className: 'smc-mini-logo',
        mini_logo: 'img/Rectangle 55.png',
        logo: 'img/Rectangle 55.png',
        logo_className: 'smc-logo',
        alt: 'SMC logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
]
events.map((element, i) => {
    var left_side_container=document.querySelector('.left-side-container')
    var big_logo_circle=document.querySelector('.big-logo-circle')
    var videos_container=document.querySelector('.videos-container')
    if (i === 1) {
        is_selected = ''
    }
    if (i === 0) {
        big_logo_circle.innerHTML += '<img class="big-logo in-middle ' + element.logo_className + '" src="' + element.logo + '" alt="' + element.alt + '"/>'
        videos_container.firstElementChild.innerHTML +=  '<iframe class="event-video is-showed" src='+element.video+' frameborder="0"></iframe>'
    } else {
        big_logo_circle.innerHTML += '<img class="big-logo in-left ' + element.logo_className + '" src="' + element.logo + '" alt="' + element.alt + '"/>'
        videos_container.firstElementChild.innerHTML +=  '<iframe class="event-video" src="'+element.video+'"frameborder="0"></iframe>'
    }
    left_side_container.innerHTML += "<div class='event-item " + is_selected + "'>" +
        "<span class='event-item-top'>" +
        "<span></span>" +
        "<span></span>" +
        '<img src="' + element.mini_logo + '" alt="' + element.alt + '" class="' + element.mini_logo_className + ' mini-logo" />' +
        '</span>' +
        "<p class='event-item-title'>" + element.name + "</p>" +
        "<span class='event-item-bottom'>" +
        "<span></span>" +
        "<span></span>" +
        "<span></span>" +
        "</span>" +
        "</div>"
})

window.addEventListener('resize', () => {
    document.querySelector('.left-side-container').scrollTo({
        left: scroll_to_left ? (currentRow - 1) * document.querySelector('.left-side-container').clientWidth * 5 / 6 : (currentRow - 3) * document.querySelector('.left-side-container').clientWidth * 5 / 6,
        behavior: 'smooth'

    })
})


function getDistance(e1, e2) {
    var x1 = e1.getBoundingClientRect().left
    var x2 = e2.getBoundingClientRect().left
    return Math.abs(x1 - x2)
}

function setPointerEvents(className, state) {
    document.querySelectorAll(className).forEach(element => {
        element.setAttribute('pointer-events', state)
    })
}

function animateLogos(j) {
    if (j !== currentIndex) {
        setPointerEvents('.mini-logo', 'none')
        if (!indexesInRight.includes(j)) {
            document.querySelectorAll('.big-logo')[currentIndex].classList.replace('in-middle', 'in-right')
            indexesInRight.unshift(currentIndex)
            document.querySelectorAll('.big-logo')[j].classList.replace('in-left', 'in-middle')
            setPointerEvents('.mini-logo', 'all')
        } else {
            document.querySelectorAll('.big-logo')[currentIndex].classList.replace('in-middle', 'in-left')
            for (let i = 0; i < indexesInRight.indexOf(j) + 1; i++) {
                const element = indexesInRight[i];
                setTimeout(() => {
                    if (j === element) {
                        document.querySelectorAll('.big-logo')[element].classList.replace('in-right', 'in-middle')
                        indexesInRight.shift()
                        setTimeout(() => {
                            setPointerEvents('.mini-logo', 'all')
                        }, 300)
                    } else {
                        document.querySelectorAll('.big-logo')[element].setAttribute('transition-duration', '.6s')
                        document.querySelectorAll('.big-logo')[element].classList.replace('in-right', 'in-left')
                        setTimeout(() => {
                            document.querySelectorAll('.big-logo')[element].setAttribute('transition-duration', '.3s')
                        }, 600)
                        indexesInRight.shift()
                    }
                }, 150 * (i + 1))
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
            if (i % 5 === 0 && i !== 0 && i !== document.querySelectorAll('.mini-logo').length - 1 ||
                (i === document.querySelectorAll('.mini-logo').length - 6 && currentRow === parseInt((document.querySelectorAll('.mini-logo').length - 1) / 5 + 1))) {
                scroll_to_left = i / 5 === currentRow ? true : false
                setTimeout(() => {
                    newSelected.parentNode.scrollTo({
                        left: i / 5 === currentRow ? (currentRow) * document.querySelector('.left-side-container').clientWidth * 5 / 6 : (currentRow - 2) * document.querySelector('.left-side-container').clientWidth * 5 / 6,
                        behavior: 'smooth'

                    })
                    currentRow = i / 5 === currentRow ? currentRow + 1 : currentRow - 1
                }, 300)
            }

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
            document.querySelectorAll('.event-video.is-showed')[0].src=document.querySelectorAll('.event-video.is-showed')[0].src
            document.querySelectorAll('.event-video.is-showed')[0].classList.remove('is-showed')
            document.querySelectorAll('.event-video')[i].classList.add('is-showed')
        })
    }
)
