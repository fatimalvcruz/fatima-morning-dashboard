function tiempo_actual()
{
    const hoy = new Date();
    const fecha = `${hoy.getDate()}-${(hoy.getMonth ()+1)}-${hoy.getUTCFullYear()}`;
    const hora = `${hoy.getHours()}:${hoy.getMinutes()}:${hoy.getSeconds()}`;
    const fechahora = `${fecha} ${hora}`;
    
    document.getElementById('tiempo').innerHTML = fechahora;
    
    setTimeout(tiempo_actual, 1000);
}

window.onload = function(){
    tiempo_actual();

    document.getElementById('defineParallax').addEventListener('change', (event) => {
        const p = document.getElementById('move');
        p.classList.remove('on', 'off');

        if (event.target.checked) {
            p.classList.add('on');
        } else {
            p.classList.add('off');
        }
    });

    document.getElementById('botonFrase').addEventListener('click', () => displayFrase() );

    displayFrase();
};

function displayFrase()
{
    const frase = 
        [
            {
                "quote":"Piensa, sueña, cree y atrévete",
                "autor": "Walt Disney"
            },
            {
                "quote":"La edad no es barrera. Es una limitación que pones en tu mente",
                "autor": "Jackie Joyner-Kersee"
            },
            {
                "quote":"Si puedes soñarlo, puedes hacerlo",
                "autor": "Walt Disney"
            },
            {
                "quote":"Para que alguien te tome en serio, primero te tienes que tomar en serio tú",
                "autor": "Mario Alonso Puig"
            },
            {
                "quote":"Uno de los ingredientes que aumentan nuestras posibilidades de tener éxito en la vida es el mantener una mentalidad positiva en medio de la dificultad",
                "autor": "Mario Alonso Puig"
            },
            {
                "quote":"Cree que puedes y casi lo habrás logrado",
                "autor": "Theodore Roosevelt"
            },
            {
                "quote":"Cuando dejo ir lo que soy, me convierto en lo que debería ser",
                "autor": "Lao Tzu"
            },
            {
                "quote":"Existe al menos un rincón del universo que con toda seguridad puedes mejorar, y eres tú mismo",
                "autor": "Aldous Huxley"
            }
        ];

        const randomItem= frase[Math.floor(Math.random()*frase.length)];

        document.getElementById('frasedia').innerHTML = randomItem.quote;
        document.getElementById('autor').innerHTML = randomItem.autor;

}




