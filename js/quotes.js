dquote();
function dquote(){
	var quotes = [		
		{quote:"Territorio independiente"},
		{quote:"Otros caminos para la música"},
		{quote:"Sonidos colectivos"},
		{quote:"Territorio amigo, territorio independiente"},
		{quote:"A veces experimental, nunca progresivo"},
		{quote:"Escogiendo canciones con cariño desde 1996"},
		{quote:"Cambiamos de dirección"},
		{quote:"Todos juntos"},
		{quote:"Escuchando se entiende la gente"},
		{quote:"Música para las masas"},
		{quote:"Nuevos discos, nuevas drogas"},
		{quote:"Un audífono tú, un audífono yo"},
		{quote:"Escuchando se entiende la gente"},
	];

	var dquote = quotes[Math.floor(Math.random() * quotes.length)];

	var html = '<p>'+dquote['quote']+'</p>'
					;
		

	$('#random_quotes').html(html);
}