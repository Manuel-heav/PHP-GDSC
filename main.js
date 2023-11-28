// Function to fetch and display JSON data
function fetchData() {
  // Use the fetch API to get the JSON data
  fetch("data.json")
    .then((response) => response.json())
    .then((data) => {
      // Process the JSON data
      displayData(data);
    })
    .catch((error) => {
      console.error("Error fetching data:", error);
    });
}

console.log(123);
// Function to display the fetched data
function displayData(data) {
  // Select the output div
  const outputDiv = document.querySelector(".blog_container");

  // Clear any existing content
  outputDiv.innerHTML = "";

  // Check if the data is an array
  if (Array.isArray(data)) {
    // Loop through the array and create HTML elements
    data.forEach((entry, index) => {
      const entryDiv = document.createElement("div");
      entryDiv.innerHTML = `<p>Name: ${entry.name}</p><p>Blog: ${entry.blog}</p>`;
      outputDiv.appendChild(entryDiv);
    });
  } else {
    // If it's not an array, handle it accordingly (assuming an object)
    const entryDiv = document.createElement("div");
    entryDiv.innerHTML = `<p>Name: ${data.name}</p><p>Blog: ${data.blog}</p>`;
    outputDiv.appendChild(entryDiv);
  }
}

// Fetch data when the page loads
window.onload = fetchData;
