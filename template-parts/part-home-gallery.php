<?php 
$images = [
    "newyork_01.jpeg",
    "newyork_02.jpeg",
    "newyork_03.jpeg",
    "newyork_04.jpg",
    "newyork_05.jpg",
    "newyork_06.jpg"
];
?>

<section class="max-w-[1200px] mx-auto p-4">
    <h2 class="font-bold text-3xl mb-4">Gallery</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="imageGallery">
        <?php
        foreach($images as $image) {
            echo '
            <div>
                <img 
                    class="aspect-square object-cover rounded-lg saturate-50 hover:saturate-100 cursor-pointer" 
                    src="' . get_theme_file_uri('/assets/' . $image) . '" 
                    alt="New York Tourism">
            </div>';
        }
        ?>    
    </div>
</section>

<!-- Modal -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
    <div class="relative max-w-[50%] max-h-[90%]">
        <button id="closeModalButton" class="absolute top-2 right-2 text-white text-2xl font-bold"><i class="fa-solid fa-xmark"></i></button>
        <img id="modalImage" class="rounded-lg max-w-full h-[90%] object-contain" src="" alt="Modal Image">
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const closeModalButton = document.getElementById("closeModalButton");
    const imageGallery = document.getElementById("imageGallery");

    // Open modal on image click
    imageGallery.addEventListener("click", (event) => {
        if (event.target.tagName === "IMG") {
            modalImage.src = event.target.src;
            modal.classList.remove("hidden");
        }
    });

    // Close modal on button click
    closeModalButton.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    // Optional: Close modal when clicking outside the image
    modal.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.classList.add("hidden");
        }
    });
});
</script>
