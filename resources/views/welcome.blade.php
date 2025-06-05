<label for="starsInput">Enter Rating (1 to 5):</label>
<input type="number" id="starsInput" min="1" max="5" value="3">

<div id="starPreview" style="margin-top: 10px; font-size: 30px;"></div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("starsInput");
    const preview = document.getElementById("starPreview");

    function renderStars(count) {
        preview.innerHTML = '';
        for (let i = 1; i <= 5; i++) {
            const star = document.createElement("span");
            star.innerHTML = "&#9733;"; // النجمة
            star.style.color = i <= count ? "gold" : "lightgray";
            preview.appendChild(star);
        }
    }

    input.addEventListener("input", function () {
        let value = parseInt(this.value);
        if (isNaN(value) || value < 1) value = 1;
        if (value > 5) value = 5;
        renderStars(value);
    });

    renderStars(parseInt(input.value)); // عرض النجوم أول مرة
});

</script>
