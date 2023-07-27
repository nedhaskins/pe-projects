async function fetchData() {
	try {
		var response = await fetch('https://raw.githubusercontent.com/neodigm/FED_Programming_Challenge/gh-pages/products.json');
		return response.json();
	} catch(error) {
		console.log(error);
	}
}

async function transformData() {
	var object = await fetchData();	
	var transformedObject = object.reduce(function(acc, item) {

		//Look at each item currently in the accumulator (there won't be any if this is the first loop) and check the "name" value of that object against the "cat" value of the current item. Each object's "name" value will be unique.
		var existingCategory = acc.find(function(element) {
			return element.name === item.cat;
		});

		//If that name value doesn't exist yet, add a new {} to the accumulator with that "name" value and push the individual item values within this object.
		if (!existingCategory) {
			acc.push({
				name: item.cat,
				products: [
					{
						name: item.product,
						price: new Intl.NumberFormat('us-US', { style: 'currency', currency: 'USD' }).format(item.price),
						sale: new Intl.NumberFormat('us-US', { style: 'currency', currency: 'USD' }).format(item.sale),
						isFavorited: false,
						photo: item.cat + "/" + item.product + ".jpg",
					}
				]
			});

		//If an object with that "name" value already exists, simply make a new item with the current item's data and push it to the matching object that shares a "cat" value with the "name" value.	
		} else {
			existingCategory.products.push({
			name: item.product,
			price: new Intl.NumberFormat('us-US', { style: 'currency', currency: 'USD' }).format(item.price),
			sale: new Intl.NumberFormat('us-US', { style: 'currency', currency: 'USD' }).format(item.sale),
			isFavorited: false,
			photo: item.cat + "/" + item.product + ".jpg",
		});
		}
		return acc;
	}, []);
	return transformedObject;
}

async function renderData() {	
	var array = await transformData();
	renderHomeView(array);
	console.log(array);
}	



function renderHomeView(categories) {
	var template = `<ul class="category-list">`;
	//Each list item in here is a category name in the JSON.
	// for(let i = 0; i < store.length; i++) {
	// 	template += `<li>${store[i].name}</li>`
	// }
	categories.forEach(function(category) {
		template += `<li class='category' data-id="${category.name}">${renderCategory(category)}</li>`;
	})
	template += `</ul>`;
	outlet.innerHTML = template;
}

/**
 * The following function provides a return value for the "details-open class".
 * Local storage will be checked for menus with a details class of open.
 * If that value is true, return "open"
 * if false, return undefined
 * 
 * It's connected to the function after it.
 * 
 **/

function detailsOpenCheck(category) {
	const isOpen = openMenus.find(item => item === category);
	if(isOpen) {
		return `<details open>`;
	} else {
		return `<details>`;
	}
}

function renderCategory(category) {
	var template = `
			${detailsOpenCheck(category.name)}
				<summary class='category-header'>
					<h2 class='category-name'>${category.name}</h2>
					<icon-wrapper>
						<svg class="arrow" width="100%" height="100%" viewBox="0 0 347 400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><path class='arrow__path' d="M346.326,199.957l-346.326,199.958l-0,-399.915l346.326,199.957Z"/></svg>
					</icon-wrapper>
				</summary>
				<div class="products">${renderProducts(category.products)}</div>
			</details>
			`;
	return template;	
}

function renderProducts(products) {
	var template = `<ul class="product-list">`;
	//for each product that matches the category,
	//return the product.
	products.forEach(function(product) {
		template += `<li>${renderCard(product)}</li>`;		
	})
	template +=	`</ul>`;
	return template;
}

function randomPhoto(array) {
	//choose a random photo from the array
	const photo = array[Math.floor(Math.random() * array.length)];
	return photo;
}

/**
 	* The next two functions work together.
 	* The iconClass() function compares the product's name to the products in the favorites list.``
 	* The return value of this function becomes the class of the button inside the product card.
 **/


function iconClass(item) {
	const favorited = favorites.find(favorite => favorite.name === item.name);
	//returns true or false

	if(favorited) {
		return "active";
	} else {
		return "";
	}
}

function renderCard(item) {
	return `
		<product-card data-id="${item.name}">
			<picture class='product-picture'>
				<img class='product-picture__img' width="300" height="300" src="photos/${item.photo}" alt="${item.name}">
				</img>
				<button title="Favorites Icon" class="favorite-toggle ${iconClass(item)}" data-gtag="favorite_trigger">
					<svg
						width="100%"
						height="100%"
						viewBox="0 0 258 190"
						version="1.1"
						xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink"
						xml:space="preserve"
						xmlns:serif="http://www.serif.com/"
						style="
							fill-rule: evenodd;
							clip-rule: evenodd;
							stroke-linecap: round;
							stroke-linejoin: round;
							stroke-miterlimit: 1.5;
						"">
						<path class="heart"
							d="M128.956,45.358c25.832,-46.015 77.498,-46.015 103.331,-27.609c25.833,18.406 25.833,55.218 -0,92.029c-18.083,27.609 -64.582,55.218 -103.331,73.624c-38.75,-18.406 -85.248,-46.015 -103.331,-73.624c-25.833,-36.811 -25.833,-73.623 -0,-92.029c25.832,-18.406 77.498,-18.406 103.331,27.609Z"></path>
					</svg>
				</button>
			</picture>
			<div class="product-name">
				<h3 class="product-name__copy">${item.name}</h3>
			</div>
			<div class="product-prices">
				<p class="product-prices__price">${item.price}</p>
				<p class="product-prices__sale">${item.sale}</p>
			</div>
		</product-card>
	`;
}

