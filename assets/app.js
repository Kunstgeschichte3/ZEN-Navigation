const lbs = document.querySelectorAll('.lightbox');
const thaBtn = document.querySelector('#thaBtn'); // mama play button
const seek = document.querySelector('.seek');

let currentTrackID = "";
let num, duration;
let caption;


lbs.forEach(el => el.addEventListener('click', event => {
    dataId = event.target.getAttribute("data-id");
    console.log(event.target.getAttribute("data-id"));
    console.log(event.target);
    document.querySelector(`#th${dataId}`).scrollIntoView({ block: "center", inline: "center" })
}, true));


const tapes = document.querySelectorAll('.tape');
tapes.forEach(el => el.addEventListener('click', event => {
    el.children[0].focus();

}, true));
const ctrls = document.querySelectorAll('.ctrl');
const playerContainer = document.querySelector('.player-container');
playerContainer.setAttribute("data-init","");
const player = document.querySelector('.player audio');

ctrls.forEach(el => el.addEventListener('click', event => {
    el.classList.toggle("pause");
    el.classList.toggle("play");
    console.log(el.toggleAttribute("data-playing"));
    isPlaying = el.hasAttribute("data-playing");
    tapeBtn = document.querySelector(`.tape [data-id="${currentTrackID}"]`);
    if (!isPlaying) {
        //player.setAttribute("autoplay", "");
        player.pause();
        thaBtn.classList.remove("play");
        thaBtn.classList.add("pause");
        thaBtn.removeAttribute("data-playing");
        tapeBtn.classList.remove("play")
        tapeBtn.classList.add("pause");
        tapeBtn.removeAttribute("data-playing");


    } else {
        playerContainer.removeAttribute("data-init");
        currentTrackID = el.dataset.id;
        num = el.dataset.id;
        caption = el.dataset.caption;
        duration = el.dataset.duration;
        if (player.dataset.src !== el.dataset.src) {
            player.dataset.src = el.dataset.src;
            player.src = el.dataset.src;

            player.setAttribute("autoplay", "");
            player.load();


        } else {
            player.play();
        }

        id = el.dataset.id;
        thaBtn.classList.add("play");
        thaBtn.classList.remove("pause");
        thaBtn.setAttribute("data-playing", "");
        thaBtn.dataset.src = el.dataset.src;
        thaBtn.dataset.caption = el.dataset.caption;
        thaBtn.dataset.duration = el.dataset.duration;
        thaBtn.dataset.id = el.dataset.id;
        tapeBtn.classList.add("play")
        tapeBtn.classList.remove("pause");
        tapeBtn.setAttribute("data-playing", "");

        ctrls.forEach(el => {
            if (el.dataset.id !== id && el.id !== "thaBtn") {
                el.classList.remove("play");
                el.classList.add("pause");
                el.removeAttribute("data-playing");
            }
        });
    }
    //el.dataset.playing = !(el.dataset.playing);
    //console.log(el.hasAttribute("data-playing"));
    //console.log(el.dataset.src);

}));


function sec2time(timeInSeconds) {
    var pad = function (num, size) { return ('000' + num).slice(size * -1); },
        time = parseFloat(timeInSeconds).toFixed(3),
        hours = Math.floor(time / 60 / 60),
        minutes = Math.floor(time / 60) % 60,
        seconds = Math.floor(time - minutes * 60),
        milliseconds = time.slice(-3);

    return pad(hours, 2) + ':' + pad(minutes, 2) + ':' + pad(seconds, 2) + '.' + pad(milliseconds, 2);
}
function time2sec(timeInSeconds) {
    let actualTime = timeInSeconds.split(':');
    //console.log("The time="+time);
    let totalSeconds = (+actualTime[0]) * 60 * 60 + (+actualTime[1]) * 60 + (+actualTime[2]) ;
    return totalSeconds;
}

const playerCaption = document.querySelector("#player-caption");
const playerDuration = document.querySelector("#player-duration");
player.addEventListener('timeupdate', (event) => {
    currtime = player.currentTime;
    progress = [currtime / time2sec(duration) * 100];
    seek.value = progress;
    console.log(progress);
    time = sec2time(player.currentTime);

    //    console.log(time);
    playerCaption.innerHTML = `${caption} &mdash; <code>${time}</code>`;
    playerDuration.innerHTML = `<code>${duration}</code>`;
    document.querySelector(`.tape [data-id="${currentTrackID}"]`).dataset.currtime = currtime;
    document.querySelector("#currtime" + currentTrackID).innerHTML = `<code>${time}</code> &mdash; `;
});

playerCaption.addEventListener('click', (e) => {
    document.querySelector(`.tape [data-id="${currentTrackID}"]`).scrollIntoView({ block: "center" })
});

seek.addEventListener('change', (e)=> {
    seeking = true;
    player.pause();
    let seekPosition = e.target.value / 100;
    let playFrom = time2sec(duration) * seekPosition;
    player.currentTime = playFrom;
    seeking = false;
    player.play();
});

function updateProgress() {
    var duration = audio[i].duration;
    var multiplier = 100 / duration;
    var currentTime = audio[i].currentTime;
    seek.value = currentTime * multiplier;
}
