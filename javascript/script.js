var navLinks = document.getElementById("navLinks");

function showMenu() {
  navLinks.style.right = "0";
  localStorage.setItem("menuStatus", "shown");
}

function hideMenu() {
  navLinks.style.right = "-200px";
  localStorage.setItem("menuStatus", "hidden");
}

document.addEventListener("DOMContentLoaded", function () {
  let menuStatus = localStorage.getItem("menuStatus");

  if (menuStatus === "shown") {
    showMenu();
  } else {
    hideMenu();
  }
});

// Testimonial
var btn = document.getElementsByClassName("btn");
var slide = document.getElementById("slide");

btn[0].onclick = function () {
  slide.style.transform = "translateX(0)";
  for (var i = 0; i < btn.length; i++) {
    btn[i].classList.remove("active");
  }
  this.classList.add("active");
};
btn[1].onclick = function () {
  slide.style.transform = "translateX(-800px)";
  for (var i = 0; i < btn.length; i++) {
    btn[i].classList.remove("active");
  }
  this.classList.add("active");
};
btn[2].onclick = function () {
  slide.style.transform = "translateX(-1600px)";
  for (var i = 0; i < btn.length; i++) {
    btn[i].classList.remove("active");
  }
  this.classList.add("active");
};
btn[3].onclick = function () {
  slide.style.transform = "translateX(-2400px)";
  for (var i = 0; i < btn.length; i++) {
    btn[i].classList.remove("active");
  }
  this.classList.add("active");
};

const newSection = document.querySelector(".new-section");
const overlay = newSection.querySelector(".overlay");
const showModalBtn = newSection.querySelector(".show-modal");
const closeBtn = newSection.querySelector(".close-btn");

showModalBtn.addEventListener("click", () => {
  newSection.classList.add("active");
  showAlert();
});

overlay.addEventListener("click", () => newSection.classList.remove("active"));

closeBtn.addEventListener("click", () => newSection.classList.remove("active"));
function showAlert() {
  alert("Testing alert");

  let confirmation = confirm("Yakin lu pengen ngelanjutin?");

  if (confirmation) {
    console.log("Ngoke!");
  } else {
    console.log("Aduhhh!");
  }
}
