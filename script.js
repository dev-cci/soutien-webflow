fetch('./get_user.php')
    .then(response => response.json())
    .then(data => console.log(data))



// EQUIVALENT TO
fetch('./get_user.php')
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        console.log(data)
    })



// EQUIVALENT TO
fetch('./get_user.php')
    .then(function(response) {
        return response.text()
    })
    .then(function(data) {
        jsonData = JSON.parse(data)
        console.log(jsonData)
    })