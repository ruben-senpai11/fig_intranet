;(function  (){
    const canvas = document.getElementsByClassName('canvas')
    const ctx = canvas.getContext('2D')
})()


function init(){
    const canvas = document.getElementsById('canvas')
    const ctx = canvas.getContext('2D')

    ctx.beginPath()
    ctx.strokeRect(50, 35, 150, 150)
    ctx.beginPath()
    ctx.fillRect(125, 35, 150, 150)  
}

