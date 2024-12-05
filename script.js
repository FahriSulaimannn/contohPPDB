const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

// Get modal element
const modal = document.getElementById("myModal");
// Get the button that opens the modal
const plusIcon = document.querySelector(".bx-plus");
// Get the <span> element that closes the modal
const closeModal = document.querySelector(".close");
// Get the back button
const backBtn = document.getElementById("backBtn");

// Open modal on clicking plus icon
plusIcon.addEventListener("click", () => {
    modal.style.display = "block";
});

// Close modal when clicking on the close icon
closeModal.addEventListener("click", () => {
    modal.style.display = "none";
});

// Close modal when clicking the back button
backBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Close modal if clicking outside of the modal
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.status').forEach(button => {
        button.addEventListener('click', () => {
            const userId = button.getAttribute('data-id');
            const action = button.classList.contains('approve') ? 'approve' : 'cancel';

            fetch('action.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${userId}&action=${action}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    window.location.reload(); // Refresh untuk melihat perubahan
                } else {
                    alert('Gagal: ' + data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});
