import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const imageInput = document.getElementById("image");
const previewContainer = document.querySelector("#imagePreview");
const imagePreviewContainer = document.querySelector("#imagePreviewContainer");

imageInput.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
        imagePreviewContainer.classList.remove("hidden");

        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement("img");
            img.src = e.target.result;
            img.classList.add("w-full", "h-32", "object-cover", "rounded-md");
            previewContainer.innerHTML = "";
            previewContainer.appendChild(img);
        };
        reader.readAsDataURL(file);
    }
});
