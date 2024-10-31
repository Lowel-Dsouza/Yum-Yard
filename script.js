const dropdownButton = document.querySelector('.dropbtn');
const dropdown = document.querySelector('.dropdown');


dropdownButton.addEventListener('click', function (event) {
    event.preventDefault(); 
    dropdown.classList.toggle('active');
});


window.addEventListener('click', function (event) {
    if (!dropdown.contains(event.target)) {
        dropdown.classList.remove('active');
    }
});

const searchButton = document.getElementById('searchButton');
const searchInput = document.getElementById('searchInput');


searchButton.addEventListener('click', function() {
 
    if (searchInput.style.display === 'none' || searchInput.style.display === '') {
        searchInput.style.display = 'block';
        searchInput.focus();
    } else {
        
        searchInput.style.display = 'none';
    }
});

searchInput.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        const searchTerm = searchInput.value.toLowerCase();
        if (searchTerm) {
            alert('Searching for: ' + searchTerm);
        } else {
            alert('Please enter a search term.');
        }
    }
});
