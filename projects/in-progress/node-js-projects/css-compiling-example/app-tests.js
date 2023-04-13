//testing the Howler package

import { Howl, Howler } from 'howler';

var sound = new Howl({
	src: ['howler-test.mp3'],
	volume: 0.5
});
sound.play();