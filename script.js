document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const movieList = document.querySelector("#movie-list");
  
    form.addEventListener("submit", function(event) {
      event.preventDefault();
  
      const titleInput = document.querySelector("#title");
      const genreInput = document.querySelector("#genre");
      const releaseDateInput = document.querySelector("#release-date");
      const directorInput = document.querySelector("#director");
  
      const title = titleInput.value;
      const genre = genreInput.value;
      const releaseDate = releaseDateInput.value;
      const director = directorInput.value;
  
      const newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td>${title}</td>
        <td>${genre}</td>
        <td>${releaseDate}</td>
        <td>${director}</td>
      `;
  
      movieList.appendChild(newRow);
  
      titleInput.value = "";
      genreInput.value = "";
      releaseDateInput.value = "";
      directorInput.value = "";
    });
  });
  