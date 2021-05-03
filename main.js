//vue-dischi - 09/04/2021
// Author: Lore
/*$(document).ready(function () {

});*/
var app = new Vue({
	el: '#root',
	data: {
		album: [], //array per i dati da api
		generi: [], //array per i generi nella select
		currentGenre: '' //genere selezionato
	},
	mounted () {
		axios.get('https://flynn.boolean.careers/exercises/api/array/music')
			.then((risposta) => {
				this.album = risposta.data.response; //invia array oggetti da API al mio array
				this.album.forEach((item)=>{
					if (!this.generi.includes(item.genre)) { //se non è incluso pusha il genere
						this.generi.push(item.genre)
					}

				})
				//ordinamento in base all'anno
				this.album.sort((a,b) => {
					return a.year - b.year;
				})
			});


	},
	computed: {},
	methods: {}
});