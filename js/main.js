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
};

const array_frase =[
    'Piensa, sueña, cree y atrévete - Walt Disney',
    'La edad no es barrera. Es una limitación que pones en tu mente - Jackie Joyner-Kersee',
    'Si puedes soñarlo, puedes hacerlo - Walt Disney',
    'Para que alguien te tome en serio, primero te tienes que tomar en serio tú - Mario Alonso Puig',
    'Uno de los ingredientes que aumentan nuestras posibilidades de tener éxito en la vida es el mantener una mentalidad positiva en medio de la dificultad - Mario Alonso Puig',
    'Cree que puedes y casi lo habrás logrado - Theodore Roosevelt',
    'Cuando dejo ir lo que soy, me convierto en lo que debería ser - Lao Tzu', 
    'Existe al menos un rincón del universo que con toda seguridad puedes mejorar, y eres tú mismo - Aldous Huxley'];   

document.getElementById('frasedia').innerHTML = array_frase[1];

console.log(array_frase[5]);


