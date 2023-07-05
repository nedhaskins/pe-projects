var array1 = [
   {
      cat: "napkins",
      product: "Cocktail",
      price: "1.00",
      sale: ".60",
   },
   {
      cat: "cups + plates",
      product: "Shot Glasses",
      price: "3.40",
      sale: "2.53",
   },
   {
      cat: "napkins",
      product: "Luncheon",
      price: "1.00",
      sale: ".57",
   },
   {
      cat: "cups + plates",
      product: "Can Coolers",
      price: "3.40",
      sale: "2.52",
   },
];

var array2 = [];

// Iterate over each item in array1
for (var i = 0; i < array1.length; i++) {
   var item1 = array1[i];
   var existingCategory = null;

   // Check if the category already exists in array2
   for (var j = 0; j < array2.length; j++) {
      if (array2[j].name === item1.cat) {
         existingCategory = array2[j];
         break;
      }
   }

   // If the category doesn't exist, create a new category object
   if (!existingCategory) {
      existingCategory = {
         name: item1.cat,
         products: [],
      };
      array2.push(existingCategory);
   }

   // Create a new product object and add it to the products array
   var newProduct = {
      name: item1.product,
      price: parseFloat(item1.price),
      sale: parseFloat(item1.sale),
   };
   existingCategory.products.push(newProduct);
}

console.log(array2);
