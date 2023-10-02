const troll = document.getElementById('lol');
const lastLaugh = document.createElement('div');
const lineBreak = document.createElement('br');

lastLaugh.textContent = 'YOUR APPLICATION HAS BEEN DELETED SUCCESSFULLY';
lastLaugh.style.color = 'green';
lastLaugh.style.fontWeight = 'bold';
lastLaugh.style.fontSize = 'xx-large';


document.getElementById('last-laugh').appendChild(lineBreak);
document.getElementById('last-laugh').appendChild(lastLaugh);

troll.addEventListener('click', () => {
    document.getElementById('last-laugh').style.display = 'block';
    document.getElementById('hon-form').remove();
})