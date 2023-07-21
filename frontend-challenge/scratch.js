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
				products: [{...}]
			});

		//If an object with that "name" value already exists, make a new item with the current item's data and push it to the matching object that shares a "cat" value with the "name" value.	
		} else {
			//push the given object to the inner"products" array
			existingCategory.products.push({...});
		}
		return acc;
	}, []);
	return transformedObject;
	console.log(transformedObject);
}


//The object we're going to make has the following data structure:

//For each item in the data array re