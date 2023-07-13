const url = 'https://moviesdatabase.p.rapidapi.com/actors/random';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'f9267b653fmsh72c77395f263c6fp186533jsnf5fe71d23bd6',
		'X-RapidAPI-Host': 'moviesdatabase.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}