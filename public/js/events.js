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
        title: 'CSE Hack !T',
        year: '2019',
        mini_logo_className: 'hackit-mini-logo',
        mini_logo: 'img/logo.svg',
        logo: './img/Groupe 37629.png',
        alt: 'Hack !T logo',
        logo_className: 'hackit-logo',
        video: "https://www.youtube.com/embed/0weQDE2xqJo"
    },
    {
        name: 'Leapfrog',
        title: 'CSE LeapFrog',
        year: '2019',
        mini_logo_className: 'leapfrog-mini-logo',
        mini_logo: './img/Groupe 10158.svg',
        logo: './img/Groupe 37630.png',
        logo_className: 'leapfrog-logo',
        alt: 'Leapfrog logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'ConfsDay',
        title: 'CSE Confs Day',
        year: '2019',
        mini_logo_className: 'confsday-mini-logo',
        mini_logo: './img/Groupe 10161.svg',
        logo: './img/Groupe 10161.svg',
        logo_className: 'confsday-logo',
        alt: 'ConfsDay logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'Local Hack Day',
        title: 'Local Hack Day Algiers',
        year: '2019',
        mini_logo_className: 'lhd-mini-logo',
        mini_logo: 'img/Groupe 37547.svg',
        logo: './img/Asset 2.png',
        logo_className: 'lhd-logo',
        alt: 'LHD logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'Casbahtech <br/> Hackathon',
        title: 'Casbahtech Hackathon',
        year: '2019',
        mini_logo_className: 'casbahtech-mini-logo',
        mini_logo: './img/Groupe 10164.svg',
        logo: './img/Groupe 37631.png',
        logo_className: 'casbahtech-logo',
        alt: 'Casbahtch logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
    {
        name: 'Smart Mobility <br/> Challenge',
        title: 'Smart Mobility Challenge',
        year: '2019',
        mini_logo_className: 'smc-mini-logo',
        mini_logo: 'img/Rectangle 55.png',
        logo: 'img/Rectangle 55.png',
        logo_className: 'smc-logo',
        alt: 'SMC logo',
        video: "https://www.youtube.com/embed/OfvA7UXEPJE"
    },
]

events.map((element, i) => {
    var left_side_container = document.querySelector('.left-side-container')
    var big_logo_circle = document.querySelector('.big-logo-circle')
    var videos_container = document.querySelector('.videos-container')
    var names_list = document.querySelector('.events-names-list')
    var titles_list = document.querySelector('.events-titles-list')

    if (i === 1) {
        is_selected = ''
    }
    titles_list.appendChild(creatEventTitle(element, i))
    videos_container.firstElementChild.appendChild(createVideoItem(element, i))
    names_list.appendChild(createEventName(element, i))
    big_logo_circle.appendChild(createLogoItem(element, i))
    left_side_container.appendChild(createEventItem(element, is_selected))
})

function createLogoItem(element, i) {
    var current_img = document.createElement('div')
    if (i === 0) {
        current_img.classList.add('big-logo', 'in-middle')
    } else {
        current_img.classList.add('big-logo', 'in-left')
    }
    current_img.innerHTML = '<img class="' + element.logo_className + '" src="' + element.logo + '" alt="' + element.alt + '"/>'
    return current_img
}

function createVideoItem(element, i) {
    var current_video = document.createElement('div')
    if (i === 0) {
        current_video.innerHTML = '<iframe class="event-video is-showed" src=' + element.video + ' frameborder="0"></iframe>'
    } else {
        current_video.innerHTML = '<iframe class="event-video" src="' + element.video + '"frameborder="0"></iframe>'
    }
    return current_video.firstElementChild
}

function createEventName(element, i) {
    var actual_name = document.createElement('p')
    actual_name.classList.add('event-name-mobile')
    if (i === 0) {
        actual_name.classList.add('selected-event-name-mobile', 'bold')
    }
    actual_name.innerHTML = element.name
    return actual_name
}

function creatEventTitle(element, i) {
    var actual_title = document.createElement('div')
    var title = document.createElement('p')
    var year = document.createElement('p')

    actual_title.classList.add('event-full-title')
    title.classList.add('bold')
    if (i === 0) {
        actual_title.classList.add('is-showed')
    }
    title.innerHTML = element.title
    year.innerHTML = element.year
    actual_title.appendChild(title)
    actual_title.appendChild(year)
    return actual_title
}

function createEventItem(element, is_selected) {
    var event_item = document.createElement('div')
    event_item.innerHTML = "<div class='event-item " + is_selected + "'>" +
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
    return event_item.firstElementChild
}

window.addEventListener('resize', () => {
    if (document.querySelectorAll('.mini-logo').length > 6) {
        setTimeout(() => {
            document.querySelector('.left-side-container').scrollTo({
                left: scroll_to_left ? (currentRow - 1) * document.querySelector('.left-side-container').clientWidth * 5 / 6 : (currentRow - 3) * document.querySelector('.left-side-container').clientWidth * 5 / 6,
                behavior: 'smooth'

            })
        }, 1)
    }
})

