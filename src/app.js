const projects = [
	{
		id: 0,
		name: 'Coffe Shop',
		siteURL: 'http://www.joshuabgutierrez.com/WDV101/FINAL%20PROJECT/index.html',
		codeURL: 'github.repo',
		category: 'development',
		image: 'images/coffee-shop.jpg'
	},
	{
		id: 1,
		name: 'Starting Blog',
		siteURL: 'http://www.joshuabgutierrez.com/WDV341/PHP%20Final%20Project/index.php',
		codeURL: 'github.repo',
		category: 'development',
		image: 'images/blog.jpg'
	},
	{
		id: 2,
		name: 'Gym',
		siteURL: 'https://xd.adobe.com/view/d8744381-c809-43fa-7422-c050dd7f0e56-ae45/',
		codeURL: 'github.repo',
		category: 'design',
		image: 'images/gym.jpg'
	},
	{
		id: 3,
		name: 'Recipe Manager',
		siteURL: 'http://www.joshuabgutierrez.com/WDV321/Recipe%20Manager/index.html',
		codeURL: 'github.repo',
		category: 'development',
		image: 'images/recipe-manager.jpg'
	}
];

const responsiveItems = document.querySelectorAll('.responsive');
const toggleBar = document.querySelector('.responsive-menu-bar');
const closeNavButton = document.querySelector('.close');
const mainNav = document.querySelector('#main-nav');
const filterListLinks = document.querySelectorAll('.filter-list > span');
const projectsNode = document.querySelector('.projects');
const menuLinks = document.querySelectorAll('a[href^="#"]');

menuLinks.forEach((link) => {
	link.addEventListener('click', function(e) {
		e.preventDefault();

		document.querySelector(this.getAttribute('href')).scrollIntoView({
			behavior: 'smooth'
		});
	});
});

function toggleMenu() {
	Array.from(responsiveItems).forEach((item) => {
		item.classList.toggle('active');
	});
}

function fixNavBar() {
	const heightScrolled = window.scrollY;
	const mainNavHeight = mainNav.offsetTop + 100;

	if (heightScrolled > mainNavHeight) {
		mainNav.classList.add('fixed');
	} else {
		mainNav.classList.remove('fixed');
	}
}

function underlineCategory(e) {
	// Remove underline from all elements
	filterListLinks.forEach((link) => link.classList.remove('active'));
	// Add underline to only the item selected
	e.target.classList.add('active');
}

function displayProjects() {
	const output = [];
	projects.forEach((project) => {
		const projectContainer = `
			<div class="project-container animated fadeInRightBig" data-image=${project.image}>
				<p>${project.name}</p>
					<button><a href="${project.siteURL}" target="_blank" rel="noopener">See Project</a></button>
				</div>`;
		output.push(projectContainer);
	});
	projectsNode.innerHTML = output.join('');
}

function filterProjects(category) {
	category = category.toLowerCase();
	// Get all the projects that have the category passed in
	const projectsSelected = projects.filter(
		(project) => (category === 'all' ? project : project.category === category)
	);

	// Display the project containers
	displayProjectsSelected(projectsSelected);
}

function displayProjectsSelected(selectedProjects) {
	const output = [];
	// Display the project containers according to selected projects
	selectedProjects.forEach((project) => {
		const projectContainer = `
			<div class="project-container" data-image=${project.image}>
				<p>${project.name}</p>
					<button><a href="${project.siteURL}" target="_blank">See Project</a></button>
				</div>`;
		output.push(projectContainer);
	});
	// Append data to DOM
	projectsNode.innerHTML = output.join('');

	// Select current container and display the correct background image
	const currentContainers = document.querySelectorAll('.project-container');
	currentContainers.forEach((container) => {
		container.style.backgroundImage = `url('${container.dataset.image}')`;
	});
}

let executed = false;
function triggerAnimation() {
	const heightScrolled = window.scrollY;
	if (heightScrolled > 1100 && executed === false) {
		displayProjects();
		executed = true;
	}
}

toggleBar.addEventListener('click', toggleMenu);
closeNavButton.addEventListener('click', toggleMenu);
document.addEventListener('scroll', () => {
	fixNavBar();
	triggerAnimation();
});

filterListLinks.forEach((link) => {
	link.addEventListener('click', (event) => {
		underlineCategory(event);
		filterProjects(event.target.textContent);
	});
});
