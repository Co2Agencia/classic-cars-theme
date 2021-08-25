const navIcon = document.getElementById("nav-icon")
const navMenu = document.querySelector("#custom-nav-bar .custom-nav-bar-menu")
const navTel = document.querySelector("#custom-nav-bar .nav-bar-tel")
const navCont = document.getElementById("custom-nav-bar")
const productWrapper = document.querySelector(".product-template-default .product")
const productos_destacados = document.querySelector("#sector-destacados .products")

class NavBar{
    /* 
        - Analiza el tamaño de pantalla para saber que nav va
        - "pc" Es para nav compu
        - "mobile" Es para nav Telefono
    */
    navCheck(){
        let screenWidth = new Utils().getWidth()
        if(screenWidth < 1000){
            return "mobile"
        }

        else{
            return "pc"
        }
    }

    /* 
        - Le pasamos el nombre de dispositivo ("pc" o "mobile") y
        nos elimina o crea el logo para el nav mobile
    */
    changeLogo(device_name){
        let logoClassName = "nav-logo-mobile"
        let navLogo = document.querySelector("#custom-nav-bar .nav-bar-logo")
        let checkLogo = document.querySelector("."+logoClassName)

        let logoClone = navLogo.cloneNode(true)
        logoClone.className = logoClassName

        let logoImg = logoClone.getElementsByTagName("img")
        logoImg = logoImg[0]

        if(device_name == "mobile"){
            if (!checkLogo) navCont.insertAdjacentElement("afterbegin",logoClone)
        }

        else{
            if (checkLogo) checkLogo.parentNode.removeChild(checkLogo)
        }
        
    }

    /* 
        - Hace aparecer o desaparecer el menu mobile segun
        el parámetro que pongamos ("mostrar" o "esconder")
    */
    mobileMenu(mostrar_o_esconder){
        if(mostrar_o_esconder == "mostrar"){
            navCont.style.paddingBottom = "2rem"

            navTel.style.display = "flex"
            navMenu.style.display = "flex"
        }
        else{
            navCont.style.paddingBottom = "0"
            navMenu.style.display = "none"
            navTel.style.display = "none"
        }
    }
}


class Utils{
    getWidth(){
        var win = window,
        doc = document,
        docElem = doc.documentElement,
        body = doc.getElementsByTagName('body')[0],
        x = win.innerWidth || docElem.clientWidth || body.clientWidth;

        return x
    }

    getHeight(){
        var win = window,
        doc = document,
        docElem = doc.documentElement,
        body = doc.getElementsByTagName('body')[0],
        y = win.innerHeight|| docElem.clientHeight|| body.clientHeight;

        return y
    }

    /* 
        - Nos devuelve la cantidad de items por slide
        segun el ancho de pantalla
    */
    checkSlideAmount(){
        const width = this.getWidth()
        const xlScreen = 1800
        const lScreen = 1250
        const mScreen = 870

        if(!window.mobileCheck()){
            if(width > xlScreen) return 4
            else if(width > lScreen && width < xlScreen) return 3
            else if(width > mScreen && width < lScreen) return 2
            else return 1
        }
        else{
            return 1
        }
    }
}

// Podemos escribir "window.mobileChek" y nos dice si el dispositivo es de un telefono o no
window.mobileCheck = function() {
    let check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
};


navIcon.addEventListener("change", ()=>{
    let checkNav = navIcon.checked

    if(checkNav){
        new NavBar().mobileMenu("mostrar")
    }
    else{
        new NavBar().mobileMenu("esconder")
    }
})

document.addEventListener('DOMContentLoaded', (event) => {
    let navCheck = new NavBar().navCheck()
    new NavBar().changeLogo(navCheck)
});

window.addEventListener("resize", ()=>{
    let navCheck = new NavBar().navCheck()
    new NavBar().changeLogo(navCheck)
    navIcon.checked = false


    if(navCheck == "pc"){
        new NavBar().mobileMenu("mostrar")
        navCont.style.paddingBottom = "0"
    }
    else{
        new NavBar().mobileMenu("esconder")
    }
})


/* Checkeando si se hace click fuera del header */
document.addEventListener("click", e=>{
    let $target = e.target;
    let checkHeader = $target.closest("#custom-nav-bar")
    let checkNav = new NavBar().navCheck()

    if(!checkHeader && checkNav == "mobile"){
        navIcon.checked = false
        new NavBar().mobileMenu("esconder")
    }
})


/* Single Product Scripts */
if (productWrapper){
    productWrapper.classList.add("single-product-custom-wrapper");
    
    setTimeout(()=>{
        const productTrigger = document.querySelector(".woocommerce-product-gallery__trigger")
        const productTriggerImg = productTrigger.querySelector("img")
        const i = document.createElement("i")
        i.className = "fas fa-search"
    
        productTrigger.removeChild(productTriggerImg)
        productTrigger.appendChild(i)
    }, 10)
} 



/*
    - Le pasamos el elemento padre, el class de los hijos y 
    la cantidad de hijos por contenedor
    - Crea un contenedor cada x cantidad de hijos
    - Agrega los class para que puedan ser slides
*/
function crear_cont(el_padre, class_el_hijo, hijos_por_cont, slide_bool = false){
    let hijos = el_padre.querySelectorAll(class_el_hijo)
    let hijos_len = hijos.length
    let check_len = hijos_len % 1
    let cant_cont = Math.round(hijos_len / hijos_por_cont) + check_len
    let hijos_counter = hijos_por_cont

    if (slide_bool){
        el_padre.classList.add("splide__list")
        el_padre.parentNode.classList.add("splide__track")
    }

    for(let i = 1; i <= cant_cont; i++){
        let hijo_cont = document.createElement("div")
        hijo_cont.className = `contenedor-hijos-${i} contenedor-hijos`

        if (slide_bool) hijo_cont.classList.add("splide__slide")

        for(let i = (hijos_counter - hijos_por_cont); i < hijos_counter; i++){
            let hijo = hijos[i]
            if(hijo){
                hijo_cont.appendChild(hijo)
            }
        }

        hijos_counter += hijos_por_cont
        el_padre.appendChild(hijo_cont)
    }
}

// Pone los productos destacados en contenedores segun el ancho de la pantalla para 
// hacer el slider

if(productos_destacados){
    let items_amount = new Utils().checkSlideAmount()

    crear_cont(productos_destacados, "li.product", items_amount, true)
}
