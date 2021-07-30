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