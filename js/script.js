// I couldn't implement the Slide Down a Bar on Scroll without using javascript :(

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("header").style.top = "4%";
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


const clickRatL = document.getElementById('big-rat');
const clickRatR = document.getElementById('new-rat');

//changes the webpage when the left rat is clicked
clickRatL.addEventListener('click', () => {
    document.body.style.backgroundColor = 'black';
    document.getElementById('easter-egg').style.display = 'block';
});

//changes the webpage when the right rat is clicked
clickRatR.addEventListener('click', () => {
  document.body.style.backgroundColor = 'white';
  document.getElementById('easter-egg').style.display = 'none';
});