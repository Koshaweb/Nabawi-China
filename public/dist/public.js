


const orderbtn = document.getElementById('orderbtn');
const orderlayer = document.getElementById('orderlayer');
const ordermodel = document.getElementById('ordermodel');
const closeorder = document.getElementById('closeorder');

orderbtn.addEventListener('click', function(e){
    e.preventDefault();
    orderlayer.style.display= 'block';
    ordermodel.style.display= 'flex';

});


closeorder.addEventListener('click', function(e){
    e.preventDefault();
    orderlayer.style.display= 'none';
    ordermodel.style.display= 'none';

});


orderlayer.addEventListener('click', function(e){
    e.preventDefault();
    orderlayer.style.display= 'none';
    ordermodel.style.display= 'none';

});



