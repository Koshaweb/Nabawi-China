import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



const sidebarbtn = document.getElementById('sidebarbtn');
const sidebar = document.getElementById('sidebar');
const closesidebar = document.getElementById('closesidebar');

sidebarbtn.addEventListener('click', function(e){
    e.preventDefault();
    sidebar.style.transform = 'translateX(0px)';
});


closesidebar.addEventListener('click', function(e){
    e.preventDefault();
    sidebar.style.transform = 'translateX(-288px)';
});


const reviewbtn = document.getElementById('reviewbtn');
const reviewlayer = document.getElementById('reviewlayer');
const reviewmodel = document.getElementById('reviewmodel');
const closebtn = document.getElementById('closebtn');

reviewbtn.addEventListener('click', function(e){
    e.preventDefault();
    reviewlayer.style.display= 'block';
    reviewmodel.style.display= 'flex';

});


closebtn.addEventListener('click', function(e){
    e.preventDefault();
    reviewlayer.style.display= 'none';
    reviewmodel.style.display= 'none';

});


reviewlayer.addEventListener('click', function(e){
    e.preventDefault();
    reviewlayer.style.display= 'none';
    reviewmodel.style.display= 'none';

});





 // Handle file input change event
 function handleFileSelect(input) {
    const label = input.nextElementSibling; // Get the label associated with the input
    const fileName = input.files[0]?.name || "Choose file";

    // Update the label text with the selected file name
    label.textContent = fileName;

    // Apply clear and visible feedback styles
    input.style.border = "3px solid #28a745"; // Green border
    label.style.backgroundColor = "#d4edda"; // Light green background
    label.style.color = "#155724"; // Dark green text
    label.style.fontWeight = "bold"; // Bold text
    label.style.padding = "10px";
    label.style.borderRadius = "5px";
    label.style.boxShadow = "0 0 5px #28a745";
    label.style.transition = "all 0.3s ease-in-out";
}
