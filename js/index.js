console.info('in index.js')

let plnWithVAT = document.getElementById('plnWithVAT')
let plnWithoutVAT = document.getElementById('plnWithoutVAT')

let usdValue = document.getElementById('usdValue')
let usdWithVAT = document.getElementById('usdWithVAT')
let usdWithoutVAT = document.getElementById('usdWithoutVAT')

plnWithVAT.oninput = function(){ 
    plnWithoutVAT.value = Math.round( plnWithVAT.value * 80 ) / 100

    usdWithVAT.value = Math.round( plnWithVAT.value / usdValue.value )
    usdWithoutVAT.value = Math.round( plnWithoutVAT.value / usdValue.value )
}

plnWithoutVAT.oninput = function(){ 
    plnWithVAT.value = Math.round( plnWithoutVAT.value * 125 ) / 100

    usdWithVAT.value = Math.round( plnWithVAT.value / usdValue.value )
    usdWithoutVAT.value = Math.round( plnWithoutVAT.value / usdValue.value )
}

usdWithVAT.oninput = function(){
    usdWithoutVAT.value = Math.round( usdWithVAT.value * 0.8 )

    plnWithVAT.value = Math.round( usdWithVAT.value * usdValue.value )
    plnWithoutVAT.value = Math.round( usdWithoutVAT.value * usdValue.value )
}

usdWithoutVAT.oninput = function(){
    usdWithVAT.value = Math.round( usdWithoutVAT.value * 1.25 )

    plnWithVAT.value = Math.round( usdWithVAT.value * usdValue.value )
    plnWithoutVAT.value = Math.round( usdWithoutVAT.value * usdValue.value )
}

usdValue.oninput = function(){
    usdWithVAT.value = Math.round( plnWithVAT.value / usdValue.value )
    usdWithoutVAT.value = Math.round( plnWithoutVAT.value / usdValue.value )
}