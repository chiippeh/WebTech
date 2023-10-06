// Get a reference to the container where you want to insert the new element
const container = document.getElementById('egg');
const clickRatL = document.getElementById('big-rat');
const clickRatR = document.getElementById('new-rat');
const easterEgg = document.createElement('p');

// Set attributes or properties for the new element
easterEgg.textContent = 'WELCOME TO THE RAT CULT ;)';
easterEgg.style.color = '#6f2079';
easterEgg.style.fontSize = 'x-large';
easterEgg.style.fontWeight = 'bold';

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
