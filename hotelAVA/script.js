let counter = 0;
  
const counterValue = document.getElementById('counter-value1');
const incrementBtn = document.getElementById('increment-btn1');
const decrementBtn = document.getElementById('decrement-btn1');
const resetBtn = document.querySelector('#reset');
  
// To increment the value of counter
incrementBtn.addEventListener('click', () => {
    counter++;
    counterValue.innerHTML = counter;
});
  
// To decrement the value of counter
decrementBtn.addEventListener('click', () => {
    counter--;
    counterValue.innerHTML = counter;
});
  
// To reset the counter to zero
resetBtn.addEventListener('click', reset);
  
function reset() {
    counter = 0;
    counterValue.innerHTML = counter;
}