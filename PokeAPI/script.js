// Declares variable on hover on Pokemon's sprites
const hover392 = document.querySelector('.js_hover') 
const hover398 = document.querySelector('.js_hover2')
const hover462 = document.querySelector('.js_hover3')
const hover130 = document.querySelector('.js_hover4')
const hover445 = document.querySelector('.js_hover5')
const hover487 = document.querySelector('.js_hover6')

// Declares variable infos with  Pokemon's id
const id392 = document.querySelector('.id392_infos')
const id398 = document.querySelector('.id398_infos')
const id462 = document.querySelector('.id462_infos')
const id130 = document.querySelector('.id130_infos')
const id445 = document.querySelector('.id445_infos')
const id487 = document.querySelector('.id487_infos')



hover392.addEventListener(
    'click', ()=>
    {
        id392.classList.toggle('opacity_infos')
    }
)

hover398.addEventListener(
    'click', ()=>
    {
        id398.classList.toggle('opacity_infos')
    }
)

hover462.addEventListener(
    'click', ()=>
    {
        id462.classList.toggle('opacity_infos')
    }
)

hover130.addEventListener(
    'click', ()=>
    {
        id130.classList.toggle('opacity_infos')
    }
)

hover445.addEventListener(
    'click', ()=>
    {
        id445.classList.toggle('opacity_infos')
    }
)

hover487.addEventListener(
    'click', ()=>
    {
        id487.classList.toggle('opacity_infos')
    }
)