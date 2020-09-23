const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        var timeout = 1;
        var inc = 1;
        if (target > 200) {
            timeout = 1
            inc = 4
        } else {
            timeout = Math.round(2000 / target)
        }

        if (count < target) {
            counter.innerText = count + inc;
            setTimeout(updateCount, timeout);
        } else {
            counter.innerText = target;
        }
    };
    var onAppear=e=>{
        var rect = counter.getBoundingClientRect()
        if (rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)) {
            updateCount()
            window.removeEventListener('scroll', onAppear)
        }

    }
    window.addEventListener('scroll', onAppear)
}); 