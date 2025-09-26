// === Dark Mode ===
const btnMode = document.getElementById("btnMode");
btnMode.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    btnMode.textContent = document.body.classList.contains("dark")
        ? "Ubah ke Light Mode"
        : "Ubah ke Dark Mode";
});

// === Form Kontak ===
const form = document.getElementById("formKontak");
const outputPesan = document.getElementById("outputPesan");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const nama = document.getElementById("nama").value;
    outputPesan.textContent = `Terima kasih ${nama}, pesanmu sudah kami terima!`;
    form.reset();
});

// === Contoh Fetch API ===
async function getAnime() {
    try {
        const response = await fetch("https://api.jikan.moe/v4/anime/1");
        const data = await response.json();
        console.log("Contoh Fetch API:", data.data.title);
    } catch (error) {
        console.error("Error fetch API:", error);
    }
}
getAnime();
