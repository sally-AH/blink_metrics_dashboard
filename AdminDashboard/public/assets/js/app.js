let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function() {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};


const draggables = document.querySelectorAll('.draggable');
const containers = document.querySelectorAll('.cardBox');


draggables.forEach(draggable => {
    draggable.addEventListener('dragstart', ()=>{
        console.log("drag start")
        draggable.classList.add('dragging')
    })
    draggable.addEventListener('dragend', () =>{
        draggable.classList.remove('dragging')
    })
})

containers.forEach(container => {
    container.addEventListener('dragover', e =>{
        e.preventDefault()
        const afterElement = getDragAfterElement(container, e.clientX)
        const draggable = document.querySelector('.dragging');
        container.appendChild(draggable)
    })
})

function getDragAfterElement( container, y){
    const draggableElements = [...container.querySelectorAll('draggable:not(.dragging)')]
    draggableElements.reduce((closest, child) =>{
        const box = child.getBoundingClientRect()

    },{offset: Number.POSITIVE_INFINITY})
}