// (function (exports, require, file, __filename, __dirname) {

console.log('e', exports);
console.log('r', require);
console.log('m', module);
console.log('f', __filename);
console.log('d', __dirname);

// })();

//By taking this 'closure' form, each Node file is acheiving
//its scope and not leaking into other files.