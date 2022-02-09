fetch('./get_user.php')
    .then(response => response.json())
    .then(user => {
        let html = `
            <div class="user-info">
                <h3>${user.username}</h3>
                <img src="https://www.lego.com/cdn/cs/set/assets/blt167d8e20620e4817/DC_-_Character_-_Details_-_Sidekick-Standard_-_Batman.jpg?fit=crop&format=jpg&quality=80&width=800&height=426&dpr=1" alt="">
            </div>
            <div class="user-comments">
                <h4>Commentaires</h4>
        `

        user.comments.forEach(comment => {
            html += `<p>${comment.message}</p>`
        });

        html += `</div></div>`

        const userProfile = document.querySelector('.user-profile')
        userProfile.innerHTML = html;
    })

function getAdmin() {
    document.querySelector('body').innerHTML += `<div class="secret-admin">SUPPRIMER TOUTES LES DONNEES</div>`
}