const productWrapper = document.querySelector(".product-template-default .product")

if (productWrapper){
    productWrapper.classList.add("single-product-custom-wrapper");
    
    var desc = document.querySelector(".product-template-default .single-product-custom-wrapper .woocommerce-tabs.wc-tabs-wrapper")
    
    setTimeout(()=>{
        const productTrigger = document.querySelector(".woocommerce-product-gallery__trigger")
        const productTriggerImg = productTrigger.querySelector("img")
        const i = document.createElement("i")
        i.className = "fas fa-search"
    
        productTrigger.removeChild(productTriggerImg)
        productTrigger.appendChild(i)
    }, 100)
}

if(!desc) {
    const new_div_desc = document.createElement("div")
    new_div_desc.className = "woocommerce-tabs wc-tabs-wrapper"
    productWrapper.append(new_div_desc)
}