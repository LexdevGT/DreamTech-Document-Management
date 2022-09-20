

const dropArea = document.querySelector(".drop-area");
const dragText = dropArea.querySelector("h2");
const button   = dropArea.querySelector("button");
const input    = dropArea.querySelector("#input-file");
let files;
//console.log(dropArea);
button.addEventListener("click", (e) => {
    console.log("click");
});

input.addEventListener("change", (e) =>{
    files = this.files;
    dropArea.classList.add("active");
    showFiles(files);
    dropArea.classList.remove("active");

});

dropArea.addEventListener("dragover", (e) =>{
    e.preventDefault();
    dropArea.classList.add("active");
    dragText.textContent = "Suelta para subir los archivos";
});
dropArea.addEventListener("dragleave", (e) =>{
    e.preventDefault();
    dropArea.classList.remove("active");
    dragText.textContent = "Arrastra y suelta imágenes";
});

dropArea.addEventListener("drop", (e) =>{
    e.preventDefault();
    dropArea.classList.remove("active");
    dragText.textContent = "Arrastra y suelta imágenes";
});

function showFiles(files){
    if (files.length === undefined) {
        processFile(files);
    } else {
        for (const file of files) {
            processFile(file);
        }
    }
}

function processFile(file) {
    // body...
    const docType = file.type;
    const validExtensions = ['image/jpeg','image/jpg','image/png','image/gif'];

    if(validExtensions.includes(docType)){

    }
}