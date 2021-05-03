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
		const apikey = 'fff0';
		axios.get(`dati.php?api=${apikey}`)
			.then((risposta) => {

				this.album = risposta.data; //invia array oggetti da API al mio array
				for (let key in this.album) {
					for (const chiave in this.album[key]) {
						tempGenere = this.album[key]['genre']
						if (!this.generi.includes(tempGenere)) { //se non è incluso pusha il genere
							this.generi.push(tempGenere)
						}
					}
				}
				//ordinamento in base all'anno
				this.album.sort((a,b) => {
					return a.year - b.year;
				})
			});
	},
	computed: {},
	methods: {}
});