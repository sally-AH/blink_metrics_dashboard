let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function() {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};


const draggables = document.querySelectorAll('.draggable');
const containers = document.querySelectorAll('.dragContainer');

draggables.forEach(draggable => {
    draggable.addEventListener('dragstart', () => {
        console.log("drag start");
        draggable.classList.add('dragging');
    });
    draggable.addEventListener('dragend', () => {
        draggable.classList.remove('dragging');
    });
});

containers.forEach(container => {
    container.addEventListener('dragover', e => {
        e.preventDefault();
        const afterElement = getDragAfterElement(container, e.clientX); 
        const draggable = document.querySelector('.dragging');
        if (afterElement == null) {
            container.appendChild(draggable);
        } else {
            container.insertBefore(draggable, afterElement);
        }
    });
});

function getDragAfterElement(container, x) { 
    const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')];
    return draggableElements.reduce((closest, child) => {
        const box = child.getBoundingClientRect();
        const offset = x - box.left - box.width / 2; 
        if (offset < 0 && offset > closest.offset) {
            return { offset: offset, element: child };
        } else {
            return closest;
        }
    }, { offset: Number.NEGATIVE_INFINITY }).element;
}








// // JavaScript to make the element resizable
// const resizableElement = document.getElementById('resizableElement');
// let isResizing = false;

// resizableElement.addEventListener('mousedown', e => {
//     isResizing = true;
//     let prevX = e.clientX;

//     document.addEventListener('mousemove', resize);
//     document.addEventListener('mouseup', stopResize);

//     function resize(e) {
//         if (isResizing) {
//             const width = resizableElement.offsetWidth + (e.clientX - prevX);
//             resizableElement.style.width = width + 'px';
//             prevX = e.clientX;
//         }
//     }

//     function stopResize() {
//         isResizing = false;
//         document.removeEventListener('mousemove', resize);
//     }
// });

