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






	//Prepare stored photos for the renderProduct() function.
	const photosArray = ["photos/gift-cards.jpg", "photos/holiday-gifts.jpg", "photos/invitations-1.jpg", "photos/matches.jpg", "photos/napkin-plate.jpg", "photos/party-favors.jpg", "photos/plates.jpg", "photos/truly-cans.jpg"];


	/**This function chooses a photo from the list of photos in the above array, then chooses a random one to insert into each product card.**/

		//Begin the function chain by rendering the categories, which will trigger the other functions, ending with the last .outerHTML statement.
	renderCategories(array);
}	



function renderCategories(categories) {
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
		template += `<li>${renderProduct(product)}</li>`;		
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


function iconClass(product) {
	const favorited = favorites.find(favorite => favorite.name === product.name);
	//returns true or false

	if(favorited) {
		return "favorited";
	} else {
		return "not-favorited";
	}
}

function renderProduct(product) {
		return `
			<product-card data-id="${product.name}">
				<picture>
					<img src="photos/truly-cans.jpg">
					</img>
				</picture>
				
				<text-wrapper>
					<h3 class="name">${product.name}</h1>
				</text-wrapper>
				<card-bottom>
				<div class="price"><p>$${product.price.toFixed(2)}</p></div>
				<div class="sale"><p>$${product.sale.toFixed(2)}</p></div>
					<button class="${iconClass(product)}">
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
				</card-bottom>
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

		const template = `<ul class="favorites-list>`;
		//return a product card for each item in local storage
		favorites.forEach((favorite) => {
			template += `
				<li>
					<product-card data-id="${favorite.name}">
						<picture>
							<img src="">
							</img>
						</picture>
						
						<text-wrapper>
							<h3 class="name">${favorite.name}</h1>
						</text-wrapper>
						<card-bottom>
						<div class="price"><p>${favorite.price}</p></div>
						<div class="sale"><p>$${favorite.sale}</p></div>
							<button class="${iconClass(favorite)}">
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
						</card-bottom>
					</product-card>
				</li>`;
			template += `</ul>`;

			outlet.innerHTML = template;

		})
	}
}	