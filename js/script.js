const lanugages = navigator.languages;
const lanugage = navigator.language;
const geolocation = navigator.geolocation;
const connection = navigator.connection;
const cookiesEnabled = navigator.cookieEnabled;

// const footer = document.querySelector('footer');
const bottomFooter = document.getElementById('bottom-footer');
const dashboard = document.querySelectorAll('.dashboard');
const container = document.getElementById('egg');

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

dashboard.forEach(element => {
  element.addEventListener('click', function() {
    // Code to run when a .dashboard element is clicked
    console.log('Dashboard element clicked');
    navigator.vibrate(5000);
    // Add your specific code here
  });
});

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



const clickRatL = document.getElementById('big-rat');
const clickRatR = document.getElementById('new-rat');
const easterEgg = document.createElement('p');
// Set attributes or properties for the new element
easterEgg.textContent = 'WELCOME TO THE RAT CULT ;)';
easterEgg.style.color = '#6f2079';
easterEgg.style.fontSize = 'x-large';
easterEgg.style.fontWeight = 'bold';

// Get a reference to the container where you want to insert the new element

// Append the new element to the container
container.appendChild(easterEgg);

//changes the webpage when the left rat is clicked
clickRatL.addEventListener('click', () => {

  document.body.style.backgroundColor = 'black';
  document.getElementById('egg').style.display = 'block';
});

//changes the webpage when the right rat is clicked
clickRatR.addEventListener('click', () => {
  document.body.style.backgroundColor = 'white';
  document.getElementById('egg').style.display = 'none';
});