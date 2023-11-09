// Gsap 3 version
const preloadDot = $(".preloader__container__preload__dot");
const tl = gsap.timeline({ repeat: 0 }); // Remove repeat to make it run once
tl
  .to(preloadDot, 0.05, { delay: 0.05, scale: 1.4, stagger: 0.025 }) // Decrease the duration
  .to(preloadDot, 0.05, { scale: 1, stagger: { amount: 0.1, from: "start" } }); // Decrease the duration

let counter = 0;
const loaderTimer = setInterval(function () {
  counter++;
  $(".preloader__container__percent").text(counter + "%");
  if (counter == 100) {
    clearInterval(loaderTimer);
    gsap.to(".preloader", 0.5, { y: "-100%" }); // Adjust the delay for a total of around 1 second
  }
}, 10); // Decrease the interval time