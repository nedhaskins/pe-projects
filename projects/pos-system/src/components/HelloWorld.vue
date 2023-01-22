<script setup>
	
	import { reactive } from 'vue';

	const formData = reactive({
		prompt1: 'Enter a genre.',
		prompt2: 'Enter a time period',
		genre: "",
		timePeriod: "",
		output: ""
	});

	function formSubmit() {
		formData.output = `Your favorite genre? ${formData.genre}. Your favorite time period? ${formData.timePeriod}.`;
	};
</script>

 
<template>
	<form>
	<h3>Test Form</h3>
	<label>{{formData.prompt1}}</label>
	<input v-model='formData.genre'>
	<label>{{formData.prompt2}}</label>
	<input v-model='formData.timePeriod'/>
	<button @click.prevent='formSubmit'>Submit</button>
	<output>{{formData.output}}</output>
	</form>
</template>


<style>

</style>