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

$('.owl-carousel1').owlCarousel({
    nav : true,
    loop : true,
    responsive : {
        600 : {
            items : 1
        },
        1000 : {
            items : 3
        }
    }
});

const witch = document.getElementById('day-night');
const body = document.querySelector('body');

witch.addEventListener('click', () => {
    if (body.id == "light"){
        body.id = 'dark';
    }else {
        body.id = "light";
    }
})

const service = document.querySelectorAll('#services > div > ul > li');

service.forEach(server => {
    server.querySelector('button')?.addEventListener('click', () => {
        server.querySelector( '.service__modal').classList.add('show');
        const scrollHead = document.scrollY;
        document.addEventListener('scroll', () => {
            document.scrollY = scrollHead;
        })
    })
})

document.querySelectorAll('.bi-x').forEach(x => {
        x.addEventListener('click', () => {
        document.querySelectorAll('.service__modal').forEach(modal => {
            modal.classList.remove('show');
        })
    })
})