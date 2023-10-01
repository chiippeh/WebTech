const lanugages = navigator.languages;
const lanugage = navigator.language;
const geolocation = navigator.geolocation;
const connection = navigator.connection;
const cookiesEnabled = navigator.cookieEnabled;

// const footer = document.querySelector('footer');
const bottomFooter = document.getElementById('bottom-footer');

// I couldn't implement the Slide Down a Bar on Scroll without using javascript :(

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("header").style.top = "4.5vh";
  } else {
    document.getElementById("header").style.top = "-50px";
  }
}

// I couldn't implement the Dropdown without using javascript :(

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
    }
    }
}
}

// Add brower language indicator to footer
let browserInfo = document.createElement("div");// create div
let cookieSymbol = "";
if (cookiesEnabled) {
  cookieSymbol = "&#10003";
} else {
  cookieSymbol = "&#735;"
}
browserInfo.innerHTML = `Browser Language: ${lanugage}&nbsp&nbsp&nbsp-&nbsp&nbsp&nbsp Cookies? ${cookieSymbol}`;
browserInfo.classList.add("center");
bottomFooter.appendChild(browserInfo);






