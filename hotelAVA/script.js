let counter1 = 0;
let counter2 = 0;
let vvv='hhj';


  
const counterValue1 = document.getElementById('counter-value1');
const incrementBtn1 = document.getElementById('increment-btn1');
const decrementBtn1 = document.getElementById('decrement-btn1');

const counterValue2 = document.getElementById('counter-value2');
const incrementBtn2 = document.getElementById('increment-btn2');
const decrementBtn2 = document.getElementById('decrement-btn2');
const resetBtn = document.querySelector('#reset');
console.log(vvv);
// To increment the value of counter
if (typeof incrementBtn1 !== null) {
    incrementBtn1.addEventListener('click', () => {
        counter1++;
        counterValue1.innerHTML = counter1;
    });
  }

  
// To increment the value of counter
if (typeof incrementBtn2 !== 'null') {
    incrementBtn2.addEventListener('click', () => {
    counter2++;
    counterValue2.innerHTML = counter2;
});
  }
  


// To decrement the value of counter
if (typeof decrementBtn1 !== 'undefined') {
    decrementBtn1.addEventListener('click', () => 
{
    if(counter1 > 0 )
    {
        counter1--;
    }
    else counter1 = 0;
counterValue1.innerHTML = counter1;
});
  }
  


// To decrement the value of counter
if (typeof decrementBtn2 !== 'undefined') {
    decrementBtn2.addEventListener('click', () => 
    {
        if(counter2 >0 )
        {
            counter2--;
        }
        else counter2 = 0;
    counterValue2.innerHTML = counter2;
    });
  }
  


$(document).on('click', '#searchRooms', function(){
    console.log(vvv, counter2);
    $.ajax({
        url: 'reserved.php',
        type: 'POST',
        dataType: 'json',
        data: {
            grownup: 1,
            children: 2,
        }
    })
    
})