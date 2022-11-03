document.body.style.backgroundColor = "black";
document.body.style.color = "white";


//window's not needed below
localStorage.setItem('emotion', 'rockin\'');


const emotion = localStorage.getItem('emotion');

const message = `The current emotion is ${emotion}.`;

console.log(message);



const data = localStorage;

var count = 0;

count++;

data.setItem('score', JSON.stringify({ score: count }) ); //Looks like an object...but remember...all values are stored as strings

const storedCount = data.getItem('score');

console.log( typeof storedCount == "number" ); //false

console.log( JSON.parse(storedCount).score );


//-------------------//


console.log(data);

var projects = {
    "slug": "projects",
    "header": "projects",
    "copy": [
        "Push your limits. All the time. My current areas of focus include digging deeper into the capabilities of CSS, the history and future of layouts on the Web, dynamic programming, and modular systems. These projects showcase some of the end results of my explorations."
    ],
    "projects": [
        {
            "id": 1,
            "slug": "that-food-truck",
            "name": "that food truck",
            "caseStudy": true,
            "description": "This project drew together the concepts of content strategy, theming, and client relations for the first time.  We were given a choice of fictional clients to collaborate with on creating a brand and web presence for their business.",
            "image": "images/los-angeles-skyline.jpeg",
            "url": "",
            "languages": [
                "HTML",
                "CSS"
            ],
            "keywords": [
                "Pre-Responsive",
                "Theming",
                "Client Relations"
            ]
        },
        {
            "id": 2,
            "slug": "responsive-layout-challenge",
            "name": "responsive layout challenge",
            "caseStudy": true,
            "description": "We made use of all of the responsive elements we had learned at this point in the class to build this layout.",
            "image": "images/saigon-skyline.jpeg",
            "url": "",
            "languages": [
                "HTML",
                "CSS"
            ],
            "keywords": [
                "Responsive"
            ]
        },
        {
            "id": 3,
            "slug": "theme-challenge",
            "name": "outer banks vacation rentals",
            "caseStudy": true,
            "description": "Theming, research, and replication. After choosing a topic to research, we made use of a custom CSS framework to imitate as closely as possible ",
            "image": "images/shoreline-2.jpeg",
            "url": "",
            "languages": [
                "HTML",
                "CSS",
                "PHP"
            ],
            "keywords": [
                "Responsive",
                "Framework",
                "Theming",
                "Research"
            ]
        },
        {
            "id": 4,
            "slug": "php-crud",
            "name": "highways of virginia",
            "caseStudy": true,
            "description": "A responsive multi-page site that allows users to dynamically create their own data as well as make changes to it. As with the previous projects, we continued with the ideas of theming, typography and other layout elements.",
            "image": "images/i-95.jpeg",
            "url": "",
            "languages": [
                "HTML",
                "CSS",
                "PHP"
            ],
            "keywords": [
                "Responsive",
                "Routing",
                "Theming"
            ]
        }
    ]
}

//to reset a value, just use setItem on the same value
data.setItem('emotion', 'still rockin\'');
data.setItem('emotion', 'rumblin\'');


data.setItem('big-item', projects);
data.setItem('big-item', JSON.stringify(projects) );

data.setItem('genre', 'classical');
data.setItem('conductor', 'Leonard Bernstein');
data.setItem('concert-info', JSON.stringify({"composer": "Gustav Mahler", "venue": 'Kennedy Center'}) );

const genre = data.getItem('genre');
const concertInfo = data.getItem('concert-info');

console.log(genre);
console.log(concertInfo);

data.setItem('emotion', 'rather rockish');
data.setItem('emotion', 'rumblin\'');


//Parsing (returning an object to JSON) //

console.log(projects);

console.log( JSON.stringify(projects) );

var tarotDeck = {
    "deck1": {
        "card0": {
            "name": "The Fool",
            "type": "Major Arcana"
        },
        "card1": {
            "name": "The Magician",
            "type": "Major Arcana"
        }
    }
}

// data.setItem('deck-one', JSON.stringify(tarotDeck) );


data.clear();
// var parsed = JSON.parse(deckOne);

// console.log(parsed);

function setItemToLocal(key, value) {
    const data = localStorage;
    data.setItem(`${key}`, `${value}`);
}

function getItemFromLocal(key) {
    const data = localStorage;
    data.getItem(`${key}`);
}

function resetLocalItem(key, value) {
    const data = localStorage;

    //if the key isn't currently in local storage, i.e. if it hasn't been set
    if(!data.setItem(key, value) ) {
        alert(`This key isn't in local storage yet!`);
    } else {
        data.setItem(`${key}`, `${value}`);
    }
}

function setJSONStringToLocal(key, value) {
    const data = localStorage;
    data.setItem(`${key}`, JSON.stringify(value));
}

var tarotDeck = {
    "deck1": {
        "card0": {
            "name": "The Fool",
            "type": "Major Arcana"
        },
        "card1": {
            "name": "The Magician",
            "type": "Major Arcana"
        }
    }
}

setItemToLocal('deck-three', 'standard deck');
setJSONStringToLocal('deck-one', tarotDeck);
resetLocalItem('no-item', 'value');