function getDistance(e1, e2) {
    var x1 = e1.getBoundingClientRect().left
    var x2 = e2.getBoundingClientRect().left
    return Math.abs(x1 - x2)
}

function setPointerEvents(className, state) {
    document.querySelectorAll(className).forEach(element => {
        if (state==='none') {
            element.classList.add('none-pointer')
        } else {
            element.classList.remove('none-pointer')
        }
    })
}

function animateLogos(j) {
    if (j !== currentIndex) {
        var big_logos = document.querySelectorAll('.big-logo')
        setPointerEvents('.mini-logo', 'none')
        setPointerEvents('.event-name-mobile', 'none')
        big_logos[j].addEventListener('transitionend', () => {
            setPointerEvents('.mini-logo', 'all')
            setPointerEvents('.event-name-mobile', 'all')
            big_logos[j].removeEventListener('transitionend', e => { })
        })
        // if (!indexesInRight.includes(j) || true ) {
        if (big_logos[j].classList.contains('in-left')) {
            big_logos[currentIndex].classList.add('in-right')
            indexesInRight.unshift(currentIndex)
            big_logos[j].classList.remove('in-left')
        } else {
            big_logos[currentIndex].classList.add('in-left')
            big_logos[j].classList.remove('in-right')
            // big_logos[currentIndex].classList.add('in-left')
            // for (let i = 0; i < indexesInRight.indexOf(j) + 1; i++) {
            //     const element = indexesInRight[i];
            //     setTimeout(() => {
            //         if (j === element) {
            //             big_logos[element].classList.remove('in-right')
            //             indexesInRight.shift()
            //         } else {
            //             big_logos[element].classList.replace('in-right', 'in-left')
            //             indexesInRight.shift()
            //         }
            //     }, 150 * (i + 1))
            // }
        }
    }
}

document.querySelectorAll('.mini-logo').forEach(
    (element, i) => {
        element.addEventListener('click', (e) => {
            animateLogos(i)
            document.querySelector('.selected-event-name-mobile').classList.remove('bold', 'selected-event-name-mobile')
            document.querySelectorAll('.event-name-mobile')[i].classList.add('bold', 'selected-event-name-mobile')
            preSelected = document.querySelectorAll('.mini-logo')[currentIndex].parentNode.parentNode
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

            if (i > currentIndex + 1) {
                root.style.setProperty('--offset', '-' + getDistance(newSelected, preSelected) + "px");
                newSelected.classList.add('to-left')
                preSelected.classList.add('no-transition')
                preSelected.classList.remove('is-Selected')
                setTimeout(() => {
                    preSelected.classList.remove('no-transition')
                    newSelected.classList.remove('to-left')
                    newSelected.classList.add('is-Selected')
                }, 15)
            } else if (i < currentIndex - 1) {
                root.style.setProperty('--offset', + getDistance(newSelected, preSelected) + "px");
                newSelected.classList.add('to-left')
                preSelected.classList.add('no-transition')
                preSelected.classList.remove('is-Selected')
                setTimeout(() => {
                    preSelected.classList.remove('no-transition')
                    newSelected.classList.remove('to-left')
                    newSelected.classList.add('is-Selected')
                }, 15)
            } else {
                preSelected.classList.remove('is-Selected')
                newSelected.classList.add('is-Selected')
            }
            currentIndex = i
            // document.querySelectorAll('.event-video.is-showed')[0].src = document.querySelectorAll('.event-video.is-showed')[0].src
            document.querySelectorAll('.event-video.is-showed')[0].classList.remove('is-showed')
            document.querySelectorAll('.event-video')[i].classList.add('is-showed')
            document.querySelectorAll('.event-full-title.is-showed')[0].classList.remove('is-showed')
            document.querySelectorAll('.event-full-title')[i].classList.add('is-showed')
        })
    }
)

document.querySelectorAll('.event-name-mobile').forEach(
    (element, i) => {
        element.addEventListener('click', (e) => {
            animateLogos(i)
            document.querySelector('.selected-event-name-mobile').classList.remove('bold', 'selected-event-name-mobile')
            element.classList.add('bold', 'selected-event-name-mobile')
            preSelected = document.querySelectorAll('.is-Selected')[0]
            newSelected = document.querySelectorAll('.mini-logo')[i].parentNode.parentNode
            if (i % 5 === 0 && i !== 0 && i !== document.querySelectorAll('.mini-logo').length - 1 ||
                (i === document.querySelectorAll('.mini-logo').length - 6 && currentRow === parseInt((document.querySelectorAll('.mini-logo').length - 1) / 5 + 1))) {
                scroll_to_left = i / 5 === currentRow ? true : false
                currentRow = i / 5 === currentRow ? currentRow + 1 : currentRow - 1
            }
            currentIndex = i
            preSelected.classList.remove('is-Selected')
            newSelected.classList.add('is-Selected')
            document.querySelectorAll('.event-video.is-showed')[0].classList.remove('is-showed')
            document.querySelectorAll('.event-video')[i].classList.add('is-showed')
            document.querySelectorAll('.event-full-title.is-showed')[0].classList.remove('is-showed')
            document.querySelectorAll('.event-full-title')[i].classList.add('is-showed')
        })
    }
)