//I need something that will return the original data as is if it's the favorites page.


function renderAboutView() {
	const template = `
		<section class="about-section">
			<p class='about-section__copy'>The objective of this project was to use native HTML, CSS and JavaScript to craft<br>a simple frontend prototype for an e-commerce site.</p>
			<p class='about-section__copy'>Click <a href="https://github.com/neodigm/FED_Programming_Challenge/blob/gh-pages/Advanced_FED_Programming_Challenge.pdf">here</a> to view the project requirements!</p>
			<p class='about-section__copy'>Click <a href="https://peprojects.dev/alpha-4/ned/?page=case-study&slug=frontend-challenge">here</a> to read an in-depth case study of the project.</p>
		</section>`;

	outlet.innerHTML = template;
}

function renderFavoritesView() {
	//check local storage for items that are in favorites
	//for each item in the local storage
	if(favorites.length !== 0) {
		var template = `
			<div class="favorites-section">
				<h2>favorites</h2>
				<ul class="product-list">`;

		//return a product card for each item in local storage
		favorites.forEach((favorite) => {
			template += `<li>${renderCard(favorite)}</li>`;
		})

		template += `</ul></div>`;
		outlet.innerHTML = template;
	} else {
		var template = `
			<div class="favorites-section">
				<h3>There aren't any favorites yet! Check out our available products.</h3>	
			</div>`;
		outlet.innerHTML = template;
	}
}

function renderContactView() {
	var template = `
		<div class='contact-section'>
			<h1 class='contact-section__header'>Want to learn more?</h1>
			<p class='contact-section__copy'>Ned Haskins is a web designer based in Richmond, Virginia.</p>
			<p class='contact-section__copy'>He loves to connect with clients and work with them to achieve their goals!</p>
			<p class='contact-section__copy'>Email him at <a href="mailto:hello@nedhaskins.io">hello@nedhaskins.io</a> to start a conversation!</p>
		</div>
	`;
	outlet.innerHTML = template;
}

function addEventListeners() {
/**Event listeners for 'outlet', the main output area for the application -- can hold any of the views available**/

	outlet.addEventListener('click', (event) => {

		//Initial variables to use in DOM and event listeners
		const categoryId = event.target.closest('.category')?.dataset.id;
		const details = event.target.closest('details');

		if(event.target.tagName === 'BUTTON') {

			const productId = event.target.closest('product-card').dataset.id;
			const price = event.target.closest('product-card').querySelector('.product-prices__price').textContent; 
			const sale = event.target.closest('product-card').querySelector('.product-prices__sale').textContent;
			
			if(!event.target.classList.contains('active')) {
				
				const product = {
					category: categoryId,
					name: productId,
					price: price,
					sale: sale,
					isFavorited: true,
					photo: categoryId + "/" + productId + ".jpg",
				}

				favorites.push(product);
				localStorage.setItem('favorites', JSON.stringify(favorites));
				console.log(`${productId} was added to local storage successfully`, favorites);
		
				event.target.classList.add('active');

			} else if (event.target.classList.contains('active')) {

				const filtered = favorites.filter(product => product.name != productId);
				favorites = [...filtered];

				localStorage.setItem('favorites', JSON.stringify(favorites));
				console.log(`${productId} was removed from local storage.`, favorites)

				event.target.classList.remove('active');

				//Re-render the updated favorites page, as the data might have changed!!
				if(event.target.closest('div').className === 'favorites-section') {
					renderFavoritesView();
				}
			}
		}
			
		if(event.target.tagName === 'ICON-WRAPPER') {
		
			if(!details.open) {
				//add the menu's data-id to local storage
				openMenus.push(categoryId);
				localStorage.setItem('openMenus', JSON.stringify(openMenus));
				console.log('This menu is open and it\'s been stored in local storage!');			
			} else {
				//remove the menu's data-id from local storage	
				const filtered = openMenus.filter(menuName => menuName != categoryId);
				openMenus = [...filtered];

				localStorage.setItem('openMenus', JSON.stringify(openMenus));
				console.log('This menu is closed and it\'s been removed from local storage!');	
			}
		}
	})

	/**Event listeners for the header of the app.**/

	header.addEventListener('click', (event) => {
		event.preventDefault();
		if(event.target.id === 'home') {
			renderData();
		}

		if(event.target.id === 'about') {
			renderAboutView();
		}

		if(event.target.id === 'favorites') {
			renderFavoritesView();
		}

		if(event.target.id === 'contact') {
			renderContactView();
		}
	})

	/**Event listeners for the gtag (Google Analytics) captures.**/

	window.addEventListener('click', (event) => {
		if(event.target.dataset.gtag === 'favorite_trigger') {
			const name = event.target.closest('product-card').dataset.id;
			gtag('event', 'favorite_trigger', { productName: name });
		}
	})
}