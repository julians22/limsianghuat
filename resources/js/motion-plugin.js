import { animate, inView, stagger, scroll } from "motion";

const cardStackWrapper = document.querySelector('.card_distribution__wrapper');

if (cardStackWrapper) {
    const theCardElements = cardStackWrapper.querySelectorAll('.the_card');

    theCardElements.forEach((card, index) => {
        let cardContent = card.querySelector('.the_card_content');

        // each card must have offset top & incremented by 10px
        const cardOffsetTop = card.offsetTop + (index * 10);

        scroll(animate(cardContent, {
            scale: [0.9, 1],
            position: [0, cardOffsetTop],
        }, {
            target: cardContent,
            duration: 0.5,
            easing: 'ease-in-out',
        }));
    })

}


const counterTarget = document.querySelectorAll("[data-counter]");
const animateView = document.querySelectorAll("[data-animate-view]");

if (counterTarget.length > 0) {

    counterTarget.forEach((target, index) => {
        inView(target, async () => {
            const start = parseInt(target.getAttribute("data-counter-start"));
            const end = parseInt(target.getAttribute("data-counter-end"));
            const duration = parseInt(target.getAttribute("data-counter-duration"));


            // generate e delay increments by the target index
            const delay = await index * 100;

            // set a timeout to delay the counter start
            setTimeout(() => {
                // start the counter animation
                doCounter(target, start, end, duration);
            }, delay);
        }, {
            once: false,
        });
    });
}

if (animateView.length > 0) {
    animateView.forEach((target) => {
        const animateTargetClass = target.getAttribute("data-animate-target");

        inView(target, () => {
            animate(
                animateTargetClass,
                {
                    opacity: [0, 1],
                    scale: [0.8, 1]
                },
                { delay: stagger(0.1)}
            );
        }, {
            once: false,
        });
    });
}



function doCounter(target, start, end, duration) {
    // convert duration from 500 to 0.5 seconds
    duration = duration / 1000;

    target.textContent = start;

    animate(start, end, {
        duration: duration,
        easing: 'ease-in-out',
        onUpdate: (value) => {
            target.textContent = Math.floor(value);
        },
    })
}
