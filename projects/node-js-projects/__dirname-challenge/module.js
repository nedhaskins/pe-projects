import { fileURLToPath } from 'url';
import { dirname } from 'path';

const __filename = import.meta.url;
const __dirname = dirname( fileURLToPath(__filename) );

function printItems(item1, item2) {
	console.log (item1);
	console.log (item2);
}

export { __filename, __dirname, printItems };