document.addEventListener("DOMContentLoaded", function () {
  const video = document.querySelector("#video");
  const bg = document.querySelector(".bg");
  const playButton = document.querySelector(".play-big");
  const heroContent = document.querySelector(".entry-content-video-hero");
  const controler = document.querySelector(".controls");
  let playFlag = true;
  let mutedFlag = true;
  function play() {
    if (playFlag) {
      playButton.classList.add("video-active");
      bg.classList.add("video-active");
      heroContent.classList.add("video-active");
      controler.children[0].style.pointerEvents = "none";
      controler.children[0].style.opacity = "1";
      controler.children[1].style.pointerEvents = "auto";
      controler.children[1].style.opacity = "0.3";
      video.play();
      playFlag = false;
    } else {
      playButton.classList.remove("video-active");
      bg.classList.remove("video-active");
      heroContent.classList.remove("video-active");
      controler.children[0].style.pointerEvents = "auto";
      controler.children[0].style.opacity = "0.3";
      controler.children[1].style.pointerEvents = "none";
      controler.children[1].style.opacity = "1";
      video.pause();
      playFlag = true;
    }
  }
  function mute() {
    if (mutedFlag) {
      controler.children[3].style.display = "none";
      controler.children[2].style.display = "block";
      controler.children[2].style.opacity = "1";
      controler.children[2].style.pointerEvents = "2";
      video.muted = true;
      mutedFlag = false;
    } else {
      controler.children[3].style.display = "block";
      controler.children[2].style.display = "none";
      controler.children[3].style.opacity = "0.3";
      video.muted = false;
      mutedFlag = true;
    }
  }
  playButton.addEventListener("click", play);
  video.addEventListener("ended", play);
  controler.children[0].addEventListener("click", play);
  controler.children[1].addEventListener("click", play);
  controler.children[2].addEventListener("click", mute);
  controler.children[3].addEventListener("click", mute);
});
