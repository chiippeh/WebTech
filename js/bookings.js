const troll = document.getElementById('lol');
const lastLaugh = document.createElement('div');
lastLaugh.textContent = 'YOUR APPLICATION HAS BEEN DELETED SUCCESSFULLY';
lastLaugh.style.color = 'red';
lastLaugh.style.fontWeight = 'bold';

document.getElementById('last-laugh').appendChild(lastLaugh);

troll.addEventListener('click', () => {
    document.getElementById('last-laugh').style.display = 'block';
    document.getElementById('hon-form').remove();
})