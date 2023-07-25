Frontend engineer challenge.

Making a request to a Github repo using the Fetch API to retrieve some JSON data.
	•	First obstacle is overcoming the browser’s CORS policy.  Github has an API to deal with this and their documentation recommends using the Octokit package to facilitate. But there's an easier way!


New vocabulary:

Binary large objects
SHA keys
Git blobs

Okay, well, none if this was necessary after seeing that accessing raw.githubusercontent.com returned the raw data.

So...


now, iterate through data structure and generate HTML elements.

-create a list of categories
-menu reveals all products in menu when hovered over


-Retrieve all categories.  How will this be done?  Loop through all items, and return only one example of each unique category.
To frame it another way...
Return all category instances.
Count the number of instances of each category.
If the number of instances of a category in the array is greater than 1, reduce it to 1.  If it is already 1, keep it at 1.

^^^ used the Set method to remove duplicate category instances.


PART 2: Show all items that have a category in common when that category is hovered over.

//When the mouse hovers over a particular category,
//loop through all of the products.
//For those products whose category matches the hover,
//those products will be shown.

^^^Got this to console.log successfully.

Next step is to get them to render in list form.

Add a new unordered list of items that match the hover category




Add a class to determine grid position?




