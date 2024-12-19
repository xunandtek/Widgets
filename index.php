<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Placeholder</title>
    <style>
        .loading {
            display: none;
            width: 50px;
            height: 50px;
            border: 5px solid lightgray;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

    <button id="loadData">Load Data</button>
    <div id="loading" class="loading"></div>
    <div id="data"></div>

    <script src="app.js"></script>
</body>

<script>
    document.getElementById('loadData').addEventListener('click', fetchData);

function fetchData() {
    const loading = document.getElementById('loading');
    const dataContainer = document.getElementById('data');

    // Show loading animation
    loading.style.display = 'block';
    dataContainer.innerHTML = '';

    // Simulate an asynchronous query
    setTimeout(() => {
        // Here you would make your actual query, for example using fetch or XMLHttpRequest
        // Simulate a response
        const responseData = 'Here is the data from the server';

        // Hide loading animation
        loading.style.display = 'none';

        // Display the data
        dataContainer.innerHTML = responseData;
    }, 2000); // Simulated 2-second delay for the query
}

</script>
</html>
