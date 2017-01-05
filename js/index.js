console.info('in index.js')

// ZL
let plnWithVAT = document.getElementById('plnWithVAT')
let plnWithoutVAT = document.getElementById('plnWithoutVAT')

// USD
let usdWithVAT = document.getElementById('usdWithVAT')
let usdWithoutVAT = document.getElementById('usdWithoutVAT')

// BYN
let bynWithVAT = document.getElementById('bynWithVAT')
let bynWithoutVAT = document.getElementById('bynWithoutVAT')

// exchange cource
let usdToZlValue = document.getElementById('usdToZlValue')
let usdToBYNValue = document.getElementById('usdToBYNValue')


plnWithVAT.oninput = function () {
    plnWithoutVAT.value = Math.round(plnWithVAT.value * 80) / 100

    usdWithVAT.value = Math.round(plnWithVAT.value / usdToZlValue.value)
    usdWithoutVAT.value = Math.round(plnWithoutVAT.value / usdToZlValue.value)

    bynWithVAT.value = Math.round( usdWithVAT.value * nbrbBYNToUSDValue * 10 ) / 10
    bynWithoutVAT.value = Math.round( usdWithoutVAT.value * nbrbBYNToUSDValue * 10 ) / 10

    triggerInputs()
}

plnWithoutVAT.oninput = function () {
    plnWithVAT.value = Math.round(plnWithoutVAT.value * 125) / 100

    usdWithVAT.value = Math.round(plnWithVAT.value / usdToZlValue.value)
    usdWithoutVAT.value = Math.round(plnWithoutVAT.value / usdToZlValue.value)

    bynWithVAT.value = Math.round( usdWithVAT.value * nbrbBYNToUSDValue * 10 ) / 10
    bynWithoutVAT.value = Math.round( usdWithoutVAT.value * nbrbBYNToUSDValue * 10 ) / 10

    triggerInputs()
}

usdWithVAT.oninput = function () {
    usdWithoutVAT.value = Math.round(usdWithVAT.value * 0.8)

    plnWithVAT.value = Math.round(usdWithVAT.value * usdToZlValue.value)
    plnWithoutVAT.value = Math.round(usdWithoutVAT.value * usdToZlValue.value)

    bynWithVAT.value = Math.round( usdWithVAT.value * nbrbBYNToUSDValue * 10 ) / 10
    bynWithoutVAT.value = Math.round( usdWithoutVAT.value * nbrbBYNToUSDValue * 10 ) / 10

    triggerInputs()
}

usdWithoutVAT.oninput = function () {
    usdWithVAT.value = Math.round(usdWithoutVAT.value * 1.25)

    plnWithVAT.value = Math.round(usdWithVAT.value * usdToZlValue.value)
    plnWithoutVAT.value = Math.round(usdWithoutVAT.value * usdToZlValue.value)

    bynWithVAT.value = Math.round( usdWithVAT.value * nbrbBYNToUSDValue * 10 ) / 10
    bynWithoutVAT.value = Math.round( usdWithoutVAT.value * nbrbBYNToUSDValue * 10 ) / 10

    triggerInputs()
}

bynWithVAT.oninput = function () {
    bynWithoutVAT.value = Math.round( bynWithVAT.value * 0.8 )

    usdWithVAT.value = Math.round( bynWithVAT.value / nbrbBYNToUSDValue )
    usdWithoutVAT.value = Math.round( bynWithoutVAT.value / nbrbBYNToUSDValue )

    plnWithVAT.value = Math.round(usdWithVAT.value * usdToZlValue.value)
    plnWithoutVAT.value = Math.round(usdWithoutVAT.value * usdToZlValue.value)

    triggerInputs()
}

bynWithoutVAT.oninput = function () {
    bynWithVAT.value = Math.round( bynWithoutVAT.value / 0.8 )

    usdWithVAT.value = Math.round( bynWithVAT.value / nbrbBYNToUSDValue )
    usdWithoutVAT.value = Math.round( bynWithoutVAT.value / nbrbBYNToUSDValue )

    plnWithVAT.value = Math.round(usdWithVAT.value * usdToZlValue.value)
    plnWithoutVAT.value = Math.round(usdWithoutVAT.value * usdToZlValue.value)
    
    triggerInputs()
}

usdToZlValue.oninput = function () {
    usdWithVAT.value = Math.round(plnWithVAT.value / usdToZlValue.value)
    usdWithoutVAT.value = Math.round(plnWithoutVAT.value / usdToZlValue.value)

    bynWithVAT.value = Math.round( usdWithVAT.value * nbrbBYNToUSDValue * 10 ) / 10
    bynWithoutVAT.value = Math.round( usdWithoutVAT.value * nbrbBYNToUSDValue * 10 ) / 10

    triggerInputs()
}

usdToBYNValue.oninput = function () {
    nbrbBYNToUSDValue = usdToBYNValue.value

    bynWithVAT.value = Math.round( usdWithVAT.value * nbrbBYNToUSDValue * 10 ) / 10
    bynWithoutVAT.value = Math.round( usdWithoutVAT.value * nbrbBYNToUSDValue * 10 ) / 10

    triggerInputs()
}

function triggerInputs() {
    $(".js_inputsDiv .mdl-textfield").addClass("is-dirty")
}

// get currencys
let nbrbBYNToUSDValue = 0;

$.ajax({
  url: "http://www.nbrb.by/API/ExRates/Rates/145"
}).done(function( data ) {
  nbrbBYNToUSDValue =  data.Cur_OfficialRate
  usdToBYNValue.value = nbrbBYNToUSDValue
});