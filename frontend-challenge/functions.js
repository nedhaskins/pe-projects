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
						price: parseFloat(item.price),
						sale: parseFloat(item.sale),
						isFavorited: false,
					}
				]
			});

		//If an object with that "name" value already exists, simply make a new item with the current item's data and push it to the matching object that shares a "cat" value with the "name" value.	
		} else {
			existingCategory.products.push({
			name: item.product,
			price: parseFloat(item.price),
			sale: parseFloat(item.sale),
			isFavorited: false,
		});
		}
		return acc;
	}, []);
	return transformedObject;
}

async function renderData() {	
	var array = await transformData();
	renderHomeView(array);
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
				<summary>
					<h2>${category.name}</h2>
					<icon-wrapper>
						<svg class="arrow" width="100%" height="100%" viewBox="0 0 347 400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><path d="M346.326,199.957l-346.326,199.958l-0,-399.915l346.326,199.957Z"/></svg>
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
			<picture>
				<img src="photos/truly-cans.jpg">
				</img>
				<button class="favorite-toggle ${iconClass(item)}">
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
			<div class="item-name">
				<h3 class="name">${item.name}</h3>
			</div>
			<div class="prices">
				<div class="price"><p>${item.price}</p></div>
				<div class="sale"><p>${item.sale}</p></div>
			</div>
		</product-card>
	`;
}




function renderAboutPage() {
	const template = `
		<section class="about">
			<p>This is a frontend engineer challenge.</p>
			<p>State the goals of the project.</p>
			<p>Explain each component.</p>
			<p>In fact, the entire case study should probably go here.</p>
		</section>`;

	outlet.innerHTML = template;
}





function renderFavoritesView() {
	//check local storage for items that are in favorites
	//for each item in the local storage
	if(favorites) {

		var template = `
			<div class="favorites">
				<h2>favorites</h2>
				<ul class="product-list">`;

		//return a product card for each item in local storage
		favorites.forEach((favorite) => {
			template += `<li>${renderCard(favorite)}</li>`;
		})

		template += `</ul></div>`;
		outlet.innerHTML = template;
	}
}

function addEventListeners() {
/**Event listeners for 'outlet', the main output area for the application -- can hold any of the views available**/

	outlet.addEventListener('click', (event) => {

		//Initial variables to use in DOM and event listeners
		const categoryId = event.target.closest('.category')?.dataset.id;
		const price = outlet.querySelector('.price').textContent; 
		const sale = outlet.querySelector('.sale').textContent;
		const details = event.target.closest('details');


		if(event.target.tagName === 'BUTTON') {

			const productId = event.target.closest('product-card').dataset.id;

			if(!event.target.classList.contains('active')) {
				
				const product = {
					category: categoryId,
					name: productId,
					price: price,
					sale: sale,
					isFavorited: true,
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
				if(event.target.closest('div').className === 'favorites') {
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
		if(event.target.id === 'about') {
			renderAboutPage();
		}

		if(event.target.id === 'home') {
			renderData();
		}

		if(event.target.id === 'favorites') {
			renderFavoritesView();
		}
	})
}