const btnContenedor = document.querySelector(".tienda-categorias-btn-contenedor")
const btnsCat = btnContenedor.querySelectorAll(".tienda-categorias-btn")
const pagBtnsCat = document.querySelectorAll(".tienda-slider-paginator .paginator-btn")
const catSlider = document.querySelector("#tienda-sector-slider-contenedor .tienda-sector-slider")
const slideList = catSlider.querySelectorAll(".splide__list")
const catSliderProds = catSlider.querySelectorAll("ul li")


class catPaginator{
    /* 
        - Le pasamos donde hizo click el usuario e identifica cual es el sector
        - Actualiza los dos botones
        - Tambien mueve el slider de categorias
    */
    actualizarBtns(btn_element){
        const sector = btn_element.getAttribute("data-sector")
        const $class = btn_element.classList
        const xTranslate = parseInt(sector) * 100

        this.removeBtnActive()

        // Pone los class active a los botones
        btnsCat.forEach(btn => {
            let btnSector = btn.getAttribute("data-sector")

            if(sector == btnSector){
                btn.classList.add("btn-categorias-active")
            }
        });

        pagBtnsCat.forEach(btn => {
            let btnSector = btn.getAttribute("data-sector")

            if(sector == btnSector){
                btn.classList.add("paginator-btn-active")
            }
        });

        catSlider.style.transform = `translateX(-${xTranslate}vw)`
    }

    /*
        - Elimina los class list active de los botones
    */
    removeBtnActive(){
        btnsCat.forEach(btn => {
            if(btn.classList.contains("btn-categorias-active")){
                btn.classList.remove("btn-categorias-active")
            }
        });
        pagBtnsCat.forEach(btn => {
            if(btn.classList.contains("paginator-btn-active")){
                btn.classList.remove("paginator-btn-active")
            }
        });
    }
}

btnsCat.forEach(btn => {
    btn.addEventListener("click", e=>{
        new catPaginator().actualizarBtns(btn)
    })
});

pagBtnsCat.forEach(btn => {
    btn.addEventListener("click", e=>{
        new catPaginator().actualizarBtns(btn)
    })
});


/* Categorias Productos Slider */
// Pone la carta de los productos dentro de un div con class "splide__slide"
slideList.forEach(slide => {
    const lis = slide.querySelectorAll("li")

    lis.forEach(li => {
        const slideCont = document.createElement("div")

        slideCont.classList.add("splide__slide")
        slideCont.appendChild(li)
        slide.appendChild(slideCont)
    });
});

