const all = document.getElementById('all');
const web = document.getElementById('web');
const mobile = document.getElementById('mobile');
const graphic = document.getElementById('graphic');
const works = document.getElementById('all-works');

all.addEventListener('click', () => {
    works.querySelectorAll('li').forEach(item => {
        item.classList.remove('hide');
    });
})

web.addEventListener('click', () => {
    works.querySelectorAll('li').forEach(item => {
        if (item.classList.contains('web')) {
            item.classList.remove('hide');
        }

        else {
            item.classList.add('hide');
        }
    });
})

web.addEventListener('click', () => {
    works.querySelectorAll('li').forEach(item => {
        if (item.classList.contains('web')) {
            item.classList.remove('hide');
        }

        else {
            item.classList.add('hide');
        }
    });
})

mobile.addEventListener('click', () => {
    works.querySelectorAll('li').forEach(item => {
        if (item.classList.contains('mobile')) {
            item.classList.remove('hide');
        }

        else {
            item.classList.add('hide');
        }
    });
})

graphic.addEventListener('click', () => {
    works.querySelectorAll('li').forEach(item => {
        if (item.classList.contains('graphic')) {
            item.classList.remove('hide');
        }

        else {
            item.classList.add('hide');
        }
    });
})

const witch = document.getElementById('day-night');
const body = document.querySelector('body');

witch.addEventListener('click', () => {
    if (body.id == "light"){
        body.id = 'dark';
    }else {
        body.id = "light";
    }
})